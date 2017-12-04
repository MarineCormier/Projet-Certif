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
class Demande {
	private $_id;
	private $_libele;
	private $_datedemande;

	public function __construct($array){
		$this->hydrate($array);
	}

	public function hydrate(array $donnees)
	{

	  foreach ($donnees as $key => $value)

	  {
	    $method = 'set_'.lcfirst($key);

		if (method_exists($this, $method))

	    {
	    	$this->$method($value);
	    } 

	  }
	}



	public function get_id(){
		return $this->_id;
	}

	public function set_id($_id){
		$this->_id = $_id;
	}

	public function get_libele(){
		return $this->_libele;
	}

	public function set_libele($_libele){
		$this->_libele = $_libele;
	}

	public function get_datedemande(){
		return $this->_datedemande;
	}

	public function set_datedemande($_datedemande){
		$this->_datedemande = $_datedemande;
	}
}

?>

<?php

$date = date("Y-m-d");
echo $date;

class DemandeManager
{
  private $_db;
  public function __construct($db)
  {
    $this->setDb($db);
  }
  public function add(Demande $demande)

  {

    $q = $this->_db->prepare("INSERT INTO demande(libele, datedemande) VALUES (:libele, :datedemande)");

    $q->bindParam(':libele', $demande->get_libele());
    $q->bindParam(':datedemande', $demande->get_datedemande());

    $q->execute();

  }
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
};

$demande = new Demande([
  'libele' => $_POST['demande'],
  'datedemande' => $date,
]);


$db2 = new PDO('mysql:host=localhost;dbname=immatpro', 'root', 'facesimplon');
$manager2 = new DemandeManager($db2);
    
$manager2->add($demande);

?>



<?php

class Vehicule {
	private $_id;
	private $_type;
	private $_modele;
	private $_energie;
	private $_cv;
	private $_immatriculation;
	private $_circulation;
	private $_co2;
	private $_ptac;


	public function __construct($array){
		$this->hydrate($array);
	}

	public function hydrate(array $donnees)
	{

	  foreach ($donnees as $key => $value)

	  {
	    $method = 'set_'.lcfirst($key);

		if (method_exists($this, $method))

	    {
	    	$this->$method($value);
	    } 

	  }
	}
	public function get_id(){
		return $this->_id;
	}
	public function set_id($_id){
		$this->_id = $_id;
	}
	public function get_type(){
		return $this->_type;
	}
	public function set_type($_type){
		$this->_type = $_type;
	}
	public function get_modele(){
		return $this->_modele;
	}
	public function set_modele($_modele){
		$this->_modele = $_modele;
	}
	public function get_energie(){
		return $this->_energie;
	}
	public function set_energie($_energie){
		$this->_energie = $_energie;
	}
	public function get_cv(){
		return $this->_cv;
	}
	public function set_cv($_cv){
		$this->_cv = $_cv;
	}
	public function get_immatriculation(){
		return $this->_immatriculation;
	}
	public function set_immatriculation($_immatriculation){
		$this->_immatriculation = $_immatriculation;
	}
	public function get_circulation(){
		return $this->_circulation;
	}
	public function set_circulation($_circulation){
		$this->_circulation = $_circulation;
	}
	public function get_co2(){
		return $this->_co2;
	}
	public function set_co2($_co2){
		$this->_co2 = $_co2;
	}
	public function get_ptac(){
		return $this->_ptac;
	}
	public function set_ptac($_ptac){
		$this->_ptac = $_ptac;
	}
}
?>


<?php

class VehiculeManager
{
  private $_db;
  public function __construct($db)
  {
    $this->setDb($db);
  }
  public function add(Vehicule $vehicule)

  {

    $r = $this->_db->prepare("INSERT INTO vehicules(type, modele, energie, cv, immatriculation, circulation, co2, ptac) VALUES (:type, :modele, :energie, :cv, :immatriculation, :circulation, :co2, :ptac)");

    $r->bindParam(':type', $vehicule->get_type());
    $r->bindParam(':modele', $vehicule->get_modele());
    $r->bindParam(':energie', $vehicule->get_energie());
    $r->bindParam(':cv', $vehicule->get_cv());
    $r->bindParam(':immatriculation', $vehicule->get_immatriculation());
    $r->bindParam(':circulation', $vehicule->get_circulation());
    $r->bindParam(':co2', $vehicule->get_co2());
    $r->bindParam(':ptac', $vehicule->get_ptac());


    $r->execute();

  }
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
};

$vehicule = new Vehicule([
  'type' => $_POST['type'],
  'modele' => $_POST['modele'],
  'energie' => $_POST['energie'],
  'cv' => $_POST['cv'],
  'immatriculation' => $_POST['immatriculation'],
  'circulation' => $_POST['circulation'],
  'co2' => $_POST['co2'],
  'ptac' => $_POST['ptac']
]);
error_log ($vehicule->get_type());

$db = new PDO('mysql:host=localhost;dbname=immatpro', 'root', 'facesimplon');
$manager = new VehiculeManager($db);
    
$manager->add($vehicule);

?>


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





</body>
</html>


