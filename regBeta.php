<?php
  if (!empty($_POST)){
    $PrimeiroNome = $_POST['PrimeiroNome'];
    $UltimoNome = $_POST['UltimoNome'];
    $Email = $_POST['Email'];
    $Endereco = $_POST['Endereco'];
    $Complemento = $_POST['Complemento'];
    $Cidade = $_POST['Cidade'];
    $Estado = $_POST['Estado'];
    $CEP = $_POST['CEP'];
    $Regiao = $_POST['Regiao'];

    echo $PrimeiroNome;
    echo $UltimoNome;
    echo $Email;
    echo $Endereco;
    echo $Complemento;
    echo $Cidade;
    echo $Estado;
    echo $CEP;
    echo $Regiao;
  }
?>
