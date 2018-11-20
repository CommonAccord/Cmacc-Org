var request = require('request')

var headersOpt = {
  "content-type": "application/json",
};

request({
  method: 'POST',
  url: 'http://localhost:8081/render',
  body: {key: 'bloop', graph: 'blorp'},
  headers: headersOpt,
  json: true
}, function(error, response, body) {
  console.log(body)
})