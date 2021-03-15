
<?php
					session_start();

				include @$pg = $_GET["pd"];
			 	include @$tp = $_GET["tp"];

			 	include 'banco-creatina.php';
			 	include 'banco-hipercalorico.php';

					 if($_GET['tp'] == "creatina"){

					 include 'creatina.php';

					}elseif($_GET['tp'] == "hipercalorico"){

						 include 'hipercalorico.php';
					};
?>

		