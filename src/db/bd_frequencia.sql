-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/04/2024 às 22:33
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_frequencia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`nome`, `email`, `cpf`, `telefone`, `senha`) VALUES
('Gabriel Gomes dos Santos', '321', 123, '123', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nome_curso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome_curso`) VALUES
(1, 'Administração'),
(2, 'Almoxarife'),
(3, 'Assistente Administrativo'),
(4, 'Assistente de Logística'),
(5, 'Automação Industrial'),
(6, 'Auxiliar de Logística'),
(7, 'Confecção do Vestuário'),
(8, 'Confeitaria Básica'),
(9, 'Costura Criativa'),
(10, 'Desenvolvimento de Sistemas'),
(11, 'Eletricidade Básica'),
(12, 'Eletroeletrônica'),
(13, 'Eletricista de Manutenção Eletroeletrônica'),
(14, 'Eletricista Industrial'),
(15, 'Eletrônica'),
(16, 'Eletrotécnica'),
(17, 'Estradas'),
(18, 'Ferramenteiro de Injeção Termoplástico'),
(19, 'Gestão Industrial'),
(20, 'Impressão Offset'),
(21, 'Instalação e Reparação de Redes de Computadores'),
(22, 'Logística'),
(23, 'Manutenção Mecânica de Máquinas Industriais'),
(24, 'Mecânica Industrial'),
(25, 'Mecatrônica'),
(26, 'Modelagem do Vestuário'),
(27, 'Operador de Computador'),
(28, 'Operador de Máquinas e Ferramentas Convencionais'),
(29, 'Operador de Processos Industriais'),
(30, 'Operação e Manutenção de Equipamentos de Via Permanente'),
(31, 'Panificação'),
(32, 'Processos Administrativos'),
(33, 'Segurança do Trabalho'),
(34, 'Vestuário');

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nomeEmpresa` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nomeEmpresa`, `cnpj`, `telefone`) VALUES
(5, 'Empresa A', '123', '111-111'),
(9, 'Empresa B', '32321', '3123123'),
(10, 'METALGRAFICA PALMIRA LTDA', '12345678000100', '(11) 98765-4321'),
(11, 'VIA PERMANENTE COMÉRCIO E SERVIÇOS PARA MAQUINAS INDUSTRIAIS', '23456789000123', '(21) 12345-6789'),
(12, 'MALHARIA VENTRE LIVRE LTDA', '34567890000134', '(31) 54321-9876'),
(13, 'ARCOL CONSTRUÇÕES METÁLICAS EIRELI', '45678901000145', '(41) 87654-3210'),
(14, 'SUPERMIX CONCRETO S.A', '56789012300156', '(51) 13579-2468'),
(15, 'KHADINE MALHAS LTDA', '67890123400167', '(61) 24680-1357'),
(16, 'FAZENDA PENALVA - OBRA MANOEL TEIXEIRA LOPES', '78901234500178', '(71) 80246-3579'),
(17, 'GPS CONSTRUÇÕES LTDA', '89012345600189', '(81) 35790-2468'),
(18, 'EMPAV EMPRESA MUNICIPAL DE PAVIMENTACAO E URBANIZACAO DE JUIZ DE FORA', '90123456700190', '(91) 46802-3579'),
(19, 'TORP INDÚSTRIA TEXTIL LTDA', '01234567800190', '(01) 12345-6789'),
(20, 'R & D ROCHA MINERAÇÃO E TERRAPLANAGEM LTDA', '12034567800190', '(20) 12345-6789'),
(21, 'MONTREAL CONSTRUÇÕES LTDA', '23034567800190', '(30) 12345-6789'),
(22, 'MG CRIATIVA - CHICO REI', '34034567800190', '(40) 12345-6789'),
(23, 'CONSTRUTORA NORTESUL LTDA', '45034567800190', '(50) 12345-6789'),
(24, 'ROSS MEDICAL LTDA', '56034567800190', '(60) 12345-6789'),
(25, 'EMPAV - EMPRESA MUNICIPAL DE PAVIMENTAÇÃO E URBANIZAÇÃO', '67034567800190', '(70) 12345-6789'),
(26, 'ACR EMPREENDIMENTOS IMOBILIÁRIOS 04 SPE LTDA', '78034567800190', '(80) 12345-6789'),
(27, 'D COSTA EMPREENDIMENTOS IMOBILIÁRIOS LTDA', '89034567800190', '(90) 12345-6789'),
(28, 'INUSA ENG. E TECNOLOGIA EM ESTRUTURAS METALICAS LTDA', '90134567800190', '(91) 12345-6789'),
(29, 'DEODE INOVACAO E EFICIENCIA EM ENERGIA LTDA', '01245678900190', '(01) 23456-7890'),
(30, 'EMPRESA BRASILEIRA DE CORREIOS E TELÉGRAFOS', '123456789000190', '(12) 34567-8901'),
(31, 'CIMEC - CIMENTO & CONCRETO LTDA', '234567890001190', '(23) 45678-9012'),
(32, 'JBQ PNEUS LTDA', '345678900001190', '(34) 56789-0123'),
(33, 'SOLUTIONS AUTOMAÇÃO E SERVIÇOS INDUSTRIAIS EIRELI', '456789012001190', '(45) 67890-1234'),
(34, 'CARTÃO E EMBALAGENS LTDA', '567890123001190', '(56) 78901-2345'),
(35, 'AVANTE INDÚSTRIA E COMÉRCIO DE ALIMENTOS LTDA', '678901234001190', '(67) 89012-3456'),
(36, 'CHAMONIX MIX LTDA', '789012345001190', '(78) 90123-4567'),
(37, 'CERVEJARIA ANTUÉRPIA - CIA MINEIRA INDÚSTRIA E COMÉRCIO DE BEBIDAS LTDA', '890123456001190', '(89) 01234-5678'),
(38, 'TRIGOVITA LTDA', '901234567001190', '(90) 12345-6789'),
(39, 'ACERO SERVIÇOS E FABRICAÇÃO LTDA', '0123456780012190', '(01) 23456-7890'),
(40, 'TK ELEVADORES BRASIL LTDA', '12345678900012190', '(12) 34567-8901'),
(41, 'COFERCIL SERVIÇOS DE CONSTRUÇÃO - EIRELI', '23456789000112190', '(23) 45678-9012'),
(42, 'PEDREIRA SANTO CRISTO INDÚSTRIA E COMÉRCIO LTDA', '34567890000112190', '(34) 56789-0123'),
(43, 'J ROCHA EMPREENDIMENTOS IMOBILIÁRIOS DE JUIZ DE FORA LTDA', '45678901200112190', '(45) 67890-1234'),
(44, 'PRODOCTOR SOFTWARE S/A', '56789012300112190', '(56) 78901-2345');

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` int(11) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL,
  `id_empresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `tipo`, `id_empresa`) VALUES
(1, 'peter', '123', 1, NULL),
(2, 'gomes', '123', 2, 5),
(4, 'yan', '123', 2, 5),
(5, 'josi', '123', 2, 9);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `cpf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
