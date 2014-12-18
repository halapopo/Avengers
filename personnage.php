<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Avengers 2 - Personnages</title>
	<link rel="stylesheet" href="css/style-page-persos.css">
	    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/nav.css">
	  <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" type="text/css" href="css/personnages.css">
    </head>
<body>
	<div id="container"> <!-- debut container -->
	 <?php include('navigation.php');?>
	<section>
	<hr>
		<article class="rang1"> <!-- ligne numero 1 des perso -->
			<ul>
				<li><a href=""><img src="img/personnages/icon-ironman.png" alt="Iron Man"><h3>iron Man</h3></a></li>
				<li><a href=""><img src="img/personnages/icon-cap.png" alt="Captain America"><h3>captain america</h3></a></li>
				<li><a href=""><img src="img/personnages/icon-hulk.png" alt="hulk"><h3>hulk</h3></a></li>
				<li><a href=""><img src="img/personnages/icon-thor.png" alt="Thor"><h3>thor</h3></a></li>
			</ul>
		</article> <!-- fin de la ligne --> 
		<article class="rang2"> <!-- ligne numero 2 des perso -->
			<ul>
				<li><a href=""><img src="img/personnages/icon-fury.png" alt="Fury"><h3>fury</h3></a></li>
				<li><a href=""><img src="img/personnages/icon-hawkeye.png" alt="Hawkeye"><h3>hawkeye</h3></a></li>
				<li><a href=""><img src="img/personnages/icon-widow.png" alt="hulk"><h3>widow</h3></a></li>
				<li><a href=""><img src="img/personnages/icon-witch.png" alt="Witch"><h3>witch</h3></a></li>
				<li><a href=""><img src="img/personnages/icon-silver.png" alt="Quicksilver"><h3>quicksilver</h3></a></li>
				<li><a href=""><img src="img/personnages/icon-ultron.png" alt="ultron"><h3>Ultron</h3></a></li>
			</ul>
		</article> <!-- ligne numero 1 des perso -->
	
	</section>
	<br/>
	<section id="personnages">
        <div class=""><?php include('personnages pages/iron-man.php');?></div>
        <div class=""><?php include('personnages pages/captain-america.php');?></div>
        <div class=""><?php include('personnages pages/hulk.php');?></div>
        <div class=""><?php include('personnages pages/thor.php');?></div>
        <div class=""><?php include('personnages pages/nick-fury.php');?></div>
        <div class=""><?php include('personnages pages/hawk-eye.php');?></div>
        <div class=""><?php include('personnages pages/black-widow.php');?></div>
        <div class=""><?php include('personnages pages/scarlet-witch.php');?></div>
        <div class=""><?php include('personnages pages/vif-argent.php');?></div>
        <div class=""><?php include('personnages pages/ultron.php');?></div>
	</section>
	</div><!-- fin container -->
</body>
</html>