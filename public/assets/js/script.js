// Função menu hamburguer mobile

document.addEventListener("DOMContentLoaded", function () {
    const mobileLinks = document.querySelectorAll(".nav-link-mobile");
    const toggleButton = document.querySelector(
        '[data-collapse-toggle="navbar-sticky"]'
    );
    const navbar = document.getElementById("navbar-sticky");

    mobileLinks.forEach((link) => {
        link.addEventListener("click", () => {
            if (window.innerWidth < 768) {
                const isExpanded =
                    toggleButton.getAttribute("aria-expanded") === "true";

                if (isExpanded && toggleButton) {
                    toggleButton.click();
                }
            }
        });
    });
});

// Função principal
async function criarRoteiro() {
    // Pegar dados do formulário
    const dados = pegarDadosFormulario();

    // Verificar se preencheu o básico
    if (!dados.pessoas || !dados.continente) {
        alert('Por favor, selecione pelo menos o número de pessoas e o continente!');
        return;
    }

    // Mostrar loading no botão
    const botao = document.querySelector('.btn-generate');
    const textoOriginal = botao.textContent;
    botao.innerHTML = 'Criando Roteiro<span class="dots">...</span>';
    botao.disabled = true;

    // Animação das bolinhas
    if (!document.querySelector('#dots-style')) {
        const style = document.createElement('style');
        style.id = 'dots-style';
        style.textContent = '.dots { animation: blink 1s infinite; } @keyframes blink { 0%, 50% { opacity: 1; } 51%, 100% { opacity: 0; } }';
        document.head.appendChild(style);
    }

    try {
        // Enviar para o Laravel
        const response = await fetch('/gerar-roteiro', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(dados)
        });

        const resultado = await response.json();

        if (resultado.success) {
            mostrarRoteiro(resultado.roteiro);
        } else {
            alert('Erro: ' + resultado.message);
        }

    } catch (error) {
        alert('Erro ao gerar roteiro. Tente novamente!');
        console.error('Erro:', error);
    } finally {
        // Voltar botão ao normal
        botao.textContent = textoOriginal;
        botao.disabled = false;
    }
}

// Pegar dados do formulário
function pegarDadosFormulario() {
    const pessoas = document.querySelector('input[name="pessoas"]:checked')?.value || '';
    const criancas = document.querySelector('input[name="crianças"]:checked')?.value || '';
    const estacao = document.querySelector('input[name="estacao"]:checked')?.value || '';
    const dias = document.querySelector('input[name="dias"]:checked')?.value || '';
    const continente = document.querySelector('input[name="continente"]:checked')?.value || '';

    // Para interesses
    const gastronomia = document.querySelector('input[name="gastronomia"]:checked')?.value || '';
    const museus = document.querySelector('input[name="museus"]:checked')?.value || '';
    const praia = document.querySelector('input[name="praia"]:checked')?.value || '';
    const aventura = document.querySelector('input[name="aventura"]:checked')?.value || '';
    const relaxamento = document.querySelector('input[name="relaxamento"]:checked')?.value || '';

    const interesses = [gastronomia, museus, praia, aventura, relaxamento].filter(item => item !== '');

    return {
        pessoas,
        criancas,
        estacao,
        dias,
        continente,
        interesses
    };
}

// Mostrar o roteiro na tela
function mostrarRoteiro(roteiro) {
    // Remove resultado anterior
    const resultadoAntigo = document.querySelector('.resultado-roteiro');
    if (resultadoAntigo) {
        resultadoAntigo.remove();
    }

    // Cria div para o resultado
    const div = document.createElement('div');
    div.className = 'resultado-roteiro';
    div.style.cssText = `
        background: white;
        color: #333;
        padding: 30px;
        margin: 40px auto;
        border-radius: 20px;
        max-width: 800px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        white-space: pre-wrap;
        font-family: Arial, sans-serif;
        line-height: 1.6;
    `;

    div.innerHTML = `
        <h2 style="color: #073450; margin-top: 0; text-align: center;">🌟 Seu Roteiro de Viagem</h2>
        <div style="border-top: 2px solid #073450; margin: 20px 0; padding-top: 20px;">
            ${roteiro.replace(/\n/g, '<br>')}
        </div>
        <button onclick="this.parentElement.remove()" style="
            background: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            float: right;
            margin-top: 20px;
        ">Fechar</button>
        <div style="clear: both;"></div>
    `;

    // Adiciona na página
    const formsection = document.querySelector('.formsection');
    formsection.parentNode.insertBefore(div, formsection.nextSibling);

    // Rola para mostrar o resultado
    div.scrollIntoView({ behavior: 'smooth' });
}

// Conectar o botão
document.addEventListener('DOMContentLoaded', function() {
    const botao = document.querySelector('.btn-generate');
    if (botao) {
        botao.addEventListener('click', criarRoteiro);
    }
});
