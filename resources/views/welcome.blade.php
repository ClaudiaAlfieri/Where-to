@extends('layout')

@section('content')
    <section class="homesection">
        <div>
            <h1>Sua viagem, <br> do seu jeito</h1>
            <p>Descubra roteiros únicos com passeios, restaurantes e dicas feitos sob medida para você.</p>
        </div>
        <div class="homesection-image">
            <img src="assets/img/logo_com_texto.png" alt="WhereTo">
        </div>
    </section>

    <section class="howsection">
        <div class="howsection_content">
            <h1>Como funciona?</h1>
            <div class="howsection-card">
                <h2>🔍 1º passo — Conte pra gente como é a sua viagem ideal</h2>
                <p>Escolha a estação do ano, o continente que quer explorar, a duração da viagem e os tipos de experiência
                    que mais combinam com você.</p>
            </div>
            <div class="howsection-card">
                <h2>🧩 2º passo — Deixe a IA montar tudo pra você</h2>
                <p>Com base nas suas preferências, criamos um roteiro completo com passeios, restaurantes e
                    dicas imperdíveis.</p>
            </div>
            <div class="howsection-card">
                <h2>📅 3º passo — Receba um roteiro sob medida, pronto pra usar</h2>
                <p>Visualize e leve com você um plano de viagem personalizado, prático e feito especialmente para o seu
                    jeito de viajar.</p>
            </div>
        </div>
    </section>

    <section class="aboutsection">
        <div class="aboutsection_content">
            <h1>Sobre nós</h1>
            <div class="about-card">
                <p class="text-center">Nem sempre é fácil escolher o destino ideal e planejar cada detalhe pode ser ainda
                    mais difícil. <br> Pensando
                    nisso, criamos uma nova forma de viajar: simples, personalizada e surpreendente.</p>

                <p class="intro-text">Aqui, você não precisa saber para onde ir. Basta nos contar o que você gosta:</p>
                <ul>
                    <li>Qual estação do ano prefere?</li>
                    <li>Quanto tempo tem disponível?</li>
                    <li>Que tipo de experiência busca? (Gastronomia, museus, praia, aventura, relaxamento...)</li>
                    <li>Em qual continente gostaria de explorar?</li>
                </ul>

                <p class="intro-text">Com base nas suas escolhas, nosso sistema cria um roteiro completo e sob medida, com:
                </p>
                <ul>
                    <li>Destinos que combinam com seu estilo</li>
                    <li>Passeios inesquecíveis</li>
                    <li>Restaurantes selecionados</li>
                    <li>Dicas locais para aproveitar ao máximo cada momento</li>
                </ul>

                <p>Esqueça os roteiros prontos e genéricos. Cada viagem criada aqui é única, pensada especialmente para
                    você.</p>

                <p>Descubra lugares incríveis, sem precisar procurá-los.</p>
            </div>
        </div>
    </section>

    <section class="formsection">
        <h1>Como é sua viagem ideal?</h1>
        <div class="formsection-content">
            <div class="form-card">
                <h2>👨🏻‍👩🏻‍👦🏻 Quantas pessoas vão viajar?</h2>
                <form action="/action_page.php" method="get">
                    <div class="option-row">
                        <input type="radio" id="1pessoa" name="pessoas" value="1 pessoa">
                        <label for="1pessoa">1 pessoa</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="2pessoas" name="pessoas" value="2 pessoas">
                        <label for="2pessoas">2 pessoas</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="3pessoas" name="pessoas" value="3 pessoas">
                        <label for="3pessoas">3 pessoas</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="4pessoas" name="pessoas" value="4 pessoas">
                        <label for="4pessoas">4 pessoas</label>
                    </div>
                </form>
            </div>

            <div class="form-card">
                <h2>👧🏻 Quantos são crianças?<br>(3-12 anos)</h2>
                <form action="/action_page.php" method="get">
                    <div class="option-row">
                        <input type="radio" id="0criança" name="crianças" value="0 criança">
                        <label for="0criança">Nenhuma criança</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="1criança" name="crianças" value="1 criança">
                        <label for="1criança">1 crianças</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="2crianças" name="crianças" value="2 crianças">
                        <label for="2crianças">2 crianças</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="3crianças" name="crianças" value="3 crianças">
                        <label for="3crianças">2 crianças</label>
                    </div>
                </form>
            </div>

            <div class="form-card">
                <h2>🏖️ Em qual estação do ano você prefere viajar?</h2>
                <form action="/action_page.php" method="get">
                    <div class="option-row">
                        <input type="radio" id="primavera" name="estacao" value="primavera">
                        <label for="primavera">Primavera</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="verao" name="estacao" value="verão">
                        <label for="verao">Verão</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="outono" name="estacao" value="outono">
                        <label for="outono">Outono</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="inverno" name="estacao" value="inverno">
                        <label for="inverno">Inverno</label>
                    </div>
                </form>
            </div>

            <div class="form-card">
                <h2>📅 Quantos dias a viagem vai durar?</h2>
                <form action="/action_page.php" method="get">
                    <div class="option-row">
                        <input type="radio" id="3dias" name="dias" value="3 dias">
                        <label for="3dias">3 dias</label>
                    </div>
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
                <h2>🌎 Para qual continente você quer viajar?</h2>
                <form action="/action_page.php" method="get">
                    <div class="option-row">
                        <input type="radio" id="africa" name="continente" value="africa">
                        <label for="africa">África</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="america" name="continente" value="america">
                        <label for="america">América</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="asia" name="continente" value="asia">
                        <label for="asia">Ásia</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="europa" name="continente" value="europa">
                        <label for="europa">Europa</label>
                    </div>
                    <div class="option-row">
                        <input type="radio" id="oceania" name="continente" value="oceania">
                        <label for="oceania">Oceania</label>
                    </div>
                </form>
            </div>


            <div class="form-card">
                <h2>🎡 Quais desses são do seu interesse?</h2>
                <form action="/action_page.php" method="get">
                    <div class="option-row">
                        <input type="checkbox" id="gastronomia" name="gastronomia" value="gastronomia">
                        <label for="gastronomia">Gastronomia</label>
                    </div>
                    <div class="option-row">
                        <input type="checkbox" id="museus" name="museus" value="museus">
                        <label for="museus">Museus</label>
                    </div>
                    <div class="option-row">
                        <input type="checkbox" id="praia" name="praia" value="praia">
                        <label for="praia">Praia</label>
                    </div>
                    <div class="option-row">
                        <input type="checkbox" id="aventura" name="aventura" value="aventura">
                        <label for="aventura">Aventura</label>
                    </div>
                    <div class="option-row">
                        <input type="checkbox" id="relaxamento" name="relaxamento" value="relaxamento">
                        <label for="relaxamento">Relaxamento</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="btn-container">
            <button class="btn-generate">Where to</button>
        </div>
    </section>
@endsection
