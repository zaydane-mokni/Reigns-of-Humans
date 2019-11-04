(function Login(){
  var username = ['Asencio'];
  var user = document.getElementById('mail');
  var pass = ['Reign'] ;
  var password = document.getElementById('mdp');
  var button = document.getElementById("valider");

  
  button.addEventListener('click', function() {
    for (let usernames of username) {
      for (let pass2 of pass) {
        if( user.value === usernames  && password.value === pass2) {
          window.location = "test.html";
        };
      };
    };
  });
})();