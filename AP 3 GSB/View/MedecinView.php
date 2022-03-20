<section class="services" id="services">

    <h1 class="heading"> Nos <span>médecins</span> </h1>
    <div class="box-container">
    <div class="box">
    <form action="./?action=Medecin&type=searchMedecin" method="POST">
        <i class="fas fa-search"></i>
        <h3><input name='nom' type="search" placeholder="Chercher un médecin"></h3>
        <button type="submit" class="btn">Valider</button>
    </div>
    <?php 
        for ($i=0; $i<count($lemedecin); $i++){
    ?>
    <html>
        <div class="box">
                <i class="fas fa-user-md"></i>
                <h3><?php echo $lemedecin[$i]->getNameMe()."\n".$lemedecin[$i]->getFnameM();?></h3>
                <p><?php if($lemedecin[$i]->getSpec()==""){
                    echo "Ce medecin n'a pas de specialité";
                }else{
                    echo $lemedecin[$i]->getSpec();
                } ?></p>
                <?php echo "<a href='./?action=Medecin&type=ficheMedecin&id=".$lemedecin[$i]->getId(). "'class='btn'>"?> Voir Plus<span class="fas fa-chevron-right"></span> </a>
        </div>
    </html>
    <?php
        $i++;
        }
    ?>


</section>
</body>
