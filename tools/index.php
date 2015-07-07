<html>
<head>
<title>Tools</title>
<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="wrapper">
<?php include("/home/mark/website/template_header.php") ?>
	<div id="extra" class="container">
		<h2> Tools and In Progress code! Things may be broken...</h2>
	<?php
	foreach(glob('./*', GLOB_ONLYDIR) as $dir) {
	    $dir = str_replace('./', '', $dir);
	    echo "<a href='./$dir'>$dir</a></br>";
	}
	?>
	</br></br></br></br></br></br></br></br>
	</div>
</div>
<?php include("/home/mark/website/template_footer.php") ?>
</body>
</html>
