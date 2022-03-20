<?php
include_once 'Medecin.php';
include_once 'ConnexionDAO.php';
class MedecinDAO {

    public static function ChargeMedecinbyId($id){
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $requete = $cnx->prepare("select * from Medecin where id=:id");
            $requete->bindValue(':id', $id, PDO::PARAM_INT);
            $requete->execute();
    
            $ligne = $requete->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat = new Medecin($ligne['id'], $ligne['nom'], $ligne['prenom'], $ligne['adresse'], $ligne['tel'], $ligne['specialitecomplementaire'], $ligne['departement'] );
                $ligne = $requete->fetch(PDO::FETCH_ASSOC);
            }
        }catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getMedecins() {
        $resultat = array();

        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from medecin order by nom");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getMedecinsConsulte($idVisiteur) {
        $resultat = array();

        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select distinct medecin.* from rapport, medecin where medecin.id=rapport.idMedecin and rapport.idVisiteur=:idVisiteur");
            $req->bindValue(':idVisiteur', $idVisiteur, PDO::PARAM_STR);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Medecin($ligne['id'], $ligne['nom'], $ligne['prenom'], $ligne['adresse'], $ligne['tel'], $ligne['specialitecomplementaire'], $ligne['departement'] );
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function SearchMedecinByName($nom) {
        $resultat = array();
         try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from medecin where nom like :nom");
            $req->bindValue(':nom', "%".$nom."%", PDO::PARAM_STR);
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Medecin($ligne['id'], $ligne['nom'], $ligne['prenom'], $ligne['adresse'], $ligne['tel'], $ligne['specialitecomplementaire'], $ligne['departement'] );
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function UpdateMedecin($id, $nom, $prenom, $adresse, $tel, $specialitecomplementaire, $departement){
        try{
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("update medecin set nom=:nom, prenom=:prenom, adresse=:adresse, tel=:tel, specialitecomplementaire=:specialitecomplementaire, departement=:departement where id=:id");
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->bindValue(':nom', $nom, PDO::PARAM_STR);
            $req->bindValue(':prenom', $prenom, PDO::PARAM_STR);
            $req->bindValue(':adresse', $adresse, PDO::PARAM_STR);
            $req->bindValue(':tel', $tel, PDO::PARAM_STR);
            $req->bindValue(':specialitecomplementaire', $specialitecomplementaire, PDO::PARAM_STR);
            $req->bindValue(':departement', $departement, PDO::PARAM_INT);

            $resultat = $req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

}