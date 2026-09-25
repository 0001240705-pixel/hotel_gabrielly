<?php

require_once "conexao.php";

$id_cliente = $_POST['id_cliente'];
$id_quarto = $_POST['id_quarto'];
$data_entrada = $_POST['data_entrada'];
$data_saida = $_POST['data_saida'];

$sql = "INSERT INTO reservas 
(id_cliente, id_quarto, data_entrada, data_saida)
VALUES 
('$id_cliente', '$id_quarto', '$data_entrada', '$data_saida')";

if (mysqli_query($conexao, $sql)) {
    
echo "<h2>Reserva realizada com sucesso!</h2>";
echo "<a href='listar_reservas.php'>Ver Minhas Reservas</a>";
} else {
    header("Location: ver_quarto.php");
    exit();
}

?>