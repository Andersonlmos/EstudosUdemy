<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Anderson",
    "idade" => 30
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua B";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo'<br>';

$indice = array_rand($dadosCompletos); //Gera um indice aleatoriamente
echo "$indice = $dadosCompletos[$indice]";

echo '<br>';

echo "{$dadosCompletos['idade']}";
echo '<br>';

unset($dadosCompletos["nome"]); // liberar memoria no array
echo '<br>';
var_dump($dadosCompletos);
echo '<br>';

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = array_merge($impares, $pares); //faz uniao dos arrays
echo '<br>';
print_r($decimais);

echo '<br>';

sort($decimais); // ordena os indices dos arrays
echo '<br>';
print_r($decimais);