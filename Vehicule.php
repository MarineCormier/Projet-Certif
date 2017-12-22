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
	public function set_id($id){
		$this->_id = $id;
	}
	public function get_type(){
		return $this->_type;
	}
	public function set_type($type){
		if(is_numeric($type) && preg_match("/^[0-9]{1,2}$/", $type)) {
			$this->_type = $type;
		}
		else {
			$this->errors[]=" Invalide type defined on vehicule";
		}
		return $this;
}

	public function get_modele(){
		return $this->_modele;
	}
	public function set_modele($modele){
		if(is_string($modele) && preg_match("/^[A-Z]{1,50}$/", $modele)) {
			$this->_modele = $modele;

		}
		else {
			$this->errors[]="Invalid modele defined on vehicule";
		}
		return $this;
}

		public function get_energie(){
			return $this->_energie;
		}
		public function set_energie($energie){
			if(is_numeric($energie) && preg_match("/^[0-9]{1,6}$/", $energie)) {
				$this->_energie = $energie;
			}
			else {
				$this ->errors[]="Invalid energie defined on vehicule";
			}
			return $this;
}

	public function get_cv(){
		return $this->_cv;
	}
	public function set_cv($cv){
		if(is_numeric($cv) && preg_match("/^[0-9]{1,2}$/", $cv)){
			$this->_cv = $cv;
		}
		else {
			$this->errors[]="Invalid cv defined on vehicule";
		}
		return $this;
}

		public function get_immatriculation(){
			return $this->_immatriculation;
		}
		public function set_immatriculation($immatriculation){
			if(is_string($immatriculation) && preg_match("/^[A-Z]{2}-[0-9]{3}-[A-Z]{2}$/", $immatriculation)){
				$this->_immatriculation = $immatriculation;
			}
		else {
			$this->errors[]="Invalid immatriculation on vehicule";
		}
		return $this;
		error_log($errors);
}

	public function get_circulation(){
		return $this->_circulation;
	}
	public function set_circulation($circulation){
		if(is_string($circulation) && preg_match('/^[0-9]{2}-[0-9]{2}-[0-9]{4}$/', $circulation)){
		$this->_circulation = $circulation;
	}
	else {
		$this->errors[]="Invalid circulation on vehicule";
	}
	return $this;
}


	public function get_co2(){
		return $this->_co2;
	}
	public function set_co2($co2){
		if(is_numeric($co2) && preg_match('/^[0-9]{2,3}$/', $co2)){
			$this->_co2 = $co2;
	}

	else { 
		$this->errors[]="Invalid co2 on vehicule";
}
return $this;

}
	public function get_ptac(){
		return $this->_ptac;
	}
	public function set_ptac($ptac){
		if (is_numeric($ptac) && preg_match('/^[0-9]{3,4}$/', $ptac)){
				$this->_ptac = $ptac;
	}
		else {
			$this->errors[]="Invalid ptac on vehicule";
		}
		return $this;
	}



	public function isValid(){
		return count($this->errors)==0;

	}
	public function getErrors(){
		return $this->errors;
	}

	public function removeErrors()
	{
		return $this->errors;

	}
	public function setErrors(PDO $array){
		$this->errors = $errors;
	}
};









