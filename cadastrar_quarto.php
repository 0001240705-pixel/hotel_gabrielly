<?php?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar quartos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Cadastrar Quarto</h1>

<form method="POST" action="salvar_quarto.php">

<label for=""> ID do Hotel:</label>

<input type="number" name="id_hotel" required>
<br><br>
<label for= "">Número do Quarto:</label>
<input type="text" name="numero_quarto" required>
<br><br>
<label for= "">Tipo de Quarto: </label>
<input type="text" name="tipo_quarto" required>
<br><br>
<label for= ""> Preço da Diária (R$): </label>
<input type="number" name="preco_diaria" step="0.01" required>
<br><br>
<button> Salvar quarto</button>
</form>
<br>
<a href="logout_hotel.php">Sair do sistema</a>

</body>
</html>