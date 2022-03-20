<?php
include_once './model/authentification.php';
include_once './model/Rapports.php';
include_once './model/RapportsDAO.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
$unRapport = RapportsDAO::ChargeRapportbyId($id);
include "./View/BaseView.php";
include "./View/UpdateRapportView.php";
include "./View/FooterView.php";

