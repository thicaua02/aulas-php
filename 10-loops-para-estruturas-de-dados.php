<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Loops para estruturas de dados</h1>
        <hr>

        <?php $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho"]; ?>

        <h2>Usando o loop for para acessar o array</h2>
        <ol>
            <?php for ($i = 0; $i < count($meses); $i++) { ?>
                <li><?= $meses[$i]; ?></li>
            <?php } ?>
        </ol>

        <h2>Usando o loop for para acessar uma matriz (array de array)</h2>
        <?php
        $planoDeEstudos = [
            ["JS Avançado", "Node.js", "Next.js"],
            ["PHP", "Orientação a Objetos"],
            ["Teoria das Cores", "Photoshop com IA", "UX/UI"]
        ];

        $linhas = count($planoDeEstudos);
        for ($i = 0; $i < $linhas; $i++):
            $colunas = count($planoDeEstudos[$i]);
            for ($j = 0; $j < $colunas; $j++):
        ?>
                <p><?= $planoDeEstudos[$i][$j]; ?></p>
        <?php
            endfor;
        endfor;
        ?>

        <hr>

        <h2>Usando o loop foreach para array</h2>
        <?php
        $alunos = ["Thiago", "Adela", "Renan", "Pérola"];
        foreach ($alunos as $aluno):
        ?>
            <p> <?= $aluno ?></p>
        <?php
        endforeach;
        ?>

        <hr>

        <h2>Usando foreach para array associativo</h2>
        <?php
        $curso = [
            "titulo" => "Gastronomia",
            "carga_horaria" => 200,
            "descricao" => "Aprender o básico sobre a área"
        ];

        // Extraindo chave com valor
        foreach ($curso as $chave => $valor):
        ?>
            <p><b><?= $chave ?></b>: <?= $valor ?></p>
        <?php
        endforeach;
        ?>

        <?php
        // Extraindo somente o valor
        foreach ($curso as $valor):
        ?>
            <p><i><?= $valor ?></i></p>
        <?php
        endforeach;
        ?>

        <hr>
        <h2>Usando foreach em uma matriz</h2>

        <?php
        foreach ($planoDeEstudos as $categoria):
            foreach ($categoria as $assunto):
        ?>
            <p><?= $assunto ?></p>
        <?php 
            endforeach;
        endforeach; ?>

        <hr>
        <h2>Usando foreach em uma matriz associativa</h2>
        <?php 
        $clientes = [
            [
                "nome" => "Juliene",
                "email" => "ju@senac.br"
            ],
            [
                "nome" => "Luiz",
                "email" => "luiz@senac.br"
            ]
        ];

        foreach ($clientes as $cliente):?>
            <p><b>Nome: </b> <span class="bg-primary-subtle px-2"><?= $cliente['nome']; ?></span></p>
            <p><b>E-mail: </b> <span class="bg-primary-subtle px-2"><?= $cliente['email']; ?></span></p>
        <?php
        endforeach;
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>