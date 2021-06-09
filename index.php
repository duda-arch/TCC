<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link  rel="stylesheet" type="text/css" href="css/style.css  " />
<?php include @$pg = $_GET["pg"];?>


	<title>VenonNet</title>
</head>
	<header>
			<?php
							if(isset($_GET["dk"])){


							}else{
								include 'menu.php';
								
						};
			
						
							if(isset($_GET["pg"])){


							}else{
								include 'page-home.php';
								
						};
			?>
	</header>
<body>
	<footer class=" footer1">
	<div class="container-fluid">
		<div style="background-color: #B0C4DE; margin-top:30px;height:80px; " class="row ">
			<span style="color: #728C42; padding:10px;" class=" logo ">Venon</span><span class=" logo" style="color: black;">*Net</span>
			<div class="Footer_contato">
			<p>VenonNet@gmail.com <a href='https://www.facebook.com/clovisbrasilio.dossantos.1'> <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
</svg>Facebook</button></a>(41)4002-8922  </p>
	

			</div>
		</div>
	</div>
	</footer>
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
