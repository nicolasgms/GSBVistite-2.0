<section class="book" id="book">

    <h1 class="heading"> <span>Rapport</span> de visite </h1>    

    <div class="row">

        <div class="image">
            <img src="images/Online-Doctor.svg" alt="">
        </div>

        <form action="./?action=Rapport&type=NewRapport" method="POST">
            <h3>Rapport de visite médicale</h3>
            <h4>Etape 1/3</h4>
            <input type="date" name="date" class="box">
            <select name="motif" class="box">
                <option value="">Motif</option>
                <option value="Visite annuelle">Visite annuelle</option>
                <option value="Prise de contact">Prise de contact</option>
                <option value="Recommandation de confrère">Recommandation de confrère</option>
                <option value="Demande du médecin">Demande du médecin</option>
                <option value="Installation nouvelle">Installation nouvelle</option>
                <option value="Conseil d'un collègue">Conseil d'un collègue</option>
            </select>
            <input type="text-area" name="bilan" placeholder="Bilan" class="box">
            <input list="medecin" name="idMedecin" id="idMedecin" class="box" placeholder="Nom du médecin consulté">
                <datalist id="medecin">
                    <?php
                        for ($i=0; $i<count($listeMedecins); $i++){
                            ?>
                            <option value="<?php echo $listeMedecins[$i]["id"] ?>">
                                <?php echo $listeMedecins[$i]["nom"]."\n".$listeMedecins[$i]["prenom"]?>
                            </option>
                        <?php
                        }
                        ?>
                </datalist>
                
            
            <input type="submit" value="Suivant" class="btn">
        </form>


    </div>

</section>
































































<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <!-- <link rel="stylesheet" href="CSS/styles.css"> -->
    
        <!-- ===== BOX ICONS ===== -->
        <!-- <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>GS</title>
    </head>
    <body>
<div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="images/rapport.svg" alt=""> 
                </div> 

                 <div class="login__forms">
                    <form> 
                        <form action="./?action=NewRapport" class="login__registre" id="login-in" method="POST">
                            <center><img src="images/gsb.png" class="image_title" ></center>

                            <div class="login__box">
                            <i class="far fa-clock"></i>
                                <input type="date" name="Date" id="Date" placeholder="Date" class="login__input"/>
                            </div>

                            <div class="login__box">
                                <i class='bi:chat-text-fill login__icon'></i>
                                <input type="text" name="motif" id="motif" placeholder="Motif" class="login__input" />
                            </div>

                            <div class="login__box">
                                <i class="far fa-file-alt"></i>
                                <input type="text" name="bilan" id="bilan" placeholder="Bilan" class="login__input"/>
                            </div> 
                        </form>

                        <form method="POST">
                            <div class="medecin">
                                <input list="browsers" name="medecin" id="medecin" placeholder="Médecin">
                                <datalist id="browsers">
                                    <?php
                                    for ($i=0; $i<count($listeMedecins); $i++){
                                    ?>
                                    <option>
                                        <input type="radio" name="category" value="<?php $listeMedecins[$i]['id']?>"/>
                                        <label for="<?php $listeMedecins[$i]['id']?>"><?php echo $listeMedecins[$i]['nom']?></label>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </datalist>
                            </div>
                        </form> -->
                        <!-- <form method="POST">
                            <div class="medicament">
                                <input list="medicament" name="browser" id="browser" placeholder="Médicament">
                                <datalist id="medicament">
                                    <?php
                                    for ($i=0; $i<count($listeMedicaments); $i++){
                                    ?>
                                    <option>
                                        <input type="radio" name="category" value="<?php $listeMedicaments[$i]['nomCommercial']?>"/>
                                        <label for="<?php $listeMedicaments[$i]['nomCommercial']?>"><?php echo $listeMedicaments[$i]['nomCommercial']?></label>
                                    </option>
                                    <?php
                                    }
                                    ?> -->
                                <!-- </datalist>
                            </div>
                        </form>
                        <form method="post">
                                <input type="number" name="quantite" id="quantite" placeholder="Quantité offerte" class="login__input"/>
                        </form>
                        <button type="submit" class="login__button">Envoyé</button>
                        </form>



                </div>
            </div> -->
        <!-- </div> -->