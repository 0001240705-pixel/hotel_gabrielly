<?php
require_once "conexao.php";

$cliente_id = $_GET['cliente_id'];

$sql = "SELECT quartos.numero, quartos.preco_diaria,
reservas.data_entrada, reservas.data_saida, reservas.total
FROM reservas JOIN quartos ON reservas.quarto_id = quartos.id
WHERE reservas.cliente_id = '$cliente_id'";

$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minhas Reservas</title>
</head>
<body>

<h2>Minhas Reservas</h2>

<table border="1">
    <tr>
        <th>Quarto</th>
        <th>Preço</th>
        <th>Entrada</th>
        <th>Saída</th>
        <th>Total</th>
    </tr>

    <?php while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
        <td>".$linha['numero']."</td>
        <td>".$linha['preco_diaria']."</td>
        <td>".date('d/m/Y', strtotime($linha['data_entrada']))."</td>
        <td>".date('d/m/Y', strtotime($linha['data_saida']))."</td>
        <td>".$linha['total']."</td>
        </tr>";
    } ?>
</table>

<br>
<a href="listar_hoteis.php">Voltar à lista de hotéis</a>

</body>
</html>
