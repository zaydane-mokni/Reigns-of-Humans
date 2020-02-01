
function login() {
     var email = document.getElementById('email').value;
     var password = document.getElementById('password').value;

     firebase.auth().signInWithEmailAndPassword(email, password)
         .then(function () {

           sessionStorage.setItem('UserEmail', email );
           document.getElementById('ConnexionElement').style.display = 'none';
           document.getElementById('DeconnexionElement').style.display = 'block';
           window.location.href= "Jeu.html"

         })
         .catch(function (error) {
         console.log(error);
         var str = "L'adresse e-mail ou le mot de passe que vous avez entré n'est pas valide" ;
         document.getElementById('MsgError').value = str ;

         });

 }

 function inscription() {

      var email = document.getElementById('emailInscription').value;
      var password = document.getElementById('passwordInscription').value;
      firebase.auth().createUserWithEmailAndPassword(email, password)
          .then(function () {

              sessionStorage.setItem('UserEmail', email );
              document.getElementById('ConnexionElement').style.display = 'none';
              document.getElementById('DeconnexionElement').style.display = 'block';
              window.location.href= "Jeu.html"
          })
          .catch(function (error) {
          console.log(error.code);
          if (error.code === 'auth/email-already-in-use'){
            document.getElementById('MsgErrorInsc').value = "Compte existe déjà" ;

          }
          else
          document.getElementById('MsgErrorInsc').value = "Format n'est pas valide" ;
          });

}
document.getElementById('ConnectButton').onclick=function(){ login()};
document.getElementById('InscriptionButton').onclick=function(){ inscription()};
