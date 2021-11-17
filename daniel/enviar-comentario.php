<?php

$nome = $_POST['txtnome'];
$turma = $_POST['optturma'];
$comentario = $_POST['txtcomentario'];

$sql = "INSERT INTO comentarios
    (nome, turma, comentario)
VALUES
    ('$nome', '$turma', '$comentario')";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=comentarios','root', '');

$conexao->exec($sql);
echo "gravado com sucesso<br>";
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,, initial- scale=1.0">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
<a href="comentario.php">Comentarios</a>
</body>
</html>