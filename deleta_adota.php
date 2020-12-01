<?php 

include 'db.php';

$id_adota = $_GET['id_adota'];

$query = "DELETE FROM adota WHERE ID_adota = $id_adota";

mysqli_query($conexao, $query);

header('location:index.php?pagina=adota');
?>