<?php

include 'db.php';

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$duracao = $_POST['duracao'];

$query = "UPDATE cursos SET nome_curso = '$nome_curso', duracao = '$duracao' WHERE id_curso = $id_curso";

mysqli_query($conexao,$query);

header('location:index.php?pagina=cursos');
