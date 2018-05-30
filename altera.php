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
		.ent
		{
			font-size:18px;
			border:none;
			outline:none;
		    width:110px;
		    height:40px;
		    color:#000000;
		    background-color:#FFFFFF;
		    transition: width 2s;
		    -webkit-transition: width 2s;
		}
		input:focus
		{
			width:100%;
		}
	</style>
</head>
<body class="bg-img" style="background-image:url('img/background/mao1.png');">
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
					<p style="font-size:30px;height:50px;"><strong>Altere a sua Senha</strong></p>
				</div>
				<form action="processa/aluno.php" method="post" style="margin:30px">
					<div style="margin:15px;">
						<div class="form-group" style="border-bottom:#bcbcbc solid 1px">
							<input type="text" name="login" id="login" class="ent" onfocus="myFunction(this.id)" placeholder="Login">
						</div>
						<div class="form-group" style="border-bottom:#FFFFFF solid 1px">
							<input type="" name="" class="ent" disabled>
						</div>
						<br>
						<div class="form-group" style="border-bottom:#bcbcbc solid 1px">
							<input type="password" name="senha" id="senha" placeholder="Antiga Senha" class="ent" onfocus="myFunction(this.id)">
						</div>
						<p style="height:60px;"></p>
						<div class="form-group" style="border-bottom:1px #bcbcbc solid;">
							<input type="password" name="novasenha" id="novasenha" class="ent" onfocus="myFunction(this.id)" placeholder="Nova Senha">
						</div>
						<p style="height:60px;"></p>
						<div class="form-group">
							<label for="pergunta" style="font-size:18px;color:#7f7f7f">Pergunta de Confirmação:</label>
							<br>
							<select class="form-control" id="pergunta" name="pergunta" style="font-size:16px;">
								<option disabled selected>Escolha uma opção...</option>
								<option disabled></option>
								<option value="animal">Nome do seu animal de estimação</option>
								<option value="professor">Nome do seu primeiro professor</option>
								<option value="rua">Nome da rua em que morou pela primeira vez</option>
								<option value="fruta">Fruta favorita</option>
								<option value="amigo">Nome do seu melhor amigo</option>
							</select>
						</div>
						<p style="height:60px;"></p>
						<div class="form-group" style="border-bottom:1px #bcbcbc solid;">
							<input type="text" name="resposta" id="resposta" class="ent" onfocus="myFunction(this.id)" placeholder="Resposta">
						</div>
						<p style="height:100px;"></p>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-block" name="enviar" value="Alterar Senha" style="height:50px;font-size:18px;">
								</div>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>
	<p style="height:100px"></p>
	<script>
		function myFunction(x)
		{
		    document.getElementById(x).style.borderBottom = "2px solid #0061ff";
		    document.getElementById(x).style.width = "100%";
		}
	</script>
</body>
</html>