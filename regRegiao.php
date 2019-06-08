<?php
  if (!empty($_POST)){
    $NomeReg = $_POST['NomeReg'];
    $Localidade = $_POST['Localidade'];
    $Lancamento = $_POST['Lancamento'];
    $Descricao = $_POST['Descricao'];

    echo $NomeReg;
    echo $Localidade;
    echo $Lancamento;
    echo $Descricao;
  }
?>
