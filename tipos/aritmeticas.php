<div class="titulo">Operações Aritméticas</div>

<?php

echo '1 + 1 = ', 1 + 1, '<br>';
echo 'Tipo (1 + 1): ', var_dump(1 + 1), '<br>';
echo '1 + 2.5 = ', 1 + 2.5, '<br>';
echo '10 - 2 = ', 10 - 2, '<br>';
echo '2 * 5 = ', 2 * 5, '<br>';
echo '7 / 4 = ', 7 / 4, '<br>';
echo 'intdiv(7 / 4) = ', intdiv(7, 4), '<br>';
echo 'round(7 / 4)= ', round(7 / 4), '<br>';
echo '7 % 4 = ', 7 % 4, '<br>';
echo '7 % 2 = ', 7 % 2, ' - Ímpar', '<br>';
echo '8 % 2 = ', 8 % 2, ' - Par', '<br>';
echo '4 ^ 2 = ', 4 ** 2, '<br>';
echo '<p>Precedência:</p>';
echo '2 + 3 * 4 = ', 2 + 3 * 4, '<br>';
echo '(2 + 3) * 4 = ', (2 + 3) * 4, '<br>';
echo '2 + 3 * 4 ** 2 = ', 2 + 3 * 4 ** 2, '<br>';
echo '((2 + 3) * 4) ** 2 = ', ((2 + 3) * 4) ** 2, '<br>';


?>