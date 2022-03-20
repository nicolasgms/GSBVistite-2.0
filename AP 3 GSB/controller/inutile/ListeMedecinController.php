<?php
include_once "./Model/authentification.php";
include_once "./model/MedecinDAO.php";

$nom="";
$lemedecin = MedecinDAO::SearchMedecinByName($nom);


include "./View/BaseView.php";
include "./View/MedecinView.php";
include './View/FooterView.php';
