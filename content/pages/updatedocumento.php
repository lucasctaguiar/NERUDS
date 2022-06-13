<?php 
include('db/conn.php');

$sql = "SELECT * FROM documentos";
$result = $conn->query($sql);
$row = $result->fetch_assoc();//comando que associa cada linha a cada resultado da querry

     ?>

<div class="container">
    <div class="row">
    <?php 
    if ($result->num_rows > 0) {
        foreach($row = $result as $row) {
         ?>
        <form action="db/updatedocumento.php" method="post" enctype="multipart/form-data"><!-- Esse form foi inserido para que as informações sejam enviadas para base de dados. As bases de dados sao acessadas via forms-->
                
                <td colspan="1" >
                   <input style="width: 40px;" name="id_doc" type="number" value="<?=$row['id_doc']?>"> 
                </td>
                <div class="modal-body">
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Nome do Documento</label>  
                    <input type="text" name="name" value="<?=$row['name']?>" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="mb-3">
                    <div class="row">
                    <p>Arquivo</p>
                    <label for=""> Arquivo atual: <?=$row['arquivo']?></label>
                    <input type="file" class="w-100" value="<?=$row['arquivo']?>" name="arquivo" id="arquivo">
                    </div>
                </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Publicar</button>
            </div>
        </form>
        <?php }} ?>
</div>
</div>
<?php 

$conn->close();
?>