<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Painel Administrativo</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilo customizado-->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/produto.css">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/produtos.css">
    <link rel="icon" href="img/caixa.png">
</head>
<body id="Pro">
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
          <div class="mobile_nav" style="overflow: hidden; z-index: 900">
            <div class="nav_bar">
          <i class="fas fa-user-circle text-light" style="font-size: 50px;"></i>
           <label for="check2">
           <i class="fas fa-bars nav_btn"></i>
           </label>
            </div>
            <div class="mobile_nav_items" style="overflow-y: hidden;z-index: 9000">
         
         <a href="index.php"><i class="fas fa-home"></i><span>Home</span></a>
         <a href="#" class="pro"><i class="fas fa-boxes"></i></i><span>Produtos</span></a>
         <a href="pedidos.php"> <i class="fas fa-shopping-basket"></i><span>pedidos</span></a>
         <a href="admin.php"><i class="fas fa-users-cog"></i></i><span>Admins</span></a>
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
         <a href="#" class="pro"><i class="fas fa-boxes"></i></i><span>Produtos</span></a>
         <a href="pedidos.php"> <i class="fas fa-shopping-basket"></i><span>pedidos</span></a>
         <a href="admin.php"><i class="fas fa-users-cog"></i></i><span>Admins</span></a>
         <a href="cupom.php"><i class="fas fa-receipt"></i><span>Cupom</span></a>
         <a href="configuracao.php"><i class="fas fa-cogs"></i><span>Configuração</span></a>
         <a href="login/login.php"><i class="fas fa-sign-out-alt"></i><span>Deslogar</span></a>
      </div>


      <div class="content"><!--inicio content-->

        <!--alertas-->
         <div class="container-fluid d-none d-block-sm">

          <div class="alert alert-success"><i class="fas fa-thumbs-up"></i>
          <strong class="lead">Sucesso ao adicionar produto!</strong>
          </div>

          <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>
          <strong class="lead">Falha ao excluir produto!</strong>
          </div>

          </div><!--final Alertas-->
             
          <div class="container mt-5 "> <!--inicio container-->
              <div class="fundo">
              <form action="config_admin.php?intention=createSnake" method="POST">
                 <h6 class="text-light text-center">Adicionar Produtos</h6>

                <input type="text" name="name" class="form-controll mb-2" placeholder="Nome do produto">
                <input type="text" name="value" class="form-controll" placeholder="Digite o preço do produto">
                <textarea class="form-controlll" name="descript" placeholder="Descrição"></textarea>
          
              </form> 
              </div>
                
              <div class="mt-2 " >
                    
                    <div class="fundo">
                 <table class="table table-light table-bordered table-responsive"><!--inicio tabela tamanhos-->
                  
                  <thead class="table-dark">
                    <tr>
                    <th><input type="text" id="size" class="form-control" placeholder="Tamanho"></th>
                    <th><button onclick="addSize()" class="btn btn-success">Adicionar <i class="far fa-thumbs-up"></i></button></th>
                    </tr>
                   </thead>
                   
                   <tbody>
                      <tr>  
                      <td>Grande</td>
                      <td class="text-center"><button class="btn btn-danger"><i class="fas fa-times-circle"></i></button></td>
                      </tr>
                      <tr>
                      <td>Médio</td>
                      <td class="text-center"><button class="btn btn-danger"><i class="fas fa-times-circle"></i></button></td>
                      </tr>
                      <tr>
                      <td>Pequeno</td>
                      <td class="text-center"><button class="btn btn-danger"><i class="fas fa-times-circle"></i></button></td>
                      </tr>      
                   
                   </tbody>
              
              </table><!--Fim tabela tamanhos--> 
                           
                    <table class="table table-light table-bordered table-responsive"><!--inicio tabela escolhas-->

                   <thead class="table-secondary">

                      <tr>
                      <th><input type="text" class="form-control" placeholder="Escolhas"></th>
                      <th><button class="btn btn-light">Adicionar <i class="far fa-thumbs-up"></i></button></th>
                      </tr>

                    </thead>

                    <tbody>

                      <tr>  
                      <td>sem salada</td>
                      <td class="text-center"><button class="btn btn-danger"><i class="fas fa-times-circle"></i></button></td>
                      </tr>
                      <tr>
                      <td>completo</td>
                      <td class="text-center"><button class="btn btn-danger"><i class="fas fa-times-circle"></i></button></td>
                      </tr>
                      <tr>
                      <td>com queijo</td>
                      <td class="text-center"><button class="btn btn-danger"><i class="fas fa-times-circle"></i></button></td>
                      </tr>

                   </tbody>
              </table><!--Fim tabela escolhas--> 
              </div> 
  
              </div><!--fim fundo-->
             

                  <div class="fundo mt-2 pt-5 mb-2"><!--bloco img e adiciona tudo-->
                      <input type="file" id="arquivo">
                      <label for="arquivo" class="file"> <p class="text-light">Selecionar Imagem 1</p>

                      <div class="botao">
                      <i class="far fa-image icon"></i>
                      </div>
                      </label>
                      <input type="file" id="arquivo">
                      <label for="arquivo" class="file1"> <p class="text-light">Selecionar Imagem 2</p>

                      <div class="botao">
                      <i class="far fa-image icon"></i>
                      </div>
                      </label>
                      <input type="file" id="arquivo">
                      <label for="arquivo" class="file2"> <p class="text-light">Seleciona Imagem 3</p>

                      <div class="botao">
                      <i class="far fa-image icon"></i>
                      </div>
                      </label>

                       <div class=""><!--detalhes do lanche e Informações-->
            
                       <textarea class="form-controlll" placeholder="Detalhes do lanche"></textarea>
                       <textarea class="form-controlll mt-2 mb-3" placeholder="Informacões: Nome, oque acompanha.."></textarea>
                     
                       </div><!--Fim detalhes do lanche e Informações-->

                   <button type="submit" class="btn btn-success btn-block mb-5 btn-bordar">Adicionar <i class="fas fa-heart"></i></button>
                  </div><!--Fim bloco img e adiciona tudo-->
                     

          <div class="fundo"><!--produtos adicionado-->
                    
                    <!--*********** Toda vez que um produto for adicionado ele vai fazer um bloco pedido**********-->
                    
                    <div class="Ajuste"><!--inicio ajuste-->

                     <div class="pedidos">
                      <h6>Pedidos<span class="badeg">1</span></h6>
                      <h5>Titulo</h5>
                      <a href="#">Link do produto</a>
                     <button type="button" class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i></button>
                    </div>


                     <div class="pedidos">
                      <h6>Pedidos<span class="badeg">2</span></h6>
                      <h5>Titulo</h5>
                      <a href="#">Link do produto</a>
                     <button type="button" class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i></button>
                    </div>


                     <div class="pedidos">
                      <h6>Pedidos<span class="badeg">3</span></h6>
                      <h5>Titulo</h5>
                      <a href="#">Link do produto</a>
                     <button type="button" class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i></button>
                    </div>


                     <div class="pedidos">
                      <h6>Pedidos<span class="badeg">4</span></h6>
                      <h5>Titulo</h5>
                      <a href="#">Link do produto</a>
                     <button type="button" class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i></button>
                    </div>

                     <div class="pedidos">
                      <h6>Pedidos<span class="badeg">5</span></h6>
                      <h5>Titulo</h5>
                      <a href="#">Link do produto</a>
                     <button type="button" class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i></button>
                    </div>

                     <div class="pedidos">
                      <h6>Pedidos<span class="badeg">6</span></h6>
                      <h5>Titulo</h5>
                      <a href="#">Link do produto</a>
                     <button type="button" class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i></button>
                    </div>



                    </div><!--Fim ajuste-->
                  </div><!--produtos adicionado-->

                  

        </div><!--Fim container-->
        </div><!--fim content-->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>