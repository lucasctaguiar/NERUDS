<br><br><br>
<div class="lista row">
    <br>
        <div class="parceiros card" style="width: 40%;">
          <ul class="list-group list-group-flush" style="text-align: center;">
            <h3 style="text-align: center; margin-top: 5px;"><span class="Ne">Acesso Ad</span><span class="Ruds">ministração</span></h3> <br><br><br>
            
            <form action="db/loginbd.php" method="post">
    
                <div class="mb-3" style="text-align:left;">
                    <label for="exampleInputEmail1" class="form-label">Nome de Usuário:</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3" style="text-align:left;">
                    <label for="exampleInputPassword1" class="form-label">Senha:</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
    
                <?php
                    if(isset($_GET['res'])){
                        if($_GET['res'] == 'registook')
                            echo '<div class="alert alert-success" role="alert">Registo efetuado com sucesso</div>';
                        }
                ?>

             <br>  <br>  
          </ul>
        </div>
      </div>
      <br><br><br>

