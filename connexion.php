<?php 
session_start();
?>

<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title> Accueil </title>
        <?php  include('header.php'); ?>
          <link rel="stylesheet" href="./style.css">
    </head>

<body>
    <div class="container">
        <h1>Connexion</h1>

        <form action="" method="POST">
            <?php
                if(isset($msg) && $msg){
                    ?>
                        <div class="alert alert-danger" role="alert">
                        <?= $msg ?>
                        </div>
                    <?php
                }
            ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Pseudo</label><input type="text" name='pseudo' class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mot de passe</label><input type="password" name='password' class="form-control" required="required">
            </div>
            <input type="submit" value="Se Connecter" class="btn btn-primary">
        </form>
    </div>
</body>

