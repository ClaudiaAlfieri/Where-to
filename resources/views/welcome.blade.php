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
                <h1>🔍 1º passo — Conte pra gente como é a sua viagem ideal</h1>
                <p>Fale sobre o destino, datas, estilo de viagem, quem vai com você e o que não pode faltar na experiência.
                </p>
            </div>
            <div class="howsection-card">
                <h1>🧩 2º passo — Deixe a IA montar tudo pra você</h1>
                <p>Com base nas suas preferências, criamos um roteiro completo com hospedagem, passeios, restaurantes e
                    dicas imperdíveis.</p>
            </div>
            <div class="howsection-card">
                <h1>📅 3º passo — Receba um roteiro sob medida, pronto pra usar</h1>
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
                    <input type="radio" name="1 pessoa" value="1 pessoa">
                    <label for="1"> 1 pessoa</label><br>
                    <input type="radio" name="2 pessoas" value="2 pessoas">
                    <label for="2"> 2 pessoas</label><br>
                    <input type="radio" name="3 pessoas" value="3 pessoas">
                    <label for="3"> 3 pessoas</label><br>
                    <input type="radio" name="4 pessoas" value="4 pessoas">
                    <label for="4"> 4 pessoas</label><br>
                </form>
            </div>
             <div class="form-card">
                <h2>📅 Quantos dias a viagem vai durar?</h2>
                <form action="/action_page.php" method="get">
                    <input type="radio" name="3 dias" value="3 dias">
                    <label for="3"> 3 dias</label><br>
                    <input type="radio" name="5 dias" value="5 dias">
                    <label for="5"> 5 dias</label><br>
                    <input type="radio" name="7 dias" value="7 dias">
                    <label for="7"> 7 dias</label><br>
                    <input type="radio" name="9 dias" value="9 dias">
                    <label for="9"> 9 dias</label><br>
                    <input type="radio" name="12 dias" value="12 dias">
                    <label for="12"> 12 dias</label><br>
                </form>
            </div>
           <div class="form-card">
                <h2>🏖️ Em qual estação do ano você prefere viajar?</h2>
                <form action="/action_page.php" method="get">
                    <input type="radio" name="primavera" value="primavera">
                    <label for="1">Primavera</label><br>
                    <input type="radio" name="verão" value="verão">
                    <label for="2">Verão</label><br>
                    <input type="radio" name="outono" value="outono">
                    <label for="3">Outono</label><br>
                    <input type="radio" name="inverno" value="inverno">
                    <label for="4">Inverno</label><br>
                </form>
            </div>
        </div>
    </section>
@endsection
