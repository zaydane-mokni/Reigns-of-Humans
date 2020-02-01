
function getCards(){
var requestOptions = {
method: 'GET',
redirect: 'follow'
};
fetch("http://1098ed33.ngrok.io/cards", requestOptions)
.then(response => response.json())
.then(result => {cardInfo=result;})
.catch(error => console.log('error', error));
}

function getcharachters(){
var requestOptions = {
method: 'GET',
redirect: 'follow'
};
fetch("http://1098ed33.ngrok.io/characters", requestOptions)
.then(response => response.json())
.then(result => {characters=result;})
.catch(error => console.log('error', error));
}
