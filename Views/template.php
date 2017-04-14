<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Projeto MVC</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">DEFAULT MVC</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="<?php echo DEFAULT_URL?>/home/ListClients">Mostrar Clientes</a></li>
        <li><a href="<?php echo DEFAULT_URL?>/home/RegisterClients">Cadastrar Clientes</a></li>
      </ul>
    </div>
  </nav>


  <?php
  $this->loadViewInTemplate($viewName, $viewData);
  ?>


</body>
</html>
