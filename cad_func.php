
<div class="contaier-fluid finalizar_compra">
	<div class="row  justify-content-center">
		<div class="col-10">

		  	<form action="index.php?pg=cad_func.php&pd=<?php  echo $_GET['pd']; echo"&v=2"?>" method="post">
				<div class="form-row cadastro">
						<div class="form-group col-md-3">
						      	<label for="inputEmail4">Email</label>
						      	<input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
						</div>
						<div class="form-group col-md-3">
						      	<label for="inputPassword4">Password</label>
						      	<input type="password" class="form-control" name="senha1" id="inputPassword4" placeholder="Password">
						 </div>
						<div class="form-group col-md-3">
						      	<label for="inputPassword4">Password</label>
						      	<input name="senha2" type="password" class="form-control" id="inputPassword4" placeholder="Password">
						</div>
						    <button type="submit" class="btn btn-dark">Confirmar cadastro</button>
				</div>
			</form>	
   		</div> 
  	</div>
</div>


<div class="row justify-content-center">
<small id="passwordHelpBlock" class="form-text text-muted">

				<?php	function confirmacao($senha1,$senha2){if($senha1 == null && $senha2== null) {

		echo "Senha nula";
											
		}elseif($senha1 == $senha2){

			echo "formulario enviado com sucesso";
				}else{
			echo "Senha diferente de confirmacao";
					}
						}
				 if($_GET['v'] == 2){
								  	
			  	confirmacao($_POST['senha1'],$_POST['senha2']);
				 };


		 

			 ?> 
					
</small>
</div>		<div class="container">
		<div class="row">
			<img class="img-fluid imagen_cadastro"  src="imagens/<?php  session_start(); echo $_SESSION['produtos'][$_GET['pd']]['img'];?>.png">
			<p class="produto_titulo"><?php session_start(); echo $_SESSION['produtos'][$_GET['pd']]["nome_product"];?></p>
			




		</div>
		</div>	
					<?php 
									
		
 					$server = 'localhost';
 					$user = 'phpmyadmin';
 					$password = 'senhafake';
 					$dbname = 'phpmyadmin';
 					$port = '3306';

 						$db_connect = new mysqli($server,$user,$password,$dbname,$port);

 					if($db_connect->connect_error == true){
 							echo'Deu merda aqui meu :' . $db_connect->connect_error;

 					}elseif(isset($_POST['enviar'])){	$sql = "INSERT INTO tcc(nome,senha ) VALUES ( '".$_POST["nome"]."','".$_POST["senha1"]."' )";

 							if($db_connect->query($sql) == true){

 								echo"Compra Realizada com sucesso";

 							}else{

 									echo"Não foi possivel fazer essa compra";
 							}
 					}


					 	?>
<style type="text/css">
	
	.finalizar_compra{
			
			margin-top: 100px;
			font-size: 30px;
			}
	  .text-muted{
		font-size: 20px;
		font-family: 'Gagalin';
	}
	.btn{
		border-radius: 15px;
		height: 50px;
	}

.form-group{

	font-size: 25px;
	color: black;
	font-family: 'Gagalin';
}
.produto_titulo{
	font-size: 40px;
	color: red;
	font-family: 'Gagalin';
	margin-top: 100px;
}
.imagen_cadastro{
	width: 400px;
	height: 400px;
}
.imagen_cadastro:hover{
	width: 600px;
	height: 600px;
	
}

</style>