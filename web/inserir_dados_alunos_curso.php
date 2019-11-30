<?php

include 'db.php';
$id_aluno = $_POST['nome_aluno'];
$id_curso = $_POST['nome_curso'];

$query = "INSERT INTO alunos_curso(id_aluno,id_curso) VALUES ('$id_aluno', '$id_curso')";

mysqli_query($conexao,$query);

header('location:index.php?pagina=matriculas');
