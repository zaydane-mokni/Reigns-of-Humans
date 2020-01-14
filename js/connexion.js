/***********************Base de Données**************************/

//Connecter la Base de données
var database = firebase.database();
var eventsRef = database.ref("events");


(function() {
  eventsRef.on("value", function(snapshot) {
      console.log(snapshot.val());
  }, function(error)  {
      console.log("Error " + error.code);
  });
})();


function verificationConnexion() {
    var pseudo = document.getElementById('username');
    var mdp = document.getElementById('password');

    
    var addButton = document.getElementById('add');
    //addButton.addEventListener('click', addEvent);
}

//Ajouter un élément dans  la Base de données

var addEvent = (function addevenement() {
    if(verificationConnexion() === true) {
        window.location.href = '../accueil.php';
    }
});