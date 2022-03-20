<meta charset="UTF-8">
<?php
include_once './model/ConnexionDAO.php';
include_once './controller/controleurPrincipal.php';
ConnexionDAO::connexionPDO();

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} 
else {
    $action = "defaut";
}

$fichier = controleurPrincipal($action);
include "controller/$fichier";
?>



