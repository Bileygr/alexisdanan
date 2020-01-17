<?php
class Utilisateur{
	private $id;
	private $nom;
	private $prenom;
	private $motdepasse;
	private $email;
	private $telephone;
	private $datedecreation;

	public function __construct($id, $nom, $prenom, $motdepasse, $email, $telephone, $datedecreation){
		$this->id = $id;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->motdepasse = $motdepasse;
		$this->email = $email;
		$this->telephone = $telephone;
		$this->datedecreation = $datedecreation;
	}

	public function getId(){
		return $this->id;
	}

	public function getNom(){
		return $this->nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function getMotdepasse(){
		return $this->motdepasse;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getTelephone(){
		return $this->telephone;
	}

	public function getDatedecreation(){
		return $this->datedecreation;
	}

	public function setId($id){
		$this->id = $id;
		return $this->id;
	}

	public function setNom($nom){
		$this->nom = $nom;
		return $this->nom;
	}

	public function setPrenom($prenom){
		$this->prenom = $prenom;
		return $this->prenom;
	}

	public function setMotdepasse($motdepasse){
		$this->motdepasse = $motdepasse;
		return $this->motdepasse;
	}

	public function setEmail($email){
		$this->email = $email;
		return $this->email;
	}

	public function setTelephone($telephone){
		$this->telephone = $telephone;
		return $this->telephone;
	}

	public function setDatedecreation($datedecreation){
		$this->datedecreation = $datedecreation;
		return $this->datedecreation;
	}
}
?>