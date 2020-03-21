<?php 

	$query = "SELECT * FROM PERDI WHERE ID_PERDI = $id_perdi";
		$consulta_dog = mysqli_query($conexao, $query);
		$linha_dog = mysqli_fetch_array($consulta_dog);


	echo "<center><h4><span class='badge badge-secondary'>CACHORRO PERDIDO</span></h4></center>";
	echo "<br><br>";
	echo "<a href='deleta_encontrei.php?id_encontrei=" . $linha_dog['id_encontrei']. "class='badge badge-primary'>Deletar</a>";

?>

