<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>

<p>vul de srtraal van een cirkel in</p>

<form action="" method="post">
<input type="text" name="input">
<input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST['submit'])){
	$input = $_POST['input'];
	$pi = 3.14;
	$omtrek = 2 * $pi * $input;
	$oppervlakte = $pi * ($input * $input);
	
	echo 'de omtrek van dezde crikel is: ';
	echo $omtrek;
	echo '<br>';
	echo 'de oppervlakte van deze cirkel is: ';
	echo $oppervlakte;
}
?>	

</body>
</html>