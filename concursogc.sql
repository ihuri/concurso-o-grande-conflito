-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Mar-2022 às 01:25
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `concursogc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `igrejas`
--

CREATE TABLE `igrejas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `igrejas`
--

INSERT INTO `igrejas` (`id`, `nome`) VALUES
(1, 'Acaraú'),
(2, 'Aeroporto'),
(3, 'Agrochá'),
(4, 'Alvorada'),
(5, 'Angatuba'),
(6, 'Arapongal'),
(7, 'Aroeira'),
(8, 'Bairro das Palmeiras'),
(9, 'Bairro dos Soares'),
(10, 'Balneário Britânia'),
(11, 'Barnabés'),
(12, 'Barra do Azeite'),
(13, 'Barra do Braço'),
(14, 'Barra do Ribeira'),
(15, 'Barra do Ribeirão da Serra'),
(16, 'Barra do Turvo'),
(17, 'Barueri'),
(18, 'Cajati'),
(19, 'Campina Verde'),
(20, 'Campo dos Ferreiras'),
(21, 'Campo Limpo'),
(22, 'Cananéia'),
(23, 'Capão Redondo'),
(24, 'Cedro'),
(25, 'Chácara Califórnia'),
(26, 'Chácara Santana'),
(27, 'Chácara Sonho Azul'),
(28, 'Cidade Santa Júlia'),
(29, 'Cipó-guaçu'),
(30, 'Cohab Adventista'),
(31, 'Colonização'),
(32, 'Conchal'),
(33, 'Curva da Figueira'),
(34, 'Divisor'),
(35, 'Eldorado'),
(36, 'Embu das Artes'),
(37, 'Embu-guaçu'),
(38, 'Espaço NT Escola do Pensar'),
(39, 'Fazenda Vale do Ribeira'),
(40, 'Fazenda Vitória'),
(41, 'Flórida II'),
(42, 'Gilda/ Ipava'),
(43, 'Icapara'),
(44, 'Iguape'),
(45, 'Ilha Comprida'),
(46, 'Iporanga'),
(47, 'Itapecerica da Serra'),
(48, 'Itapeúna'),
(49, 'Itimirim'),
(50, 'Jacupiranga'),
(51, 'Jairê'),
(52, 'Japonesa'),
(53, 'Jd. Alfredo'),
(54, 'Jd. Alto da Riviera'),
(55, 'Jd. Amália'),
(56, 'Jd. América'),
(57, 'Jd. Ana Maria'),
(58, 'Jd. Ângela'),
(59, 'Jd. Angela - Embu'),
(60, 'Jd. Aracati'),
(61, 'Jd. Branca Flor'),
(62, 'Jd. Caiçara'),
(63, 'Jd. Campestre II'),
(64, 'Jd. Campo de Fora'),
(65, 'Jd. Capela'),
(66, 'Jd. Catanduva'),
(67, 'Jd. Celeste'),
(68, 'Jd. Cinira'),
(69, 'Jd. Colombo'),
(70, 'Jd. Comercial'),
(71, 'Jd. da Luz'),
(72, 'Jd. das Margaridas'),
(73, 'Jd. das Oliveiras'),
(74, 'Jd. das Palmas'),
(75, 'Jd. das Palmeiras'),
(76, 'Jd. das Rosas'),
(77, 'Jd. do Colégio'),
(78, 'Jd. Dom José'),
(79, 'Jd. dos Moraes'),
(80, 'Jd. dos Reis'),
(81, 'Jd. Flórida'),
(82, 'Jd. Germânia'),
(83, 'Jd. Guarujá'),
(84, 'Jd. Herculano'),
(85, 'Jd. Hitoshi'),
(86, 'Jd. Horizonte Azul'),
(87, 'Jd. Independência II'),
(88, 'Jd. Ingá'),
(89, 'Jd. Ipê'),
(90, 'Jd. Irapiranga'),
(91, 'Jd. Itaoca'),
(92, 'Jd. Itopava'),
(93, 'Jd. Jacira'),
(94, 'Jd. Kagohara'),
(95, 'Jd. Laila'),
(96, 'Jd. Leme'),
(97, 'Jd. Leônidas Moreira'),
(98, 'Jd. Lídia'),
(99, 'Jd. Lilah'),
(100, 'Jd. Maria Alice'),
(101, 'Jd. Maria Rosa'),
(102, 'Jd. Mimas'),
(103, 'Jd. Mitsutani'),
(104, 'Jd. Monte Kemel'),
(105, 'Jd. Montesano'),
(106, 'Jd. Nakamura'),
(107, 'Jd. Nossa Sra. de Fátima'),
(108, 'Jd. Oriental'),
(109, 'Jd. Paranapanema'),
(110, 'Jd. Paulistano'),
(111, 'Jd. Perequê'),
(112, 'Jd. Presidente Kennedy'),
(113, 'Jd. Rosana'),
(114, 'Jd. Saint Moritz'),
(115, 'Jd. Salete'),
(116, 'Jd. Samambaia'),
(117, 'Jd. Sampaio'),
(118, 'Jd. Santa Margarida'),
(119, 'Jd. Santa Tereza'),
(120, 'Jd. Santo Antônio'),
(121, 'Jd. Santo Eduardo'),
(122, 'Jd. São Bento'),
(123, 'Jd. São Francisco'),
(124, 'Jd. São Judas Tadeu'),
(125, 'Jd. São Lourenço'),
(126, 'Jd. São Luis'),
(127, 'Jd. São Pedro'),
(128, 'Jd. São Salvador'),
(129, 'Jd. Sete Lagos'),
(130, 'Jd. Sílvia'),
(131, 'Jd. Taima'),
(132, 'Jd. Três Estrelas'),
(133, 'Jd. Trianon'),
(134, 'Jd. Umarizal'),
(135, 'Jd. Umuarama'),
(136, 'Jd. Vaz de Lima'),
(137, 'Jd. Vazame'),
(138, 'Jd. Vera Cruz'),
(139, 'Jd. Vista Alegre'),
(140, 'Jd. Yolanda'),
(141, 'Juquiá'),
(142, 'Juquitiba'),
(143, 'Jurumirim'),
(144, 'Miracatu - Central'),
(145, 'Mombaça'),
(146, 'Momuna'),
(147, 'Morro do Índio'),
(148, 'Morro Grande'),
(149, 'Morumbi'),
(150, 'Nosso Teto'),
(151, 'Oliveira Barros'),
(152, 'Paraíso/barra do Turvo'),
(153, 'Paraisópolis'),
(154, 'Pariquera-açu'),
(155, 'Pedrões'),
(156, 'Pindaúba'),
(157, 'Pioneira'),
(158, 'Pirajussara'),
(159, 'Piraporinha'),
(160, 'Ponte Alta'),
(161, 'Porto do Ribeira'),
(162, 'Pq. Araribá'),
(163, 'Pq. Cláudia'),
(164, 'Pq. das Cerejeiras'),
(165, 'Pq. do Lago'),
(166, 'Pq. Europa'),
(167, 'Pq. Fernanda'),
(168, 'Pq. Figueira Grande'),
(169, 'Pq. Independência'),
(170, 'Pq. Laguna'),
(171, 'Pq. Novo Santo Amaro'),
(172, 'Pq. Paraíso'),
(173, 'Pq. Regina'),
(174, 'Pq. Santo Antônio'),
(175, 'Promorar-são Luiz'),
(176, 'Registro'),
(177, 'Ribeirão Branco das Palmeiras'),
(178, 'Ribeirão do Salto'),
(179, 'Riviera Paulista'),
(180, 'Rocio'),
(181, 'Salvador Rocco'),
(182, 'Santa Júlia'),
(183, 'Santa Mônica'),
(184, 'Santa Rita'),
(185, 'São Lourenço da Serra'),
(186, 'Serrote'),
(187, 'Sete Barras'),
(188, 'Sítio Primavera'),
(189, 'Taboão da Serra'),
(190, 'Unasp/sp'),
(191, 'Valo Velho'),
(192, 'Vila Antunes'),
(193, 'Vila Clementina'),
(194, 'Vila Cristina'),
(195, 'Vila das Belezas'),
(196, 'Vila Godoy'),
(197, 'Vila Iasi'),
(198, 'Vila Nova'),
(199, 'Vila Nova Cidade'),
(200, 'Vila Peri Peri'),
(201, 'Vila Sanches'),
(202, 'Vila São José'),
(203, 'Vila Schunck'),
(204, 'Vista Grande'),
(205, 'Votupoca');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `igrejas`
--
ALTER TABLE `igrejas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `igrejas`
--
ALTER TABLE `igrejas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
