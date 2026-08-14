<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Funções nativas para texto</h1>
        <hr>
        <!-- mb -> multbyte: permtie trabalhar com acentos,
         caracteres especiais, cedilha. -->
        <h2>md_strlen()</h2>
        <?php
        $texto = "Uma frase qualquer, com acentos e cedilha: ação, ciência.";
        ?>
        <h3>String do exemplo: <?= $texto ?></h3>
        <p>Tamanho da string: <?= mb_strlen($texto) ?></p>

        <h2>mb_strtoupper()</h2>
        <p>Conversando para maiúsculas: <?= mb_strtoupper($texto) ?></p>

        <h2>mb_strtolower()</h2>
        <p>Conversando para minúsculas: <?= mb_strtolower($texto) ?></p>


        <h2>str_replace() ou str_ireplace</h2>
        <?php
        $frase = "Esta é uma frase com palavras feias, como burro, idiota, chato demais e outras palavras ruins (bobo, panaca etc)! Chato mesmo! BOBO pra caramba. Também é um BOBÃO.";

        // Procurando por uma palavra e substituindo por outra
        $fraseComSubstituicaoDePalavra = str_ireplace("bobo", "cara legal", $frase);

        // Procurando por uma LISTA de palavras e substituindo por outra coisa
        $fraseCensurada = str_ireplace(["panaca", "burro", "idiota", "chato", "bobão", "bobo"], "********", $frase);
        ?>

        <p><mark>Frase original: </mark> <?= $frase ?></p>
        <p>Frase com substituilão de palavra: <?= $fraseComSubstituicaoDePalavra ?></p>
        <p>Frase censurada: <?= $fraseCensurada ?></p>

        <h2>strip_tags ()</h2>
        <?php
        $codigHTML = "<h3>HTML5 - <a href='https://sp.senac.br'>SENAC</a></h3>";
        $textoSemTags = strip_tags($codigHTML);
        ?>

        <div>
            <?= $codigHTML ?>
            <?= $textoSemTags ?>
        </div>

        <h2>trim()</h2>
        <?php
        $textoComEspacosAdicionais = " Curso de PHP "; // formulario
        $textoSemEspacoes = trim($textoComEspacosAdicionais);
        $textoComQuebras = "\n\n Texto qualquer e etc e tal"; // API
        $textoSemQuebras = trim($textoComQuebras);
        ?>

        <pre><?php var_dump($textoComEspacosAdicionais) ?></pre>
        <pre><?php var_dump($textoSemEspacoes) ?></pre>
        <br><br>
        <pre><?php var_dump($textoComQuebras) ?></pre>
        <pre><?php var_dump($textoSemQuebras) ?></pre>

        <h2>nl2br()</h2> <!-- new line to break -->
        <?php
        $textoContendoQuebras = "A vida é feita de escolhas \n e a cada decisão, uma nova jornada começa. \n Às vezes, o caminho parece claro, \n mas em outras, a névoa da dúvida nos envolve. \n Mesmo assim, é importante seguir em frente. \n A coragem está em continuar, \n mesmo quando as respostas não são evidentes. \n Aprendemos com os erros e acertos, \n e cada experiência nos molda para o que está por vir. \n O segredo é nunca parar de caminhar.";
        ?>

        <p><?= $textoContendoQuebras ?></p>
        <p><?= nl2br($textoContendoQuebras) ?></p>
        <!-- a função pega as "quebras" com \n e transforma em <br> para o HTML -->

        <h2>explode()</h2>
        <?php
        $linguagens = "HTML, CSS, JS, PHP, SQL, Python, C#, Java";
        $arrayLinguagens = explode(", ", $linguagens);
        ?>

        <pre><?php var_dump($linguagens) ?></pre>
        <pre><?php var_dump($arrayLinguagens) ?></pre>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>