<?php
include('db/conn.php');

$sql = "SELECT * FROM noticias ORDER BY id_not desc LIMIT 3";
$result = $conn->query($sql);

?>

<div class="row h-100">
        <div class="coluna1 col h-100 my-auto"><!--dividindo minha main em duas colunas-->

         <div class="row"> <!--Card que fala sobre o Núcleo-->
            <div class="card1 col-12 col-lg-6 h-100 ">
              <div class="sobre card mb-3 h-100">
                <a href="https://www.uft.edu.br/" target="_blank"> <img src="IMG/Sobre/UFT.jpg" class="card-img-top me-3 p-3" alt="UFT"></a>
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 30px; text-align: center;">Sobre o <span class="Ne">NE</span><span class="Ruds">RUDS</span></h5>
              
                  <p class="card-text" style="text-align: center;"> <strong> Núcleo de Estudos Rurais, Desigualdades e Sistemas Socioecológicos</p></strong> <br>
                  <p class="card-text">O NERUDS envolve docentes pertencentes aos cursos de administração e Economia da Universidade Fderal do Tocantin (UFT), e de Tecnologia em Gestão de Cooperativas da Universidade Federal do Mato Grosso (UFNT).</p>
                  <p class="card-text">O núcleo conta com parcerias que envolvem docentes e/ou pesquisadores das áreas agrarias, ciencias sociais aplicadas e ambientais, oriundos de outras instituições, nacionais e internacionais</p>
                  <p class="card-text"></p>
                  <p class="card-text">As áreas dos estudos Rurais, das Desigualdades e dos Sistemas Socioecológicos congregram os conhecimentos das várias áreas para planejar, projetar, avaliar e facilitar os fluxos de todo sistema físico, social, economico e ambiental.</p>
                  <p class="card-text">A principal motivação para a escolha da temática abordada está diretamente vinculada à atuação docente e em muitos dos escritos acadêmicos que envolveram os distintos atores sociais e os diversos contextos organizacionais. Essas temáticas sempre estiveram atreladas a algum dilema social, tais como a questão do uso da água e da terra, o desmatamento, a organização social dos agricultores familiares, ao uso e ocupação espacial dos lotes agrários, processos produtivos na agricultura, dentre outros.</p>
                  <p class="card-text">Como público alvo beneficiário do Núcleo de Estudos Rurais, Desigualdades e Sistemas Socioecológicos (NERUDS), estão os agricultores familiares, os empreendedores individuais e coletivos, empresários, poder público, comunidades quilombolas, indígenas, entre outros.</p>
                  <p class="card-text"></p>
                  <p class="card-text"></p>
                  <br>
                  <p class="card-text" style="text-align: right;"><small class="text-muted">Equipe <span class="Ne">NE</span><span class="Ruds">RUDS</span> </small></p>
                 </div>
               </div>
             </div>
           </div>
        </div> <!--Fechamento da Coluna 1 que divide meu main em duas partes-->
          <div class="coluna2 col-12 col-lg-6 h-100"><!--dividindo minha main em duas colunas-->

            <div class="principais card mb-3 mt-5">
             <a href="notícias.html" style="text-decoration: none;"> <div class="card-body" style="text-align: center; font-weight: bold;">
                <span class="Ne"><i class="bi bi-arrow-down-square" style="font-size: 20px;"></i> PRINCIP</span><span class="Ruds">AIS NOTICÍAS!!!! <i class="bi bi-arrow-down-square" style="font-size: 20px;"></i></span>
              </div>
              </a>
            </div>

             
        
        <form action="db/insertnoticia.php" method="POST" enctype="multipart/form-data">
          <?php 
            if ($result->num_rows > 0) {
              foreach($row = $result as $row) { 
                if($row['id_not']%2!=0) {?>
                  <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./IMG/News/<?=$row['image']?>" name="image" class="img-fluid rounded p-3" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" name="title" id="noticia1"><?=$row['title']?></h5>
                            <p class="card-text" name="title">Mais uma novidade para você se informar aqui em nossa página! clique no botão e saiba mais sobre <?=$row['title']?></p>
                            <p class="text-end"> <a href="index.php?p=noticias" class="btn btn-primary">Ler Notícia</a></p>
                            <p class="card-text" name="Data"><small class="text-muted"><?=$row['Data']?></small></p>
                        </div>
                      </div>
                    </div>
                  </div> 
                <?php 
                } else { ?> 
                  <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./IMG/News/<?=$row['image']?>" name="image" class="img-fluid rounded p-3" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" name="title" id="noticia1"><?=$row['title']?></h5>
                            <p class="card-text" name="title">Nós não paramos!!! Aqui você ainda encontra mais novidades sobre <?=$row['title']?>!!! Clique no botão e leia!</p>
                            <p class="text-end"> <a href="index.php?p=noticias" class="btn btn-primary">Ler Notícia</a></p>
                            <p class="card-text" name="Data"><small class="text-muted"><?=$row['Data']?></small></p>
                        </div>
                      </div>
                    </div>
                  </div> 
                <?php 
            }}
          } 
            ?>
            </form>
          </div>
          </div>
        </div>
        <br>
       
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