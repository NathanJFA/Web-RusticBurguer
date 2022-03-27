const express = require('express')
const {engine} = require ('express-handlebars');
const app = express()
const bodyParser = require('body-parser');
const Sequelize = require('sequelize')


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
app.get('/', (request, response) => {
    console.log("teste")
    response.send("testando rota")
})

app.get('/cadastrarCliente', (resquest, response) => {
    response.render('register-client')
})

