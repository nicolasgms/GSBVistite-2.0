<?php
function controleurPrincipal($action) {
    $lesActions = array();
    //action par default
    $lesActions["defaut"] = "ConnexionController.php";

    //controller session (deconnexion, connexion, inscription et profil)

    $lesActions["Accueil"] = "AccueilController.php";
    $lesActions["connexion"] = "ConnexionController.php";
    $lesActions["deconnexion"] = "DeconnexionController.php";
    $lesActions["profil"] = "ProfilController.php";



    //controller rapport(création, modification, recherche)

    // $lesActions["NewRapport"] = "NewRapportController.php";
    // $lesActions["CreeRapportMed"] = "NewRapportMedicament.php";
    // $lesActions["ListeRapport"] = "ListeRapportController.php";
    // $lesActions["FicheRapport"] = "FicheRapportController.php";
    // $lesActions["SearchRapport"] = "SearchRapportController.php";
    // $lesActions["UpdateRapport"] = "UpdateRapportController.php";
    // $lesActions["UpdateRapportConfirme"] = "UpdateRapportConfirmeController.php";






    $lesActions["Medecin"] = "medecinsController.php";
    $lesActions["Rapport"] = "rapportsController.php";
    $lesActions["Medicament"] = "medicamentsController.php";











    //controller medecin (vu, fiche, modification)


    // $lesActions["ListeMedecin"] = "ListeMedecinController.php";
    // $lesActions["listeMedecinsConsulte"] = "ListeMedecinConsultController.php";
    // $lesActions["FicheMedecin"] = "FicheMedecinController.php";
    // $lesActions["UpdateMedecin"] = "UpdateMedecinController.php";
    // $lesActions["UpdateMedecinConfirme"] = "UpdateMedecinConfirme.php";
    // $lesActions["SearchMedecin"] = "SearchMedecinController.php";
    // $lesActions["RapportsMedecin"] = "RapportsMedecinController.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}



//Connexion et profil
$lesActions["Accueil"] = "AccueilController.php";
$lesActions["connexion"] = "ConnexionController.php";
$lesActions["deconnexion"] = "DeconnexionController.php";
$lesActions["profil"] = "ProfilController.php";

//Medecins rapport et med

?>
