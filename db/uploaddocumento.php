<?php
$target_dir = "../IMG/Docs/"; // Especifica o diretório onde o arquivo será carregado
$target_file = $target_dir . $_FILES["arquivo"]["name"]; //Especfica o caminho do arquivo a ser carregado
if (file_exists($target_file)) 
{                   
  unlink($target_file);
}

$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["arquivo"]["tmp_name"]);//tpm name é o nome do arquivo temporário
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["arquivo"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($FileType != "pdf" && $FileType != "docx" && $FileType != "doc") {
  echo "Sorry, only PDF, docx, & doc files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["arquivo"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>