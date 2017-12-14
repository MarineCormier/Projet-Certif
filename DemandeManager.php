<?php
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