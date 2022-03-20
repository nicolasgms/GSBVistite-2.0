<?php
include_once "./model/VisiteurDAO.php";
include_once "./model/authentification.php";
include_once "./model/RapportsDAO.php";

$idVisiteur=AuthentificationDAO::getIdLoggedOn();
$rapportNB=RapportsDAO::CountRapports($idVisiteur);
$medecinNB=RapportsDAO::CountMedecinConsulte($idVisiteur);
$visiteur=VisiteurDAO::ChargeVisiteurbyId($idVisiteur);
include "./View/BaseView.php";
include "./View/ProfilView.php";
include "./View/FooterView.php";
