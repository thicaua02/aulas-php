<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
    $linguagens = [
        ["id" => 1, "nome" => "HTML", "descricao" => "Estrutura"],
        ["id" => 2, "nome" => "CSS", "descricao" => "Estilo"],
        ["id" => 3, "nome" => "JS", "descricao" => "Comportamentos"],
        ["id" => 4, "nome" => "PHP", "descricao" => "Back-End"],
        ["id" => 5, "nome" => "SQL", "descricao" => "Manipulação de dados"]
    ];
    ?>

    <div class="container">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th class="text-uppercase">id</th>
                    <th class="text-uppercase">linguagem</th>
                    <th class="text-uppercase">descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($linguagens as $linguagem):?>
                    <tr>
                        <td><?= $linguagem["id"]; ?></td>
                        <td><?= $linguagem["nome"]; ?></td>
                        <td><?= $linguagem["descricao"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("keydown", function (evento) {
            if (evento.ctrlKey && evento.key.toLowerCase() === "s") {
                evento.preventDefault();
                location.reload();
            } 
        });
    </script>
</body>
</html>