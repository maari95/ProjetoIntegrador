<?php
session_start();
require_once("conexaobanco.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$Email = $_POST['Email'];
$tp_logradouro = $_POST['tp_logradouro'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$municipio = $_POST['municipio'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$telefone= $_POST['telefone'];
$senha= $_POST['senha'];
$status = 'cliente';
$objDb = new db();

$link = $objDb -> conecta_mysql();

$sql = "insert into cliente(cpfCliente,nomeCliente,telefoneCliente,emailCliente,senhaCliente,tipoLogradouro,logradouro,numero,complemento,bairro,municipio,cep,estado,estatus) 
values ('$cpf','$nome','$telefone','$Email','$senha','$tp_logradouro','$logradouro','$numero','$complemento','$bairro','$municipio','$cep','$estado','$status')";

if (mysqli_query($link, $sql)){
	$_SESSION['msg']="Usuário cadastrado com sucesso";
	header ('Location: pagelogin.html');
}else{
	echo 'Erro ao cadastrar cliente..';
}
?>
