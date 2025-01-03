<div class="titulo">IF e Else</div>


<?php
if (true) {
    echo "Serei impresso?<br>";
}

if(true) {

    echo "Verdadeiro 1<br>";
    echo "Verdaeiro 2<br>";
} else {
    echo "Falso 1<br>";
    echo "Falso 2";
}

if(true) {
    echo "Passo A<br>";
} elseif (false) {
    echo "Passo B<br>";
} elseif (true) {
    echo "Passo C<br>";
} else 
    echo "Ultimo passo";
echo "Fim <br>";