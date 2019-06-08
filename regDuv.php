<?php
  if (!empty($_POST)){
    print_r($_POST);

    $Nome = $_POST['Nome'];
    $Email = $_POST['Email'];
    $Mensagem = $_POST['Mensagem'];

    echo $Nome;
    echo $Email;
    echo $Mensagem;
  }
?>
