<!DOCTYPE html>
<html>
<head>
	<title>Immat'Pro Inscription</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php
	
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$adresse = $_POST['adresse'];
	$cdp = $_POST['cdp'];
	$ville = $_POST['ville'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$mdp = $_POST['mdp'];

?>

<p>Merci pour votre envoi, pour cloturer votre démarche, veuillez remplir le formulaire d'inscription :</p>

<form action="client.php">
<input type="submit" value="Déja Client ?">
</form>

<form action="client.php" method="post">

<p>Nom : <input type="text" name="nom" value="" required/></p>
<p>Prénom : <input type="text" name="prenom" value="" required/></p>
<p>Adresse : <input type="text" name="adresse" value="" required/></p>
<p>Code postal : <input type="text" name="codep" value="" required/></p>
<p>Ville : <input type="text" name="ville" value="" required/></p>
<p>Numero de téléphone : <input type="text" name="tel" value="" required/></p>

<p>Adresse E-mail : <input type="email" name="email" value="" required/></p>

<p>Confirmation E-mail : <input type="email" name="email" value="" required/></p>

<p>Mot de Passe : <input type="password" name="mdp" value="" minlength="8" required/></p>

<p>Confirmation mot de passe : <input type="password" name="mdp" value="" minlength="8" required/></p>

 <p>Inscription<input type="submit" value="OK"></p>
</form>

</body>
</html>
