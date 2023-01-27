<?php
session_start();
require_once("conexaobanco.php");

$nomeproduto = $_POST['nomeproduto'];
$categoria= $_POST['categoria'];
$descricao = $_POST['descricao'];
$preco= $_POST['preco'];
$fornecedor = $_POST['fornecedor'];
$status = 'produto';
$objDb = new db();

$link = $objDb -> conecta_mysql();

$sql = "insert into produto(nomeProduto,categoria,descricao,preco,idFornecedor,estatus) 
values ('$nomeproduto','$categoria','$descricao','$preco','$fornecedor','$status')";

if (mysqli_query($link, $sql)){
	$_SESSION['msg']="Usuário cadastrado com sucesso";
	echo 'Cadastrado com sucesso';
	//header ('Location: pagelogin.html');//
}else{
	echo 'Erro ao cadastrar cliente..';
}
?>