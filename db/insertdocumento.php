<?php
include('conn.php');

if(!isset($_POST['name']) || !isset($_FILES['arquivo']['name'])){//verificação se as variaveis nome e arquivo estão a ser passados via post
    header('Location:../index.php?p=inicio');
    exit();
}

$nome = $_POST['name']; //tem que ser os mesmos valores utilizados ao longo do projeto
$arquivo = $_FILES['arquivo']['name'];

include('uploaddocumento.php');


$sql = "INSERT INTO documentos (name, arquivo) VALUES('$nome', '$arquivo');"; //As variáveis que nao são numericas nao coloco entre pelicas. Devo identificar entre parenteses quais parametros estamos a passar

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=documentos');
} else {
    header('Location:../index.php?p=administracao');
}

$conn->close();
?>