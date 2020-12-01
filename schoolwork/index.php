<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Zach's Personal Server</title>
		<meta charset="utf-8" name="viewport" content="width=device-width", initial-scale=1.0">

		<!-- Personal CSS -->
		<link rel="stylesheet" type="text/css" href="../main.css">
	</head>


	<body onresize="changeView()">
		<?php include '../navbar.php' ?>

		<div class="col-12 contentDiv">
			<div class="row top">
				<div class="col-3 filler-top"></div>
				<div class="col-6 headerDiv">
					<h1>This is a showcase of my schoolwork!</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-2 filler-top"></div>
				<div class="col-8 headerDiv">
					<h2>Battleship (Java, MVC)</h2>
					<div class="col-1 filler-top"></div>
					<div class="col-10 paraDiv">
						<p>This was a coding project for my Software Architecture and Design class.
							There was a GUI view and a CLI view. This allowed the user to choose how they want to
							interact with and play the game. I feel pretty good about the design and code quality,
							but I could have made the game a bit better.(It would be nice to have different size ships)
						</p>
					</div>
					<div class="col-6">
						<img src="/images/battleshipCLI.png" class="responsiveImg battleshipImg shadow" id="battleshipCLI">
					</div>
					<div class="col-6">
						<img src="/images/battleshipGUI.png" class="responsiveImg battleshipImg shadow">
					</div>
				</div>	
			</div>

			<div class="row">
				<div class="col-2 filler-top"></div>
				<div class="col-8 headerDiv">
					<h2>Miami Esports Website</h2>
					<div class="col-1 filler-top"></div>
					<div class="col-10 paraDiv">
						<p>This was a semester long project for my IT Project Management class.
							The focus of the project was responding to and implementing client requirements.
							The site was built with MVC ASP.NET. The responsiveness of the site was one thing that really shined.
							Each team had seperate pages with player pictures and bios.
						</p>
					</div>
					<div class="col-6" >
						<img src="/images/miamiEsportsDesktop.png" class="responsiveImg shadow" id="miamiEsportsDesktop">
					</div>
					<div class="col-6">
						<img src="/images/miamiEsportsMobile.png" class="responsiveImg shadow" id="miamiEsportsMobile">
					</div>
				</div>	
			</div>
		</div>

		<script src="/scripts.js"></script>
	</body>
</html>
