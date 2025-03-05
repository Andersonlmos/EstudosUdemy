<div class="titulo">Try & Catch</div>
<p>O PHP retonará erros em respostas a inumeras condições de erros internos, Pode ser utilizado para realizar inumeras condições diferentes, Cada erro que o PHP gera inclui um tipo.</p>
<hr>
<?php
// echo 7 / 0;
// echo intdiv(7, 0);

try {
    echo intdiv(7, 0);
} catch (Error $e) {
    echo 'Teve um erro aqui <br>';
}

try{
    throw new Exception ('Um erro muito estranho');
    echo intdiv (7, 0);
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero <br>';
} catch (Throwable $e) {
    echo 'Erro Encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executando!<br>';
}

echo 'Execução continua...';