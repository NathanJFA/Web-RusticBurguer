<?php
  session_start();
  if(isset($_GET['exit']) && $_GET['exit'] == 'true'){
    $_SESSION['autenticado'] = "false";
    $_SESSION['user_logado'] = "";
    $_SESSION['chave_user'] = "";
  }
?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<meta charset="utf-8">
	<title>Hamburger Artesanal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <!--estilo customizado-->
   <link rel="stylesheet" type="text/css" href="../css_shop/estilo.css">
   <link rel="stylesheet" type="text/css" href="../css_shop/bodycor.css">
   <!--icon-->
   <script src="https://kit.fontawesome.com/32858d8fc9.js" crossorigin="anonymous"></script>
   <!--htmlshiv-->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js">
   <!--normalize-->
   <link rel="stylesheet" type="text/css" href="../css_shop/normalize.css">
    <link rel='icon' href="icon/loja.png">          
</head>
<body>
	   
	<!--Cabeçalho-->
        <!--bottão oculta menu-->
        <input type="checkbox" id="check" checked="true" >
      <header>
         <label for="check">
          <i class="fas fa-bars" id="sidebar_btn"></i> 
         </label>
         <div class="esquerda_area">
          <a href="#" class="logoShop">
            <img src="img/logo2.png" width="171">
          <h3 class="d-none">Hamburger <span>Artesanal</span></h3>
          </a>
         </div>

         <div class="carrinho_icon"><!--Carrinho-->
          <a href="carrinho.php"><i class="fas fa-shopping-cart text-light"></i> <small class="badeg_carrinho"><span class="car">0</span> itens</small></a>
         </div><!--fim carinho-->

         <?php 
             //VERIFICANDO O LOGIN
             if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != "true"){
          ?>

          <div class="botao_right container">
             <a href="login_cliente.php" class="nav-link text-light">Entrar</a> 
          </div>
          
          <?php
             }else{
          ?>

         <div class="botao_right dropdown"><!--inicio btn-right-drop-->
             <!--Menu Dropdown-->
            <a href="#" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Olá, <?php echo($_SESSION['user_logado']) ?></a> 
            
                  <div class="dropdown-menu">
                    <a href="central_controle/index.php" class="dropdown-item">Menu</a>
                    <a href="central_controle/pedidos.php" class="dropdown-item">Meus Pedidos</a>
                    <a href="#" class="dropdown-item">Trocar e Devoluções</a>
                    <a href="carrinho.php" class="dropdown-item">Meu carrinho</a>
                    <a href="central_controle/info.php" class="dropdown-item">Informações da Conta</a>
                    <a href="central_controle/endereco.php" class="dropdown-item">Meus Endereços</a>
                    <a href="central_controle/card.php" class="dropdown-item">Cartões e Vales</a>
                    <a href="index.php?exit=true" class="dropdown-item">Sair</a>
                  </div>
          <?php } ?>
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
      <div class="sidebar" class="d-none">
         <div class="profile_img">
          <h4 style="font-family: adf"></h4>
         </div>
         <a href="#"><span>NaN</span></a>
         <a href="#"><span>NaN</span></a>
         <a href="#"><span>NaN</span></a>
         <a href="#"><span>NaN</span></a>
        
      </div>
        
            <div class="container" id="Espacamento"><!--inicio content-->
              <div class="row"><!--inicio row-->

              <div class="col-md-12 Info"><!--inicio col-->

                      
             
          <!--Obs: toda vez que bate 3 bloco no tras, ele vai cria outra div com outro tras-->
             
             <div id="cardapio"><!--div fundo-->
                   
                    <div class="Info2"><!--informação-->
                    <h6>Cardápio</h6>
                    <small>Lanches em destaques</small>
                    </div><!--fim informação-->
              
              <div class="tras"> <!--Tras1-->
                <div class=" bloco">
                <a href="produtos/item.php">  <!-- REFATORAR, FAZER DE FORMA PROGRAMÁTICA--> 
                <img src="https://s2.glbimg.com/IaEnP49buSdSUDftlMxVrq3-ZDo=/940x523/e.glbimg.com/og/ed/f/original/2019/04/26/loucosporti1.jpg">
                </a>
                <div class="dados">
                <h5 class="lead">Hamburger</h5>
                <p>R$ 45,99</p>
                <button class="btn btn-dark form">Adicionar ao carrinho </button>
                </div>
                </div>

                <div class=" bloco">
                <a href="#">
                <img src="https://www.codemoney.com.br/site2017/wp-content/uploads/2019/09/as-melhores-hamburguerias-de-florianopolis-sc-1600x800-c-center.jpg">
                </a>
                <div class="dados">
                <h5 class="lead">x - tudo</h5>
                <p>R$59,99</p>
                <button class="btn btn-dark form">Adicionar ao carrinho </button>
                </div>
                </div>
                <div class=" bloco">
                <a href="#">
                <img src="http://dopaoaocaviar.com.br/wp-content/uploads/2015/08/holly.jpg">
                </a>
                <div class="dados">
                <h5 class="lead">x - premium</h5>
                <p>R$ 59,99</p>
                <button class="btn btn-dark form">Adicionar ao carrinho </button>
                </div>
                </div>

              </div><!--Tras1 fim-->
                                      
              <div class="tras"><!--Tras2-->

                <div class=" bloco">
                <a href="#">
                <img src="https://diariodorio.com/wp-content/uploads/2020/09/Hamburgueria-Bob-Beef-Cl%C3%A1ssico-Burger-Foto-PFZ-St%C3%BAdio-Norma-Lima-scaled.jpg">
                </a>
                <div class="dados">
                <h5 class="lead">x - Monstro</h5>
                <p>R$ 85,99</p>
                <button class="btn btn-dark form">Adicionar ao carrinho </button>
                </div>
                </div>

                <div class=" bloco">
                <a href="#">
                <img src="https://diariodorio.com/wp-content/uploads/2020/09/Hamburgueria-Bob-Beef-Cl%C3%A1ssico-Burger-Foto-PFZ-St%C3%BAdio-Norma-Lima-scaled.jpg">
                </a>
                <div class="dados">
                <h5 class="lead">x - Monstro</h5>
                <p>R$ 85,99</p>
                <button class="btn btn-dark form">Adicionar ao carrinho </button>
                </div>
                </div>

                <div class=" bloco">
                <a href="#">
                <img src="https://diariodorio.com/wp-content/uploads/2020/09/Hamburgueria-Bob-Beef-Cl%C3%A1ssico-Burger-Foto-PFZ-St%C3%BAdio-Norma-Lima-scaled.jpg">
                </a>
                <div class="dados">
                <h5 class="lead">x - Monstro</h5>
                <p>R$ 85,99</p>
                <button class="btn btn-dark form">Adicionar ao carrinho </button>
                </div>
                </div>
              </div><!--Tras2 fim-->

              <div class="tras"> <!--Tras3-->
                <div class=" bloco">
                <a href="produtos/iten.html">
                <img src="https://s2.glbimg.com/IaEnP49buSdSUDftlMxVrq3-ZDo=/940x523/e.glbimg.com/og/ed/f/original/2019/04/26/loucosporti1.jpg">
                </a>
                <div class="dados">
                <h5 class="lead">Hamburger</h5>
                <p>R$ 45,99</p>
                <button class="btn btn-dark form">Adicionar ao carrinho </button>
                </div>
                </div>

                <div class=" bloco">
                <a href="#">
                <img src="https://www.codemoney.com.br/site2017/wp-content/uploads/2019/09/as-melhores-hamburguerias-de-florianopolis-sc-1600x800-c-center.jpg">
                </a>
                <div class="dados">
                <h5 class="lead">x - tudo</h5>
                <p>R$59,99</p>
                <button class="btn btn-dark form">Adicionar ao carrinho </button>
                </div>
                </div>
                <div class=" bloco">
                <a href="#">
                <img src="http://dopaoaocaviar.com.br/wp-content/uploads/2015/08/holly.jpg">
                </a>
                <div class="dados">
                <h5 class="lead">x - premium</h5>
                <p>R$ 59,99</p>
                <button class="btn btn-dark form">Adicionar ao carrinho </button>
                </div>
                </div>
              </div><!--Tras3 fim-->

      </div><!--fim col-->
      </div><!--fim row-->
      </div><!--fim container-->

    </div><!--fim div fundo-->


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
