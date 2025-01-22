<div class="titulo">Array Constantes</div>

<?php

const FRUTAS = ['laranja', 'abacaxi'];
// Frutas = ['banana'];
print_r(FRUTAS);
echo '<br>' . FRUTAS[0];

const CARROS = [
    "Fiat" => "Uno",
    "Ford" => "Fiesta",
];
print_r (CARROS);

define ('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES [1];