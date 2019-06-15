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
                <h1>Malote de Cheques</h1>
            </div>
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Inicio</span></li>
                        <!--<li class="breadcrumb-item"><span>Home</span></li>-->
                        <li class="breadcrumb-item active" aria-current="page">Malote de Cheques</li>
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

            <div class="pull-right">
				<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcad">Cadastrar</button>
			</div>
			<!-- Inicio Modal -->

            <?php
            
                //$nome = mysqli_real_escape_string($conn, $_POST['nome']);
               // $detalhes = mysqli_real_escape_string($conn, $_POST['detalhes']);
                
                //$result_cursos = "INSERT INTO cursos (nome, categoria_id, detalhes) VALUES ('$nome', '1', '$detalhes')";	
               // $resultado_cursos = mysqli_query($conn, $result_cursos);	

            ?>

			<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
                            
                            <h4 class="modal-title text-left" id="myModalLabel">Cadastrar Curso</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							
						</div>
						<div class="modal-body">

							<form method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="recipient-name" class="control-label">Código Cliente:</label>
									<input name="codeClient" type="text" class="form-control" require>
								</div>
								<div class="form-group">
									<label for="message-text" class="control-label">Data:</label>
									<input name="date" type="text" class="form-control" require>
								</div>
                                <div class="form-group">
									<label for="message-text" class="control-label">Referência:</label>
									<textarea name="references" class="form-control"></textarea>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Cadastrar</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
			<!-- Fim Modal -->



            <!-- Inicio - Tabela de Malotes -->
            <table class="table" style="margin-top: 60px;">

               <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Data</th>
                        <th scope="col">Referência</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
            <?php $i=0; if ($i == 0) { ?>
                <tbody>
                    <tr>
                        <th scope="row">    <a href="" style="color: black;"> ID </a> </th>
                        <td>                <a href="" style="color: black;"> CLIENTE </a> </td>
                        <td>                <a href="" style="color: black;"> DATA </a> </td>
                        <td>                <a href="" style="color: black;"> REFERÊNCIA </a> </td>
                        
                        <td>

                            <a href="" style="font-size: 1.2em; color: Tomato;" title="Editar"><i class="fas fa-edit"></i></i></a>
                            &nbsp;&nbsp;
                            <a href="" style="font-size: 1.2em; color: Tomato;" title="Excluir"><i class="fas fa-trash-alt"></i></a>
                        
                        </td>
                    </tr>
                </tbody>
            <?php } else { ?>
                <h4>Nenhum dado encontrado!</h4>
            <?php } ?>
            </table>

            <h4>Nenhum dado encontrado!</h4>
            <!-- Fim - Tabela de Malotes -->

            <p></p>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var recipientnome = button.data('whatevernome')
        var recipientdetalhes = button.data('whateverdetalhes')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('ID do Curso: ' + recipient)
        modal.find('#id_curso').val(recipient)
        modal.find('#recipient-name').val(recipientnome)
        modal.find('#detalhes-text').val(recipientdetalhes)
    })
</script>