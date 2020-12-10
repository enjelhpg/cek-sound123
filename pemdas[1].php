<!DOCTYPE HTML>  
<html>
<head></head>
<body>
    <h2>Program Ganjil-Genap</h2>
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
	  Bilangan: <input type="text" name="bil">
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form><br>
	<?php
	$tampil = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$bil = $_POST["bil"];
			
			if ($bil % 2 == 0){ //Kondisi
			    echo "$bil Merupakan Bilangan Genap"; //Kondisi true
		}else {
			    echo "$bil Merupakan Bilangan Ganjil"; //Kondisi false
		}
	}
?>
</body>
</html>