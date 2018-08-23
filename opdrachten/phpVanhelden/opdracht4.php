<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>
<?php
$beginprijs = array("Dorans ring" => 375,
                    "Health potion" => 50,
					"Control Ward" => 75);
					 
foreach ($beginprijs as $product => $prijs){
	if($prijs > 100){
		$nieuw = $prijs * 1.15;
	}
	
	else if($prijs < 55 ){
		$nieuw = $prijs * 1.1;
	}
	
	else{
		$nieuw = $prijs *1.12;
	}

echo "Een " . $product . " kosten eerst " . $prijs . " en kost nu " . $nieuw . ".<br>";
}

?>
</body>
</html>