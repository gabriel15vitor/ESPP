<?php 

include 'db.php';

$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);

$query = "SELECT * FROM USUARIOS WHERE usuario = '$usuario' and senha = '$senha'";

$consulta = mysqli_query($conexao,$query);

if (mysqli_num_rows($consulta) == 1) {
	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;
	header('location:index.php?pagina=home');
} else{
	header('location:views/pg_login.php?erro');
}
?>