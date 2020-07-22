<div class="titulo">Booleano</div>

<?php

echo 'TRUE = ' . TRUE . '<br>';
echo 'FALSE = ' . FALSE . '<br>';
echo 'var_dump(true): ' . var_dump(true) . '<br>';
echo 'var_dump(false): ' . var_dump(False) . '<br>';
echo 'var_dump("false"): ' . var_dump('false') . '<br>';
echo 'is_bool("false"): ' . var_dump(false) . '<br>';
echo 'is_bool("false"): ' . var_dump('true') . '<br>';

echo '<p>Regras de conversão:</p>';

echo 'var_dump((bool) 0): ' . var_dump((bool) 0) . '//Apenas zero é false<br>';
echo 'var_dump((bool) 20): ' . var_dump((bool) 20) . '<br>';
echo 'var_dump((bool) -1): ' . var_dump((bool) -1) . '<br>';
echo 'var_dump((bool) 0.0): ' . var_dump((bool) 0.0) . '<br>';
echo 'var_dump((bool) 0.000001): ' . var_dump((bool) 0.000001) . '<br>';
echo 'var_dump((bool) ""): ' . var_dump((bool) "") .'False<br>';
echo 'var_dump((bool) "0"): ' . var_dump((bool) "0") .'False<br>';
echo 'var_dump((bool) " "): ' . var_dump((bool) " ") .'Todo o resto é true<br>';
echo 'var_dump((bool) "00"): ' . var_dump((bool) "00") .'<br>';
echo 'var_dump((bool) "false"): ' . var_dump((bool) "false") .'<br>';
?>