<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assests/style.css" />
    <link rel="stylesheet" href="assests/login.css" />
    <title>Curso PHP</title>
  </head>
  <body class="login">
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Seja Bem-vindo!</h2>
    </header>
    <main class="principal">
      <div class="conteudo">
          <h3>Identifique-se</h3>
          <?php if (isset($_SESSION['erros'])): ?>
              <div class="erros">
                <?php foreach ($_SESSION['erros'] as $erro): ?>
                    <p><?= $erro ?></p>
                <?php endforeach ?>
              </div>  
          <?php endif ?>
          <form action="#" method="POST">
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <button class="button">Entrar</button>
          </form>
      </div>
    </main>
      <?php require_once "template/footer.php"?>
  </body>
</html>
