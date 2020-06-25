<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Zach's Personal Server</title>
		<meta charset="utf-8" name="viewport" content="width=device-width", initial-scale=1.0">

		<!-- Personal CSS -->
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>


	<body onresize="changeView()">
		<?php include 'navbar.php' ?>

		<div class="col-12 contentDiv">
			<div class="row top">
				<div class="col-3 filler-top"></div>
				<div class="col-6 headerDiv">
					<h1>This is hosted on Zach's personal server!</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-1 filler-top"></div>
				<div class="col-45 headerDiv">
					<h2>Why?</h2>
					<p>I wanted my own server where I could show-off my projects from the past and try out new projects in the future.
					On my own server, I get complete creative control of uptime, configuration, and who sees what.
					I thought being my own sysadmin would be a phenomenal learning experience.</p>
					<p>Also, I just thought it would be fun.</p>
				</div>	
				<div class="col-1 filler"></div>
				<div class="col-45 headerDiv">
					<h2>How?</h2>
					<p>I got some spare computers from an office that had gotten new ones. I pieced together the best hardware and installed Ubuntu Server on it.
					I use Apache for the webserver, OpenSSH in order to access it remotely via terminal and an IDE</p>
					<p>As I change WHAT I'm hosting, I will be adding more functionality.</p>
				</div>
			</div>
			
		</div>

		
		
		<script src="/scripts.js"></script>
	</body>
</html>