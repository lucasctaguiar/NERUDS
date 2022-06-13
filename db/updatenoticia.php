<?php
include('conn.php');
if(!isset($_POST['id_not']) ||!isset($_POST['title']) || !isset($_FILES['image']['name']) || !isset($_POST['text']) || !isset($_POST['Data'])){//verificação se as variaveis title, image, text e Data estão a ser passados via post
    header('Location:../index.php?p=inicio');
    exit();
}

$id = $_POST['id_not'];
$title = $_POST['title']; //tem que ser os mesmos valores utilizados ao longo do projeto
$image = "img".$_POST['title'].".png";
$text = $_POST['text'];
$data = $_POST['Data'];

include('uploadnoticia.php');


$sql = "UPDATE noticias SET title = '$title', image = '$image', text = '$text', Data = '$data' WHERE id_not = $id"; //As variáveis que nao são numericas nao coloco entre pelicas. Devo identificar entre parenteses quais parametros estamos a passar

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=administracao');
} else {
    header('Location:../index.php?p=administracao');
}

$conn->close();
?>