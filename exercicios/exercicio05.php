<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
        function calcularMedia(array $notas) : float {
            $total = 0;
            foreach ($notas as $nota) $total += $nota;
            return number_format($total / count($notas), 2);
        }

        function verificarMedia(float $media) : string {
            if ($media >= 7) return "Aprovado";
            return "Reprovado";
        }

        $alunos = [
            "Alfredo" => [5, 5, 5],
            "Beltrano" => [10, 10, 2],
            "Ciclano" => [2, 3, 5],
            "Deltrano" => [8, 7, 2],
            "Eutrano" => [0, 3, 2]
        ];
    ?>

    <div class="container">
        <h1 class="text-uppercase text-center">Exericicio 05</h1>
        <hr>
        <div class="d-flex flex-row gap-3">
            <?php foreach ($alunos as $aluno => $valores): ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h2 class="text-uppercase"><?= $aluno ?></h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php for ($i=0; $i < count($valores); $i++): ?>
                            <li class="list-group-item">Nota <?= $i+1 ?>: <?= $valores[$i]; ?></li>
                        <?php endfor; ?>
                        <li class="list-group-item">
                            Resultado: 
                            <?php 
                                $media = calcularMedia($valores);
                                echo "<b>$media</b>"; 
                            ?>
                        </li>

                        <?php 
                        $avaliacao = verificarMedia($media); 
                        if ($avaliacao == "Aprovado"): ?>
                            <li class="list-group-item bg-success text-white"><?= $avaliacao ?></li>
                        <?php else: ?>
                            <li class="list-group-item bg-danger text-white"><?= $avaliacao ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>