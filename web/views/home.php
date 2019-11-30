<h1>Bem vindo ao <span class="spanBranco">Cursos</span><span class="spanVerde">ON</span></h1>
<form method="post" action="login.php">
    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" placeholder="nome do usuário">
    <label for="senha">Senha:</label>
    <input type="password" name="senha">
    <button type="submit">Entrar</button>
</form>
<?php if(isset($_GET['erro'])){ ?>
    <div class="msgErro">
        <p>Usuário e/ou senha errados</p>
    </div>
<?php } ?>
