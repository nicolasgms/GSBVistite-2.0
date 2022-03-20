<!-- Liste médecin -->
<?php
include_once "./Model/authentification.php";
include_once "./model/MedecinDAO.php";
include_once './model/Medecin.php';

$type = $_GET["type"];

if($type == "listeMedecins"){
    $nom="";
    $lemedecin = MedecinDAO::SearchMedecinByName($nom);


    include "./View/BaseView.php";
    include "./View/MedecinView.php";
    include './View/FooterView.php';
}

elseif($type== "listeMedecinsConsulte"){
    // liste medecins consulté
    $idVisiteur=AuthentificationDAO::getIdLoggedOn();
    $listeMedecinsConsulte= MedecinDAO::getMedecinsConsulte($idVisiteur);

    include "./View/BaseView.php";
    include "./View/MedecinConsulteView.php";
    include './View/FooterView.php';
}

elseif($type=="ficheMedecin"){
    // Fiche Medecins

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    $unMedecin = MedecinDAO::ChargeMedecinbyId($id);

    include "./View/BaseView.php";
    include "./View/FicheMedecinView.php";
}

elseif($type=="searchMedecin"){
    // Search medecins

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
}
elseif($type=="UpdateMedecin"){
    //  update medecin

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }
    $unMedecin = MedecinDAO::ChargeMedecinbyId($id);
    include "./View/BaseView.php";
    include "./View/UpdateMedecinView.php";
    include "./View/FooterView.php";

}

elseif($type=="UpdateMedecinConfirme"){
    // update medecin confirme

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
}




