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
			$sql = "SELECT * FROM ftpuser WHERE uid = 1007";
			$resul = mysqli_query($conexao, $sql);
			$dados = mysqli_fetch_array($resul);
 	  		
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
	.margiR
	{
		border:#dbdcdd 1px solid;
	}
	.userid
	{
		width:72px;
	}
	.userprof
	{
		width:252px;
	}
	.userrm
	{
		width:122px;
	}
	.useremail
	{
		width:252px;
	}
	.userdir
	{
		width:412px;
	}
	.princ
	{
		border:1px solid #dbdcdd;
		border-radius:4px;
	}
</style>
<body>
	<nav class="navbar navbar-dark bg-dark">
	  	<span class="navbar-brand mb-0 h1">TCC Redes de Computadores - 2018</span>
	  	<span class="navbar-brand mb-0 h1">Biblioteca Informatizada</span>
	  	<span class="navbar-brand mb-0 h1"><i class="fas fa-user"></i> <?php echo $login;?></span>
	  	<span class="navbar-brand mb-0 h1"><a href="processa/sair.php" style="color:#FFFFFF"><i class="fas fa-sign-out-alt"></i>Sair</a></span>
	</nav>
	<p style="height:40px;"></p>
	<div class="container">
		<div class="alert alert-info text-center">
			<strong style="font-size:24px;">Cadastro de Professores</strong>
		</div>
		<br>
		<br>
		<table style="width:1110px;border:1px solid #dbdcdd;" id="tabela" class="text-center">
			<tr style="font-size:18px;height:60px;">
				<td class="userid princ">ID</td>
				<td class="userrm princ">RM</td>
				<td class="userprof princ">Professor</td>
				<td class="useremail princ">Email</td>
				<td class="userdir princ">Diretório</td>
			</tr>
			<tr style="font-size:14px;height:40px;" class="princ">
				<td class="userid"><?php echo $dados['id']; ?></td>
				<td class="userrm"><?php echo $dados['userrm']; ?></td>
				<td class="userprof"><?php echo $dados['username']; ?></td>
				<td class="useremail"><?php echo $dados['useremail']; ?></td>
				<td class="userdir"><?php echo $dados['homedir']; ?></td>
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
				<td class="userdir"><?php echo $dados['homedir']; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
		<p style="height:100px;"></p>
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
						<option value="TRT">Técnico em Redes de Computadores - Tarde</option>
						<option value="TIN">Técnico em Informática - Noite</option>
					</select>
				</div>
			</div>
			<div id="turmatrt">
				<div class="form-group">
					<label for="selTurmaTRT">Turma TRT:</label>
					<select name="selTurmaTRT" id="selTurmaTRT" class="form-control" onchange="TrocarTRT();">
						<option value="" disabled selected>Selecione uma Turma</option>
						<option value="" disabled></option>
						<option value="1ºTRT" id="1ºTRT" name="1ºturma">1ºTRT</option>
						<option value="2ºTRT" id="2ºTRT" name="2ºturma">2ºTRT</option>
						<option value="3ºTRT" id="3ºTRT" name="3ºturma">3ºTRT</option>
					</select>
				</div>
			</div>
			<div id="turmatin">
				<div class="form-group">
					<label for="selTurmaTIN">Turma TIN:</label>
					<select name="selTurmaTIN" id="selTurmaTIN" class="form-control" onchange="TrocarTIN();">
						<option value="" disabled selected>Selecione uma Turma</option>
						<option value="" disabled></option>
						<option value="1ºTIN" id="1ºTIN" name="1ºturma">1ºTIN</option>
						<option value="2ºTIN" id="2ºTIN" name="2ºturma">2ºTIN</option>
						<option value="3ºTIN" id="3ºTIN" name="3ºturma">3ºTIN</option>
					</select>
				</div>
			</div>
			<div id="redes">
				<div id="trt1">
					<div class="form-group">
						<label for="trt1">Matérias:</label>
						<select name="trt1" class="form-control">
							<option value="" disabled selected>Selecione uma Matéria</option>
							<option value="" disabled></option>
							<option value="Sistemas Operacionais para Redes I">Sistemas Operacionais para Redes I</option>
							<option value="Hardware">Hardware</option>
							<option value="Logica Computacional">Lógica Computacional</option>
							<option value="Aplicativos Basicos I">Aplicativos Básicos I</option>
							<option value="Fundamentos de Redes">Fundamentos de Redes</option>
							<option value="Linguagem, Trabalho e Tecnologia">Linguagem, Trabalho e Tecnologia</option>
							<option value="Cabeamento Estruturado">Cabeamento Estruturado</option>
							<option value="Etica e Cidadania Organizacional">Ética e Cidadania Organizacional</option>
						</select>
					</div>
				</div>
				<div id="trt2">
					<div class="form-group">
						<label for="trt2">Matérias:</label>
						<select name="trt2" class="form-control">
							<option value="" disabled selected>Selecione uma Matéria</option>
							<option value="" disabled></option>
							<option value="Aplicativos Basicos II">Aplicativos Básicos II</option>
							<option value="Sistemas Operacionais para Redes II">Sistemas Operacionais para Redes II</option>
							<option value="Seguranca da Informacao I">Segurança da Informação I</option>
							<option value="Projeto de Redes I">Projeto de Redes I</option>
							<option value="Dispositivos de Redes">Dispositivos de Redes</option>
							<option value="Script para Redes">Script para Redes</option>
							<option value="Ingles Instrumental">Inglês Instrumental</option>
							<option value="Planejamento do Trabalho de Conclusao de Curso">Planejamento do Trabalho de Conclusão de Curso</option>
						</select>
					</div>
				</div>
				<div id="trt3">
					<div class="form-group">
						<label for="trt3">Matérias:</label>
						<select name="trt3" class="form-control">
							<option value="" disabled selected>Selecione uma Matéria</option>
							<option value="" disabled></option>
							<option value="Projeto de Redes II">Projeto de Redes II</option>
							<option value="Sistemas Operacionais para Redes III">Sistemas Operacionais para Redes III</option>
							<option value="Instalacao e Configuracao de Redes Sem Fio">Instalação e Configuração de Redes Sem Fio</option>
							<option value="Empreendedorismo">Empreendedorismo</option>
							<option value="Seguranca da Informacao II">Segurança da Informação II</option>
							<option value="Sistemas de Comunicacao de Dados">Sistemas de Comunicação de Dados</option>
							<option value="Desenvolvimento do Trabalho de Conclusao de Curso">Desenvolvimento do Trabalho de Conclusão de Curso</option>
						</select>
					</div>
				</div>
			</div>
			<div id="info">
				<div id="tin1">
					<div class="form-group">
						<label for="tin1">Matérias:</label>
						<select name="tin1" class="form-control">
							<option value="" disabled selected>Selecione uma Matéria</option>
							<option value="" disabled></option>
							<option value="Logica de Programacao">Lógica de Programação</option>
							<option value="Tecnicas de Programacao para Internet I">Técnicas de Programação para Internet I</option>
							<option value="Tecnicas de Linguagens para Banco de Dados I">Técnicas de Linguagens para Banco de Dados I</option>
							<option value="Analise de Sistemas">Análise de Sistemas</option>
							<option value="Gestao de Sistemas Operacionais I">Gestão de Sistemas Operacionais I</option>
							<option value="Operacao de Software Aplicativo">Operação de Software Aplicativo</option>
							<option value="Instalacao e Manutencao de Computadores">Instalação e Manutenção de Computadores</option>
							<option value="Ingles Instrumental">Inglês Instrumental</option>
							<option value="Linguagem, Trabalho e Tecnologia">Linguagem, Trabalho e Tecnologia</option>
						</select>
					</div>
				</div>
				<div id="tin2">
					<div class="form-group">
						<label for="tin2">Matérias:</label>
						<select name="tin2" class="form-control">
							<option value="" disabled selected>Selecione uma Matéria</option>
							<option value="" disabled></option>
							<option value="Tecnicas de Orientacao a Objetos">Técnicas de Orientação a Objetos</option>
							<option value="Tecnicas de Programacao para Internet II">Técnicas de Programação para Internet II</option>
							<option value="Tecnicas de Linguagens para Banco de Dados II">Técnicas de Linguagens para Banco de Dados II</option>
							<option value="Desenvolvimento de Software I">Desenvolvimento de Software I</option>
							<option value="Programacao de Computadores I">Programação de Computadores I</option>
							<option value="Gestao de Sistemas Operacionais II">Gestão de Sistemas Operacionais II</option>
							<option value="Empreendedorismo e Inovacao">Empreendedorismo e Inovação</option>
							<option value="Planejamento do Trabalho de Conclusao de Curso">Planejamento do Trabalho de Conclusão de Curso</option>
						</select>
					</div>
				</div>
				<div id="tin3">
					<div class="form-group">
						<label for="tin3">Matérias:</label>
						<select name="tin3" class="form-control">
							<option value="" disabled selected>Selecione uma Matéria</option>
							<option value="" disabled></option>
							<option value="Redes de Comunicacao de Dados">Redes de Comunicação de Dados</option>
							<option value="Tecnologias para Mobilidade">Tecnologias para Mobilidade</option>
							<option value="Tecnicas de Linguagens para Banco de Dados III">Técnicas de Linguagens para Banco de Dados III</option>
							<option value="Desenvolvimento de Software II">Desenvolvimento de Software II</option>
							<option value="Programacao de Computadores II">Programação de Computadores II</option>
							<option value="Seguranca Digital">Segurança Digital</option>
							<option value="Etica e Cidadania Organizacional">Ética e Cidadania Organizacional</option>
							<option value="Desenvolvimento do Trabalho de Conclusao de Curso">Desenvolvimento do Trabalho de Conclusão de Curso</option>
						</select>
					</div>
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
		<p style="height:200px;"></p>
		<div class="row">
			<div class="col-md-12">
				<div class="alert text-center alert-danger">
					<strong style="font-size:24px;">Exclusão de Registros</strong>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="row" style="margin-bottom:100px;">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<button class="btn btn-danger btn-block" style="height:50px;font-size:18px;">Excluir Registro dos Dados</button>
			</div>
			<div class="col-md-2">
			</div>
			<p style="margin-top:50px;">*Faça a exclusão dos registros, somente com plena consiência de que todos os dados serão apagados e com autorização da Direção. Essa função é somente para ser utilizada no início de cada semestre.</p>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	function TrocarCurso()
	{
		var selCurso = document.getElementById("selCurso");
		var selectedValue1 = selCurso.options[selCurso.selectedIndex].value;
		if(selectedValue1 == 'TRT')
		{
			document.getElementById('turmatin').style.display = "none";
			document.getElementById('turmatrt').style.display = "block";
		}
		else
		{
			if(selectedValue1 == 'TIN')
			{
				document.getElementById('turmatrt').style.display = "none";
				document.getElementById('turmatin').style.display = "block";
			}
		}
	}
	function TrocarTRT()
	{
		var selTurmaTRT = document.getElementById("selTurmaTRT");
		var selectedValue2 = selTurmaTRT.options[selTurmaTRT.selectedIndex].value;
		if(selectedValue2 == '1ºTRT')
		{
			document.getElementById('trt3').style.display = "none";
			document.getElementById('trt2').style.display = "none";
			document.getElementById('trt1').style.display = "block";
		}
		else
		{
			if(selectedValue2 == '2ºTRT')
			{
				document.getElementById('trt3').style.display = "none";
				document.getElementById('trt2').style.display = "block";
				document.getElementById('trt1').style.display = "none";
			}
			else
			{
				if(selectedValue2 == '3ºTRT')
				{
					document.getElementById('trt3').style.display = "block";
					document.getElementById('trt2').style.display = "none";
					document.getElementById('trt1').style.display = "none";
				}
			}
		}
	}
	function TrocarTIN()
	{
		var selTurmaTIN = document.getElementById("selTurmaTIN");
		var selectedValue3 = selTurmaTIN.options[selTurmaTIN.selectedIndex].value;
		if(selectedValue3 == '1ºTIN')
		{
			document.getElementById('tin3').style.display = "none";
			document.getElementById('tin2').style.display = "none";
			document.getElementById('tin1').style.display = "block";
		}
		else
		{
			if(selectedValue3 == '2ºTIN')
			{
				document.getElementById('tin3').style.display = "none";
				document.getElementById('tin2').style.display = "block";
				document.getElementById('tin1').style.display = "none";
			}
			else
			{
				if(selectedValue3 == '3ºTIN')
				{
					document.getElementById('tin3').style.display = "block";
					document.getElementById('tin2').style.display = "none";
					document.getElementById('tin1').style.display = "none";
				}
			}
		}
	}
</script>
<?php
		}
	}
	else
	{
		header("location:index.php");
	}
?>