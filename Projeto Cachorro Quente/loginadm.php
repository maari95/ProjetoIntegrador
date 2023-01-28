<?php
session_start();
require_once("conexaobanco.php");
$email = $_POST['email'];
$senha = $_POST['senha'];
$objDb = new db();

$link = $objDb -> conecta_mysql();

$verifica = ("SELECT * FROM funcionario WHERE emailFuncionario = '$email' AND senhaFuncionario = '$senha'");
$resultado = mysqli_query($link, $verifica);

if(mysqli_num_rows($resultado) > 0)
{
    $_SESSION['emailFuncionario'] = $email;
    $_SESSION['senhaFuncionario'] = $senha;
    header('location:homeAdm.html');
}else{
    unset($_SESSION['emailFuncionario']);
    unset($_SESSION['senhaFuncionario']);
    header('location:admin.html');
}

