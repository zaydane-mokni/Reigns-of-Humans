<?php
    session_start();
    if(isset($_POST['connexion'])){
        if(empty($_POST['pseudo'])){
            echo('Le champ pseudo est vide');
        } else {
            if(empty($_POST['password'])){
                echo('Le champ mot de passe est vide');
            } else {
                //Les champs sont complets, on sécurise
                $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1");
                $MotDePasse = htmlentities($_POST['mdp'], ENT_QUOTES, "ISO-8859-1");
                //connexion a la bdd
                $mysql = mysql_connect("domaine.tld", "nom utilisateur", "mot de passe", "base de donnee");
                if($mysql){
                    echo("Erreur de connexion");
                } else {
                    $Requete = $mysql_query($mysql, "SELECT * FROM membres WHERE pseudo = '".$Pseudo."' AND mdp = '".$MotDePasse."' ");
                    if($mysql_num_rows($Requete) == 0) {
                        echo("Pseudo ou Mot de Passe incorrect");
                    } else {
                        $_SESSION['pseudo'] = $Pseudo;
                        echo("Connecté");
                    }
                }
            }
        }
    }
?>