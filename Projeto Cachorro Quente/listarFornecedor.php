<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetocachorroquente";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT nomeFornecedor, nomeGerente, telefoneFornecedor FROM fornecedor";
$result = mysqli_query($conn, $sql);

?>


<!doctype html>
<html lang="pt-br">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Fornecedores</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/900/900834.png">
    <link href="css/offcanvas-navbar.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Favicons -->
    </head>
<body style="background-image: url(img/background.webp);">
<!-- Menu --><header>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation" style="background-color: black;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="icon/LOGO.png" width="90%" height="90%"></a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homeAdm.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Cadastro</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cadastroadm.html">Cadastro de Administrador</a></li>
            <li><a class="dropdown-item" href="cadastrofornecedor.html">Cadastro de Fornecedor</a></li>
            <li><a class="dropdown-item" href="cadastroproduto.html">Cadastro de Produto</a></li>    

            </ul>
        </li>
       </ul>
  </div>
</div>
  <p class="p-2"></p>
  <p class="p-2"></p>
  <a href="admin.html"><img src="icon/logout.png" width="32px" height="32px"></a>
  <p class="p-2"></p>
</nav>
</header>
<p class="p-2"></p>
<p class="p-2"></p>
<div class="container">
  <style>
     table,tr, td{
                  border:3px solid black;
                  border-collapse: collapse;
                  border-style: solid;

              }
              table{
                  width: 100%;
                               
              }  
    </style>
            
   <h2 style="color: #c99c5e; font-family: Constantia; font-size: 50px; text-align: center;">Fornecedores Cadastrados</h2>
   <table style="color:black; font-family: Constantia; font-size: 20px; background-color: white;" class="table table-hover">
    <p class="p-2"></p>
    <tr>
    <td style="text-align: center; background-color: #c99c5e;">Nome Fornecedor</td>
    <td style="text-align: center; background-color: #c99c5e;">Nome Gerente</td>
    < <td style="text-align: center; background-color: #c99c5e">Telefone Fornecedor</td>

</tr>
    <?php if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) { ?>
        <td><?php echo $row['nomeFornecedor']; ?></td>
        <td><?php echo $row['nomeGerente'] ?></td>
        <td><?php echo $row['telefoneFornecedor'] ?></td>
        </tr> 
        <!-- FECHANDO O WHILE -->
        <?php }
    } else {
      echo "Nenhum Resultado";
    }

    mysqli_close($conn);
    ?> 
      </table> 
</div>  



     <p class="p-1"></p>
    <div class="row">
        <div class="col-md text-center">
         <footer style="background: black; height: 12rem;  position: absolute; bottom: 0; width: 100%; height: 12rem; text-align: center; line-height: 100px;">
<p class="p-1"></p>
      <h6 style="color:white; padding:70px;"><small>Senac &copy; 2023</small></h6>
      </div>
 </footer>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="js/offcanvas-navbar.js"></script>
  </body>
</html>
    
    
</body> 
</html>
