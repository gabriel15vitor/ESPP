<?php

session_start();

include 'db.php';

$raca_adota = $_POST['raca_adota'];
$porte_adota = $_POST['porte_adota'];
$cor_adota = $_POST['cor_adota'];
$sexo_adota = $_POST['sexo_adota'];
$descricao_adota = $_POST['descricao_adota'];
$estado_adota = $_POST['estado_adota'];
$cidade_adota = $_POST['cidade_adota'];
$bairro_adota = $_POST['bairro_adota'];
$telefone_adota = $_POST['telefone_adota'];
$usuario_adota = $_SESSION['usuario'];
if (isset($_FILES['arquivo'])) {
	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	if($extensao == "jpeg"){
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -5));
	}
	$novo_nome = md5(time()) . $extensao;
	$diretorio = "upload/adota/";

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
}

$query = "INSERT INTO adota(raca_adota, porte_adota, cor_adota, sexo_adota, descricao_adota, estado_adota, cidade_adota, bairro_adota, telefone_adota, usuario_adota, arquivo_foto_adota, data_foto_adota) VALUES('$raca_adota', '$porte_adota', '$cor_adota', '$sexo_adota', '$descricao_adota', '$estado_adota', '$cidade_adota', '$bairro_adota', '$telefone_adota', '$usuario_adota', '$novo_nome', NOW())";

mysqli_query($conexao, $query);

header('location:index.php?pagina=adota');
?>