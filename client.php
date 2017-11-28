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


class Clients {
	private $_id;
	private $_nom;
	private $_prenom;
	private $_adresse;
	private $_ville;
	private $_cdp;
	private $_email;
	private $_tel;
	private $_mdp;

	public function __construct($array){
		$this->hydrate($array);
	}

	public function hydrate(array $donnees)
	{

	  foreach ($donnees as $key => $value)

	  {
	    $method = 'set_'.lcfirst($key);
	    print_r($method);
	    //die();

		if (method_exists($this, $method))

	    {
	    	$this->$method($value);
	    } else {
	    	$this->$method($value);
	    }

	  }
	}
/*
  public function id() { return $this->_id; }
  public function nom() { return $this->_nom; }
  public function prenom() { return $this->_prenom; }
  public function adresse() { return $this->_adresse; }
  public function ville() { return $this->_ville; }
  public function cdp() { return $this->_cdp; }
  public function email() { return $this->_email; }
  public function tel() { return $this->_tel; }
  public function mdp() { return $this->_mdp; }
*/

	public function get_id(){
		return $this->_id;
	}
	public function set_id($_id){
		$this->_id = $_id;
	}
	public function get_nom(){
		return $this->_nom;
	}
	public function set_nom($_nom){
		$this->_nom = $_nom;
	}
	public function get_prenom(){
		return $this->_prenom;
	}
	public function set_prenom($_prenom){
		$this->_prenom = $_prenom;
	}
	public function get_adresse(){
		return $this->_adresse;
	}
	public function set_adresse($_adresse){
		$this->_adresse = $_adresse;
	}
	public function get_ville(){
		return $this->_ville;
	}
	public function set_ville($_ville){
		$this->_ville = $_ville;
	}
	public function get_cdp(){
		return $this->_cdp;
	}
	public function set_cdp($_cdp){
		$this->_cdp = $_cdp;
	}
	public function get_email(){
		return $this->_email;
	}
	public function set_email($_email){
		$this->_email = $_email;
	}
	public function get_tel(){
		return $this->_tel;
	}
	public function set_tel($_tel){
		$this->_tel = $_tel;
	}
	public function get_mdp(){
		return $this->_mdp;
	}
	public function set_mdp($_mdp){
		$this->_mdp = $_mdp;
		}
	}
?>


<?php

class ClientsManager
{
  private $_db;
  public function __construct($db)
  {
    $this->setDb($db);
  }
  public function add(Clients $clients)

  {

    $q = $this->_db->prepare("INSERT INTO client(nom, prenom, adresse, ville, code_postal, email, tel, mdp) VALUES (:nom, :prenom, :adresse, :ville, :cdp, :email, :tel, :mdp)");

    $q->bindParam(':nom', $clients->get_nom());
    $q->bindParam(':prenom', $clients->get_prenom());
    $q->bindParam(':adresse', $clients->get_adresse());
    $q->bindParam(':ville', $clients->get_ville());
    $q->bindParam(':cdp', $clients->get_cdp());
    $q->bindParam(':email', $clients->get_email());
    $q->bindParam(':tel', $clients->get_tel());
    $q->bindParam(':mdp', $clients->get_mdp());


    $q->execute();

  }
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
};

$clients = new Clients([
  'nom' => $_POST['nom'],
  'prenom' => $_POST['prenom'],
  'adresse' => $_POST['adresse'],
  'ville' => $_POST['ville'],
  'cdp' => $_POST['cdp'],
  'email' => $_POST['email'],
  'tel' => $_POST['tel'],
  'mdp' => $_POST['mdp']
]);
error_log('toto');

$db = new PDO('mysql:host=localhost;dbname=immatpro', 'root', 'facesimplon');
$manager = new ClientsManager($db);
    
$manager->add($clients);

?>

<h2> Se connecter :</h2>

<p>E-mail : <input type="email" name="email" value="" required/></p>

<p>Mot de Passe : <input type="password" name="mdp" value="" minlength="8" required/></p>

<p>Inscription<input type="submit" value="OK"></p>


</body></html>