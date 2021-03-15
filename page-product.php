
<?php
					session_start();

				include @$pg = $_GET["pd"];
			 	include @$tp = $_GET["tp"];

			 	include 'banco-creatina.php';
			 	include 'banco-hipercalorico.php';
			 	include 'banco-termogenicos.php';
			 	include 'banco-whey.php';

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

		