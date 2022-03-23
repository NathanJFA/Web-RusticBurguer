<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Painel Administrativo</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilo customizado-->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/user.css">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="icon" href="img/usuario.png">
</head>
<body id="Use">
      <!--Cabeçalho-->
        <!--bottão oculta menu-->
        <input type="checkbox" id="check">
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
         <a href="admin.php" class="use"><i class="fas fa-users-cog"></i></i><span>Admins</span></a>
         <a href="cupom.php"><i class="fas fa-receipt"></i><span>Cupom</span></a>
         <a href="configuracao.php"><i class="fas fa-cogs"></i><span>Configuração</span></a>
         <a href="login/login.php"><i class="fas fa-sign-out-alt"></i><span>Deslogar</span></a>
            
            </div>
          </div>
      <!--Fim Nav para smartphones-->
      
      <!--Inicio side bar-->
      <div class="sidebar">
         <div class="profile_img">
          <i class="fas fa-user-circle perfil_img" style="font-size: 100px;"></i>
          <h4 style="font-family: adf">admin</h4>
         </div>
         <a href="index.php"><i class="fas fa-home"></i><span>Home</span></a>
         <a href="produtos.php"><i class="fas fa-boxes"></i></i><span>Produtos</span></a>
         <a href="pedidos.php"> <i class="fas fa-shopping-basket"></i><span>pedidos</span></a>
         <a href="admin.php" class="use"><i class="fas fa-users-cog"></i></i><span>Admins</span></a>
         <a href="cupom.php"><i class="fas fa-receipt"></i><span>Cupom</span></a>
         <a href="configuracao.php"><i class="fas fa-cogs"></i><span>Configuração</span></a>
         <a href="login/login.php"><i class="fas fa-sign-out-alt"></i><span>Deslogar</span></a>
      </div>

      <!--fundo-->

      <div class="content top"><!--inicio content-->
              <!--alertas-->
       <div class="container d-none">
          <div class="alert alert-success"><i class="fas fa-thumbs-up"></i>
          <strong class="lead">Sucesso ao adicionar usúario!</strong>
          </div>

          <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>
          <strong class="lead">Falha ao adicionar o usúario!</strong>
          </div>

          <div class="alert alert-success"><i class="fas fa-thumbs-up"></i>
          <strong class="lead">Sucesso ao excluir o usuario!</strong>
          </div>

         <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>
         <strong class="lead">Falha ao excluir o usúario!</strong>
         </div>
      </div>

          <div class="containerr fundo"><!--inicio containerr-->
             
             <div class="fundo mt-2">
              <h6 class="text-center">Adicione um novo Administrador</h6>
              <label for="email" class=" dant-sm"><h6 class="text-dark">E-mail</h6></label>
              <input type="email" name="name" class="form-control user" placeholder="Digite um e-mail" required='required' id="email">
              <label for="Pass" class=" dant-sm pt-2"><h6 class='text-dark'>Senha</h6></label>
              <input type="password" name="password" class="form-control pass mb-2" placeholder="Crie uma nova senha" required='required' id="Pass">
              <label for="Pass" class=" dant-sm"><h6 class='text-dark'>Senha de confirmação</h6></label>
              <input type="password" name="password_confirm" class="form-control pass mb-2" placeholder="Confirme a senha" required='required' id="Pass">
              <button type="submit" class="btn btn-block btn-success form-contro">Adicionar Administrador <i class="fas fa-user-plus"></i></button>

              <div class="table-responsive table container-fluid mt-3"><!--inicio table-->
                <table class="table table-light  table-bordered">
                <thead class="table-dark">
                  <tr>
                  <th>Usúario Ativos</th>
                  <th></th>
                  </tr>
                  </thead>
                <tbody>
                  <tr>
                  <td>LOGIN</td>    
                  <td class="text-center"><button class="btn btn-danger"><i class="fas fa-times"></i></button></td>
                  </tr>          
                </tbody>
                </table>  
              </div><!--table fim-->
             </div>
               
          </div><!--fim containerr-->        
                
      </div><!--fim content-->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>