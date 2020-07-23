<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;
echo $numero . '<br>';
$numero = $numero - 3;
echo $numero . '<br>';
$numero = $numero + 1.5;
echo $numero . '<br>';
$numero --; //$numero = @numero - 1;
--$numero; //$numero = $numero -1;
echo $numero . '<br>';
$numero ++; //$numero = $numero +1;
++$numero; //$numero = $numero +1;
echo $numero . '<br>'; 
$numero = 20;
echo $numero . '<br>'; 
$numero -= 5;
echo $numero . '<br>'; 
$numero += 5;
echo $numero . '<br>'; 
$numero *= 10;
echo $numero . '<br>'; 
$numero /= 2;
echo $numero . '<br>';
$numero %= 6; 
echo $numero . '<br>';
$numero **= 4;
echo $numero . '<br>';
$numero .= 4; // apenas concatenação!

$texto = 'Esse é um texto';
echo $texto . '<br>';
$texto = $texto . 'qualquer';
echo $texto . '<br>';
$texto .= ' de verdade';
echo $texto . '<br>';

//$variavelInexistente = 'valor existente';
echo $variavelInexistente . '<br>';
$valor = $variavelInexistente ?? 'valor default';
echo $valor . '<br>';






?>