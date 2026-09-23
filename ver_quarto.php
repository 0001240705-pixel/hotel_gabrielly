<?php

require_once "conexao.php";

$id_hotel = $_GET['id_hotel'];

$sql = "SELECT * FROM quartos WHERE id_hotel = '$id_hotel'";
$resultado = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Quartos do Hotel</title>
</head>
<body>

<h1>Quartos Disponíveis</h1>

<table border="1">
<tr>
<th>Número</th>
<th>Tipo</th>
<th>Preço</th>
</tr>

<?php while ($quarto= mysqli_fetch_assoc($resultado)) { ?>
 <tr> <td><?php echo $quarto['numero']; ?></td> 
 <td><?php echo $quarto['tipo']; ?></td>
  <td><?php echo $quarto['preco']; ?></td>
 </tr>
 <?php } ?>
</table>
<h2>Fazer Reserva</h2>

<form action="salvar_reserva.php" method="POST">
 <label>ID do Cliente:</label> 
 <input type="number" name="id_cliente" required>
 <br><br>
<label>ID do Quarto:</label>
<input type="number" name="id_quarto" required>

<br><br>

<label>Data de Entrada:</label>
<input type="date" name="data_entrada" required>

<br><br>

<label>Data de Saída:</label>
<input type="date" name="data_saida" required>

<br><br>

<button type="submit">Confirmar Reserva</button>

</form>

</body>
</html>


