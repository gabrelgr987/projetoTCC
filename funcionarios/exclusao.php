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
	#professor
	{
		display:none;
	}
	#aluno
	{
		display:none;
	}
	#envio
	{
		display:none;
	}
</style>
<body>
	<nav class="navbar navbar-dark bg-dark">
	  	<span class="navbar-brand mb-0 h1">TCC Redes de Computadores - 2018</span>
	  	<span class="navbar-brand mb-0 h1">Biblioteca Informatizada</span>
	  	<span class="navbar-brand mb-0 h1"><i class="fas fa-user"></i> <?php echo $resp . $login;?></span>
	  	<span class="navbar-brand mb-0 h1"><a href="processa/sair.php" style="color:#FFFFFF"><i class="fas fa-sign-out-alt"></i>Sair</a></span>
	</nav>
	<div class="row">
		<div class="col-md-2">
			<div class="nav flex-column bg-dark menuV" style="color:#FFF">
			  	<a class="nav-link" style="margin-top:30px;" href="cadastrar.php">Professores Cadastrados</a>
			  	<a class="nav-link" href="cadprof.php">Cadastrar Professores</a>
			  	<a class="nav-link" href="cadcoor.php">Cadastrar Coordernadores</a>
			  	<a class="nav-link" href="cadalu.php">Alunos Cadastrados</a>
			  	<a class="nav-link active" href="exclusao.php">Exclusão de Registros</a>
			</div>
		</div>
		<div class="col-md-10">
			<div class="container">
				<p style="height:40px;"></p>
				<div class="alert alert-danger text-center">
					<strong style="font-size:24px;">Exclusão de Registros</strong>
				</div>
				<p style="height:30px;"></p>
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<button onclick="aparecer()" name="enviar" class="btn btn-block btn-primary" style="cursor:pointer;height:50px;font-size:18px;">
								Professores
							</button>
						</div>
					</div>
					<div class="col-md-2">
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<button onclick="aparecer2()" name="enviar" class="btn btn-block btn-primary" style="cursor:pointer;height:50px;font-size:18px;">
								Alunos
							</button>
						</div>
					</div>
				</div>
				<form action="processa/excluir.php" method="post">
					<div id="aluno">
						<div class="row">
							<div class="col-md-5">
								<p style="height:30px;"></p>
								<div class="form-group">
									<label for="curso">RM do Aluno:</label>
									<br>
									<br>
									<input type="number" class="form-control" name="rmA" id="rmA">
									<p style="font-size:12px;margin-left:10px;">* exclusão por aluno, baseando no RM do mesmo</p>
								</div>
							</div>
							<div class="col-md-2">
							</div>
							<div class="col-md-5">
								<p style="height:30px;"></p>
								<div class="form-group">
									<label for="curso">Curso:</label>
									<br>
									<br>
									<select name="curso" id="curso" class="form-control">
										<option value="" disabled selected>Selecione um Curso</option>
										<option value="" disabled></option>
										<option value="3TRT">3º TRT - Técnico em Redes de Computadores</option>
										<option value="3TCT">3º TCT - Técnico em Contabilidade</option>
										<option value="3TLT">3º TCT - Técnico em Logística</option>
										<!-- <option value="3TDN">3º TDN - Técnico em Desenvolvimento de Sistemas</option> -->
									</select>
									<p style="font-size:12px;margin-left:10px;">* exclusão para turmas que estão finalizando o curso</p>
								</div>
							</div>
						</div>
					</div>
					<div id="professor">
						<div class="row">
							<div class="col-md-5">
								<p style="height:30px;"></p>
								<div class="form-group">
									<label for="curso">RM do Professor:</label>
									<br>
									<br>
									<input type="number" class="form-control" name="rmP" id="rmP">
									<p style="font-size:12px;margin-left:10px;">* exclusão por professor, baseando no RM do mesmo</p>
								</div>
							</div>
							<div class="col-md-2">
							</div>
							<div class="col-md-5">
								<p style="height:30px;"></p>
								<div class="form-group">
									<label for="curso">Excluir Todos os Professores:</label>
									<br>
									<br>
									<input type="checkbox" name="exc" id="exc" style="width:25px;height:25px;">
									<p style="font-size:12px;">* exclusão de todos os professores</p>
								</div>
							</div>
						</div>
					</div>
					<p style="height:60px;"></p>
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="submit" name="envio" id="envio" value="Excluir" class="btn btn-danger btn-block" style="height:45px;">
							</div>
						</div>
						<div class="col-md-3">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function aparecer()
		{
			document.getElementById('professor').style.display = "block";
			document.getElementById('aluno').style.display = "none";
			document.getElementById('envio').style.display = "block";	
		}
		function aparecer2()
		{
			document.getElementById('aluno').style.display = "block";
			document.getElementById('professor').style.display = "none";
			document.getElementById('envio').style.display = "block";
		}
	</script>
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