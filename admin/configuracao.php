<?php
require 'config_admin.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Painel Administrativo</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilo customizado-->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/confg.css">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="icon" href="img/configuração.png">
</head>
<body id="Con">
      <!--Cabeçalho-->
        <!--bottão oculta menu-->
        <input type="checkbox" id="check"> <!--checked="true"--> 
      <header>
         <label for="check">
          <i class="fas fa-bars" id="sidebar_btn"></i>
         </label>
         <div class="esquerda_area">
          <h3>Code + <span>Café</span></h3>
         </div>
         <div class="">
          <!--button-->
         </div>

      </header>
      <!--Fim Cabeçalho-->
      
      <!--Nav para smartphones-->
      <input type="checkbox" id="check2" checked="true">
          <div class="mobile_nav" style="overflow: hidden;">
            <div class="nav_bar">
          <i class="fas fa-user-circle text-light" style="font-size: 50px;"></i>
           <label for="check2">
           <i class="fas fa-bars nav_btn"></i>
           </label>
            </div>
            <div class="mobile_nav_items" style="overflow-y: hidden;">
         
         <a href="index.php"><i class="fas fa-home"></i><span>Home</span></a>
         <a href="produtos.php"><i class="fas fa-boxes"></i></i><span>Produtos</span></a>
         <a href="pedidos.php"> <i class="fas fa-shopping-basket"></i><span>pedidos</span></a>
         <a href="admin.php"><i class="fas fa-users-cog"></i></i><span>Admins</span></a>
         <a href="cupom.php"><i class="fas fa-receipt"></i><span>Cupom</span></a>
         <a href="configuracao.php" class="con"><i class="fas fa-cogs"></i><span>Configuração</span></a>
         <a href="login/login.php"><i class="fas fa-sign-out-alt"></i><span>Deslogar</span></a>
            
            </div>
          </div>
      <!--Fim Nav para smartphones-->
      
      <!--Inicio side bar-->
      <div class="sidebar">
         <div class="profile_img">
          <i class="fas fa-user-circle perfil_img" style="font-size: 100px;"></i>
          <h4 style="font-family: adf"><?php echo(displayNickname()) ?></h4>
         </div>
         <a href="index.php"><i class="fas fa-home"></i><span>Home</span></a>
         <a href="produtos.php"><i class="fas fa-boxes"></i></i><span>Produtos</span></a>
         <a href="pedidos.php"> <i class="fas fa-shopping-basket"></i><span>pedidos</span></a>
         <a href="admin.php"><i class="fas fa-users-cog"></i></i><span>Admins</span></a>
         <a href="cupom.php"><i class="fas fa-receipt"></i><span>Cupom</span></a>
         <a href="configuracao.php" class="con"><i class="fas fa-cogs"></i><span>Configuração</span></a>
         <a href="login/login.php"><i class="fas fa-sign-out-alt"></i><span>Deslogar</span></a>
      </div>

      <div class="content"><!--inicio content-->

         <!--alertas-->
         <div class="container-fluid d-none d-block-sm">

          <div class="alert alert-success"><i class="fas fa-thumbs-up"></i>
          <strong class="lead">Sucesso ao adicionar cumpons!</strong>
          </div>

          <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>
          <strong class="lead">Falha ao excluir cumpons!</strong>
          </div>

          </div><!--final Alertas-->
         
          <div class="containerr"><!--inicio conatiner-->
              
              <div class="mt-5 fundo" style="overflow: hidden;">

              <form action='config_admin.php?intention=updateInfoAdmin' method='POST'>

                <div class="fundo"><!--inicio email-->
                <label for="email"><h6>Email para receber informação</h6></label>
                <input type="email" name="email" id="email" class="form-control mb-2" placeholder="code+coffe@gmail.com">
                </div><!--fim email-->
                
                <div class="fundo mt-2"> <!--foto de perfil-->
                <h6>Imagem do perfil</h6>
                <input type="file" name='file' id="arquivo">
                <label for="arquivo" class="file"> <p class="text-light">Altera imagem do perfil</p>
                <div class="botao">
                <i class="far fa-image icon"></i>
                </div>
                </label>
                </div><!--fim foto de perfil-->

                <div class="mt-2 mb-2 fundo"><!--nome customizado-->
                <label for="nick"><h6>Nome Customizado</h6></label>
                <input type="text" name="nickname" placeholder= <?php if(isset($_SESSION['nickname'])){echo($_SESSION['nickname']);}else{echo('admin');} ?> class="form-control" id="nick">
                </div><!--fim nome customizado-->


              <button type="submit" class="btn-block btn btn-success mb-2">Atualizar <i class="fas fa-redo"></i></button>
              <!--visitar-->
              </form>
              <button type="button" class="btn btn-block btn-danger">Zerar Visitas <i class="fas fa-minus-circle"></i></button>
              </div>
      
        
        </div><!--fim conatiner-->
           
      </div><!--fim content-->


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>