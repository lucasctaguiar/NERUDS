<?php
include('db/conn.php');


$sql = "SELECT * FROM projetos";
$result = $conn->query($sql);
$row = $result->fetch_assoc();//comando que associa cada linha a cada resultado da querry


?>

<div class="container">
    <div class="row">
    <?php 
    if ($result->num_rows > 0) {
        foreach($row = $result as $row) {
         ?>
        <form action="db/updateprojeto.php" method="POST"><!-- Esse form foi inserido para que as informações sejam enviadas para base de dados. As bases de dados sao acessadas via forms-->
           
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">ID do Projeto - </label>
                    <input type="number" name="id_proj" value="<?=$row['id_proj']?>"> <br>
                    
                    <label for="exampleFormControlTextarea1" class="form-label">Descrição do Projeto</label> <br>
                    <textarea class="form-control" name="name" id="exampleFormControlTextarea1" rows="3">
                    <?=$row['name']?>
                    </textarea>
                </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Publicar</button>
            </div>
        </form>
        <?php } }?>
</div>
</div>