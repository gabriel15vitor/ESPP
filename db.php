<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "espp";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM ADOTA";
$consulta_adota = mysqli_query($conexao, $query);

$query = "SELECT * FROM PERDI";
$consulta_perdi = mysqli_query($conexao, $query);

$query = "SELECT * FROM ENCONTREI";
$consulta_encontrei = mysqli_query($conexao, $query);

$query = "SELECT * FROM USUARIOS";
$consulta_usuarios = mysqli_query($conexao, $query);

$query = "SELECT alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso 
			FROM alunos, cursos, alunos_cursos
			WHERE alunos_cursos.id_aluno = alunos.id_aluno
			AND alunos_cursos.id_curso = cursos.id_curso";			
$consulta_matriculas = mysqli_query($conexao, $query);