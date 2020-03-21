<?php

session_start();

include 'db.php';

$raca_encontrei = $_POST['raca_encontrei'];
$porte_encontrei = $_POST['porte_encontrei'];
$cor_encontrei = $_POST['cor_encontrei'];
$sexo_encontrei = $_POST['sexo_encontrei'];
$abrigo_encontrei = $_POST['abrigo_encontrei'];
$data_encontrei = $_POST['data_encontrei'];
$descricao_encontrei = $_POST['descricao_encontrei'];
$estado_encontrei = $_POST['estado_encontrei'];
$cidade_encontrei = $_POST['cidade_encontrei'];
$bairro_encontrei = $_POST['bairro_encontrei'];
$telefone_encontrei = $_POST['telefone_encontrei'];
$usuario_encontrei = $_SESSION['usuario'];

$dia = substr($data_encontrei, 0, 4);
$mes = substr($data_encontrei, 5, 2);
$ano = substr($data_encontrei, -2);
$data_encontrei = $dia.$mes.$ano;

if (isset($_FILES['arquivo'])) {
	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	if($extensao == "jpeg"){
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -5));
	}
	$novo_nome = md5(time()) . $extensao;
	$diretorio = "upload/encontrei/";

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
}

$query = "INSERT INTO ENCONTREI(raca_encontrei, porte_encontrei, cor_encontrei, sexo_encontrei, abrigo_encontrei, data_encontrei, descricao_encontrei, estado_encontrei, cidade_encontrei, bairro_encontrei, telefone_encontrei, usuario_encontrei, arquivo_foto_encontrei, data_foto_encontrei) VALUES('$raca_encontrei', '$porte_encontrei', '$cor_encontrei', '$sexo_encontrei', '$abrigo_encontrei', '$data_encontrei', '$descricao_encontrei', '$estado_encontrei', '$cidade_encontrei', '$bairro_encontrei', '$telefone_encontrei', '$usuario_encontrei', '$novo_nome', NOW())";

mysqli_query($conexao, $query);

header('location:index.php?pagina=encontrei');
?>