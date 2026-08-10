<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h1>Trabalhando com comandos de repetição</h1>
    <hr>

    <h2>While (enquanto)</h2>
    <p>Executa ações repetidas vezes <b>enqaunto</b> a condição for <b>verdadeira</b>.</p>

    <?php
    $i = 1;
    while ($i <= 5) {
    ?>
        <p>Paragrafo: <?= $i ?></p>
    <?php
        $i++;
    }
    ?>

    <hr>

    <h2>do/while (faça/enquanto)</h2>
    <p>Executa as ações pelo menos <b>uma vez</b> e. se a condição for verdadeira, bcontinua executando outra vezes.</p>

    <?php
    $j = 1;
    do {
    ?>
        <div>
            <h3>Titulo qualquer...</h3>
            <p>Bloco <?= $j ?></p>
        </div>
    <?php
        $j++;
    } while ($j <= 3)
    ?>

    <hr>

    <h2>for (para)</h2>
    <p>Executa ações de acordo com uma <b>quantidade determinada de vezes </b>. </p>

    <section>
        <h3>Conteúdo da seção</h3>
        <?php for ($i = 0; $i <= 5; $i++) { ?>
            <details>
                <summary>Perguntas <?= $i ?></summary>
                <p>Texto <?= $i ?></p>
            </details>
        <?php } ?>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>       
</body>

</html>