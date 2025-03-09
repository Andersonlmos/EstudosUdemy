<div class="titulo">Erros Personalizados</div>
<p>Erros personalizados em PHP são exceções customizadas que pode ser criado para lidar com situações especificas na aplicação, além dos erros padrões do PHP.</p>
<hr>
<?php
class AgeRangeException extends Exception {
    public function __construct__ ($message, $code = 0, $previus = null) {
        parent::__construct__($message, $code, $previus);
    }
}
function calcularTempoAposentadoria($idade) {
    if ($idade < 18) {
        throw new AgeRangeException('Ainda esta longe');
    }

    if ($idade > 70) {
        throw new AgeRangeException('Já deveria estar aposentado');
    }
    return 70 -$idade;
}

$idadesAvaliadas = [15, 30, 45, 60, 80];
foreach($idadesAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes<br>";
    } catch (AgeRangeException $e) {
        echo "Não foi possivel calcular para $idade anos<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}

echo "Fim";