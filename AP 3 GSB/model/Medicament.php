<?php

class medicament{
    private $id;
    private $nomCommercial;
    private $idFamille;
    private $composition;
    private $effets;
    private $contreIndications;

    public function __contruct($unid,$unnomCommercial,$unidFamille,$unecomposition, $uneffet, $unecontreIndication){
        $this->id=$unid;
        $this->nomCommercial=$unnomCommercial;
        $this->idFamille=$unidFamille;
        $this->composition=$unecomposition;
        $this->effets=$uneffet;
        $this->contreIndication=$unecontreIndication;
    }


    public function getIdMedicament(){
        return $this->id;
    }
    
    public function getNomCom(){
        return $this->nomCommercial;
    }

}