
function login() {
     var email = document.getElementById('email').value;
     var password = document.getElementById('password').value;
     console.log(email);
     console.log(password);
     firebase.auth().signInWithEmailAndPassword(email, password)
         .then(function () {
             sessionStorage.setItem('UserMail', email);
             console.log('Done');
             firebase.auth().onAuthStateChanged(function(user) {
                if (user) {

                } else {

                }
                });
         })
         .catch(function (error) {
         alert("Adresse e-mail ou mot de passe invalide" )
         console.log(error);

         });

 }

 document.getElementById('connexion').onclick=function(){login()};
