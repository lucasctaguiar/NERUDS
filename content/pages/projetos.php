<?php
include('db/conn.php');

$sql = "SELECT * FROM projetos ORDER BY id_proj desc";
$result = $conn->query($sql);

?>
 
<h3 style="text-align: center; margin-top: 5px;"><span class="Ne">PRO</span><span class="Ruds">JETOS</span></h3> <br>
    <?php 
    if ($result->num_rows > 0) {
        foreach($row = $result as $row) { ?>

      <form action="db/insertprojeto.php" method="POST" enctype="multipart/form-data">
        <div class="lista row">
          <div class="parceiros card" style="width: 80%; text-align: center;">
            <ul class="list-group list-group-flush">
             <li class="list-group-item" name="name"><?php echo $row['name']?></li>
              
            </ul>
          </div>
        </div>
      </form> <br> 

      <?php }} ?>

     <br> <br> <br> <br>
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

   