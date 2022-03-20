<?php
include_once './model/MedecinDAO.php';
include_once "./model/authentification.php";
include_once './model/Medecin.php';

if (isset($_POST["nom"])){
    $nom=$_POST["nom"];
    $lemedecin = MedecinDAO::SearchMedecinByName($nom);
}
include "./View/BaseView.php";
if ($lemedecin==null){
    include "./View/NOMedecin.php";
}else{
    include "./View/MedecinView.php";
}
