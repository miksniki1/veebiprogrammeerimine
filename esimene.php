<?php
	//Muutujad
	$myName = "Nikita";
	$myFamilyName = "Mikson";
	$practiceStarted = "2017-09-11 8.15";
	
	//echo strtotime($practiceStarted);
	//echo strtotime("now");
	//$timePassed = strtotime("now") - strtotime($practiceStarted);
	//echo $timePassed;
	
	$hourNow = date("H");
	$partOfDay = "";
	
	//if ($hourNow < 8 {
	//	$partOfDay = "varane hommik";
	//}
	//if ($hourNow >= 8 {
	//	$partOfDay = "koolipäev";
	//}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Nikita Miksoni veebiprogemise asjad
	</title>
</head>
<body>
	<h1>Nikita Mikson</h1>
	<p>See veebileht on loodud veebiprogrammeerimise kursusel ning ei sisalda mingisugust tõsiseltvõetavat sisu.</p>
	
	<?php
		echo "<p>Täna on vastik ilm!</p>";
		echo "<p>Täna on ";
		echo date("d.m.Y");
		echo ".</p>";
		echo "<p>Lehe laadimise hetkel oli kell: " .date("H:i:s") ."</p>";
		echo "Praegu on " .$partOfDaY .".";
	?>
	<p>PHP käivitatakse lehe laadimisel ja siis tehakse kogu töö ära. Hiljem, kui vaja midagi 
		jälle "kalkuleerida", siis laetakse kogu leht uuesti.</p>
	<?php
		echo "<p>Lehe autori täisnimi on: " .$myName ." " .$myFamilyName .".</p>";
	?>
		
</body>
</html>