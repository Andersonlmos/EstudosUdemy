<div class="titulo">Desafio Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1;

    public function apresentar() {
        $diaFormatado = sprintf('%02d', $this->dia);
        //Irá transformar $this->dia em uma string que representa um numero. Essa string terá tamanho 2 e será um número no formato decimal. caso o numero nao possa ser convertido em uma string de duas casas(como é o caso de 1,2,3,4,etc.) um 0 será inserido na frente do número.
        $mesFormatado = sprintf('%02d', $this->mes);
        return "Data de aniversario: {$diaFormatado}/{$mesFormatado}/{$this->ano}";
    }
}

$aniversario = new Data();
$aniversario->dia = 16;
$aniversario->mes = 11;
$aniversario->ano = 1994;
echo $aniversario->apresentar(), '<br>';

$dataNascimento = new Data();
$dataNascimento->dia = 21;
$dataNascimento->mes = 1;
$dataNascimento->ano = 2024;
echo $dataNascimento->apresentar(), '<br>';