<?php

session_start();

include 'db.php';

$raca_perdi = $_POST['raca_perdi'];
$porte_perdi = $_POST['porte_perdi'];
$cor_perdi = $_POST['cor_perdi'];
$sexo_perdi = $_POST['sexo_perdi'];
$nome_cachorro_perdi = $_POST['nome_cachorro_perdi'];
$data_perdi = $_POST['data_perdi'];
$descricao_perdi = $_POST['descricao_perdi'];
$estado_perdi = $_POST['estado_perdi'];
$cidade_perdi = $_POST['cidade_perdi'];
$bairro_perdi = $_POST['bairro_perdi'];
$telefone_perdi = $_POST['telefone_perdi'];
$usuario_perdi = $_SESSION['usuario'];

$dia = substr($data_perdi, 0, 4);
$mes = substr($data_perdi, 5, 2);
$ano = substr($data_perdi, -2);
$data_perdi = $dia . $mes . $ano;


if (isset($_FILES['arquivo'])) {
	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	if($extensao == "jpeg"){
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -5));
	}
	$novo_nome = md5(time()) . $extensao;
	$diretorio = "upload/perdi/";

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
}

$query = "INSERT INTO PERDI(raca_perdi, porte_perdi, cor_perdi, sexo_perdi, nome_cachorro_perdi, data_perdi, descricao_perdi, estado_perdi, cidade_perdi, bairro_perdi, telefone_perdi, usuario_perdi, arquivo_foto_perdi, data_foto_perdi) VALUES('$raca_perdi', '$porte_perdi', '$cor_perdi', '$sexo_perdi', '$nome_cachorro_perdi', '$data_perdi', '$descricao_perdi', '$estado_perdi', '$cidade_perdi', '$bairro_perdi', '$telefone_perdi', '$usuario_perdi', '$novo_nome', NOW())";

mysqli_query($conexao, $query);

header('location:index.php?pagina=perdi');
?>