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

if ($_POST['mdp'] == $_POST['mdp2']) 
	{
		echo "Votre demande de changement de titulaire";
	}

?>


<?php
$db_dsn = "mysql:dbname=immatpro;host=localhost";
$db_user = "root";
$db_password = "facesimplon";
$connexion = new PDO($db_dsn, $db_user, $db_password);



	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$adresse = $_POST['adresse'];
	$cdp = $_POST['cdp'];
	$ville = $_POST['ville'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$mdp = $_POST['mdp'];



$connexion->exec("INSERT INTO client(nom, prenom, adresse, ville, code_postal, email, tel, mdp) VALUES ('$nom', '$prenom', '$adresse', '$ville', '$cdp', '$email', '$tel', '$mdp')");

unset($connexion);
?>


<h2> Se connecter :</h2>

<p>E-mail : <input type="email" name="email" value="" required/></p>

<p>Mot de Passe : <input type="password" name="mdp" value="" minlength="8" required/></p>

<p>Inscription<input type="submit" value="OK"></p>


</body></html>