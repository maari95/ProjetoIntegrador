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

     $idProduto = $_POST['idProduto'];
     $nomeProduto = $_POST['nomeProduto'];
     $categoriaProduto = $_POST['categoria'];
     $descricaoProduto = $_POST['descricao'];
     $preco = $_POST['preco'];
         
     $sql = "UPDATE produto SET nomeProduto='$nomeProduto', categoria='$categoriaProduto', descricao = '$descricaoProduto', preco='$preco' WHERE idProduto='$idProduto'";
 
     if ($conn->query($sql) === TRUE) {
         echo "Registros atualizados com sucesso!";
         header('Location: homeAdm.html');
     } else {
         echo "Erro: " . $conn->error;
     }
 }
 
 $conn->close();
?>

