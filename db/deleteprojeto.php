<?php
session_start();
include('conn.php'); //O código para update é basicamente o mesmo do insert... só muda querry

if(!isset($_GET['id_proj'])) { //verifica se a sessão existe e se a variável foi declarada
    header('Location:../index.php?p=administracao');
    exit();
}

$id = $_GET['id_proj'];
$sql = "DELETE from projetos WHERE id_proj = $id"; //id nao esta entre pelicas pois é um numero

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=administracao');
} else {
    header('Location:../index.php?p=administracao');
}

$conn->close();
?>