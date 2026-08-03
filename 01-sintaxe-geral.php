<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe Geral</title>
    <style>
        .exemplo {
            border: solid 4px;
            padding: 4px;
            /*Propriedade CSS cujo valor
            vem de um processamento PHP*/
            color: <?php echo "orange" ?>;
        }
    </style>
</head>

<body>
    <h1 class="exemplo">Trabalhando com PHP</h1>
    <hr>

    <?php
        // Geração de texto/string;
        echo "Estou estudando a linguagem PHP para Back-End\n";
        echo 'Estou também é um texto/stirng.';

        // Geração de tags/atributos HTML
        echo "<p>Este é um paragrafo gerado via PHP.</p>";
        echo "<p><abbr title='Hyper Preprocessor'>PHP</abbr> é uma linguagem popular.</p>";
    ?>

    <script>
        const titulo = document.getElementsByTagName("h1")[0];
        titulo.addEventListener('click', () => {
            alert("<?php echo "Olá PHP e JS." ?>")
        })
    </script>
</body>

</html>