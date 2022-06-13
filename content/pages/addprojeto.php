

<div class="container">
    <div class="row">
        <form action="db/insertprojeto.php" method="post"><!-- Esse form foi inserido para que as informações sejam enviadas para base de dados. As bases de dados sao acessadas via forms-->
           
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descrição do Projeto</label>
                    <textarea class="form-control" name="name" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Publicar</button>
            </div>
        </form>
</div>
</div> 
