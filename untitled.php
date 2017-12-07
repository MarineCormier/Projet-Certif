
<?php
$url = "https://www.cartegrisefactory.fr/api/getPrice";
	
	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "demande=".$demande."&type=".$type."&departement=".$departement."&modele=".$modele."&energie=".$energie."&cv=".$cv."&immatriculation=".$immatriculation."&circulation=".$circulation."&co2=".$co2."&ptac=".$ptac);


	$prixCg = curl_exec($ch);

	if(curl_errno($ch)==28) { 
		//votre action en cas de timeout
	}

	curl_close($ch);
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