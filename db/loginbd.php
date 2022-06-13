<?php
session_start();
$user = $_POST['username']; //nome da base de dados
$pass = $_POST['password'];//nome da base de dados
$name = $_POST['nome'];
$iduser = $_POST['iduser'];


include('conn.php');

//$sql = "SELECT * FROM utilizador WHERE username='$user' AND password='$pass';";
//$sql="SELECT descricao FROM tipoutilizador WHERE id = (SELECT idTipoUtilizador FROM utilizador WHERE username='$user' AND password='$pass');";
$sql="SELECT users.username, users.password, users.nome FROM users WHERE users.username='$user' AND users.password='$pass'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['username']=$user;
    $_SESSION['nome']=$row['nome'];

    header('Location:../index.php?p=administracao');
} else {
    header('Location:../index.php?p=login');
}
$conn->close();
?>