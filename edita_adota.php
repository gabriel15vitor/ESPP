<?php

include 'db.php';

$id_adota = $_POST['id_adota'];
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

$query = "UPDATE adota SET raca_adota='$raca_adota', porte_adota='$porte_adota', cor_adota='$cor_adota', sexo_adota='$sexo_adota', descricao_adota='$descricao_adota', estado_adota='$estado_adota', cidade_adota='$cidade_adota', bairro_adota='$bairro_adota', telefone_adota='$telefone_adota' WHERE id_adota = $id_adota";

mysqli_query($conexao, $query);

header('location:index.php?pagina=adota');
?>