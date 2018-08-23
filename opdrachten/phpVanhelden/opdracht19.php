<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>

<form method="post">
<p>one: <input type="text" name="food[]" value="" /></p>
<p>two: <input type="text" name="food[]" value="" /></p>
<p>three: <input type="text" name="food[]" value="" /></p>
<p>shuffle: <input type="checkbox" value="shuffle" name="shuffle" /></p>
<p>sort: <input type="checkbox" value="sort" name="sort" /></p>
<input type="submit" />
</form>

<?php
error_reporting(E_ERROR);

if(isset($_POST['shuffle'])){
	shuffle($_POST['food']);
}

if(isset($_POST['sort'])){
	sort($_POST['food']);
}

foreach( $_POST['food'] as $v ) {
    echo $v;
	echo "<br>";
}

?>
	
</body>
</html>