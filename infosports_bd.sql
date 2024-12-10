-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/12/2024 às 23:37
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
-- Banco de dados: `infosports_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria_tb`
--

CREATE TABLE `categoria_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `dataRegistro` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `categoria_tb`
--

INSERT INTO `categoria_tb` (`id`, `nome`, `dataRegistro`) VALUES
(1, 'cond. fisico', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato_tb`
--

CREATE TABLE `contato_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `contato_tb`
--

INSERT INTO `contato_tb` (`id`, `nome`, `sobrenome`, `email`, `telefone`, `mensagem`, `data`) VALUES
(2, 'juu', 'vitoria', 'juulinda@gmail.com', 81940028922, 'oloaaaaaaaaaaaaaaa', '2024-10-07 19:50:47');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imc_tb`
--

CREATE TABLE `imc_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `peso` int(11) NOT NULL,
  `altura` float NOT NULL,
  `imc` float NOT NULL,
  `classificacao` varchar(255) NOT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `imc_tb`
--

INSERT INTO `imc_tb` (`id`, `nome`, `email`, `peso`, `altura`, `imc`, `classificacao`, `dataRegistro`) VALUES
(5, 'juiliana', 'juulinda@gmail.com', 47, 1.67, 16.85, 'magreza moderada', '2024-10-07 20:51:12'),
(6, 'Oziel', 'ozieljr@gmail.com', 73, 1.64, 27.14, 'Sobre Peso', '2024-10-09 20:26:49');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia_tb`
--

CREATE TABLE `noticia_tb` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `noticia_tb`
--

INSERT INTO `noticia_tb` (`id`, `titulo`, `descricao`, `imagem`, `categoria`, `data`) VALUES
(22, 'BASQUETE', 'O basquete é um esporte de equipe dinâmico e emocionante, jogado entre duas equipes de cinco jogadores cada, que buscam marcar pontos arremessando uma bola em uma cesta localizada no final de uma quadra. Originário dos Estados Unidos no final do século XIX, o basquete rapidamente se tornou um dos esportes mais populares do mundo. O objetivo do jogo é marcar pontos arremessando a bola através da cesta do adversário, enquanto se defende contra os ataques da equipe oponente. Os jogadores podem avançar pela quadra driblando a bola ou passando-a entre os companheiros de equipe. Estratégia, habilidade, agilidade e trabalho em equipe são fundamentais para o sucesso no basquete.', './imagens/basquete.jpg', 'cond. fisico', '2024-10-25 19:58:26'),
(23, 'BOXE', 'O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.', './imagens/boxe.jpg', 'cond. fisico', '2024-10-25 20:11:04'),
(25, 'CORRIDA', 'A corrida é uma atividade física de movimento\r\nrápido realizada pelos seres humanos há milhares de anos. No contexto\r\n moderno, a corrida é praticada tanto como uma forma de exercício físico quanto como um esporte competitivo. Os\r\ncorredores podem escolher entre uma variedade de distâncias, desde sprints curtos até maratona e ultramaratonas,\r\ndependendo de seus objetivos e níveis de condicionamento físico.\r\n\r\nA corrida oferece uma série de benefícios para a saúde, incluindo o fortalecimento do sistema\r\n                        cardiovascular, a queima de calorias, o aumento da resistência e a melhoria da saúde mental. Além disso, é uma atividade\r\ncessível, que requer pouco equipamento além de um bom par de tênis e roupas confortáveis.', './imagens/corrida.jpg', 'cond. fisico', '2024-10-25 20:14:22'),
(27, 'CROSSFIT', 'O CrossFit é uma modalidade de treinamento físico que se destaca pela sua abordagem variada e intensa, visando  desenvolvimento completo do condicionamento físico. Criado na década de 2000 pelo treinador Greg Glassman, o CrossFit combina elementos de levantamento de peso olímpico, ginástica e treinamento de alta intensidade em um programa de\r\n                        exercícios desafiador e dinâmico.\r\nOs treinos de CrossFit são conhecidos por sua diversidade, envolvendo uma ampla gama de exercícios funcionais realizados em alta intensidade e com períodos de descanso limitados. Os participantes podem esperar realizar exercícios como levantamento de peso, flexões, saltos, corridas, remadas, treinos com cordas e muitos outros\r\nmovimentos variados.', './imagens/crossfit.jpg', 'cond. fisico', '2024-10-25 20:17:07'),
(28, 'ESPORTES NA NEVE ', 'Os esportes na neve incluem uma variedade de atividades praticadas em ambientes gelados, como montanhas cobertas de neve. Estas atividades são populares em regiões com invernos rigorosos e oferecem uma mistura\r\n                        única de desafio físico, beleza natural e diversão ao ar livre. Alguns dos esportes mais populares praticados na neve incluem: Esqui alpino: Descer encostas cobertas de neve em esquis é uma prática que combina velocidade, habilidade e controle. Os praticantes podem se aventurar em pistas variadas, desde iniciantes até avançadas, desfrutando da adrenalina e da sensação de liberdade que o esqui proporciona', './imagens/esportesNaNeve.jpg', 'cond. pernas', '2024-10-30 19:58:58'),
(29, 'NATACAO', 'A natação é uma atividade física baseada na capacidade humana de se locomover na água (nadar). Como esporte, a natação aparece em competições desde meados do século XIX e esteve presente na primeira Olimpíada da era moderna em 1896,\r\n                        experimentando uma significativa evolução ao longo do tempo. A natação é um dos esportes mais praticados em todo o mundo, não apenas melhorando o condicionamento físico, mas também oferecendo diversos benefícios para a saúde.', './imagens/natacao.jpg', 'esporte aquatico', '2024-10-30 20:06:02'),
(30, 'ROUPAS', 'Desde o Renascimento, com o nascimento de uma burguesia mercantil (essa, composta apenas por homens), as roupas foram encaixadas dentro de etiquetas sociais, de forma a impor uma forte auto afirmação das classes dominantes. No século\r\n                        XIX há uma transição do mundo medieval feudal para o mundo capitalista e burguês, o mundo moderno. Em contrapartida ao Barroco e Rococó, que eram considerados movimentos com excessos de adornos, peso, decorações etc, surgem novo movimentos e junto a eles, novas tendências indumentárias.[2] Homem do início do séc. XX de terno Por volta de 1850, um estilo de vestimenta mais sóbrio, em relação àqueles presentes no Rococó, Romantismo, Neoclassicismo etc, começa\r\n                        a se popularizar dentre o vestuário masculino. Enquanto a fantasia e a decoração eram preservadas para as mulheres, de classe alta, que não trabalhavam, a hegemonia do terno e gravata, sempre com cores neutras, chegou ao guarda-roupa\r\n                        dos homens. Assim, começa-se a notar as influências da Revolução Industrial dentro da indumentária. Não só isso, mas a do trabalho também. Enquanto o homem se vestia de forma neutra e prática, a mulher demonstrava seu status social em forma de vestimenta.', './imagens/roupas.jpg', 'vestimenta', '2024-10-30 20:07:30'),
(31, 'SURF', 'O surf é um esporte aquático praticado em pranchas de surf, onde os surfistas deslizam sobre as ondas do mar,\r\n                        aproveitando a energia e a força da água para realizar manobras emocionantes. Originário das antigas culturas polinésias, o surf moderno evoluiu ao longo dos séculos para se tornar uma atividade de lazer, competição e estilo de vida em todo o mundo. Os surfistas enfrentam desafios únicos ao tentar se equilibrar e pegar as ondas, requerendo habilidades de equilíbrio, coordenação e força física. Eles buscam ondas de diferentes tamanhos e formas, dependendo de seu nível de habilidade e preferências pessoais.\"', './imagens/surf.jpg', 'esporte aquatico', '2024-10-30 20:09:46'),
(33, 'SKATE', 'O skate é um esporte radical realizado sobre uma prancha com rodas e consiste na execução de manobras no chão, pistas e em obstáculos. A prática surgiu nos Estados Unidos e atualmente é um esporte olímpico desde os jogos de Tóquio (2021). Entre as modalidades do skate estão: street, park, vertical, downhill.', './imagens/skate.jpg', 'cond. pernas', '2024-10-30 20:12:05'),
(34, 'TENIS', 'O tênis é um esporte praticado individualmente ou em duplas, onde os jogadores utilizam raquetes para rebater uma bola sobre uma quadra dividida ao meio por uma rede. Com raízes que remontam ao século XII na França, o tênis moderno evoluiu ao longo dos séculos para se tornar uma das atividades esportivas mais populares em todo o mundo. O objetivo do jogo é fazer com que a bola passe sobre a rede e caia dentro das linhas da quadra do adversário, ao mesmo tempo em que se evita que a bola rebatida pelo oponente alcance o chão dentro das próprias linhas. Isso requer uma combinação de habilidade, técnica, agilidade e estratégia.', './imagens/tenis.jpg', 'cond. pernas', '2024-10-30 20:15:07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro_tb`
--

CREATE TABLE `registro_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` longtext NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `aceitacaoCookie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `registro_tb`
--

INSERT INTO `registro_tb` (`id`, `nome`, `email`, `telefone`, `login`, `senha`, `data`, `aceitacaoCookie`) VALUES
(1, 'juu', 'juulinda@gmail.com', 81940028922, '', '', '2024-10-17 21:10:08', ''),
(3, 'juliana', 'juliana123@gmail.com', 81940028922, 'juliana', 'eeda8a21366a8c92d4db426ab0f361617c34145f', '2024-10-22 20:10:36', ''),
(5, 'juliana', 'jukjuigyf@gmail.com', 81900008008, 'juliana', 'eeda8a21366a8c92d4db426ab0f361617c34145f', '2024-12-02 21:25:46', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria_tb`
--
ALTER TABLE `categoria_tb`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contato_tb`
--
ALTER TABLE `contato_tb`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imc_tb`
--
ALTER TABLE `imc_tb`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia_tb`
--
ALTER TABLE `noticia_tb`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registro_tb`
--
ALTER TABLE `registro_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria_tb`
--
ALTER TABLE `categoria_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contato_tb`
--
ALTER TABLE `contato_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `imc_tb`
--
ALTER TABLE `imc_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `noticia_tb`
--
ALTER TABLE `noticia_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `registro_tb`
--
ALTER TABLE `registro_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
