<section class="services" id="services">
    <div class="box-container">
        <div class="box">
            <div id="modif"><i class="fas fa-user-md"></i><p>Informations du rapport créé le <?php echo $unRapport->getDate(); ?></p></div>
            <h3><p>Motif du rapport</p><?php echo $unRapport->getMotif();?></h3>
            <h3><p>Bilan du rapport</p><?php echo $unRapport->getBilan();?></h3>
            <h3><p>Medecin consulté:</p><?php echo $nomMedecin;?></h3>

            <?php echo "<a href='./?action=Rapport&type=updateRapport&id=".$unRapport->getId(). "'class='btn'>"?> Modifier le rapport datant du <?= $unRapport->getDate();?><span class="fas fa-chevron-right"></span> </a>

        </div>
    </div>
</section>
