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
  background-image: url('ok.jpg');
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
<form class="w3-container" method="post" action="Modifier2.php">
<p>
<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=bdd', 'eleve', 'btsinfo');

// Exécution de la requête SQL
$req = $bdd->query('SELECT Equipement.id, nom, adMAC, adIP, CIDR FROM TypeE, Equipement WHERE Equipement.idT=TypeE.id');

// Création de la balise select et ajout des options
echo '<select name="Id" id="Id"> <option value="">Quel élément voulez-vous modifier ?</option>';
while ($donnees = $req->fetch()) {
   echo '<option value="'.$donnees['id'].'">'.$donnees['id'].' - '.$donnees['nom'].' - '.$donnees['adMAC'].' - '.$donnees['adIP'].' - '.$donnees['CIDR'].'</option>';
}
echo '</select>';

// Fermeture de la connexion à la base de données
$req->closeCursor();
?>
</p>
  <p>
  <label class="w3-text-white">Nom</label>
  <input class="w3-input" type="text" name="Nom">
</p>
  <p>
  <label class="w3-text-white">Adresse MAC</label>
  <input class="w3-input" type="text" name="MAC">
</p>
  <p>
  <label class="w3-text-white">Adresse IP</label>
  <input class="w3-input" type="text" name="IP">
</p>
  <p>
  <label class="w3-text-white">Masque (CIDR)</label>
  <input class="w3-input" type="number" name="CIDR"
  min="1" max="32">
</p>
<p>
  <label for="Type">Type :</label>
<select name="Type" id="Type">
    <option value="">Choisissez le type</option>
    <option value="1">Machine</option>
    <option value="2">Switch</option>
    <option value="3">Serveur</option>
</select>
</p>
<p>
<input class="w3-border w3-button w3-text-white" type="submit" value="Valider"/>
</p>
</form>
<input type="button" onclick="window.location.href = 'Gestion du parc.php';" class="w3-border w3-button w3-text-white" value="Retour au menu gestion du parc"/>
</div>
</div>
</div>
</div>
</div>
</body>
</html> 
