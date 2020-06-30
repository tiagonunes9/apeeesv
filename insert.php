<?php
$server="localhost";
$username = "root";
$password = "";
$database = "apeeesv";
$conn = mysqli_connect($server,$username, $password, $database);

if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
        $estado = $_POST['estado'];

        $sql = "insert into suporte (nome, email, assunto, mensagem, estado) value('$nome','$email','$assunto','$mensagem','$estado')";
        
        if (mysqli_query($conn, $sql)) {
            header("Location: home.php#contatos");
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
         }
         mysqli_close($conn);
    }

?>