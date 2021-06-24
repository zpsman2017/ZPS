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
					<h1>Recently graduated, soon to start a job</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-2 filler-top"></div>
				<div class="col-8 headerDiv">
					<h2>Miami and Crowe</h2>
					<div class="col-1 filler-top"></div>
					<div class="col-10 paraDiv">
						<p>I recently graduated Miami University in May 2021 with a Bachelor's of Software Engineering.
							My favorite courses included "Web Services", "Cloud Computing & DevOps", and "Data Abstraction & Structures".
							Starting August 2021, I will be a an IT Assurance Staff Member at Crowe.
						</p>
					</div>
					<div class="col-6">
						<img src="/images/miami.png" class="responsiveImg">
					</div>
					<div class="col-6">
						<img src="/images/crowe.png" class="responsiveImg">
					</div>
				</div>	
			</div>

		</div>

		<script src="/scripts.js"></script>
	</body>
</html>
