<?php
include_once "./Model/authentification.php";
include_once './model/MedecinDAO.php';
include_once './model/Medecin.php';

if (isset($_POST["id"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["adresse"]) && isset($_POST["tel"]) && isset($_POST["specialitecomplementaire"]) && isset($_POST["departement"])) {
    $id=$_POST["id"];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $adresse=$_POST["adresse"];
    $tel=$_POST["tel"];
    $specialitecomplementaire=$_POST["specialitecomplementaire"];
    $departement=$_POST["departement"];
    $update=MedecinDAO::UpdateMedecin($id, $nom, $prenom, $adresse, $tel, $specialitecomplementaire, $departement);
    include "./View/BaseView.php";
    include "./View/ModificationConfirme.php";
    include "./View/FooterView.php";
}
