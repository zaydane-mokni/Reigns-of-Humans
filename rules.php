<?php /*
if($_SESSION["ouverture_session"] == false){
?>  
<?php 
  header('Location: Connexion.php');
  exit();
}
  else{*/
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title> Rules </title>
        <?php  include('header.php'); ?>
    </head>

<body>
    <header>
    
    </header>

    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-2 sidenav">
            </div>
            <div class="col-sm-8 text-left"> 
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src = "img/Rules_picture.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src = "img/Rules_picture2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src = "img/Rules_picture3.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>

<?php/*
}*/
?>