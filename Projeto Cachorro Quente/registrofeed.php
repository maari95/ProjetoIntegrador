<?php

require_once('conexaobanco.php');

$experiencia=$_POST['experiencia'];
$preco=$_POST['preco'];
$satisfacao=$_POST['satisfacao'];
$indicacao=$_POST['indicacao'];
$nome_ind=$_POST['nome_ind'];
$telefone_ind=$_POST['telefone_ind'];
$sugestao=$_POST['sugestao'];

$objDb = new db();

$link = $objDb -> conecta_mysql();

$sql="insert into feedback(expCliente, s_preco, s_atendimento, indicacao, nome_ind, telefone_ind, sugestao) values ('$experiencia', '$preco', '$satisfacao', '$indicacao', '$nome_ind', '$telefone_ind', '$sugestao')";

if (mysqli_query($link, $sql)){
    echo '<h4>Feedback Enviado!!</h4>';
}else{
    echo '<h4>Erro ao enviar feedback!!</h4>';
   
}

?>