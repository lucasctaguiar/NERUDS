<header class="text-center p-2 sticky-top">

    <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a href="index.php"><img class="logotipo" src="img/Logotipo/logoo.png" alt="neruds_logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?p=inicio">Pagina Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=noticias">NOTÍCIAS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Quem Somos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="index.php?p=historico">Histórico</a></li>
                          <li><a class="dropdown-item" href="index.php?p=equipe">Equipe</a></li>
                          <li><a class="dropdown-item" href="index.php?p=coordenacao">Coordenação</a></li>
                          <li><a class="dropdown-item" href="index.php?p=parcerias">Parcerias</a></li>

                          <?php 
                          if(!isset($_SESSION['username'])) {
                          ?>
                          <li><a class="dropdown-item" href="index.php?p=login">login adm</a></li>

                          <?php } 
                          else { ?>
                          <li><a class="dropdown-item" href="index.php?p=administracao">Administração</a></li>
                          <li><a class="dropdown-item" href="db/logout.php">logout</a></li>
                          <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Atuação
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="index.php?p=areas-atuacao">Áreas de Atuação</a></li>
                          <li><a class="dropdown-item" href="index.php?p=linhas-pesquisa">Linhas e Grupos de Pesquisa</a></li>
                          <li><a class="dropdown-item" href="index.php?p=projetos">Projetos</a></li>
                          
                        </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php?p=documentos">Documentos</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
</header>
    <main class="container mb-3 p-5 shadow rounded"> <!--Delimitando conteúdo principal-->