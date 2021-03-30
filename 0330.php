<?php include("header.php");?>
<html>
<body>
<center>
<h2>BMI Online Calculating Service</h2>
<form action="0330.php" method="post">
Height: <input type="text" name="height">m<br>
Weight: <input type="text" name="weight">kg<br>
<input type="submit">
</form>
<?php
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
?>
</center>
</body>
</html>
<?php include("footer.php");?>