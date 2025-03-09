<div class="titulo">Error Handler</div>
<p>O Error Handler é um mecanismo que permite capturar e tratar erros de forma personalizada. Normalmente, o PHP exibe mensagens de erro padrão quando algo dá errado, mas com o Error Handler, pode-se definir como os erros serão tratados, registrados ou ate impedir que sejam exibidos para o usuario final.</p>
<p>O Erro Handler é essencial para garantir que erros sejam tratados corretamente, melhorando a segurança, a experiencia do usuario e a depuração do código.</p>
<hr>
<?php
ini_set('display_erros', 1);
// echo 4 / 0 .'<br>';

error_reporting(E_ERROR);
// echo 4 / 0 . '<br>';

error_reporting(~E_ALL);
echo 4 / 0 . '<br>';

error_reporting(E_ALL);


function meuErroHandler($errno, $errstring, $errfile, $errline) {
    $text = 'variable';
    return !!stripos(" $errstring", $text);
}

set_error_handler("meuErroHandler", E_WARNING);
echo $variavelNaoDefinida;
