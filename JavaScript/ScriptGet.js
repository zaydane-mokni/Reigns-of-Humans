fetch('https://webhooks.mongodb-stitch.com/api/client/v2.0/app/stm32cubemx-pjsxg/service/GetData/incoming_webhook/webhook1Get?mail=zaydane@hotmail.com')
.then(response => response.json())
.then(data => {
console.log(data)
console.log(typeof data)
console.log(Object.values(data));
})
.catch(error => console.error(error))
