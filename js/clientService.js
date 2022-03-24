

function registerClient(){
    console.log
    const name = Document.getElementById('name').value
    const lastname = Document.getElementById('lastname').value
    const email = Document.getElementById('lastname').value
    const sexo = Document.getElementById('sexo').value
    const password = Document.getElementById('password').value
    const passwordVerification = Document.getElementById('password2').value
    const day = Document.getElementById('day').value
    const month = Document.getElementById('month').value
    const year = Document.getElementById('year').value
    const date = day + '-' + month + '-' + year

    
    if(validade(password, passwordVerification)){
        try{
            const body = JSON.stringify({
                name: this.name,
                lastname: this.lastname,
                email: this.email,
                sexo: this.sexo,
                password: this.password,
                date: this.date
            })
            const headers = {'Content-Type':'application/json'}
            fetch('10.52.5.181:3005/api/clients/', {
                method: 'POST',
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
    }
}
function validate(password, passwordValidation){
    if(password === passwordValidation){
        return true
    }
    return false
}