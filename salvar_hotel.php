<?php

$nome = $_POST ['nome'];
$cidade = $_POST['cidade'];
$estrelas = $_POST['estrelas'];
$senha = $_POST ['senha'];
$email = $_POST ['email'];
$sql = "INSERT INTO hoteis (nome,cidade,estrelas,email,senha) VALUES ('$nome', '$cidade', '$estrelas', '$senha', '$email')";

if (mysqli_query($conexao, $sql)) {
}
else {

}
?>