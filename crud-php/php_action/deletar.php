<?php
//iniciando a sessao
session_start();
//conexao banco de dados
require_once 'conexao.php';

//verificando se existe (btn-cadastrar) na super global $_POST
if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

//inserindo os dados no banco de dados
    $sql = "DELETE  FROM  clientes WHERE id = '$id'";

//mostrando mensagem de sucesso ou erro
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com Sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Deletar!";
        header('Location: ../index.php');
    endif;

endif;

