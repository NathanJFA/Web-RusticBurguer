const express = require('express')
const {engine} = require ('express-handlebars');
const app = express()
const bodyParser = require('body-parser');
const Sequelize = require('sequelize')

app.use(bodyParser.json())
app.use(bodyParser.urlencoded({extended: true}));
app.use(express.static(__dirname + '/views'));
app.use(express.static(__dirname + '/style'))
//app.use(bodyParser) -> dando erro aqui



app.engine('handlebars', engine())
app.set("views", "./views");
app.set('view engine','handlebars')

app.listen('8080', () => console.log('Web in port 8080'))

/*
const sequelize = new Sequelize('test','root','root',{
    host:'localhost',
    dialect:'mysql'
})
*/
app.get('/', (req, res) => {
    res.sendFile('index.js')
})

app.get('/cadastrarCliente', (req, res) => {
    res.sendFile('/web/view/index.html')
})

