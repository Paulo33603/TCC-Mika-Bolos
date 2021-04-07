-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Dez-2019 às 06:12
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admnoticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE IF NOT EXISTS `noticia` (
  `codnoticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `texto` text NOT NULL,
  `imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`codnoticia`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`codnoticia`, `titulo`, `data`, `texto`, `imagem`) VALUES
(18, 'Bolo de chocolate', '2019-12-13', 'Bolo de chocolate, recheio de trufado de chocolate e mousse branca com bombons,                                                               cobertura de mousse branca, trufado de chocolate, bombons e cerejas (decorativas).                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados, e ovo.                                                               Pode conter amendoim, amÃªndoa, castanha de caju, castanha do ParÃ¡ e avelÃ£.', 'IMG-20191209-WA0002.jpg'),
(19, 'Bolo de churros', '2019-12-13', 'Bolo de churros, recheio de mousse de chocolate e doce de leite com amendoim,                                                                cobertura de mousse de chocolate, amendoim e cerejas (decorativas).                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados, ovo e amendoim.', 'IMG-20191209-WA0004.jpg'),
(20, 'Floresta negra', '2019-12-13', 'Bolo de chocolate, recheio de trufado de chocolate e mousse branca com bombons,                                                               cobertura de mousse branca, trufado de chocolate, bombons e cerejas (decorativas).                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados, e ovo.                                                               Pode conter amendoim, amÃªndoa, castanha de caju, castanha do ParÃ¡ e avelÃ£.', 'IMG-20191209-WA0006.jpg'),
(21, 'Bolo branco', '2019-12-13', 'Bolo branco, recheio de creme de chocolate branco aerado e trufas brancas,                                                                cobertura de mousse branca, raspas de chocolate branco e cerejas (decorativas).                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo.                                                               Pode conter amendoim, amÃªndoa, castanha de caju, castanha do ParÃ¡ e avelÃ£.', 'IMG-20191209-WA0008.jpg'),
(22, 'Bolo de PÃªssego', '2019-12-13', 'Bolo branco, recheio de creme de chocolate branco aerado e trufas brancas,                                                                cobertura de mousse branca, raspas de chocolate branco e cerejas (decorativas).                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo.                                                               Pode conter amendoim, amÃªndoa, castanha de caju, castanha do ParÃ¡ e avelÃ£.', 'IMG-20191209-WA0011.jpg'),
(23, 'Bolo de chocolate', '2019-12-13', 'Bolo de chocolate, recheio de mousse de chocolate e creme gelado com morangos,                                                               cobertura de raspas de chocolate, ganache de morango e morangos.                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo. ', 'IMG-20191209-WA0007.jpg'),
(24, 'Bolo de chocolate branco', '2019-12-13', 'Bolo branco, recheios de creme de churros e mousse de canela,                                                                cobertura de mousse branco, creme de churros e crocante de canela.                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo.', 'IMG-20191209-WA0016.jpg'),
(25, 'Bolo de abacaxi com morango', '2019-12-13', 'Bolo de abacaxi, recheios de creme de de merengue,                                                                cobertura de mousse branco com morango,                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo.  ', 'IMG-20191209-WA0018.jpg'),
(26, 'Bolo de chocolate', '2019-12-13', ' Bolo de chocolate, recheio de mousse de chocolate e creme gelado com morangos,                                                               cobertura de raspas de chocolate, ganache de morango e morangos.                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo. ', 'IMG-20191209-WA0015.jpg'),
(27, 'Bolo de chocolate branco', '2019-12-13', 'Bolo de chocolate com creme, recheios de leite condensado, leite condensado de chocolate e mousse de chocolate,                                                                cobertura de mousse de chocolate, leite condensado e leite condensado de chocolate,                                                                raspas de chocolate ao leite e branco.                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo.', 'IMG-20191209-WA0021.jpg'),
(28, 'Bolo de creme', '2019-12-13', 'Bolo de creme, recheios de leite condensado, leite condensado de chocolate e mousse de chocolate,                                                                cobertura de mousse de chocolate, leite condensado e leite condensado de chocolate,                                                                raspas de chocolate ao leite e branco.                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo.', 'IMG-20191209-WA0022.jpg'),
(29, 'Bolo de churros', '2019-12-13', 'Bolo de churros, recheio de mousse de chocolate e doce de leite com amendoim,                                                                cobertura de mousse de chocolate, amendoim e cerejas (decorativas).                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados, ovo e amendoim.', 'IMG-20191209-WA0023.jpg'),
(30, 'Bolo branco', '2019-12-13', 'Bolo branco, recheio de creme gelado e doce de leite com nozes, cobertura de marshmallow,                                                                nozes e cerejas (decorativas).                                                                ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados, ovo e nozes.', 'IMG-20191209-WA0026.jpg'),
(31, 'Bolo de morango', '2019-12-13', 'Bolo de morango, recheio de mousse de morango e creme gelado com morangos,                                                               cobertura de raspas de chocolate, ganache de morango e morangos.                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo.', 'IMG-20191209-WA0027.jpg'),
(32, 'Bolo branco com brigadeiro', '2019-12-13', 'Bolo branco, recheio de creme gelado e doce de leite com nozes, cobertura de marshmallow,                                                                nozes e cerejas (decorativas).                                                                ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados, ovo e nozes.', 'IMG-20191209-WA0028.jpg'),
(33, 'Bolo de chocolate branco', '2019-12-13', 'Bolo de chocolate branco, recheio de creme gelado e doce de leite com nozes, cobertura de marshmallow,                                                                nozes e cerejas (decorativas).                                                                ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados, ovo e nozes.', 'IMG-20191209-WA0030.jpg'),
(34, 'Bolo de maracujÃ¡', '2019-12-13', 'Bolo de maracujÃ¡, recheio de creme gelado e doce de leite com ameixas, cobertura mousse branca, ameixas,                                                               doce de leite e cerejas (decorativas).                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo. ', 'IMG-20191209-WA0033.jpg'),
(35, 'Bolo de chocolate com morango', '2019-12-13', 'Bolo de chocolate com morango, recheio de mousse de morango e creme gelado com morangos,                                                               cobertura de raspas de chocolate, ganache de morango e morangos.                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo.', 'IMG-20191209-WA0036.jpg'),
(36, 'Bolo de doce de leite', '2019-12-13', ' Bolo de doce de leite, recheio de mousse de chocolate e doce de leite com amendoim,                                                                cobertura de mousse de chocolate, amendoim e cerejas (decorativas).                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados, ovo e amendoim.', 'IMG-20191209-WA0039.jpg'),
(37, 'Bolo de chocolate com coco', '2019-12-13', 'Bolo de chocolate com coco, recheio de mousse de coco e creme gelado com morangos,                                                               cobertura de raspas de chocolate, ganache de morango e morangos.                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo.', 'IMG-20191209-WA0040.jpg'),
(38, 'Bolo de morango', '2019-12-13', 'Bolo de morango, recheio de mousse de morango e creme gelado com morangos,                                                               cobertura de raspas de chocolate, ganache de morango e morangos.                                                               ContÃ©m glÃºten e lactose. AlÃ©rgicos: contÃ©m farinha de trigo, leite e derivados e ovo.', 'IMG-20191209-WA0037.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `codusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomeusuario` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  PRIMARY KEY (`codusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codusuario`, `nome`, `email`, `nomeusuario`, `senha`, `tipo`) VALUES
(23, 'Administrador', 'admin@email.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
