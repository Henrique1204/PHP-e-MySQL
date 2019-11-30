<h1>Lista dos cursos</h1>
<a href="?pagina=inserir_curso" class="linkAnimado">Adicionar novo curso</a>
<table>
    <tr>
        <th>Nome do Curso:</th>
        <th>Duração:</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>
    <?php
        while($linha = mysqli_fetch_array($consulta_curso)){
            echo '<tr><td>'.$linha['nome_curso'].'</td>'.'<td>'.$linha['duracao'].'</td>';
        
    ?>
        <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">Editar</a></td>
    <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">Deletar</a></td></tr>
    <?php
        };
    ?>

</table>
