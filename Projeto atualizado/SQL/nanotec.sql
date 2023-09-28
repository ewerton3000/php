-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 26-Nov-2018 às 21:29
-- Versão do servidor: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nanotec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` char(120) NOT NULL,
  `cpf_cnpj` bigint(20) NOT NULL,
  `tipopessoa` int(10) NOT NULL,
  `empresa_cliente` varchar(120) NOT NULL,
  `endereco_cliente` varchar(300) NOT NULL,
  `telefone_cliente` int(150) NOT NULL,
  `email_cliente` varchar(120) NOT NULL,
  `senha` varchar(120) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `cpf_cnpj`, `tipopessoa`, `empresa_cliente`, `endereco_cliente`, `telefone_cliente`, `email_cliente`, `senha`, `data_cadastro`) VALUES
(6, 'Marcos JosÃ© Amigo', 16345263761, 0, 'Lava a jato Dos amigos', 'Rua dos Amigos, numero 1040', 2133334444, 'marcosaindanao@gmail.com', 'marcos123', '2018-10-27'),
(7, 'Marcelo Brusa de Mello', 16818912351, 1, 'Domestico', 'Rua General Sezefredo', 2134681733, 'orlandoeugenio.oe@gmail.com', '123456789', '2018-11-24'),
(8, 'Orlando EugÃªnio Barros Moreira', 16191497709, 0, 'Domestico', 'Rua General Sezefredo', 2133326071, 'orlandoeugenio.oe@gmail.com', '123456789', '2018-11-24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `id_equipe` int(11) NOT NULL,
  `nome_da_equipe` varchar(130) NOT NULL,
  `cnpj_equipe` bigint(20) NOT NULL,
  `numero_integrantes` int(30) NOT NULL,
  `endereco_equipe` varchar(200) NOT NULL,
  `telefone_equipe` varchar(120) NOT NULL,
  `email_equipe` varchar(150) NOT NULL,
  `senha_equipe` varchar(130) NOT NULL,
  `chave_equipe` text NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipe`
--

INSERT INTO `equipe` (`id_equipe`, `nome_da_equipe`, `cnpj_equipe`, `numero_integrantes`, `endereco_equipe`, `telefone_equipe`, `email_equipe`, `senha_equipe`, `chave_equipe`, `data_cadastro`) VALUES
(7, 'Autotec', 12423132415412, 12, 'Rua Guilherme Tell, numero 1015', '2133445577', 'mario@autotec.com', 'auto1234', '5bdb4928903295.73501706', '0000-00-00'),
(8, 'TecTudo', 798798798798789897, 9, 'Rua Otavio Mesquita , 523', '2188985544', 'TecTudoinfo@gmail.com', 'tec123', '5bf462db2eb480.36272012', '2018-11-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipetemp`
--

CREATE TABLE IF NOT EXISTS `equipetemp` (
  `id_equipe` int(11) NOT NULL,
  `nome_da_equipe` varchar(130) NOT NULL,
  `cnpj_equipe` bigint(20) NOT NULL,
  `numero_integrantes` int(30) NOT NULL,
  `endereco_equipe` varchar(200) NOT NULL,
  `telefone_equipe` varchar(120) NOT NULL,
  `email_equipe` varchar(150) NOT NULL,
  `senha_equipe` varchar(130) NOT NULL,
  `chave_equipe` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipetemp`
--

INSERT INTO `equipetemp` (`id_equipe`, `nome_da_equipe`, `cnpj_equipe`, `numero_integrantes`, `endereco_equipe`, `telefone_equipe`, `email_equipe`, `senha_equipe`, `chave_equipe`) VALUES
(6, 'Compumecanica', 22222222222222, 2, 'Rua almirante bastos, numero 1112', '2133334444', 'Joao@compumecanica.com', 'compu10', '5bfc26b18ee870.83090440');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_adm` int(11) NOT NULL,
  `nome_adm` varchar(120) NOT NULL,
  `email_adm` varchar(120) NOT NULL,
  `usuario_adm` varchar(20) NOT NULL,
  `senha_adm` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_adm`, `nome_adm`, `email_adm`, `usuario_adm`, `senha_adm`) VALUES
(1, 'Andre Victor Ferreira Leal', 'andre.vfl3468@gmail.com', 'nanovito', 'nanotec007');

-- --------------------------------------------------------

--
-- Estrutura da tabela `integrantes`
--

CREATE TABLE IF NOT EXISTS `integrantes` (
  `idi` int(11) NOT NULL,
  `chave_integrante` text NOT NULL,
  `nomei` text NOT NULL,
  `cpfi` bigint(20) NOT NULL,
  `cargoi` text NOT NULL,
  `emaili` varchar(200) NOT NULL,
  `telefonei` int(11) NOT NULL,
  `chave_equipe` text NOT NULL,
  `curriculoi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `integrantes`
--

INSERT INTO `integrantes` (`idi`, `chave_integrante`, `nomei`, `cpfi`, `cargoi`, `emaili`, `telefonei`, `chave_equipe`, `curriculoi`) VALUES
(8, '5bfc26b18f22a3.89780778', 'JoÃ£o Marcos Anonimo', 15545456268, 'Chefe', 'joao98@gmail.com', 2133324443, '5bfc26b18ee870.83090440', 'Jo~ao Marcos Anonimo_15545456268.pdf'),
(9, '5bfc26b195a9f0.34706028', 'Romulo Albino', 25424242452, 'TÃ©cnico', 'romulo@gmail.com', 2133326677, '5bfc26b18ee870.83090440', 'Romulo Albino_25424242452.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `tipo_pedido` varchar(50) NOT NULL,
  `orcamento` float DEFAULT NULL,
  `observacao` text NOT NULL,
  `data_pedido` date NOT NULL,
  `status_p` varchar(30) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_equipe` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `cidade`, `endereco`, `tipo_pedido`, `orcamento`, `observacao`, `data_pedido`, `status_p`, `id_cliente`, `id_equipe`) VALUES
(4, 'SÃ£o Paulo', 'Rua Guilherme Tell, numero 1015', 'redes', 700, 'Caiu um raio no transformador.', '2018-11-06', 'concluido', 6, 7),
(5, 'SÃ£o Paulo', 'Rua Guilherme Tell, numero 1015', 'analise', 60, 'Caiu um raio no transformador.', '2018-11-06', 'concluido', 6, 7),
(6, 'SÃ£o Paulo', 'Rua Guilherme Tell, numero 1015', 'desenvolvimento', 160, 'Caiu um raio no transformador.', '2018-11-06', 'andamento', 6, 7),
(7, 'SÃ£o Paulo', 'Rua Guilherme Tell, numero 1015', 'montagem', 600, 'Caiu um raio no transformador.', '2018-11-06', 'aberto', 6, NULL),
(8, 'SÃ£o Paulo', 'Rua Guilherme Tell, numero 1015', 'sites', 601, 'Caiu um raio no chiuaua.', '2018-11-06', 'aberto', 6, NULL),
(9, 'Sao paulo', 'Rua Caramelo numero 1451, lado B', 'montagem', 150, 'Consertem meu poste de luz.', '2018-11-10', 'andamento', 6, 8),
(10, 'Minasgerais', 'Joana das dores 155', 'montagem', 350, 'Preciso de montagem de computadores ', '2018-11-13', 'andamento', 6, 8),
(11, 'Roraima', 'Rua dos Ãndios , 789 oca 2', 'redes', 250, 'Quebrei minha cama', '2018-11-20', 'aberto', 6, NULL),
(27, 'SÃ£o Paulo', 'Rua guarani', 'bancodedados', 0, 'Consertem meu banco.', '2018-11-21', 'aberto', 6, NULL),
(28, 'SÃ£o paulo', 'Rua PÃ£o de lÃ³, nÂ°1015', 'bancodedados', NULL, 'Preciso de um banco de dados construÃ­do para meu site sobre \r\nPokemon.', '2018-11-24', 'andamento', 6, 7),
(29, 'Rio de Janeiro', 'Rua General Sezefredo', 'desenvolvimento', NULL, 'Sou Contador e quero um Sistema que me possibilite receber as receitas dos nossos Clientes, e que facilite o trafego das informaÃ§Ãµes contÃ¡beis como notas fiscais da Empresa, e um link para consultoria contabil.', '2018-11-24', 'aberto', 8, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_completos`
--

CREATE TABLE IF NOT EXISTS `pedidos_completos` (
  `id` int(11) NOT NULL,
  `valor` text NOT NULL,
  `servico_realizado` text NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `equipe_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos_completos`
--

INSERT INTO `pedidos_completos` (`id`, `valor`, `servico_realizado`, `pedido_id`, `cliente_id`, `equipe_id`) VALUES
(8, '150,00', 'IntalaÃ§Ã£o do cabo de fibra Optica', 4, 6, 7),
(9, '2.300,00', 'Instalamos fibra Ã³ptica em todo o shopping.', 5, 6, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE IF NOT EXISTS `servico` (
  `id` int(11) NOT NULL,
  `chave_equipe` text NOT NULL,
  `banco_de_dados` tinyint(1) DEFAULT '0',
  `criacao_de_redes` tinyint(1) DEFAULT '0',
  `analise_de_sistemas` tinyint(1) DEFAULT '0',
  `desenvolvimento_de_sistemas` tinyint(1) DEFAULT '0',
  `montagem_e_manutencao` tinyint(1) DEFAULT '0',
  `criacao_de_sites` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id`, `chave_equipe`, `banco_de_dados`, `criacao_de_redes`, `analise_de_sistemas`, `desenvolvimento_de_sistemas`, `montagem_e_manutencao`, `criacao_de_sites`) VALUES
(8, '5bdb4928903295.73501706', 1, 1, 1, 1, 0, 1),
(9, '5bf462db2eb480.36272012', 0, 0, 0, 0, 1, 0),
(10, '5bf6f3d194c371.07781523', 1, 1, 0, 0, 1, 1),
(12, '', 0, 0, 0, 0, 0, 0),
(18, '5bfc26b18ee870.83090440', 1, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicointegrantes`
--

CREATE TABLE IF NOT EXISTS `servicointegrantes` (
  `id` int(11) NOT NULL,
  `chave_integrante` text NOT NULL,
  `banco_de_dados` tinyint(1) NOT NULL,
  `criacao_de_redes` tinyint(1) NOT NULL,
  `analise_de_sistemas` tinyint(1) NOT NULL,
  `desenvolvimento_de_sistemas` tinyint(1) NOT NULL,
  `montagem_e_manutencao` tinyint(1) NOT NULL,
  `criacao_de_sites` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicointegrantes`
--

INSERT INTO `servicointegrantes` (`id`, `chave_integrante`, `banco_de_dados`, `criacao_de_redes`, `analise_de_sistemas`, `desenvolvimento_de_sistemas`, `montagem_e_manutencao`, `criacao_de_sites`) VALUES
(6, '5bfc1eeecdb709.50647878', 0, 0, 0, 0, 1, 0),
(7, '5bfc1eeece9872.10871387', 1, 0, 0, 0, 0, 1),
(8, '5bfc26b18f22a3.89780778', 0, 0, 0, 0, 1, 0),
(9, '5bfc26b195a9f0.34706028', 1, 0, 0, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id_equipe`);

--
-- Indexes for table `equipetemp`
--
ALTER TABLE `equipetemp`
  ADD PRIMARY KEY (`id_equipe`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `integrantes`
--
ALTER TABLE `integrantes`
  ADD PRIMARY KEY (`idi`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cliente` (`id_cliente`),
  ADD KEY `equipe_key` (`id_equipe`);

--
-- Indexes for table `pedidos_completos`
--
ALTER TABLE `pedidos_completos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_id` (`pedido_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `equipe_id` (`equipe_id`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicointegrantes`
--
ALTER TABLE `servicointegrantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id_equipe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `equipetemp`
--
ALTER TABLE `equipetemp`
  MODIFY `id_equipe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `integrantes`
--
ALTER TABLE `integrantes`
  MODIFY `idi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `pedidos_completos`
--
ALTER TABLE `pedidos_completos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `servicointegrantes`
--
ALTER TABLE `servicointegrantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `FK_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `equipe_key` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`);

--
-- Limitadores para a tabela `pedidos_completos`
--
ALTER TABLE `pedidos_completos`
  ADD CONSTRAINT `pedidos_completos_ibfk_1` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `pedidos_completos_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `pedidos_completos_ibfk_3` FOREIGN KEY (`equipe_id`) REFERENCES `equipe` (`id_equipe`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
