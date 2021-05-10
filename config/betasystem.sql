
CREATE TABLE `itens` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `largura` decimal(10,0) DEFAULT NULL,
  `altura` decimal(10,0) DEFAULT NULL,
  `profundidade` decimal(10,0) DEFAULT NULL,
  `cor` varchar(100) DEFAULT NULL,
  `valor` decimal(10,0) DEFAULT NULL
);

CREATE TABLE `usuarios` (
  `id` PRIMARY KEY int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `grupo` int DEFAULT NULL,
  `senha` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
);

