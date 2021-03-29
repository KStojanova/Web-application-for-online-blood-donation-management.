-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 05:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(11) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_admin`, `email`, `password`) VALUES
(6, 'admin@yahoo.com', '$2y$10$n5Lxw5K0');

-- --------------------------------------------------------

--
-- Table structure for table `baranja`
--

CREATE TABLE `baranja` (
  `id_baranje` int(11) NOT NULL,
  `krvna_grupa` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `kolicina` int(20) NOT NULL,
  `lokacija` text NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `zabeleska` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baranja`
--

INSERT INTO `baranja` (`id_baranje`, `krvna_grupa`, `data`, `kolicina`, `lokacija`, `telefon`, `zabeleska`) VALUES
(1, 'AB+', '2020-09-30', 450, 'Скопје', '070900600', '/'),
(5, 'A-', '2020-10-02', 450, 'Неготино', '077005632', '/'),
(6, 'B-', '2020-10-01', 450, 'Скопје', '077005632', '/'),
(7, 'O-', '2020-10-03', 450, 'Гевгелија', '077005632', '/'),
(8, 'AB+', '2020-10-01', 450, 'Крушево', '0709000112', '/');

-- --------------------------------------------------------

--
-- Stand-in structure for view `bloodstock`
-- (See below for the actual view)
--
CREATE TABLE `bloodstock` (
`A+` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `bolnica`
--

CREATE TABLE `bolnica` (
  `bolnica_username` varchar(20) NOT NULL,
  `bolnica_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolnica`
--

INSERT INTO `bolnica` (`bolnica_username`, `bolnica_password`) VALUES
('bolnica@gmail.com', 'bolnica'),
('', '$2y$10$8YVzhYrhFmhT5'),
('admin@outlook.com', '$2y$10$4BcZZqj28V2cc');

-- --------------------------------------------------------

--
-- Table structure for table `krvna_grupa`
--

CREATE TABLE `krvna_grupa` (
  `id_grupa` int(11) NOT NULL,
  `tip_grupa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krvna_grupa`
--

INSERT INTO `krvna_grupa` (`id_grupa`, `tip_grupa`) VALUES
(1, 'A+'),
(2, 'B+'),
(3, 'O+'),
(4, 'AB+'),
(5, 'A-'),
(6, 'B-'),
(7, 'O-'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `krvna_plazma`
--

CREATE TABLE `krvna_plazma` (
  `id_plazma` int(11) NOT NULL,
  `id_krvodaritel` int(11) NOT NULL,
  `data` varchar(100) NOT NULL,
  `cas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krvna_plazma`
--

INSERT INTO `krvna_plazma` (`id_plazma`, `id_krvodaritel`, `data`, `cas`) VALUES
(1, 4, '2020-09-24', '14:20'),
(2, 34, '2020-09-27', '13:05'),
(3, 40, '2020-09-30', '15:30');

-- --------------------------------------------------------

--
-- Table structure for table `krvodaritel`
--

CREATE TABLE `krvodaritel` (
  `id_krvodaritel` int(50) NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `email` text NOT NULL,
  `grad` text NOT NULL,
  `telefon` text NOT NULL,
  `tezina` int(5) NOT NULL,
  `visina` int(5) NOT NULL,
  `pol` text NOT NULL,
  `id_grupa` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krvodaritel`
--

INSERT INTO `krvodaritel` (`id_krvodaritel`, `ime`, `prezime`, `email`, `grad`, `telefon`, `tezina`, `visina`, `pol`, `id_grupa`, `password`) VALUES
(1, 'Костадинка', 'Стојанова', 'kikistojanova97@gmail.com', 'Струмица', '072529649', 59, 163, 'женско', 1, '$2y$10$mJcFcsE2eNwYX0wD4vPlAO6M2gbcgqPa0L6xaMVP7peb.CdLSBJAe'),
(2, 'Валерија ', 'Димковска', 'valerijadimkovska@gmail.com', 'Штип', '077456812', 63, 172, 'женско', 8, '$2y$10$rzSx9ww/BUHgHOvmraVFrOp6Wx7TP/pMsi.6qf3GJ3p27XSk0ngaq'),
(3, 'Стефанија', 'Величковска', 'stefanija1@gmail.com', 'Охрид', '070523145', 64, 173, 'женско', 3, '$2y$10$ohVfgeq2ijUvSE10L7b2M.BGvwfAtovgOd1ykwDQ9uc4Nq.fnywKm'),
(4, 'Кристина ', 'Здравева', 'zdravevak@gmail.com', 'Радовиш', '078621369', 58, 163, 'женско', 2, '$2y$10$ps5lmXRkQK7yQrHqwYBgG.2pFB30mhnrj5.Mv36IaR2dh80HcUMMa'),
(5, 'Зоран', 'Захов', 'zoran@yahoo.com', 'Скопје', '072226963', 70, 174, 'машко', 7, '$2y$10$rGbjpDIgRITXlS4CJASEwOXxVG.wpfsTdi.ADFp0rYYg81wmsZ.oe'),
(6, 'Александар', 'Стојанов', 'aleksandarstojanov@yahoo.com', 'Скопје', '071840616', 69, 171, 'машко', 5, '$2y$10$tRVv5ZD9hqGhWJxLlvJ/CO8npPTgjYtLNLholGfjnKnLv6.tdzHau'),
(7, 'Моника', 'Ѓоргиевска', 'monikag@yahoo.com', 'Берово', '071459712', 57, 169, 'женско', 2, '$2y$10$eAyYZQeW8H9fkoBzTdzuJeLmHu/JNZISQHA2zIuc17S0wyz74jpRW'),
(8, 'Благој ', 'Тимов', 'blagojt@gmail.com', 'Битола', '077921365', 88, 175, 'машко', 4, '$2y$10$H8XMczWK5fPqeyJyW1zN9u6nOhi/9OvcrDAYYzE/DVW8t4tVL8rhe'),
(9, 'Лилјана', 'Јанкова', 'liljanajankova@yahoo.com', 'Богданци', '072631974', 60, 171, 'женско', 5, '$2y$10$xox6t9e..c8gg6.qFg0fZuGiJBjUZYqEVFwJ7aJfy0/9G1UeQCMwy'),
(10, 'Глигор', 'Шунтов', 'gligor@gmail.com', 'Валандово', '076932123', 66, 169, 'машко', 7, '$2y$10$HSywXvqwj0N1.bvzKmiaKungYbh3wC87FSQi3OcCWPwuieI2KNQVq'),
(11, 'Благица', 'Накова', 'nakovabl@gmail.com', 'Велес', '078147258', 66, 171, 'женско', 6, '$2y$10$dSowDEgJjKYjjqo1cWhLT..eeycwvEn6WDZsyXUrGxdXttOfZn1Nm'),
(12, 'Сашко', 'Илиев', 'saskoiliev@yahoo.com', 'Велес', '078369251', 80, 177, 'машко', 8, '$2y$10$YyPzl/At8ok7rHU9EYd6ouKWw6tD06CRBmIL0B8f5NRfZ607iZhnO'),
(13, 'Томислав', 'Стоилов', 'tomislav123@gmail.com', 'Гевгелија', '079231456', 66, 161, 'машко', 1, '$2y$10$ldLzSVeceUI0HaQ1opSVV.QSuzcdfUZ5vp4q1pIUDdroj9CPAHY4y'),
(14, 'Али', 'Алиев', 'alievali@yahoo.com', 'Гостивар', '078987159', 88, 179, 'машко', 3, '$2y$10$E02/ZOcFKIonipp9L13RUuFDMTzMxYLUlw0yodwE0ZUK0L2hkubb.'),
(15, 'Диме', 'Донев', 'dimedonev1@gmail.com', 'Дебар', '076312487', 62, 163, 'машко', 2, '$2y$10$mePe6w5JDJi5sux8wivRoedjgsebcjHmTS2f/zXBP5pLwKO/e/hhq'),
(16, 'Наум', 'Трајков', 'trajkov@yahoo.com', 'Делчево', '071264713', 74, 176, 'машко', 4, '$2y$10$MuO4jZSvZRwxEVA5hMGkWOFP/n.yQ.w3Hg1rEFhq/mln3v523o/iW'),
(18, 'Христина', 'Стоилова', 'hristina@yahoo.com', 'Демир Хисар', '072631476', 67, 172, 'женско', 7, '$2y$10$lpnsvuJZGTrQRTS1C4xWtuhOZ0x5a.Ghxa8anC/g/pZ0Z485AMzlG'),
(19, 'Симон', 'Трајков', 'simon@yahoo.com', 'Кавадарци', '071236987', 80, 171, 'машко', 7, '$2y$10$rARSZ.rOpvDtmRoBpsaXBelEwDm2TVgOxKmL/hbMPkgUjP.7yfdwC'),
(20, 'Драгана', 'Трајкова', 'dragana1@gmail.com', 'Кичево', '070111526', 55, 163, 'женско', 6, '$2y$10$X69wUDZDXRUBPl9aFxO6W.rWzitzUloEbFcIboEM5s8ec7dnwALTC'),
(21, 'Драган', 'Тренчев', 'dragant@gmail.com', 'Кочани', '077822663', 70, 175, 'машко', 8, '$2y$10$0BTCSbW7sCr0NUtU7hiGLuz5oBh.bHLUg6tTacB5jPl22SHS7It4a'),
(22, 'Давид', 'Ристовски', 'ristovskid@gmail.com', 'Кратово', '075444693', 74, 180, 'машко', 1, '$2y$10$FRotrnlCdUwGDc/S7n.SCetbVEbKu9h8IsvC1os91d.r47lWmZnpa'),
(23, 'Радица', 'Митева', 'radica@yahoo.com', 'Крива Паланка', '070715632', 60, 171, 'женско', 3, '$2y$10$z0LS80U1g0HY0wF2awPLI.pBcgTR6kQKpjClucKuMGplD0j8jjZMu'),
(24, 'Тања', 'Мицева', 'tanja@yahoo.com', 'Крушево', '078999631', 80, 171, 'женско', 2, '$2y$10$A550ve1/Uszj1YkvqZZBauMUKbn4qKraGv848ioYjxZ5FBpp7Z4Z.'),
(25, 'Стефан', 'Костов', 'stefankostov@yahoo.com', 'Куманово', '070357321', 69, 172, 'машко', 4, '$2y$10$kEqjNG3w2/Hgwbx1nkWAI.ZBgKFM/Jyzmxy.i7yl0Rjfv..zmvRJC'),
(26, 'Билјана', 'Јанева', 'biljanaj@gmail.com', 'Македонски брод', '077698789', 66, 170, 'женско', 5, '$2y$10$AZwTec5mhU/Kh8lYmypgfOO.9IsPLSnExm5SWmK3Ytyr4sD98pQEy'),
(27, 'Симона', 'Николова', 'simona@gmail.com', 'Македонска Каменица', '070389641', 66, 169, 'женско', 7, '$2y$10$kjvU2HAlolD33vW18zc8Y.1gkAOJoHn44R3cX3fN5OxryPUB6q0La'),
(28, 'Надица', 'Стојанова', 'nadicastojanova@gmail.com', 'Неготино', '071124593', 59, 168, 'женско', 6, '$2y$10$XjU5l5OPWLd.MpgNEyR6mu7SlC8d.AYsEO0HcGK76c3yaaBuPgrGu'),
(29, 'Илија', 'Тимчев', 'ilijatimcev@yahoo.com', 'Охрид', '078541369', 59, 161, 'машко', 8, '$2y$10$HAx0JqVLO1GSwbqCbK1tfe4hISXc6S5DQHJpXM8qFAG3XGO80Bj.m'),
(30, 'Марија', 'Петрова', 'petrovamarija124@gmail.com', 'Пехчево', '0709000112', 59, 177, 'женско', 1, '$2y$10$3r2uk/hnDc28Yl.5LUFqA.T1oSVZE2g9pwS6JpqnUSpdRZaX.Ysua'),
(31, 'Александар', 'Велкоски', 'velkoskial@yahoo.com', 'Прилеп', '070451114', 80, 179, 'машко', 2, '$2y$10$BexnMErSVXha806Q2/uEPukJinHlimIcljGsrPZu3uffdnw8biV9S'),
(32, 'Игор', 'Јанакиев', 'igor@yahoo.com', 'Пробиштип', '070666200', 88, 176, 'машко', 3, '$2y$10$FDfkHNRX2iW7wb8ayYmu7OjOewUuBQ4J29.1WuoKL/MbgfrLdBrh2'),
(33, 'Лилјана', 'Трајанова', 'liljanat@yahoo.com', 'Радовиш', '070632555', 62, 172, 'женско', 4, '$2y$10$9J1omWh9hN14OtLL4VDPl.UVpU.Z1oqGDnZlaw1S2jkTj0BRrBO9u'),
(34, 'Роберт', 'Ставров', 'roberts@yahoo.com', 'Ресен', '070829413', 80, 180, 'машко', 5, '$2y$10$qA4wbZ/W1ZDAJ894pjR1QOsz5KSS6oWMrXKA0SJKGVbGX4cGBaZyK'),
(35, 'Славица', 'Ставров', 'slavicast@gmail.com', 'Свети Николе', '075196312', 77, 169, 'женско', 5, '$2y$10$DdBPK2MWMoDX/96zP8kzAunexN5/hSAIHCBWpKPkA0nIOKrHV9Lzi'),
(36, 'Добрила', 'Илиева', 'dobrila@gmail.com', 'Скопје', '070617787', 55, 160, 'женско', 7, '$2y$10$ERPApwk59EwXVlAu2bL2oeJOoWugGy1XOjS72sZgnKYvrr2bL2t.O'),
(37, 'Јован', 'Габров', 'jovan@gmail.com', 'Струга', '070443621', 77, 177, 'машко', 6, '$2y$10$e1gyJuooqsXlZq09YCT83.9nMzbw2HSEs7PMOc7LXqOF4dlLy6Axm'),
(38, 'Викторија', 'Јанушева', 'januseva@gmail.com', 'Струмица', '071211312', 71, 178, 'женско', 8, '$2y$10$ZrLfpqVvTAWuLL7/dQWLoO1FzUk/0RZoNl.vVhfV5cD76y.OgLuAG'),
(39, 'Емилија', 'Ангеловска', 'emilijaang@gmail.com', 'Струмица', '071524686', 52, 164, 'женско', 1, '$2y$10$PMGoAm8mo57GLaJIzqoexOK6pBMcvje4QwkEW9Ng52oEbBQP60rFu'),
(40, 'Томе', 'Стојанов', 'tome123@gmail.com', 'Тетово', '077005632', 75, 171, 'машко', 3, '$2y$10$2Klt8JTwbGh1H7ljAD3rkuiqsNXhnHHF3jh4o1zyQHEiPjf3bqcMi'),
(41, 'Михаил', 'Донев', 'mihail@yahoo.com', 'Штип', '078197236', 70, 166, 'машко', 2, '$2y$10$nEiSJu3O6Phwd3YpdXr/1eZsBi/EJW4Lq7mz9pNqcEuWhMeAJt.de'),
(42, 'Столе', 'Тодоров', 'stole@yahoo.com', 'Свети Николе', '079416317', 66, 163, 'машко', 8, '$2y$10$hOyitDsW92E2Tt1OIYFeGefyUQkO0r0OpMJErQ9mykualzaUb6Q82'),
(43, 'Ангелина', 'Донева', 'angelina@yahoo.com', 'Радовиш', '072981674', 55, 160, 'женско', 6, '$2y$10$1E9POooXJKYsEs.GqezqvOG6SGEN1kd8sriWGEqF/hbZG8f7Z0k6e'),
(46, 'Јана ', 'Смилкова', 'janasmilkova@yahoo.com', 'Струмица', '075463152', 77, 178, 'женско', 1, '$2y$10$8gkdhxb4lm6YJj6N.F/6SuriFCSfhtdC4gQvCsfHvq6nTDqYaO2FK'),
(47, 'Томе', 'Тодоров', 'todorov@yahoo.com', 'Струмица', '070500652', 74, 171, 'машко', 1, '$2y$10$TJBKi610/2qWVEB3tD3X6OSQwxKFif6jxbKD50dzW6soTIu8TpmwC');

-- --------------------------------------------------------

--
-- Stand-in structure for view `krvodaritel_grupa`
-- (See below for the actual view)
--
CREATE TABLE `krvodaritel_grupa` (
`id_krvodaritel` int(50)
,`ime` text
,`prezime` text
,`email` text
,`grad` text
,`telefon` text
,`tezina` int(5)
,`visina` int(5)
,`pol` text
,`tip_grupa` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `stocka`
-- (See below for the actual view)
--
CREATE TABLE `stocka` (
`A-` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `stockabnegative`
-- (See below for the actual view)
--
CREATE TABLE `stockabnegative` (
`AB-` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `stockabpositive`
-- (See below for the actual view)
--
CREATE TABLE `stockabpositive` (
`AB+` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `stockbnegative`
-- (See below for the actual view)
--
CREATE TABLE `stockbnegative` (
`B-` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `stockbpositive`
-- (See below for the actual view)
--
CREATE TABLE `stockbpositive` (
`B+` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `stockonegative`
-- (See below for the actual view)
--
CREATE TABLE `stockonegative` (
`O-` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `stockopositive`
-- (See below for the actual view)
--
CREATE TABLE `stockopositive` (
`O+` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `termini`
--

CREATE TABLE `termini` (
  `id_termin` int(11) NOT NULL,
  `id_krvodaritel` int(100) NOT NULL,
  `data` text NOT NULL,
  `cas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `termini`
--

INSERT INTO `termini` (`id_termin`, `id_krvodaritel`, `data`, `cas`) VALUES
(1, 11, '2020-09-23', '14:20'),
(2, 10, '2020-09-27', '15:10'),
(3, 17, '2020-09-30', '13:00'),
(4, 36, '2020-10-01', '15:20'),
(5, 42, '2020-10-01', '10:20'),
(6, 45, '2020-09-16', '10:30'),
(7, 1, '2020-09-20', '11:37'),
(8, 1, '2020-09-30', '11:00'),
(9, 1, '2020-09-26', '11:45');

-- --------------------------------------------------------

--
-- Stand-in structure for view `terminiplasma`
-- (See below for the actual view)
--
CREATE TABLE `terminiplasma` (
`ime` text
,`prezime` text
,`telefon` text
,`data` varchar(100)
,`cas` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewtermini`
-- (See below for the actual view)
--
CREATE TABLE `viewtermini` (
`ime` text
,`prezime` text
,`telefon` text
,`data` text
,`cas` varchar(10)
);

-- --------------------------------------------------------

--
-- Structure for view `bloodstock`
--
DROP TABLE IF EXISTS `bloodstock`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bloodstock`  AS  select count(`krvodaritel_grupa`.`tip_grupa`) AS `A+` from `krvodaritel_grupa` where `krvodaritel_grupa`.`tip_grupa` = 'A+' ;

-- --------------------------------------------------------

--
-- Structure for view `krvodaritel_grupa`
--
DROP TABLE IF EXISTS `krvodaritel_grupa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `krvodaritel_grupa`  AS  select `krvodaritel`.`id_krvodaritel` AS `id_krvodaritel`,`krvodaritel`.`ime` AS `ime`,`krvodaritel`.`prezime` AS `prezime`,`krvodaritel`.`email` AS `email`,`krvodaritel`.`grad` AS `grad`,`krvodaritel`.`telefon` AS `telefon`,`krvodaritel`.`tezina` AS `tezina`,`krvodaritel`.`visina` AS `visina`,`krvodaritel`.`pol` AS `pol`,`krvna_grupa`.`tip_grupa` AS `tip_grupa` from (`krvodaritel` join `krvna_grupa` on(`krvodaritel`.`id_grupa` = `krvna_grupa`.`id_grupa`)) ;

-- --------------------------------------------------------

--
-- Structure for view `stocka`
--
DROP TABLE IF EXISTS `stocka`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stocka`  AS  select count(`krvodaritel_grupa`.`tip_grupa`) AS `A-` from `krvodaritel_grupa` where `krvodaritel_grupa`.`tip_grupa` = 'A-' ;

-- --------------------------------------------------------

--
-- Structure for view `stockabnegative`
--
DROP TABLE IF EXISTS `stockabnegative`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stockabnegative`  AS  select count(`krvodaritel_grupa`.`tip_grupa`) AS `AB-` from `krvodaritel_grupa` where `krvodaritel_grupa`.`tip_grupa` = 'AB-' ;

-- --------------------------------------------------------

--
-- Structure for view `stockabpositive`
--
DROP TABLE IF EXISTS `stockabpositive`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stockabpositive`  AS  select count(`krvodaritel_grupa`.`tip_grupa`) AS `AB+` from `krvodaritel_grupa` where `krvodaritel_grupa`.`tip_grupa` = 'AB+' ;

-- --------------------------------------------------------

--
-- Structure for view `stockbnegative`
--
DROP TABLE IF EXISTS `stockbnegative`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stockbnegative`  AS  select count(`krvodaritel_grupa`.`tip_grupa`) AS `B-` from `krvodaritel_grupa` where `krvodaritel_grupa`.`tip_grupa` = 'B-' ;

-- --------------------------------------------------------

--
-- Structure for view `stockbpositive`
--
DROP TABLE IF EXISTS `stockbpositive`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stockbpositive`  AS  select count(`krvodaritel_grupa`.`tip_grupa`) AS `B+` from `krvodaritel_grupa` where `krvodaritel_grupa`.`tip_grupa` = 'B+' ;

-- --------------------------------------------------------

--
-- Structure for view `stockonegative`
--
DROP TABLE IF EXISTS `stockonegative`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stockonegative`  AS  select count(`krvodaritel_grupa`.`tip_grupa`) AS `O-` from `krvodaritel_grupa` where `krvodaritel_grupa`.`tip_grupa` = 'O-' ;

-- --------------------------------------------------------

--
-- Structure for view `stockopositive`
--
DROP TABLE IF EXISTS `stockopositive`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stockopositive`  AS  select count(`krvodaritel_grupa`.`tip_grupa`) AS `O+` from `krvodaritel_grupa` where `krvodaritel_grupa`.`tip_grupa` = 'O+' ;

-- --------------------------------------------------------

--
-- Structure for view `terminiplasma`
--
DROP TABLE IF EXISTS `terminiplasma`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `terminiplasma`  AS  select `krvodaritel`.`ime` AS `ime`,`krvodaritel`.`prezime` AS `prezime`,`krvodaritel`.`telefon` AS `telefon`,`krvna_plazma`.`data` AS `data`,`krvna_plazma`.`cas` AS `cas` from (`krvodaritel` join `krvna_plazma` on(`krvna_plazma`.`id_krvodaritel` = `krvodaritel`.`id_krvodaritel`)) ;

-- --------------------------------------------------------

--
-- Structure for view `viewtermini`
--
DROP TABLE IF EXISTS `viewtermini`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewtermini`  AS  select `krvodaritel`.`ime` AS `ime`,`krvodaritel`.`prezime` AS `prezime`,`krvodaritel`.`telefon` AS `telefon`,`termini`.`data` AS `data`,`termini`.`cas` AS `cas` from (`krvodaritel` join `termini` on(`termini`.`id_krvodaritel` = `krvodaritel`.`id_krvodaritel`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indexes for table `baranja`
--
ALTER TABLE `baranja`
  ADD PRIMARY KEY (`id_baranje`);

--
-- Indexes for table `krvna_grupa`
--
ALTER TABLE `krvna_grupa`
  ADD PRIMARY KEY (`id_grupa`);

--
-- Indexes for table `krvna_plazma`
--
ALTER TABLE `krvna_plazma`
  ADD PRIMARY KEY (`id_plazma`),
  ADD KEY `id_krvodaritelll` (`id_krvodaritel`);

--
-- Indexes for table `krvodaritel`
--
ALTER TABLE `krvodaritel`
  ADD PRIMARY KEY (`id_krvodaritel`),
  ADD KEY `id_grupa` (`id_grupa`);

--
-- Indexes for table `termini`
--
ALTER TABLE `termini`
  ADD PRIMARY KEY (`id_termin`),
  ADD KEY `id_krvodaritel` (`id_krvodaritel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `baranja`
--
ALTER TABLE `baranja`
  MODIFY `id_baranje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `krvna_grupa`
--
ALTER TABLE `krvna_grupa`
  MODIFY `id_grupa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `krvna_plazma`
--
ALTER TABLE `krvna_plazma`
  MODIFY `id_plazma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `krvodaritel`
--
ALTER TABLE `krvodaritel`
  MODIFY `id_krvodaritel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `termini`
--
ALTER TABLE `termini`
  MODIFY `id_termin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `krvna_plazma`
--
ALTER TABLE `krvna_plazma`
  ADD CONSTRAINT `id_krvodaritelll` FOREIGN KEY (`id_krvodaritel`) REFERENCES `krvodaritel` (`id_krvodaritel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
