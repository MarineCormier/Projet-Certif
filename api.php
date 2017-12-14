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
require('Demande.php');
require('DemandeManager.php');
require('Vehicule.php');
require('VehiculeManager.php');
include ('config/dev.php');
?>

<?php

$date = date("Y-m-d");
echo $date;



$demande = new Demande([
  'libele' => $_POST['demande'],
  'datedemande' => $date,
  // 'departement' => $_POST['departement']
]);


// FIXME
$db2 = new PDO('mysql:host=localhost;dbname=immatpro', 'root', 'facesimplon');
$manager2 = new DemandeManager($db2);
    
$manager2->add($demande);

?>

<?php


$vehicule = new Vehicule($_POST);

$db = new PDO('mysql:host=localhost;dbname=immatpro', 'root', 'facesimplon');
$manager = new VehiculeManager($db);
    
$manager->add($vehicule);

?>



<?php

	
	$ch = curl_init(API_CG_URL);

	curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, 1);


	$postFields = sprintf("demande=%s&type=%s&departement=%s&modele=%s&energie=%s&cv=%s&immatriculation=%s&circulation=%s&co2=%s&ptac=%s",
			$demande->get_libele(),
			$vehicule->get_type(),
			$demande->get_departement(),
			$vehicule->get_modele(),
			$vehicule->get_energie(),
			$vehicule->get_cv(),
			$vehicule->get_immatriculation(),
			$vehicule->get_circulation(),
			$vehicule->get_co2(),
			$vehicule->get_ptac()
			);


	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);


	$prixCg = curl_exec($ch)-($fraisdedossier);

	if(curl_errno($ch)==28) { 
	}

	curl_close($ch);


// if($verif_demande && $verif_type && $verif_ptac && $verif_co2 && $verif_circul && $verif_immat && $verif_cv && $verif_energie && $verif_modele && $verif_depart && $regex_depart == 1 && $regex_demande == 1 && $regex_depart == 1 && $regex_type == 1 && $regex_modele == 1 && $regex_energie == 1 && $regex_cv == 1 && $regex_immat == 1 && $regex_circul == 1 && $regex_co2 == 1 && $regex_ptac == 1){
// 	if ($demande == "1") 
// 	{
// 		echo "Votre demande de changement de titulaire";
// 	}
// 	if ($demande == "2") 
// 	{
// 		echo "Votre demande d'immatriculation de votre véhicule neuf";
// 	}
// 	if ($demande == "3") 
// 	{
// 		echo "Votre demande de duplicata";
// 	}
// 	if ($demande == "4") 
// 	{
// 		echo "Votre demande de changement d'addresse";
// 	}

// 	if ($demande == "5") 
// 	{
// 		echo "Votre demande de mofication de changement d'état matrimonial";
// 	}
// 	include 'untitled.html';
// }
// else {
	
// 	header('Location: tarifs-cg.php');
// }


  ?>







</body>
</html>


