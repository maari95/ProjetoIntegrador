<?php

session_start();
require_once("conexaobanco.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$departamento = $_POST['departamento'];
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
$status = 'adm';
$objDb = new db();

$link = $objDb -> conecta_mysql();

$sql = "insert into funcionario(cpfFuncionario,nomeFuncionario,telefoneFuncionario,emailFuncionario,senhafuncionario,tipoLogradouro,logradouro,numero,complemento,bairro,municipio,cep,estado,idDepartamento,estatus) 
values ('$cpf','$nome','$telefone','$Email','$senha','$tp_logradouro','$logradouro','$numero','$complemento','$bairro','$municipio','$cep','$estado','$departamento','$status')";

if (mysqli_query($link, $sql)){
    $_SESSION['msg']="Usuário cadastrado com sucesso";
	header('Location: admin.html');
}else{
	echo 'Erro ao cadastrar administrador..';
}

?>