<?PHP 

$yourName="Bryan Litscher";
$number1=5; 
$number2=7;
$total=$number1 + $number2;
$js = "clientTechnologies = [\"PHP\",\"HTML\",\"Javascript\"]";

date_default_timezone_set ( "America/Chicago" );
$timeOfDay = date('H');
$date = date('l');

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
		

		
		<?php
		echo "<p>Today is " . date("l F d, Y") . "</p>";		
		echo "<p>The time is " . date("h:i ( e )" ) . "</p>";

		// Mix of PHP and HTML in a block
		switch ($date) {
			case "Sunday":  ?>
				<p>The Babylonians named Sunday after the Sun</p>
				<?php break;
			case "Monday":  ?>
				<p>The Babylonians named Monday after the Moon</p>
				<?php break;
			case "Tuesday": ?>
				<p>Tuesday is derived from Tiu, or Tiw, the Anglo-Saxon name for Tyr, the Norse god of war</>
				<?php break;   
			case "Wednesday":  ?>
				<p>Wednesday is derived from Woden, the Anglo-Saxon supreme deity</p>
				<?php break;    
			case "Thursday":  ?>
				<p>Thursday originates from Thor, the god of thunder. </p>
				<?php break;    
			case "Friday":  ?>
				<p>Friday is derived from Frigga, the wife of Odin, representing love and beauty</p>
				<?php break;    
			case "Saturday":  ?>
				<p>Saturday comes from Saturn, the ancient Roman god of fun and feasting</p>
				<?php break;
			default:  ?>
				<p>Are you thick headed or what?</p>
		<?php } ?>

	</body>
	
	


</html>
