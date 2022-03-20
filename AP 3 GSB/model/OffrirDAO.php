<?php
include_once 'Offrir.php';
include_once 'ConnexionDAO.php';

class OffrirDAO{
    public static function getOffre() {
        $resultat = array();

        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from offrir ");
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


    public static function addOffre($idRapport, $idMedicament, $quantite) {
        try {
            $cnx = ConnexionDAO::connexionPDO();
            // INSERT INTO `offrir`(`idRapport`, `idMedicament`, `quantite`) VALUES (1716, "ADIMOL9", 18);
            $req = $cnx->prepare("insert into offrir (idRapport, idMedicament, quantite) values(:idRapport, :idMedicament, :quantite)");
            $req->bindValue(':idRapport', $idRapport, PDO::PARAM_INT);
            $req->bindValue(':idMedicament', $idMedicament, PDO::PARAM_STR);
            $req->bindValue(':quantite', $quantite, PDO::PARAM_INT);
            
            $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }
}