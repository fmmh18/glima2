-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Set-2020 às 01:29
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `glima_homo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `budget`
--

CREATE TABLE `budget` (
  `budget_id` int(11) NOT NULL,
  `budget_name` varchar(255) DEFAULT NULL,
  `budget_mail` varchar(120) DEFAULT NULL,
  `budget_phone` varchar(16) DEFAULT NULL,
  `budget_subject` varchar(120) DEFAULT NULL,
  `budget_condominium` varchar(160) DEFAULT NULL,
  `budget_message` longtext DEFAULT NULL,
  `budget_status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `budget_read` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `budget`
--

INSERT INTO `budget` (`budget_id`, `budget_name`, `budget_mail`, `budget_phone`, `budget_subject`, `budget_condominium`, `budget_message`, `budget_status`, `created_at`, `updated_at`, `budget_read`) VALUES
(3, 'Nipponflex', 'cuiaba@nipponflex.com.br', '(65) 3624-4236', 'Orçamento', 'Empresa', 'Boa tarde!\r\nPreciso de um orçamento para diárias nos dias:\r\n03/08, 05/08, 09/08, 12/08, 16/08, 19/08, 23/08, 26/08, 30/08.\r\n \r\nTotal de 9 diárias.\r\n \r\nEntrada 7:30 até 11:30, o cooperado permanece na empresa e retorna as atividades de\r\n13:30 até 16:30', 1, '2020-07-19 12:27:09', '2020-07-22 07:36:32', 1),
(4, 'auriston', 'tesouraria1.fl09@nipponflex.com.br', '(65) 3624-4236', 'Orçamento', 'Empresa', 'Bom dia!\r\nPreciso de um orçamento para diárias nos dias:\r\n03/08, 05/08, 09/08, 12/08, 16/08, 19/08, 23/08, 26/08, 30/08.\r\n \r\nTotal de 9 diárias.\r\n \r\nEntrada 7:30 até 11:30, o cooperado permanece na empresa e retorna as atividades de\r\n13:30 até 16:30\r\n\r\nOBS:  Serviço de zeladoria ( Limpeza, Café)', 1, '2020-07-19 12:27:09', '2020-07-20 05:55:33', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(150) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_neighborhood` varchar(125) DEFAULT NULL,
  `company_mail` varchar(120) DEFAULT NULL,
  `company_phone` varchar(20) DEFAULT NULL,
  `company_zipcode` varchar(9) DEFAULT NULL,
  `company_city` varchar(45) DEFAULT NULL,
  `company_state` varchar(45) DEFAULT NULL,
  `company_status` int(1) DEFAULT NULL,
  `company_phone2` varchar(20) DEFAULT NULL,
  `company_celphone` varchar(20) DEFAULT NULL,
  `company_facebook` varchar(255) DEFAULT NULL,
  `company_linkedin` varchar(255) DEFAULT NULL,
  `company_google_plus` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_address`, `company_neighborhood`, `company_mail`, `company_phone`, `company_zipcode`, `company_city`, `company_state`, `company_status`, `company_phone2`, `company_celphone`, `company_facebook`, `company_linkedin`, `company_google_plus`, `created_at`, `updated_at`) VALUES
(1, 'GL Lima Terceirização', 'Rua Almirante Pedro Álvares Cabral, n° 204', 'Jardim Cuiabá', 'contato@gllimaterceirizacao.com.br', '(65) 3023-0106', '78043-210', 'Cuiabá', 'MT', 1, '(65) 3023-2965', NULL, '', NULL, NULL, '2020-06-19 22:05:32', '2020-06-19 22:05:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_mail` varchar(120) DEFAULT NULL,
  `contact_message` longtext DEFAULT NULL,
  `contact_status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `contact_phone` varchar(20) DEFAULT NULL,
  `contact_subject` varchar(130) DEFAULT NULL,
  `contact_read` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_mail`, `contact_message`, `contact_status`, `created_at`, `updated_at`, `contact_phone`, `contact_subject`, `contact_read`) VALUES
(10, 'Flavio', 'fmmh18@gmail.com', 'teste', 1, '2020-06-23 04:22:43', '2020-07-22 07:35:04', '(65) 99947-8142', 'Dúvidas', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `log_ip` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `log_user` varchar(45) DEFAULT NULL,
  `log_page` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`log_id`, `log_ip`, `created_at`, `updated_at`, `log_user`, `log_page`) VALUES
(1, '::1', '2020-07-19 08:43:40', '2020-07-19 08:43:40', '1', 'login'),
(2, '::1', '2020-07-20 11:02:59', '2020-07-20 11:02:59', '1', 'login');

-- --------------------------------------------------------

--
-- Estrutura da tabela `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_html` longtext DEFAULT NULL,
  `page_tag` varchar(45) DEFAULT NULL,
  `page_status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `page`
--

INSERT INTO `page` (`page_id`, `page_name`, `page_html`, `page_tag`, `page_status`, `created_at`, `updated_at`) VALUES
(1, 'Sobre', '<p>A Grupo Lima Prime terceirização LTDA, junto com nossos colaboradores garantimos um serviço de qualidade, confiança e tranquilidade nos serviços que prestamos. Apenas grandes empresas podem oferecer aos nossos clientes funcionários competentes que atuam com satisfação, por isso nós pagamos um salário diferenciado. Além da reciclagem para que estejam sempre comprometidos com suas funções e assim gerar confiança e segurança aos nossos clientes.</p><p>Sabemos conversar, orientar, reconhecer e compensar os nossos colaboradores pelos serviços prestados. Tudo isso e valorizado na confiabilidade e transparência da empresa.</p><p>Na Grupo Lima Prime Terceirização LTDA M.E prestamos os seguintes serviços:</p><p><ul><li>Portaria (24horas)</li><li>Garagista e Vigia (24horas)</li><li>Serviços Gerais</li><li>Copeira</li><li>Recepcionista</li><li>Digitadora</li><li>Encarregado</li><li>Manobrista</li><li>Zelador</li><li>Encarregado de Piso</li><li>Administração de condomínios</li><li>Departamento jurídico de cobrança</li><li>Damos suporte à empresa que não terceiriza com os nosso: diaristas, porteiros e serviços gerais</li></ul></p>', 'sobre', 1, '2020-06-19 22:06:06', '2020-06-19 22:06:06'),
(5, 'teste', '<p>testeasd dsaadsdas</p>\r\n', 'teste ', 1, '2020-07-19 05:49:33', '2020-07-19 00:41:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(45) DEFAULT NULL,
  `service_image` varchar(155) DEFAULT NULL,
  `service_description` longtext DEFAULT NULL,
  `service_status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_image`, `service_description`, `service_status`, `created_at`, `updated_at`) VALUES
(1, 'Portaria', 'assets/media/service/portaria.jpg', 'Executa atividades relacionadas à fiscalização da propriedade. Etem a responsabilidade de estar atento a tudo o que acontece ao seu redor.', 1, '2020-06-19 22:06:48', '2020-07-20 04:54:26'),
(2, 'Secretaria', 'assets/media/service/secretaria.jpg', 'Recepciona, controla e encaminha visitantes ao local desejado. Responde perguntas gerais sobre a empresa, ou direciona a quem possa responder.', 1, '2020-06-19 22:06:48', '2020-07-20 04:54:26'),
(3, 'Zeladoria', 'assets/media/service/zelador.jpg', 'GL Lima Prime Terceirização disponibiliza profissionais treinados e qualificados para a prestação de serviços com maior eficiência para nossos clientes.', 1, '2020-06-19 22:06:48', '2020-07-21 19:21:49'),
(4, 'Garagista', NULL, NULL, 1, '2020-07-22 20:15:03', '2020-07-22 20:15:03'),
(5, 'Vigilante', NULL, NULL, 1, '2020-07-22 20:15:03', '2020-07-22 20:15:03'),
(6, 'Serviço Geral', NULL, NULL, 1, '2020-07-22 20:15:03', '2020-07-22 20:15:03'),
(7, 'Copeira', NULL, NULL, 1, '2020-07-22 20:15:03', '2020-07-22 20:15:03'),
(8, 'Digitadora', NULL, NULL, 1, '2020-07-22 20:15:03', '2020-07-22 20:15:03'),
(9, 'Encarregado', NULL, NULL, 1, '2020-07-22 20:15:03', '2020-07-22 20:15:03'),
(10, 'Manobrista', NULL, NULL, 1, '2020-07-22 20:15:03', '2020-07-22 20:15:03'),
(11, 'Encarregado de Piso', NULL, NULL, 1, '2020-07-22 20:15:03', '2020-07-22 20:15:03'),
(12, 'Administrador de Condomínio', NULL, NULL, 1, '2020-07-22 20:15:03', '2020-07-22 20:15:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `upload`
--

CREATE TABLE `upload` (
  `upload_id` int(11) NOT NULL,
  `upload_oldname` varchar(255) DEFAULT NULL,
  `upload_name` varchar(255) DEFAULT NULL,
  `upload_type` varchar(120) DEFAULT NULL,
  `upload_status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `upload_size` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_mail` varchar(120) DEFAULT NULL,
  `user_date` date DEFAULT NULL,
  `user_cpf` varchar(11) DEFAULT NULL,
  `user_zipcode` varchar(9) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_neighborhood` varchar(120) DEFAULT NULL,
  `user_complement` varchar(255) DEFAULT NULL,
  `user_city` varchar(255) DEFAULT NULL,
  `user_state` varchar(150) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_level` int(1) DEFAULT NULL,
  `user_access` int(1) DEFAULT 0,
  `user_phone` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_mail`, `user_date`, `user_cpf`, `user_zipcode`, `user_address`, `user_neighborhood`, `user_complement`, `user_city`, `user_state`, `user_password`, `user_status`, `created_at`, `updated_at`, `user_level`, `user_access`, `user_phone`) VALUES
(1, 'Flavio Hayashida', 'fmmh18@gmail.com', '1986-07-19', '007.955.311', '78095-337', 'Rua D-5', 'Parque Cuiabá', '', 'Cuiabá', 'MT', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-06-22 03:11:49', '2020-06-27 01:47:19', 1, 0, '(65) 99947-8142');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacancy`
--

CREATE TABLE `vacancy` (
  `vacancy_id` int(11) NOT NULL,
  `vacancy_id_service` int(11) DEFAULT NULL,
  `vacancy_quantity` int(11) DEFAULT NULL,
  `vacancy_date_initial` timestamp NULL DEFAULT NULL,
  `vacancy_date_final` timestamp NULL DEFAULT NULL,
  `vacancy_status` int(1) DEFAULT NULL,
  `vacancy_read` int(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacancy_user`
--

CREATE TABLE `vacancy_user` (
  `vacancy_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`budget_id`);

--
-- Índices para tabela `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Índices para tabela `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Índices para tabela `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Índices para tabela `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Índices para tabela `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Índices para tabela `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`upload_id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Índices para tabela `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`vacancy_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `budget`
--
ALTER TABLE `budget`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `upload`
--
ALTER TABLE `upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
