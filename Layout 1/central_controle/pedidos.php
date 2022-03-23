<?php
require '../valida_acesso.php';
?>

<!DOCTYPE html>
<html lang='pt-br'>
<head>
  <meta charset="utf-8">
  <title>Pedidos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <!--estilo customizado-->
   <link rel="stylesheet" type="text/css" href="css/estilo.css">
   <link rel="stylesheet" type="text/css" href="css/inicio.css">
   <!--icon-->
   <script src="https://kit.fontawesome.com/32858d8fc9.js" crossorigin="anonymous"></script>
   <!--htmlshiv-->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js">
   <!--normalize-->
   <link rel="stylesheet" type="text/css" href="css/normalize.css">
   <link rel='icon' href="icon/home.png">

</head>
<body id="Ped">
     
   <!--Cabeçalho-->
        <!--bottão oculta menu-->
        <input type="checkbox" id="check" checked="true">
      <header>
         <label for="check">
          <i class="fas fa-bars" id="sidebar_btn"></i> 
         </label>
         <div class="esquerda_area">
          <a href="../index.php" class="logoShop">
         <img src="../img/logo2.png" width="171">
          <h3 class="d-none">Hamburger <span>Artesanal</span></h3>
          </a>
         </div>

         <div class="carrinho_icon"><!--Carrinho-->
          <a href="Layout 1/carrinho.php"><i class="fas fa-shopping-cart text-light"></i> <small class="badeg_carrinho"><span class="car">0</span> itens</small></a>
         </div><!--fim carinho-->

         <div class="botao_right d-none">
          <a href="Layout 1/login_cliente.php" class="nav-link text-light"> Entrar</a>
         </div>

          <div class="botao_right dropdown"><!--inicio btn-right-drop-->
             <!--Menu Dropdown-->

            <a href="#" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Olá, <?php echo($_SESSION['user_logado'])?>!</a> 
                  <div class="dropdown-menu">
                      <a href="menu.php" class="dropdown-item">Menu</a>
                      <a href="pedidos.php" class="dropdown-item">Meus Pedidos</a>
                      <a href="feedback.php" class="dropdown-item">feedback</a>
                      <a href="../carrinho.php" class="dropdown-item">Meu carrinho</a>
                      <a href="info.php" class="dropdown-item">Informações da Conta</a>
                      <a href="endereco.php" class="dropdown-item">Meus Endereços</a>
                      <a href="card.php" class="dropdown-item">Cartões</a>
                      <a href="../index.php?exit=true" class="dropdown-item">Sair</a>
                  </div>

         </div><!--Fimm btn-right-drop-->

      </header>
      <!--Fim Cabeçalho-->
   
      <!--Nav para smartphones-->
      <input type="checkbox" id="check2" checked="true">
          <div class="mobile_nav" style="overflow: hidden; z-index: 900">
            <div class="nav_bar">
          
           <div class="carrinho_ico2">
          <a href="Layout 1/carrinho.php"><i class="fas fa-shopping-cart text-light"></i> <small class="badeg_carrinho"><span class="car">0</span> itens</small></a>
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
        

      <div class=""><!--inicio content-->
               
              <div class="lupa container-fluid">
               
                <!--*********************** D E S A T I V A D O************************-->
               <div class="mt-3 lupa d-none"><!--pesquisar desativado-->
               <input type="search" class="pesquisa " placeholder="O que você procurar ?">
               <button class="btn btn-dark lup"><i class="fas fa-search"></i></button>
               </div><!--fim pesquisar-->
             <!--************ F I N A L . D E S A T I V A D O************************-->
           
         </div>
            
            <div class="container" id="inicio"><!--Inicio container-->
              <div class="row"><!--Inicio row-->
                <div class="**-danger col-md-3"> <!--inicio lado left-->
                     <div class="row"><!--inicio row interna-->
                        <div class="col-md-12"><!--inicio col-->
                        <div class="grupo"><!--inicio grupo-->
                        <h6 class="">Olá, <span class="text"><?php echo($_SESSION['user_logado'])?></span>!</h6>
                        <ul>
                        <li><a href="index.php">Menu</a></li>
                        <li><a href="#" class="ped">Meus Pedidos</a></li>
                        <li><a href="feedback.php">feedback</a></li>
                        <li><a href="../carrinho.php">Meu carrinho</a></li>
                        <li><a href="info.php">Informações da Conta</a></li>
                        <li><a href="endereco.php">Meus Endereços</a></li>
                        <li><a href="card.php">Cartões</a></li>
                        <li><a href="../index.php">Sair</a></li>
                        </ul>
                        </div><!--fim grupo-->
                        </div><!--fim col-->
                     </div><!--fim row interna-->
                </div><!--Fim lado left-->
               

                <div class="**-primary col-md-9"><!--inicio lado right-->
                <div class="row">
                  <div class="pedido col-md-12">
                    <div class="pedido">
                    <h3>Pedidos Envios</h3>
                       <!--Informações Sobre o peddio-->

                      <div  id='loc'>
                        <ul class="list-group">
                         <li class="list-group-item text-center">Hamburger</li>
                         <li class="list-group-item">Preparando  <small>15:49</small></li>
                         <li class="list-group-item">moto boy fazendo percurso <small>15:59</small></li>
                         <li class="list-group-item">Lanche entregue <small>16:10</small></li>

                        </ul>
                      </div> 
                    </div>

                 </div>
                </div><!--Fim lado right-->
              </div><!--Fim row-->
            </div><!--fim container-->

       
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>