<?php
    include('processa/conexao.php');
    session_start();
    $aluno = $_SESSION['aluno'];
    $rm = $_SESSION['rm'];

    //PEGAR DO BANCO
    $query = "select * from ftpuser where userid = '$aluno' and userrm = $rm;";
    $logar = mysqli_query($conexao, $query);
    $campos = mysqli_fetch_array($logar);
 //    if (!$logar)
 //    {
 //    printf("Error: %s\n", mysqli_error($conexao));
 //    exit();
	// }
    $name = $campos['username'];
    $RM = $campos['userrm'];
    $user = $campos['userid'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>InfoWorld</title>
	<link href="img/fav.png" rel="shortcut icon" type="imagem/png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="fontes/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" href="fontes/web-fonts-with-css/css/fontawesome.css">
	<style type="text/css">
		.bg-img
		{
		    position: absolute;
		    left: 0;
		    top: 0;
		    right: 0;
		    bottom: 0;
		    z-index: -1;
		    background-position: center;
		    background-size: cover;
		    background-attachment: fixed;
		}
	</style>
</head>
<body class="bg-img" style="background-image:url('img/background/alps.jpg');">
	<nav id="nav" class="navbar fixed-nav" style="background-color:#FFFFFF;border-radius:0px;padding-bottom:25px;border-bottom:1px solid #e8e9ea">
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-brand">
					<a href="index.php"><img class="logo" src="img/logoB.gif" alt="logo" style="width:180px;height:50px;margin-top:0px;"></a>
				</div>
				<div class="nav-collapse">
					<span></span>
				</div>
			</div>
		</div>
	</nav>
	<p style="height:50px;"></p>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10" style="border:1px solid #FFFFFF;border-radius:6px;background-color:#FFFFFF;box-shadow: 0px 3px 50px 5px #888888;">
				<div class="alert alert-info text-center" style="background-color:#FFFFFF;outline:none;border:1px solid #FFFFFF;margin-top:30px">
					<p style="font-size:30px;height:50px;"><strong>Alterar Dados</strong></p>
				</div>
				<form action="processa/insc.php" method="post" style="margin:30px">
					<div style="margin:15px;">
						<div class="form-group">
							<label>Nome:</label>
							<input type="text" name="nome" id="nome" class="form-control" disabled value="<?php echo $name ?>">
						</div>
						<br>
						<div class="form-group">
							<label>Usuário:</label>
							<input type="text" name="login" id="login" value="<?php echo $user ?>" disabled class="form-control">
						</div>
						<br>
						<div class="form-group">
							<label>RM:</label>
							<input type="text" name="rmaluno" id="rmaluno" value="<?php echo $rm ?>" disabled class="form-control">
						</div>
						<br>
						<div class="form-group">
							<label>Nova Senha:</label>
							<input type="password" name="senha" id="senha" class="form-control">
						</div>
						<br>
						<div class="form-group">
							<label>Confirmar Senha:</label>
							<input type="password" name="confS" id="confS" class="form-control">
						</div>
						<br>
						<div class="form-group">
							<label>Email:</label>
							<input type="email" name="email" id="email" class="form-control">
						</div>
						<br>
						<div class="form-group">
							<label for="pergunta">Pergunta de Confirmação:</label>
							<br>
							<select class="form-control" id="pergunta" name="pergunta">
								<option disabled selected>Escolha uma opção...</option>
								<option disabled></option>
								<option value="animal">Nome do seu animal de estimação</option>
								<option value="professor">Nome do seu primeiro professor</option>
								<option value="rua">Nome da rua em que morou pela primeira vez</option>
								<option value="fruta">Fruta favorita</option>
								<option value="amigo">Nome do seu melhor amigo</option>
							</select>
						</div>
						<br>
						<div class="form-group">
							<label>Resposta:</label>
							<input type="text" name="resposta" id="resposta" class="form-control">
						</div>
						<p style="height:100px;"></p>
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-block" name="enviar" value="Alterar Senha" style="height:50px;font-size:18px;">
								</div>
							</div>
							<div class="col-md-4"></div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>
	<p style="height:100px"></p>
</body>
</html>