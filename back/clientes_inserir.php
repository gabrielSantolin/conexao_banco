<?php
    header('Content-Type: application/json');

    $NOME = $_GET['NOME'];
    $SOBRENOME = $_GET['SOBRENOME'];
    $EMAIL = $_GET['EMAIL'];
    $SENHA = $_GET['SENHA'];
    $ENDERECO = $_GET['ENDERECO'];
    $CIDADE = $_GET['CIDADE'];
    $ESTADO = $_GET['ESTADO'];
    $CEP = $_GET['CEP'];
    $AGENDAMENTO = $_GET['AGENDAMENTO'];

    require 'banco.php';

    $sql = "insert into clientes (NOME, SOBRENOME, EMAIL, SENHA, ENDERECO, CIDADE, ESTADO, CEP, AGENDAMENTO) values (:NOME, :SOBRENOME, :EMAIL, :SENHA, :ENDERECO, :CIDADE, :ESTADO, :CEP, :AGENDAMENTO)";

    $consulta = $conexao->prepare($sql);
    $consulta->bindParam(':NOME', $NOME, PDO::PARAM_STR);
    $consulta->bindParam(':SOBRENOME', $SOBRENOME, PDO::PARAM_STR);
    $consulta->bindParam(':EMAIL', $EMAIL, PDO::PARAM_STR);
    $consulta->bindParam(':SENHA', $SENHA, PDO::PARAM_STR);
    $consulta->bindParam(':ENDERECO', $ENDERECO, PDO::PARAM_STR);
    $consulta->bindParam(':CIDADE', $CIDADE, PDO::PARAM_STR);
    $consulta->bindParam(':ESTADO', $ESTADO, PDO::PARAM_STR);
    $consulta->bindParam(':CEP', $CEP, PDO::PARAM_STR);
    $consulta->bindParam(':AGENDAMENTO', $AGENDAMENTO, PDO::PARAM_STR);

    $consulta->execute();
?>