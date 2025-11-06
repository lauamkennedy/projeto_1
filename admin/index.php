<?php
    echo "<h2>Painel Administrativo</h2>";
?>

<nav>
    <a href="index.php">Início</a>
    <a href="?pg=clientes-admin">Clientes</a>
    <a href="?pg=paginas-admin">Administrar Páginas</a>
    <a href="?pg=contatos-lista">Administrar Contatos</a>
</nav>
<hr>

<?php
    // Verifica se existe o parâmetro pg
    if (!isset($_GET['pg']) || empty($_GET['pg'])) {
        $pagina = "principal.php"; // Página inicial
    } else {
        $pagina = $_GET['pg'] . ".php"; // Adiciona .php automaticamente
    }

    // Verifica se o arquivo existe antes de incluir
    if (file_exists($pagina)) {
        include_once $pagina;
    } else {
        echo "<h3>Página não encontrada!</h3>";
    }
?>
