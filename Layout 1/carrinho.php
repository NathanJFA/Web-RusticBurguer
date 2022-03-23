 <?php
session_start();
?>

<!DOCTYPE html>
<html lang='pt-br'>
<head>
  <meta charset="utf-8">
  <title>Carrinho</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <!--estilo customizado-->
   <link rel="stylesheet" type="text/css" href="../css_shop/estilo.css">
   <link rel="stylesheet" type="text/css" href="../css_shop/bodycor.css">
   <link rel="stylesheet" type="text/css" href="../css_shop/carrinho.css">
   <!--icon-->
   <script src="https://kit.fontawesome.com/32858d8fc9.js" crossorigin="anonymous"></script>
   <!--htmlshiv-->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js">
   <!--normalize-->
   <link rel="stylesheet" type="text/css" href="css_shop/normalize.css">
   <link rel='icon' href="icon/carrinho.png">

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
           <img src="img/logo2.png" width="171px">
          <h3 class="d-none">Hamburger <span>Artesanal</span></h3>
          </a>
         </div>

         <div class="carrinho_icon d-none"><!--Carrinho-->
          <a href="#"><i class="fas fa-shopping-cart text-light"></i> <small class="badeg_carrinho"><span class="car">0</span> itens</small></a>
         </div><!--fim carinho-->

         <?php
            if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != "true"){
         ?>
            <div class="botao_right">
               <a href="login_cliente.php" class="nav-link text-light"> Entrar</a>
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
        
      </div>


      <div id="CARRAO"><!--Não sei, o motivo mais concertar o bug--></div><!--fim-->


                  <div id="top">

                  <div class="container">
                  <div class="row"><!--inicio row-->
                  <div class="col-md-12 "><!--inicio col-->

                  <!--alertas-->
                  <div class="alert alert-warning mt-5 d-none"><i class="fas fa-exclamation-circle"></i>
                  <strong class="lead"> Seu carrinho está vazio! :(</strong>
                  </div>

                  <div class="table-responsive" id="carrinho">
                  <table class="table table-dark">

                  <thead>
                  <th>LANCHES</th>
                  <th>Nome</th>
                  <th>QUANTIDADE</th>
                  <th>PREÇO</th>
                  <th>Excluir</th>
                  </thead>

                  <tbody>             

                  <td >
                  <img src="https://www.codemoney.com.br/site2017/wp-content/uploads/2019/09/as-melhores-hamburguerias-de-florianopolis-sc-1600x800-c-center.jpg" class="img-fluid">
                  </td>

                  <td>
                  Hamburger
                  </td>

                  <td>
                  <!--input quantidade-->
                  <div class="">
                  <input type="number" name="" class="form-control form-control-sm form" value="1" id="preco" min='1' max="5">
                  </div>
                  </td>

                  <td>59,99</td>
                  <td>

                  <button class="btn btn-danger" type="button">
                  <i class="fas fa-trash"></i>
                  </button>
                  </td>           
                  </tbody>
                  <tfoot>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><h6>Total</h6></td>
                  <td><h6>59,99</h6></td>
                  </tfoot>
                  </table> 
                  </div>
                  <?php
                  if(isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == "true"){
                  ?>
                  <a href="finalizar.php" class="float-right btn btn-block btn-dark">Finalizar</a>
                  <?php
                  }else{
                  ?>
                  <a href="login_cliente.php" class="float-right btn btn-block btn-dark">Finalizar</a>
                  <?php
                  }
                  ?>


                  <div class="clearfix"></div>
                  </div><!--Fim col-->
                  </div><!--fim row-->

                  </div><!--FIM CONTAINER-->

                  </div><!--fim top-->


      <footer class="rodape66" style="overflow: hidden;">

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