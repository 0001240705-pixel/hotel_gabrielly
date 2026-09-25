<?php
require_once "conexao.php"
$hotel_id = $_GET ['hotel_id'];

$sql = "SELECT * FROM quartos WHERE hotel_id = '$hotel_id' 
and disponivel = 1";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quartos disponiveis</title>
</head>
<body>
    <h2> Quarto disponíveis no hotel selecionado</h2>
    <table>
        <tr>
            <th>numero</th>
            <th>tipo</th>
            <th>Preço</th>
        </tr>
    <?php while ($linha = mysqli_fetch_assoc($resultado)) {
       echo "<tr>
        <td>".$linha['numero']."</td>
        <td>".$linha['tipo']."</td>
        <td>".$linha['preco_diaria']."</td>
        </tr>";
    }

    ?>
    </table>
    <h2>Preencha para reserva um quarto</h2>
    <form action="salvar_reserva.php" method = "post"> 
        <label for="id_cliente">ID do Cliente</label>
        <input type="number" id= "id_cliente" name= "id_cliente">
        <br><br>
        <label for="id_quarto">ID do quarto</label>
        <input type="number" id= "id_quarto" name= "id_quarto">
        <br><br>
        <label for="data_entrega">Data de entrega</label>
        <input type="date" id= "data_entrega" name= "data_entrega">
        <br><br>
        <label for="data_saida">Data de saida</label>
        <input type="date" id= "data_saida" name= "data_saida">
        <br><br>
        <button>Confirmar reserva</button>
    </form>
</body>
</html>