<?php 

include 'db.php';

$id_encontrei = $_GET['id_encontrei'];

$query = "DELETE FROM encontrei WHERE ID_encontrei = $id_encontrei";

mysqli_query($conexao, $query);

header('location:index.php?pagina=perdi');
?>