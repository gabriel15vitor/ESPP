<?php

include 'db.php';

$id_encontrei = $_POST['id_encontrei'];
$raca_encontrei = $_POST['raca_encontrei'];
$porte_encontrei = $_POST['porte_encontrei'];
$cor_encontrei = $_POST['cor_encontrei'];
$sexo_encontrei = $_POST['sexo_encontrei'];
//$nome_cachorro_encontrei = $_POST['nome_cachorro_encontrei'];
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
$data_encontrei = $dia . $mes . $ano;

$query = "UPDATE encontrei SET raca_encontrei='$raca_encontrei', porte_encontrei='$porte_encontrei', cor_encontrei='$cor_encontrei', sexo_encontrei='$sexo_encontrei', abrigo_encontrei='$abrigo_encontrei', data_encontrei='$data_encontrei', descricao_encontrei='$descricao_encontrei', estado_encontrei='$estado_encontrei', cidade_encontrei='$cidade_encontrei', bairro_encontrei='$bairro_encontrei', telefone_encontrei='$telefone_encontrei' WHERE id_encontrei = $id_encontrei";

mysqli_query($conexao, $query);

header('location:index.php?pagina=encontrei');
?>