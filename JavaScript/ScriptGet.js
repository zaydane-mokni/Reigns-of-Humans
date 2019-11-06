fetch('https://webhooks.mongodb-stitch.com/api/client/v2.0/app/stm32cubemx-pjsxg/service/GetData/incoming_webhook/webhook1Get?mail=zaydane@hotmail.com')
.then(response => response.json())
.then(data => {

if (data.length > 0){
 console.log(data)
 console.log(data[1].name)
 console.log(data[1]._id)
}
else {
console.log("Empty Data")
}

})
.catch(error => console.error(error))
