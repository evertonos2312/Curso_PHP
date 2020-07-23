<div class="titulo">Valor vs Referência</div>

<?php

$variavel = 'valor inicial';
echo "$variavel <br>";

//Atribuição por valor
$variavelValor = $variavel;
echo "$variavelValor<br>";
$variavelValor = 'novo valor';
echo "$variavel $variavelValor <br>";

//Atribuição por referência

$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "$variavel $variavelReferencia <br>";