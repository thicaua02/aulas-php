<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: Helvetica;
            background-color: #ededed;  
        }

        h1 {
            background-color: #000;
            color: #fff;
            padding-inline-start: 1rem;
            padding-block: 1rem;
        }

        .conteudo {
            font-size: 1.25rem;
            margin-block-start: 2rem;
            margin-inline: auto;
            max-width: 1000px;
            text-align: center;
        }
        
        .conteudo > p {
            user-select: none;
            border: 2px solid #000;
            padding: 0.5rem 1rem;
            margin-inline: 0.25rem;
            margin-block-start: 1rem;
            display: inline-block;
            border-radius: 16px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .conteudo > p:hover {
            background-color: #000;
            color: #fff;
        }

        span {font-weight: 600;}

        .conteudo > p:nth-child(1) {margin-block-start: 0;}
    </style>
</head>
<body>
    <?php
        $dataAtual = "29/07/2026";
        $nomePessoa = "Fulano";
        $nomeCurso = "Desenvolvimento de Sistemas";
        $cargaHoraria = 1000;
        $limiteFaltas = $cargaHoraria * 0.25;
    ?>

    <h1>Exercicio 01</h1>
    <div class="conteudo">
        <p>Nome da pessoa: <span><?php echo $nomePessoa?></span></p>
        <p>Curso: <span><?php echo $nomeCurso?></span></p>
        <p>Data Atual: <span><?php echo $dataAtual?></span></p>
        <p>Carga horário: <span><?php echo $cargaHoraria?></span> horas</p>
        <p>Limite de Faltas: <span><?php echo $limiteFaltas?></span> horas</p>
    </div>

    <script>
        document.addEventListener('keydown', (evento) => {
            if (evento.ctrlKey && evento.key.toLowerCase() === "s") {
                evento.preventDefault();
                location.reload();
            }
        });
    </script>
</body>
</html>