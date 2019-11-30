<h1>Lista de alunos</h1>
<a href="?pagina=inserir_aluno" class="linkAnimado">Adicionar novo aluno</a>
<table>
    <tr>
        <th>Nome do aluno:</th>
        <th>Data de nascimento:</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>
    <?php
        while($linha = mysqli_fetch_array($consulta_aluno)){
            echo '<tr><td>'.$linha['nome_aluno'].'</td>'.'<td>'.$linha['data_nascimento'].'</td>';
    ?>
    <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">Editar</a></td>
    <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">Deletar</a></td></tr>
    <?php
        };
    ?>
</table>
