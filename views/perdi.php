<div class="container">

<?php 
	if (!(isset($_SESSION['login']))) {?>
		<br>
		<center><a href="views/pg_login.php" class="badge badge-warning">Para adicionar uma publicação é necessario login</a></button><center>
	<?php }else{ ?>

		<center>
			<br>
			<a class="btn btn-success" href="?pagina=inserir_perdi">Inserir novo cachorro perdido</a>
		</center>
	<?php } ?>

<br><br><br>

<center><h4><span class="badge badge-secondary">CACHORROS ENCONTRADOS</span></h4></center>

<br><br>

<table class="table table-hover table-striped" id="cursos">
	<thead>
		<tr>
			<th>Foto</th>
			<th>Raça</th>
			<th>Local</th>
			<th>Data</th>
			<th>Telefone</th>
			<th>Detalhes</th>
		</tr>
	</thead>

	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_encontrei)){
			echo '<td><img src="upload/encontrei/'.$linha['arquivo_foto_encontrei'].'" alt="foto" width="250" height="200"></img></td>';
			echo '<td>'.$linha['raca_encontrei'].'</td>';
			echo '<td>'.$linha['bairro_encontrei'].', '.$linha['cidade_encontrei'].' - '.$linha['estado_encontrei'].'</td>';
			$data = $linha['data_encontrei'];
			$dia = substr($data, -2);
			$mes = substr($data, -5, -3);
			$ano = substr($data, 0, 4);
			$data = $dia.'/'.$mes.'/'.$ano;
			echo '<td>'.$data.'</td>';
			echo '<td>'.$linha['telefone_encontrei'].'</td>';
		?>

			<td><a href="views/detalhes_encontrei.php?id_encontrei=<?php echo $linha['id_encontrei']; ?>">Detalhes</a></td></tr>

		<?php
			}
		?>
	</tbody>
</table>
<br><br><br><br>