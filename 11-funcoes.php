<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Trabalhando com função</h1>
        <hr>

        <h2>Função como procedimento (ou sub-rotina)</h2>
        <p>Procedimento não retornam nada.</p>
    

        <?php
            function exibirDadosDoAutor() {
                echo "<h4>Fulano de Tal</h4>";
                echo "<p>Aplicação <b>Back-End</b></p>";
            }
        ?>

        <h3>Chamar/Invocar a função/procedimento</h3>
        <?php exibirDadosDoAutor(); ?>
        <div><?php exibirDadosDoAutor(); ?></div>

        <hr>

        <h2>Função com parâmetros (ou argumentos)</h2>
        <?php
            function somar($valor1, $valor2) {
                return $valor1 + $valor2;
            } 
        ?>

        <h3>Chamada/retorno da função somar</h3>
        <p>Resultado 1: <?= somar(1, 2); ?></p>
        <p>Resultado 2: <?= somar(21, 32); ?></p>
        <p>Resultado 3: <?= somar(100, 2245); ?></p>

        <?php
        $precoProdutoA = 250;
        $precoProdutoB = 300;
        
        $resultadoProdutos = somar($precoProdutoA, $precoProdutoB)
        ?>
        
        <p>Resultado 4: <?= $resultadoProdutos ?></p>

        <?php if(somar(100, 500) > 1200): ?>
            <p class="text-sucess">Meta atingida!</p>
        <?php else: ?>
            <p class="text-danger">Não foi desta vez!</p>
        <?php endif; ?>

        <hr>

        <h2>Função com parâmetros opcionais</h2>
        <?php
            // Neste caso, deixamos o parâmetro pessoa com um valor padrão (no exemplo, uma string vazia)
            function exibirMensagem($mensagem, $pessoa = "") {
                return "Olá $mensagem $pessoa";
            } 
        ?>

        <p>Saudação 1: <?= exibirMensagem("boa tarde", "Samuel") ?></p>
        <p>Saudação 1: <?= exibirMensagem("boa tarde") ?></p>

        <hr>

        <h2>Função com indução de tipos de dados</h2>
        <p>Nesta abordagem, definimos tipos de dados para os
        parâmetros e para o retorno da função.</p>

        <?php
            function verificarNegativo(int $valor):string {
                if ($valor < 0) return "é negativo";
                return "não é negativo";
            }
        ?>

        <p>Número 10: <?= verificarNegativo(10) ?></p>
        <p>Número -10: <?= verificarNegativo(-10) ?></p>


        <hr>

        <h2>Função anônima (ou lambda)</h2>
        <?php
            // SEMPRE DECLARE primeiro a função.
            $multiplcar = function(float $valor1, float $valor2):float {
                return $valor1 * $valor2;
            };
        ?>

        <!-- Repare no uso do $ junto com o nome da fumção. -->
        <p>Exemplo: <?= $multiplcar(10, 2); ?></p>

        <hr>

        <h2>Arrow Function</h2>
        <?php
            $substrair = fn(float $valor1, float $valor2):float => $valor1 - $valor2;
        ?>
        <p>Exemplo <?= $substrair(10, 1); ?></p>
    </div>
</body>
</html>