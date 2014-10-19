<html>
<title>Notes</title>
<head>

<?php
error_reporting(E_ALL);
?>

</head>

<body>

<form action="index.php" method="post" >
	<textarea rows="10" cols="80" name="a"/>
	</textarea>
	</br>
	<input type="submit" value="Save"/>
</form>

<?php
$TEXT = $_POST["a"];
if (!empty($TEXT)) {
	$ip = $_SERVER["REMOTE_ADDR"];
	$filename = base64_encode(time()) . "_note.txt";
	file_put_contents($filename, base64_encode($TEXT) . "\n", FILE_APPEND);
	echo "Saved as $filename</br>";
	echo "[User ID is " . base64_encode($ip) . "]</br>";
}

?>

</body>
</html>
