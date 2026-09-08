<?php
session_start();

include("conexao.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM clientes WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $cliente = $resultado->fetch_assoc();

    // Verifica a senha criptografada
    if (password_verify($senha, $cliente["senha"])) {

        $_SESSION["usuario"] = $cliente["email"];

        header("Location: minhas_reservas.php");
        exit();

    } else {
        echo "Senha incorreta! <a href='login.html'>Voltar ao login</a>";
    }

} else {
    echo "E-mail incorreto! <a href='login.html'>Voltar ao login</a>";
}
?>
