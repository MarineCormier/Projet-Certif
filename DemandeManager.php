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

    $q = $this->_db->prepare("INSERT INTO demande(libele, datedemande, departement) VALUES (:libele, :datedemande, :departement)");

    $q->bindValue(':libele', $demande->get_libele());
    $q->bindValue(':datedemande', $demande->get_datedemande());
    $q->bindValue(':departement', $demande->get_departement());
     $q->execute();

  }
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
};

  