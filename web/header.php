<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/estilo.css">
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>CrusosON</title>
    </head>
    <body>
        <header>
            <a href="?pagina=home"><img src="img/logo.svg" title="Logo" alt="Logo"></a>
            <nav class="menu">
                <ul>
                    <li><a href="?pagina=cursos" class="linkAnimado">Cursos</a></li>
                    <li><a href="?pagina=alunos" class="linkAnimado">Alunos</a></li>
                    <li><a href="?pagina=matriculas" class="linkAnimado">Matrículas</a></li>
                    <?php if(isset($_SESSION['usuario'])) { ?> 
                        <li><a href="logout.php" class="linkAnimado"><?php echo $_SESSION['usuario']; ?> (sair)</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </header>
        <section id="conteudo">
