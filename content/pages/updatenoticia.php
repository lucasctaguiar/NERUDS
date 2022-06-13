<?php 
include('db/conn.php');

$sql = "SELECT * FROM noticias";
$result = $conn->query($sql);
$row = $result->fetch_assoc();//comando que associa cada linha a cada resultado da querry

    ?>

<div class="container">
    <div class="row">
    <?php 
    if ($result->num_rows > 0) {
        foreach($row = $result as $row) {
         ?>
        <form action="db/updatenoticia.php" method="post" enctype="multipart/form-data"><!-- Esse form foi inserido para que as informações sejam enviadas para base de dados. As bases de dados sao acessadas via forms-->
            
        
            <div class="modal-body">
                <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label" >ID - </label>  
                 <input style="width: 40px;" type="number" name="id_not" value="<?=$row['id_not']?>" readonly>
             </div>
            
            <div class="modal-body">
                <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label" >Título</label>  
                 <input type="text" name="title" value="<?=$row['title']?>" class="form-control" id="exampleFormControlInput1">
             </div>
                <div class="mb-3">
                    <div class="row">
                    <div>
                    <img src="./IMG/News/<?=$row['image']?>" height="120px" alt="">
                    </div>
                    <p>Imagem Atual</p>
                     <br>
                    <div>
                    <input type="file" class="w-100" name="image" id="image">
                    <p>Selecione Nova Imagem</p>
                    </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Texto</label>
                    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="5"><?=$row['text']?></textarea>
                </div>

            <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nova Data</label>
                    <input type="datetime-local" name="Data" class="form-control" id="exampleFormControlInput1">
                    Data da Ultima atualização: <?=$row['Data']?><!--name etiqueta... o que vai passar a variável-->
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