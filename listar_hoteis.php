<?php
require_once "conexao.php";

$sql = "SELECT * FROM hoteis";
$resultado = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Hotéis</title>
</head>
<body>

<h1>Lista de Hotéis</h1>

<?php while ($hotel = mysqli_fetch_assoc($resultado)) { ?>

    <div>
        <h2><?php echo $hotel['nome']; ?></h2>

        <p>Cidade: <?php echo $hotel['cidade']; ?></p>

        <p>
            Classificação:
            <?php echo $hotel['classificacao']; ?> estrelas
        </p>

        <a href="ver_quartos.php?id_hotel=<?php echo $hotel['id']; ?>">
            Ver Quartos Disponíveis
        </a>

        <hr>
    </div>

<?php } ?>

</body>
</html>
