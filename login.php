<?php 

include_once "banco.php";
include_once "usuario.php";

$database = new Database();
$db = $database->getConnection();

$usuarioDAO = new Usuario($db);

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if (is_null($usuario) || is_null($senha)) {
	header('location:index.php?pagina=login&erro&null');
}else{
	$res = $usuarioDAO->login($usuario, $senha);
	$num = $res->rowCount();
	if ($num > 0) {
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['usuario'] = $usuario;
		header('location:index.php?pagina=home');
	}else{
		$_SESSION['value_usuario'] = $usuario;
		header('location:index.php?pagina=login&erro');
	}
}
/*
$query = "SELECT * FROM USUARIOS WHERE usuario = '$usuario' and senha = '$senha'";

$consulta = mysqli_query($conexao,$query);

if (mysqli_num_rows($consulta) == 1) {
	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;
	header('location:index.php?pagina=home');
} else{
}
*/
?>