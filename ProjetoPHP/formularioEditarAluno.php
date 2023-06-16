<!DOCTYPE html>
<html>
<head>
	<title>Editar Aluno</title>
	<link rel="stylesheet" href="StyleEdicao.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container">
	<div class="row">
		<h2>EDITAR DADOS ALUNO</h2>
		<form class="form-horizontal" method="get" action="">
			<div class="form-group">
				<label class="control-label col-sm-2" for="id">Digite o ID do aluno que deseja alterar os dados:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="id" name="id" placeholder="Digite o ID do aluno">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Buscar</button>
					<a href="javascript:history.go(-1);" class="btn-voltar">Voltar</a>
				</div>
			</div>
		</form>
	</div>
</div>

<?php
	require_once('conexao.php');

	if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
		$id = $_GET['id'];

		$sql = "SELECT * FROM alunos WHERE id = '$id'";
		$resultado = mysqli_query($conexao, $sql);

		if(mysqli_num_rows($resultado) == 1){
			$dados_aluno = mysqli_fetch_array($resultado);

			echo '
			<div class="container">
				<div class="row">
					<h2>Editar Aluno</h2>
					<form class="form-horizontal" method="post" action="">
						<input type="hidden" name="id" value="' . $dados_aluno['id'] . '">
						<div class="form-group">
							<label class="control-label col-sm-2" for="nome">Nome:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do aluno" value="' . $dados_aluno['nome'] . '">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="endereco">Endereço:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço do aluno" value="' . $dados_aluno['endereco'] . '">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="nomepai">Nome do Pai:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nomepai" name="nomepai" placeholder="Digite o nome do pai do aluno" value="' . $dados_aluno['nomepai'] . '">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="nomemae">Nome da Mãe:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nomemae" name="nomemae" placeholder="Digite o nome da mãe do aluno" value="' . $dados_aluno['nomemae'] . '">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="cpf">CPF:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF do aluno" value="' . $dados_aluno['cpf'] . '">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="rg">RG:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="rg" name="rg" placeholder="Digite o RG do aluno" value="' . $dados_aluno['rg'] . '">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="datanascimento">Data de Nascimento:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="datanascimento" name="datanascimento" placeholder="Digite a data de nascimento do aluno" value="' . $dados_aluno['datanascimento'] . '">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
								<a href="telaListagemAlunos.php" class="btn btn-default">Cancelar</a>
							</div>
						</div>
					</form>
				</div>
			</div>';
		} else {
			echo "Aluno não encontrado!";
		}
	} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['salvar'])) {

		$id = $_POST['id'];
		$novo_nome = $_POST['nome'];
		$novo_endereco = $_POST['endereco'];
		$novo_pai = $_POST['nomepai'];
		$nova_mae = $_POST['nomemae'];
		$novo_cpf = $_POST['cpf'];
		$novo_rg = $_POST['rg'];
		$nova_data_nascimento = $_POST['datanascimento'];

		$sql_update = "UPDATE alunos SET nome='$novo_nome', endereco='$novo_endereco', nomepai='$novo_pai', nomemae='$nova_mae', cpf='$novo_cpf', rg='$novo_rg', datanascimento='$nova_data_nascimento' WHERE id=$id";
		mysqli_query($conexao, $sql_update);

		echo "<script>window.location='telaListagemAlunos.php';</script>";
	}
?>
</body>
</html>