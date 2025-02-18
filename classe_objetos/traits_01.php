<div class="titulo">Traits #01</div>

<?php
/*
Traits são um mecanismo que permite reutilizar código em diferentes classes sem a necessidade de herança. */

trait Loggable {
    public function log($message) {
        echo "[LOG]: " . $message . PHP_EOL;
    }
}

Class User {
    use Loggable;

    public function createUser ($name) {
        $this->log("Usuario {$name} criado com sucesso.");
    }
}

$user = new User();
$user->createUser("Anderson");

trait validacao {
    public function validarStringh($str) {
        return isset($str) && $str !== '';
    }
}
trait validacaoMelhor {
    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;
}

$usuario = new Usuario();
var_dump($usuario->validarStringh(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(''));