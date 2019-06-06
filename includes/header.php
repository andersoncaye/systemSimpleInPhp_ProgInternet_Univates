<!doctype html>
<html lang="pt-br">
    <head>
        <?php include_once('head.php'); ?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col bg-success">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('.navbar-light .dmenu').hover(function () {
                                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
                            }, function () {
                                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
                            });
                        });
                    </script>
                    <nav class="navbar navbar-expand-sm   navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse bg-light" id="navbarTogglerDemo03">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item bg-light">
                                    <a class="nav-link" href="<?php echo PATH; ?>index.php?page">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item bg-light">
                                    <a class="nav-link" href="<?php echo PATH; ?>index.php?page=findCheque">Pesquisar Cheque</a>
                                </li>
                                <li class="nav-item dropdown dmenu bg-light">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Cadastros
                                    </a>
                                    <div class="dropdown-menu sm-menu">
                                        <a class="dropdown-item" href="<?php echo PATH; ?>index.php?page=client">Cliente</a>
                                        <a class="dropdown-item" href="<?php echo PATH; ?>index.php?page=malote">Malote de Cheque</a>
                                    </div>
                                </li>
                                <li class="nav-item bg-light">
                                    <a class="nav-link" href="<?php echo PATH; ?>index.php?page=report">Relatórios</a>
                                </li>
                                <li class="nav-item bg-light">
                                    <a class="nav-link" href="<?php echo PATH; ?>index.php?page=email">Email</a>
                                </li>
                                <li class="nav-item bg-light">
                                    <a class="nav-link" href="<?php echo PATH; ?>index.php?page=info">Info</a>
                                </li>
                            </ul>
                            <div class="social-part bg-light">
                                <span class="bg-light">Olá <?php echo $main->session->get($keySession); ?> !</span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="index.php?page=sair">SAIR</a>
                                <!--
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                -->
                            </div>
                        </div>
                    </nav>
