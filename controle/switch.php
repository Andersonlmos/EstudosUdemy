<div class="titulo">Switch</div>

<?php
$categoria = 'suv';
switch (strtolower($categoria)){
    case 'luxo';
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv';
    case 'suv básico';
        $carro = 'Renegade';
        $preco = 88000;
        break;
    case 'sedan';
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 30000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br> Preço: $precoFormatado</p>";