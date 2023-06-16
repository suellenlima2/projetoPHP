<?php 
include("conexao.php"); 

$sql = "SELECT * FROM alunos"; // Substitua 'tabela_alunos' pelo nome da sua tabela no banco de dados

$resultado = mysqli_query($conexao, $sql);

?> 

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Listagem</title>
    <link rel="stylesheet" href="StyleListagem.css">
  </head>
  <body>
    <div class="container">
      <h1>ALUNOS CADASTRADOS</h1>
      <table class="table">
        <thead>
          <tr>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>NOME DO PAI</th>
            <th>NOME DA MÃE</th>
            <th>RG</th>
            <th>CPF</th>
            <th>DATA DE NASCIMENTO</th>
          </tr>
        </thead>

        <?php while($dado = mysqli_fetch_array($resultado)) { ?> 
         
       	<tbody>

             	<tr> 
             	   	<td><?php echo $dado['nome']; ?></td>
                	<td><?php echo $dado['endereco']; ?></td>
                  <td><?php echo $dado['nomepai']; ?></td>  
                  <td><?php echo $dado['nomemae']; ?></td> 
                  <td><?php echo $dado['cpf']; ?></td>
                  <td><?php echo $dado['rg']; ?></td>
                  <td><?php echo $dado['datanascimento']; ?></td>
             	</tr> 
        <?php } ?> 
        
      </table>

      <a href="javascript:history.go(-1);" class="btn-voltar">Voltar</a>
    </div>

  </body>
</html>
