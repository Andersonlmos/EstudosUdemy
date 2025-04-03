<div class="titulo">Básico Sessão</div>

<?php
session_start();
print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Anderson';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'anderson@zmail.com'; 
}

print_r($_SESSION);

?>

<p>

<a href="exercicio.php?dir=sessao&file=basico_sessao_alterar">
        Alterar Sessão
    </a>
</p>