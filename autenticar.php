<?php
session_start();

include("conexao.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM clientes WHERE email = '$email' and senha = '$senha' ";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rowa ($resultado) > 0) {
    header ("Location: minhas_reservas.php");
    exit ();
}
 else {
    header ("Location: login.html.html");
    exit ();
 }
?>
