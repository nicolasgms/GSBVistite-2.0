<section class="services" id="services">

    <h1 class="heading"> Profil de  <span><?= AuthentificationDAO::getLastNLoggedOn()."\n".AuthentificationDAO::getNameLoggedOn()?></span> </h1>

    <div class="box-container">

        <section class="icons-container">

            <div class="icons">
                <i class="fas fa-copy"></i>
                <h3><?= $rapportNB ?></h3>
                <p>Rapports rédigés</p>
                <a href="./?action=Rapport&type=listeRapports" class="btn">Voir la liste de vos rapports<span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="icons">
                <i class="fas fa-users"></i>
                <h3><?= $medecinNB ?></h3>
                <p>médecin consuté</p>
                <a href="./?action=Medecin&type=listeMedecinsConsulte" class="btn">Voir la liste des médecins consulté<span class="fas fa-chevron-right"></span> </a>
            </div>
        </section> 
    </div>

    <section class="icons-container">
        <div class="icons">
            <div class="box">
            <h1 class="heading">Mes <span>informations</span></h1>
                <p>Nom : <?= $visiteur->getNom();?></p><br>
                <p>Prénom : <?=$visiteur->getPrenom();?></p><br>
                <p>Adresse : <?= $visiteur->getadresse();?></p><br>
                <p>Code postal : <?= $visiteur->getcp();?></p><br>
                <p>Ville : <?= $visiteur->getville();?></p><br>
                <p>Date d'embauche : <?= $visiteur->getdateEmbauche(); ?></p><br>
            </div>
        </div>
    </section>
</section>