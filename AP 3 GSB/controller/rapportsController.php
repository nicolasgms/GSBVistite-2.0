<?php

include_once "./model/authentification.php";
include_once "./model/RapportsDAO.php";
include_once "./model/Rapports.php";
include_once "./model/VisiteurDAO.php";
include_once "./model/MedicamentDAO.php";
include_once "./model/MedecinDAO.php";
include_once './model/OffrirDAO.php';


$type = $_GET["type"];

if($type == "listeRapports"){
    //Liste Rapports
    $idVisiteur=AuthentificationDAO::getIdLoggedOn();
    $date="";
    $lerapport= RapportsDAO::SearchRapportByDate($date, $idVisiteur);

    include "./View/BaseView.php";
    include "./View/RapportView.php";
    include "./View/FooterView.php";
}

elseif($type=="ficheRapport"){
    // Fiche rapport
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }
    $unRapport = RapportsDAO::ChargeRapportbyId($id);
    $idMedecin= $unRapport->getIdMedecin();
    $nomMedecin= RapportsDAO::GetMedecinConsulte($idMedecin);

    if($unRapport){
        include "./View/BaseView.php";
        include "View/FicheRapportView.php";
        
    }else{
        include "./View/test.php";
    }
}

    
elseif($type=="NewRapport"){
    // New rapport
    $visiteur= VisiteurDAO::ChargeVisiteur();
    $listeMedecins=MedecinDAO::getMedecins();
    $listeMedicament=MedicamentDAO::getMedicaments();
    $idRapport=RapportsDAO::getDernierRapport();
    if (isset($_POST["date"]) && isset($_POST["motif"]) && isset($_POST["bilan"]) &&  isset($_POST["idMedecin"])){
            $date=$_POST["date"];
            $motif = $_POST["motif"];
            $bilan = $_POST["bilan"];
            $idVisiteur=AuthentificationDAO::getIdLoggedOn();
            $idMedecin = $_POST["idMedecin"];
    }
    if (empty($_POST["motif"])){
            $motiferreur="Le motif n'est pas indiqué !";
    }
    if (isset($date) && isset($motif) && isset($bilan) && isset($idVisiteur) && isset($idMedecin)){
            RapportsDAO::addRapport($date, $motif, $bilan, $idVisiteur, $idMedecin);
            include './View/BaseView.php';
            include './View/VueNbMed.php';
            include './View/FooterView.php';
    }else{
            include './View/BaseView.php';
            include './View/NewRaport.php';
            include './View/FooterView.php';
    }
}

elseif($type=="searchRapport"){
    // Search rapport
    include_once "./model/RapportsDAO.php";
    include_once "./model/authentification.php";
    include_once "./model/Rapports.php";
    include_once "./model/VisiteurDAO.php";
    if (isset($_POST["date"])){
        $date=$_POST["date"];
        $idVisiteur=AuthentificationDAO::getIdLoggedOn();
        $lerapport = RapportsDAO::SearchRapportByDate($date, $idVisiteur);
        
    }
    include "./View/BaseView.php";
    if ($lerapport==null){
            include "./View/NORapport.php";
        }
        else{
            include "./View/RapportView.php";
        }

    // include "./View/FooterView.php";
}


elseif($type=="updateRapport"){
    // Update rapport
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }
    $unRapport = RapportsDAO::ChargeRapportbyId($id);
    include "./View/BaseView.php";
    include "./View/UpdateRapportView.php";
    include "./View/FooterView.php";
}


elseif($type=="UpdateRapportConfirme"){

    // Update rapport confirme
    if (isset($_POST["id"]) && isset($_POST["motif"]) && isset($_POST["bilan"])){
        $id=$_POST["id"];
        $motif=$_POST["motif"];
        $bilan=$_POST["bilan"];
        $update=RapportsDAO::UpdateRapport($id, $motif, $bilan);
        include "./View/BaseView.php";
        include "./View/ModificationConfirme.php";
        include "./View/FooterView.php";
    }
}


elseif($type=="RapportsMedecin"){
// Rapport medecin 
if (isset($_GET["idMedecin"])) {
    $idMedecin = $_GET["idMedecin"];
}

$RapportsMedecin=RapportsDAO::getRapportMedecin($idMedecin);

include "./View/BaseView.php";
include "./View/RapportMedecin.php";
include "./View/FooterView.php";
}