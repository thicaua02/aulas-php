<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Revisando PHP intercalado com HTML</h1>
    <hr>

    <?php
    $aluno = "Fulano";
    const ESCOLA = "Senac Penha";

    echo "<p>O aluno se chama $aluno</p>";
    echo "<p>Ele estuda na escola " . ESCOLA . "</p>";
    ?>

    <h2>Usando PHP intercalando com HTML</h2>
    <p><i>(usar o PHP onde precisa)</i></p>
    <p>O aluno se chama <?= $aluno ?></p>
    <p>Ele estuda na escola <?= ESCOLA ?></p>

    <hr>

    <h2>Usando PHP intercalado comandos com HTML</h2>

    <?php $idade = 25; ?>

    <h3>Resultado (usando PHP pra tudo)</h3>

    <?php
    if ($idade >= 18) {
        echo "<p><b>$aluno</b> é maior de idade.";
    } else {
        echo "<p><i>$aluno</i> é menor de idade.";
    }
    ?>

    <h3>Resultado (usando PHP só onde é necessário): </h3>
    <?php
    if ($idade >= 18) {
    ?>
        <p><b><?= $aluno ?></b> é maior de idade</p>
    <?php
    } else {
    ?>
        <p><i><?= $aluno ?></i> é menor de idade</p>
    <?php } ?>

    <h3>Resultado (refatorado)</h3>
    <i>(veja que, mudando a lógica e usando variáveis auxiliares, nem precisamos fazer as seperações de PHP com HTML)</i>

    <?php
    if ($idade >= 18) {
        $htmlSaida = "<b>$aluno</b>";
        $palavra = "maior";
    }
    else {
        $htmlSaida = "<i>$aluno</i>";
        $palavra = "menor";
    }
    ?>

    <p> <?= $htmlSaida ?> é <?= $palavra ?> de idade</p>
</body>

</html>