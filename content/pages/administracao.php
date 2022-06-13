<?php
$name = $_SESSION['nome'];
include('db/conn.php');


$sqln = "SELECT * FROM noticias ORDER BY id_not desc";
$resultn = $conn->query($sqln);

$sqlp = "SELECT * FROM projetos";
$resultp = $conn->query($sqlp);

$sqld = "SELECT * FROM documentos";
$resultd = $conn->query($sqld);


?>

<p>Bem-Vindo <?php echo $name ?></p>

<div class="container">
    <div class="container bg-dark" style="color: white; text-align:center; font-weight: bold;">NOTÍCIAS</div>
<table class="table table-dark table-striped">
  <thead>
    <tr >
        
            <div class="col-11">
                <th colspan="1" scope="col" style="text-align: left;">ID</th>
                <th colspan="3" scope="col">Título</th>
                <th colspan="2" scope="col">Imagem</th>
                <th colspan="3" scope="col">Texto</th>
                <th colspan="2" scope="col">Data</th>
            </div>
            <div class="col">
                <th colspan="" scope="col" style="text-align: right;">OPÇÕES</th> 
                <th colspan="" style="text-align: right;"><a href="index.php?p=addnoticia"><button type="button" class="btn btn-light">Add Novo</button></a></th>
            </div>
        
    </tr>
  </thead>

  <tbody>
      <?php 
  if ($resultn->num_rows > 0) {
        foreach($rown = $resultn as $rown) { ?>
    <tr>
    <form action="updatenoticia.php" method="POST" enctype="multipart/form-data">
        <div class="col-10">
            <td colspan="1" ><input style="width: 40px;" type="number" name="id_not" value="<?=$rown['id_not']?>" readonly></td>
            <td colspan="3"><input type="text" name="title" value="<?=$rown['title']?>" class="form-control" id="title"></td>
            <td colspan="2">
                <div>
                    <img src="./IMG/News/<?=$rown['image']?>" height="80px" alt="">
                </div>
            </td>
            <td colspan="4"><textarea name="text" id="text" cols="60" rows="3"> <?=$rown['text']?></textarea></td>
            <td colspan="1"><?=$rown['Data']?></td>
        </div>

        <div class="col-2">
            <td colspan="" style="text-align: right;"><a href="index.php?p=updatenoticia"><button type="button" class="btn btn-warning">Editar</button></a></td>
            <td colspan="" style="text-align: right;"><a href="db/deletenoticia.php?id_not=<?=$rown['id_not']?>"> <button type="button" class="btn btn-danger">Apagar</button></a></td>
        </div>
    </form>
    </tr>
    <?php 
        }}
    ?>
  </tbody>
</table>
</div>
<br>

<div class="container">
    <div class="container bg-dark" style="color: white; text-align:center; font-weight: bold;">PROJETOS</div>
<table class="table table-dark table-striped">
  <thead>
    <tr>
    
            <div class="col-10">
            <th colspan="2" scope="col" style="text-align: left;"> ID</th>
                <th colspan="8" scope="col" style="text-align: center;"> Descrição</th>
            </div>
            <div class="col-2">
                <th colspan="1" scope="col" style="text-align: right;">OPÇÕES</th>
                <th colspan="1" style="text-align: right;"><a href="index.php?p=addprojeto"><button type="button" class="btn btn-light">Add Novo</button></a></th>
            </div>
        
    </tr>
  </thead>
  <tbody>
      <?php 
        if ($resultp->num_rows > 0) {
        foreach($rowp = $resultp as $rowp) {
            ?>
    <tr">
        
        <div class="col-10" style="text-align: end;">
            
                <form action="updateprojeto.php" method="POST" enctype="multipart/form-data"><!-- Esse form foi inserido para que as informações sejam enviadas para base de dados. As bases de dados sao acessadas via forms-->
                <td colspan="2" >
                <input style="width: 40px;" type="number" name="id_proj" value="<?=$rowp['id_proj']?>">    
                </td>
                <td colspan="8">
                        <div class="mb-3">
                            <!--<label for="exampleFormControlTextarea1" class="form-label">Descrição do Projeto</label>-->
                            <textarea class="form-control" name="name" id="exampleFormControlTextarea1" rows="2">
                                <?=$rowp['name']?>
                            </textarea>
                        </div>
                </td>  
            
        </div>
            <div class="col-2">
                <td colspan="2" style="text-align: center;">
                <a href="index.php?p=updateprojeto"><button type="button" class="btn btn-warning">Editar</button></a>
                <a href="db/deleteprojeto.php?id_proj=<?=$rowp['id_proj']?>"> <button type="button" class="btn btn-danger">Apagar</button></a>
                </td>
                </form>
        </div>
             
    </tr>
    <?php 
        }}
    ?>
  </tbody>
</table>
</div>
<br>

<!--DOCUMENTOS COMECA AQUI-->

<div class="container">
    <div class="container bg-dark" style="color: white; text-align:center; font-weight: bold;">DOCUMENTOS</div>
<table class="table table-dark table-striped">
  <thead>  
    <tr>
        
            <div class="col-10">
                <th colspan="1" scope="col" style="text-align: left;">ID</th>

                <th colspan="4" scope="col" style="text-align: center;">Nome</th>
          
                <th colspan="5" scope="col" style="text-align: center;">Arquivo</th>
            
            <div class="col-2">
                <th colspan="1" scope="col" style="text-align: right;">OPÇÕES</th>
                <th colspan="1" style="text-align: right;"><a href="index.php?p=adddocumento"><button type="button" class="btn btn-light">Add Novo</button></a></th>
            </div>
        
    </tr>
  </thead>

  <tbody>

  <?php 
        if ($resultd->num_rows > 0) {
        foreach($rowd = $resultd as $rowd) {
            ?>
    <tr>

    <form action="updatedocumento.php" method="POST" enctype="multipart/form-data"><!-- Esse form foi inserido para que as informações sejam enviadas para base de dados. As bases de dados sao acessadas via forms-->
           <div class="col-10" style="text-align: end;">
                <td colspan="1">
                   <input style="width: 40px;" name="id_doc" type="number" value="<?=$rowd['id_doc']?>"> 
                </td>
                
                <td colspan="4">
                    <div class="mb-3">
                        <!--<label for="exampleFormControlInput1" class="form-label">Nome do Documento</label>-->
                        <input type="text" name="name" value="<?=$rowd['name']?>" class="form-control" id="docname" value="">
                    </div>
                </td>
                <td colspan="5">
                    <div class="mb-3">
                            <!--<label for="exampleFormControlInput1" class="form-label">Arquivo</label>-->
                            <input type="text" name="arquivo" value="<?=$rowd['arquivo']?>" class="form-control" id="docname" value="">
                    </div>
                </td>
           </div>
    </form>
   
            
        </div>
            <div class="col-2">
            <td colspan="1" style="text-align: right;"><a href="index.php?p=updatedocumento"><button type="button" class="btn btn-warning">Editar</button></a></td>
            <td colspan="1" style="text-align: right;"><a href="db/deletedocumento.php?id_doc=<?=$rowd['id_doc']?>"> <button type="button" class="btn btn-danger">Apagar</button></a></td>
        </div>
    </tr>
    <?php 
        }}
    ?>
  </tbody>
</table>
</div>
<br>


    
</div>
<?php 
 
$conn->close();?>