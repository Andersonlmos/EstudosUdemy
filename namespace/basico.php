<?php namespace contexto; ?>

<div class="titulo">Namespace</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante1 = 123;
define('contexto\constante2', 345);
define(__NAMESPACE__ . '\constante3', 456);
define ('outro_contexto\constante4', 789);

echo constante1 . '<br>';
echo constante2 . '<br>';
echo \contexto\constante3  . '<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
echo \outro_contexto\constante4 . '<br>';
