<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="CSS/styles.css">
    
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>GSB</title>
    </head>
    <body>
        <section class="connection" id="connection">
            <h1 class="heading"> <span>GSB</span> Visite </h1>    
            <div class="row">
                <div class="image">
                    <img src="images/multi-doctor.svg" alt="">
                </div>
                <form action="./?action=connexion" method="POST">
                    <h3>Connexion à votre compte</h3>
                    <input type="text" name="login" id="login" placeholder="Login" class="box">
                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" class="box">
                    <input type="submit" value="Connexion" class="btn">
                </form>
            </div>
        </section>
    </body>
</html>
