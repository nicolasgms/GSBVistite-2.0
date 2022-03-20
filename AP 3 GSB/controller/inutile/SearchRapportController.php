<?php
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



