<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'aula_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = 'SELECT * FROM cursos';
$consulta_curso = mysqli_query($conexao,$query);

$query = 'SELECT * FROM alunos';
$consulta_aluno = mysqli_query($conexao,$query);

$consulta_matricula = mysqli_query($conexao,'SELECT alunos_curso.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso FROM alunos, cursos, alunos_curso WHERE alunos_curso.id_aluno = alunos.id_aluno AND alunos_curso.id_curso = cursos.id_curso'); 
