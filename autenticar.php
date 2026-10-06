<?php
session_start();

include("conexao.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$senha_organizada = password_verify ($senha);

$sql = "SELECT * FROM clientes WHERE email = '$email'";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rowa ($resultado) > 0) {
    while ($resultado = mysql_fetch_assoc($resultado)) {
    if (password_verify ($senha, $linha ['senha'])) {
    header ("Location: minhas_reservas.php");
    exit ();
    }
    }
}
 else {
    header ("Location: login.html.html");
    exit ();
 }
?>
