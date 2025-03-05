<?php namespace App; ?>
<div class="titulo">Sub-namespace</div>

<?php
echo __NAMESPACE__ . '<br>';
CONST constante = 123;

namespace App\Models;
echo __NAMESPACE__ . '<br>';
CONST constante = 456;

namespace App\Models\Produtos;
echo __NAMESPACE__ . '<br>';
const constante = 789;

echo \App\constante . '<br>';
echo \App\Models\constante . '<br>';
echo constante . '<br>';
