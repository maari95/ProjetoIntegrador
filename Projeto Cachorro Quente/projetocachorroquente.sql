-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Jan-2023 às 00:50
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetocachorroquente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(10) NOT NULL,
  `cpfCliente` varchar(14) NOT NULL,
  `nomeCliente` varchar(100) NOT NULL,
  `telefoneCliente` varchar(15) NOT NULL,
  `emailCliente` varchar(50) NOT NULL,
  `senhaCliente` varchar(20) NOT NULL,
  `tipoLogradouro` varchar(100) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `estado` char(2) NOT NULL,
  `estatus` varchar(50) DEFAULT 'cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `cpfCliente`, `nomeCliente`, `telefoneCliente`, `emailCliente`, `senhaCliente`, `tipoLogradouro`, `logradouro`, `numero`, `complemento`, `bairro`, `municipio`, `cep`, `estado`, `estatus`) VALUES
(1, '123.456.789-10', 'Fulano', '(21)91234-5678', 'fulano@gmail.com', 'hotdog123', 'rua', 'General Baiano', '934', 'ap101', 'Miguel Couto', 'Nova Iguaçu', '26-157.000', 'RJ', 'cliente'),
(2, '123.456.789-11', 'Ciclano', '(21)91234-6789', 'ciclano@gmail.com', 'pizza123', 'Avenida', 'Itapemerim', '123', 'fundos', 'Luiz de Lemos', 'Nova Iguaçu', '16-153.000', 'RJ', 'cliente'),
(3, '111.111.111-11', 'joao pedro', '(21)94002-8922', 'pizza@gmail.com', '1234', 'rua', 'livia guida', '-4', 'ap', 'dA LUZ', 'nova iguaçu', '35.165-000', 'RJ', 'cliente'),
(5, '512.976.125-95', 'gb', '(21) 95417-9854', 'gbzada@gmail.com', '78945', 'Av.', 'Cabral', '511', '', 'Santo elias', 'Mesquita', '12.497-451', 'RJ', 'cliente'),
(8, '789.456.123-32', 'Joao Pedro', '(21)94002-8922', 'dog@gmail.com', 'zorro', 'Rua', 'Livia Guida', '434', 'ap101', 'Boa Esperança', 'Nova Iguaçu', '26.165-000', 'RJ', 'cliente'),
(15, '169.674.737-60', 'Marina', '(21)97574-7511', 'marinagomes1@gmail.com', '123456', 'Rua', 'Candida pires', '606', 'Fundos', 'Vila Rosali', 'São João', '25525-010', 'RJ', 'cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `idDepartamento` int(10) NOT NULL,
  `nomeDepartamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `nomeDepartamento`) VALUES
(1, 'vendas'),
(2, 'adm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

CREATE TABLE `feedback` (
  `expCliente` char(2) DEFAULT NULL,
  `s_preco` char(2) DEFAULT NULL,
  `s_atendimento` char(2) DEFAULT NULL,
  `indicacao` char(2) DEFAULT NULL,
  `nome_ind` varchar(100) DEFAULT NULL,
  `telefone_ind` varchar(15) DEFAULT NULL,
  `sugestao` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `idFornecedor` int(10) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `nomeFornecedor` varchar(100) NOT NULL,
  `telefoneFornecedor` varchar(15) NOT NULL,
  `nomeGerente` varchar(100) NOT NULL,
  `tipoLogradouro` varchar(100) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `estado` char(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `estatus` varchar(50) DEFAULT 'fornecedor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`idFornecedor`, `cnpj`, `nomeFornecedor`, `telefoneFornecedor`, `nomeGerente`, `tipoLogradouro`, `logradouro`, `numero`, `complemento`, `bairro`, `municipio`, `estado`, `cep`, `estatus`) VALUES
(1, '12.345.678/0001-91', 'Latícinios Milano', '(21)91234-9876', 'Danilo', 'rua', 'Dr.Cunha', '45', 'ap101', 'centro', 'Nova Iguaçu', 'RJ', '12-159.00', 'fornecedor'),
(2, '121212121212121212', 'juliana', '21975747511', 'pedro', 'rua', 'ni', '86', 'f', 'centro', 'rj', 'RJ', '54545122', 'fornecedor'),
(3, '548712124664451111', 'Marina', '21975747511', 'JOÃO', 'rua', 'candida pires', '606', '', 'centro', 'sjm', 'RJ', '25525010', 'fornecedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idFuncionario` int(10) NOT NULL,
  `cpfFuncionario` varchar(14) NOT NULL,
  `nomeFuncionario` varchar(100) NOT NULL,
  `telefoneFuncionario` varchar(15) NOT NULL,
  `emailFuncionario` varchar(50) NOT NULL,
  `senhaFuncionario` varchar(20) DEFAULT NULL,
  `tipoLogradouro` varchar(100) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `estado` char(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `idDepartamento` int(10) NOT NULL,
  `estatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idFuncionario`, `cpfFuncionario`, `nomeFuncionario`, `telefoneFuncionario`, `emailFuncionario`, `senhaFuncionario`, `tipoLogradouro`, `logradouro`, `numero`, `complemento`, `bairro`, `municipio`, `estado`, `cep`, `idDepartamento`, `estatus`) VALUES
(1, '987.654.321.98', 'Gabriel', '(21)99876-5432', 'gabriel@gmail.com', 'gbzada123', 'rua', 'livia guida', '974', 'ap101', 'Miguel Couto', 'Nova Iguaçu', '26', 'RJ', 1, NULL),
(5, '789.456.123-33', 'Gabriel', '(21)94002-8922', 'hotdog@gmail.com', '7894', 'Rua', 'Livia Guida', '434', 'ap101', 'Boa Esperança', 'Nova Iguaçu', 'RJ', '26.165-00', 1, 'adm'),
(9, '111.233.556-45', 'Marina', '(21)98888-7777', 'marina@gmail.com', '123', 'rua', 'flores', '125', '', 'centro', 'nova iguacu', 'rj', '20.500.50', 2, 'adm'),
(12, '999.555.666-77', 'Joao Pedro', '(21)94002-8922', 'pedrof@gmail.com', 'pizza', 'Rua', 'Livia Guida', '434', 'ap101', 'Boa Esperança', 'Nova Iguaçu', 'RJ', '26.165-00', 1, 'adm'),
(13, '169.674.737-60', 'Marina', '(21)97517-4751', 'marina@mail.com', '456789', 'rua', 'candida pires', '606', 'fundos', 'centro', 'são joão de meriti', 'RJ', '25525-010', 2, 'adm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itenspedido`
--

CREATE TABLE `itenspedido` (
  `idItensPedido` int(10) NOT NULL,
  `idPedido` int(10) NOT NULL,
  `idProduto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `itenspedido`
--

INSERT INTO `itenspedido` (`idItensPedido`, `idPedido`, `idProduto`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(10) NOT NULL,
  `dataPedido` datetime NOT NULL,
  `idCliente` int(10) NOT NULL,
  `idFuncionario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idPedido`, `dataPedido`, `idCliente`, `idFuncionario`) VALUES
(1, '2022-11-28 13:42:34', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(10) NOT NULL,
  `nomeProduto` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `preco` decimal(10,0) NOT NULL,
  `idFornecedor` int(10) NOT NULL,
  `estatus` varchar(50) DEFAULT 'produto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `nomeProduto`, `categoria`, `descricao`, `preco`, `idFornecedor`, `estatus`) VALUES
(1, 'HotDog de cafta', 'principal', 'Carne, cebolas carameladas, bacon', '20', 1, NULL),
(2, 'Pepsi', 'bebida', 'Pepsi 2L', '10', 1, NULL),
(4, 'salsicha', 'principal', 'salsicha perdigao', '10', 2, 'produto');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `cpfCliente` (`cpfCliente`),
  ADD UNIQUE KEY `emailCliente` (`emailCliente`),
  ADD UNIQUE KEY `senhaCliente` (`senhaCliente`);

--
-- Índices para tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`idDepartamento`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`idFornecedor`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`),
  ADD UNIQUE KEY `cpfFuncionario` (`cpfFuncionario`),
  ADD UNIQUE KEY `emailFuncionario` (`emailFuncionario`),
  ADD UNIQUE KEY `senhaFuncionario` (`senhaFuncionario`),
  ADD KEY `idDepartamento` (`idDepartamento`);

--
-- Índices para tabela `itenspedido`
--
ALTER TABLE `itenspedido`
  ADD PRIMARY KEY (`idItensPedido`),
  ADD KEY `idPedido` (`idPedido`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idFuncionario` (`idFuncionario`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idFornecedor` (`idFornecedor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `idDepartamento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `idFornecedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `itenspedido`
--
ALTER TABLE `itenspedido`
  MODIFY `idItensPedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `itenspedido`
--
ALTER TABLE `itenspedido`
  ADD CONSTRAINT `itenspedido_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`),
  ADD CONSTRAINT `itenspedido_ibfk_2` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`idProduto`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`idFornecedor`) REFERENCES `fornecedor` (`idFornecedor`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
