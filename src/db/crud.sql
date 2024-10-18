-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Out-2024 às 20:44
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_int_user` int(11) NOT NULL,
  `nome_var_user` varchar(50) NOT NULL,
  `email_var_user` varchar(50) NOT NULL,
  `password_var_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_int_user`, `nome_var_user`, `email_var_user`, `password_var_user`) VALUES
(1, 'Vitor', 'vitor@gmail.com', '123'),
(2, 'Vitor', 'teste@gmail.com', '$2y$10$HPbGuF8P6BVdjXmsnGBhreLPK3//o1A99GNcGI9xePyhOvhkFaJ9e'),
(3, 'teste1', 'teste1@gmail.com', '$2y$10$3SbkiA9gE21hZY6WTvdC2unC52OPiNWCZ94LCyxZD5nmQe9/tl20G'),
(4, 'index', 'index@gmail.com', '$2y$10$9pSpBvezCWZXgFdr0M3GjemT/MIA4Pms5FJR.JDzis6bRrzZMEIA.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_int_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_int_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
