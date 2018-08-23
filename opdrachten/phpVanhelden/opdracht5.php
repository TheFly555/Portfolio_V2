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

if($getal % 2 == 1){
	$b = "oneven";
} 
elseif($getal % 2 == 0){
	$b = "even";
};

echo $getal . " is " . $b . "<br>";
}
 

?>
</body>
</html>