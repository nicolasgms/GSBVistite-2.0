<section class="services" id="services">
    <div class="box-container">
        <div class="box">
            <form action="./?action=Rapport&type=UpdateRapportConfirme" method="POST">
                <div id="modif"><i class="fas fa-pen"></i><p>Modifier le rapport</p></div>
                <input name="id" type="hidden" value="<?= $unRapport->getId()?>">
                <h3><p>Motif:</p><textarea name="motif"> <?= $unRapport->getMotif()?></textarea></h3>
                <h3><p>Bilan:</p><textarea name="bilan"><?= $unRapport->getBilan()?></textarea></h3>
                <button type="submit" class="btn">Enregistrer les modifications</button>
            </form>
        </div>
    </div>
</section>