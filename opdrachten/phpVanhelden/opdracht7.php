<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>
<form method="POST" action="">
<input name="spaargeld" type="text">
<input type="submit" name="submit"/>
</form>

<?php

if(!isset($_POST['spaargeld'])){
	$_POST['spaargeld'] = 0;
}

$geld = $_POST['spaargeld'];
$tekort = 1000 - $geld;
$over = $geld -1000;


if($geld <= 700){
	echo"Je kan beter een baantje zoeken.<br>";
	echo"Je komt nog " . $tekort . " tekort.<br>"; 
}
elseif($geld <= 900){
	echo"Je bent er bijna.<br>";
	echo"Je komt not " . $tekort . " tekort.<br>";
}
elseif($geld >=	 1000){
	echo"Je hebt genoeg geld!<br>";
	echo"en zelfs nog " . $over . " over!";
}

?>

</body>
</html>