<?PHP 

$yourName="Bryan Litscher";
$number1=5; 
$number2=7;
$total=$number1 + $number2;
$js = "clientTechnologies = [\"PHP\",\"HTML\",\"Javascript\"]"



?>
<!-- http://localhost/wdv341/unit2/index.php -->
<!DOCTYPE html>

<html lang="en">

	<head>
		<!-- <link href="style.css" rel="stylesheet" type="text/css" /> -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>WDV341 Assignment: PHP Basics</title>
		<style>
			body{background-color:linen}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="scripts.js"></script> -->
	<script>
	$(document).ready(
		function(){
			//code after page loads
			<?php echo $js . ";\n";?>
			for(let i = 0;i < clientTechnologies.length;i++){ 
				var listitem = document.createElement("li");
				var node = document.createTextNode(clientTechnologies[i]);
				listitem.appendChild(node);

				var element = document.getElementById("techlist");
				element.appendChild(listitem);
				
				
				
				
			}
		}
	)
	
	</script>	
	


	</head>

	<body>
		<?php echo "<h1>" . $yourName . "</h1>";?>
		<h2><?php echo $yourName ;?></h2>

		<p> <?php echo $number1 ."+". $number2 ."=". $total;?></p>
		
		<ol id="techlist"></ol>

	</body>
	
	


</html>
