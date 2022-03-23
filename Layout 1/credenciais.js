<?html

session_start();

require '../Entidades/Entidade.html';
//require 'config_cliente.html';
require 'servidor.html';

if(isset($_GET['intention'])){
    if($_GET['intention'] == 'register'){
        register();
    }if($_GET['intention'] == 'login'){
        login();
    }
}



function register(){

    // TA DNDO ERRO AQUI
    //$clientes = array();
    
    //REFATORAR
    #FAZER ALGUM SCRPIT PARA VERIFICAR A CONTA CRIADA (OU CONFIRMAÇÃO NO EMAIL, OU CONFIRMAÇÃO PELO DONO)
    
    #PROCURAR ALGO PARA TESTAR A VALIDADE DO EMAIL

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $senha = $_POST['password'];
    $senhaConfirm = $_POST['password_confirm'];
    

    if(isset($email) && isset($senha) && isset($senhaConfirm) && isset($sexo) && isset($nome) && isset($sobrenome) && isset($dia) && isset($mes) && isset($ano)){  
        if($senha == $senhaConfirm && $sexo != "" && $nome != "" && $sobrenome != "" && $dia != "" && $mes != "" && $ano != "" && $email != ""){
            if(strlen($senha) > 7){
                try{  
                    $regist = registerClient($nome, $sobrenome, $email, $telefone, $sexo, $dia, $mes, $ano, $senha);
                    
                    if($regist == true){
                        $_SESSION['autenticado'] = "true";
                        $_SESSION['user_logado'] = $nome;
                        $_SESSION['chave_user'] = $email;
                        header('Location: index.html?cadastro=success');
                    }else{
                        header('Location: cadastro.html?erro=erro');
                    }          
                }catch(Exception $e){
                    echo('Erro no cadastro: '.$e->getCode().' Mensagem: '.$e->getMessage());
                }
            }else{
                header('Location: cadastro.html?cadastro=senhapequena');
            }
        }else{
            header('Location: cadastro.html?cadastro=errosenha');
        }
    }else{
        header('Location: cadastro.html?cadastro=valoresnaosetados');
    }     
}
function registerClient($nome, $sobrenome, $email, $telefone, $sexo, $dia, $mes, $ano, $senha){
    $aptoProCadastro = true;
    try{
        $bd = new Base();
        $response = $bd->query('SELECT * FROM tb_clientes');
        foreach($response as $c){
            if($email == $c['email']){
                $aptoProCadastro = false;
                return false;
                break;
            }
        }
    }catch(PDOException $e){
        echo('travando na tentativa da query');
    }
    
    if($aptoProCadastro == true){
        try{
            $query = "INSERT INTO tb_clientes (nome, sobrenome, email, telefone, sexo, data_nascimento, senha) VALUES ('".$nome."','".$sobrenome."','".$email."','".$telefone."','".$sexo."','".$ano."-".$mes."-".$dia."','".$senha."')";
            $bd->exec($query);
            return true;
        }catch(PDOException $e){
            echo('erro: '.$e->getCode() .' mensagem: '.$e->getMessage());
        }
    }return false;
}

function login(){

    $bd = new Base();
    $clientes = $bd->query('select * from tb_clientes');
    
    foreach($clientes as $c){
        if(isset($_POST['email']) && $_POST['email'] ==  $c['email']){
            if(isset($_POST['senha']) && $_POST['senha'] == $c['senha']){ 
                $cliente_autenticado = true;
                $_SESSION['autenticado'] = 'true';
                $_SESSION['user_logado'] = $c["nome"];
                $_SESSION['chave_user'] = $c['email'];
                header('Location: index.html');
            }
        }
    }

    #verifica autenticacao
    if(!$cliente_autenticado){
        $_SESSION['autenticado'] = 'false';
        header('Location: login_cliente.html?login=erro');
    }
    
}

?>
