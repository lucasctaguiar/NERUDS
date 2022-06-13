<?php 
include('db/conn.php');
$sqld = "SELECT * FROM documentos";
$resultd = $conn->query($sqld);
     ?>

<div class="container">
    <div class="row">
        <form action="db/insertdocumento.php" method="post" enctype="multipart/form-data"><!-- Esse form foi inserido para que as informações sejam enviadas para base de dados. As bases de dados sao acessadas via forms-->
                <div class="modal-body">
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Nome do Documento</label>  
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="mb-3">
                    <div class="row">
                    <p>Arquivo</p>
                    <input type="file" class="w-100" name="arquivo" id="arquivo">
                    </div>
                </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Publicar</button>
            </div>
        </form>
</div>
</div>
<?php 

$conn->close();
?>