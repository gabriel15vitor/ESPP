<?php

include 'db.php';

$id_perdi = $_POST['id_perdi'];
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

$query = "UPDATE PERDI SET raca_perdi='$raca_perdi', porte_perdi='$porte_perdi', cor_perdi='$cor_perdi', sexo_perdi='$sexo_perdi', nome_cachorro_perdi='$nome_cachorro_perdi', data_perdi='$data_perdi', descricao_perdi='$descricao_perdi', estado_perdi='$estado_perdi', cidade_perdi='$cidade_perdi', bairro_perdi='$bairro_perdi', telefone_perdi='$telefone_perdi' WHERE id_perdi = $id_perdi";

mysqli_query($conexao, $query);

header('location:index.php?pagina=encontrei');
?>