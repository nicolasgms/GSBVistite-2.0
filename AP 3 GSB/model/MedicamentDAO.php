<?php
include_once 'Medicament.php';
include_once 'ConnexionDAO.php';
class MedicamentDAO{

    public static function getMedicaments() {
        $resultat = array();

        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from medicament ");
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

    public static function addMedicament($rapport, $medicament, $quantite) {
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select id from medicament where nomCommercial=:medicament;");
            $req->bindValue(':medicament', $medicament, PDO::PARAM_STR);
            $req->execute();
            $idMedicament=$req->fetch();
            $idMedicament=$idMedicament["id"];
            $req = $cnx->prepare("insert into offrir (idRapport, IdMedicament, quantite) values(:rapport, :medicament, :quantite);");
            $req->bindValue(':rapport', $rapport, PDO::PARAM_INT);
            $req->bindValue(':medicament', $idMedicament, PDO::PARAM_STR);
            $req->bindValue(':quantite', $quantite, PDO::PARAM_INT);
            $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

}