<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link href="./css/style.css" rel="stylesheet">
	<link href="./css/images.css" rel="stylesheet">
</head>
<body>
	<?php
	$page="accueil";
	if (isset($_GET["page"])) {
		$page=$_GET["page"];
	}
	$pages=array("accueil"=>"./php/accueil.php",
		"obs"=>"./php/observations.php",
		"images"=>"./php/images.php",
		"pluie"=>"./php/pluie.php",
		"temp"=>"./php/temp.php",
		"press"=>"./php/press.php",
		"vent"=>"./php/vents.php",
		);
	?>

	<div class="box-area">
		<header>
			<div class="wrapper">
				<div class="logo">
					<a href="./index.php?page=accueil">Accueil</a>
				</div>
				<nav>
					<a href="./index.php?page=obs">Observations</a>
					<a href="./index.php?page=images">Images satellites</a>
					<a href="./index.php?page=pluie">Pluie et orages</a>
					<a href="./index.php?page=temp">Températures</a>
					<a href="./index.php?page=press">Pression</a>
					<a href="./index.php?page=vent">Vents</a>
				</nav>
			</div>
		</header>

		<?php
			if($page){
			require_once($pages[$page]);
			}
		?>

	</div>
</body>
</html>
