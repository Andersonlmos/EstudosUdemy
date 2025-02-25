<div class="titulo">Include</div>

<?php
echo 'Executando arquivo com include<br>';
include('include_arquivo.php');

echo soma(3, 8) . '<br>';
echo "O chamado da variavel é '{$variavel}'.<br>";

/*Se o arquivo especificado não for encontrado o PHP gera um Warning mas continua executado o script.*/ 

include ('includefuncoes.php');
echo saudacao("Anderson");

