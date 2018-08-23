<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>

<form action="" method="post">
<input type="text" name="input">
<input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST['submit'])){
	$input = $_POST['input'];
	if(is_numeric($input)){
		echo "'{$input}' is numeric";
    } else {
        echo "'{$input}' is NOT numeric";
    }
		
}
?>

</body>
</html>