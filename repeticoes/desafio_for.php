<!--
Usar o for...
#
##
###
####
#####
01) - Pode usar o incremento $++
02) - Não pode usar o incremento $i++ -->
 <div class="titulo">Desafio For</div>

 <?php
$impressao = '';
for ($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}
echo '<hr>';

for (
    $impressao2 = "#";
    $impressao2 !== '######';
    $impressao2 .= '#'
){
    echo "$impressao2 <br>";
}
