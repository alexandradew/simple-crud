<?php

include("conecta.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$valor = $_POST['valor'];
$data = $_POST['data'];

$sql = "INSERT INTO users (nome, email, telefone, valor, data)
VALUES ('$nome', '$email', '$telefone', '$valor', '$data')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location:index.php");
die();
?>