<?php

class Offrir{
    private $idRapport;
    private $idMedicament;
    private $quantite;

    public function __construct($unIdRapport, $unIdMedicament, $uneQte){
        $this->idRapport=$unIdRapport;
        $this->idMedicament=$unIdMedicament;
        $this->quantite=$uneQte;
    }

    public function getIdRapport(){
        return $this->idRapport;
    }

    public function getIdMedicament(){
        return $this->idMedicament;
    }

    public function getQuantite(){
        return $this->quantite;
    }
}