<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastrar.css">
    <title>Sistema Comentario-cadastrar</title>
</head>
<body>
    <form action="" method="POST">
        <h1 id="h1-titulo">CADASTRE - SE</h1>
        
        <label for="nome">Nome</label>
        <input type="text"  id="nome" required minlength="3" maxlength="40">

        <label  for="email">Email</label>
        <input type="email"  id="email" autocomplete="off" required  minlength="#" maxlength="40">

        <label  for="password" >Senha</label>
        <input type="password" id="password" required minlength="6" maxlength="8">

        <label  for="confpassword" >Confirmar Senha</label>
        <input type="password"  id="confpassword" required minlength="6" maxlength="8">

        <input type="submit" value="Cadastrar">
        
       
    </form>
</body>
</html>

<?php
//1-verificar se apertou o botao cadastrar
if(isset($_POST['nome'])){
//2-guardar dados dentro de variaveis
$nome =htmlentities(addslashes($_POST['nome']));
$email = htmlentities(addslashes($_POST['email']));
$senha = htmlentities(addslashes($_POST['senha']));
$confSenha = htmlentities(addslashes($_POST['confSenha']));

if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confSenha))
{
    if($senha == $confsenha){
        require_once 'classes/usuario.php';
        $us = new Usuario("projeto_comentario", "localhost", "root", "");
        if($us->cadastrar($nome,$email,$senha)){
            echo "Cadastrado com Sucesso!";
        }else{
            echo "Email ja Cadastrado!";
        }

    }else{
        echo "senha Invalida";
    }
    
}else{

    echo "Preencha todos os campos";
}

}


//enviar dados colhidos para a casse funcao cadastrar

//verificar o retorno false ou true
?>