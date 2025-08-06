<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function gerarRoteiro(Request $request)
    {
        try {
            // Pegar os dados do formulário
            $pessoas = $request->pessoas ?? '';
            $criancas = $request->criancas ?? '';
            $estacao = $request->estacao ?? '';
            $dias = $request->dias ?? '';
            $continente = $request->continente ?? '';
            $interesses = $request->interesses ?? [];

            // Verificar se tem o mínimo necessário
            if (empty($pessoas) || empty($continente)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Preencha pelo menos o número de pessoas e continente!'
                ]);
            }

            // Criar o texto para a IA
            $prompt = $this->criarPrompt($pessoas, $criancas, $estacao, $dias, $continente, $interesses);

            // Chamar a IA
            $roteiro = $this->chamarGemini($prompt);

            return response()->json([
                'success' => true,
                'roteiro' => $roteiro
            ]);

        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao gerar roteiro: ' . $e->getMessage()
            ]);
        }
    }

    private function criarPrompt($pessoas, $criancas, $estacao, $dias, $continente, $interesses)
    {
        $prompt = "Crie um roteiro de viagem completo e detalhado:\n\n";

        if ($pessoas) {
            $prompt .= "Número de pessoas: $pessoas\n";
        }

        if ($criancas && $criancas !== "0 criança") {
            $prompt .= "Crianças: $criancas\n";
        }

        if ($dias) {
            $prompt .= "Duração: $dias\n";
        }

        if ($estacao) {
            $prompt .= "Estação preferida: $estacao\n";
        }

        if ($continente) {
            $prompt .= "Destino: $continente\n";
        }

        if (!empty($interesses)) {
            $prompt .= "Interesses: " . implode(', ', $interesses) . "\n";
        }

        $prompt .= "\nPor favor, inclua no roteiro:
- Sugestão de país/cidade específica
- Cronograma dia a dia
- Principais pontos turísticos
- Idéias de passeios
- Restaurantes recomendados
- O que comer de típico
- Dicas locais";

        if ($criancas && $criancas !== "0 criança") {
            $prompt .= "\n- Dicas especiais para crianças";
        }

        return $prompt;
    }

    private function chamarGemini($prompt)
    {
        $apiKey = env('GEMINI_API_KEY');

        if (!$apiKey) {
            throw new Exception('API Key do Gemini não configurada');
        }

        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=" . $apiKey;

        $data = [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $prompt]
                    ]
                ]
            ]
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            throw new Exception('Erro na API do Gemini');
        }

        $result = json_decode($response, true);

        if (!isset($result['candidates'][0]['content']['parts'][0]['text'])) {
            throw new Exception('Resposta inválida da API');
        }

        return $result['candidates'][0]['content']['parts'][0]['text'];
    }
}
