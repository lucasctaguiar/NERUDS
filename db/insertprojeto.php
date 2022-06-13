<?php
//ligação à base de dados
include('conn.php');

if(!isset($_POST['name'])){//verificação se o preço e o nome estao a ser passados via post
    header('Location:../index.php?p=inicio');
    exit();
}

$nomeproj = $_POST['name']; //tem que ser os mesmos valores utilizados ao longo do projeto

$sql = "INSERT INTO projetos (name) VALUES('$nomeproj');"; //preço nao sendo numerico nao coloco entre pelicas. Devo identificar entre parenteses quais parametros estamos a passar

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=projetos');
} else {
    header('Location:../index.php?p=administracao');
}

 //fechar ligação à base de dados
$conn->close();
?>