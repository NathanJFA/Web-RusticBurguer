<?html



class Cliente{
    private $nome;
    private $sobrenome;
    private $email;
    private $sexo;
    private $dataNascimento;
    private $senha;
    private $endereco;
    private $carrinho;
    private $pedido;
    #BASE PRO BANCO DE DADOS, CARD, COFIGURACOES, ENTRE OUTROS.
    
    //private $receberPromocoes = false; //FUTURAS IMPLEMENTAÇÕES
    #private $card;

    public function __contruct($nome, $sobrenome, $email, $sexo, $dia, $mes, $ano, $senha){
        $this->$nome = $nome;
        $this->$sobrenome = $sobrenome;
        $this->$email = $email;
        $this->$sexo = $sexo;
        $this->$dia = $dia;
        $this->$mes = $mes;
        $this->$ano = $ano;
        $this->$senha = $senha;
    }
    public function __set($attr, $value){
        $this->$attr = $value;
    }
    public function __get($attr){
        return $this->$attr;
    }
}
class Carrinho{
    private $itens;
    private $valor;

    public function __construct($itens, $valor){
        $this->itens = $itens;
        $this->valor = $valor;
    }
    public function __set($attr, $value){
        $this->$attr = $value;
    }
    public function __get($attr){
        return $this->$attr;
    }

}
class Pedido{
    private $lanches;
    private $valor;
    private $data;
    private $cupom;
    #private $metodo_pagamento;

    public function __construct($lanches, $valor, $data, $cupom){
        $this->lanches = $lanches;
        $this->valor = $valor;
        $this->data = $data;
        $this->$cupom = $cupom;
    }
    public function __set($attr, $value){
        $this->$attr = $value;
    }
    public function __get($attr){
        return $this->$attr;
    }

}
class Endereço{
    private $rua;
    private $bairro;
    private $numero;
    private $complemento;
    private $pontoDeReferencia;

    public function __construct($rua, $bairro, $numero, $complemento, $pontoDeReferencia){
        $this->$rua = $rua;
        $this->$bairro = $bairro;
        $this->$numero = $numero;
        $this->$complemento = $complemento;
        $this->pontoDeReferencia = $pontoDeReferencia;
    }
    public function __set($attr, $value){
        $this->$attr = $value;
    }
    public function __get($attr){
        return $this->$attr;
    }
}

class Lanche{
    private $imagem;
    private $nome;
    private $valor;
    private $descricao;
    private $opcoes;

    public function __construct($imagem, $nome, $valor, $descricao, $opcoes){
        $this->$imagem = $imagem;
        $this->$nome = $nome;
        $this->$valor = $valor;
        $this->$descricao = $descricao;
        $this->$opcoes = $opcoes;
    }
    public function __set($attr, $value){
        $this->attr = $value;
    }
    public function __get($attr){
        return $this->$attr;
    }
}
?>