const Client = require('./Client')
function validate(password, passwordValidation){
    if(password === passwordValidation){
        return true
    }
    return false
}

registerClient()

function registerClient(){
    /*
    const formData = new FormData(document.querySelector('pessoaF'))

    var name = formData.get("name")
    var email = formData.get("email")
    var s = formData.get("sexo")
    var sexo = s.toUpperCase()
    var password = formData.get("password")
    var passwordVerification = formData.get("passwordVerification")
    var day = formData.get("day")
    var month = formData.get("month")
    var year = formData.get("year")
    var date = day + '/' + month + '/' + year
    */
    
    /*
    document.getElementById('name').value
    var lastname = document.getElementById('lastname').value
    var email = document.getElementById('lastname').value
    var s = document.getElementById('sexo').value
    var sexo = s.toUpperCase()
    //NEED TO REMOVE INJECTION IN TELEPHONE
    var telephone = '0000000'
    var password = document.getElementById('password').value
    var passwordVerification = document.getElementById('password2').value
    var day = document.getElementById('day').value
    var month = document.getElementById('month').value
    var year = document.getElementById('year').value
    var date = day + '/' + month + '/' + year
    */

    var name = $_POST['name']
    var lastname = $_POST['lastname']
    var email = $_POST['email']
    var s = $_POST['sexo']
    var sexo = s.toUpperCase()
    var telephone = '0000000'
    var password = $_POST['password']
    var passwordVerification = $_POST['passwordVerification']
    var day = $_POST['day']
    var month = $_POST['month']
    var year = $_POST['year']
    var date = day + '/' + month + '/' + year

    if(validate(password, passwordVerification)){
        try{
            const body = JSON.stringify({
                name: name,
                lastname: lastname,
                email: email,
                sexo: sexo,
                telephone: telephone,
                password: password,
                date: date
            })
            
            const headers = {'Content-Type':'application/json'}
            fetch('http://10.52.5.181:3005/api/clients/', {
                method: 'post',
                body: body,
                headers: headers
            }).then(function(response){
                console.log(response.body)
            }).catch(function(err){
                console.log(err.message)
            })
        }
        catch(erro){
            console.log({message: erro.message})
        } 
    }else{
        console.log("erro ao validar")
    }
}
function validate(password, passwordValidation){
    if(password === passwordValidation){
        return true
    }
    return false
}
function login(){
    var email = document.getElementById('emailClient').value
    var password = document.getElementById('passwordClient').value

    try{
        const body = JSON.stringify({
            email:email,
            password: password
        })
        
        const headers = {'Content-Type':'application/json'}
        fetch('http://10.52.5.181:3005/api/clients/login/', {
            method: 'post',
            body: body,
            headers: headers
        }).then((data) => {
            let client = new Client(data);
            document.getElementById.value = data.name
            window.location.href='../Layout 1/index.html'
        }).catch(function(err){
            console.log(err.message)
        })

        /*
        then((response) => {
            return response.json();
        })
        */
    }catch(err){
        console.log(err.message)
    }
}
