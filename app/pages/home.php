<?php
    //valida a sessão
    if (isset($main)){
        if (!$main->session->issetSession($keySession)) {
            echo '<script>location.href="index.php";</script>';
        } 
    } else {
        echo '<script>location.href="../../index.php";</script>';
    }
?>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col bg-white">
                <h2 class="bg-white" >Título Aqui</h2>


                    <p class="bg-white">Conteúdo Aqui</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro aut, ea, voluptatum voluptas veritatis optio voluptatibus laboriosam repudiandae recusandae ipsa sequi totam neque libero eum rerum, incidunt officiis fuga atque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro aut, ea, voluptatum voluptas veritatis optio voluptatibus laboriosam repudiandae recusandae ipsa sequi totam neque libero eum rerum, incidunt officiis fuga atque.</p>
                
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, eius aspernatur maiores fuga suscipit eveniet odit magnam eum, minus cum incidunt tempore minima nam id inventore debitis esse numquam fugit!</p>

            </div>
        </div>
    </div>
</section>

