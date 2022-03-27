


const formData = new FormData(document.querySelector('pessoaF'))




const name = formData.get("name-client")
const lastname = formData.get("lastname")
const email = formData.get("email")
const s = formData.get("sexo")
var sexo = s.toUpperCase()
const telephone = "0000000"
const password = formData.get("password")
const passwordVerification = formData.get("passwordVerification")
const day = formData.get("day")
const month = formData.get("month")
const year = formData.get("year")
var date = day + '/' + month + '/' + year



const body = JSON.stringify({
    name: name,
    lastname: lastname,
    email: email,
    sexo: sexo,
    telephone: telephone,
    password: password,
    date: date
})
console.log(body)
window.location.href = '../view/main-layout-client/'


