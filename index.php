<!-- Skyl3r.com portfolio page -->

<html>

	<head>
		<meta name="viewport" content="width=device-width, inital-scale=1">
		<title>Skyl3r</title>
		<link rel="stylesheet" href="main.css">
		<script src="filterSelection.js"></script>
	</head>


	<body>
		<div class="main">
			<h2>Skyl3r</h2>

			<div id="filterContainer">
				<button class="btn active" onclick="filterSelection('development')">Development</button>
				<button class="btn" onclick="filterSelection('overclocking')">Overclocking</button>
				<button class="btn" onclick="filterSelection('servers')">Servers</button>
				<button class="btn" onclick="filterSelection('cars')">Cars</button>
				<button class="btn" onclick="filterSelection('all')">Show all</button>
			</div>

			<div class="row">
				<div class="column development">
					<div class="content">
						<p>Lorem ipsum</p>
					</div>
				</div>

				<div class="column overclocking">
					<div class="content">
						<p>Lorem ipsum</p>
					</div>
				</div>

				<div class="column servers">
					<div class="content">
						<p>Lorem ipsum</p>
					</div>
				</div>

				<div class="column cars">
					<div class="content">
						<p>Lorem ipsum</p>
					</div>
				</div>
			</div>
		</div>
	</body>


</html>
