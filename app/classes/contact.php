<?php
class Contact{
    private $id;
    private $numeroderue;
    private $rue;
    private $codepostal;
    private $ville;
    private $telephonemobile;
    private $telephonefixe;
    private $fax;
    private $email;
    private $siteweb;

    public function __construct($id, $numeroderue, $rue, $codepostal, $ville, $telephonemobile, $telephonefixe, $fax, $email, $siteweb){
        $this->id = $id;
        $this->numeroderue = $numeroderue;
        $this->rue = $rue;
        $this->codepostal = $codepostal;
        $this->ville = $ville;
        $this->telephonemobile = $telephonemobile;
        $this->telephonefixe = $telephonefixe;
        $this->fax = $fax;
        $this->email = $email;
        $this->siteweb = $siteweb;
    }

    public function getId(){
        return $this->id;
    }

    public function getNumeroderue(){
        return $this->numeroderue;
    }

    public function getRue(){
        return $this->rue;
    }

    public function getCodepostal(){
        return $this->codepostal;
    }

    public function getVille(){
        return $this->ville;
    }

    public function getTelephonemobile(){
        return $this->telephonemobile;
    }

    public function getTelephonefixe(){
        return $this->telephonefixe;
    }

    public function getFax(){
        return $this->fax;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSiteweb(){
        return $this->siteweb;
    }

    public function setId($id){
        $this->id = $id;
        return $this->id;
    }

    public function setNumeroderue($numeroderue){
        $this->adresse = $adresse;
        return $this->adresse;
    }

    public function setRue($rue){
        $this->rue = $rue;
        return $this->rue;
    }

    public function setCodepostal($codepostal){
        $this->codepostal = $acodepostaldresse;
        return $this->codepostal;
    }

    public function setVille($ville){
        $this->ville = $ville;
        return $this->ville;
    }

    public function setTelephonemobile($telephonemobile){
        $this->telephonemobile = $telephonemobile;
        return $this->telephonemobile;
    }

    public function setTelephonefixe($telephonefixe){
        $this->telephonefixe = $telephonefixe;
        return $this->telephonefixe;
    }

    public function setFax($fax){
        $this->fax = $fax;
        return $this->fax;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this->email;
    }

    public function setSiteweb($siteweb){
        $this->siteweb = $siteweb;
        return $this->siteweb;
    }
}
?>