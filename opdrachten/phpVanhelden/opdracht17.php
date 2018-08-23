<DOCTYPE html>
<html>
<head>
<title>

</title>
</head>

<body>

<?php

$name = "visitCount";

if (!isset($_COOKIE[$name])) {
    $_COOKIE[$name] = 0;
}
$_COOKIE[$name] = 1 + (int) max(0, $_COOKIE[$name]);
$result = setcookie($name, $_COOKIE[$name]);
if (!$result) {
    throw new RuntimeException("Failed to set cookie \"$name\"");
	}
	echo $result;
?>

</body>
</html>