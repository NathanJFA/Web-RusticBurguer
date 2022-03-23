<?php

session_start();
require 'servidor.php';


if(isset($_GET['intention'])) {
    if($_GET['intention'] == 'only_register'){
        if(registerAddress() == true){
            header('Location: central_controle/endereco.php');
        }else{
            header('Location: finalizar.php?intention=only_register');
        }
    }if($_GET['intention'] == 'change_address'){
        $response = changeAddress();
        if($response != 0){
            header('Location: central_controle/endereco.php');
        }else{
            header('Location: finalizar.php?intention=change_address');
        }
    }

}

function consultarClientes($query){
    $bd = new Base();
    if($bd != 0){
        try{
            $resultado = $bd->query($query);
            return $resultado;
        }catch(PDOException $e){
            echo('Erro ao consultar clientes: '.$e->getCode().' Mensagem: '.$e->getMessage());
            return 0;
        }
    }
}

function consultClient(){
    $bd = new Base();
    $r = $bd->query('select * from tb_clientes');
    foreach($r as $c){
        if($c['email'] == $_SESSION['chave_user']){
            return $c;
        }
    }
}
function registerAddress(){
    try{
        $bd = new Base();
        $response = $bd->query("select * from tb_clientes");
        foreach($response as $c){
            if($c['email'] == $_SESSION['chave_user']){
                $query = "INSERT INTO tb_enderecos(id_cliente, rua, bairro, numero, ponto_referencia) VALUES ('".$c['id_cliente']."','".$_POST['rua']."','".$_POST['bairro']."','".$_POST['numero']."','".$_POST['ponto_referencia']."')";
                $response = $bd->exec($query);
                return true;
            }
        }return null;
    }catch(PDOException $e){
        echo("erro ao registrar endereco: ".$e->getCode() ." mensagem: ". $e->getMessage());
    }
}

function changeAddress(){
    $bd = new Base();
    try{
        $response = consultAddress();
        //$query = "UPDATE tb_enderecos SET rua = ".$_POST['rua'].", bairro = ".$_POST['bairro'].", numero = ".$_POST['numero'].", ponto_referencia = ".$_POST['ponto_referencia']." WHERE tb_enderecos.id_endereco = 7";
        $query = "UPDATE tb_enderecos SET rua = '".$_POST['rua']."', bairro = '".$_POST['bairro']."', numero = '".$_POST['numero']."' ,ponto_referencia = '".$_POST['ponto_referencia']."' WHERE `tb_enderecos`.`id_endereco` = ".$response['id_endereco'];
        $status = $bd->exec($query);
        return $status;
    }catch(PDOException $e){
        echo("erro ao alterar endereco: ".$e->getCode() ." mensagem: ". $e->getMessage());
    }
}

function consultAddress(){
    $bd = new Base();
    try{
        $response = $bd->query('select * from tb_enderecos');
        $user = consultClient();
        foreach($response as $e){
            if($e['id_cliente'] == $user['id_cliente']){
                return $e;
            }
        }return null;
    }catch(PDOException $e){
        echo('erro: '.$e->getCode() .' mensagem: '.$e->getMessage());
    }
}
function consultaLanches(){
    $bd = new Base();
    if($bd != 0){
        try{
            $query = 'select * from tb_lanches order by nome asc';
            $response = $bd->query($query);
            return $response;
        }catch(PDOException $e){
            echo('Erro ao consultar lanches: '.$e->getCode().' Mensagem: '.$e->getMessage());
            return 0;
        }
    }
}

?>