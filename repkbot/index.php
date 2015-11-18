<html>
<head>
<title>RepkBot - Simple IRC Bot</title>
<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="wrapper">
<?php include("/home/mark/website/template_header.php") ?>
	<div id="extra" class="container">
		<h2>RepkBot - A simple Twitch.TV Chat Bot</h2>
		</br>
		<p>RepkBot is a simple, open source, irc bot written in node.js intended to provide some useful features to Twitch.TV chat channels.</p>
		
		<p>The bot has several commands that allow it to do things like keep track of
			death counts, print quotes, print various 'told' and 'rekt' messages, as 
			well as broadcast news/announcements at specified time intervals.</p>
			
		<p>Some commands are restricted to 'trusted' users only. Users can be added
			to the 'trusted' list via the !trust command. The owner of a Twitch channel is
			always a 'trusted' user for that channel and can therefore add additional trusted
			users who can control the bot in their channel.</p>
			
		<p>Source code for this project can be found on <a href="https://github.com/repkam09/repbot-irc">GitHub here</a>.</p>

		<p>Documentation of currently existing commands can be found in the <a href="https://github.com/repkam09/repbot-irc/blob/master/README.md">readme here</a>.</p>
		
		<p>If you want to take a look at the basic bot features, you can type any of the bot commands in my <a href="http://twitch.tv/repkam09/chat/">twitch.tv chat page</a>.</p>

		</br>
		<p>If you have any questions, feel free to <a href="/contact">get in touch!</a></p>
		</br>
		</br>
		<div id="three-column">
			<div class="boxA">
				<div class="box">
					<h2>View Source</h2>
					<a href="https://github.com/repkam09/repbot-irc"><img src=/img/github.png></a>
					<p>RepkBot is an Open Source project on GitHub</p>
				</div>
			</div>
			<div class="boxB">
				<div class="box">
					<h2>View Commands</h2>
					<a href="/tools/raspi-temp-monitor/"><img src=/img/software.png></a>
					<p>View the current list of supported commands</p>
				</div>
			</div>
			<div class="boxC">
            	<div class="box">
                	<h2>In Action</h2>
                    <a href="https://github.com/repkam09/repbot-irc/blob/master/README.md"><img src=/img/twitch.png></a>
                    <p>See it in action on the repkam09 Twitch.TV channel</p>
                </div>
            </div>
		</div>
		</br>
	</div>
</div>
<?php include("/home/mark/website/template_footer.php") ?>
</body>
</html>
