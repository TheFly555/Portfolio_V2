<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>

<p>verboden html code in te voeren</p>
<form action="" method="post">
<input type="text" name="input">
<input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST['submit'])){
$input = $_POST['input']; 
strip_tags($input);
echo $input;
}
?>


</body>
</html>