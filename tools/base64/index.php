<html>
<title>Base64</title>
<head>
<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php include_once("/home/mark/website/analyticstracking.php") ?>
<?php include("/home/mark/website/start_body_blank.php") ?>

<?php

$encode = $_POST["encode"];
$decode = $_POST["decode"];
	echo "<h1>Enter a string to encode or decode base64:</h1>";
        echo "<!-- Display Form -->";                                                                                         
        echo "<form action=\"index.php\" method=\"post\">";
        echo "<input type=\"text\" name=\"encode\">";
        echo "<input type=\"submit\" value=\"Encode\">";

	if (!empty($encode)) {
		echo base64_encode($encode);
	}

        echo "</form>";
	echo "</br>";

        echo "<!-- Display Form -->";                                                                                         
        echo "<form action=\"index.php\" method=\"post\">";
        echo "<input type=\"text\" name=\"decode\">";
        echo "<input type=\"submit\" value=\"Decode\">";

	if (!empty($decode)) {
		echo base64_decode($decode);
	}
        echo "</form>";

	echo "</br>";
	echo "</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>";
?>


<?php include("/home/mark/website/end_body_blank.php") ?>
<?php include("/home/mark/website/footer.php") ?>

</body>
</html>
