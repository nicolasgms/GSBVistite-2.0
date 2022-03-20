<?php
include_once "./model/MedicamentDAO.php";
include_once "./model/authentification.php";
include_once "./model/MedecinDAO.php";
include_once "./model/VisiteurDAO.php";
include_once "./model/RapportsDAO.php";
include_once "./model/OffrirDAO.php";

$erreur="";
$listrentrermedicament=array();
$listrentrerquantite=array();
if (isset($_POST["nbMed"])){
    $nbMed=$_POST["nbMed"];
    $nbMed=intval($nbMed);
    $listeMedicaments=MedicamentDAO::getMedicaments();
    for($i=0; $i < $nbMed; $i++){
        if (isset($_POST["medicament".$i]) && isset($_POST["quantite".$i])){
            array_push($listrentrermedicament,$_POST["medicament".$i]);
            array_push($listrentrerquantite,$_POST["quantite".$i]);
        }
        else{
            $erreur="Tout les medicaments ne sont pas entrés";
        }
    }

    if ($erreur==""){
        $rapport=RapportsDAO::getDernierRapport();
        for($i=0;$i<count($listrentrermedicament);$i++){
            MedicamentDAO::addMedicament($rapport, $listrentrermedicament[$i], $listrentrerquantite[$i]);
        }
        include "./View/BaseView.php";
        include "./View/RapportConfirme.php";
        include "./View/FooterView.php";
    }else{
        include "./View/BaseView.php";
        include "./View/NewRapportMedicament.php";
        include "./View/FooterView.php";
    }
}else{
    include "./View/BaseView.php";
    include "./View/NewRapportMedicament.php";
    include "./View/FooterView.php";
}
