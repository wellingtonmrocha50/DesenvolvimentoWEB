<?php
//conexão com o banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name );

//verificando se a erro de conexão
if(mysqli_connect_error()):
    echo "Erro na Conexão: ".mysqli_connect_error();
endif;