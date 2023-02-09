
<?php
// função de insert - ajustar para tabela destino
function db_insert_teste($nome, $email, $csenha) {
//global $conn;
$sql = "INSERT INTO tb_pessoa (id_user,nome_usuario,email_user,password_user) VALUES ('1','$nome',$email,$csenha)";
//$conn->query($sql);
return null;
}


// verificação da chegada de dados
//var_dump($_REQUEST);

// atribuição dos campos para variáveis
$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$csenha=$_REQUEST['csenha'];
// chamada da função
db_insert_teste($nome, $email, $csenha);

?>