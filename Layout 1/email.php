<!DOCTYPE html>
<html lang='pt-br'>
<head>
  <meta charset="utf-8">
  <title>Recuperar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <!--estilo customizado-->
   <link rel="stylesheet" type="text/css" href="../css_shop/estilo.css">
   <link rel="stylesheet" type="text/css" href="../css_shop/bodycor.css">
   <link rel="stylesheet" type="text/css" href="../css_shop/senha.css">
   <!--icon-->
   <script src="https://kit.fontawesome.com/32858d8fc9.js" crossorigin="anonymous"></script>
   <!--htmlshiv-->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js">
   <!--normalize-->
   <link rel="stylesheet" type="text/css" href="css_shop/normalize.css">
   <link rel="icon" href="icon/email.png"> 
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
          <a href="index.php" class=" logoShop">
          <img src="img/logo2.png" width="171">
          <h3 class="d-none">Hamburger <span>Artesanal</span></h3>
           </a>
         </div>

         <div class="carrinho_icon d-none"><!--Carrinho-->
          <a href="#"><i class="fas fa-shopping-cart text-light"></i> <small class="badeg_carrinho"><span class="car">0</span> itens</small></a>
         </div><!--fim carinho-->

         <div class="botao_right d-none">
          <a href="#" class="nav-link text-light"> Entrar</a>
         </div>
          
      </header>
      <!--Fim Cabeçalho-->
   
      <!--Nav para smartphones-->
      <input type="checkbox" id="check2" checked="true">
          <div class="mobile_nav" style="overflow: hidden; z-index: 900">
            <div class="nav_bar">
          
           <div class="carrinho_ico2 d-none">
          <a href="#"><i class="fas fa-shopping-cart text-light"></i> <small class="badeg_carrinho"><span class="car">0</span> itens</small></a>
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
        

     <div class=" container mb-5"><!--inicio content-->
               
               <div class=" lupa d-none"><!--pesquisar-->
               <input type="search" class="pesquisa " placeholder="O que você procurar ?">
               <button class="btn btn-dark lup"><i class="fas fa-search"></i></button>
               </div><!--fim pesquisar-->
              
            
               <div id="recuperar" class="top"><!--inicio Login-->
                <div class="row"><!--iniciRow-->
                <div class=" col-md-6"><!--inicio col-->

             <h4><strong>Esqueçeu seu e-mail ?</strong></h4>
             <small>Para recuperar seu e-mail digite seu número. Enviaremos um codigo para seu número</small>

              <form>
              <input type="text" name="" class="form-control mb-2 mt-1" placeholder="Digite seu e-mail" required="required">
              <button class="btn btn-dark btn-block">Ok</button>
              </form>

               <!--alertas-->
              <div class="alert alert-success d-none mt-5"><i class="fas fa-thumbs-up"></i>
              <strong class="lead"> Enviado!</strong>
              </div>
            <!--alertas-->
                </div><!--fim col-->
                </div><!--rowfim-->
              </div><!--login fim-->
            
       
      </div><!--fim content-->

      
  


       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>