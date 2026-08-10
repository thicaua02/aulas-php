<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays (Vetores e Matrizes)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Trabalhando com Arrays</h1>
    <hr>
    <h2>Array númerico/indexado</h2>
    
    <?php 
        // Sintaxe 1: Usando colchetes
        $animes = ["Naruto", "One Piece", "Bleach", "Dragon Ball"];

        // Sintaxe 2: Usando a função array()
        $cursos = array("Excel", "JS", "PHP", "Games 2d");

        // Array Heterogêneo (tipos de dados mistos/variados)
        $coisas = ["Ozzy", 2112, "<b>Senac</b>", 253.487, true];

        // Array como constante
        const FRUTAS = ["morango", "abacaxi"];
        define("FILIAS", ["São Paulo", "Rio de Janeiro"]);
    ?>

    <h3>Acessando dados de arrays indexados/númericos</h3>
    <ul>
        <li>Anime que mais gosto: <?= $animes[3]?></li>
        <li>Gostaria de estudar mais sobre o <?= $cursos[0]?></li>
        <li>Estamos estudando no <?= $coisas[2]?></li>
        <li>Estamos na unidade da cidade de <?= FILIAS[0]?></li>
    </ul>

    <h2>Array associativo</h2>
    <p>Lista de dados baseada em uma chave associativa (na pratica, é um nome/identificação que você dá), 
    e um valor para ela (o dado em si).</p>
    <?php
        // chave associativa => valor
        $curso = [
            "titulo" => "Gastronomia",
            "carga_horaria" => 800,
            "descricao" => "Aprender a esquentar água para fazer miojo."
        ];

        const EMPRESA = [
            "nome" => "Biribinha Soluções em TI",
            "ramo" => "Tecnologia",
            "fundacao" => "31/02/2026"
        ];
    ?>

    <h3>Acessando dados de arrya associativo</h3>
    <p>Nome do curso: <b><?= $curso["titulo"] ?></b></p>
    <p>CH: <b><?= $curso["carga_horaria"] ?></b></p>
    <p>Descrição <b><?= $curso["descricao"] ?></b></p>
    <p>Prestadora de serviços: <i><?= EMPRESA["nome"] ?></i></p>

    <h2>Arrays de arrays (Matrizes)</h2>
    <?php
        // Matriz de arrays indexados
        $planoDeEstudos = [
            ["JS Avançado", "Node.js", "Next.js"],
            ["PHP Avançado", "Orientação a Objetos"],
            ["Teoria das Cores", "Photoshop", "Canva", "UX/UI"]
        ];

        $clientes = [
            [
                "nome" => "Gabriel",
                "me_devendo" => 1000
            ],
            [
                "nome" => "Messias",
                "me_devendo" => 500
            ]
        ]
    ?>

    <h3>Acessando dados da Matriz de arrays indexados</h3>
    <p>Meu foco agora é no <?= $planoDeEstudos[1][0] ?></p>
    <p>O <?= $clientes[0]["nome"] ?> está me devendo <?= $clientes[0]["me_devendo"] ?></p>
    <p>O <?= $clientes[1]["nome"] ?> está me devendo <?= $clientes[1]["me_devendo"] ?></p>

    <h2>Funções de analise/debug de estruturas de dados (arrays, objetos)</h2>
    <?php //echo $animes // não funciona, pois o echo não consegue exibir arrays?>
    
    <h3><code>print_r()</code></h3>
    <pre><?php print_r($animes) ?></pre>
    <h3><code>var_dump()</code></h3>

    <pre><?php var_dump($animes) ?></pre>
    <pre><?php var_dump(EMPRESA) ?></pre>
    <pre><?php var_dump($coisas) ?></pre>
    <pre><?php var_dump($clientes) ?></pre>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>