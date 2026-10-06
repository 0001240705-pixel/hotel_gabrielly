<?php

session_start();

if ( !isset ($_SESSION['logado']) || $_SESSION['logado'] !== true) {

header ("Location: login.html.html");
exit ();
}

?>

<?php 
require_once "conexao.php";

$cliente_id = $_GET['cliente_id'];

$sql = "SELECT
reservas.id AS id_reservas, hoteis.nome AS nome_hotel,
quartos.tipo,
quartos.preco_diaria,
reservas.data_entrada, reservas.data_saida, reservas.total
FROM reservas JOIN quartos ON reservas.quarto_id = quartos.id
 JOIN hoteis ON quartos.hotel_id = hoteis.id";

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
        <th>cód. reserva</th>
        <th>Nome hotel</th>
        <th>tipo do quarto</th>
        <th>diária</th>
        <th>Entrada (check-in)</th>
        <th>Saída (check-out) </th>
    </tr>

    <?php 
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
        <td>".$linha['id_reservas']."</td>
        <td>".$linha['nome_hotel']."</td>
        <td>".$linha['tipo']."</td>
        <td>".$linha['preco_diaria']."</td>
        <td>".$linha['data_entrada']."</td>
        <td>".$linha ['data_saida']."</td>
        </tr>";
    }
     ?>

</table>

<br>
<a href="listar_hoteis.php">Voltar à lista de hotéis</a>

</body>
</html>