<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<hr>';

echo '<p>Concatenação</p>';
echo "Nós também" . ' somos.' . '<br>';
echo "Numero é " . 1234;
echo '<br>', "Também aceito", " virgulas.";

echo '<hr>';
echo "'Teste' " . '"Teste" ' . '\'Teste\'' . "\"Teste\"";

echo '<p>O PHP suporta o print no lugar do echo.</p>';
echo '<br>';
print("<br> Também existe essa função print");
print "<br> Também existe essa função print";

// Algumas funções
echo '<br>';
echo 'Algumas funções';
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('so a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . mb_strlen("Eu também");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');