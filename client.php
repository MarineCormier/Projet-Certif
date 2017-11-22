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
$prenom = $_POST['prenom'];
print("<center>Bonjour $prenom </center>");

try
{
$bdd = new PDO('mysql:host=localhost;dbname=immatpro', 'root', 'facesimplon');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO client(prenom) VALUES(:prenom)');
$req->execute(array(
':prenom' => $_POST['prenom']
));

echo 'Prénom enregistré !';


?>


<h2> Se connecter :</h2>

<p>E-mail : <input type="email" name="email" value="" required/></p>

<p>Mot de Passe : <input type="password" name="mdp" value="" minlength="8" required/></p>

<p>Inscription<input type="submit" value="OK"></p>


</body></html>