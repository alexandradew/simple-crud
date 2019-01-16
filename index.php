<!DOCTYPE html>
<html>
<head>
	<title>Lista de clientes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" href="main.css">
  <script>
    function checkDelete(){
      return confirm('Você tem certeza que deseja apagar esse usuário?');
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

 <table class='table'>
		  <thead>
		    <tr>
		      <th scope='col'>Id</th>
		      <th scope='col'>Nome</th>
		      <th scope='col'>E-mail</th>
		      <th scope='col'>Telefone</th>
		      <th scope='col'>Valor</th>
		      <th scope='col'>Data de entrada</th>
		      <th scope='col'>Ação</th>
		    </tr>
		  </thead> 
<?php
include("conecta.php");



// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$total = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$total += $row['valor'];
        echo "
       	<tr>
      	<th scope='row'>" . $row["id"]. "</th>
      	<td>". $row["nome"]."</td>
      	<td>". $row["email"]."</td>
      	<td>". $row["telefone"]."</td>
      	<td>R$". $row["valor"].",00</td>
      	<td>". $row["data"]."</td>
      	<td> 
      	<a href='atualiza.php?id=".$row["id"]."'><i class='far fa-edit'></i></a>
      	<a href='delete.php?id=".$row["id"]."' onclick='return checkDelete()'><i class='far fa-trash-alt'></i></a>
      	</td>
    	</tr>
        "; 
    }
} else {
    echo "<button type='button' class='btn btn-danger'>Nenhum registro encontrado</button><br><br>";
}
$conn->close();



?>

</tbody>
</table>
<?php echo "RECEITA TOTAL: <b>R$ ". $total.",00</b>";?>
</div>

</body>
</html>

