<?php

include_once "./model/authentification.php";

AuthentificationDAO::logout();

include "./View/ConnexionView.php";