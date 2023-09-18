var express = require('express');
var bodyParser = require('body-parser');
var app = express();

app.use(bodyParser());

app.use(express.static(__dirname + '/WebRoot'))

app.use(express.static('public'))

app.get('/', function (req, res) {
    res.sendfile(__dirname + "/WebRoot/index.html");
});

app.post('/', function (req, res) {
    var code = req.body.code;
    console.log(code);

    res.sendFile(__dirname + "/kiitos.html");
});

app.listen(12345);