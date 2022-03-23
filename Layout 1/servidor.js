<?php



class Base{
    private $dsn = "mysql:host=localhost;dbname=bd_hamburgueria";
    private $user = "root";
    private $pass = "";


    /*
    function selectDataBase($dataBase){
        $this->bd = $dataBase;
    }
    */
    function conexao(){
        try{
            $conexao = new PDO($this->dsn, $this->user, $this->pass);
            return $conexao;
        }catch(PDOException $e){
            echo("erro na inicialização da conexão: ".$e);
            return null;
        }
    }
    function exec($query){
        try{
            $conexao = $this->conexao();
            if($conexao != null){
                return $conexao->exec($query);
            }else{
                return null;
            }
        }catch(PDOException $e){
            echo("erro na execução: ".$e);
        }
    }
    function query($query){
        try{
            $conexao = $this->conexao();
            if($conexao != null){
                $stmt = $conexao->query($query);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);    
            }else{
                return null;
            }
        }catch(PDOException $e){
            echo("erro na chamada da query: ".$e);
        }
    }
}


?>