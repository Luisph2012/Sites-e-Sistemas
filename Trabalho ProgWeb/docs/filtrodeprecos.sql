CREATE TABLE marca (
  id_marca INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  nome_marca VARCHAR(45)  NULL    ,
PRIMARY KEY(id_marca));



CREATE TABLE produto (
  id_produto INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  marca_id_marca INTEGER UNSIGNED  NOT NULL  ,
  nome_produto VARCHAR(45)  NULL  ,
  tipo_produto VARCHAR(45)  NULL  ,
  ano_produto YEAR  NULL  ,
  info_produto VARCHAR(255)  NULL    ,
PRIMARY KEY(id_produto)  ,
INDEX produto_FKIndex1(marca_id_marca),
  FOREIGN KEY(marca_id_marca)
    REFERENCES marca(id_marca)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE loja (
  id_loja INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  produto_id_produto INTEGER UNSIGNED  NOT NULL  ,
  nome_loja VARCHAR(45)  NULL  ,
  preco_loja NUMERIC  NULL    ,
PRIMARY KEY(id_loja)  ,
INDEX loja_FKIndex1(produto_id_produto),
  FOREIGN KEY(produto_id_produto)
    REFERENCES produto(id_produto)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);




