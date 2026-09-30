<?php
require_once "conexao.php";

$sql = "SELECT
reservas.id,
clientes.nome AS nome_cliente,
clientes.telefone,quartos.numero_quarto,
reservas.data_entrada,reservas.data_saida 
FROM reservas 
JOIN quartos ON reservas.id_quarto = quartos.id 
JOIN clientes ON reservas.id_cliente = clientes.id 
WHERE quartos.id_hotel = 1";

$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head> 
    <meta charset="UTF-8">
     <title>Reservas Recebidas pelo Hotel</title>
    </head>
    <body>
<h2>Painel de reservas dos quartos</h2>

<table>

<tr>
     <th>ID Reserva</th> 
     <th>Nome do Cliente</th>
      <th>Telefone</th> 
      <th>Quarto</th>
       <th>Data de Entrada</th>
        <th>Data de Saída</th> </tr>
 <?php 
 while ($linha = mysqli_fetch_assoc($resultado)):
 echo "<tr>
     <td> ".$linha['id']."</td>
      <td>< ".$linha['nome_cliente']."</td> 
      <td>".$linha['telefone']."</td>
       <td>". $linha['numero_quarto']."</td>
        <td> ".$linha['data_entrada']."</td> 
        <td> " . $linha['data_saida']." </td>
         </tr>";
         ?>
         </table>
<br> <br>

<a href="cadastrar_quarto.php">Cadastrar Novo Quarto</a>
<br><br>
<a href="lougot.php">Sair</a>

</body>
</html>