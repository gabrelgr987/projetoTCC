<?php
	include_once("include/header.php");
?>
<style type="text/css">
	input[type=number]::-webkit-inner-spin-button, 
	input[type=number]::-webkit-outer-spin-button
	{ 
	  -webkit-appearance: none; 
	  margin: 0;
	}
	#iconesC icones, #icones i
	{
	    transition: width 0.5s, height 0.5s, transform 0.5s;
	}
	#iconesC i:hover, #icones i:hover
	{
	    transform: rotate(360deg);
	}
	.divP
	{
		height:45px;
		width:180px;
		z-index:1000;
		position:absolute;
		background-color:#FFFFFF;
		display:none;
		border:1px solid #e0e0e0;
		font-size:13px;
		border-radius:2px;
	}
	#formcel
	{
		color:#FFFFFF;
	}
	#formcel input
	{
		width:290px;
		margin-bottom:40px;
		color:#000000;
	}
	#formpc
	{
		color:#000000;
	}
	#perguntaC
	{
		height:35px;
		background-color:#ededed;
		border:0px;
		color:#bababa;
		width:290px;
		margin-bottom:40px;
	}
	#pergunta
	{
		width:70%;
		height:35px;
		background-color:#ededed;
		border:0px;
		color:#bababa;
	}
	#botao
	{
		color:#dbdb27;
		margin-top:100px;
		font-size:20px;
	}
	#botao2
	{
		color:#dbdb27;
	}
	#back
	{
		background-image:url('./img/background/infoworld2.png');
	}
	#backC
	{
		background-image:url('./img/background/celular.png');
	}
	.icon
	{
		margin-left:70px;
		margin-right:70px;
		color:#FFFFFF;
	}
	.paragrafo
	{
		height:150px;
	}
	#modalCaique
	{
		outline:none;
	}
	.iconC
	{
		margin-left:5px;
		margin-right:5px;
		color:#FFFFFF;
	}
	.fontP
	{
		font-size:22px;
	}
	.fontC
	{
		font-size:16px;
	}
	.imgG
	{
		width:80px;
		height:250px;
	}
</style>
<body>
	<!-- INÍCIO -->
	<header id="home">
		<div class="bg-img" id="img-pri">
		</div>
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">
						<img class="logo" src="img/logoB.gif" alt="logo">
						<img class="logo-alt" src="img/logoP.gif" alt="logo">
					</div>
					<div class="nav-collapse">
						<span></span>
					</div>
				</div>
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Início</a></li>
					<li><a href="#about">Sobre o Projeto</a></li>
					<li><a href="#portfolio">Imagens</a></li>
					<li><a href="#service">Serviços</a></li>
					<li><a href="#team">Grupo</a></li>
					<li><a href="#contact">Primeiro Login</a></li>
				</ul>
			</div>
		</nav>
		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<p style="height:440px"></p>
							<div class="col-md-3"></div>
							<div class="col-md-6"><a href="escolha.php" id="botao" class="btn btn-sm animated-button thar-two"><strong>Acesse os Arquivos</strong></a></div>
							<div class="col-md-6"><a href="escolha.php" id="botao2" class="btn btn-sm animated-button thar-two"><strong>Acesse os Arquivos</strong></a></div>
							<div class="col-md-3"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /INÍCIO -->

	<!-- SOBRE -->
	<div id="about" class="section md-padding">
		<div class="container">
			<div class="row">
				<div class="section-header text-center">
					<h2 class="title">Bem Vindo ao Website</h2>
				</div>
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-file"></i>
						<h3>Servidor de Arquivos</h3>
						<p>Baixe seus arquivos de acordo com o que você precisa, com facilidade e segurança de acesso.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-lock"></i>
						<h3>Seguro</h3>
						<p>Acesse o site com tranquilidade e segurança, todos os dados estão seguros no nosso servidor.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Site Responsivo</h3>
						<p>Acesse o site pelo seu celular, sem problemas, ele irá ajustar-se de acordo com seu dispositivo.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /SOBRE -->

	<hr class="hr-custom">

	<!-- IMAGENS DE INSTALAÇÃO -->
	<div id="portfolio" class="section md-padding bg-grey">
		<div class="container">
			<div class="row">
				<div class="section-header text-center">
					<h2 class="title">Processo de Instalação</h2>
				</div>
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/trabalho/1.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Design</span>
						<h3>Criação dos Designs do Site</h3>
						<div class="work-link">
							<a class="lightbox" href="./img/trabalho/1.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/trabalho/2.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Configuração</span>
						<h3>Configuração dos Equipamentos</h3>
						<div class="work-link">
							<a class="lightbox" href="./img/trabalho/2.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/trabalho/3.jpeg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Configuração</span>
						<h3>Configuração do Servidor</h3>
						<div class="work-link">
							<a class="lightbox" href="img/trabalho/3.jpeg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/trabalho/4.png" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Produção</span>
						<h3>Produção do Site</h3>
						<div class="work-link">
							<a class="lightbox" href="img/trabalho/4.png"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/trabalho/5.jpeg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Produção</span>
						<h3>Criação do Script de Cadastro</h3>
						<div class="work-link">
							<a class="lightbox" href="img/trabalho/5.jpeg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/trabalho/6.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Configuração</span>
						<h3>Lorem ipsum dolor</h3>
						<div class="work-link">
							<a class="lightbox" href="./img/trabalho/6.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /IMAGENS DE INSTALAÇÃO -->

	<hr class="hr-custom">

	<!-- SERVIÇOS -->
	<div id="service" class="section md-padding">
		<div class="container">
			<div class="row">
				<div class="section-header text-center">
					<h2 class="title">Baixe Qualquer Conteúdo</h2>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-file-word"></i>
						<h3>Arquivos Word</h3>
						<p>Baixe documentos, trabalhos acadêmicos e pesquisas científicas, em formato .DOC e .DOCX</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-file-excel"></i>
						<h3>Arquivos Excel</h3>
						<p>Baixe exemplos de planilhas de empresas, instituições, tudo em formato .XLS e .XLSX</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-file-powerpoint"></i>
						<h3>Arquivos PowerPoint</h3>
						<p>Baixe apresentações de trabalhos e modelos de montagem de slides, tudo em formato .PPT e .PPTX</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-file-video"></i>
						<h3>Arquivos de Video</h3>
						<p>Baixe videos, filmes e outros arquivos em diversos formatos como .MP4 e .WMV</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-image"></i>
						<h3>Arquivos de Imagem</h3>
						<p>Baixe imagens, fotos e outros arquivos em diversos formatos como .PNG e .JPEG</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-file-pdf"></i>
						<h3>Arquivos de Texto</h3>
						<p>Baixe livros, códigos, documentos, artigos e outros arquivos em formato .PDF .EPUB e .TXT</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /SERVIÇOS -->

	<!-- FUNÇÃO -->
	<div id="contpc">
		<div id="numbers" class="section sm-padding">
			<div class="bg-img" id="back">
				<div class="overlay"></div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center" id="icones">
						<i class="fas fa-graduation-cap fa-5x icon"></i>
						<i class="fas fa-book fa-5x icon"></i>
						<i class="fas fa-laptop fa-5x icon"></i>
						<i class="fas fa-desktop fa-5x icon"></i>
						<i class="fas fa-mobile fa-5x icon"></i>
					</div>
				</div>
				<p class="paragrafo"></p>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="white-text text-center footer-copyright fontP">
							<span>Acesse o Servidor de Arquivos e desfrute dos melhores serviços e dados disponíveis para os alunos. Um grande repositório de arquivos, para disseminar conhecimento e sabedoria no ambiente escolar.</span>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="contcel">
		<div id="numbers" class="section sm-padding">
			<div class="bg-img" id="backC">
				<div class="overlay"></div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center fa-2x" id="iconesC">
						<i class="fas fa-graduation-cap iconC"></i>
						<i class="fas fa-book iconC"></i>
						<i class="fas fa-laptop iconC"></i>
						<i class="fas fa-desktop iconC"></i>
						<i class="fas fa-mobile iconC"></i>
					</div>
				</div>
				<p class="paragrafo"></p>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="white-text text-center footer-copyright fontC">
							<span>Acesse o Servidor de Arquivos e desfrute dos melhores serviços e dados disponíveis para os alunos. Um grande repositório de arquivos, para disseminar conhecimento e sabedoria no ambiente escolar.</span>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- /FUNÇÃO -->

	<!-- GRUPO -->
	<div id="team" class="section md-padding">
		<div class="container">
			<div class="row">
				<div class="section-header text-center">
					<h2 class="title">Nosso Grupo</h2>
				</div>
				<div class="col-sm-3">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive imgG" src="./img/grupo/caique.jpg" alt="Caique">
							<div class="overlay">
								<div class="team-social">
									<button type="button" data-toggle="modal" class="btn-primary btn" data-target="#modalCaique" style="background-color:#0061ff;height:35px;width:40px;margin:5px;"><i class="fas fa-align-left fa-lg"></i></button>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Caique Tegas</h3>
							<span>Administrador de Redes de Computadores</span>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive imgG" src="img/grupo/gabriel.jpg" alt="Gabriel">
							<div class="overlay">
								<div class="team-social">
									<button type="button" data-toggle="modal" class="btn-primary btn" data-target="#modalGabriel" style="background-color:#0061ff;height:35px;width:40px;margin:5px;"><i class="fas fa-align-left fa-lg"></i></button>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Gabriel Gonçalves</h3>
							<span>Gerente de Tecnologia da Informação</span>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive imgG" src="./img/grupo/gustavo.jpg" alt="Gustavo">
							<div class="overlay">
								<div class="team-social">
									<button type="button" data-toggle="modal" class="btn-primary btn" data-target="#modalGustavo" style="background-color:#0061ff;height:35px;width:40px;margin:5px;"><i class="fas fa-align-left fa-lg"></i></button>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Gustavo Luis</h3>
							<span>Administrador de banco de Dados</span>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive imgG" src="./img/grupo/igor.jpg" alt="Igor">
							<div class="overlay">
								<div class="team-social">
									<button type="button" data-toggle="modal" class="btn-primary btn" data-target="#modalIgor" style="background-color:#0061ff;height:35px;width:40px;margin:5px;"><i class="fas fa-align-left fa-lg"></i></button>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Igor Coutinho</h3>
							<span>Analista de Segurança da Informação</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /GRUPO -->

	<!-- MODAL -->
  	<div class="modal fade" id="modalCaique" role="dialog">
    	<div class="modal-dialog">
      		<div class="modal-content">
        		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal"></button>
          			<h4 class="modal-title">Redes Sociais</h4>
          			<hr>
          			<p>
          				<i class="fab fa-facebook fa-2x"></i> &nbsp Caique Tegas
          			</p>
          			<p>
          				<i class="fab fa-linkedin fa-2x"></i> &nbsp Caique Tegas
          			</p>
          			<br>
          			<div class="modal-footer">
          				<button type="button" class="btn btn-primary" align="right" data-dismiss="modal">Fechar</button>
          			</div>
        		</div>
      		</div>
    	</div>
  	</div>
  	<div class="modal fade" id="modalGabriel" role="dialog">
    	<div class="modal-dialog">
      		<div class="modal-content">
        		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal"></button>
          			<h4 class="modal-title">Redes Sociais</h4>
          			<hr>
          			<p>
          				<i class="fab fa-facebook fa-2x"></i> &nbsp Gabriel Gonçalves
          			</p>
          			<p>
          				<i class="fab fa-linkedin fa-2x"></i> &nbsp Gabriel Gonçalves
          			</p>
          			<p>
          				<i class="fab fa-instagram fa-2x"></i> &nbsp @gabriel_goncalves_r
          			</p>
          			<br>
          			<div class="modal-footer">
          				<button type="button" class="btn btn-primary" align="right" data-dismiss="modal">Fechar</button>
          			</div>
        		</div>
      		</div>
    	</div>
  	</div>
  	<div class="modal fade" id="modalGustavo" role="dialog">
    	<div class="modal-dialog">
      		<div class="modal-content">
        		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal"></button>
          			<h4 class="modal-title">Redes Sociais</h4>
          			<hr>
          			<p>
          				<i class="fab fa-facebook fa-2x"></i> &nbsp Gustavo Santos
          			</p>
          			<br>
          			<div class="modal-footer">
          				<button type="button" class="btn btn-primary" align="right" data-dismiss="modal">Fechar</button>
          			</div>
        		</div>
      		</div>
    	</div>
  	</div>
  	<div class="modal fade" id="modalIgor" role="dialog">
    	<div class="modal-dialog">
      		<div class="modal-content">
        		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal"></button>
          			<h4 class="modal-title">Redes Sociais</h4>
          			<hr>
          			<p>
          				<i class="fab fa-facebook fa-2x"></i> &nbsp Igor Oliveira
          			</p>
          			<p>
          				<i class="fab fa-linkedin fa-2x"></i> &nbsp Igor Coutinho Oliveira
          			</p>
          			<p>
          				<i class="fab fa-twitter fa-2x"></i> &nbsp @igorzenhooo
          			</p>
          			<br>
          			<div class="modal-footer">
          				<button type="button" class="btn btn-primary" align="right" data-dismiss="modal">Fechar</button>
          			</div>
        		</div>
      		</div>
    	</div>
  	</div>
  	<!-- /MODAL -->

	<hr class="hr-custom">

	<!-- CADASTRO -->
	<div id="contact" class="section md-padding">
		<div class="container">
			<div class="row">
				<div class="section-header text-center">
					<h2 class="title"> Primeiro Login </h2>
				</div>
				<div id="formpc">
					<div class="col-md-12" >
						<form class="contact-form" action="processa/conta.php" method="post">
							<input type="text" id="login" name="login" class="input" placeholder="Nome de Usuário">
							<i class="far fa-question-circle" onmouseover="aparecer('user')" onmouseout="desa('user')"></i>
							<div id="user" class="divP">Insira um nome de usuário válidado no sistema.</div>
							<br>
							<br>
							<input type="number" id="rm" name="rm" class="input" placeholder="RM">
							<i class="far fa-question-circle" onmouseover="aparecer('regis')" onmouseout="desa('regis')"></i>
							<div id="regis" class="divP">Insira o seu RM, ele contém 5 digitos.</div>
							<br>
							<br>
							<button class="main-btn">Completar Cadastro</button>
						</form>
					</div>
				</div>
				<div id="formcel">
					<div class="col-md-12">
						<form class="contact-form" action="processa/conta2.php" method="post">
							<input type="text" id="loginC" name="loginC" class="input" placeholder="Nome de Usuário">
							<input type="number" id="rmC" name="rmC" class="input" placeholder="RM">
							<button class="main-btn">Completar Cadastro</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /CADASTRO -->

<!-- SCRIPTS -->
<script type="text/javascript">
	function aparecer(x)
	{
		document.getElementById(x).style.display = "inline";
	}
	function desa(x)
	{
		document.getElementById(x).style.display = "none";
		addClass('block')
	}
</script>
<!-- /SCRIPTS -->

<?php
	include_once("include/footer.php");
	include_once("include/scripts.php");
?>