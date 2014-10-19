<html>
<head>
<title>Tools</title>
<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php include_once("/home/mark/website/analyticstracking.php") ?>
<div id="wrapper">
	<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/">Mark Repka</a></h1>
			<p>Software engineer who runs a Minecraft server!</p>
		</div>
		<div id="menu">
			<ul>
				<li><a href="/" accesskey="1" title="">Homepage</a></li>
				<li><a href="/about" accesskey="2" title="">About</a></li>
				<li><a href="/contact" accesskey="3" title="">Contact</a></li>
			</ul>
		</div>
	</div>
	</div>
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
<!-- End of wrapper -->
<?php include("/home/mark/website/footer.php") ?>
</body>
</html>
