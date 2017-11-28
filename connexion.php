
<!DOCTYPE html>
<html>
<head>
	<title>Immat'Pro Connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php 

$bdd = new PDO('mysql:host=localhost;dbname=immatpro', 'root', 'facesimplon');
$req = $bdd->prepare('SELECT name FROM client WHERE email = :email AND mdp = :mdp');
$req->execute(array(
    'email' => $email,
    'mdp' => $mdp));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    echo 'Vous êtes connecté !';
}


?>
</body></html>