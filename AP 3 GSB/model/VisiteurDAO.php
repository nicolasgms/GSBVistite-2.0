<?php
include_once 'Visiteur.php';
include_once 'ConnexionDAO.php';
class VisiteurDAO {

    public static function ChargeVisiteur(){
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from Visiteur");
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Visiteur($ligne["id"], $ligne["nom"], $ligne["prenom"], ["login"], $ligne["mdp"], $ligne["adresse"], $ligne["cp"], $ligne["ville"], $ligne["dateEmbauche"], $ligne["timespan"], $ligne["ticket"]);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function ChargeVisiteurbyId($id){
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from Visiteur where id=:id");
            $req->bindValue(':id', $id, PDO::PARAM_STR);
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat = new Visiteur($ligne["id"], $ligne["nom"], $ligne["prenom"], ["login"], $ligne["mdp"], $ligne["adresse"], $ligne["cp"], $ligne["ville"], $ligne["dateEmbauche"], $ligne["timespan"], $ligne["ticket"]);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getVisiteurById($id) {
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $requete = $cnx->prepare("select id from Visiteur where id=:id");
            $requete->bindValue(':id', $id, PDO::PARAM_STR);
            $requete->execute();
            
            $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getVisiteurBylogin($login) {
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $requete = $cnx->prepare("select * from Visiteur where login=:login");
            $requete->bindValue(':login', $login, PDO::PARAM_STR);
            $requete->execute();
            
            $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function deleteVisiteur($login) {
        $resultat = -1;
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("delete from Visiteur where login=:login");
            $req->bindValue(':login', $login, PDO::PARAM_STR);
            $resultat = $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

}