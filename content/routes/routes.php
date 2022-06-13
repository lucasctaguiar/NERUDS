<?php


include('db/conn.php');


if(isset($_GET['p'])){
    $p = $_GET['p'];

    if($p=="inicio")
        include('content/pages/inicio.php');
    else if($p=="noticias")
        include('content/pages/noticias.php');
    else if($p=="outras-noticias")
        include('content/pages/outras-noticias.php');
    else if($p=="projetos")
        include('content/pages/projetos.php');
    else if($p=="parcerias")
        include('content/pages/parcerias.php');
    else if($p=="linhas-pesquisa")
        include('content/pages/linhas-pesquisa.php');
    else if($p=="historico")
        include('content/pages/historico.php');
    else if($p=="equipe")
        include('content/pages/equipe.php');
    else if($p=="documentos")
        include('content/pages/documentos.php');
    else if($p=="coordenacao")
        include('content/pages/coordenacao.php');
    else if($p=="areas-atuacao")
        include('content/pages/areas-atuacao.php');
        else if($p=="login")
        include('content/pages/login.php');

    //SISTEMA DE LOGIN

    else if(!isset($_SESSION['username']) && $p=="login")
    //NÃO AUTENTICADO
        include('content/pages/login.php');

    
    else if(!isset($_SESSION['username']) && $p=="registo")
    //CRIAR NOVO REGISTO DE ADM
        include('content/pages/registo.php');
    
    //AUTENTICADO NA ZONA DE ADMINISTRAÇÃO
    
    else if(isset($_SESSION['username']) && $p=="administracao")
        include('content/pages/administracao.php');

    else if (isset($_SESSION['username']) && $p=="addnoticia")
        include('content/pages/addnoticia.php');
    else if (isset($_SESSION['username']) && $p=="addprojeto")
        include('content/pages/addprojeto.php');
    else if (isset($_SESSION['username']) && $p=="adddocumento")
        include('content/pages/adddocumento.php');
    else if (isset($_SESSION['username']) && $p=="updatedocumento")
        include('content/pages/updatedocumento.php');
    else if (isset($_SESSION['username']) && $p=="updateprojeto")
        include('content/pages/updateprojeto.php');

    else if (isset($_SESSION['username']) && $p=="updatenoticia")
        include('content/pages/updatenoticia.php');


    //AUTENTICADO DENTRO DA ZONA DE ADMINISTRAR NOTÍCIAS
    else if(isset($_SESSION['username']) && $p="noticias")
        include('content/pages/admnoticias.php');
    
    else if(isset($_SESSION['username']) && $p="logout")
        include('db/logout.php');

}
else{
    include('content/pages/inicio.php');
}