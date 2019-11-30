<h1>Escolha as informações</h1>
<form method="post" action="inserir_dados_alunos_curso.php">
    <label for="nome_aluno">Aluno:</label>
    <select name="nome_aluno">
        <option value="0">Selecione:</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_aluno)){
                echo "<option value='".$linha['id_aluno']."'>".$linha['nome_aluno']."</option>";
            };
        ?>
    </select>
    <label for="nome_curso">Curso:</label>
    <select name="nome_curso">
        <option value="0">Selecione:</option>
        <?php
        while($linha = mysqli_fetch_array($consulta_curso)){
            echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
        };
        ?>
    </select>
    <button type="submit">Confirmar matrícula</button>
</form>
