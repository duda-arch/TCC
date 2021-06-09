
<div class="contaier-fluid finalizar_compra">
	<div class="row  justify-content-center">
	<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="imagens/<?php  session_start(); echo $_SESSION['produtos'][$_GET['pd']]['img'];?>.png"alt="Card image cap">
				<div class="card-body">
			<a href='' style="transform: none;">	<h2 class="card-title" ><?php session_start(); echo $_SESSION['produtos'][$_GET['pd']]["nome_product"];?><a></h2>
				<h2><span style="color: #728C42;">	<?php session_start(); echo $_SESSION['produtos'][$_GET['pd']]["valor"];?></span></h2>
					<p class="card-text"><?php session_start(); echo $_SESSION['produtos'][$_GET['pd']]["descriçao"];?></p>
				</div>
				</div>
		<div class="col-12">		

		<h1>Confirmar compra</h1>
		  	<form action="index.php?pg=cad_func.php&pd=<?php  echo $_GET['pd']; echo"&v=2"?>" method="post">
				<div class="form-row cadastro">
						<div class="form-group col-md-">
						      	<label for="inputEmail4">Email</label>
						      	<input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
						</div>
						<div class="form-group col-md-3">
						      	<label for="inputPassword4">Password</label>
						      	<input type="password" class="form-control" name="senha1" id="inputPassword4" placeholder="Password">
						 </div>
						<div class="form-group col-md-3">
						      	<label for="inputPassword4">Password-confirmation</label>
						      	<input name="senha2" type="password" class="form-control" id="inputPassword4" placeholder="Password">
						</div>
						    <button type="submit" class="btn btn-dark">Confirmar compra</button>
				</div>
			</form>	
   		</div> 
  	</div>
	  
</div>


<div class="row justify-content-center">
<small id="passwordHelpBlock" class="form-text text-muted">

				<?php	function confirmacao($senha1,$senha2){if($senha1 == null && $senha2== null) {

		echo "Senha nula";
											
		}elseif($senha1 == $senha2){ ?>
			
			<h1 style="color: red; margin-top:-100px">
			<?php echo"Compra Feita com Sucesso ";?>
			</h1>
		<?php	
			$server = 'localhost';
			$user = 'root';
			$password = 'un3oztgbnç';
			$dbname = 'TCC';
			$port = '3306';
			   
				$db_connect = new mysqli($server,$user,$password,$dbname,$port);
			   
			if($db_connect->connect_error == true){
					echo'Deu merda aqui meu :' . $db_connect->connect_error;
			   
			}else{
				$sql = "INSERT INTO usuarios (email,senha)VALUES ( '".$_POST["email"]."','".$_POST["senha1"]."' )";
				
				$db_connect->query($sql);
					
			   
			};
			   

				}else{?>
			<h1 style="color: red; margin-top:-100px">
			<?php 
			echo "Senha diferente de confirmacao";
					}
						}
				 if($_GET['v'] == 2){
								  	
			  	confirmacao($_POST['senha1'],$_POST['senha2']);
				 };


		 

			 ?> 
				</h1>		
</small>
</div>	




			




	</div>
</div>	


<!-- Create table usuarios (
     ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
     email Varchar(30),
     senha Varchar(40),
     Primary Key (ID)) ENGINE = MyISAM; -->
	 
<link rel="stylesheet" href="css/style_cad_func.css">
<style>
*{
	margin-top: 0;
	padding: 0;
}
footer{
	margin: 0;
}
body{
	margin-top: 100px;
}
</style>