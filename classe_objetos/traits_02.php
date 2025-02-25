<div class="titulo">Traits #02</div>
<?php
/*
Traits são um mecanismo para reuso de código em linguagens de herança simples. A intenção é reduzir algumas limitações de herança simples permitindo reutilizar conjuntos de métods em várias classes independentes
*/
trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString ($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor{
        validacaoMelhor::validarString insteadOf validacao;

        validacao::validarString as validacaoSimples;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(''));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));