<section class="services" id="services">

<h1 class="heading"> Les rapport du <span>Médecin</span> </h1>


<div class="box-container">
    <?php 
        for ($i=0; $i<count($RapportsMedecin); $i++){
    ?>
        <div class="box">
                <i class="fas fa-file-alt"></i>
                <h3><?php echo $RapportsMedecin[$i]['date']?></h3>
                <p><?php echo $RapportsMedecin[$i]['motif']?></p>
                <p><?php echo $RapportsMedecin[$i]['bilan']?></p>
                <?php echo "<a href='./?action=Rapport&type=ficheRapport&id=".$RapportsMedecin[$i]['id']. "'class='btn'>"?> Voir Plus<span class="fas fa-chevron-right"></span> </a>
        </div>
    <?php
        }
    ?>
</div>
</section>