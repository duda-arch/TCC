<!DOCTYPE html>
<html>
<head>
</head>
<body>

				
											<form action="cadastro.php?v=1" class="testeq"  method="post">

												 <p>Entre com o seu nome</p>
												 	 <input class="" type="text" name="nome">

												 <p>Entre com seu email</p>
													 <input class="" type="text" name="email">

													<p>Entre com seu CPF</p>
														<input class="" type="int" name="cpf">

													<p>Entre com o seu endereço</p>
												 	  <input class="" type="text" name="endereco">

												 	<p>Entre com o sua idade</p>
												 	  <input class="" type="text" name="idade">

												 	<p>Crie um loguin </p>
												 	  <input class="" type="text" name="log">

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
ma
								 ?> 



</body>
</html>