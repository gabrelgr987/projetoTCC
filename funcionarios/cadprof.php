<?php
	include_once("include/header.php");
	include('processa/conexao.php');
	session_start();
	if(isset($_SESSION['logado']) && isset($_SESSION['usuario']))
	{
		$logado = $_SESSION['logado'];
		$login = $_SESSION['usuario'];
		if($logado == 1)
		{
			$sql = "SELECT * FROM ftpuser WHERE uid = 1004";
			$resul = mysqli_query($conexao, $sql);
			$dados = mysqli_fetch_array($resul);
			date_default_timezone_set('America/Sao_Paulo');
			$hora = date("H");
			if($hora >=6 && $hora <=12)
			{
				$resp = "Bom Dia ";
			}
			else if($hora >12 && $hora <=18)
			{
				$resp = "Boa Tarde ";
			}
			else if($hora >18 && $hora <=24)
			{
				$resp = "Boa Noite ";
			}
			else
			{
				$resp = "Boa Madrugada ";
			}
?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/estilo3.css">
<link rel="stylesheet" href="../fontes/web-fonts-with-css/css/fontawesome-all.css">
<link rel="stylesheet" href="../fontes/web-fonts-with-css/css/fontawesome.css">
<style type="text/css">
	input[type=number]::-webkit-inner-spin-button, 
	input[type=number]::-webkit-outer-spin-button
	{ 
	  -webkit-appearance: none; 
	  margin: 0;
	}
</style>
<style type="text/css">
	.menuV a:hover
	{
    	background-color: #d1ecf1;
    	color: black;
	}
	.menuV a.active
	{
    	background-color: #d1ecf1;
    	color: black;
	}
	.menuV a
	{
		color: white;
	}
	.menuV
	{
		min-height:900px;
		border-top:2px solid #d1ecf1;
	}
</style>
<body>
	<nav class="navbar navbar-dark bg-dark">
	  	<span class="navbar-brand mb-0 h1">TCC Redes de Computadores - 2018</span>
	  	<span class="navbar-brand mb-0 h1">Biblioteca Informatizada</span>
	  	<span class="navbar-brand mb-0 h1"><i class="fas fa-user"></i> <?php echo $resp . $login;?></span>
	  	<span class="navbar-brand mb-0 h1"><a href="processa/prof.php" style="color:#FFFFFF"><i class="fas fa-sign-out-alt"></i>Sair</a></span>
	</nav>
	<div class="row">
		<div class="col-md-2">
			<div class="nav flex-column bg-dark menuV">
			  	<a class="nav-link" style="margin-top:30px;" href="cadastrar.php">Professores Cadastrados</a>
			  	<a class="nav-link active" href="cadprof.php">Cadastrar Professores</a>
			  	<a class="nav-link" href="cadcoor.php">Cadastrar Coordernadores</a>
			  	<a class="nav-link" href="cadalu.php">Alunos Cadastrados</a>
			  	<a class="nav-link" href="exclusao.php">Exclusão de Registros</a>
			</div>
		</div>
		<div class="col-md-10">
			<div class="container">
				<p style="height:40px;"></p>
				<div class="alert alert-info text-center">
					<strong style="font-size:24px;">Cadastro de Professor</strong>
				</div>
				<p style="height:30px;"></p>
				<form action="processa/gravar.php" method="post">
					<div class="form-group">
						<label for="professor">Nome do Professor:</label>
						<input type="text" name="professor" id="professor" class="form-control">
					</div>
					<div class="form-group">
						<label for="apelido">Usuário:</label>
						<input type="text" name="apelido" id="apelido" class="form-control">
					</div>
					<div class="form-group">
						<label for="rmProf">RM:</label>
						<input type="number" name="rmProf" id="rmProf" class="form-control">
					</div>
					<div class="form-group">
						<label for="emailPro">Email:</label>
						<input type="email" name="emailPro" id="emailPro" class="form-control">
					</div>
					<div id="curso">
						<div class="form-group">
							<label for="selCurso">Curso:</label>
							<select name="selCurso" id="selCurso" class="form-control" onchange="TrocarCurso();">
								<option value="" disabled selected>Selecione um Curso</option>
								<option value="" disabled></option>
								<option value="TLM">Técnico em Logística - Manhã</option>
								<option value="TRT">Técnico em Redes de Computadores - Tarde</option>
								<option value="TCT">Técnico em Contabilidade - Tarde</option>
								<option value="TDSN">Técnico em Desenvolvimento de Sistemas - Noite</option>
								<option value="TAN">Técnico em Administração - Noite</option>
								<option value="TEN">Técnico em Eletroeletrônica - Noite</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="submit" name="enviar" value="Realizar Cadastro" class="btn btn-block btn-primary" style="cursor:pointer;margin-top:90px;height:50px;font-size:18px;">
							</div>
						</div>
						<div class="col-md-3">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
		}
	}
	else
	{
		header("location:index.php");
	}
?>