<?php
include('conn.php');
if(!isset($_POST['title']) || !isset($_FILES['image']['name']) || !isset($_POST['text']) || !isset($_POST['Data'])){//verificação se as variaveis title, image, text e Data estão a ser passados via post
    header('Location:../index.php?p=inicio');
    exit();
}


$title = $_POST['title']; //tem que ser os mesmos valores utilizados ao longo do projeto
$image = "img".$_POST['title'].".png";
$text = $_POST['text'];
$data = $_POST['Data'];

include('uploadnoticia.php');


$sql = "INSERT INTO noticias (title, image, text, Data) VALUES('$title', '$image', '$text', '$data');"; //As variáveis que nao são numericas nao coloco entre pelicas. Devo identificar entre parenteses quais parametros estamos a passar

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=administracao');
} else {
    header('Location:../index.php?p=administracao');
}

$conn->close();
?>