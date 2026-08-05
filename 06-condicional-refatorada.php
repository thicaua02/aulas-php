<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .comprar { color: red; }
        .normal { color: pink; }
    </style>
</head>
<body>
    <h1>(Refatorada) Trabalhando com estruturas Condicionais</h1>
    <hr>

    <h2>Condicional SIMPLES: <code>if</code></h2>
    
     <?php  
       $numero = 50;
       if($numero > 10){
     ?>
           <p> <?php $numero ?> é maior que 10</p> 
     <?php  
       }
     ?> 
    
    
    <h2>Condicional COMPOSTA: <code>if/else</code></h2>
    <?php  
    $produto = "Ultrabook";
    $qtdEmEstoque = 0;
    $qtdCritica = 5;
    ?>

      <h3> <?= $produto ?></h3>
      <p><b>Quantidade em estoque: </b> <?= $qtdEmEstoque ?></p>
      
    
    <?php  
      if ($qtdEmEstoque < $qtdCritica) :
    ?>
          <p class="comprar">É necessário comprar/repor</p>
    <?php              
           if($qtdEmEstoque === 0) :
    ?>          
           <p><mark class="comprar">🚨URGENTE!</mark></p>
    <?php  
            endif;       
         else:
    ?>
              <p class="normal">Estoque normal</p>         
    <?php
         endif;
    ?>     

    <h3>Condicional ENCADEADA: <code>if, eslseif, else</code></h3>

    <?php  
     $idade = 15;
     $situacao = ""; // opcional (nem é obrigatório declarar previamente)
     
     if($idade <= 12){
        $situacao = "criança";
     } elseif ($idade <= 17) {
        $situacao = "adolescente";
     } elseif ($idade <= 59){
        $situacao = "adulto";
     } else {
        $situacao = "idoso";
     }
    ?>
    
      <p>O usuário tem <?= $idade ?> anos e é <?= $situacao ?>.</p>

      <h3>Usando os comandos <code>switch/case/default/break</code></h3>

    <?php
     // Protótipo de chatbot: 
     // opções: 1 (informações), 2 (reclamação), 3 (elogio), x (inválida) 
      $opcao = 1;
     
        switch ($opcao) {
           case 1: $texto = "Legal, o que quer saber?"; break;
           case 2: $texto = "Que pena, o que houve?"; break;
           case 3: $texto = "Que bacana, pode falar!"; break;
           default: $texto = "Nao entendi ... vou chamar alguem"; break;
        }
    ?>
    <p><?= $texto ?></p>       
</body>
</html>