<?php
include_once "./Model/authentification.php";
include_once "./model/MedecinDAO.php";
$idVisiteur=AuthentificationDAO::getIdLoggedOn();
$listeMedecinsConsulte= MedecinDAO::getMedecinsConsulte($idVisiteur);

include "./View/BaseView.php";
include "./View/MedecinConsulteView.php";
include './View/FooterView.php';


