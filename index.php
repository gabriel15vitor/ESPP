<?php
#Iniciar sessão
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
#if (isset($_SESSION['login'])) {
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'home';
	}
/*}else{
	$pagina = 'home';
}*/

switch($pagina){
	case 'perdi': include 'views/perdi.php'; break;
	case 'encontrei': include 'views/encontrei.php'; break;
	case 'adota': include 'views/adota.php'; break;
	case 'matriculas': include 'views/matriculas.php'; break;
	case 'inserir_encontrei': include 'views/inserir_encontrei.php'; break;
	case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
	case 'inserir_perdi': include 'views/inserir_perdi.php'; break;
	case 'inserir_adota': include 'views/inserir_adota.php'; break;
	case 'detalhes_adota': include 'views/detalhes_adota.php'; break;
	case 'detalhes_encontrei': include 'views/detalhes_encontrei.php'; break;
	case 'detalhes_perdi': include 'views/detalhes_perdi.php'; break;
	default: include 'views/home.php'; break;
}

# Rodapé
include 'footer.php';
