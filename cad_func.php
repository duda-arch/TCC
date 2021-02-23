<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


					<form action="cad_func.php?v=2" method="post">
									
							<p>Entre com um Usuario </p>
								<input class="" type="text" name="nome">

							<p>Entre com uma senha</p>
								<input class="" type="int" name="senha">

							<p>Entre com uma senha</p>
								<input class="" type="int" name="senha2">

				<input  class="button" type="submit" name="enviar"  value="enviar">
					</form>



					<?php 
									
		
 					$server = 'localhost';
 					$user = 'phpmyadmin';
 					$password = 'senhafake';
 					$dbname = 'phpmyadmin';
 					$port = '3306';

 						$db_connect = new mysqli($server,$user,$password,$dbname,$port);

 					if($db_connect->connect_error == true){
 							echo'Deu merda aqui meu :' . $db_connect->connect_error;

 					}elseif(isset($_POST['enviar'])){	$sql = "INSERT INTO tcc(nome,senha ) VALUES ( '".$_POST["nome"]."','".$_POST["senha"]."' )";

 							if($db_connect->query($sql) == true){

 								echo"Formulário enviado com sucesso";

 							}else{

 									echo"Não foi possivel enviar o formulário";
 							}
 					}

//		$cadastro = array('nome' => $_POST['nomea'] , 
								//									'senha' => $_POST['senhaa'],
							//									);

									//			var_dump($cadastro);

					 	?>



</body>
</html>