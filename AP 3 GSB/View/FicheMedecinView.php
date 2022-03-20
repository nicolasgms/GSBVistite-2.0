<section class="services" id="services">
    <div class="box-container">
        <div class="box">
            <div id="modif"><i class="fas fa-user-md"></i><p>Fiche du médecin</p></div>
            <h3><p>Nom du médecin:</p><?= $unMedecin->getNameMe();?></h3>
            <h3><p>Prénom du médecin:</p><?=$unMedecin->getFnameM();?></h3>
            <h3><p>Adresse:</p> <?= $unMedecin->getAdresse();?></h3>
            <h3><p>Numéro de téléphone:</p><?= $unMedecin->getTel();?></h3>
            <h3><p>Spécialité:</p><?= $unMedecin->getSpec();?></h3>
            <h3><p>Département:</p><?= $unMedecin->getDep();?></h3>
            <?php echo "<a href='./?action=Medecin&type=UpdateMedecin&id=".$unMedecin->getId(). "'class='btn'>"?> Modifier les informations du docteur <?= $unMedecin->getNameMe();?><span class="fas fa-chevron-right"></span> </a> <br>
            <?php echo "<a href='./?action=Rapport&type=RapportsMedecin&idMedecin=".$unMedecin->getId(). "'class='btn'>"?> Voir les rapports du docteur <?= $unMedecin->getNameMe();?><span class="fas fa-chevron-right"></span> </a>

        </div>
    </div>
</section>
