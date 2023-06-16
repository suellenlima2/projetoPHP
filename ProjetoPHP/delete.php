<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    include_once 'conexao.php';

    $sql = "DELETE FROM alunos WHERE id = $id";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro de aluno deletado com sucesso!";
    } else {
        echo "Erro ao deletar o cadastro do aluno: " . $conn->error;
    }

    $conexao->close();

    echo "<script>window.location='telaListagemAlunos.php';</script>";
}
?>