<?php
session_start();
include 'conexao.php';
$email = $_POST['email'];$senha = $_POST['senha'];
$sql = "SELECT * FROM clientes WHERE email = ?";
$stmt = mysqli_prepare($conexao, $sql);mysqli_stmt_bind_param($stmt, "s", $email);mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
if (mysqli_num_rows($resultado) > 0) {
 $cliente = mysqli_fetch_assoc($resultado);
if (password_verify($senha, $cliente['senha'])) {
$_SESSION['id_cliente'] = $cliente['id'];
$_SESSION['nome_cliente'] = $cliente['nome'];
$_SESSION['email'] = $cliente['email'];
header("Location: minhas_reservas.php");
 exit();
} else {
    echo "<h3>E-mail ou senha incorretos!</h3>";
    echo "<a href='login.html'>Voltar para o login</a>";
    }
} else {
echo "<h3>E-mail ou senha incorretos!</h3>";
 echo "<a href='login.html'>Voltar para o login</a>";}
mysqli_stmt_close($stmt);mysqli_close($conexao);
?>