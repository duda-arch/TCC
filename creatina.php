
	<div class="container-fluid ">
		
		<div class="row  justify-content-center">
		
			<div class="col-2  teta">
					<ul>
						<li> <a href="index.php?pg=page-product.php&&tp=hipercalorico">Hipercalorico</li></a>
						<li> <a href="index.php?pg=page-product.php&&tp=whey">Whey</li></a>
						<li><a href="index.php?pg=page-product.php&&tp=termogenicos">termogenicos</li></a>
					</ul>
			</div>
					<div class="col-md-2 ">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products['0']['img'];?>.png">
						<div class="descricao_product">
														<div class="nome_product">
							<?php echo $products['0']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products['0']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=9">Comprar</a></button>
						</div>		
					</div>
					<div class="col-md-2 primeira_parte">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products['1']['img'];?>.png">
						<div class="descricao_product">
							<div class="nome_product">
							<?php echo $products['1']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products['1']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=1">Comprar</a></button>
						</div>	
					</div>
					<div class="col-md-2 primeira_parte">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products['2']['img'];?>.png">
						<div class="descricao_product">
							<div class="nome_product">
							<?php echo $products['2']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products['2']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=2">Comprar</a></button>
						</div>	
					</div>
					<div class="col-md-2 primeira_parte ">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products['3']['img'];?>.png">
						<div class="descricao_product">
							<div class="nome_product">
							<?php echo $products['3']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products['3']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=3">Comprar</a></button>
						</div>	
					</div>
				
						<div class="col-md-2 segunda_parte offset-md-2">

						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products['4']['img'];?>.png">
						<div class="descricao_product">
									<div class="nome_product">
							<?php echo $products['4']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products['4']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=4">Comprar</a></button>
						</div>		
					</div>
					<div class="col-md-2 segunda_parte">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products['5']['img'];?>.png">
						<div class="descricao_product">
							<div class="nome_product">
							<?php echo $products['5']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products['5']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=5">Comprar</a></button>
						</div>	
					</div>
					<div class="col-md-2 segunda_parte">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products['6']['img'];?>.png">
						<div class="descricao_product">
							<div class="nome_product">
							<?php echo $products['6']['nome_product']; ?>
							</div>
							
							<div class="valor">
							<?php echo $products['6']['valor']; ?>
							</div>
		
							<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=6">Comprar</a></button>
						</div>	
					</div>
					<div class="col-md-2 segunda_parte">
						<img class="img-fluid imagem_produto" alt="Responsive image"  src="imagens/<?php echo $products['7']['img'];?>.png">
					<div class="descricao_product">
							<div class="nome_product">
								<?php echo $products['7']['nome_product']; ?>
							</div>
								
								<div class="valor">
								<?php echo $products['7']['valor']; ?>
								</div>
					
						<button action="cadastro.php" type="button" class="btn botao btn-secondary"><a href="index.php?pg=cad_func.php&pd=7">Comprar</a></button>
					</div>
				</div>
				
				</div>		
			</div>
						
		</div>
				
	</div>
</div>
<link  rel="stylesheet" type="text/css" href="css/style_products.css" />
<style type="text/css">
	body{
		padding-top: 50px;
	}
</style>