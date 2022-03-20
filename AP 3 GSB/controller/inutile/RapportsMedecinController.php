<?php
include_once "./model/authentification.php";
include_once "./model/RapportsDAO.php";
include_once "./model/Rapports.php";
include_once "./model/Medecin.php";
include_once "./model/MedecinDAO.php";
include_once "./model/VisiteurDAO.php";

if (isset($_GET["idMedecin"])) {
    $idMedecin = $_GET["idMedecin"];
}

$RapportsMedecin=RapportsDAO::getRapportMedecin($idMedecin);

include "./View/BaseView.php";
include "./View/RapportMedecin.php";
include "./View/FooterView.php";
