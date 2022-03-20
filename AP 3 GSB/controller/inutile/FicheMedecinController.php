<?php
include_once "./Model/authentification.php";
include_once './model/MedecinDAO.php';
include_once './model/Medecin.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

$unMedecin = MedecinDAO::ChargeMedecinbyId($id);

include "./View/BaseView.php";
include "./View/FicheMedecinView.php";

