<?php
include_once './model/authentification.php';
include_once './model/Rapports.php';
include_once './model/RapportsDAO.php';
include_once './model/OffrirDAO.php';

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