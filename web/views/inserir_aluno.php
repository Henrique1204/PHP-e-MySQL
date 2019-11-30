<?php if(!isset($_GET['editar'])) { ?>
<h1>Insira o aluno</h1>
<form method="post" action="inserir_dados_aluno.php">
    <label for="nome_aluno">Nome do aluno:</label>
    <input type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
    <label for="data_nascimento">Data de nascimento:</label>
    <input type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
    <button type="submit">Inserir aluno</button>
</form>
<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_aluno)){ ?>
        <?php if($linha['id_aluno'] == $_GET['editar']){ ?>
            <h1>Editar dados do aluno</h1>
            <form method="post" action="editar_aluno.php">
                <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
                <label for="nome_aluno">Nome do aluno:</label>
                <input type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php  echo $linha['nome_aluno']; ?>">
                <label for="data_nascimento">Data de nascimento:</label>
                <input type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php  echo $linha['data_nascimento']; ?>">
                <button type="submit">Editar dados</button>
            </form>
        <?php }; ?>
    <?php }; ?>
<?php }; ?>
