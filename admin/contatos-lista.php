<?php

    require_once 'config.inc.php';

    echo "<h2>Contatos</h2>";
?>

<?php
    $sql = "SELECT * FROM contatos";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "<hr>";
            echo "Id: ".$dados['id'];
            echo " | Nome: ".$dados['nome'];
            echo " | Email: ".$dados['email'];
            echo " | Mensagem: ".$dados['mensagem'];
            echo " | <a href='?pg=contatos-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "Nenhum cliente cadastrado!";
    }

    mysqli_close($conexao);

?>