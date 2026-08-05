<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops no PHP</title>
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
</body>

</html>