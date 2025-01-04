<div class="titulo">Desafio Pi</div>

<?php
echo pi();
$pi = 3.4;

if($pi == pi()) {
    echo "<br>Iguais";
} else {
    echo"<br>Diferentes";
}

// Operador relacional 
$pierrado = 2.8;

//Resposta
// echo '<br>' . ($pi - pi());
// echo '<br>' . ($pi - $pierrado);

if($pi - pi() <= 0.01) {
    echo '<br>Praticamente iguais!';
}

if($pi - $pierrado <= 0.01) {
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor Errado';
}