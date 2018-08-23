<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>

<p>functie: verwijder eerste waarde</p>
<?php
$array = array(12,34,7,4,77,12,44,69,69);
print_r ($array);
echo"<br>";
echo"verwijderd: ". array_shift($array);
echo"<br>";
print_r ($array);
?>

<br><br>

<p>functie: verwijder laatste waarde</p>
<?php
$array = array(12,34,7,4,77,12,44,69,69);
print_r ($array);
echo"<br>";
echo"verwijderd: ". array_pop($array);
echo"<br>";
print_r ($array);
?>

<br><br>

<p>functie: verwijder dubbele waarden</p>
<?php
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
print_r ($input);
echo"<br>";
$result = array_unique($input);
print_r($result);
?>

<br><br>

<p>functie: tel aantal waarden</p>
<?php
$array = array(12,34,7,4,77,12,44,69,69);
print_r ($array);
echo"<br>";
print_r (array_count_values($array));
?>

<p>functie: sorteer a/z</p>
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r ($age);
echo "<br>";
ksort($age);
foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>

<p>functie: sorteer z/a</p>
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r ($age);
echo "<br>";
krsort($age);
foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>

<p>functie: door elkaar schudden</p>
<?php
$array = array(12,34,7,4,77,12,44,69,69);
print_r ($array);
echo "<br>";
shuffle($array);
foreach ($array as $array) {
    echo "$array ";
}

?>
</body>
</html>