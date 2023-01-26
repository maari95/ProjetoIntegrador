<?php
session_start();
require_once("conexaobanco.php");
$Email = $_POST['email'];
$senha = $_POST['senha'];
$objDb = new db();

$link = $objDb -> conecta_mysql();

$verifica = ("SELECT * FROM cliente WHERE emailCliente ='$email' AND senhaCliente = '$senha'") or die("erro ao selecionar");
$resultado = mysqli_query($link, $resultado);
echo $resultado;
if(mysqli_num_rows($resultado) > 0)
{
    $_SESSION['emailCliente'] = $email;
    $_SESSION['senhaCliente'] = $senha;
    header('location:index.html');
}else{
    unset($_SESSION['emailCliente']);
    unset($_SESSION['senhaCliente']);
    header('location:pagelogin.html');
}

