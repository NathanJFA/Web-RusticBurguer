
CREATE TABLE tb_clientes(
    id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(20) NOT NULL,
    sobrenome VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
    sexo CHAR NOT NULL,
    data_nascimento DATE NOT NULL,
    senha VARCHAR(20)
);

CREATE TABLE tb_carrinhos(
    id_carrinho INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    id_lanche INT,
    valor FLOAT(8,2),
    quantidade INT NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES tb_clientes(id_cliente),
    FOREIGN KEY (id_lanche) REFERENCES tb_lanche(id_lanche)
);

CREATE TABLE tb_lanches(
    id_lanche INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    imagem VARCHAR(50),
    valor FLOAT(8,2)
);

CREATE TABLE tb_enderecos(
    id_endereco INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    rua VARCHAR(30) NOT NULL,
    bairro VARCHAR(30) NOT NULL,
    numero INT NOT NULL,
    complemento VARCHAR(30),
    ponto_referencia VARCHAR(30),
    FOREIGN KEY id_cliente REFERENCES tb_clientes(id_cliente)
);

CREATE TABLE tb_pedidos(
    id_pedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_lanche INT NOT NULL,
    valor FLOAT(8,2),
    data_compra DATE,
    cupom VARCHAR(10),
    FOREIGN KEY id_lanche REFERENCES tb_lanches(id_lanche)
);