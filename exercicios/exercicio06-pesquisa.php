<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06: Pesquisa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-3">Pesquisa de funções no PHP</h1>
        <p class="text-center my-3" style="max-width: 700px; margin-inline: auto;">Sua tarefa será pesquisar outras funções do PHP que também podem ser utilizadas para trabalhar com datas, horários e informações como dia, mês, ano, hora, minuto e segundo. </p>


        <div class="accordion" id="pesquisa">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#time" aria-expanded="true" aria-controls="time">
                        time ()
                    </button>
                </h2>
                <div id="time" class="accordion-collapse collapse" data-bs-parent="#pesquisa">
                    <div class="accordion-body">
                        <h2 class="fs-4">time ()</h2>
                        <p class="fs-5 my-3">A função time() no PHP é responsável por retornar o momento atual do servidor medido no formato <a href="https://datahora.com.br/blog/o-que-e-unix-timestamp-desenvolvedores/">Unix Timestamp</a>. Ela gera um número inteiro contendo a quantidade exata de segundos decorridos desde a meia-noite de 1º de janeiro de 1970, servindo como base matemática para cálculos temporais no back-end.</p>

                        <h3 class="fs-5">Parâmetros</h3>
                        <p class="fs-6 my-3">Essa fumção não possui nenhum parâmetro.</p>

                        <h3 class="fs-5">Retorna</h3>
                        <p class="fs-6 my-3">Essa função retorna um valor numérico do tipo inteiro.</p>

                        <h3 class="fs-5 my-3">Exemplo</h3>
                        <?php $segundosHoje = time(); ?>
                        <p class="fs-6">Segundos desde 1970 até agora: <mark><?= $segundosHoje ?></mark>.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#getdate" aria-expanded="true" aria-controls="getdate">
                        getdate ()
                    </button>
                </h2>
                <div id="getdate" class="accordion-collapse collapse" data-bs-parent="#pesquisa">
                    <div class="accordion-body">
                        <h2 class="fs-4">getdate ()</h2>
                        <p class="fs-5 my-3">A função getdate() no PHP é uma ferramenta poderosa que permite ao desenvolvedor obter informações detalhadas sobre a data atual. Ela retorna um array associativo que contém diversos elementos, como o ano, mês, dia, hora, minuto e segundo. Essa função é especialmente útil em situações onde precisamos manipular ou exibir a data de forma mais detalhada.</p>

                        <h3 class="fs-5">Parâmetros</h3>
                        <p class="fs-6 my-3">Essa fumção não possui nenhum parâmetro.</p>

                        <h3 class="fs-5">Retorna</h3>
                        <p class="fs-6 my-3">Essa função retorna um array associativo, com as seguintes propriedades: </p>
                        <ul>
                            <li><mark>year:</mark> o ano atual.</li>
                            <li><mark>mon:</mark> o mês atual.</li>
                            <li><mark>mday:</mark> o dia do mês</li>
                            <li><mark>wday:</mark> o dia da semana (0 para domingo, 6 para sábado)</li>
                            <li><mark>hours:</mark> hora atual (0-23)</li>
                            <li><mark>minutes:</mark> minutos atuais (0-59)</li>
                            <li><mark>seconds:</mark> segundos atuais (0-59)</li>
                            <li><mark>weekday:</mark> o nome do dia da semana</li>
                            <li><mark>month:</mark> o nome do mês
                                0: o timestamp Unix</li>
                        </ul>

                        <h3 class="fs-5 my-3">Exemplo</h3>
                        <?php $data = getdate(); ?>
                        <p class="fs-6 my-3">Ano: <?= $data['year'] ?></p>
                        <p class="fs-6 my-3">Mês: <?= $data['mon'] ?></p>
                        <p class="fs-6 my-3">Dia: <?= $data['mday'] ?></p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mktime" aria-expanded="true" aria-controls="mktime">
                        mktime ()
                    </button>
                </h2>
                <div id="mktime" class="accordion-collapse collapse" data-bs-parent="#pesquisa">
                    <div class="accordion-body">
                        <h2 class="fs-4">mktime ()</h2>
                        <p class="fs-5 my-3">A função mktime em PHP é uma ferramenta fundamental para quem trabalha com datas. Ela gera um timestamp Unix a partir de uma data e hora fornecidas, permitindo manipulações e cálculos de datas de forma eficiente. O timestamp Unix é o número de segundos desde 1 de janeiro de 1970, o que torna a função extremamente útil para operações que requerem comparação de datas.</p>

                        <h3 class="fs-5">Parâmetros</h3>
                        <p class="fs-6 my-3">Essa função possui os seguintes parâmetros:</p>
                        <ul>
                            <li><mark>hour:</mark> Horas.</li>
                            <li><mark>minute:</mark> Minutos.</li>
                            <li><mark>second:</mark> Seugndos.</li>
                            <li><mark>month:</mark> Mês.</li>
                            <li><mark>day:</mark> Dia.</li>
                            <li><mark>year:</mark> Ano.</li>
                        </ul>

                        <h3 class="fs-5">Retorna</h3>
                        <p class="fs-6 my-3">Essa função retorna um timestamp Unix.</p>

                        <h3 class="fs-5 my-3">Exemplo</h3>
                        <?php $timestamp = mktime(14, 30, 0, 12, 25, 2023); ?>
                        <p class="fs-6">Data: <mark><?php date("Y-m-d H:i:s", $timestamp) ?></mark>.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#checkdate " aria-expanded="true" aria-controls="checkdate">
                        checkdate ()
                    </button>
                </h2>
                <div id="checkdate" class="accordion-collapse collapse" data-bs-parent="#pesquisa">
                    <div class="accordion-body">
                        <h2 class="fs-4">checkdate ()</h2>
                        <p class="fs-5 my-3">A função checkdate no PHP é uma ferramenta poderosa para validar datas. Ela verifica se a combinação de mês, dia e ano que você fornece é uma data válida. Isso é extremamente útil em aplicações que precisam garantir a integridade dos dados, como formulários de cadastro e sistemas financeiros.</p>

                        <h3 class="fs-5">Parâmetros</h3>
                        <p class="fs-6 my-3">Essa função retorna um array associativo, com as seguintes propriedades: </p>
                        <ul>
                            <li><mark>month:</mark> Mês.</li>
                            <li><mark>day:</mark> Dia.</li>
                            <li><mark>year:</mark> Ano.</li>
                        </ul>

                        <h3 class="fs-5">Retorna</h3>
                        <p class="fs-6 my-3">Essa função retorna um valor boleano.</p>

                        <h3 class="fs-5 my-3">Exemplo</h3>
                        <?php
                        if (checkdate(2, 29, 2020)) {
                            echo 'A data é válida!';
                        } else {
                            echo 'A data não é válida!';
                        } ?>
                    </div>
                </div>
            </div>

            <h2 class="text-center my-3">Exemplo: Congruência Zeller</h2>
            <?php

            $dia = 17;
            $mes = 8;
            $ano = 2026;

            // Verifica se a data é válida
            if (checkdate($mes, $dia, $ano)) {

                // Janeiro e fevereiro são tratados como meses 13 e 14
                if ($mes == 1 || $mes == 2) {
                    $mes += 12;
                    $ano--;
                }

                // Variáveis da Congruência de Zeller
                $q = $dia;
                $K = $ano % 100;
                $J = intdiv($ano, 100);

                // Fórmula de Zeller
                $h = (
                    $q
                    + intdiv(13 * ($mes + 1), 5)
                    + $K
                    + intdiv($K, 4)
                    + intdiv($J, 4)
                    + 5 * $J
                ) % 7;

                $dias = [
                    0 => "Sábado",
                    1 => "Domingo",
                    2 => "Segunda-feira",
                    3 => "Terça-feira",
                    4 => "Quarta-feira",
                    5 => "Quinta-feira",
                    6 => "Sexta-feira"
                ];

                // Usa mktime() para criar o timestamp da data
                $timestamp = mktime(0, 0, 0, $mes > 12 ? $mes - 12 : $mes, $dia, $ano);

                echo "Data: 17/08/2026<br>";
                echo "Dia da semana: " . $dias[$h] . "<br>";
                echo "Timestamp: " . $timestamp;
            } else {
                echo "Data inválida!";
            }

            ?>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>