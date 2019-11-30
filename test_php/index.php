<?php

#conecntando ao servidor ****************************************************************************

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'aulas_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

/*
#criando tabelas ****************************************************************************

#Tabela cursos(nome, duração) ****************************************************************************

$query = "CREATE TABLE cursos( id_curso int not null auto_increment, nome varchar(255) not null, duracao varchar(20) not null, primary key(id_curso))";

$executar = mysqli_query($conexao, $query);

#Tabela alunos(nome, data de nascimento) ****************************************************************************

$query = "CREATE TABLE alunos( id_aluno int not null auto_increment, nome varchar(255) not null, data_nascimento date not null, primary key(id_aluno))";

$executar = mysqli_query($conexao, $query);

#Tabela alunos_cursos ****************************************************************************

$query = "CREATE TABLE alunos_curso( id_aluno_curso int not null auto_increment, id_aluno int not null, id_curso int not null, primary key(id_aluno_curso))";

$executar = mysqli_query($conexao, $query);

#inserir dados na tabela alunos ****************************************************************************

$query = "INSERT INTO alunos(nome, data_nascimento) VALUES ('Maria', '1991-01-01')";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo 'Deu bom (insert alunos)';
}
else{
    echo 'Deu ruim(insert alunos)';
}

#inserir dado na tabela cursos ****************************************************************************

$query = "INSERT INTO cursos(nome,duracao) VALUES ('PHP', '8 horas')";

$executar = mysqli_query($conexao,$query);
if($executar){
    echo 'Deu bom (insert cursos)';
}
else{
    echo 'Deu ruim(insert cursos)';
}

#inserir dado na tabela alunos_cursos ****************************************************************************

$query = "INSERT INTO alunos_curso(id_aluno, id_curso) VALUES (8,1)";

$executar = mysqli_query($conexao,$query);
if($executar){
    echo 'Deu bom (insert alunos_cursos)';
}
else{
    echo 'Deu ruim (insert alunos_cursos)';
}

#Deletando dados de alunos ****************************************************************************

if(mysqli_query($conexao, "DELETE FROM cursos WHERE id = 2")){
    echo 'Deu bom apgando maria';
}
else{
    echo 'deu ruim meu patrão';
}

#Alterar dados de tabelas ****************************************************************************

if(mysqli_query($conexao, "UPDATE alunos SET nome = 'Jose Miguel' WHERE id_aluno = 1")){
    echo 'Deu certo pro Jose';
}else{
    echo 'Jose caiu';
}

if(mysqli_query($conexao,"UPDATE alunos SET nome = 'Maria Silva' WHERe id_aluno = 8")){
    echo 'Deu bom pra Maria';
}else{
    echo 'Deu ruim pra Maria';
}

mysqli_query($conexao, "ALTER TABLE cursos CHANGE id id_curso INT NOT NULL AUTO_INCREMENT");

echo 
'<table>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>DATA NASCIMENTO</th>
    </tr>';

$consulta = mysqli_query($conexao, "SELECT * FROM alunos");

while($linha = mysqli_fetch_array($consulta)){
    echo '<tr>'.'<td>'.$linha['id_aluno'].'</td>'.'<td>'.$linha['nome'].'</td>'.'<td>'.$linha['data_nascimento'].'</td>'.'</tr>';
}

echo '</table>';


*/

$consulta = mysqli_query($conexao, "SELECT alunos.nome, cursos.nome FROM alunos, cursos WHERE alunos_cursos.id_aluno = alunos.id_aluno AND alunos_cursos.id_curso = cursos.id_curso");

echo '<table><tr><th>NOME DO ALUNO</th><th>CURSO</th></tr>';

while($linha = mysqli_fetch_array($consulta)){
    echo '<tr>'.'<td>'.$linha['alunos.nome'].'</td>'.'<td>'.$linha['cursos.nome'].'</td>'.'</tr>';
}

echo '</table>';