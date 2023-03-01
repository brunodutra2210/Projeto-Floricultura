
<?php
$con = pg_connect("host=200.19.1.18 port=5432 dbname=brunobem user=brunobem password=123456");

// Executa a consulta
$result = pg_query($con, "SELECT * FROM \"Projeto_loja\".tb_produto");

// Exibir a tabela
echo '<table>';
echo '<tr>
<td><h3>Produto</h3></td>
<td><h3>Valor</h3></td>
</tr>';
while ($row = pg_fetch_array($result)) {
    echo '<tr>';
    echo '<td>'.$row['nome_produto'].'</td>';
    echo '<td>'.$row['valor'].'</td>';
    echo '</tr>';
}
echo '</table>';
echo '<br>';

echo "<form>";
echo "Comprar <input type=\"text\" name=\"compra\">";
echo "</form>";

// Fecha a conexão
pg_close($con);
?>