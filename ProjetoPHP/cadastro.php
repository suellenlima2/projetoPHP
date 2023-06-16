<?php

   include_once("conexao.php");

  $nomeDigitado = $_POST["nome"];
  $enderecoDigitado = $_POST["endereco"];
  $nome_paiDigitado = $_POST["nome_pai"];
  $nome_maeDigitado = $_POST["nome_mae"];
  $cpfDigitado = $_POST["cpf"];
  $rgDigitado = $_POST["rg"];
  $data_nascimentoDigitado = $_POST["data_nascimento"];
  $listagem_cursosDigitado = $_POST["listagem_cursos"];
  $experiencia_areaDigitado = $_POST["experiencia_area"];
  $participou_outras_edicoesDigitado = $_POST["participou_outras_edicoes"];
  
  $sql = "INSERT INTO alunos(nome, endereco, nomepai, nomemae, cpf, rg, datanascimento, curso, experiencia, participacao) 
  VALUES('$nomeDigitado', '$enderecoDigitado','$nome_paiDigitado', '$nome_maeDigitado', '$cpfDigitado', $rgDigitado, '$data_nascimentoDigitado', '$listagem_cursosDigitado', '$experiencia_areaDigitado', '$participou_outras_edicoesDigitado')";
 

 if(mysqli_query($conexao, $sql)){
    echo "Aluno cadastrado com sucesso!";
 } else {
    echo "Erro ao cadastrar aluno: ". "<br>" . mysqli_error($conexao);
 }

 mysqli_close($conexao);
?>