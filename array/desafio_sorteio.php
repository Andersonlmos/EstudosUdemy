<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = [
     "Ana",
     "Paula",
     "Anderson",
     "Claudio",
     "José",
     "Beatriz",
     "Ricardo"
];

$sorteado = array_rand($nomes);
echo "<p center>O nome sorteado foi : </p>" . "<div center><h1>$nomes[$sorteado]</h1></div>" ;

?>
<style>
    [center] {
        display: flex;
        justify-content: center;
    }
    .botao {
        position: relative;
        left: 40%;
        width: 160px;
        height: 80px;
        border: none;
        background-color:rgb(13, 238, 227);
        border-radius: 8px;
        cursor: pointer;
        font-size: 20px;
        font-weight: 550;
    }
    .botao:hover{
        background-color:rgb(115, 229, 233);
    }
</style>
<button class="botao" onclick="atualizarPagina()">Sortear</button>
<script>
    function atualizarPagina () {
        location.reload();
    }
</script>
