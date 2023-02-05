<?php 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "projetocachorroquente";
// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])) {
     $id = $_POST['idFornecedor'];
     $cnpj = $_POST['cnpj'];
     $nomeFornecedor = $_POST['nomeFornecedor'];
     $nomeGerente = $_POST['nomeGerente'];
     $telefone = $_POST['telefoneFornecedor'];
     $tp_logradouro = $_POST['tp_logradouro'];
     $logradouro = $_POST['logradouro'];
     $num = $_POST['numero'];
     $complemento = $_POST['complemento'];
     $bairro = $_POST['bairro'];
     $municipio = $_POST['municipio'];
     $estado = $_POST['estado'];
     $cep = $_POST['cep'];


     $sql = "UPDATE fornecedor SET cnpj='$cnpj', nomeFornecedor='$nomeFornecedor',telefoneFornecedor = '$telefone', nomeGerente='$nomeGerente',
     tipoLogradouro = '$tp_logradouro', logradouro = '$logradouro', numero = '$num', complemento = '$complemento', bairro = '$bairro', 
     municipio = '$municipio', estado = '$estado', cep = '$cep' WHERE idFornecedor='$id'";
 
     if ($conn->query($sql) === TRUE) {
         echo "Registros atualizados com sucesso!";
         header('Location: editFornecedor.html');
     } else {
         echo "Erro: " . $conn->error;
     }
 }
 
 $conn->close();
 ?>