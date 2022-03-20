<section class="services" id="services">
    <div class="box-container">
        <div class="box">
            <form action="./?action=Medecin&type=UpdateMedecinConfirme" method="POST">
                    <div id="modif"><i class="fas fa-pen"></i><p>Modification de la fiche du docteur <?= $unMedecin->getNameMe();?></p></div>
                    <input name="id" type="hidden" value="<?= $unMedecin->getId()?>">
                    <h3><p>Nom du médecin:</p><input name="nom" class="medecin" value='<?= $unMedecin->getNameMe();?>'></h3>
                    <h3><p>Prénom du médecin:</p><input name="prenom" class="medecin" value='<?= $unMedecin->getFnameM();?>'></h3>
                    <h3><p>Adresse:</p><input name="adresse" class="medecin" value='<?= $unMedecin->getAdresse();?>'></h3>
                    <h3><p>Numéro de téléphone:</p><input name="tel" class="medecin" type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" value='<?= $unMedecin->getTel();?>'></h3>
                    <h3><p>Spécialité:</p><input name="specialitecomplementaire" class="medecin" value='<?= $unMedecin->getSpec();?>'></h3>
                    <h3><p>Département:</p><input name="departement" class="medecin" value='<?= $unMedecin->getDep();?>'></h3>
                    <button type="submit" class="btn">enregistrer</button>
            </form>
        </div>
    </div>
</section>