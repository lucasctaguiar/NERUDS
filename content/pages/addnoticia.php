
<?php 
include('db/conn.php');
$sqln = "SELECT * FROM noticias";
$resultn = $conn->query($sqln);

    ?>

<div class="container">
    <div class="row">
        <form action="db/insertnoticia.php" method="post" enctype="multipart/form-data"><!-- Esse form foi inserido para que as informações sejam enviadas para base de dados. As bases de dados sao acessadas via forms-->
            <div class="modal-body">
                <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label" >Título</label>  
                 <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
             </div>
                <div class="mb-3">
                    <div class="row">
                    <p>Imagem</p>
                    <input type="file" class="w-100" name="image" id="image">
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Texto</label>
                    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>

            <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Data</label>
                    <input type="datetime-local" name="Data"  class="form-control" id="exampleFormControlInput1"><!--name etiqueta... o que vai passar a variável-->
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