<!DOCTYPE html>
<!--
	PHP and HTML
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Step4</title>

	<style>
		header {
			background-color: #e3e3e3;
			text-align: center;
			padding: 1rem;
		}
	</style>
</head>
<body>
	
	<header>
		<h1>
			<?php
				$name = htmlspecialchars($_GET["name"]);
				echo $name;
			?>
		</h1>	
	</header>
	
	
</body>
</html>