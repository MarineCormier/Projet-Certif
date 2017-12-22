<!DOCTYPE html>
<html>
<head>
	<title>Immat'Pro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet"> 
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<?php

include('config/dev.php');
require('Vehicule.php')
?>
<?php

session_start(); 

?>

<body>

	<form action="api.php" method="post">

		<p>Démarche : 
			<select type="text" name="demande" value="demande">
				<?php
			while ($demarche = $vehiculeDemarche->fetch()){ ?>
			<option <?php 
						if (isset($_SESSION['demande'])) {
							if ($demarche['idDemarche'] == $_SESSION['demande']) {

								echo "selected";
							}
						} ?> value="<?php echo $demarche['idDemarche'];?>"> <?php echo $demarche['idDemarche']; ?> </option> <?php } ?>
			</select>
		</p>

		
		<p>Type du véhicule : 
			<select name="type" value="type">
				<?php
				for($i=0;$i<count($vehiculeTypes); $i++){
					$type = $vehiculeTypes[$i];
					?> <option <?php
					if (isset($_SESSION['type'])) { 
						if($i == $_SESSION['type']) {
							echo "selected";
						}
					}
					?> value="<?php echo $i; ?>"><?php echo $type; ?></option>
					<?php } ?>
				</select>
			</p>


		<p>Département du domicile : 
			<select type="number" name="departement" value="departement">
				<?php
			while ($donnee = $vehiculeDepartement->fetch()){ ?>
			<option <?php 
						if (isset($_SESSION['departement'])) {
							if ($donnee['departement_code'] == $_SESSION['departement']) {

								echo "selected"; 
							}
						} ?> value="<?php echo $donnee['departement_code'];?>"> <?php echo $donnee['departement_code']. ' ' .$donnee['departement_nom']; ?> </option> <?php } ?>
			</select>
		</p>
			

			<p>Modele du véhicule : <select name="modele" value="modele" required>
				<option><?php echo $_SESSION['modele'] ?></option>
				<option value="RENAULT"> RENAULT </option><option value="CITROEN"> CITROEN </option><option value="PEUGEOT"> PEUGEOT </option><option value="FIAT"> FIAT </option><option value="MERCEDES"> MERCEDES </option><option value="">----------------------------</option><option value="ABARTH">ABARTH</option><option value="AC">AC</option><option value="ac cobra">AC COBRA</option><option value="ACREA">ACREA</option><option value="AIXAM">AIXAM</option><option value="AIXAM PRO">AIXAM PRO</option><option value="ALFA ROMEO">ALFA ROMEO</option><option value="AUDI">AUDI</option><option value="APRILIA">APRILIA</option><option value="ASTON MARTIN">ASTON MARTIN</option><option value="BENELLI">BENELLI</option><option value="BETA">BETA</option><option value="BIMOTA">BIMOTA</option><option value="BMW">BMW</option><option value="BUELL">BUELL</option><option value="CAGIVA">CAGIVA</option><option value="CHATENET">CHATENET</option><option value="CHRYSLER">CHRYSLER</option><option value="CITROEN">CITROEN</option><option value="COMARTH">COMARTH</option><option value="COURB">COURB</option><option value="DACIA">DACIA</option><option value="DANGEL">DANGEL</option><option value="DE LOREAN">DE LOREAN</option><option value="DE TOMASO">DE TOMASO</option><option value="DKW">DKW</option><option value="DODGE">DODGE</option><option value="DAELIM">DAELIM</option><option value="DERBI">DERBI</option><option value="DUCATI">DUCATI</option><option value="DODGE">DODGE</option><option value="DONKERVOORT">DONKERVOORT</option><option value="DS">DS</option><option value="DUE">DUE</option><option value="ERAD">ERAD</option><option value="EXCALIBUR">EXCALIBUR</option><option value="EDUARD">EDUARD</option><option value="FAUTRAS">FAUTRAS</option><option value="FERRARI">FERRARI</option><option value="FIAT">FIAT</option><option value="FORD">FORD</option><option value="GAC GONOW">GAC GONOW</option><option value="GAS GAS">GAS GAS</option><option value="GG">GG</option><option value="GILERA">GILERA</option><option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option><option value="HEADBANGER">HEADBANGER</option><option value="HM">HM</option><option value="HONDA">HONDA</option><option value="HYUNDAI">HYUNDAI</option><option value="HUSABERG">HUSABERG</option><option value="HUSQVARNA">HUSQVARNA</option><option value="HYOSUNG">HYOSUNG</option><option value="INDIAN">INDIAN</option><option value="ISUZU">ISUZU</option><option value="IVECO">IVECO</option><option value="JEEP">JEEP</option><option value="JDM SIMPA">JDM SIMPA</option><option value="Jinlun">Jinlun</option><option value="KAWASAKI">KAWASAKI</option><option value="KEEWAY">KEEWAY</option><option value="KNIEVEL">KNIEVEL</option><option value="KTM">KTM</option><option value="KYMCO">KYMCO</option><option value="KIA">KIA</option><option value="LADA">LADA</option><option value="LAMBORGHINI">LAMBORGHINI</option><option value="LANCIA">LANCIA</option><option value="LAND ROVER">LAND ROVER</option><option value="LEONART">LEONART</option><option value="LEXUS">LEXUS</option><option value="LIGIER">LIEBHERR</option><option value="MAN">MAN</option><option value="MAZDA">MAZDA</option><option value="MASH">MASH</option><option value="MATRA">MATRA</option><option value="MBK">MBK</option><option value="MCCORMICK">MCCORMICK</option><option value="MONTESA">MONTESA</option><option value="MOTO GUZZI">MOTO GUZZI</option><option value="MOTO MORINI">MOTO MORINI</option><option value="MOTRAC">MOTRAC</option><option value="MV AGUSTA">MV AGUSTA</option><option value="MZ">MZ</option><option value="MEGA">MEGA</option><option value="MERCEDES">MERCEDES</option><option value="MINI">MINI</option><option value="MINI MOKE">MINI MOKE</option><option value="MITSUBISHI">MITSUBISHI</option><option value="NISSAN">NISSAN</option><option value="OPEL">OPEL</option><option value="PEUGEOT">PEUGEOT</option><option value="PIAGGIO">PIAGGIO</option><option value="PORSCHE">PORSCHE</option><option value="RENAULT">RENAULT</option><option value="REWACO">REWACO</option><option value="RIEJU">RIEJU</option><option value="ROVER">ROVER</option><option value="ROYAL ENFIELD">ROYAL ENFIELD</option><option value="SANTANA">SANTANA</option><option value="SATELLITE">SATELLITE</option><option value="SEAT">SEAT</option><option value="SKODA">SKODA</option><option value="SMART">SMART</option><option value="SHERCO">SHERCO</option><option value="SKY TEAM">SKY TEAM</option><option value="SUBARU">SUBARU</option><option value="SUZUKI">SUZUKI</option><option value="SWM">SWM</option><option value="SYM">SYM</option><option value="SSANGYONG">SSANGYONG</option><option value="TOYOTA">TOYOTA</option><option value="TRIGANO">TRIGANO</option><option value="TM">TM</option><option value="TNT MOTOR">TNT MOTOR</option><option value="TOMOS">TOMOS</option><option value="TRIUMPH">TRIUMPH</option><option value="VAN HOOL">VAN HOOL</option><option value="VAX">VAX</option><option value="VEZEKO">VEZEKO</option><option value="VELOSOLEX">VELOSOLEX</option><option value="VOLKSWAGEN">VOLKSWAGEN</option><option value="VOLVO">VOLVO</option><option value="WEYTENS">WEYTENS</option><option value="YAMAHA">YAMAHA</option><option value="AUTRE">AUTRE</option>
			</select></p>


			<p>Energie : <select name="energie" value="energie">
				<option <?php 
						if (isset($_SESSION['energie'])) { 
						if($i == $_SESSION['energie']) {
							echo "selected"; {

								echo "selected"; 
							}
						} ?> value="<?php echo $_SESSION['energie'];?>"> <?php echo $_SESSION['energie']; ?> </option> <?php } ?>
			<option value=1>GO/ES</option><option value=2>EL</option>
				<option value=3>GH/GL/EH</option>
				<option value=4>GPL/GNV</option>
				<option value=5>Superéthanol</option>
				<option value=6>Biocarburants</option></p>
			</select>


			<p>CV (De 0 à 14): <input type="number" name="cv" value="<?php echo $_SESSION['cv']?>"required/></p>

			<p>Immatriculation (ex : CA-758-HT): <input type="text" name="immatriculation" value="<?php echo $_SESSION['immatriculation']?>" required/></p>

			<p>Date de mise en circulation (Format 07/12/2012): <input type="date" name="circulation" value="<?php echo $_SESSION['circulation']?>" required/></p>

			<p>Co2 : <input type="number" name="co2" value="<?php echo $_SESSION['co2']?>"/></p>

			<p>poids : <input type="number" name="ptac" value="<?php print_r($_SESSION['ptac'])?>" required/></p>

			<p>Valider<input type="submit" value="OK"></p>

		</form>

	</p></p></p></form>

</body></html>

</html>

