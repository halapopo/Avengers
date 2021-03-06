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
	<section id="cercle">
	<hr>
		<article class="rang1"> <!-- ligne numero 1 des perso -->
			<ul>
				<li><a href="#iron"><img src="img/personnages/icon-ironman.png" alt="Iron Man"><h3>iron Man</h3></a></li>
				<li><a href="#captain"><img src="img/personnages/icon-cap.png" alt="Captain America"><h3>captain america</h3></a></li>
				<li><a href="#hulk"><img src="img/personnages/icon-hulk.png" alt="hulk"><h3>hulk</h3></a></li>
				<li><a href="#thor"><img src="img/personnages/icon-thor.png" alt="Thor"><h3>thor</h3></a></li>
			</ul>
		</article> <!-- fin de la ligne --> 
		<article class="rang2"> <!-- ligne numero 2 des perso -->
			<ul>
				<li><a href="#fury"><img src="img/personnages/icon-fury.png" alt="Fury"><h3>fury</h3></a></li>
				<li><a href="#hawk"><img src="img/personnages/icon-hawkeye.png" alt="Hawkeye"><h3>hawkeye</h3></a></li>
				<li><a href="#black"><img src="img/personnages/icon-widow.png" alt="hulk"><h3>widow</h3></a></li>
				<li><a href="#scarlet"><img src="img/personnages/icon-witch.png" alt="Witch"><h3>witch</h3></a></li>
				<li><a href="#vif"><img src="img/personnages/icon-silver.png" alt="Quicksilver"><h3>quicksilver</h3></a></li>
				<li><a href="#ultron"><img src="img/personnages/icon-ultron.png" alt="ultron"><h3>Ultron</h3></a></li>
			</ul>
		</article> <!-- ligne numero 1 des perso -->
	
	</section>
	<br/>
	<section id="personnages">
        <div id="iron"><?php include('personnages pages/iron-man.php');?></div>
        <div id="captain"><?php include('personnages pages/captain-america.php');?></div>
        <div id="hulk"><?php include('personnages pages/hulk.php');?></div>
        <div id="thor"><?php include('personnages pages/thor.php');?></div>
        <div id="fury"><?php include('personnages pages/nick-fury.php');?></div>
        <div id="hawk"><?php include('personnages pages/hawk-eye.php');?></div>
        <div id="black"><?php include('personnages pages/black-widow.php');?></div>
        <div id="scarlet"><?php include('personnages pages/scarlet-witch.php');?></div>
        <div id="vif"><?php include('personnages pages/vif-argent.php');?></div>
        <div id="ultron"><?php include('personnages pages/ultron.php');?></div>
	</section>
	</div><!-- fin container -->
</body>
</html>