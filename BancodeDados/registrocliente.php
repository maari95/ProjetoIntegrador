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
