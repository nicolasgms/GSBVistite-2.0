<?php

class Medecin{
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $tel;
    private $specialitecomplementaire;
    private $departement;

    public function __construct($unId, $unNom, $unPrenom, $uneAdresse, $unTel, $uneSpec, $unDepartement){
        $this->id=$unId;
        $this->nom=$unNom;
        $this->prenom=$unPrenom;
        $this->adresse=$uneAdresse;
        $this->tel=$unTel;
        $this->specialitecomplementaire=$uneSpec;
        $this->departement=$unDepartement;
    }

    public function getId(){
        return $this->id;
    }
    public function getNameMe(){
        return $this->nom;
    }
    public function getFnameM(){
        return $this->prenom;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getTel(){
        return $this->tel;
    }
    public function getSpec(){
        return $this->specialitecomplementaire;
    }
    public function getDep(){
        return $this->departement;
    }
}