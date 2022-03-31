const router = require('express').Router()

// middleware that is specific to this router
router.use(function timeLog(req, res, next) {
    console.log('Time: ', Date.now());
    next();
})


//  ->> /central
router.get('/', (req, res) => {
    res.render('layout-client/central/index')
})
router.get('/pedidos', (req, res) => {
    res.sendFile('/home/nathanjfa/Documents/Web-RusticBurguer/views/layout-client/central/pedidos.html' )
})
router.get('/informacoes', (req, res) => {
    res.render('layout-client/central/info' )
})
router.get('/endereco', (req, res) => {
    res.render('layout-client/central/endereco')
})
router.get('/feedback', (req, res) => {
    res.render('layout-client/central/feedback')
})
router.get('/cartoes', (req, res) => {
    res.render('layout-client/central/card')
})

module.exports = router