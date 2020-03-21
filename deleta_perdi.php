<?php 

include 'db.php';

$id_perdi = $_GET['id_perdi'];

$query = "DELETE FROM PERDI WHERE ID_PERDI = $id_perdi";

mysqli_query($conexao, $query);

header('location:index.php?pagina=encontrei');
?>