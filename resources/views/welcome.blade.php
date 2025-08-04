@extends('layout')

@section('content')
    <section class="homesection">
        <div>
            <h1>Sua viagem, <br> do seu jeito</h1>
            <p>Descubra roteiros completos com hospedagens, passeios e restaurantes personalizados para você</p>
        </div>
        <div class="homesection-image">
            <img src="assets/img/logo_com_texto.png" alt="WhereTo">
        </div>
    </section>

    <section class="howsection">
        <div class="howsection_content">
            <div class="howsection-card">
                <h2>🔍 1º passo — Conte pra gente como é a sua viagem ideal</h2>
                <p>Fale sobre o destino, datas, estilo de viagem, quem vai com você e o que não pode faltar na experiência.
                </p>
            </div>
            <div class="howsection-card">
                <h2>🧩 2º passo — Deixe a IA montar tudo pra você</h2>
                <p>Com base nas suas preferências, criamos um roteiro completo com hospedagem, passeios, restaurantes e
                    dicas imperdíveis.</p>
            </div>
            <div class="howsection-card">
                <h2>📅 3º passo — Receba um roteiro sob medida, pronto pra usar</h2>
                <p>Visualize e leve com você um plano de viagem personalizado, prático e feito especialmente para o seu
                    jeito de viajar.</p>
            </div>
        </div>
    </section>

    <section class="form">
        <div class="form-content">
            <div class="form-card">
                <h2>👨🏻‍👩🏻‍👦🏻 Quantas pessoas vão viajar?</h2>
                <form action="/action_page.php" method="get">
                    <div class="option-row">
                        <input type="radio" id="1pessoa" name="pessoas" value="1 pessoa">
                        <label for="1"> 1 pessoa</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="2pessoas" name="pessoas" value="2 pessoas">
                        <label for="2"> 2 pessoas</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="3pessoas" name="pessoas" value="3 pessoas">
                        <label for="3"> 3 pessoas</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="4pessoas" name="pessoas" value="4 pessoas">
                        <label for="4"> 4 pessoas</label>
                    </div>
                </form>
            </div>
            <div class="form-card">
                <h2>📅 Quantos dias a viagem vai durar?</h2>
                <form action="/action_page.php" method="get">
                    <div class="option-row">
                        <input type="radio" id="5dias" name="dias" value="5 dias">
                        <label for="5dias">5 dias</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="7dias" name="dias" value="7 dias">
                        <label for="7dias">7 dias</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="9dias" name="dias" value="9 dias">
                        <label for="9dias">9 dias</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="12dias" name="dias" value="12 dias">
                        <label for="12dias">12 dias</label>
                    </div>
                </form>
            </div>
            <div class="form-card">
                <h2>🏖️ Em qual estação do ano você prefere viajar?</h2>
                <form action="/action_page.php" method="get">
                    <div class="option-row">
                        <input type="radio" id="primavera" name="estação" value="primavera">
                        <label for="1">Primavera</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="verão" name="estação" value="verão">
                        <label for="2">Verão</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="outono" name="estação" value="outono">
                        <label for="3">Outono</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="inverno" name="estação" value="inverno">
                        <label for="4">Inverno</label>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
