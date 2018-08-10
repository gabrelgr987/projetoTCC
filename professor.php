<!DOCTYPE html>
<html>
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
		#trocar
		{
			display:none;
		}
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button
		{ 
		  -webkit-appearance: none; 
		  margin: 0;
		}
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
<body class="bg-img" style="background-image:url('img/background/fuji.jpg')">
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
	<div class="container">
		<p style="height:50px;"></p>
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10" style="border:1px solid #FFFFFF;border-radius:6px;background-color:#FFFFFF;box-shadow: 0px 3px 50px 5px #888888;">
				<div class="alert alert-info text-center" style="background-color:#FFFFFF;outline:none;border:1px solid #FFFFFF;margin-top:30px">
					<p style="font-size:30px;height:50px;border-bottom:1px solid #bcbcbc"><strong>Área dos Professores</strong></p>
				</div>
				<div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-4">
						<a style="text-decoration:none;" href="ftp://192.168.0.110">
							<button class="btn btn-warning btn btn-block" id="btn2" style="height:50px;font-size:20px;margin-top:10px;margin-bottom:50px;">
								Acessar o Servidor Web
							</button>
						</a>
					</div>
					<div class="col-md-4">
						<a style="text-decoration:none;" href="#">
							<button onclick="aparecer()" class="btn btn-info btn-block" style="height:50px;font-size:20px;margin-top:10px;margin-bottom:50px;">
							Trocar Senha
							</button>
						</a>
					</div>
					<div class="col-md-2">
					</div>
				</div>
				<div id="trocar">
					<form style="margin:30px" method="post" action="processa/professor.php">
						<div class="form-group" style="border-bottom:1px solid #bcbcbc">
							<input type="text" name="login" id="login" class="ent" placeholder="Login" onfocus="myFunction(this.id)">
						</div>
						<p style="height:60px;"></p>
						<div class="form-group" style="border-bottom:1px solid #bcbcbc">
							<input type="number" id="rm" name="rm" class="ent" placeholder="RM" onfocus="myFunction(this.id)">
						</div>
						<div class="form-group" style="border-bottom:#FFFFFF solid 1px">
							<input type="" name="" class="ent" disabled>
						</div>
						<div class="form-group" style="border-bottom:1px solid #bcbcbc">
							<input type="password" name="passwd" id="passwd" class="ent" placeholder="Antiga Senha" onfocus="myFunction(this.id)">
						</div>
						<p style="height:60px;"></p>
						<div class="form-group" style="border-bottom:1px solid #bcbcbc">
							<input type="password" name="newpasswd" id="newpasswd" class="ent" placeholder="Nova Senha" onfocus="myFunction(this.id)">
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
					</form>
				</div>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>
	<p style="height:100px"></p>
	<p style="height:400px;" id="esp"></p>
</body>
</html>
<script type="text/javascript">
	function aparecer()
	{
		document.getElementById('trocar').style.display = "block";	
		document.getElementById('esp').style.display = "none";	
	}
	function myFunction(x)
	{
	    document.getElementById(x).style.borderBottom = "2px solid #0061ff";
	    document.getElementById(x).style.width = "100%";
	}
</script>