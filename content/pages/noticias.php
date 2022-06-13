<?php
include('db/conn.php');

$sql = "SELECT * FROM noticias ORDER BY id_not desc LIMIT 5";
$result = $conn->query($sql);

?>

      <div> <!--iNSERI OS ASIDES AQUI QUANDO DESMEBREI O ARQUIVO, PRECISO OLHAR ISSO-->
     <!-- <aside class="aside1">

<div class="cardaside card mb-1 mt-5">
   <div class="card-body" style="text-align: center; font-weight: bold;">
     <span class="Ne">EV</span><span class="Ruds">ENTOS</span>
   </div>
</div>

  <a href="https://www.even3.com.br/sober2022" target="_blank" class="cardaside list-group-item list-group-item-action" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">SOBER</h5>
    </div>
    <p class="mb-1">60º Congresso da Sociedade Brasileira de Economia, Administração, e Sociologia Rural!</p>
    <small>8 à 11 Agosto 2022 | Natal - RN</small>
  </a>

  <a href="http://www.sisgeenco.com.br/eventos/enanpur/2022/ " target="_blank" class="cardaside list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">XIX ENAPUR</h5>
    </div>
    <p class="mb-1">Planejando o Urbano e o Regional - Organizando a Esperança!</p>
    <small class="text-muted">22 à 27 Maio 2022 </small>
  </a>

  <a href="https://redesrurais.org.br/encontro/ " target="_blank" class="cardaside list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Encontro de Redes de Estudos Rurais</h5>
    </div>
    <p class="mb-1">Fique atento a toda a programação do evento!</p>
    <small class="text-muted">4 à 8 Outubro 2022</small>
  </a>

  <a href="https://www.irsa2022.com/" target="_blank" class="cardaside list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">XV World Congress of Rural Sociology</h5>
    </div>
    <p class="mb-1">Rural sustainability in the Urban century</p>
    <small class="text-muted">19 à 22 Julho | Cairns, Australia</small>
  </a>

  <a href="http://www.alasru.unam.mx/congreso/#/inicio " target="_blank" class="cardaside list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Congresso Alasru</h5>
    </div>
    <p class="mb-1">XI Congresso Latino Americano de Sociologia Rural</p>
    <small class="text-muted">27 Nov à 02 Dez 2022</small>
  </a>
  
</div>

</aside>

<aside class="aside2">

<div class="cardaside card mb-1 mt-5">
   <div class="card-body" style="text-align: center; font-weight: bold;">
     <span class="Ne">MA</span><span class="Ruds">IS AQUI</span>
   </div>
 </div>

  <a href="index.php?p=outras-noticias" class="cardaside list-group-item list-group-item-action" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Outra New</h5>
    </div>
    <p class="mb-1">Algum texto sobre a notícias aqui!</p>
    <small>data da notícia</small>
  </a>

  <a href="index.php?p=outras-noticias"  class="cardaside list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Outra New</h5>
    </div>
    <p class="mb-1">Algum texto sobre a notícias aqui!</p>
    <small class="text-muted">data da noticia </small>
  </a>

  <a href="index.php?p=outras-noticias"  class="cardaside list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Outra New</h5>
    </div>
    <p class="mb-1">Algum texto sobre a notícias aqui!</p>
    <small class="text-muted">data da noticia</small>
  </a>

  <a href="index.php?p=outras-noticias" class="cardaside list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Outra New</h5>
    </div>
    <p class="mb-1">Algum texto sobre a notícias aqui!</p>
    <small class="text-muted">data da noticia</small>
  </a>

  <a href="index.php?p=outras-noticias" class="cardaside list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Outra New</h5>
    </div>
    <p class="mb-1">Algum texto sobre a notícias aqui!</p>
    <small class="text-muted">data da noticia/small>
  </a>
  
</div>

</aside> -->
      </div> <!--FIM DOS ASIDES PROVISÓRIOS-->

      <div class="card mb-3 mt-5">
        <div class="card-body" style="text-align: center; font-weight: bold;">
           <span class="Ne" style="font-size: 40px
           ;"><i class="bi bi-arrow-down-square" style="font-size: 40px;"></i> As mais </span><span style="font-size: 40px;" class="Ruds">Recentes Aqui!!!! <i class="bi bi-arrow-down-square" style="font-size: 40px;"></i></span>
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
       <a href="index.php?p=outras-noticias" style="text-decoration: none;"> <div class="card-body" style="text-align: center; font-weight: bold;">
           <span class="Ne" style="font-size: 40px
           ;">Outras </span><span style="font-size: 40px;" class="Ruds">Notícias Aqui</span>
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

    