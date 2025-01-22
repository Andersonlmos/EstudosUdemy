<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
    "nome" => "Roberto",
    "idade" => 26,
    "naturalidade" => "Bahia"
    ],
    [
    "nome" => "Ana",
    "idade" => 30,
    "naturalidade" => "São Paulo"
    ],
];

print_r($dados);

echo '<br>' .$dados [0] ['idade'];// acessa um alemento no array

$dados [] = [
    "nome" => "Anderson",
    "idade" => 30,
    "naturalidade" => "Caucaia"
]; // adicionar um elemento dentro do array
echo '<br>';
print_r($dados);

$dados [2] ["vizinho"] = "Thais";
echo '<br>';
print_r($dados);