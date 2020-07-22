<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

$a = 3;
$b = 16;
$soma = $a + $b;
echo '<br>';
echo $soma . '<br>';
echo isset($soma);
unset($soma);
echo '<br>';
var_dump($soma);
echo '<br>';

$variavel = 10;
echo $variavel . '<br>';

$variavel = "Agora sou uma string!";
echo $variavel;

// Nomes de variáveis
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; //Porém pode ter conflito com compatibilidade
//$6var = 'invalida';
//$%var7 = 'invalida';
//$var8% = 'invalida';
echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
