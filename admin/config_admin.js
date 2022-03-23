<?php
session_start();
require '../Layout 1/servidor.php';
require_once "../admin/query_init/one_admin.php";


if(isset($_GET['intention'])){
    if($_GET['intention'] == 'updateInfoAdmin'){
        if(updateInfoAdmin()){
            header('Location: configuracao.php?status=ok');
        }
    }if($_GET['intention'] == 'generationCoupon'){
        couponGenerator($_POST['name'], $_POST['value'], $_POST['date_expiration']);
    }
}
function displayNickname(){
    
    if(isset($_SESSION['nickname'])){
        $indentify = $_SESSION['nickname'];
        return $indentify;
    }else{
    return "ADMIN";
    }
    
}
/*
function resgister(){
    //$nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['passConfirm'];
    //$img_profile = $_POST['img'];
    

    if(isset($email) && isset($password) && isset($password_confirm)){  
        if($password == $password_confirm){
            if(strlen($password) > 7){
                try{  
                    $regist = registerAdmin($email, $password);
                    
                    if($regist == true){
                        $_SESSION['admin'] = true;
                        $_SESSION['admin'] = $email;
                        header('Location: index.php?cadastro=success');
                    }else{
                        header('Location: cadastro.php?erro=erro');
                    }          
                }catch(Exception $e){
                    echo('Erro no cadastro: '.$e->getCode().' Mensagem: '.$e->getMessage());
                }
            }else{
                header('Location: cadastro.php?cadastro=senhapequena');
            }
        }else{
            header('Location: cadastro.php?cadastro=errosenha');
        }
    }else{
        header('Location: cadastro.php?cadastro=valoresnaosetados');
    }     
}
    


function login(){
    
    $bd = new Base();
    $admins = $bd->query('select * from tb_admins');
    
    foreach($admins as $a){
        if(isset($_POST['email']) && $_POST['email'] ==  $a['email']){
            if(isset($_POST['senha']) && $_POST['senha'] == $a['senha']){ 
                $cliente_autenticado = true;
                $_SESSION['autenticado'] = 'true';
                $_SESSION['user_logado'] = $a["nome"];
                $_SESSION['chave_user'] = $a['email'];
                header('Location: index.php');
            }
        }
    }

    #verifica autenticacao
    if(!$cliente_autenticado){
        $_SESSION['autenticado'] = 'false';
        header('Location: login_cliente.php?login=erro');
    }
    
}
function registerAdmin($email, $password){
    $aptoProCadastro = true;
    try{
        $bd = new Base();
        $response = $bd->query('SELECT * FROM tb_admins');
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
            $query = "INSERT INTO tb_admins (nickname, email, senha, img_profile) VALUES ('admin','".$email."','".$password."',' null )";
            $bd->exec($query);
            return true;
        }catch(PDOException $e){
            echo('erro: '.$e->getCode() .' mensagem: '.$e->getMessage());
        }
    }return false;
} 
*/

function updateInfoAdmin(){
    $email = $_POST['email'];
    $file = $_POST['file'];
    $nickname = $_POST['nickname'];
    $bd = new Base();
    if(isset($email) || isset($file) || isset($nickname)){
        if(isset($nickname)){
            $bd->query("UPDATE tb_admins SET nickname = ". $nickname ." WHERE nickname = ".$_SESSION['nickname']);
            $_SESSION['nickname'] = $nickname;
            return true;
        }
        if(isset($email)){
            //
        }
        if(isset($file)){
            uploadFileProfile($file);
        }
    }else{
        return false;
    }
}

function uploadFileProfile($file){
    
    $_FILES['file'] = $file;

    $extension = strtolower(substr($_FILES['file']['name'], -4));
    $name = md5(time().$extension);
    $dir = "../upload_archives";

    move_uploaded_file($_FILES['file']['tmp_name'], $dir.$name);
    //PRECISO ESTUDAR COMO FAZER ISSO PRA DEIXAR REMOTO
}
function couponGenerator($name, $value, $validity){
    
    if(isset($name) && isset($value) && isset($validity)){
        $bd = new Base();
        $query = "INSERT INTO tb_coupns ('name', 'value', validity, is_enable) VALUES (".$name.",".$value.",".$validity.",".true.")";
        try{
            $bd->exec($query);
            return true;
        }catch(PDOException $e){
            echo("erro ao gravar coupon, erro detalhado: ".$e->getCode() ." mensagem: ".$e->getMessage());
        }

    }
/*
    $var = Array(
        'attempts' =>   $objeto["descricao"],
        'estado' =>     $objeto["estado"],
        'utilizador' => $objeto["id_utilizador"]
    );

    header('Content-Type: application/json');
    echo json_encode($var);
    exit;
    */
}

function createSnak($name, $value, $descript, $details, $is_enable){
    if(isset($name) && isset($value) && isset($descript) && isset($details) && isset($is_enable)){
        $query = "montar a query e criar o bd certo";
        $bd = new Base();
        try{
            $bd->exec($query);
            return true;
        }catch(PDOException $e){
            echo('erro ao criar lanche: '. $e->getCode() .' mensagem: '. $e->getMessage());
        }
    }
}


//NOME-TITULO
//VALOR
//DESCRICAO
//DETALHES DO LANCHE
//HABILITADO

?>

