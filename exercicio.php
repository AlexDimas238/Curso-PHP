<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Sacramento&display=swap">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem Formatação</a>
        <a href="index.php" class="vermelha">Voltar</a>
    </nav>
    <main class="principal">
        <DIV class="conteudo">
            <?php 
                // INCLUDE("teste/teste.php");
                // include($_GET['dir'] . "/teste.php");
                // include("{$_GET['dir']}/{$_GET['file']}.php");
               include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </DIV>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS ₢ <?= date('Y'); ?>
    </footer>
</body>
</html>