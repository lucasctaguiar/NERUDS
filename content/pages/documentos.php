<?php
include('db/conn.php');

$sql = "SELECT * FROM documentos ORDER BY id_doc desc";
$result = $conn->query($sql);

?>
 
      <div class="lista row">
        <div class="parceiros card" style="width: 40%;">
          <ul class="list-group list-group-flush" style="text-align: center;">
            <h3 style="text-align: center; margin-top: 5px;"><span class="Ne">DOC</span><span class="Ruds">UMENTOS</span></h3> <br>

            <div class="row">
                  <div class="col" name="name">
                      <li class="list-group-item"> LISTA DE ARQUIVOS </li>
                  </div> 
            </div>  
            
            <?php 
              if ($result->num_rows > 0) {
                foreach($row = $result as $row) { ?>
                  <form action="db/insertdocumento.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col" name="name">
                        <li class="list-group-item"> <?php echo $row['name']?> </li></div>

                      <div class="col" name="arquivo"> <li class="list-group-item">
                        <a href="./IMG/Docs/<?php echo $row['arquivo']?>" style="text-decoration:none; color: #606062" download>
                          <?php echo $row['name']?> - Download </a></li></div>
                  </form>
                <br> 

             <?php }} ?>    
          </ul>
        </div>
      </div> <br>


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

