
<?php

require_once("acesso_banco.php");
// função de insert - ajustar para tabela destino
function db_insert_teste($nome, $email, $csenha,$funcao) 
{
global $conn;
$sql = "INSERT INTO \"Projeto_loja\".tb_usuario(id_user,nome_usuario,email_user,password_user,funcionario) VALUES ('1','$nome','$email','$csenha',$funcao)";
$conn->query($sql);
return null;
}


// verificação da chegada de dados
//var_dump($_REQUEST);
// atribuição dos campos para variáveis

$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$csenha=$_REQUEST['csenha'];
$senha=$_REQUEST['senha'];
$funcao=$_REQUEST['funcao'];

if($funcao=='on' || $funcao!=NULL)
{
    $funcao='TRUE';
}
else
{
    $funcao='FALSE';
}

if($nome!=NULL && $email!=NULL && $csenha==$senha)
{
    // chamada da função
    db_insert_teste($nome, $email, $csenha,$funcao);
}

else
{
    echo "Informações incompletas";
}

?>
