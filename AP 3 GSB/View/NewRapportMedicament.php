<section class="book" id="book">

    <h1 class="heading"> <span>Rapport</span> de visite </h1>    

    <div class="row">

        <div class="image">
            <img src="images/Online-Doctor.svg" alt="">
        </div>
        <form action="./?action=Medicaments&type=NewRapportMed" method="post">
        <h3>Rapport de visite médicale</h3>
            <h4>Etape 3/3</h4>
        <input type="hidden" name="nbMed" value=<?php echo($nbMed);?>> 
            <?php for($e=0; $e<$nbMed; $e++){
                ?>
                <input list="medicament" class="box" name=<?php echo("medicament".$e); ?> placeholder="Medicament">
                <datalist id="medicament">
                <?php
                for ($i=0; $i<count($listeMedicaments); $i++){
                ?>
                <option>
                    <input type="radio" name="category" class="box" value="<?php $listeMedicaments[$i]['nomCommercial']?>">
                    <?php echo $listeMedicaments[$i]['nomCommercial']?></label>
                </option>
                <?php
                }
                ?>
            </datalist>
            <input type="number" class="box" name=<?php echo("quantite".$e); ?> id="quantite" placeholder="Quantité offerte"/>
            <br>
            <br>
            <?php
            }
            ?>
            <button type="submit" class="btn">Enregistrer</button>
        </form>
    </center>
</html> 
</section>