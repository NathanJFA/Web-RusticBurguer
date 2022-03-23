<?php


function cadastraHamburger($imagem, $nome, $valor, $descricao, $opcoes){
    $lanches = consultaLanches();
    foreach($lanches  as $lanche){
        if($nome == $lanche->__get("nome")){
            #NÃO CADASTRA
            break;
        }
    }
    $query = 'insert into tb_lanches (nome, imagem, valor) values ('.$nome.','.$imagem.','.$valor.')';
    $conexao = getConexao();
    if($conexao != 0){
        $conexao->exec($query);
    }
}



function consultaLanches(){
    $conexao = getConexao();
    if($conexao != 0){
        try{
            $query = 'select * from tb_lanches order by nome asc';
            $stmt = $conexao->query($query); //PDO Statemet
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); //retorno associativo 
            return $resultado;
        }catch(PDOException $e){
            echo('Erro: '.$e->getCode().' Menssagem: '.$e->getMessage());
            return 0;
        }
    }
}

function getConexao(){
    $dsn = ('mysql:host=localhost;bdname=bd_sistema_hamburgueria');
    $usuario = 'root';
    $senha = '';
    try{
        $conexao = new PDO($dsn, $usuario, $senha);
        return $conexao;
        //CONECTADO
    }catch(PDOException $e){
        echo('Erro: '.$e->getCode().' Menssagem: '.$e->getMessage());
        return 0;
    }
}


?>