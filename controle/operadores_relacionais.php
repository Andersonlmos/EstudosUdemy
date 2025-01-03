<div class="titulo">Operadores Relacionais</div>


<?php

var_dump(1 == 1);
var_dump(1 >= 1);
var_dump(1 == 2);
var_dump(1 <= 3);
var_dump(1 != 1);
var_dump(1 != 3);

var_dump(111 == "111");
var_dump(111 === "111");
var_dump(111 != "111");
var_dump(111 !== "111");


echo "<p>Relacionais no If/Else<p><hr>";
$idade = 29;

if($idade < 18) {
    echo "Menor de idade = $idade anos!<br>";
} elseif ($idade <=65) {
    echo "Adulto = $idade anos!<br>";
} else {
    echo "Terceira Idade = $idade anos!";
}
