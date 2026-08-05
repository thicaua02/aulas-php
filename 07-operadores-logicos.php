<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - operadores lógicos</title>
</head>
<body>
    <h1>Trabalhando com operadores lógicos</h1>
    <hr>

    <h2>&& (E/AND) </h2>
    <P>retorna <b>verdadeiro/true</b> se <b>todas</b> as condições forem
    verdadeiras.</P>

     <?php  
     $nota1 = 10;
     $nota2 = 7;
     $media = ($nota1 + $nota2) / 2;
     $faltas = 1;
     ?>

          <p><b>Média: </b> <?= $media ?></p>
          <p><b>Faltas: </b> <?= $faltas ?></p>
      
     <!-- O aluno só estará aprovado se tiver média de pelo menos 7
       e faltas de no máximo 10 -->
       
     <?php if($media >= 7 && $faltas <= 10): ?>
        <p>Aprovado!</p>  
     <?php else: ?>
        <p>Reprovado</p>
     <?php endif; ?>  
     
        <hr>
        <!-- || duplo PIPE -->
         <h2>|| (OU/OR)</h2>
         <p>Retorna <b>verdadeiro/true</b> se pelo menos <b>uma</b> das condições 
         for verdadeira</p>
     
     <?php
     /* Dar um desconto a um cliente desde que ele(a) seja VIP ou
     que tenha cupom de desconto */
     $valor = 500;
     $clienteVIP = false; // valor/tipo lógico (ou booleano)
     $temCupom = false; // valor/tipo lógico (ou booleano)
     $percentualDesconto = 0.10; // 10%

     if($clienteVIP || $temCupom):
     ?>   
         <p>Desconto aplicado com sucesso!</p>
         <p>Valor: R$  <?= $valor - $valor * $percentualDesconto ?></p>
     <?php 
     else:
     ?>
         <p>Sem Desconto!</p>
         <p>Valor: R$ <?= $valor ?></p>
     <?php  
     endif;
     ?>   
     
         <hr>
         <h2>! (NÃO/NEGAÇÃO/NOT)</h2>
         <P>Inverte a lógica, ou seja, <b>verdadeiro/true</b> verdadeira
         <b>falso/false</b></P>

     <?php 
     /* Se o usuário NÃO ESTIVER logado, mostre o link de login.
     Caso contrário, exibir uma saudação. */
     $usuarioLogado = false;

     if(!$usuarioLogado):
     ?>
          <p><a href="">Login (entre com seus dados)</a></p>
     <?php
     else:
     ?>
          <p>Bem-vindo(a) ao sistema</p>
     <?php
     endif;
     ?>        
         
</body>
</html>