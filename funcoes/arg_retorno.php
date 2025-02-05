<div class="titulo">Argumentos e Retorno</div>

<?php

function obterMensagem (){
    return 'Seja bem vindo (a)!';
}

// obterMensagem();
$mensagem = obterMensagem();
echo $mensagem;

function obterMensagemComNome ($nome) {
    return "Seja bem vindo, {$nome}";
}

echo '<br>', obterMensagemComNome('Wagner');
echo '<br>', obterMensagemComNome('João');

function soma ($a, $b) {
    return $a + $b;
}

echo '<br>', soma (4, 48);

function trocarValor ($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 500);
echo '<br>', $variavel;