<?php
chdir(dirname(__DIR__));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Produto</title>
	<link rel="stylesheet" type="text/css" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<style type="text/css">
		.box-center{width: 400px;margin: auto;}
		.box-center-logo{width: 100px;height: 100px;margin: auto;margin-bottom: 20px;}
		.box-center-logo img{position: relative;width: 100%;height: 100%;border-radius: 50%;}
	</style>
</head>
<body>
<div class="jumbotron">
	<div class="container text-center">
		<h1>Formação PHP</h1>
	</div>
</div>
<section class="box-center">
	<div class="box-center-logo">
		 <a href="https://codeexpertslearning.com" target="_blank" title="Code Experts Learning"><img src="img/codeExperts.jpg" alt="Code Experts Learning" title="Code Experts Learning"></a>
	</div>
	<form class="form-group" action="processa_form.php" method="post">
		<label for="">Nome do Produto:</label>
			<input type="text" class="form-control" name="produto" required autofocus>
		<label for="">Valor:</label>
			<input type="text" class="form-control" name="valor"  required>
		<label for="">Descrição:</label>
			<textarea name="descricao" class="form-control"></textarea><br/>
			<button class="btn btn-block btn-success" type="submit">Submit <span class="glyphicon glyphicon-share"></span></button>
	</form>
</section>
</body>
</html>