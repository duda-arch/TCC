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

 							$sql ="SELECT * FROM tcc";

 							$result = $db_connect->query($sql); 

			?>

 					<table>
 							<tr>
 								 	<th>Nome</th>
 								 	<th>Senha</th>
 						  </tr>			
 							<?php	while ($row = $result->fetch_assoc()) { ?>
							<tr>		
									<td><?php echo $row['nome'];?></td>
									<td><?php echo $row['senha'];?></td>
							</tr>		

 						<?php	} ?>	
 					</table>

			<?php }; ?> 	      		
 