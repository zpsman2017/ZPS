<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Zach's Personal Server</title>
		<meta charset="utf-8" name="viewport" content="width=device-width", initial-scale=1.0"/>

		<!-- Personal CSS -->
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>


	<body onresize="changeView()">
		<?php include 'navbar.php' ?>

		<div class="col-12 contentDiv">
			<h1>This is hosted on Zach's personal server!</h1>

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
					I use Apache for the webserver, OpenSSH in order to access it remotely, and a VS Code server in order to edit files with an IDE.</p>
					<p>As I change WHAT I'm hosting, I will be adding more functionality.</p>
				</div>
			</div>
			

			<!-- <div class="col-12 filler"></div>
			

			<div class="row">
				<div class="col-1 filler-top"></div>
				<div class="col-10 headerDiv">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			<div class="col-12 filler"></div> -->

		</div>

		
		
		<script src="/scripts.js"></script>
	</body>
</html>