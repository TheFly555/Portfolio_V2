<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>
<table>
<?php

echo"<tr>";
for($a=1;$a<=10;$a++){
	echo "<td>" . $a . "</td>";
}
echo"</tr>";

echo"<tr>";
for($b=1;$b<=10;$b++){
	
  $miles = $b * 1.609;
  
  echo "<td>". $miles . "</td>";
    
}
echo"</tr>";

?>
</table>
</body>
</html>