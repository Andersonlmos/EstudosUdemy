<div class="titulo">Desafio Tabela</div>

<?php
$matriz = [
    ['1', '2', '3', '4', '5'],
    ['6', '7', '8', '9', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];
echo "<table>";
foreach($matriz as $linhas) {
    echo '<tr>';
    foreach($linhas as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo '<hr>';

echo '<table>';
foreach($matriz as $index => $linha) {
    $style = $index % 2 === 0 ? 'background-color: blue;' : '';
    echo "<tr style='{$style}'>";
    foreach($linha as $valor){
        echo "<td>$valor</td>";
    }
    echo '</tr>';
}
echo '</table>';
?>

<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px ;
    }
    table tr {
        border: 1px solid #444;
    }
    table td {
        border: 1px solid #444;
        padding: 10px 20px;
    }
</style>