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

    $r->bindValue(':type', $vehicule->get_type());
    $r->bindValue(':modele', $vehicule->get_modele());
    $r->bindValue(':energie', $vehicule->get_energie());
    $r->bindValue(':cv', $vehicule->get_cv());
    $r->bindValue(':immatriculation', $vehicule->get_immatriculation());
    $r->bindValue(':circulation', $vehicule->get_circulation());
    $r->bindValue(':co2', $vehicule->get_co2());
    $r->bindValue(':ptac', $vehicule->get_ptac());


    $r->execute();
  }
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
};


