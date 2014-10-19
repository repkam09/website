<html>
<head>
<title>Now Playing Music</title>
</head>

<body>
<h2>Last.fm Now Playing</h2>
<pre>
<?php
$homepage = file_get_contents('http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=repkam09&api_key=0cbaeb7c176f5591ee08ef6f747bf7ca');

echo $homepage;
?>
</pre>
</body>
</html>
