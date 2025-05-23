<?php
session_start();
include ('include_cookie.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assests/style.css"/>
    <link rel="stylesheet" href="assests/exercicio.css"/>
    <title>Curso PHP</title>
  </head>
  <body class="exercicio1">
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Visualização dos Exercicios</h2>
    </header>
    <nav class="navegacao">
      <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
      <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
      <a href="index.php">Voltar</a>
      <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
      <div class="conteudo">
        <?php ini_set('display_erros', 0);
          include($_GET['dir'] . "/" . $_GET['file'] . ".php");
        ?>
      </div>
    </main>
    <footer class="footer">
      COD3R & ALUNOS <?=date('Y'); ?>
    </footer>
  </body>
</html>
