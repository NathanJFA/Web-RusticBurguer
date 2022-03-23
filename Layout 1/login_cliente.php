<?php

session_start();

if(isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == 'true'){
  header('Location: index.php?status=cliente_logado');
}

?>

<!DOCTYPE html>
<html lang='pt-br'>
<head>
  <meta charset="utf-8">
  <title>Cadastre-se ou entre na sua conta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <!--estilo customizado-->
   <link rel="stylesheet" type="text/css" href="../css_shop/estilo.css">
   <link rel="stylesheet" type="text/css" href="../css_shop/bodycor.css">
   <link rel="stylesheet" type="text/css" href="../css_shop/login1.css">
   <!--icon-->
   <script src="https://kit.fontawesome.com/32858d8fc9.js" crossorigin="anonymous"></script>
   <!--htmlshiv-->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js">
   <!--normalize-->
   <link rel="stylesheet" type="text/css" href="css_shop/normalize.css">
   <link rel='icon' href="icon/key.png">
</head>
<body>
     
   <!--Cabeçalho-->
        <!--bottão oculta menu-->
        <input type="checkbox" id="check" checked="true">
      <header>
         <label for="check">
          <i class="fas fa-bars" id="sidebar_btn"></i> 
         </label>
         <div class="esquerda_area">
          <a href="index.php" class="logoShop">
          <img src="img/logo2.png" width="171">
          <h3 class="d-none">Hamburger <span>Artesanal</span></h3>
           </a>
         </div>

         <div class="carrinho_icon"><!--Carrinho-->
          <a href="carrinho.php"><i class="fas fa-shopping-cart text-light"></i> <small class="badeg_carrinho"><span class="car">0</span> itens</small></a>
         </div><!--fim carinho-->

         <?php
            if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != "true"){
         ?>
            <div class="botao_right d-none">
               <a href="../Layout 1/login_cliente.php" class="nav-link text-light"> Entrar</a>
            </div>
         <?php
            }
         ?>
          
      </header>
      <!--Fim Cabeçalho-->
   
      <!--Nav para smartphones-->
      <input type="checkbox" id="check2" checked="true">
          <div class="mobile_nav" style="overflow: hidden; z-index: 900">
            <div class="nav_bar">
          
           <div class="carrinho_ico2">
          <a href="carrinho.php"><i class="fas fa-shopping-cart text-light"></i> <small class="badeg_carrinho"><span class="car">0</span> itens</small></a>
           </div>

           <label for="check2">
           <i class="fas fa-bars nav_btn"></i>
           </label>
            </div>
            <div class="mobile_nav_items" style="overflow-y: hidden;z-index: 9000">
         
         <a href="#"><span>NaN</span></a>
         <a href="#"><span>NaN</span></a>
         <a href="#"><span>NaN</span></a>
         <a href="#"><span>NaN</span></a>
         <a href="#"><span>NaN</span></a>
            
            </div>
          </div>
      <!--Fim Nav para smartphones-->
      
      <!--Inicio side bar-->
      <div class="sidebar">
         <div class="profile_img">
          <h4 style="font-family: adf"></h4>
         </div>
         <a href="#"><span>NaN</span></a>
         <a href="#"><span>NaN</span></a>
         <a href="#"><span>NaN</span></a>
         <a href="#"><span>NaN</span></a>
         <a href="#"><span>NaN</span></a>
         
      </div>

        <!--Animação-->
        

      <div class="mt-5"><!--inicio content-->
               
             <!--*********************** D E S A T I V A D O************************-->
               <div class="mt-3 lupa d-none"><!--pesquisar desativado-->
               <input type="search" class="pesquisa " placeholder="O que você procurar ?">
               <button class="btn btn-dark lup"><i class="fas fa-search"></i></button>
               </div><!--fim pesquisar-->
             <!--************ F I N A L . D E S A T I V A D O************************-->
              
            
               <div id="Login" class="container">
                 <div id="background"><!--div fundo-->
                 <div class="row">
                  <div class="col-md-6 col-sm-6">
                   <form action="credenciais.php?intention=login" method="POST">
                    <strong>Já sou cliente</strong><br>
                    <label for="loginCliente">Login:</label>
                    <input type="text" name="email" id="loginCliente" class="form-control is-invalid" placeholder="Digite seu e-mail" required="required">
                      <!-- valida a caixa de texto/ is-invalid inválido/ is-valid "válido" -->
                      <small class="valid-feedback d-none">Email válido</small>
                      <small class="invalid-feedback">Email inválido</small>
                     
                     <label for="senha1">Senha:</label>
                     <input type="password" name="senha" id="senha1" class="form-control is-valid cpf-mask" placeholder="digite sua senha" required="required">
                        <small class="valid-feedback">Senha válido</small>
                        <small class="invalid-feedback d-none">Senha inválido</small>
                    
                      <!--recuperação de senha/email-->
                     <div class="text-right mb-1">
                      <small><a href="senha.php">Esqueçeu sua senha?</a></small>
                      <small><a href="email.php">Esqueçeu seu email?</a></small>
                     </div>
                       <!--fim recuperação de senha/email-->

                     <button class="btn btn-dark2 btn-block" type="submit">Entrar</button>
                     <a href="cadastro.php" class="btn btn-outline-danger btn-block"><small>QUERO ME CADASTRAR</small></a>
                     </form>

                     <button class="btn btn-danger btn-sm mt-2" onclick="good()"><i class="fas fa-user-lock"></i> <small>ADMINISTRADOR</small></button>
                    </div>
                    </div>
                    </div><!-- fim div fundo-->
                    </div>

 



            
       
      </div><!--fim content-->
       
        <footer class="rodape">

              <div class="container"><!--container footer-->
              <div class="row"><!--row footer-->
              <div class="col-md-4">
              <h6>Contato</h6>
              <p><i class="fas fa-envelope"></i> code_cafe@gmail.com</p>
              <p><i class="fas fa-phone"></i> +55 000 000000000</p>
              </div>
              <div class="col-md-4">
              <h6>Redes Sociais</h6>
              <div style="font-size: 35px;">
              <i class="fab fa-whatsapp mr-2"></i>
              <i class="fab fa-facebook-f mr-2"></i>
              <i class="fab fa-twitter"></i>
              </div>
              </div>
              <div class="col-md-4">
              <h6>Code + Café</h6>
              <p>Revolucionando..</p>
              </div>
              </div><!--fim row footer-->

              </div><!--fim container footer-->
              <div class="code"> <!--copy-->
              &copy; Code + Café todos os direitos reservados.
              </div><!--copy fim-->
      </footer>
       

       <script src="../js/script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>