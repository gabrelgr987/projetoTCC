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
			$sql = "SELECT * FROM ftpuser WHERE uid = 1005";
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
	.margi
	{
		margin-top:15px;
		margin-bottom:15px;
	}
	.userid
	{
		width:78px;
		border:1px solid #dbdcdd;
	}
	.userprof
	{
		width:452px;
		border:1px solid #dbdcdd;
	}
	.userrm
	{
		width:128px;
		border:1px solid #dbdcdd;
	}
	.useremail
	{
		width:452px;
		border:1px solid #dbdcdd;
	}
	.princ
	{
		border:1px solid #000000;
		border-radius:4px;
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
	  	<span class="navbar-brand mb-0 h1"><a href="processa/sair.php" style="color:#FFFFFF"><i class="fas fa-sign-out-alt"></i>Sair</a></span>
	</nav>
	<div class="row">
		<div class="col-md-2">
			<div class="nav flex-column bg-dark menuV" style="min-height:12000px;">
			  	<a class="nav-link" style="margin-top:30px;" href="cadastrar.php">Professores Cadastrados</a>
			  	<a class="nav-link" href="cadprof.php">Cadastrar Professores</a>
			  	<a class="nav-link" href="cadcoor.php">Cadastrar Coordernadores</a>
			  	<a class="nav-link active" href="cadalu.php">Alunos Cadastrados</a>
			  	<a class="nav-link" href="exclusao.php">Exclusão de Registros</a>
			</div>
		</div>
		<div class="col-md-10">
			<div class="container">
				<p style="height:40px;"></p>
				<div class="alert alert-info text-center">
					<strong style="font-size:24px;">Alunos Cadastrados</strong>
				</div>
				<br>
				<br>
				<table style="width:1110px;border:1px solid #dbdcdd;" id="tabela" class="text-center">
					<tr style="font-size:18px;height:60px;">
						<td class="userid princ">ID</td>
						<td class="userrm princ">RM</td>
						<td class="userprof princ">Professor</td>
						<td class="useremail princ">Email</td>
					</tr>
					<tr style="font-size:14px;height:40px;" class="princ">
						<td class="userid"><?php echo $dados['id']; ?></td>
						<td class="userrm"><?php echo $dados['userrm']; ?></td>
						<td class="userprof"><?php echo $dados['username']; ?></td>
						<td class="useremail"><?php echo $dados['useremail']; ?></td>
					</tr>
					<?php
					    while($dados = mysqli_fetch_array($resul))
						{
					?>
					<tr style="font-size:14px;height:40px;" class="princ">
						<td class="userid"><?php echo $dados['id']; ?></td>
						<td class="userrm"><?php echo $dados['userrm']; ?></td>
						<td class="userprof"><?php echo $dados['username']; ?></td>
						<td class="useremail"><?php echo $dados['useremail']; ?></td>
					</tr>
					<?php
						}
					?>
				</table>
				<p style="height:400px;"></p>
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