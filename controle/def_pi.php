<div class="titulo">Desafio PI</div>

<?php

echo number_format(pi(), 2);
$pi = 3.14;

if($pi === number_format(pi(), 2)){
    echo "<br>Iguais<br>";
}else {
    echo "Diferente";
}
