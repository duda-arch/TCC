<div class="container-fluid">
	<div class="row justify-content-center ">
		<div class="col-6  produtos_destaque">
			<img class="img-fluid" alt="Responsive image"  src="imagens/produtos_destaque.png">
		</div>
		<div class="col-6 produtos_destaque">
			<img class="img-fluid" alt="Responsive image"  src="imagens/produtos_destaque2.png">
		</div>
	</div>
	<div style="visibility: hidden;">A</div>
<?php
					session_start();

				include @$pg = $_GET["pd"];
			 	include @$tp = $_GET["tp"];

			 	include 'banco-produtos.php';
			 

					 if($_GET['tp'] == "creatina"){

					 include 'creatina.php';

					}elseif($_GET['tp'] == "hipercalorico"){

						 include 'hipercalorico.php';

					}elseif($_GET['tp'] == "termogenicos"){

						 include 'termogenicos.php';
					}elseif($_GET['tp'] == "whey"){

						 include 'whey.php';
					};
?>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.8892810482585!2d-49.16735038498556!3d-25.44196488378292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcefccfea67fa5%3A0xf94d6453e244d143!2sR.%20Augusta%20Santos%20Andrade%20-%20Maria%20Antonieta%2C%20Pinhais%20-%20PR%2C%2083331-060!5e0!3m2!1spt-BR!2sbr!4v1615853449767!5m2!1spt-BR!2sbr" width="100%" height="450" style="margin-top:10px; position:relative;border:0;" allowfullscreen="" loading="lazy"></iframe>