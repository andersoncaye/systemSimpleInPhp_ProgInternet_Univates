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

<section class="page-title" style="background: url(assets/img/bg-page-title-email.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Cadastro de Cliente</h1>
            </div>
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Inicio</span></li>
                        <!--<li class="breadcrumb-item"><span>Home</span></li>-->
                        <li class="breadcrumb-item active" aria-current="page">Cadastro de Cliente</li>
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


            <form method="POST">
                <div class="form-group">
                    <label for="codeClient">Código do cliente <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="codeClient" name="code" placeholder="Codigo do cliente" required>
                </div>
                <div class="form-group">
                    <label for="nameClient">Nome do cliente <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nameClient" name="name" placeholder="Nome do cliente" required>
                </div>
                <div class="form-group">
                    <label for="emailClient">Endereço de email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="emailClient" name="email" aria-describedby="emailHelp" placeholder="Email do cliente" required>          
                </div>
                <small id="emailHelp" class="form-text text-muted"><span class="text-danger">* Campos obrigatórios</span></small><br/>
                <button type="submit" class="btn btn-primary" name="save" value="client">Salvar Cliente</button>
            </form>

            <p></p>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['save']) && $_POST['save'] == 'client'){
        
        $code = $main->clearInjectAllSQL($_POST['code']);
        $name = $main->clearInjectAllSQL($_POST['name']);
        $email = $main->clearInjectEmailSQL($_POST['email']);

        if (empty($code) || empty($name) || empty($email)){
            echo '<script>alert("Preencha todos os campos!");</script>';
        } else {

            $keys = "code,name,email";
            $values = "'{$code}','{$name}','{$email}'";
/*
            $array = array(

                'code' => $code,
                'name' => $name,
                'email' => $email

            );

            print_r($array);
*/
            //echo "<br><br><br>############################## ".$main->database->insert('client', $array);
            echo fun_insert('client', $keys, $values);

            if (1 == 1){
                echo '<script>alert("Salvo com sucesso!");</script>';
            } else {
                echo '<script>alert("Erro ao salvar!");</script>';
            }
        }

    }
?>