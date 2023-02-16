<?php

session_start();

require_once("conexaobanco.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$objDb = new db();

$link = $objDb -> conecta_mysql();

$verifica = ("SELECT * FROM cliente WHERE emailCliente ='$email' AND senhaCliente = '$senha'");
$resultado = mysqli_query($link, $verifica);

if(mysqli_num_rows($resultado) > 0)
{
    $_SESSION['emailCliente'] = $email;
    $_SESSION['senhaCliente'] = $senha;
    header('location:home.html');
}else{
    unset($_SESSION['emailCliente']);
    unset($_SESSION['senhaCliente']);
    header('location:pagelogin.html');
}

