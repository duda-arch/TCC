
	<div class="container-fluid ">
		
		<div class="row  justify-content-center">
		
			<div class="col-2  teta">
					<ul>
						<li> <a href="index.php?pg=page-product.php&&tp=hipercalorico">Hipercalorico</li></a>
						<li> <a href="index.php?pg=page-product.php&&tp=">Beto</li></a>
						<li><a href="index.php?pg=page-product.php&&tp=creatina">Carreira</li></a>
					</ul>
			</div>
					<div class="col-md-2 ">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products_creatina['0']['img'];?>.png">
						<div class="descricao_product">
														<div class="nome_product">
							<?php echo $products_creatina['0']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products_creatina['0']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=0">Comprar</a></button>
						</div>		
					</div>
					<div class="col-md-2 primeira_parte">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products_creatina['1']['img'];?>.png">
						<div class="descricao_product">
							<div class="nome_product">
							<?php echo $products_creatina['1']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products_creatina['1']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=1">Comprar</a></button>
						</div>	
					</div>
					<div class="col-md-2 primeira_parte">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products_creatina['2']['img'];?>.png">
						<div class="descricao_product">
							<div class="nome_product">
							<?php echo $products_creatina['2']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products_creatina['2']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=2">Comprar</a></button>
						</div>	
					</div>
					<div class="col-md-2 primeira_parte ">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products_creatina['3']['img'];?>.png">
						<div class="descricao_product">
							<div class="nome_product">
							<?php echo $products_creatina['3']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products_creatina['3']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=3">Comprar</a></button>
						</div>	
					</div>
				
						<div class="col-md-2 segunda_parte offset-md-2">

						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products_creatina['0']['img'];?>.png">
						<div class="descricao_product">
									<div class="nome_product">
							<?php echo $products_creatina['4']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products_creatina['4']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=0">Comprar</a></button>
						</div>		
					</div>
					<div class="col-md-2 segunda_parte">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products_creatina['1']['img'];?>.png">
						<div class="descricao_product">
							<div class="nome_product">
							<?php echo $products_creatina['5']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products_creatina['5']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=1">Comprar</a></button>
						</div>	
					</div>
					<div class="col-md-2 segunda_parte">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products_creatina['2']['img'];?>.png">
						<div class="descricao_product">
							<div class="nome_product">
							<?php echo $products_creatina['6']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products_creatina['6']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=2">Comprar</a></button>
						</div>	
					</div>
					<div class="col-md-2 segunda_parte">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products_creatina['3']['img'];?>.png">
					<div class="descricao_product">
							<div class="nome_product">
								<?php echo $products_creatina['7']['nome_product']; ?>
							</div>
								
								<div class="valor">
								<?php echo $products_creatina['7']['valor']; ?>
								</div>
					
						<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=3">Comprar</a></button>
					</div>
				</div>
				
				</div>		
			</div>
						
		</div>
				
	</div>
</div>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
	body{
		padding-top: 50px;

	}
.teta ul {
	position: fixed;
	background-color: #778899;
	color: white;
	width:400px;
	height: 300px;
	text-align:left;
	padding-top: 50px;
	list-style: none;
	margin-left: 10px;
	border-radius: 10px;
}

	.descricao_product{

		color: black;
		 width: 100%;
		 height: auto;
		 font-family: 'Anton', sans-serif;
		text-align: center;
		background-color: #DCDCDC;
		 align-items: center;
		padding-bottom: 10px;
		border-radius: 10px;
	}

	.valor{
		font-size:20px;
		color: black;
	}

	.nome_product{
		
		padding: 10px 10px 10px;
		font-size: 25;
		background-color: #728C42;
		width: auto;
		border:1px solid; 
		 align-items: center;
		 letter-spacing:1px; 
	}
	.col-md-2{
 		background-color: #FFF5EE;
	}

	.imagem_produto{
		height:200px;
		width: auto;
	}
	  .segunda_parte{
       padding-top: 50px;
    }
	

</style>