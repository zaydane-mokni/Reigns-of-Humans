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
        <title> Accueil </title>
        <?php  include('header.php'); ?>
          <link rel="stylesheet" href="./style.css">
    </head>

<body>
  <!-- partial:index.partial.html -->
  <style media="screen">
  *, *:before, *:after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  html, body {
    font-size: 100%;
  }

  body {
    background: #63BDF7;
    overflow: hidden;
  }

  .demo {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 30.6rem;
    height: 54rem;
    margin-left: -15.3rem;
    margin-top: -27rem;

    background: #F6F6F5;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
  }
  .demo__header {
    height: 5rem;
    background: #002942;
  }
  .demo__content {
    overflow: hidden;
    position: relative;
    height: 48rem;
    padding-top: 4.5rem;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
  }
  .demo__card-cont {
    position: relative;
    width: 24rem;
    height: 32rem;
    margin: 0 auto 5rem;
  }
  .demo__card {
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
  }
  .demo__card.reset {
    transition: -webkit-transform 0.3s;
    transition: transform 0.3s;
    transition: transform 0.3s, -webkit-transform 0.3s;
    -webkit-transform: translateX(0) !important;
            transform: translateX(0) !important;
  }
  .demo__card.reset .demo__card__choice {
    transition: opacity 0.3s;
    opacity: 0 !important;
  }
  .demo__card.inactive {
    transition: -webkit-transform 0.3s;
    transition: transform 0.3s;
    transition: transform 0.3s, -webkit-transform 0.3s;
  }
  .demo__card.to-left {
    -webkit-transform: translateX(-30rem) rotate(-30deg) !important;
            transform: translateX(-30rem) rotate(-30deg) !important;
  }
  .demo__card.to-right {
    -webkit-transform: translate(30rem) rotate(30deg) !important;
            transform: translate(30rem) rotate(30deg) !important;
  }
  .demo__card.below {
    z-index: 1;
  }
  .demo__card__top {
    height: 20.5rem;
    padding-top: 4rem;
  }
  .demo__card__top.purple {
    background: #7132B9;
  }
  .demo__card__top.blue {
    background: #248CB6;
  }
  .demo__card__top.indigo {
    background: #303F9F;
  }
  .demo__card__top.cyan {
    background: #26C6DA;
  }
  .demo__card__top.lime {
    background: #AFB42B;
  }
  .demo__card__top.brown {
    background: #795548;
  }
  .demo__card__img {
    overflow: hidden;
    width: 10rem;
    height: 10rem;
    margin: 0 auto 1.5rem;
    border-radius: 50%;
    border: 0.5rem solid #ffffff;
    background-image: url("//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg");
    background-size: cover;
  }
  .demo__card__name {
    text-align: center;
    font-size: 2rem;
    font-weight: bold;
    color: #fff;
  }
  .demo__card__btm {
    height: 11.5rem;
    background: #FFFFFF;
  }
  .demo__card__we {
    text-align: center;
    font-size: 2.2rem;
    line-height: 11.5rem;
  }
  .demo__card__choice {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
  }
  .demo__card__choice:before {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    width: 2rem;
    height: 2rem;
    margin-left: -1rem;
    color: #fff;
    border-radius: 50%;
    box-shadow: -2rem -3rem #fff, 2rem -3rem #fff;
  }
  .demo__card__choice:after {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    width: 4rem;
    height: 1.5rem;
    margin-left: -2rem;
    border: 0.6rem solid #fff;
    border-bottom: none;
    border-top-left-radius: 1.5rem;
    border-top-right-radius: 1.5rem;
  }
  .demo__card__choice.m--reject {
    background: #FF945A;
  }
  .demo__card__choice.m--like {
    background: #B1DA96;
  }
  .demo__card__choice.m--like:after {
    -webkit-transform: scaleY(-1);
            transform: scaleY(-1);
  }
  .demo__card__drag {
    z-index: 5;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    cursor: -webkit-grab;
    cursor: grab;
  }
  .demo__tip {
    text-align: center;
    font-size: 2.2rem;
  }
  </style>
  <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js">    </script>

  <script type="text/javascript" language="Javascript">

    for (var num=1; num<=10; num++) {

     document.writeln(" <div class='demo'><header class='demo__header'></header> <div class='demo__content'>   <div class='demo__card-cont'> <div class='demo__card'> <div class='demo__card__top brown'> <div class='demo__card__img'></div>  <p class='demo__card__name'>Carte "+num+"</p> </div> <div class='demo__card__btm'> <p class='demo__card__we'>Whatever</p> </div>  <div class='demo__card__choice m--reject'></div> <div class='demo__card__choice m--like'></div>  <div class='demo__card__drag'></div> </div> <p class='demo__tip'>Swipe left or right</p> </div> </div>");}

    </script>
  </body>
</html>

<?php/*
}*/
?>