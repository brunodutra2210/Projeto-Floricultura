
<?php
require_once("acesso_banco.php");
function db_insert_produto($produto, $valor) 
{
global $conn;
$sql = "INSERT INTO \"Projeto_loja\".tb_produto(nome_produto,valor) VALUES ('$produto','$valor')";
$conn->query($sql);
return null;
}

function db_deleta_produto($produto) 
{
global $conn;
$sql = "delete from \"Projeto_loja\".tb_produto where nome_produto= '$produto';";
$conn->query($sql);
return null;
}

function db_altera_produto($produto,$valor,$produto_alterar) 
{
global $conn;
$sql = "update \"Projeto_loja\".tb_produto set (nome_produto,valor) = ('$produto', '$valor')
where nome_produto='$produto_alterar';";
$conn->query($sql);
return null;
}

$funcao=$_REQUEST["funcao"];
$produto=$_REQUEST['produto'];
$valor=$_REQUEST['valor'];
$produto_alterar=$_REQUEST['produto_alterar'];
if('adicionar'==$funcao)
{
    db_insert_produto($produto,$valor);
    echo "$produto adicionado com sucesso!";
}
if('excluir'==$funcao)
{
    db_deleta_produto($produto);
    echo "$produto deletado com sucesso!"; 
}
if('alterar'==$funcao)
{
    db_altera_produto($produto,$valor,$produto_alterar);
    echo "$produto_alterar alterado com sucesso!";    
}

?>