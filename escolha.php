<?php
	include_once("include/header.php");
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<style type="text/css">
	.imagem
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
	.imagem1
	{
	    background-image:url('img/background/greece.jpg');
	}
	.imagem2
	{
	    background-image:url('img/background/alps.jpg');
	}
	.imagem3
	{
	    background-image:url('img/background/fuji.jpg');
	}
	.imagem4
	{
	    background-image:url('img/background/maldivas.jpg');
	}
	.imagem5
	{
	    background-image:url('img/background/vancouver.jpg');
	}
</style>
<body id="corpo" class="imagem1 imagem">
	<div style="padding-bottom:10px;background-color:#FFFFFF;border-bottom:1px solid #e8e9ea">
		<img src="img/logoEtec.png" style="margin-left:40px;margin-top:5px;height:70px;margin-bottom:5px;">
		<img src="img/cps.png" style="margin-left:40px;height:100px;margin-top:5px">
	</div>
	<div class="container">
		<p style="margin-top:20%"></p>
		<div class="row">
			<div class="col-md-5">
				<a href="ftp://192.168.0.110">
					<div class="alert alert-info" style="height:280px;background:#FFFFFF;color:#000000;border-radius:10px;box-shadow: 0px 3px 50px 5px #888888;" align="center">
						<img src="img/estudante.png" style="height:150px;width:150px;">
						<p class="text-center" style="font-size:35px;margin-top:7%">Aluno</p>
					</div>
				</a>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-5">
				<a href="professor.php">
					<div class="alert alert-warning" style="height:280px;background:#FFFFFF;color:#000000;border-radius:10px;box-shadow: 0px 3px 50px 5px #888888;" align="center">
						<img src="img/professor.png" style="height:150px;width:150px;">
						<p class="text-center" style="font-size:35px;margin-top:7%">Professor</p>
					</div>
				</a>
			</div>
		</div>
	</div>
	<p style="height:300px;"></p>
	<script>
		$(function(){
		    setInterval(function(){
		        $('#corpo').removeClass('imagem1');
		    }, 49999);
		});
		$(function(){
		    var texto = 1;
		    var string;
		    
		    setInterval(function(){
		        switch(texto) {
		            case 1: string = "imagem2"; break;
		            case 2: string = "imagem3"; break;
		            case 3: string = "imagem4"; break;
		            case 4: string = "imagem5"; break;
		        }
		        
		        $('#corpo').addClass(string)
		        
		        texto != 3 ? texto++ : texto = 1;
		    }, 50000);
		});
    </script>
</body>
</html>