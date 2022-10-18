<?php
//iniciando a sessao
session_start();
//conexao banco de dados
require_once 'conexao.php';

//verificando se existe (btn-cadastrar) na super global $_POST
if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

//inserindo os dados no banco de dados
    $sql = "INSERT INTO clientes(nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

//mostrando mensagem de sucesso ou erro
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Cadastrar!";
        header('Location: ../index.php');
    endif;

endif;

