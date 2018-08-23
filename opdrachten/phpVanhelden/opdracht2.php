<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>
<?php

$tijd = 14;

if($tijd > 6 AND $tijd < 12){
	echo "het is Ochtend";
}
else if($tijd > 12 AND $tijd < 18){
	echo "het is Middag";
}
else if($tijd > 18 AND $tijd < 24){
	echo "het is Avond";
}
else{
	echo "het is Nacht";
}

?>
</body>
</html>