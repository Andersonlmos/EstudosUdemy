<div class="titulo">Desafio Operadores Lógicos</div>

<!--  
  Dois trabalhos -> terça e quinta.
 - Se os dois forem executados -> TV 50 e sorvete.
 - Se apenas um for executado -> TV 32 e sorvete.
 - Se nenhum for executado -> Ficar em casa mais saúdavel!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php

if(isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;
    
    if($t1 && $t2) {
        $tv ='50"';
    }elseif ($t1 xor $t2){
        $tv = '32"';
    }
    
    if($t1 or $t2) {
        $sorvete = true;
    }
    
    if($tv) {
        $resultado = "Vamos comprar uma TV de $tv";
    } else {
        $resultado = "Sem Tv dessa vez :(";
    }
    
    $saudavel = !$sorvete;
    
    if ($saudavel) {
        $resultado .= '<br>Estamos mais saudáveis';
    } else {
        $resultado .= '<br>Sorvete liberado \o/';
    }
    
    echo "<p>$resultado</p>";
}

