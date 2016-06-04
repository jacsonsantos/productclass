<?php
	require_once "vendor/autoload.php";
	
	use Produto\Product;
	
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == 'POST')
	{
		$host 	="localhost"; //host
		$dbname =""; //data base
		$user 	="root";//user
		$pass 	="";//password

		$produto = new Product(new PDO("mysql:host=".$host.";dbname=".$dbname."\"",$user,$pass));
		$produto->table("produtos");
		if(isset($_POST['produto']) && isset($_POST['valor']) && isset($_POST['descricao'])){
		$nome		= (string) 	utf8_decode($_POST['produto']);
		$valor		= (float) 	$_POST['valor'];
		$descricao	= (string)	utf8_decode($_POST['descricao']);

			$produto->setValue($nome,$valor,$descricao);
			if($produto->run()):
				echo "Insert with Success! <br/> <a href='/projetos/exercico OOP/form.html' title='Home'>back home</a>";
			else:
				echo "Error! <br/> <a href='/projetos/exercico OOP/form.html' title='Home'>back home</a>";
			endif;
		}
		else
		{
			header("Location:/");
		}
	}else
	{
		header("Location:/");
	}