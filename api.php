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
	
	$demande = $_POST['demande'];
	$type = $_POST['type'];
	$departement = $_POST['departement'];
	$modele = $_POST['modele'];
	$energie = $_POST['energie'];
	$cv = $_POST['cv'];
	$immatriculation = $_POST['immatriculation'];
	$circulation = $_POST['circulation'];
	$co2 = $_POST['co2'];
	$ptac = $_POST['ptac'];
	$ci = $_POST['ci'];
	$dc = $_POST['dc'];
	$cgr = $_POST['cgr'];
	$cgv = $_POST['cgv'];
	$pi = $_POST['pi'];
	$jd = $_POST['jd'];
	$mandat = $_POST['mandat'];
	$cc = $_POST['cc'];

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

	if ($demande == "1") 
	{
		echo "Votre demande de changement de titulaire";
	}
	if ($demande == "2") 
	{
		echo "Votre demande d'immatriculation de votre véhicule neuf";
	}
	if ($demande == "3") 
	{
		echo "Votre demande de duplicata";
	}
	if ($demande == "4") 
	{
		echo "Votre demande de changement d'addresse";
	}

	if ($demande == "5") 
	{
		echo "Votre demande de mofication de changement d'état matrimonial";
	}
  ?>

<form action="inscription.php" method="post">

<p>Le montant de votre carte grise sera de <?php echo $prixCg; ?></p>

Commencer la démarches :

<p><label  for="files" > Certificat Immatriculation : (PDF) 
    <input type="file" name="ci" required></label></p>

<?php if ($demande != (3 || 4)){ ?>
<P><label for="files"> Déclaration de cession : (PDF) </label>
    <input type="file" name="dc" required></P>
<?php } ?>

<?php if ($demande != (2)) { ?>
<P><label for="files"> Carte Grise Recto: </label></P>
    <input type="file" name="cgr" required>

<P><label for="files"> Carte Grise Verso: </label></P>
    <input type="file" name="cgv" required>
    <?php } ?>

<P><label for="files"> Pièce d'identité : </label></P>
    <input type="file" name="pi" required>

<P><label for="files"> Justificatif de domicile : </label></P>
    <input type="file" name="jd" required>

<P><label for="files"> Mandat: </label></P>
    <input type="file" name="mandat" required>

<?php if ($demande == (2)){ ?>
<P><label for="files"> Certificat de conformité : (PDF) </label>
    <input type="file" name="cc" required></P>
<?php } ?>

 <p>Valider<input type="submit" value="OK"></p>

 </form>

 <?php echo $jd; ?>




</body>
</html>


