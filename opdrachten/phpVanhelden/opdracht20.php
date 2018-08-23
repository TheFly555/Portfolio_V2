<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>

<form action="" method="post">
<input type="text" name="input"><br>
<p><input type="radio" name="upper" value="upper">upper</p>
<p><input type="radio" name="lower" value="lower">lower</p>
<p><input type="radio" name="first" value="first">first</p>
<p><input type="radio" name="first_string" value="first_string">first string</p>
<p><input type="radio" name="all_string" value="all_string"> all string</p>
<input type="submit" value="submit">
</form>

<?php

error_reporting(E_ERROR);

$string = $_POST['input'];
$upper = $_POST['upper'];
$lower = $_POST['lower'];
$first = $_POST['first'];
$first_string = $_POST['first_string'];
$all_string = $_POST['all_string'];

if(isset($_POST['upper'])){
$output = strtoupper ($string);
}

if(isset($_POST['lower'])){
$output = strtolower ($string);
}

if(isset($_POST['first'])){
$output = ucfirst ($string);
}

if(isset($_POST['first_string'])){
$output = ucfirst ($string);
}

if(isset($_POST['all_string'])){
$output = ucwords ($string);
}


if($output == NULL){
	
}else{
	echo $output;
}

?>

</body>
</html>