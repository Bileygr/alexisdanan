<?php
class Nouvelle{
    private $id;
    private $auteur;
    private $titre;
    private $contenu;
    private $media;
    private $datedepublication;

    public function __construct($id, $auteur, $titre, $contenu, $media, $datedepublication){
        $this->id = $id;
        $this->auteur = $auteur;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->media = $media;
        $this->datedepublication;
    }

    public function getId(){
        return $this->id;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getContenu(){
        return $this->contenu;
    }

    public function getMedia(){
        return $this->media;
    }

    public function getDatedepublication(){
        return $this->datedepublication;
    }

    public function setId($id){
        $this->id = $id;
        return $this->id;
    }

    public function setAuteur($auteur){
        $this->auteur = $auteur;
        return $this->auteur;
    }

    public function setTitre($titre){
        $this->titre = $titre;
        return $this->titre;
    }

    public function setContenu($contenu){
        $this->contenu = $contenu;
        return $this->contenu;
    }

    public function setMedia($media){
        $this->media = $media;
        return $this->media;
    }

    public function setDatedepublication($datedepublication){
        $this->datdepublication = $datedepublication;
        return $this->datdepublication;
    }
}
?>