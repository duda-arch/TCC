<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="cadastro.php?v=1" class="testeq"  method="post">

 <p>Entre com o seu nome</p>

<input class="" type="text" name="nome">

	<p>Entre com seu CPF</p>

<input class="" type="int" name="cpf">

<p>Crie uma senha </p>
 <input class="" type="password" name="senha1">
	<p>Confime sua senha </p>
<input class="" type="password" name="senha2">

<input  class="button" type="submit" name="enviar" id="botao" value="enviar">
</form>

			           
<?php  //cria uma funcao para confirmar senha usaremos mais pra frente tbm no formulario dos funcionarios que sera diferende obviamente dos demais mas dara pra reaproveitar  essa funcao de validacao  

	function confirmacao($senha1,$senha2){if($senha1 == null && $senha2== null) {

		echo "Senha nula";
											
		}elseif($senha1 == $senha2){

			echo "formulario enviado com sucesso";
				}else{
			echo "Senha diferente de confirmacao";
					}
								}
				 if($_GET['v'] == 1){
								  	
			  	confirmacao($_POST['senha1'],$_POST['senha2']);
				 };

 ?> 




	<?php 
									
		
 					$server = 'localhost';
 					$user = 'phpmyadmin';
 					$password = 'senhafake';
 					$dbname = 'phpmyadmin';
 					$port = '3306';

 						$db_connect = new mysqli($server,$user,$password,$dbname,$port);

 					if($db_connect->connect_error == true){
 							echo'Deu merda aqui meu :' . $db_connect->connect_error;

 					}else{
 								//	echo "Foite dog mau";

 							$sql ="SELECT * FROM tcc WHERE nome='asdas'";

 							$result = $db_connect->query($sql); 

			?>

</body>
</html>