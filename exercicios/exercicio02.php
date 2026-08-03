<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
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

        li {list-style-type: none;}

        h1 {
            background-color: #000;
            color: #fff;
            padding-inline-start: 1rem;
            padding-block: 1rem;
        }

        main {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
            max-width: 80%;
            margin-inline: auto;
        }

        article {
            flex-grow: 1;
            margin-block-start: 2.5rem;
            background-color: #fff;
            padding: 1rem 1.5rem;
            border-radius: 16px;
            box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
        }

        article h2 {
            margin-block-end: 1rem;
        }

        article li {
            line-height: 2;
            font-style: normal;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <?php 
        $usuario1 = [
            "Nome de Usuario" => "Fulano",
            "E-mail" => "Fulano@gmail.com",
            "Senha" => "alfa",
            "Idade" => 32,
            "Cidade" => "São Paulo"
        ];

        $usuario2 = new stdClass;
        $usuario2 -> nomeUsuario = "Ciclano";
        $usuario2 -> email = "ciclano@gmail.com";
        $usuario2 -> senha = "delta";
        $usuario2 -> idade = 16;
        $usuario2 -> cidade = "São Carlos";
    ?>

    <h1>Exercicio 02</h1>

    <main>
        <article>
            <h2>Usuário 1</h2>
            <ul>
                <li>Nome de Usuario: <b><?= $usuario1['Nome de Usuario'] ?></b></li>
                <li>E-mail: <b><?= $usuario1['E-mail'] ?></b></li>
                <li>Idade: <b><?= $usuario1['Idade']?> anos </b></li>
            </ul>
        </article>

        <article>
            <h2>Usuário 2</h2>
            <ul>
                <li>Nome de Usuario <b><?= $usuario2->nomeUsuario ?></b></li>
                <li>E-mail: <b><?= $usuario2->email ?></b></li>
                <li>Idade: <b><?= $usuario2->idade ?> anos</b></li>
            </ul>
        </article>
    </main>

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