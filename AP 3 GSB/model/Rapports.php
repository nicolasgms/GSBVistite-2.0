<?php

class Rapports{
    private $id;
    private $date;
    private $motif;
    private $bilan;
    private $idVisiteur;
    private $idMedecin;

    public function __construct($unId, $uneDate, $unMotif, $unBilan, $unIdV, $unIdM){
        $this->id=$unId;
        $this->date=$uneDate;
        $this->motif=$unMotif;
        $this->bilan=$unBilan;
        $this->idVisiteur=$unIdV;
        $this->idMedecin=$unIdM;
    }

    public function getId(){
        return $this->id;
    }
    
    public function getDate(){
        return $this->date;
    }

    public function getMotif(){
        return $this->motif;
    }

    public function getBilan(){
        return $this->bilan;
    }

    public function getIdVisiteur(){
        return $this->idVisiteur;
    }

    public function getIdMedecin(){
        return $this->idMedecin;
    }
   
}