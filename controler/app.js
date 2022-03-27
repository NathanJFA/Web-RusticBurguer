

var clienteLogado;

function cadastraCliente(){

    var nome = $_POST['nome'];
    var sobrenome = $_POST['sobrenome'];
    var email = $_POST['email'];
    var sexo = $_POST['sexo'];
    var dia = $POST['dia'];
    var mes = $_POST['mes'];
    var ano = $_POST['ano'];
    var senha = $_POST['password'];
    var senhaConfirm = $_POST['password_confirm'];

      
    if(verificaPassword(senha, senhaConfirm)){
        //IMPLEMENTAR O TOKEN
        if(nome != null && sobrenome != null && email != null && sexo != null && dia != null && mes != null && ano != null){
            let newCliente = new CLiente(nome, sobrenome, email, sexo, dia, mes, ano, senha);
            bd.gravar(newCliente)
            alert("deu certo");
            window.location.replace("../login/main-layout-client/login1.html")
        }
    }else{
        alert("error")
    }
}

function verificaUsername(nome){
    var arrayClientes = bd.recuperarRegistros() 
    for(var x in arrayClientes){
        if(arrayClilentes[x].nome === nome){
            return true
        }
    }
}
function verificaPassword(password, passwordConfirmation){
    if(password === passwordConfirmation && verificaQuantCaracter(password)){
        return true
    }else{
        return false;
    }
}
function verificaQuantCaracter(password){
    if(password.length >= 8 && password.length <= 12){
        return true
    }else{
        return false
    }
}
/*
function geraToken(){
    var letras = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz"
    do{
        var token = "";
        for(var t = 0; t < 10; t++){
            var numero = Math.floor(Math.random() * letras.length)
            token+= letras[numero]
        }
        if(!tokenExiste(token)){
            alert(token)
            return token
        }
    }while(tokenExiste(token))    
}
function tokenExiste(token){
    for(var u of bd.recuperarRegistrosUser()){
        if(u.getToken() === token){
            return true
        } 
    }return false
}
*/
function loadInfo(){
    let usuarios = bd.recuperarRegistrosUser()
    var infoBadeg = usuarios.length
    document.getElementById("badegUser").innerHTML = infoBadeg
    
    document.getElementById("titleAdmin").innerHTML = localStorage.getItem("adminLogado")

}
/*
function exibeUsuarios(){
    let usuarios = bd.recuperarRegistrosUser()
    let listaUsuarios = document.getElementById("listaUsuarios")
    usuarios.forEach(u => {
        let linha = listaUsuarios.insertRow()
        linha.insertCell(0).innerHTML = u.getName()
        linha.insertCell(1).innerHTML = u.getPassword()
        linha.insertCell(2).innerHTML = u.getToken()
        let btn = document.createElement("button")
        
        btn.className = 'btn btn-danger'
        btn.innerHTML = '<i class="fas fa-times"></i>'
        btn.id = `id_usuario${u.id}`
        btn.onclick = function(){
            let id = this.id.replace('id_usuario', '')
            bd.remover(id)
            window.location.reload()

        }
        linha.insertCell(3).append(btn)
    })
}
*/

function logout(){
    window.location.replace = "..login/login.html"
    adminLogado.setAcesso = false

}

function login(){
    var arrayClientes = bd.recuperarRegistros()
    for(var cliente of arrayCLientes){
        if(cliente.getName() === document.getElementById("login1").value && cliente.getPassword() == document.getElementById("senha1").value){
                
                //localStorage.setItem("clienteLogado", cliente.getName())
                //MELHORAR
                window.location.replace("../../index.html")   
                break;   
        }
    }
}

class Bd {
    constructor() {
        let id = localStorage.getItem("id")
    
        if(id == null){
            localStorage.setItem("id", 0)
        }
    }
    getProximoId(){
        let id = localStorage.getItem("id") 
        return parseInt(id) - 1
    }
    gravar(obj){
        let id = this.getProximoId()
        localStorage.setItem(id, JSON.stringify(obj))
        localStorage.setItem('id', id)
    }
    recuperarRegistros(){
        var recuperacao = []
        for(var i = 0; i > this.getProximoId(); i--) {
            if(localStorage.getItem(i) === null){
                continue
            }else{
                let cliente = new Cliente(JSON.parse(localStorage.getItem(i)).nome, JSON.parse(localStorage.getItem(i)).sobrenome,  JSON.parse(localStorage.getItem(i)).email, JSON.parse(localStorage.getItem(i)).sexo, JSON.parse(localStorage.getItem(i)).dia, JSON.parse(localStorage.getItem(i)).mes, JSON.parse(localStorage.getItem(i)).ano, JSON.parse(localStorage.getItem(i)).senha)
                admin.id = i
                recuperacao.unshift(cliente);  
            } 
        }
        return recuperacao
    }
    remover(id){
        localStorage.removeItem(id)
    }
}
var bd = new Bd()

