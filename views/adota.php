<div class="container">

<?php 
	if (!(isset($_SESSION['login']))) {?>
		<br>
		<center><a href="views/pg_login.php" class="badge badge-warning">Para adicionar uma publicação é necessario login</a></button><center>
	<?php }else{ ?>

		<center>
			<br>
			<a class="btn btn-success" href="?pagina=inserir_adota">Inserir novo pet para adoção</a>
		</center>
	<?php } ?>

<br><br><br>

<center><h4><span class="badge badge-secondary">PETS PARA ADOÇÃO</span></h4></center>

<br><br>

<table class="table table-hover table-striped" id="cursos">
	<thead>
		<tr>
			<th>Foto</th>
			<th>Raça</th>
			<th>Local</th>
			<th>Telefone</th>
			<th>Detalhes</th>
		</tr>
	</thead>

	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_adota)){
				echo '<td><img src="upload/adota/'.$linha['arquivo_foto_adota'].'" alt="foto" width="250" height="200"></img></td>';
				echo '<td>'.$linha['raca_adota'].'</td>';
				echo '<td>'.$linha['bairro_adota'].', '.$linha['cidade_adota'].' - '.$linha['estado_adota'].'</td>';
				echo '<td>'.$linha['telefone_adota'].'</td>';
		?>

			<td><a href="?pagina=detalhes_adota&&id_adota=<?php echo $linha['id_adota']; ?>">Detalhes</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>
<br><br><br><br>