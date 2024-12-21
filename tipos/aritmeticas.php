<div class="titulo"> Operações Aritméticas PHP</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1.0);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo 10 - 3, '<br>';
echo 7 % 4, '<br>';
echo 8 % 2, '<br>';
echo 7 / 3, '<br>';

// Precedencias de operações:
// () => ** => / * % => + -

echo '<hr>';
echo '<p>Precedencia</p>';

echo '() => ** => / * % => + -';
echo '<br>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;

