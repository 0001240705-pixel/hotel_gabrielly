<?php
require_once "conexao.php";

$sql = "SELECT * FROM hoteis";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Hotéis</title>
</head>
<body>

<h1>Lista de Hotéis</h1>

<table> 
    <tr>
        <th>Nome</th>
        <th>Cidade</th>
        <th>Estrelas</th>
        <th>Ação</th>
    </tr>
    <?php

while ($linha = mysqli_fetch_assoc($resultado)){
   echo "<tr>
        <td".$linha['nome']."> </td>
        <td".$linha['cidade']."> </td>
       <td".$linha['estrela']."> </td>
       <td> <a href = 'ver_quarto.php'?
       id_hotel= ".$linha ['id'] ." Ver quartos </a> </td>
    </tr>
    ";
}
    ?>
</table>

</body>
</html>
