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
        function calcularMedia(...$notas) : float {
            $total = 0;
            foreach ($notas as $nota) $total += $nota;
            return $total / count($notas);
        }

        function verificarMedia(float $media) : string {
            if ($media >= 7) return "Aprovado";
            return "Reprovado";
        }

        $alunos = [
            "Alfredo" => [5, 5, 5],
            "Beltrano" => [10, 5, 2],
            "Ciclano" => [2, 3, 5],
            "Deltrano" => [8, 7, 2],
            "Eutrano" => [0, 3, 2]
        ];
    ?>

    <div class="container">
        
    </div>

    
</body>
</html>