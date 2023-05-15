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
<form class="w3-container" method="post" action="Ajouter2.php" onsubmit="return validateForm()">
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
<script>
function validateIPaddress(ipaddress) {
  // Vérifie si l'adresse IP est dans un format valide
  var regex = /^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$/;
  if (!regex.test(ipaddress)) {
    return false;
  }

  // Vérifie si l'adresse IP est une adresse privée
  var private_ips = [
    /^0\./,
    /^127\.0\.0\.1/,
    /^10\./,
    /^172\.(1[6-9]|2[0-9]|3[0-1])\./,
    /^192\.168\./,
    /^169\.254\./,
    /^::1$/,
    /^fe80::/,
  ];

  for (var i = 0; i < private_ips.length; i++) {
    if (private_ips[i].test(ipaddress)) {
      return false;
    }
  }

  // Si l'adresse IP est valide et n'est pas privée, retourne vrai
  return true;
}

function validateForm() {
  var ip = document.forms["myForm"]["IP"].value;
  if (!validateIPaddress(ip)) {
    alert("L'adresse IP saisie n'est pas valide.");
    return false;
  }
}
</script>
<p>
<input class="w3-border w3-button w3-text-white" type="submit" value="Valider"/>
</p>
<input type="button" onclick="window.location.href = 'Gestion du parc.php';" class="w3-border w3-button w3-text-white" value="Retour au menu gestion du parc"/>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html> 
