<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSB Visite </title>
    <link rel="icon" href="./images/gsb.png" type="imahe/x-icon" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./image/doctors/doctors-styles.css">


    <link rel="stylesheet" href="CSS/styles.css">

</head>
<body>
    
<!-- barre navigation  -->

<header class="header">
    <a href="./?action=Accueil" class="logo"><img src="./images/gsb.png">
    Gestion de visites : <?= AuthentificationDAO::getLastNLoggedOn()."\n".AuthentificationDAO::getNameLoggedOn()?></a>
 
    <nav class="navbar">
        <a href="./?action=Accueil">Accueil</a>
        <a href="./?action=Rapport&type=NewRapport">Rédiger un rapport</a>
        <a href="./?action=Rapport&type=listeRapports">Liste des rapports</a>
        <a href="./?action=Medecin&type=listeMedecins">Liste des medecins</a>
        <a href="./?action=profil">Profil</a>

        <a href="./?action=deconnexion"><i class="fas fa-sign-out-alt"></i></a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>


<!-- header section ends -->
<br><br><br><br><br><br><br>
<!-- services section starts  -->