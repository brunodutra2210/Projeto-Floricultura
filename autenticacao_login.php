<?php

require_once("acesso_banco.php");


function db_autenticacao($email, $csenha) 
{
    global $conn;
    $sql = "SELECT email_user from \"Projeto_loja\".tb_usuario WHERE email_user='$email' AND password_user='$csenha'";
    return $conn->query($sql)->fetchAll();
}
function db_redirecionamento($email) 
{
    global $conn;
    $sql ="select funcionario from \"Projeto_loja\".tb_usuario where email_user='$email';";

    return $conn->query($sql)->fetchAll();

}

$email=$_REQUEST['email'];
$csenha=$_REQUEST['csenha'];
var_dump(db_redirecionamento($email));

if(db_autenticacao($email, $csenha))
{
    if(db_redirecionamento($email))
    {
        header('Location: menu_principal.php');
    }
    
    else
    {
        echo "deu ruim meu chapa";
    }    
}
else
{   
    header('Location: login.php');
}

?>
