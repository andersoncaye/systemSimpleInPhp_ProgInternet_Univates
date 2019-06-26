<?php

	include './fpdf/fpdf.php';
	
	$servidor = DB_HOST;
	$usuario = DB_USER;
	$senha = DB_PASS;
	$dbname = DB_NAME;
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
	
	///instanciar novo pdf
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(190,10,utf8_decode('Relatório de Cheques'),0,0,"C");
	$pdf->Ln(15);
	
	//montar cabeçalho do pdf
	$pdf->SetFont("Arial","I",10);
	$pdf->Cell(50,7,"Id",1,0,"C");
	$pdf->Cell(40,7,"Data",1,0,"C");
	$pdf->Cell(40,7,"Nr Cheque",1,0,"C");
	$pdf->Cell(60,7,"Titular",1,0,"C");
	$pdf->Cell(50,7,"Info Bancárias",1,0,"C");
	$pdf->Ln();
	
	//select 
	$reply = $main->database->select("SELECT pc.*, c.name, c.code FROM pouch_check pc, client c WHERE idClient_Pousch = idClient ORDER BY date_e, idPouch");
	
	if (!empty($reply)){
		foreach ($reply as $row){	
			$pdf->Cell(50,7,utf8_decode($row->idPouch),1,0,"C");
			$pdf->Cell(50,7,utf8_decode($row->idClient_Pousch),1,0,"C");
			$pdf->Cell(50,7,($row->date),1,0,"C");
			$pdf->Cell(50,7,utf8_decode($row->reference),1,0,"C");
			$pdf->Ln();
		}
	}

	
	$pdf->Output();
	
	
	
	/*$id = "1";
	$result_usuario = "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1";
	$resultado_usuario = mysqli_query($conn, $result_usuario);	
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);	
	
	
	$pagina = 
		"<html>
			<body>
				<h1>Informações do Usuário</h1>
				Id: ".$row_usuario['id']."<br>
				Nome: ".$row_usuario['nome']."<br>
				E-mail: ".$row_usuario['email']."<br>
				Senha: ".$row_usuario['senha']."<br>
				<h4>http://www.celke.com.br</h4>
			</body>
		</html>
		";

	$arquivo = "Cadastro01.pdf";
	*/
	
?>
	