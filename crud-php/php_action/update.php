<?php
//iniciando a sessao
session_start();
//conexao banco de dados
require_once 'conexao.php';

//verificando se existe (btn-cadastrar) na super global $_POST
if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    $id = mysqli_escape_string($connect, $_POST['id']);

//inserindo os dados no banco de dados
    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

//mostrando mensagem de sucesso ou erro
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('Location: ../index.php');
    endif;

endif;

