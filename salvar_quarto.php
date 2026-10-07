<?php
include 'conexao.php';
$hotel_id = $_POST['hotel_id'];
$numero = $_POST['numero'];
$tipo = $_POST['tipo'];
$preco_diaria = $_POST['preco_diaria'];
$disponivel = $_POST['disponivel'];

$sql = "INSERT INTO quartos (hotel_id, numero, tipo, preco_diaria, disponivel)
VALUES ('$hotel_id', '$numero', '$tipo', '$preco_diaria', '$disponivel')";

if (mysqli_query($conexao, $sql)) {
    echo "Quarto cadastrado com sucesso";
    echo "<br><a href='login.html'>Ir para Login</a>";
} else {
    echo "Erro ao cadastrar";
}

?>