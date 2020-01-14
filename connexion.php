<?php
    if(!isset($_SESSION)){
        session_start(); 
        ?>
        <a class="nav-link" href="connexion.php">
<?php if($_SESSION["ouverture_session"]==false){echo "Connexion";}else{echo "Deconnexion";} ?>
</a>
<?php
    }
?>

<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title> Accueil </title>
        <?php  include('header.php'); ?>
          <link rel="stylesheet" href="./style.css">
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-app.js"></script>

        <script>
        // Your web app's Firebase configuration
            var firebaseConfig = {
                apiKey: "AIzaSyAeZtbJgp-4Z4zQDyDU0rw41z7UzZeLEfI",
                authDomain: "reignsofhumans-project.firebaseapp.com",
                databaseURL: "https://reignsofhumans-project.firebaseio.com",
                projectId: "reignsofhumans-project",
                storageBucket: "reignsofhumans-project.appspot.com",
                messagingSenderId: "867494421329",
                appId: "1:867494421329:web:91593745a06a11b2d9a970"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
        </script>
    </head>

<body>
    <div class="container">
        <h1>Connexion</h1>

        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">
                    Pseudo
                </label>
                <input id="pseudo" type="text" name='pseudo' class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">
                    Mot de passe
                </label>
                <input id="mdp" type="password" name='password' class="form-control" required="required">
            </div>
            <input id='add' type="submit" value="Se connecter" class="btn btn-primary">
        </form>
    </div>
    <script type="text/javascript" src="js/connexion.js"></script>
</body>



