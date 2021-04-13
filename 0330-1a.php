<?php
	include("header.php");
	$h = $_POST["height"];
	$w = $_POST["weight"];
	$bmi = $w / $h ** 2;
	echo "Heihgt：" . $h . "m<br>";
	echo "Weihgt：" . $w . "kg<br>";
	echo "BMI：" . $bmi . "<br>";
	if ($bmi < 18.5){
		echo "Too weak<br>";
	}else if ($bmi > 24){
		echo "You are overweight<br>";
	}
	include("footer.php");
?>