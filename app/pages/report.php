<?php
//valida a sessão
if (isset($main)){
    if (!$main->session->issetSession($keySession)) {
        echo '<script>location.href="../../index.php";</script>';
    }
} else {
    echo '<script>location.href="../../index.php";</script>';
}
?>

<section class="page-title" style="background: url(assets/img/bg-page-title-finance.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Relatórios</h1>
            </div>
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Inicio</span></li>
                        <!--<li class="breadcrumb-item"><span>Home</span></li>-->
                        <li class="breadcrumb-item active" aria-current="page">Relatórios</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<div class="container rounded mb-4">
    <div class="row">
        <div class="col bg-white">
            <h2 class="bg-white" ></h2>
            <p class="bg-white"></p>

            <form method="POST" >
                <button type="submit" class="btn btn-light" name="report" value="allMalote">Relatório de Malotes</button>
            </form>

            <?php

                if (isset($_POST['report']) && $_POST['report'] == 'allMalote'){
                    require 'app/pages/gerar_pdf.php';
                }

            ?>

        </div>
    </div>
</div>