<?php
include_once "./model/authentification.php";
include_once "./model/MedecinDAO.php";
include_once "./model/RapportsDAO.php";
include_once "./model/MedicamentDAO.php";

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

//ajt a la ligne 11 les infos des medicaments
//apres l18 ajt une variable rapport qui aura la valeur de la ligne 20
// ajt une variable rapportid qui retournera la valeur d'une fonction qui retourne l'id max
//ajt une variable offrir qui sera comme la ligne 20 mais pr les valeur d'offrir

