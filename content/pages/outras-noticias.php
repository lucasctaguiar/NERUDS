<?php
include('db/conn.php');

$sql = "SELECT * FROM noticias ORDER BY id_not asc";
$result = $conn->query($sql);

?>
 
 
 <div class="card mb-3 mt-5">
     <div class="card-body" style="text-align: center; font-weight: bold;">
          <span class="Ne" style="font-size: 40px
           ;"><i class="bi bi-arrow-down-square" style="font-size: 40px;"></i> Notíci</span><span style="font-size: 40px;" class="Ruds">as mais antigas Aqui!!!! <i class="bi bi-arrow-down-square" style="font-size: 40px;"></i></span>
        </div>
      </div>
      

<?php 
  if ($result->num_rows > 0) {
    foreach($row = $result as $row) { ?>
      <form action="db/insertnoticia.php" method="POST" enctype="multipart/form-data">
        <div class="card mb-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="./IMG/News/<?=$row['image']?>" name="image" class="img-fluid rounded p-3" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" name="title" id="noticia1"><?=$row['title']?></h5>
                <p class="card-text" name="text"><?=$row['text']?></p>
                <p class="card-text" name="Data"><small class="text-muted"><?=$row['Data']?></small></p>
              </div>
            </div>
          </div>
        </div>
      </form>
    <?php 
      }
    } 
      ?>


      <div class="card mb-3 mt-5">
       <a href="index.php?p=noticias" style="text-decoration: none;"> <div class="card-body" style="text-align: center; font-weight: bold;">
           <span class="Ne" style="font-size: 40px
           ;">Voltar as </span><span style="font-size: 40px;" class="Ruds">Mais Recentes</span>
         </div></a>
       </div>

      <!-- Button trigger modal -->
      <button type="button" class="btne btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> <!--este id de modal referencia o id de modal abaixo-->
        Venha Participar
        </button>
        <!--modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulário de Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Insira seu e-mail">
                </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
             </div>
            <div class="modal-footer">
              <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn">Enviar</button>
            </div>
          </div>
        </div>
       </div>
        <!--modal-->

    