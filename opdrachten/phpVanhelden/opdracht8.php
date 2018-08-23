<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>

<p>Ik woon in Hellevoetsluis</p>
<p>Vul een andere woonplaats</p>

<ul>
<li>spijkenisse</li>
<li>rotterdam</li>
<li>schiedam</li>
<li>amsterdam</li>
<li>de maan</li>
</ul>

<form action="" method="post">
<input type="text" name="woonplaats">
<input type="submit" value="submit">
</form>

<p>Mijn woonplaats is
 
<?php
if(!isset($_POST['woonplaats'])){
	$_POST['woonplaats'] = null;
}
	
$woonplaats = $_POST['woonplaats'];

switch ($woonplaats){
	
	case"spijkenisse":
	echo "7 km van spijkenisse";
	break;
	
	case"rotterdam":
	echo "-24 km van rotterdam";
	break;

	case"schiedam":
	echo "7000 km van schiedam";
	break;

	case"amsterdam":
	echo "69 km van amsterdam";
	break;

	case"de maan":
	echo "5 km van de maan";
	break;

	}

?>

</p>
</body>
</html>