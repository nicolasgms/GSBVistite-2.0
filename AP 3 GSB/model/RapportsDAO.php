<?php
include_once 'ConnexionDAO.php';
include_once 'Rapports.php';

class RapportsDAO{
    public static function ChargeRapport(){
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from rapport");
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Rapports($ligne["id"], $ligne["date"], $ligne["motif"], $ligne["bilan"], $ligne["idVisiteur"], $ligne["idMedecin"]);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    

    public static function ChargeRapportbyId($id){
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $requete = $cnx->prepare("select * from Rapport where id=:id");
            $requete->bindValue(':id', $id, PDO::PARAM_INT);
            $requete->execute();
    
            $ligne = $requete->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat = new Rapports($ligne["id"], $ligne["date"], $ligne["motif"], $ligne["bilan"], $ligne["idVisiteur"], $ligne["idMedecin"]);
                $ligne = $requete->fetch(PDO::FETCH_ASSOC);
            }
        }catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }


    public static function getRapportsVisiteur($idVisiteur) {
        $resultat = array();
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select rapport.* from rapport, visiteur where rapport.idVisiteur=visiteur.id and visiteur.id=:id order by date desc");
            $req->bindValue(':id', $idVisiteur, PDO::PARAM_STR);
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

    public static function getRapportMedecin($idMedecin) {
        $resultat = array();

        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select rapport.* from rapport, medecin where rapport.idMedecin=medecin.id and medecin.id=:id order by date desc");
            $req->bindValue(':id', $idMedecin, PDO::PARAM_STR);
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

    public static function getDernierRapport() {
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select id from rapport where id=(select max(id)from rapport)");
            $req->execute();
            $req = $req->fetch();
        } 
            catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }
            return $req["id"];
        }

    public static function GetMedecinConsulte($idMedecin) {
        $cnx = ConnexionDAO::connexionPDO();
        $req = $cnx->prepare("select nom as NMedecin from medecin, rapport where medecin.id=rapport.idMedecin and idMedecin=:idMedecin;");
        $req->bindValue(':idMedecin', $idMedecin, PDO::PARAM_STR);
        $req->execute();
        $donnees = $req->fetch();
        $req->closeCursor();
        return $donnees['NMedecin'];
    }

    public static function CountRapports($idVisiteur) {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select count(id) as Count FROM rapport where idVisiteur=:idVisiteur");
            $req->bindValue(':idVisiteur', $idVisiteur, PDO::PARAM_STR);
            $req->execute();
            $donnees = $req->fetch();
            $req->closeCursor();
            return $donnees['Count'];
    }

    public static function CountMedecinConsulte($idVisiteur) {
        $cnx = ConnexionDAO::connexionPDO();
        $req = $cnx->prepare("select count(distinct idMedecin) as Count FROM rapport where idVisiteur=:idVisiteur");
        $req->bindValue(':idVisiteur', $idVisiteur, PDO::PARAM_STR);
        $req->execute();
        $donnees = $req->fetch();
        $req->closeCursor();
        return $donnees['Count'];
    }


    public static function addRapport($date, $motif, $bilan, $idVisiteur, $idMedecin) {
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("insert into Rapport (date, motif, bilan, idVisiteur, idMedecin) values(:date, :motif, :bilan, :idVisiteur, :idMedecin)");
            $req->bindValue(':date', $date, PDO::PARAM_STR);
            $req->bindValue(':motif', $motif, PDO::PARAM_STR);
            $req->bindValue(':bilan', $bilan, PDO::PARAM_STR);
            $req->bindValue(':idVisiteur', $idVisiteur, PDO::PARAM_STR);
            $req->bindValue(':idMedecin', $idMedecin, PDO::PARAM_INT);
            
            $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }


    public static function SearchRapportByDate($date, $idVisiteur) {
        $resultat = array();
         try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from rapport where date like :date and idVisiteur=:idVisiteur order by date desc");
            $req->bindValue(':date', "%".$date."%", PDO::PARAM_STR);
            $req->bindValue(':idVisiteur', $idVisiteur, PDO::PARAM_STR);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Rapports($ligne['id'], $ligne['date'], $ligne['motif'], $ligne['bilan'], $ligne['idVisiteur'], $ligne['idMedecin'] );
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function UpdateRapport($id, $motif, $bilan){
        try{
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("update Rapport set motif=:motif, bilan=:bilan where id=:id");
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->bindValue(':motif', $motif, PDO::PARAM_STR);
            $req->bindValue(':bilan', $bilan, PDO::PARAM_STR);
            $resultat = $req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
}