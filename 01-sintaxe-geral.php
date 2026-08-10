<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe Geral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        const titulo = document.getElementsByTagName("h1")[0];
        titulo.addEventListener('click', () => {
            alert("<?php echo "Olá PHP e JS." ?>")
        })
    </script>
</body>

</html>