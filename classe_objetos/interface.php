<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar();
    function correr();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
}

class Cachorro implements Canino {
    function respirar()
    {
        return "Irei usar oxigenio";
    }

    function latir(): string
    {
        return "Au, Au";
    }

    function mamar()
    {
        return "irei usar leite";
    }

    function correr()
    {
        return "vrummm";
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->respirar(), '<br>';
echo $animal->correr();


// Exemplo 02 ------------
//Interfaces garantem que serviços diferentes sigam um padrao, exemplo de um serviço de pagamento.
interface Pagamento {
    function processarPagamento($valor);
}

class PagamentoPaypal implements Pagamento {
    function processarPagamento($valor)
    {
        return "Pagamento de R$ $valor processado via PayPal.";
    }
}

class PagamentoPix implements Pagamento {
    function processarPagamento($valor)
    {
        return "Pagamento de R$ $valor processado via Pix";
    }
}

/* Interfaces ajudam a organizar o código, torná-lo mais flexivel e seguir boas praticas como principio SOLID. Elas são essenciais para projetos escaláveis, onde podemos trocar implementações sem modificar  o código que as utiliza.*/