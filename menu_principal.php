<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New_request</title>
</head>
<body>

<?php
//botão logout
if (isset($_POST['logout'])) {
  session_start();
  session_destroy();
  header('location: Login.php');
}
?>
<form method="post">
<input type="submit" name="logout" value="Logout" />
</form>

<form action="inserir_produto.php" method="REQUEST">
<table border="2" width="150px" height="150px">
  <tr>
    <th>Produto</th>
    <th>Valor</th>
    <th>Substituir Produto</th>
  </tr>
  <tr>
  <?php 
   echo "<td> <input type=\"text\" name=\"produto\"> </td>";
   echo "<td> <input type=\"float\" name=\"valor\"> </td>";
   echo "<td> <input type=\"text\" name=\"produto_alterar\"> </td>";
   ?>
</tr>
<br>
<table border="1" width="50px" height="50px">
  <tr> 
  <th>Excluir</th>
  <th>Adicionar</th>
  <th>Alterar</th>
  </tr>
  <tr>
  <?php 
   echo "<td> <input type=\"radio\" name=\"funcao\" value=\"excluir\"> </td>";

   echo "<td> <input type=\"radio\" name=\"funcao\" value=\"adicionar\"> </td>";

   echo "<td> <input type=\"radio\" name=\"funcao\" value=\"alterar\"> </td>";
   
   echo "</tr>";
  ?>
  </tr>
</table>
<br>
<button type="submit" name="concluir">Concluir</button>
</form>

</body>
</html>