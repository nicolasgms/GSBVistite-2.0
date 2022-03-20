<section class="services" id="services">

<h1 class="heading"> Vos <span>rapports</span> </h1>


<div class="box-container">
    <div class="box">
<form action="./?action=Rapport&type=searchRapport" method="POST">
        <i class="fas fa-search"></i>
        <p>Chercher un rapport datant du :</p>
        <h3><input name="date" type="date"></h3>
        <button type="submit" class="btn">Valider</button>
    </div>
    <?php 
        for ($i=0; $i<count($lerapport); $i++){
    ?>
    <html>
        <div class="box"> 
            <i class="fas fa-file-alt"></i>
                <h3><?php echo $lerapport[$i]->getDate()?></h3>
                <p><?php echo $lerapport[$i]->getMotif()?></p>
                <?php echo "<a href='./?action=Rapport&type=ficheRapport&id=".$lerapport[$i]->getId(). "'class='btn'>"?> Voir Plus<span class="fas fa-chevron-right"></span> </a>
        </div>
    </html>
    <?php
        $i++;
        }
    ?>


        </div>
</body>
</section>