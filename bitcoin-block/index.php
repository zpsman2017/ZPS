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
					<h1>Here is the most recent Bitcoin block</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-2 filler-top"></div>
				<div class="col-8 headerDiv">
					<h2>Block Hash: </h2>
					<div class="col-1 filler-top"></div>
					<div class="col-10 paraDiv">
						<p>Block data here
						</p>
					</div>
				</div>	
			</div>

		</div>

		<script src="/scripts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/bitcoin-scripts.js"></script>
	</body>
</html>
