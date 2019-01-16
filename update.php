
<?php

include("conecta.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$valor = $_POST['valor'];
$plano = $_POST['plano'];
$data = $_POST['data'];

$id = $_GET["id"];

$sql = "UPDATE users SET nome='$nome', email='$email', telefone='$telefone', valor='$valor', data='$data' WHERE id=$id";


if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location:index.php");
die();
?>