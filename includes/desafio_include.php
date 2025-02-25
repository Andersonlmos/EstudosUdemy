<div class="titulo">Desafio Include</div>

<?php

require_once ('include_usuario.php');

$novaPessoa = new Usuario('Anderson', 30);
echo $novaPessoa->apresentar();