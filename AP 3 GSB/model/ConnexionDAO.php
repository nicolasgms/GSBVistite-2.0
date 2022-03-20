<?php
   //permet de se connecter à la base de données
class ConnexionDAO{

    public static function connexionPDO() {
        $login = "root";
        $mdp = "root";
        $bd = "gsb-visite";
        $serveur = "";

        try {
            $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            print "Erreur de connexion PDO ";
            die();
        }
    }
}