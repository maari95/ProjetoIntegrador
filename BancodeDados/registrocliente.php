<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/Base.css">
<link rel="icon" href="icon/LOGO.png">
<title>Cadastrando Cliente</title>
</head>

<body style="background-color:#524733;">
    <style>
        body{
            background-image: url('img/background.webp');
            }
            
    </style>
    <nav class="nav nav-pills justify-content-start">
        <a class="navbar-brand" href="pagelogin.html">
            <a style="width: 50px; height: 50px; margin: 10px; margin-top: 5px;background:0;"
                class="nav-link nav-button active" href="index.html"><img src="img/seta_esquerda.png" width="50rem" height="50rem"></a>
            </li>
            </ul>
        </nav>
        
<?php

require_once('conexaobanco.php');

$nomeCliente = $_POST['nome'];
$cpfCliente = $_POST['cpf'];
$emailCliente = $_POST['email'];
$telefoneCliente = $_POST['telefone'];
$tipoLogradouro = $_POST['tp_logradouro'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$municipio = $_POST['municipio'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$senha= $_POST['senha'];

$objDb = new db();

$link = $objDb -> conecta_mysql();

$sql = "insert into cliente(nomeCliente,cpfCliente,emailCliente,telefoneCliente,tipoLogradouro,logradouro,numero,complemento,bairro,municipio,cep,estado,senha) values 
('$nomeCliente','$cpfCliente','$emailCliente','$telefoneCliente','$tipoLogradouro','$logradouro','$numero','$complemento','$bairro','$municipio','$cep','$estado','$senha')";

if (mysqli_query($link, $sql)){
    echo '<h4>Cliente cadastrado!!</h4>';
}else{
    echo '<h4>Erro ao cadastrar cliente!!</h4>';
   
}
?>

<footer id="rodapecad" class="col-sm-12">
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</body>
</html>
