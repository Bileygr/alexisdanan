<?php
class Message{
    private $id;
    private $nom;
    private $objet;
    private $message;
    private $email;
    private $dateenvoi;

    public function __construct($id, $nom, $objet, $message, $email, $dateenvoi){
        $this->id = $id;
        $this->nom = $nom;
        $this->objet = $objet;
        $this->message = $message;
        $this->email = $message;
        $this->dateenvoi = $dateenvoi;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getObjet(){
        return $this->objet;
    }

    public function getMessage(){
        return $this->message;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getDateenvoi(){
        return $this->dateenvoi;
    }

    public function setId($id){
        $this->id = $id;
        return $this->id;
    }

    public function setNom($nom){
        $this->nom = $nom;
        return $this->nom;
    }

    public function setObjet($objet){
        $this->objet = $objet;
        return $this->objet;
    }

    public function setMessage($messgae){
        $this->message = $message;
        return $this->message;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this->email;
    }

    public function setDateenvoi($dateenvoi){
        $this->dateenvoi = $dateenvoi;
        return $this->dateenvoi;
    }
}
?>