<div class="titulo">Tipo Booleano</div>

<?php


echo TRUE;
echo FALSE;
echo '<br>';

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . var_dump('true');

echo '<br>' . is_bool('false');
echo '<br>' . is_bool('true');

// Fazer as regras de conversões

echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0);
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.0000000001);
echo '<br>' . var_dump((bool) ""); //false
echo '<br>' . var_dump((bool) " "); //false
echo '<br>' . var_dump((bool) "0"); // Todo resto é true
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump(!!"false");
echo '<br>' . var_dump(!"false");