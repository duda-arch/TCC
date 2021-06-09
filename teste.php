
?php 
									
		
 					$server = 'localhost';
 					$user = 'root';
 					$password = 'un3oztgbnç';
 					$dbname = 'TCC';
 					$port = '3306';

 						$db_connect = new mysqli($server,$user,$password,$dbname,$port);

 					if($db_connect->connect_error == true){
 							echo'Deu merda aqui meu :' . $db_connect->connect_error;

 					}else{

						$sql = "INSERT INTO usuarios (login,senha) VALUES ('Pedro','$123123nsadasdsa')";

						$db_connect->query($sql)
						
 					}


					 	?>