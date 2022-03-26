


function good(){
    window.location.href='../admin/login/verificacao.html'
}

  

  
function painel(){
/*
  var recebido1 = document.getElementById('nn').value
  var recebido2 = document.getElementById('pp').value
*/
  var recebido1 = prompt('Nome Administrativo');
  var recebido2 = prompt('Senha Administrativa');
 
  var nome = 'admin';
  var senha = 'admin123';
  
    if(recebido1 === nome && recebido2 === senha ){
        window.location.href='login.html';
    }else{
        alert('Você não é um admin!!');
        window.location.href = '../main-layout/login1.html';
   }
}



//Esse script é para quebrar o galho rsrs 
// ~Acrísio 28/07/2021

   var Name = 'admin'
   var Senha = 'admin123'

function verificar (){
       
       var user = document.getElementById('name').value
      var pass = document.getElementById('senha').value

    if (user === Name && pass === Senha) {
        window.location.href = '../../admin/index.html'
    }
    else{
        alert('Senha ou email incorreto ou usúario não cadastrado!')

    }
}



//carregar o gif depois joga pra tela certa


function gif(){
    window.location.href = './web/view/Aviso/coffe.html'
     
    }



function rede (){

    setTimeout(function (){}, 100)
      var i = 2
     

     var  x = setInterval(function(){ ; i--
        if( i === 0){
            window.location.href ='../main-layout/index.html'
            clearInterval(x)
         }
      },2000)

}

 
