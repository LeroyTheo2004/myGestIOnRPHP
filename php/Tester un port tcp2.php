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
<h1 class="w3-jumbo w3-animate-top">Outils réseau</h1>
<hr class="w3-border-grey" style="margin:auto;width:40%">
<div class="w3-padding-32">
<div class="w3-container w3-center w3-large">
<?php
$adresseip = $_POST['IP'];
$port = $_POST['TCP'];

$output = shell_exec("nmap -p $port -v $adresseip |grep 'open' |wc -l");
$res = intval(trim($output));

if (!filter_var($adresseip, FILTER_VALIDATE_IP)) {
    echo '<span style="color:white">Adresse IP invalide. Veuillez recommencer le formulaire.</span>';
    echo '<p><input type="button" onclick="window.location.href = \'Tester un port tcp.php\';" class="w3-border w3-button w3-text-white" value="Retour au formulaire"/></p>';
} elseif (!isset($port)) {
    echo "Le numéro de port n'a pas été spécifié.";
    $res = 0;
    echo '<p><input type="button" onclick="window.location.href = \'Tester un port tcp.php\';" class="w3-border w3-button w3-text-white" value="Retour au formulaire"/></p>';
} elseif ($port < 1 || $port > 65535) {
    echo "Le numéro de port saisi n'est pas valide. Veuillez réessayer.";
    $res = 0;
    echo '<p><input type="button" onclick="window.location.href = \'Tester un port tcp.php\';" class="w3-border w3-button w3-text-white" value="Retour au formulaire"/></p>';
} elseif ($res == 2) {
    echo '<span style="color:white">Le port TCP est ouvert sur l\'adresse</span>';
} else {
    echo '<span style="color:white">Le port TCP n\'est pas ouvert sur l\'adresse</span>';
}
?>

<p>
<input type="button" onclick="window.location.href = 'Outils réseau.php';" class="w3-border w3-button w3-text-white" value="Retour menu outils réseau"/>
</p>
</div>
</div>
</div>
</div>
</div>
</body>
</html> 
