const express = require('express')
const {engine} = require ('express-handlebars')
const app = express()
const bodyParser = require('body-parser')
const Sequelize = require('sequelize')

//Definindo o a comunicação e rotas estáticas
app.use(bodyParser.json())
app.use(bodyParser.urlencoded({extended: true}))
app.use(express.static(__dirname + '/views'))
app.use(express.static(__dirname + '/style'))
app.use(express.static(__dirname + '/controler'))



app.engine('handlebars', engine())
app.set("views", "./views");
app.set('view engine','handlebars')

app.listen('8080', () => console.log('Web in port 8080'))

app.get('/', (req, res) => {
    res.sendFile('index.html')
})
app.get('/load', (req, res) => {
    res.sendFile(__dirname + '/views/aviso/coffe.html')
})
app.get('/cardapio', (req, res) => {
    res.sendFile(__dirname + '/views/layout-client/index.html')
})
//---------------FAZEM PARTE DE UM MESMO LAYOUT  (CENTRAL)-----
const routerCentral = require('./controler/central-client/index.js')
app.use('/central', routerCentral)
// -----------------------------------------------------------

app.get('/carrinho', (req, res) => {
    res.sendFile(__dirname + '/views/layout-client/index.html' )
})
app.get('/exit', (req, res) => {
    res.sendFile(__dirname + '/views/layout-client/index.html' )
})



