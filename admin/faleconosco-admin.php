<?php
include 'config.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO contatos (email, nome, mensagem) VALUES ('$email', '$nome', '$mensagem')";

    if (mysqli_query($conexao, $sql)) {
        echo "<h2>Mensagem enviada com sucesso!</h2>";
    } else {
        echo "<h2>Erro ao enviar mensagem: " . mysqli_error($conexao) . "</h2>";
    }

    mysqli_close($conexao);
} else {
    echo "<p>Envie o formulário corretamente.</p>";
}
?>
