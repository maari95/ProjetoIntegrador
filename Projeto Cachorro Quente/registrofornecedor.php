<?php
session_start();
require_once("conexaobanco.php");

$cnpj = $_POST['cnpj'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$nomegerente= $_POST['nomegerente'];
$tp_logradouro = $_POST['tp_logradouro'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$municipio = $_POST['municipio'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$status = 'fornecedor';
$objDb = new db();

$link = $objDb -> conecta_mysql();

$sql = "insert into fornecedor(cnpj,nomeFornecedor,telefoneFornecedor,nomeGerente,tipoLogradouro,logradouro,numero,complemento,bairro,municipio,cep,estado,estatus) 
values ('$cnpj','$nome','$telefone','$nomegerente','$tp_logradouro','$logradouro','$numero','$complemento','$bairro','$municipio','$cep','$estado','$status')";

if (mysqli_query($link, $sql)){
	$_SESSION['msg']="Fornecedor cadastrado com sucesso";
	echo 'Cadastrado Com Sucesso !';
	header ('Location: homeAdm.html');
}else{
	echo 'Erro Ao Cadastrar Fornecedor..';
}
?>