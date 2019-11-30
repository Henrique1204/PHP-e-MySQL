<h1>Alunos matrículados</h1>
<a href="?pagina=inserir_alunos_curso" class="linkAnimado">Nova matrícula</a>
<table>
    <tr>
        <th>Nome do aluno:</th>
        <th>Nome do curso:</th>
        <th>Deletar</th>
    </tr>
    <?php
        while($linha = mysqli_fetch_array($consulta_matricula)){
            echo '<tr><td>'.$linha['nome_aluno'].'</td>'.'<td>'.$linha['nome_curso'].'</td>';
        
    ?>
    <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">Deletar</a></td></tr>
    <?php
        };
    ?>
</table>
