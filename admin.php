<?php
    //Inclusao das Configuracoes
    include_once('system/config.php');
    //Inclusao do cabecalho
    include_once ('includes/header.php');

    //Apresentacao da pagina
    if (!isset($_GET['pagina']) || $_GET['pagina'] == ''){ //Para receber a pagina inicial (home)

        include ("pages/home.php");

    } else if(isset($_GET['pagina']) && $_GET['pagina'] == 'meu') { //Para receber pagina ...

        include("");

    } else {
        include("page/erro.php");
    }

    //Inclusao do reodape
    include_once ('includes/header.php');

?>