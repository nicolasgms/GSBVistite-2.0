<?php
include_once './model/authentification.php';
include_once './model/Rapports.php';
include_once './model/RapportsDAO.php';

if (isset($_POST["id"]) && isset($_POST["motif"]) && isset($_POST["bilan"])){
    $id=$_POST["id"];
    $motif=$_POST["motif"];
    $bilan=$_POST["bilan"];
    $update=RapportsDAO::UpdateRapport($id, $motif, $bilan);
    include "./View/BaseView.php";
    include "./View/ModificationConfirme.php";
    include "./View/FooterView.php";
}
