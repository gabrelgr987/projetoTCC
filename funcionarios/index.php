<?php
	include_once("include/header.php");
?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
<style type="text/css">
	#logErrado
	{
		display:none;
	}
</style>
<body>
	<nav class="navbar navbar-dark bg-dark">
	  	<span class="navbar-brand mb-0 h1">TCC Redes de Computadores - 2018</span>
	  	<span class="navbar-brand mb-0 h1">Biblioteca Informatizada - Versão 1.1.2</span>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div style="border:1px solid #d4d4d6;margin-top:15%; border-radius:4px;background-color:#FFFFFF;">
					<div class="alert alert-success" class="text-center">
			  			<p class="text-center" style="font-size:38px;">
			  				<strong>Área Administrativa</strong>
			  			</p>
					</div>
					<div class="alert alert-danger text-center" id="logErrado">
						Verifique se a Senha e o Login estão corretos.
					</div>
					<form method="post" action="processa/verifica.php">
						<div class="form-group" align="center">
							<label>Login:</label>
							<input type="text" name="login" id="login" class="form-control" style="width:50%">
							<label>Senha:</label>
							<input type="password" name="senha" id="senha" class="form-control" style="width:50%">
						</div>
						<div class="form-group" style="margin-top:60px;">
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<input type="submit" name="Logar no Sistema" value="Logar no Sistema" class="btn btn-block btn-success">
								</div>
								<div class="col-md-4"></div>
							</div>
							
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>