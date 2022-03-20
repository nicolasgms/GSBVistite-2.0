<?php
include_once "./Model/authentification.php";
if (isset($_POST["login"]) && isset($_POST["mdp"])){
    $login=$_POST["login"];
    $mdp=$_POST["mdp"];
}else{
    $login="";
    $mdp="";
}


if($login !=""){
    AuthentificationDAO::login($login,$mdp);
}

if (AuthentificationDAO::isLoggedOn()){
    include "./controller/AccueilController.php";
}else{
    include "./view/ConnexionView.php";

}