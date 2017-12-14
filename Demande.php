<?php
class Demande {
	private $_id;
	private $_libele;
	private $_datedemande;
	private $_departement;
	private $errors;

	public function __construct($array){
		$this->errors = [];
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

	public function __toString(){
		return "Demande [id:".$this->_id.", libele:".$this->_libele."]";
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

	public function set_libele($libele){
		if(is_numeric($libele) && preg_match("/^[0-5]{1}$/", $libele)) {
			$this->_libele = $libele; 
	}
		else {
		$this->errors[]=" Invalid demand defined on demande";
		}
		return $this;
}

	public function get_datedemande(){
		return $this->_datedemande;
	}

	public function set_datedemande($datedemande){
		if(is_numeric($datedemande)){
			$this->_datedemande = $datedemande;
	}
		else {
			$this->errors[]=" Invalid date defined on demande";
		}
		return $this;
}
	public function get_departement(){
		return $this->_departement;
	}
	public function set_departement($departement){
		if(is_numeric($departement) && preg_match('/^[0-9]{2,3}$/',$departement)){
			$this->_departement = $departement;
		}
		else{
			$this->errors[]=" Invalid Departement defined on vehicule";
		}
		return $this;
	}



	public function isValid(){
		return count($this->errors)==0;
	}
	public function getErrors(){
		return $this->errors;
	}
}