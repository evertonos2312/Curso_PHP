<div class="titulo">Interpolação</div>

<?php

$numero = 10;
echo $numero;
echo '$numero <br>';
echo "$numero <br>";

$texto = "A sua nota é: $numero";
echo "$texto <br>";

$nota1 = 8;
$nota2 = 6;
$nota3 = 9;

$media = ($nota1 + $nota2 + $nota3) / 3;
$media = number_format($media, 2);

$frase = "Sua média anual foi {$media}";
echo "$frase <br>";

$media += 1;
$frase2 = "Média corrigida {$media}";

echo "$frase2 <br>";

