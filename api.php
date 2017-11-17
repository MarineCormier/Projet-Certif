<!DOCTYPE html>
<html>
<head>
	<title>Certificat d'immatriculation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php
$url = "https://www.cartegrisefactory.fr/api/getPrice";

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "demande=".$_POST['demande']."&type=".$_POST['type']."&departement=".$_POST['departement']."&modele=".$_POST['modele']."&energie=".$_POST['energie']."&cv=".$_POST['cv']."&immatriculation=".$_POST['immatriculation']."&circulation=".$_POST['circulation']."&co2=".$_POST['co2']."&ptac=".$_POST['ptac']);


	$prixCg = curl_exec($ch);

	if(curl_errno($ch)==28) { 
		//votre action en cas de timeout
	}

	curl_close($ch);
  ?>

<p>Le montant de votre carte grise sera de <?php echo $prixCg-29.90; ?></p>




</body>
</html>


