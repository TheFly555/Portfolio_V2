<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>
<?php

$a = array (8,7,3,5,12,24,25);

foreach($a as $getal){

if($getal % 3 == 0){
	$b = "deelbaar door 3";
}
elseif($getal % 4 == 0){
	$b = "deelbaar door 4";
}
elseif($getal % 3 ==! 0 and $getal % 4 ==! 0){
	$b = "niet deelbaar door 3 of 4";
} 

echo $getal . " is " . $b . "<br>";
}
 

?>
</body>
</html>