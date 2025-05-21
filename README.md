# CodeIgniter 4 Ecommerce

## Introdução
Este repositório é base de estudo do framework CodIgniter na versão 4 onde integrei um banco MySQL e o Tailwind CSS no front-end. O objetivo além de executar uma atividade ligada ao PHP, foi também em ampliar meus conhecimentos em diferentes frameworks da linguagem até possibilitando ponderar qual framework é mais benéfico para cada tipo de uso.

## Instruções

Primeiro configure o banco com o seguinte SQL:
```SQL
DROP DATABASE ecommerce;
CREATE DATABASE ecommerce;
USE ecommerce;

CREATE TABLE produto (
  id int NOT NULL AUTO_INCREMENT,
  nome varchar(255) DEFAULT NULL,
  descrição TEXT DEFAULT NULL,
  preço float DEFAULT NULL,
  variação varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE cupom (
  id int NOT NULL,
  percentual float DEFAULT NULL,
  nome varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE estoque (
  id_produto int DEFAULT NULL,
  quantidade int DEFAULT NULL,
  KEY FK_ESTOQUE_PRODUTO (id_produto),
  CONSTRAINT FK_ESTOQUE_PRODUTO FOREIGN KEY (id_produto) REFERENCES produto (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE pedido (
  id int NOT NULL,
  data_pedido datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE item_pedido (
  id_pedido int DEFAULT NULL,
  id_produto int DEFAULT NULL,
  KEY FK_ITEM_PEDIDO_PEDIDO (id_pedido),
  KEY FK_ITEM_PEDIDO_PRODUTO (id_produto),
  CONSTRAINT FK_ITEM_PEDIDO_PEDIDO FOREIGN KEY (id_pedido) REFERENCES pedido (id),
  CONSTRAINT FK_ITEM_PEDIDO_PRODUTO FOREIGN KEY (id_produto) REFERENCES produto (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

Configure as credenciais básicas do seu banco no arquivo `.env` conforme seu ambiente para que o projeto se conecte corretamente a base de dados MySQL.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
