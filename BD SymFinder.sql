-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 03-Out-2019 às 17:20
-- Versão do servidor: 5.6.39-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faqhospi_master`
--
CREATE DATABASE IF NOT EXISTS `faqhospi_master` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `faqhospi_master`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_area_medica`
--

CREATE TABLE `tb_area_medica` (
  `id` int(11) NOT NULL,
  `area_medica` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_area_medica`
--

INSERT INTO `tb_area_medica` (`id`, `area_medica`) VALUES
(1, 'Ortopedista'),
(2, 'Cardiologista'),
(3, 'Angiologista'),
(4, 'Fisioterapeuta'),
(5, 'Pneumologista'),
(6, 'Urologista'),
(7, 'Neurologista'),
(8, 'Otorrinolaringologista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_historico`
--

CREATE TABLE `tb_historico` (
  `id` int(11) NOT NULL,
  `fk_am` int(11) DEFAULT NULL,
  `fk_parte` int(11) DEFAULT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL,
  `fk_tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_historico`
--

INSERT INTO `tb_historico` (`id`, `fk_am`, `fk_parte`, `fk_id_usuario`, `fk_tipo`) VALUES
(52, 8, 4, 6, 8),
(53, 4, 2, 9, 3),
(54, 8, 4, 9, 9),
(61, 8, 4, 4, 8),
(62, 7, 4, 4, 7),
(63, 1, 2, 4, 5),
(66, 8, 4, 3, 8),
(67, 8, 4, 4, 9),
(68, 1, 2, 4, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_hospital`
--

CREATE TABLE `tb_hospital` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_hospital`
--

INSERT INTO `tb_hospital` (`id`, `nome`, `telefone`, `cidade`) VALUES
(2, 'Santa Isabela', '(47) 3215-8546', 'Blumenau'),
(14, 'Santa Casa', '(47) 3328-5348', 'Blumenau'),
(15, 'Hospital do PulmÃ£o ', '(47) 3341-9815', 'Blumenau'),
(16, 'Hospital M', '(47) 3355-1846', 'Blumenau'),
(17, 'Hospital de Santos', '(47) 34326151', 'Blumenau'),
(18, 'Hospital Manejo', '(47) 3229-1308', 'Blumenau'),
(19, 'Hospital SC', '(47) 3384-9761', 'Blumenau');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_medicos`
--

CREATE TABLE `tb_medicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fk_am` int(11) DEFAULT NULL,
  `fk_hospital` int(11) DEFAULT NULL,
  `formacao1` varchar(255) DEFAULT NULL,
  `formacao2` varchar(255) DEFAULT NULL,
  `formacao3` varchar(255) DEFAULT NULL,
  `nome_imagem` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_medicos`
--

INSERT INTO `tb_medicos` (`id`, `nome`, `telefone`, `email`, `fk_am`, `fk_hospital`, `formacao1`, `formacao2`, `formacao3`, `nome_imagem`) VALUES
(1, 'Dr. Lucas Almeida', '(47) 99657-7616', 'dr.lucas@terra.com.br', 1, 2, 'Ortopedia e Traumatologia. 2002', 'ATLS. American College of Surgeons. 2006', 'MÃ©dico Assistente, atuando na Ã¡rea de Ortopedia. 2007/-2016', 'media/images/med-1.jpg'),
(6, 'Dra. Maryna Roberta Gonsalvez', '(47) 3878-1348', 'dr.MaryGonsalvez_HP@gmail.com', 1, 14, 'Ortopedia e Traumatologia - 1997', 'GraduaÃ§Ã£o em Medicina - 2009', 'MÃ©dico, atuando na Ã¡rea de Ortopedia. 2012/-2018', 'media/images/med-5.jpg'),
(7, 'Dr. JoÃ£o Manoel ', '(47) 9328-5748', 'dr.manoel_joao@hotmail.com', 5, 15, 'GraduaÃ§Ã£o: Medicina Universidade Federal de SC - 2003', 'EspecializaÃ§Ã£o: Cirurgia do Aparelho Digestivo - 2012', 'EspecializaÃ§Ã£o: Cirurgia Vascular Hospital do PulmÃ£o - 2015', 'media/images/med-11.jpg'),
(8, 'Dra. Marcela De Souza', '(47) 1988-4841', 'Hosp_Souza2017@outlook.com', 8, 18, ' EspecializaÃ§Ã£o em Otorrinolaringologia - 2000', ' Especialista em Otorrinolaringologia pela AssociaÃ§Ã£o Brasileira de Otorrinolaringologia e Cirurgia â€“ 2008', 'Especialista em Cirurgia de CabeÃ§a e PescoÃ§o â€“ 2015', 'media/images/med-9.jpg'),
(10, 'Dr. Carlos Schimts', '(47) 9040-4408', 'CarlosSchimts_sp@gmail.com', 3, 16, 'GraduaÃ§Ã£o: Medicina Faculdade de Medicina - 2000', 'EspecializaÃ§Ã£o: Angiologia e Cirurgia Vascular - 2007', 'EspecializaÃ§Ã£o: Ginecologia e ObstetrÃ­cia - 2015', 'media/images/med-19.jpg'),
(11, 'Dr. Matheus Dos Santos ', '(47) 9597-9722', 'Matheus_neuro@hotmail.com', 7, 17, 'GraduaÃ§Ã£o: Medicina Universidade de BrasÃ­lia - 1999', 'EspecializaÃ§Ã£o: GenÃ©tica MÃ©dica - 2007', 'EspecializaÃ§Ã£o: Reumatologia Sociedade Brasileira de Reumatologia - 2010', 'media/images/med-13.jpg'),
(12, 'Dra. Jennyfer Da Costa ', '(47) 9487-2388', 'Dra_dacosta@gmail.com', 8, 19, 'EspecializaÃ§Ã£o: Otorrinolaringologia -2003', 'GraduaÃ§Ã£o: Psicologia - 2010', 'GraduaÃ§Ã£o: Medicina Escola Superior - 2016', 'media/images/med-3.jpg'),
(13, 'Dr.  Fernando Gomes', '(47) 9918-8734', 'drfernandogomes07@outlook.com', 2, 19, 'GraduaÃ§Ã£o: Medicina Universidade de SC- 2007', 'EspecializaÃ§Ã£o: Medicina Intensiva - 2013 ', 'EspecializaÃ§Ã£o: Cardiologia Hospital SC - 2017', 'media/images/med-16.jpg'),
(14, 'Dr. Guilherme Antonio', '(47) 9977-7368', 'guilherme022@outlook.com', 6, 16, 'GraduaÃ§Ã£o: Medicina Universidade Federal de SC - 2001', 'EspecializaÃ§Ã£o: Urologia Secretaria de Estado de SaÃºde - 2008', 'GraduaÃ§Ã£o: NutriÃ§Ã£o Faculdade Anhanguera de BrasÃ­lia - 2018', 'media/images/med-10.jpg'),
(15, 'Dr. VinÃ­cios De Paula ', '(47) 9576-4234', 'dr_depaula@hotmail.com', 5, 15, 'GraduaÃ§Ã£o: Psicologia - 2003', 'EspecializaÃ§Ã£o: Sociedade Brasileira de Pneumologia - 2009', 'EspecializaÃ§Ã£o: Pneumologia PediÃ¡trica - 2013', 'media/images/med-8.jpg'),
(16, 'Dr. Edimilson felÃ­pino ', '(47) 9845-6487', 'dr_edimilson_2002@gmail.com', 3, 14, 'GraduaÃ§Ã£o: Medicina Escola de CiÃªncias MÃ©dicas de SC- 1998 ', 'EspecializaÃ§Ã£o: Ginecologia e ObstetrÃ­cia Hospital Regional de Blumenau - 2005', 'EspecializaÃ§Ã£o: Cirurgia Vascular Hospital de Base do Distrito Federal - 2017', 'media/images/med-4.jpg'),
(17, 'Dra. JÃ©ssica Almeida', '(47) 9411-4199', 'Jeedealmeida@outlook.com', 4, 2, 'GraduaÃ§Ã£o: Medicina Universidade Severino Sombra - 2007 ', 'EspecializaÃ§Ã£o: Nutrologia AssociaÃ§Ã£o Brasileira de Nutrologia - 2015', 'GraduaÃ§Ã£o: Fisioterapia Faculdades Integradas - 2019', 'media/images/med-7.jpg'),
(18, 'Dra. Maria Suzane ', '(47) 3841-7051', 'SuhMariadh@hotmail.com', 7, 17, 'GraduaÃ§Ã£o: Medicina Universidade Federal de GoiÃ¡s - 2011', 'EspecializaÃ§Ã£o: Neurologia Hospital SC - 2017', 'EspecializaÃ§Ã£o: Neurologia Faculdade de CiÃªncias MÃ©dicas - 2019', 'media/images/med-17.jpg'),
(19, 'Dr. Iago Lacerda', '(47) 9828-5748', 'Iagoo_drlacerda@gmail.com', 2, 18, 'GraduaÃ§Ã£o: Medicina Escola Superior de CiÃªncias da SaÃºde - Manaus- 2004', 'EspecializaÃ§Ã£o: Cardiologia Hospital UniversitÃ¡rio de SC- 2011', 'GraduaÃ§Ã£o: NutriÃ§Ã£o Universidade de SC - 2019', 'media/images/med-2.jpg'),
(20, 'Dr. Jucelino Nunes', '(47) 3496-9115', 'Dr_nunesblu@hotmail', 4, 17, 'GraduaÃ§Ã£o: Fisioterapia Faculdade de ReabilitaÃ§Ã£o do Planalto Central - 2003', 'GraduaÃ§Ã£o: Fisioterapia Centro UniversitÃ¡rio Planalto do Distrito Federal - 2008', 'EspecializaÃ§Ã£o: Urologia Universidade - 2017', 'media/images/med-12.jpg'),
(22, 'Dr. Everaldo Carvalho ', '(47) 9481-7835', 'everaldocarvalho@outlook.com', 6, 2, 'GraduaÃ§Ã£o: Medicina Universidade de SC - 2007', 'EspecializaÃ§Ã£o: Cirurgia Geral Hospital Regional - 2012', 'EspecializaÃ§Ã£o: Urologia Hospital UniversitÃ¡rio de BrasÃ­lia - 2019', 'media/images/med-18.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_partes_corpo`
--

CREATE TABLE `tb_partes_corpo` (
  `id` int(11) NOT NULL,
  `parte_corpo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_partes_corpo`
--

INSERT INTO `tb_partes_corpo` (`id`, `parte_corpo`) VALUES
(1, 'Membro Superior'),
(2, 'Membro Inferior'),
(3, 'Tronco'),
(4, 'Cabeça');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_perguntas`
--

CREATE TABLE `tb_perguntas` (
  `id` int(11) NOT NULL,
  `fk_sin` int(11) DEFAULT NULL,
  `pergunta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_respostas`
--

CREATE TABLE `tb_respostas` (
  `id` int(11) NOT NULL,
  `frequencia` varchar(20) DEFAULT NULL,
  `nivel` varchar(100) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_respostas`
--

INSERT INTO `tb_respostas` (`id`, `frequencia`, `nivel`, `peso`) VALUES
(1, 'frequente', 'forte', 96),
(2, 'frequente', 'fraco', 80),
(3, 'ocasionalmente', 'forte', 64),
(4, 'ocasionalmente', 'fraco', 48),
(5, 'esporadico', 'forte', 32),
(6, 'esporadico', 'fraco', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sintomas`
--

CREATE TABLE `tb_sintomas` (
  `id` int(11) NOT NULL,
  `sintoma` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_sintomas`
--

INSERT INTO `tb_sintomas` (`id`, `sintoma`) VALUES
(2, 'Inchaco no local'),
(4, 'Temperatura elevada nas pernas'),
(5, 'Mudanca na cor da pele'),
(6, 'Presenca de dor no cotovelo'),
(7, 'Dor que piora com o movimento'),
(8, 'Dor na panturrilha, forte e repentina'),
(9, 'Sensacao de ter levado uma pedrada na panturrilha'),
(11, 'Dificuldade para apoiar o peso do corpo no calcanhar ou no peito do pÃ©'),
(13, 'Dor ou sensibilidade Ã³ssea'),
(14, 'DiminuiÃ§Ã£o de estatura com o passar do tempo'),
(15, 'Dor na regiÃ£o lombar devido a fraturas dos ossos da coluna vertebral'),
(16, 'Dor no pescoÃ§o devido a fraturas dos ossos da coluna vertebral'),
(17, 'Postura encurvada ou cifÃ³tica'),
(18, 'Dor imediata no local da lesÃ£o'),
(19, 'FormaÃ§Ã£o de um hematoma (marca roxa) no local da dor'),
(20, 'InchaÃ§o no local da dor'),
(21, 'Endurecimento do local afetado'),
(22, 'Dificuldade para movimentar o mÃºsculo lesionado'),
(23, 'Sensibilidade Ã  luz'),
(24, 'Dores de cabeÃ§a recorrentes'),
(25, 'NÃ¡usea'),
(26, 'Vomito'),
(27, 'Sensibilidade ao som'),
(28, 'Dor no ouvido'),
(29, 'Febre'),
(30, 'Perda de apetite'),
(31, 'Vertigem'),
(32, 'InflamaÃ§Ã£o'),
(33, 'Desequilibrio'),
(34, 'Dor de cabeÃ§a'),
(35, 'Zumbido nos ouvidos'),
(36, 'Febre alta (acima de 37,5Â° C)'),
(37, 'Tosse seca'),
(38, 'Catarro de cor amarelada ou esverdeada'),
(39, 'Falta de ar'),
(40, 'Dificuldade de respirar'),
(41, 'Ritmo cardÃ­aco acelerado'),
(42, 'Dificuldade respiratÃ³ria'),
(43, 'Dor torÃ¡cica'),
(44, 'Pele azulada por mÃ¡ circulaÃ§Ã£o'),
(45, 'PressÃ£o no peito'),
(46, 'Dor intensa na parte de baixo das costas, que pode limitar os movimentos'),
(47, 'Urina rosa, vermelha ou marrom'),
(48, 'Dor ao urinar'),
(49, 'Vontade frequente para urinar'),
(50, 'Dor que irradia das costas para a virilha'),
(51, 'Dor na frente do joelho'),
(52, 'Dor que piora ao saltar ou correr'),
(53, 'InchaÃ§o do joelho'),
(54, 'Dificuldade para movimentar o joelho'),
(55, 'SensaÃ§Ã£o de joelho duro ao acordar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipos_incomodo`
--

CREATE TABLE `tb_tipos_incomodo` (
  `id` int(11) NOT NULL,
  `tipo_incomodo` varchar(50) DEFAULT NULL,
  `fk_parte_corpo` int(11) DEFAULT NULL,
  `fk_am` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_tipos_incomodo`
--

INSERT INTO `tb_tipos_incomodo` (`id`, `tipo_incomodo`, `fk_parte_corpo`, `fk_am`) VALUES
(1, 'Tendinite', 1, 1),
(2, 'Trombose', 2, 3),
(3, 'Estiramento na panturrilha', 2, 4),
(5, 'Tendinite no joelho', 2, 1),
(6, 'Distensao no bíceps', 1, 4),
(7, 'Enxaqueca', 4, 7),
(8, 'Otite', 4, 8),
(9, 'Labirintite', 4, 8),
(10, 'Pneumonia', 3, 5),
(11, 'Pneumotórax', 3, 5),
(12, 'Pedra nos rins', 3, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ti_sin`
--

CREATE TABLE `tb_ti_sin` (
  `id` int(11) NOT NULL,
  `fk_sin` int(11) DEFAULT NULL,
  `fk_ti` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_ti_sin`
--

INSERT INTO `tb_ti_sin` (`id`, `fk_sin`, `fk_ti`) VALUES
(1, 2, 2),
(2, 4, 2),
(3, 5, 2),
(4, 7, 1),
(5, 6, 1),
(6, 2, 1),
(7, 8, 3),
(8, 9, 3),
(9, 19, 3),
(10, 11, 3),
(11, 21, 3),
(12, 51, 5),
(13, 52, 5),
(14, 53, 5),
(15, 54, 5),
(16, 55, 5),
(17, 36, 10),
(18, 37, 10),
(19, 38, 10),
(20, 39, 10),
(21, 40, 10),
(22, 41, 11),
(23, 42, 11),
(24, 43, 11),
(25, 45, 11),
(26, 44, 11),
(27, 46, 12),
(28, 47, 12),
(29, 48, 12),
(30, 49, 12),
(31, 50, 12),
(32, 18, 6),
(33, 19, 6),
(34, 20, 6),
(35, 21, 6),
(36, 22, 6),
(37, 23, 7),
(38, 24, 7),
(39, 25, 7),
(40, 26, 7),
(41, 27, 7),
(42, 28, 8),
(43, 29, 8),
(44, 30, 8),
(45, 31, 8),
(46, 32, 8),
(47, 28, 9),
(48, 33, 9),
(49, 34, 9),
(50, 35, 9),
(51, 31, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(40) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `nivel_acesso` varchar(30) DEFAULT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome_completo`, `email`, `data_nascimento`, `sexo`, `senha`, `nivel_acesso`, `token`) VALUES
(3, 'Augusto', 'augustogern@outlook.com', '2000-03-12', 'Masculino', '123', 'adm', ''),
(4, 'Thiago Lacerda', 'lacerdathiagosilva.99@gmail.com', '1999-12-15', 'Masculino', 'aaa', 'adm', ''),
(6, 'Vinicios', 'v@gmail.com', '2003-02-26', 'Masculino', '12345', 'adm', ''),
(8, 'Adriano Serpa', 'Adrianoserpa002@gmail.com', '2002-01-04', 'Masculino', '12345', 'adm', ''),
(9, 'isadoura', 'isaaa349@gmail.com', '1111-11-11', 'Masculino', '12345', 'null', ''),
(11, 'fernanda', 'fernanda@gmail.com', '1233-02-12', 'Feminino', '12345', 'null', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_area_medica`
--
ALTER TABLE `tb_area_medica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_historico`
--
ALTER TABLE `tb_historico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_am` (`fk_am`),
  ADD KEY `fk_parte` (`fk_parte`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`),
  ADD KEY `fk_tipo` (`fk_tipo`);

--
-- Indexes for table `tb_hospital`
--
ALTER TABLE `tb_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_medicos`
--
ALTER TABLE `tb_medicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_am` (`fk_am`),
  ADD KEY `fk_hospital` (`fk_hospital`);

--
-- Indexes for table `tb_partes_corpo`
--
ALTER TABLE `tb_partes_corpo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_perguntas`
--
ALTER TABLE `tb_perguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sin` (`fk_sin`);

--
-- Indexes for table `tb_respostas`
--
ALTER TABLE `tb_respostas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sintomas`
--
ALTER TABLE `tb_sintomas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tipos_incomodo`
--
ALTER TABLE `tb_tipos_incomodo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_parte_corpo` (`fk_parte_corpo`),
  ADD KEY `fk_am` (`fk_am`);

--
-- Indexes for table `tb_ti_sin`
--
ALTER TABLE `tb_ti_sin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sin` (`fk_sin`),
  ADD KEY `fk_ti` (`fk_ti`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_area_medica`
--
ALTER TABLE `tb_area_medica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_historico`
--
ALTER TABLE `tb_historico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tb_hospital`
--
ALTER TABLE `tb_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_medicos`
--
ALTER TABLE `tb_medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_partes_corpo`
--
ALTER TABLE `tb_partes_corpo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_perguntas`
--
ALTER TABLE `tb_perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_respostas`
--
ALTER TABLE `tb_respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_sintomas`
--
ALTER TABLE `tb_sintomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_tipos_incomodo`
--
ALTER TABLE `tb_tipos_incomodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_ti_sin`
--
ALTER TABLE `tb_ti_sin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_historico`
--
ALTER TABLE `tb_historico`
  ADD CONSTRAINT `tb_historico_ibfk_1` FOREIGN KEY (`fk_am`) REFERENCES `tb_area_medica` (`id`),
  ADD CONSTRAINT `tb_historico_ibfk_2` FOREIGN KEY (`fk_parte`) REFERENCES `tb_partes_corpo` (`id`),
  ADD CONSTRAINT `tb_historico_ibfk_3` FOREIGN KEY (`fk_id_usuario`) REFERENCES `tb_usuario` (`id`),
  ADD CONSTRAINT `tb_historico_ibfk_4` FOREIGN KEY (`fk_tipo`) REFERENCES `tb_tipos_incomodo` (`id`);

--
-- Limitadores para a tabela `tb_medicos`
--
ALTER TABLE `tb_medicos`
  ADD CONSTRAINT `tb_medicos_ibfk_1` FOREIGN KEY (`fk_am`) REFERENCES `tb_area_medica` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_medicos_ibfk_2` FOREIGN KEY (`fk_hospital`) REFERENCES `tb_hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_perguntas`
--
ALTER TABLE `tb_perguntas`
  ADD CONSTRAINT `tb_perguntas_ibfk_1` FOREIGN KEY (`fk_sin`) REFERENCES `tb_sintomas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_tipos_incomodo`
--
ALTER TABLE `tb_tipos_incomodo`
  ADD CONSTRAINT `tb_tipos_incomodo_ibfk_1` FOREIGN KEY (`fk_parte_corpo`) REFERENCES `tb_partes_corpo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tipos_incomodo_ibfk_2` FOREIGN KEY (`fk_am`) REFERENCES `tb_area_medica` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_ti_sin`
--
ALTER TABLE `tb_ti_sin`
  ADD CONSTRAINT `tb_ti_sin_ibfk_1` FOREIGN KEY (`fk_sin`) REFERENCES `tb_sintomas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ti_sin_ibfk_2` FOREIGN KEY (`fk_ti`) REFERENCES `tb_tipos_incomodo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
