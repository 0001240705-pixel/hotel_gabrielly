<?php 

require_once 'conexao.php';

$id_hotel = $_POST ['id_hotel'];
$numero_quarto = $_POST ['numero_quarto'];
$tipo_quarto = $_POST ['tipo_quarto'];
$preco = $_POST ['preco'];

$sql = "INSERT INTO quartos (hotel_id,numero,tipo, preco_diaria, disponivel) VALUES
($id_hotel, $numero_quarto, $preco, $tipo_quarto, 1)";

if (mysql_query ($conexao, $sql)) {
    echo "Quarto criado com sucesso"; 
    echo "<a href= 'cadastrar_quarto.html>Voltar<\a>";
} else {
    echo "Erro de cadastro do quarto"
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Listar Quartos Cadastrados</title>
<style>
table {
    width: 100%;
 border-collapse: collapse;
}
th, td {
border: 1px solid #ddd;
 padding: 8px;
 text-align: left;
}
th {
background-color: #f2f2f2;
}
.acoes {
 margin-top: 20px;
}
</style>
</head>
<body>
<h2>Lista de Quartos Cadastrados</h2>
<table>
<thead>
<tr>
<th>ID</th>
<th>Número do Quarto</th>
<th>Tipo</th>
<th>Preço Diária</th>
<th>Status</th>
</tr>
</thead>
<tbody>

<?php
while ($quarto = mysqli_fetch_assoc($resultado)) {
echo "<tr>";
echo "<td>" . htmlspecialchars($quarto['id']) . "</td>";
echo "<td>" . htmlspecialchars($quarto['numero']) . "</td>";
echo "<td>" . htmlspecialchars($quarto['tipo']) . "</td>";
echo "<td>" . htmlspecialchars($quarto['preco_diaria']) . "</td>";
echo "<td>" . htmlspecialchars($quarto['status']) . "</td>";
echo "</tr>";
}
?>
</tbody>
</table>
<div class="acoes">
<a href="cadastrar_quarto.php">Cadastrar novo quarto</a> |
<a href="index.php">Voltar/Sair</a>
</div>
</body>
</html>