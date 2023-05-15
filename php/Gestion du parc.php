<!DOCTYPE html>
<html>
<head>
<title>MyGestIOnR - Gestion du parc</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('fond.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body>
<div class="bgimg w3-display-container w3-text-white">
<div onclick="window.location.href = 'Menu principal.php';" class="w3-display-topleft w3-padding-large w3-xlarge">MyGestIOnR</div>
<div class="w3-display-middle">
<h1 class="w3-jumbo w3-animate-top">Gestion du parc</h1>
<hr class="w3-border-grey" style="margin:auto;width:40%">
<div class="w3-padding-32">
<div class="w3-container w3-center w3-large">
	<p>
	<input type="button" onclick="window.location.href = 'Consulter.php';" class="w3-border w3-button w3-text-white" value="Consulter les données"/>
	</p>
	<p>
	<input type="button" onclick="window.location.href = 'Ajouter.php';" class="w3-border w3-button w3-text-white" value="Ajouter des données"/>
	</p>
	<p>
	<input type="button" onclick="window.location.href = 'Supprimer.php';" class="w3-border w3-button w3-text-white" value="Supprimer des données"/>
	</p>
	<p>
	<input type="button" onclick="window.location.href = 'Modifier.php';" class="w3-border w3-button w3-text-white" value="Modifier des données"/>
	</p>
    <input type="button" onclick="window.location.href = 'Menu principal.php';" class="w3-border w3-button w3-text-white" value="Retour menu principal"/>
	</div>
</div>
</div>
</div>
</div>
</body>
</html> 
