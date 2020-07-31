<div class="titulo">Break - Continue</div>

<?php
$cont = 10;

for(;;){
    echo "$cont <br>";
    $cont ++;
    if($cont > 15){
    break;
}
}
echo "Fim";