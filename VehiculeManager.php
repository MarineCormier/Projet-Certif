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