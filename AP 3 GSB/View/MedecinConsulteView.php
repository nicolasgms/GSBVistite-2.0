<section class="services" id="services">

    <h1 class="heading"> Nos <span>médecins</span> </h1>
    

    <div class="box-container">
    <div class="box">
    <form action="./?action=Medecin&type=listeMedecinsConsulte" method="POST">
        <i class="fas fa-search"></i>
        <h3><input name='nom' type="search" placeholder="Chercher un médecin"></h3>
        <button type="submit" class="btn">Valider</button>
    </div>
    <?php 
        for ($i=0; $i<count($listeMedecinsConsulte); $i++){

    ?>
    <html>
        <div class="box">
                <i class="fas fa-user-md"></i>
                <h3><?php echo $listeMedecinsConsulte[$i]->getNameMe()."\n".$listeMedecinsConsulte[$i]->getFnameM();?></h3>
                <p><?php echo $listeMedecinsConsulte[$i]->getSpec()?></p>
                <?php echo "<a href='./?action=Medecin&type=ficheMedecin&id=".$listeMedecinsConsulte[$i]->getId(). "'class='btn'>"?> Voir Plus<span class="fas fa-chevron-right"></span> </a>
        </div>
    </html>
    <?php
        }
    ?>


</section>
</body>
