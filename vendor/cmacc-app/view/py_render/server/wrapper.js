var express = require('express');
var app = express();
var bodyParser = require('body-parser')

app.get('/', function (req, res) {
  res.send('Hello World');
})

app.use(express.json());

app.get('/render1', function (req, res) {
  res.send("hello")
})

app.post('/render', function (req, res) {
  // Call python script
  // Use Osprey, import RAML file to validate params
  // Call python file on toRender, lwGraph
  console.log("test")
  const key = req.body.key
  const graph = req.body.graph
  console.log(req.body)
  
  const spawn = require("child_process").spawn;
  // Need to figure out structure of tree to translate it to json
  const pythonProcess = spawn('python', ["../render_algo/dummy.py",
    key, graph]);
  
  pythonProcess.stdout.on('data', (data) => {
    data = JSON.parse(data)
    response = {
      "metadata": data.metadata,
      "render_tree": data.render_tree
    }
    res.json(response)
  })
})

// start the app

var server = app.listen(8081, function () {
  var host = server.address().address
  var port = server.address().port
})