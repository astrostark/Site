<?php

  session_start();
  if (!empty($_SESSION['usuarioLogado'])){
    $usuarioLogado = $_SESSION['usuarioLogado'];
  }

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <style>
      html body{
       background: url("img/Card3.jpg") no-repeat center center fixed;
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
      },
      .container {
       margin: auto;
       width: 50%;
       border: 3px solid green;
       padding: 10px;
      }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cyberpunk 2077</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Cyberpunk 2077</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Início<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Registro
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="cadBeta.php">Beta</a>
              <a class="dropdown-item" href="cadPre.php">Pré-Order</a>
            </div>
          </li>
          </li><li class="nav-item">
            <a class="nav-link" href="FaleConosco.php">Mande suas dúvidas!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"><?php if(!empty($_SESSION)){echo "Usuário: ", $usuarioLogado;} ?></a>
          </li><li class="nav-item">
            <a name="Logout" class="nav-link" href="logout.php"><?php if(!empty($_SESSION)){echo "Logout";} ?></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <h3 style="color: white;">Mande suas Dúvidas!</h3>
      <form action="regDuv.php" method="POST">
        <div class="form-group">
          <input name="Nome" type="Nome" class="form-control" id="inputNome" placeholder="Nome Completo">
        </div>
        <div class="form-group">
          <input name="Email" type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
          <textarea name="Mensagem" class="form-control" id="exampleFormControlTextarea1" placeholder="Dúvidas: " rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Registrar</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
