<html>
<head>
<title>Mark Repka</title>
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
				<li class="current_page_item"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li><a href="/about" accesskey="2" title="">About</a></li>
				<li><a href="/contact" accesskey="3" title="">Contact</a></li>
			</ul>
		</div>
	</div>
	</div>
	<div id="extra" class="container">
		<div id="three-column">
			<div class="boxA">
				<div class="box"> 
					<h2>Server of the Mines</h2>
					<a href="/dynmap"><img src=/img/block.png></a>
					<p>You can view the server map by clicking on the icon above</p>
				</div>
			</div>
			<div class="boxB">
				<div class="box">
					<h2>Personal Github</h2>
					<a href="https://github.com/repkam09"><img src=/img/github.png></a>
					<p>View my small projects and scripts. This is a work in progress still.</p>
				</div>
			</div>
			<div class="boxC">
				<div class="box">
					<h2>Mumble Server</h2>
					<a href="mumble://repkam09.com/"><img src=/img/mumble.png></a>
					<p>Connect to the Mumble to talk with other players on the Minecraft server</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End of wrapper -->
<div id="featured">
	<h2>Website Service Links</h2>
	<p>Most of these links are for private use and will require authentication</p>
	<ul class="actions">
		<li>
			<a href="/admin/mail" class="button">Webmail</a>
			<a href="/shell/" class="button">Terminal</a>
			<a href="/dl" class="button">Download</a>
			<a href="/admin/upload" class="button">Upload</a>
			<a href="/admin" class="button">Admin</a>
			<a href="/events" class="button">Events</a>
		</li>
	</ul>
</div>
<?php include("/home/mark/website/footer.php") ?>
</body>
</html>
