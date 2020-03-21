<?php 

include_once "banco.php";
include_once "usuario.php";

$database = new Database();
$db = $database->getConnection();

$usuarioDAO = new Usuario($db);

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

$res = $usuarioDAO->readOne($usuario);
$num = $res->rowCount();

if (is_null($nome) || is_null($usuario) || is_null($email) || is_null($senha) || is_null($conf_senha)) {
	header('location: index.php?pagina=cadastro&erro_faltando');
}else{
	if ($num > 0) {
		header('location: index.php?pagina=cadastro&erro_usuario');
	}else{
		if ($senha != $conf_senha) {
			header('location:index.php?pagina=cadastro&erro_senha2');
		}else{
			if (strlen($senha) <= 8) {
				header('location: index.php?pagina=cadastro&erro_senha');
			}else{
				if ($usuarioDAO->insert($nome, $usuario, $email, $senha)) {
					header('location:index.php?pagina=login');
				}else{
					echo "falhou";
				}
			}
		}
	}
}	
?>