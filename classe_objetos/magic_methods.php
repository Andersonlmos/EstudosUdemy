<div class="titulo">Metodos Magicos</div>
<?php
/*
Chamado automaticamente quando um objeto é instanciado. Ele inicializa propriedades ou executa código necessario logo na criação do objeto.
*/

//__construct - Ele inicializa ou executa código necessario logo na criação do objeto.

//__destruct - Chamado automaticamente quando o objeto é destruido ou o script termina. Util para liberar recursos, fechar conexões, etc.

class usuario {
    public $nome;
    public $idade;
    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade= $idade;
    }

    function __destruct()
    {
        echo "E terminou <br>";
    }
}
$usuario = new Usuario("Anderson", 30);
 echo $usuario->nome,'<br>';
 echo $usuario->idade, '<br>';

 unset($usuario);


//__toString

//Define o comportamento do objeto quando ele é convertido para uma string.

//exemplo: Retorna representações de objetos em logs, mensagens de erro ou exibição de dados.

class Pessoa {
    private $sobrenome;
    public function __construct($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function __toString()
    {
        return "Sobrenome: " . $this->sobrenome . '<br>';
    }
}

$pessoa = new Pessoa("Lemos");
echo $pessoa;


//__get($propriedade)

//Chamado quando tentamos acessar uma propriedade privada/inexistente de um objeto

//Exemplo: Criar classes dinamicas para armazenar dados sem definir explicitamente cada propriedade.

class Produto {
    private $dados = ["nome" => "Teclado", "preco" => 150];

    public function __get($name)
    {
        return $this->dados[$name] ?? "Propriedade nao encontrada";
    }
}

$p = new Produto();
echo $p->nome, '<br>';
echo $p->preco, '<br>';
echo $p->cor, '<br>';

//__set($propriedade, $valor)

//Chamado quando tentamos definir um valor para uma propriedade privada/inexistente

//Exemplo: Criar configurações dinamicas, armazenar dados em arrays internos.

class Config{
    private $dados = [];

    public function __set($propriedades, $valor) {
        $this->dados[$propriedades] = $valor;
    }

    public function __get($propriedades)
    {
        return "Tema: " . $this->dados[$propriedades] ?? "Não configurado";
    }
}

$config = new Config();
$config->tema = "Escuro <br>";
echo $config->tema;


//__call($metodo, $parametros)
//Chamado quando tentamos invocar um método inexistente.
//Exemplo: Criar APIs dinâmicas onde métodos são chamados com base em parâmetros, como um wrapper de requições HTTP.

class Api {
    public function __call($name, $arguments)
    {
        return "O método '$name' nao existe. Parâmetros: " . implode(", ", $arguments);
    }
}

$api = new Api();
echo $api->buscar("usuarios", 10);