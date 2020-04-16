<?php include 'functions.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP OOPS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="container first">
		<div class="second">
			<h3 align="center">Object Oriented PHP</h3>	
			<form action="" method="post">	
				<table class="table table-responsive">
					<tr>
						<td>Enter First Number</td>
						<td><input type="number" name="num1"></td>
					</tr>
					<tr>
						<td>Enter Second Number</td>
						<td><input type="number" name="num2"></td>
					</tr>	
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Calculate"></td>
					</tr>			
				</table>
			</form>	
			<?php

			if(isset($_POST['submit'])){
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];

				if(empty($num1) AND empty($num2)){
					echo "<span style = 'color:#ee6554'>Fields must not be empty.<span>";
				}else{

					echo "Num1 is: ".$num1.', '. "Num2 is: ".$num2.'<br>';

					$cal = new Calculate;
					$cal->add($num1, $num2);
					$cal->sub($num1, $num2);
					$cal->mul($num1, $num2);
					$cal->div($num1, $num2);

				}
			}

			?>
		</div>	
	</header>
</body>
</html>