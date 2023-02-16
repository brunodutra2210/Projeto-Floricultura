<?php

require_once("acesso_banco.php");


function db_autenticacao($email, $csenha) 
{
    global $conn;
    $sql = "SELECT email_user from \"Projeto_loja\".tb_usuario WHERE email_user='$email' AND password_user='$csenha'";
    return $conn->query($sql)->fetchAll();

    
}


$email=$_REQUEST['email'];
$csenha=$_REQUEST['csenha'];
//var_dump(db_autenticacao($email, $csenha));
if(db_autenticacao($email, $csenha))
{
    echo "acesso permitido";
}
else
{
    echo "acesso negado";
}

?>