<div class="titulo">Argumentos Padrão</div>

<?php
function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente") {
    return "Bem vindo $nome, $sobrenome! <br>";
}
echo saudacao();
echo saudacao('Caro');
echo saudacao('Caro', null);
echo saudacao(null);
echo saudacao(NULL, null);

function anotarPedido($comida, $bebida = 'Agua') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}
anotarPedido('Pizza');
anotarPedido('');
anotarPedido('', 'refrigerante');
anotarPedido(null, null);