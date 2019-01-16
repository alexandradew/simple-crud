<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de clientes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="main.css">
    <script>
    function checkUpdate(){
      return confirm('Você confirma a atualização dos dados?');
    }
  </script>
</head>
<body>
	<ul class="nav justify-content-center">
  <li class="nav-item">
  	<a class="nav-link disabled">Empresa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Lista de clientes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cadastro.php">Cadastrar novo</a>
  </li>
</ul>

<div class="container space_control">

<?php
include("conecta.php");
$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
       
       <h1> Atualizar cadasto de cliente</h1>   
    <form class='form-group' action='update.php?id=".$id."' method='POST'>
      <br> 
      <input type='text' class='form-control' id='nome' name='nome' value='". $row["nome"]."'><br> 
      <input type='text' class='form-control' id='email' name='email' value='". $row["email"]."'> <br>
      <input type='text' class='form-control' id='telefone' name='telefone' value='". $row["telefone"]."'><br>
      <input type='text' class='form-control' id='valor' name='valor' value='". $row["valor"]."'> <br>
      <input type='text' class='form-control' id='data' name='data' value='". $row["data"]."'> <br>
      <input class='btn' type='submit' onclick='return checkUpdate()'>
    </form>
</ul>
      

        "; 
    }
} else {
    echo "<button type='button' class='btn btn-danger'>Nenhum registro encontrado</button><br><br>";
}
$conn->close();
?>

	
</div>

</body>
</html>
