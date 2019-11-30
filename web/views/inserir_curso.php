<?php if(!isset($_GET['editar'])) { ?>
<h1>Insira o curos</h1>
<form method="post" action="inserir_dados_curso.php">
    <label for="nome_curso">Nome do Curso:</label>
    <input type="text" name="nome_curso" placeholder="Insira o nome do curso">
    <label for="duracao">Duração do curso:</label>
    <input type="text" name="duracao" placeholder="Insira a quantidade de horas">
    <button type="submit">Inserir curso</button>
</form>
<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_curso)){ ?>
        <?php if($linha['id_curso'] == $_GET['editar']){ ?>
            <h1>Editar dados do curso</h1>
            <form method="post" action="editar_curso.php">
                <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
                <label for="nome_curso">Nome do aluno:</label>
                <input type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php  echo $linha['nome_curso']; ?>">
                <label for="duracao">Duração:</label>
                <input type="text" name="duracao" placeholder="Insira a duração do curso" value="<?php  echo $linha['duracao']; ?>">
                <button type="submit">Editar dados</button>
            </form>
        <?php }; ?>
    <?php }; ?>
<?php }; ?>