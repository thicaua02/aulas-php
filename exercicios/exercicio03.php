<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        html {height: 100%;}

        body {
            font-family: Helvetica;
            background-color: #ededed;
            height: 100%;
            overflow-y: hidden;
        }

        h1 {
            background-color: #000000;
            color: #fff;
            padding-inline-start: 1rem;
            padding-block: 1rem;
        }

        main {
            display: flex;
            align-items: center;
            justify-content: center;
            height: inherit;
        }

        section {
            width: 700px;
            height: 300px;
            background-color: #fff;
            clip-path: polygon(15% 0%, 85% 0%, 100% 0%, 100% 100%, 15% 100%, 0% 85%, 0% 15%);
            border-inline-start: solid 20px #000000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            gap: 2rem;
            position: relative;
        }

        section.infantil {background: linear-gradient(70.12deg, #FFFFFF 13.28%, #FFFFFF 90%, #f409bd9f 90%, #f409bd9f 90%);}
        section.adulto {background: linear-gradient(70.12deg, #FFFFFF 13.28%, #FFFFFF 90%, #2d8bff9f 90%, #2d8bff9f 90%);}
        section.melhor-idade {background: linear-gradient(70.12deg, #FFFFFF 13.28%, #FFFFFF 90%, #aeff2d9f 90%, #aeff2d9f 90%);}
        
        section h2 {font-size: 3rem;}

        li {
            list-style: none;
            margin-block-start: 0.75rem;
            border: 1px solid #000000;
            padding: 0.25rem 4rem;
        }


        li:nth-child(1) {
            margin-block-start: 0;
        }
    </style>
</head>
<body>
    <h1>Exercicio 03</h1>

    <?php
    $idade = 91;
    $categoria = "";
    $classe = "";
    $valorIngresso = 0;

    if ($idade < 12) {
        $categoria = "Infantil";
        $valorIngresso = 25;
        $classe = "infantil";
    } 
    elseif ($idade < 60 ) {
        $categoria = "Adulto";
        $valorIngresso = 40;
        $classe = "adulto";
    }
    else {
        $categoria = "Melhor Idade";
        $valorIngresso = 20;
        $classe = "melhor-idade";
    }

    $valorIngressoFormatado = number_format($valorIngresso, 2, ',', '.');
    ?>

    <main>
        <section class="<?= $classe ?>">
            <h2>Ingresso</h2>
            <ul>
                <li>Idade: <b><?= $idade ?></b></li>
                <li>Categoria: <b> <?= $categoria ?></b></li>
                <li>Valor do ingresso: <b>R$ <?= $valorIngressoFormatado ?> </b></li>
            </ul>
        </section>
    </main>
</body>
</html>