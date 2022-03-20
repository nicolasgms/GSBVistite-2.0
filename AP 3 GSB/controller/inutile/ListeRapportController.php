<?php
include_once "./model/authentification.php";
include_once "./model/RapportsDAO.php";
include_once "./model/Rapports.php";
include_once "./model/VisiteurDAO.php";

$idVisiteur=AuthentificationDAO::getIdLoggedOn();
$date="";
$lerapport= RapportsDAO::SearchRapportByDate($date, $idVisiteur);

include "./View/BaseView.php";
include "./View/RapportView.php";
include "./View/FooterView.php";
