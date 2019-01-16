<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de cliente</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	<ul class="nav justify-content-center">
  <li class="nav-item">
  	<a class="nav-link disabled">Empresa </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Lista de clientes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cadastro.php">Cadastrar novo</a>
  </li>
</ul>

<div class="container space_control">
     <h1> Cadastro de novo cliente</h1>   
    <form class="form-group" action="insert.php" method="POST">
      <br> 
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required><br> 
      <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="email"> <br>
      <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone"><br>
      <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor ex: 50"> <br>
      <input type="text" class="form-control" id="data" name="data" placeholder="Data de entrada"> <br>
      <input class="btn" type="submit">
    </form>
</ul>
	
</div>

</body>
</html>
