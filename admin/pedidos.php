<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Painel Administrativo</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilo customizado-->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/pedidos.css">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="icon" href="img/pedido.png">
</head>
<body id="Pedido">
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
         <a href="produtos.php"><i class="fas fa-boxes"></i></i><span>Produtos</span></a>
         <a href="#" class="pedido"> <i class="fas fa-shopping-basket"></i><span>pedidos</span></a>
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
         <a href="produtos.php"><i class="fas fa-boxes"></i></i><span>Produtos</span></a>
         <a href="#" class="pedido"> <i class="fas fa-shopping-basket"></i><span>pedidos</span></a>
         <a href="admin.php"><i class="fas fa-users-cog"></i></i><span>Admins</span></a>
         <a href="cupom.php"><i class="fas fa-receipt"></i><span>Cupom</span></a>
         <a href="configuracao.php"><i class="fas fa-cogs"></i><span>Configuração</span></a>
         <a href="login/login.php"><i class="fas fa-sign-out-alt"></i><span>Deslogar</span></a>
      </div>


      <div class="content"><!--inicio content-->
      
      
 <div class="container"><!--Inicio container Fluid-->
  <div class="row2"><!--inicio row-->


   <!--*********** OBS: TODA VEZ QUE FOR CLONAR CLONE ESSE BLOCO COL-MD-9 COMPLETO. PARA CADA PEDIDO **********-->


       <div class="col-md-9 offset-1"><!--inicio col 1-->
        
                <div class=" Bloco_Pedido"><!-- início pedido 1--> 
                  
               
                  <form><!--inicio formulario recebido-->
                     
                     <button class="btn btn-danger btn-sm mb-3" disabled><i class="fas fa-times"></i></button>

                     <input type="text" class="form-control form-control-sm mb-2" readonly="readonly" placeholder="Nome Cliente" disabled>

                      <table class="table table-responsive text-center mb-2"><!--inicio table endereço-->
                       
                        <thead class="table-dark">
                          <th>Informação</th>
                          <th>Telefone/Celular</th>
                          <th>Bairro</th>
                          <th>Complemento</th>
                          <th>Rua</th>
                          <th>Número</th>
                          <th>Ponto de Rêferencia</th>
                          
                        </thead>
                        
                        <tbody class="table-light">
                          <td>#</td>
                          <td>+55 000 0 0000-0000</td>
                          <td>Planalto 2 </td>
                          <td>Casa</td>
                          <td>Rua joãozinho sem pé</td>
                          <td>000</td>
                          <td>Em frente a praça 8 de março</td>          
                        </tbody>
                      
                      </table><!--fim table endereço-->

                      <!--<label for='obs' class="text-light">Observação do cliente:</label>
                      <textarea class="form-control form-control-sm mb-2" id="obs" readonly="readonly" placeholder="Quero assim.."></textarea>-->

                       

                       <table class="table  table-responsive text-center mb-2 centralizando"><!--inicio table pedido-->
                       
                        <thead class="table-primary">
                          <th>Informações do Pedido</th>
                          <th>Lanche</th>
                          <th>Observação do cliente</th>
                          <th>Meio de pagamento</th>
                          <th>Valor</th>
                          <th>Total</th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>

                        </thead>
                        
                        <tbody class="table-dark">
                          <td>#</td>
                          <td><a href="#">Hamburger</a></td>
                          <td>  <textarea class="form-control form-control-sm mb-2" id="obs" readonly="readonly" placeholder="Quero assim.." style="height: 120px;"></textarea></td>
                          <td>Dinheiro</td> 
                          <td>58,99</td> 
                          <td class="text-danger">R$<span>58,99</span></td>  
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>   
                        </tbody>
                      
                      </table><!--fim table-->

                      <div class="text-center">
                        <button class="btn btn-warning butaozinho">Preparando <i class="fas fa-hourglass-half text-light"></i></button>
                        <button class="btn btn-primary butaozinho">Enviado <i class="fas fa-motorcycle"></i></button>
                        <button class="btn btn-success  butaozinho">Finalizado <i class="far fa-thumbs-up"></i></button>
                      </div>


                  </form> <!--Fim formulario recebido-->   

                </div><!-- fim pedido 1-->

   </div><!--fim col 1-->

    <div class="col-md-9 offset-1"><!--inicio col 1-->
        
                <div class=" Bloco_Pedido"><!-- início pedido 1--> 
                  
               
                  <form><!--inicio formulario recebido-->
                     
                     <button class="btn btn-danger btn-sm mb-3" disabled><i class="fas fa-times"></i></button>

                     <input type="text" class="form-control form-control-sm mb-2" readonly="readonly" placeholder="Nome Cliente" disabled>

                      <table class="table table-responsive text-center mb-2"><!--inicio table endereço-->
                       
                        <thead class="table-dark">
                          <th>Informação</th>
                          <th>Telefone/Celular</th>
                          <th>Bairro</th>
                          <th>Complemento</th>
                          <th>Rua</th>
                          <th>Número</th>
                          <th>Ponto de Rêferencia</th>
                          
                        </thead>
                        
                        <tbody class="table-light">
                          <td>#</td>
                          <td>+55 000 0 0000-0000</td>
                          <td>Planalto 2 </td>
                          <td>Casa</td>
                          <td>Rua joãozinho sem pé</td>
                          <td>000</td>
                          <td>Em frente a praça 8 de março</td>          
                        </tbody>
                      
                      </table><!--fim table endereço-->

                      <!--<label for='obs' class="text-light">Observação do cliente:</label>
                      <textarea class="form-control form-control-sm mb-2" id="obs" readonly="readonly" placeholder="Quero assim.."></textarea>-->

                       

                       <table class="table  table-responsive text-center mb-2 centralizando"><!--inicio table pedido-->
                       
                        <thead class="table-primary">
                          <th>Informações do Pedido</th>
                          <th>Lanche</th>
                          <th>Observação do cliente</th>
                          <th>Meio de pagamento</th>
                          <th>Valor</th>
                          <th>Total</th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>

                        </thead>
                        
                        <tbody class="table-dark">
                          <td>#</td>
                          <td><a href="#">Hamburger</a></td>
                          <td>  <textarea class="form-control form-control-sm mb-2" id="obs" readonly="readonly" placeholder="Quero assim.." style="height: 120px;"></textarea></td>
                          <td>Dinheiro</td> 
                          <td>58,99</td> 
                          <td class="text-danger">R$<span>58,99</span></td>  
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>   
                        </tbody>
                      
                      </table><!--fim table-->

                      <div class="text-center">
                        <button class="btn btn-warning butaozinho">Preparando <i class="fas fa-hourglass-half text-light"></i></button>
                        <button class="btn btn-primary butaozinho">Enviado <i class="fas fa-motorcycle"></i></button>
                        <button class="btn btn-success  butaozinho">Finalizado <i class="far fa-thumbs-up"></i></button>
                      </div>


                  </form> <!--Fim formulario recebido-->   

                </div><!-- fim pedido 1-->

   </div><!--fim col 1-->
   
   
 </div><!--fim row-->
   </div><!--Fim container Fluid-->
        
       </div><!--fim content-->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>