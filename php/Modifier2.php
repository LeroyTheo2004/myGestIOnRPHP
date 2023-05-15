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
<?php
$id = $_POST['Id'];
$nom = $_POST['Nom'];
$mac = $_POST['MAC'];
$ip = $_POST['IP'];
$cidr = $_POST['CIDR'];
$type = $_POST['Type'];

$serveur = "localhost";
$utilisateur = "eleve";
$mot_de_passe = "btsinfo";
$base_de_donnees = "bdd";

$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Validate the MAC address
if (!preg_match('/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/', $mac)) {
    echo '<span style="color:white">Adresse MAC invalide. Veuillez recommencer le formulaire.</span>';
    echo '<p><input type="button" onclick="window.location.href = \'Modifier.php\';" class="w3-border w3-button w3-text-white" value="Retour au formulaire"/></p>';
} elseif (!filter_var($ip, FILTER_VALIDATE_IP)) {
    echo '<span style="color:white">Adresse IP invalide. Veuillez recommencer le formulaire.</span>';
    echo '<p><input type="button" onclick="window.location.href = \'Modifier.php\';" class="w3-border w3-button w3-text-white" value="Retour au formulaire"/></p>';
} else {
    $sql = "UPDATE Equipement SET nom='$nom', adMAC='$mac', adIP='$ip', CIDR=$cidr, idT=$type WHERE id=$id";
    if (mysqli_query($connexion, $sql)) {
        echo '<span style="color:white">Les modifications ont été intégrées à la base de données.</span>';
        echo '<p><input type="button" onclick="window.location.href = \'Gestion du parc.php\';" class="w3-border w3-button w3-text-white" value="Retour au menu gestion du parc"/></p>';
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($connexion);
        echo '<p><input type="button" onclick="window.location.href = \'Modifier.php\';" class="w3-border w3-button w3-text-white" value="Retour au formulaire"/></p>';
    }
}
mysqli_close($connexion);
?>
</div>
</div>
</div>
</div>
</div>
</body>
</html> 
