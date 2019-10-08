postRequest('API URL', {Arg: ''})
  .then(data => console.log(data))
  .catch(error => console.error(error))

function postRequest(url, data) {
  return fetch(url, {
    credentials: 'same-origin',
    method: 'POST',
    body: JSON.stringify(data), 
    headers: new Headers({
      'Content-Type': 'application/json'
    }),
  })
  .then(response => response.json())
}
