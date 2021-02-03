-- Criando DB ->
CREATE DATABASE cadastroPDO;
-- Usando DB ->
USE cadastroPDO;
-- Criando Tabela no DB ->
CREATE TABLE `mensagens_contatos` (
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `assunto` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;