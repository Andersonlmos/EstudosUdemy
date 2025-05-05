<div class="titulo">Datas 01</div>

<?php
echo time() . '<br>';
echo date('D, d M Y') . '<br>';
echo date ('D, d \d\e M \d\e Y');

echo strftime('%A, %d de %B de %Y', time() ) . '<br>'; //Esta absoluta 

set locale(LC_TIME)