-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/10/2023 às 14:34
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `IDAlunos` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Sobrenome` varchar(50) NOT NULL,
  `Idade` int(11) NOT NULL,
  `Sexo` char(1) NOT NULL,
  `Data_do_cadastro` datetime DEFAULT NULL,
  `final_do_cadastro` datetime DEFAULT NULL,
  `ManagerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `IDcontato` int(11) NOT NULL,
  `IDAlunos` int(11) DEFAULT NULL,
  `DDD` varchar(2) DEFAULT NULL,
  `numeroTelefone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `IDEndereco` int(11) NOT NULL,
  `IDAlunos` int(11) DEFAULT NULL,
  `Rua` varchar(255) NOT NULL,
  `Cidade` varchar(255) NOT NULL,
  `CEP` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `escola`
--

CREATE TABLE `escola` (
  `IDEscola` int(11) NOT NULL,
  `IDAlunos` int(11) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `professorAcompanhante` varchar(55) DEFAULT NULL,
  `periodo_aluno` int(11) DEFAULT NULL,
  `turma` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_01_15_100000_create_roles_table', 1),
(3, '2019_01_15_110000_create_users_table', 1),
(4, '2019_01_17_121504_create_categories_table', 1),
(5, '2019_01_21_130422_create_tags_table', 1),
(6, '2019_01_21_163402_create_items_table', 1),
(7, '2019_01_21_163414_create_item_tag_table', 1),
(8, '2019_03_06_132557_add_photo_column_to_users_table', 1),
(9, '2019_03_20_090438_add_color_tags_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `necessidades`
--

CREATE TABLE `necessidades` (
  `IDnecessidades` int(11) NOT NULL,
  `IDAlunos` int(11) DEFAULT NULL,
  `possui_laudo` tinyint(1) NOT NULL,
  `patologia` varchar(55) NOT NULL,
  `CID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Esse é um usuário administrador.', '2023-10-04 17:36:22', '2023-10-04 17:36:22'),
(2, 'Diretor', 'Esse é um usuário diretor', '2023-10-04 17:36:22', '2023-10-04 17:36:22'),
(3, 'Professor', 'Esse é um usuário professor', '2023-10-04 17:36:22', '2023-10-04 17:36:22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `picture`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@paper.com', '2023-10-04 17:36:22', '$2y$10$N/b7M0ApsjoymEEfdrmQi.C8RypHcSfXP7zENgEfz/KZ7FvByCOzK', NULL, 1, 'Y7EMd8wSSzjkIvpyDYgQ08LS120nmqwK3PFmKXzDZ76fURhXc9zC31ZxdaAU', '2023-10-04 17:36:22', '2023-10-04 17:36:22'),
(2, 'Creator', 'creator@paper.com', '2023-10-04 17:36:22', '$2y$10$zJ24t/.yc/6pMOKoUntnaeGOP4wQbvgOiPaBLQTvk7wj9vcKl7HUG', NULL, 2, 'Y6otcjhtof', '2023-10-04 17:36:22', '2023-10-04 17:36:22'),
(3, 'Member', 'member@paper.com', '2023-10-04 17:36:22', '$2y$10$WmwghtRrp41/a7ePwk4SgO7EQ.WaII4JQnANNms5Cl2qv8.ZWutkW', NULL, 3, 'yYUxxb7haq', '2023-10-04 17:36:22', '2023-10-04 17:36:22');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`IDAlunos`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`IDcontato`),
  ADD KEY `IDAlunos` (`IDAlunos`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`IDEndereco`),
  ADD KEY `IDAlunos` (`IDAlunos`);

--
-- Índices de tabela `escola`
--
ALTER TABLE `escola`
  ADD PRIMARY KEY (`IDEscola`),
  ADD KEY `IDAlunos` (`IDAlunos`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `necessidades`
--
ALTER TABLE `necessidades`
  ADD PRIMARY KEY (`IDnecessidades`),
  ADD KEY `IDAlunos` (`IDAlunos`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `contato_ibfk_1` FOREIGN KEY (`IDAlunos`) REFERENCES `alunos` (`IDAlunos`);

--
-- Restrições para tabelas `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`IDAlunos`) REFERENCES `alunos` (`IDAlunos`);

--
-- Restrições para tabelas `escola`
--
ALTER TABLE `escola`
  ADD CONSTRAINT `escola_ibfk_1` FOREIGN KEY (`IDAlunos`) REFERENCES `alunos` (`IDAlunos`);

--
-- Restrições para tabelas `necessidades`
--
ALTER TABLE `necessidades`
  ADD CONSTRAINT `necessidades_ibfk_1` FOREIGN KEY (`IDAlunos`) REFERENCES `alunos` (`IDAlunos`);

--
-- Restrições para tabelas `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
