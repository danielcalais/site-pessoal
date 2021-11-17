<?php
$sql = "SELECT * FROM comentarios";
$conexao = new PDO('mysql:host=127.0.0.1;dbname=comentarios','root', '');
$resultado = $conexao->query($sql);
$lista = $resultado->fetchAll();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,, initial- scale=1.0">
	<title>Daniel ADM</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
<div id="container">
	<div id="navbar">
		<h1>Daniel Caetano Calais</h1>
	
	</div>
	<div id="banner">
		<img src="pw-disign.jpg" alt="banner" height="200" width="980">
	</div>
	<div id="link">	
		
	</div>
	<div id="menu">
		<ul>
			<li>
			<a href="Home.html"> Home </a>
			</li>
			<li>
			<a href="Pessoal.html">
			pessoal
			</a>
			</li>
			<li>
			<a href="Fotos.html">Foto</a>
			</li>
			<li>
			<a href="Amigos.html">Amigos</a>
			</li>
			<li>
			<a href="comentario.html"> Comentarios </a>
			</li>
		</ul>
	</div>
<div id="main0"> 
<?php foreach ($lista as $linha): ?>
			<div class="balao">
				<p class="comentario"><?php echo $linha['comentario'] ?></p>			
				<h4 class="nome"><?php echo $linha['nome'] ?> - <?php echo $linha['turma'] ?></h4>
			</div>
        <?php endforeach ?>
        </div>
	<div id="footer">
		<font color="#FF4500">
		<p>
		<i>Todos os direitos</i>
		</p>
		<p>
		<i>Desenvolvido por Daniel Caetano Calais - 2020</i>
		</p>
        </font>
	</div>
</div>
</body>
</html>