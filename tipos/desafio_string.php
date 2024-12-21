<div class="titulo">Desafio String</div>

<?php
// -- Enuciado
echo 'Enunciado' . '<br>';
echo 'Avaliando os métodos da documentação da string. ';
echo 'Qual o método que a posição do texto \'abc\' na string \'!AbcaBcabc\' retorne 1?';
echo '<br>';
// -- 1° Método:
echo strpos('!AbcaBcabc','abc') . '<br>';
 
echo stripos('!AbcaBcabc','abc') . '<br>';

echo stripos(strtolower('!AbcaBcabc'),'abc') . '<br>';



