<?php
class Visiteur{
    private $id;
    private $nom;
    private $prenom;
    private $login;
    private $mdp;
    private $adresse;
    private $cp;
    private $ville;
    private $dateEmbauche;
    private $timespan;
    private $ticket;


    public function __construct($unid, $unnom, $unprenom, $unlogin, $unmdp, $uneadresse, $uncp, $uneville, $unedateembauche, $untimespan, $unticket){
        $this->id=$unid;
        $this->nom=$unnom;
        $this->prenom=$unprenom;
        $this->login=$unlogin;
        $this->mdp=$unmdp;
        $this->adresse=$uneadresse;
        $this->cp=$uncp;
        $this->ville=$uneville;
        $this->dateEmbauche=$unedateembauche;
        $this->timespan=$untimespan;
        $this->ticket=$unticket;
    }
    public function GetId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getlogin(){
        return $this->login;
    }
    
    public function getmdp(){
        return $this->mdp;
    }

    public function getadresse(){
        return $this->adresse;
    }

    public function getcp(){
        return $this->cp;
    }

    public function getville(){
        return $this->ville;
    }

    public function getdateEmbauche(){
        return $this->dateEmbauche;
    }
}