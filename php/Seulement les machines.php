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
table {
    border-collapse: collapse;
}
td, th {
    border: 1px solid white;
    padding: 8px;
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
// informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "eleve";
$mot_de_passe = "btsinfo";
$base_de_donnees = "bdd";

// connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// vérification de la connexion
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// requête SQL
$sql = "SELECT nom, adMAC, adIP, CIDR FROM TypeE, Equipement WHERE Equipement.idT=TypeE.id AND libelle='Machine'";

// exécution de la requête SQL
$resultat = mysqli_query($connexion, $sql);

// affichage des résultats
if (mysqli_num_rows($resultat) > 0) {
    echo "<table>";
    echo "<tr><th>Nom</th>            <th>Adresse MAC</th>    <th>Adresse IP</th>    <th>CIDR</th></tr>";
    while ($ligne = mysqli_fetch_assoc($resultat)) {
        echo "<tr>";
        echo "<td>" . $ligne["nom"] . "</td>";
        echo "<td>" . $ligne["adMAC"] . "</td>";
        echo "<td>" . $ligne["adIP"] . "</td>";
        echo "<td>" . $ligne["CIDR"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo"<br>";
} else {
    echo "Aucun résultat trouvé.";
}

// fermeture de la connexion à la base de données
mysqli_close($connexion);
?>
<input type="button" onclick="window.location.href = 'Consulter.php';" class="w3-border w3-button w3-text-white" value="Retour menu consulter"/>
</div>
</div>
</div>
</div>
</div>
</body>
</html> 
