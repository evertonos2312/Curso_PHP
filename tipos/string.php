<div class="titulo">String</div>

<?php

echo 'Eu sou uma string <br>';
echo 'Tipo: ', var_dump("Eu também"), '// 10 caract, pois UTF-8 conta o ´<br>';
echo '<p>Concatenação</p>';
echo "Nós também" . ' somos';
echo '<br>', "Também aceito", "virgulas", '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . " \\<br>"; 

print("Também existe a função print<br>");
print "Porém precisa de parênteses e aceita apenas um argumento";
print "<p>Algumas funções</p>";
echo 'strtoupper("maximizado"): ' . strtoupper('maximizado<br>');
echo 'strtolower("MINIMIZADO"): ' , strtolower('MINIMIZADO<br>');
echo 'ucfirst("só a primeira letra"): ' . ucfirst('só a primeira letra<br>');
echo 'ucwords("todas as letras"): ' . ucwords('todas as letras<br>');
echo 'strlen("Quantas letras?"): ' . strlen('Quantas letras?') . '<br>';
echo 'mb_strlen("Eu também", "utf-8") - Mais acertivo que o var_dump: ' . mb_strlen("Eu também", "utf-8") . "<br>";
echo 'substr("Só uma parte mesmo", 7, 6): ' . substr('Só uma parte mesmo', 7, 6) . "<br>";
echo 'str_replace("isso", "aquilo", "Trocar isso"): ' . str_replace('isso', 'aquilo', 'Trocar isso') . "<br>";


?>