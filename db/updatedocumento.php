<?php
include('conn.php');

if(!isset($_POST['id_doc']) ||!isset($_POST['name']) || !isset($_FILES['arquivo']['name'])){//verificação se as variaveis nome e arquivo estão a ser passados via post
    header('Location:../index.php?p=inicio');
    exit();
}

$id = $_POST['id_doc'];
$nome = $_POST['name']; //tem que ser os mesmos valores utilizados ao longo do projeto
$arquivo = $_FILES['arquivo']['name'];

include('uploaddocumento.php');


$sql = "UPDATE documentos SET name = '$nome', arquivo = '$arquivo' WHERE id_doc = '$id'"; //As variáveis que nao são numericas nao coloco entre pelicas. Devo identificar entre parenteses quais parametros estamos a passar

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=administracao');
} else {
    header('Location:../index.php?p=administracao');
}

$conn->close();
?>