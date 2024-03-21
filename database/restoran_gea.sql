-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 08:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran_gea`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(100) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `prezime` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `korisnicko_ime` varchar(100) NOT NULL,
  `lozinka` varchar(100) NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `ime`, `prezime`, `email`, `korisnicko_ime`, `lozinka`, `vreme`) VALUES
(1, 'Aleksandar', 'Simic', 'aleksandar@yahoo.rs', 'aleksandar_admin', 'aleksandar123456', '2024-03-19 13:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `ponuda`
--

CREATE TABLE `ponuda` (
  `id` int(4) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `tekst` text NOT NULL,
  `cena` int(4) NOT NULL,
  `fotografija` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ponuda`
--

INSERT INTO `ponuda` (`id`, `naziv`, `tekst`, `cena`, `fotografija`) VALUES
(1, 'Slanina', 'Vojvođanski specijalitet od bele slatkovodne ribe.', 360, '20170708_112746.jpg'),
(2, 'Riblja pašteta', 'Vojvođanski specijalitet od bele slatkovodne ribe.', 320, '20170806_165838.jpg'),
(3, 'Pašteta od pileće džigerice', 'Ako spadate u one koji ne jedu kupovne paštete onda je ova domaća prava poslastica za vas.', 200, '20170810_124820.jpg'),
(4, 'Pihtije', 'Poseban specijalitet u zimskom periodu. Neizostavno predjelo na slavskoj trpezi.', 425, '20170719_125104.jpg'),
(5, 'Džigernjača i čvarci', 'Kada padne prvi mraz i zamiriše na sneg, počinjale su zabijačke. Prave se džigernjače, čvarci…', 460, '20170707_103635.jpg'),
(6, 'Švargla', 'Može biti deo doručka ili večere domaćina brojnih disnotora. Kao glavna poslastica predjelo', 510, 'svargla.jpg'),
(7, 'Vojvođanska Šunka', 'VOJVOĐANSKA ŠUNKA OPIS : Pored paprikaša, slanine, svečane supe, kulena, kobasice…', 630, 'vojvodjanska-sunka-1.jpg'),
(8, 'Kulen', 'SUVOMESNATI PROIZVOD, VRSTA KOBASICE KOJA SE TRADICIONALNO PRAVI U VOJVODINI PRIPREMA', 480, 'hladno-predjelo-kulen.jpg'),
(9, ' Rezanci s tartufima', 'Sastojci: 400 gr širokih rezanaca 50 gr maslaca 50 gr tartufa 1dl pavlake za kuvanje 1dl vode 1dl belog vina peršun, biber, naribani sir ', 600, '20180723_122246.jpg'),
(10, 'Gulaš od divljači u lepinji', 'Sastojci: 1,5 kg mesa od divljači (divlja svinja, jelen, srna) crni luk u težini mesa 6 čenova belog luka razno povrće', 620, 'batch_20180221_195331.jpg'),
(11, 'Domaća sarma', 'Domaća sarma je omiljeno jelo svih generacija, ukusna, sočna…', 505, '20180225_093732.jpg'),
(12, 'Domaća kobasica', 'Sveže kobasice stavite u tiganj sa poklopcem i nalijte vodom do polovine. Kada budu mekane, otklopite ih da ispari voda i pržite dok ne porumene. ', 450, 'batch_20170901_132150.jpg'),
(13, 'Riblji paprikaš', 'Sastojci 1 kg ribljih šnicli 1 kg crnog luka 2 dl soka od paradajza 2 dl belog vina začini kao prilog domaći rezanci Postupak Luk iseckati i pržiti na ulju. ', 540, 'batch_20170722_113631.jpg'),
(14, 'Riblja čorba', 'Omiljeno jelo mnogih ljubitelja ribe. Jede se kao predjelo ili kao glavno jelo.', 300, 'batch_20170706_124227.jpg'),
(15, 'Pečeno pile sa krompirom', 'Gastronomski užitak kome se raduje cela porodica.', 900, 'batch_20170707_131629.jpg'),
(16, 'Gulaš', 'Mađarsko tradicionalno jelo, sprema se od kiselog kupusa i svinjskog mesa. Pravo je zimsko jelo koje krepi dušu i telo.', 900, 'batch_20180315_122255.jpg'),
(17, 'Coca Cola', 'Bezalkoholno gazirano pice koja proizvodi istoimena americka kompanija', 150, '214-Coca-cola-limenka-033-l.jpg'),
(18, 'Fanta', 'Osvezavajuce bezalkoholno gazirano pice idealno uz bilo koji obrok', 150, 'fanta-vetro.jpg'),
(19, 'Coca Cola', 'Osvežavajuće bezalkoholno gazirano piće', 150, '15-09-26-RalfR-WLC-0098_-_Coca-Cola_glass_bottle_(Germany).jpg'),
(20, 'Coca Cola', 'Osvežavajuće bezalkoholno gazirano piće', 180, 'coca-cola-02.jpg'),
(21, 'Fruvita', 'Negazirani sok sa ukusom pomorandze', 180, '8834611609630-500x500.jpg'),
(22, 'Sok od jabuke', 'Beyalkoholno negayirano osvežavajuće piće', 180, 'utxx-2023-03-24-11-00-05-viber_image_2023-03-23_12-58-37-278.jpg'),
(23, 'Pivo', 'Nikšićko pivo, alk. 0.5%  ', 280, '0.5-svetlo.jpg'),
(24, 'Kraft Pivo', 'Aromatično kraft pivo, alk. 5.6% ', 360, 'Salto-Pale-Ale-transparentno-324x648.png'),
(25, 'Kraft Pivo', 'Kraft pivo, alk. 5.6% ', 420, '69.png'),
(26, 'Carlsberg', 'Carlsberg pivo, alk. 5.0%', 320, 'pivo-carlsberg-0-5l-1005998-large.jpg'),
(27, 'Crno vino', 'Crno vino vinarije Kovačević', 1700, 'Aurelius-Kovacevic-500x500-1.jpg'),
(28, 'Belo vino', 'Belo vino vinarije Kovačević', 1700, '5998813123502.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `porudzbina_info`
--

CREATE TABLE `porudzbina_info` (
  `id` int(11) NOT NULL,
  `ime_prezime` varchar(100) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `grad` varchar(100) NOT NULL,
  `posta` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefon` varchar(100) NOT NULL,
  `vreme_narucivanja` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `porudzbina_stavkee`
--

CREATE TABLE `porudzbina_stavkee` (
  `id` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `kolicina` int(4) NOT NULL,
  `cena` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ukupno`
--

CREATE TABLE `ukupno` (
  `id` int(100) NOT NULL,
  `ukupan_racun` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `korisnicko_ime` varchar(30) NOT NULL,
  `lozinka` varchar(30) NOT NULL,
  `godine` int(3) NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ime`, `prezime`, `email`, `korisnicko_ime`, `lozinka`, `godine`, `vreme`) VALUES
(1, 'Aleksandar', 'Simic', 'aleksandarsimic@gmail.com', 'aleksandars', 'aleksandar12345', 25, '2023-10-11 15:21:07'),
(3, 'Teodora', 'Jovanovic', 'teodorajovanovic@gmail.com', 'teodorajo', 'mojamalamacatiti', 23, '2023-10-19 16:26:44'),
(4, 'Nikola', 'Bozovic', 'dzonib@yahoo.com', 'dzonib1997', 'dzonijecar', 26, '2023-10-19 16:45:49'),
(5, 'Marija', 'Mihajlovic', 'marijami@yahoo.com', 'marijamihajlovic', 'marijavolisprint', 29, '2023-10-20 13:29:03'),
(6, 'Perica', 'Strbac', 'strbacpeca@google.com', 'perica1234', '4568ssss', 55, '2023-10-20 13:33:32'),
(7, 'Jovica', 'Macek', 'macekjovica@gmail.com', 'jocamacek123', 'jocavolidaseskija', 23, '2023-10-20 13:43:50'),
(11, 'Luka', 'Simic', 'lukaboss@outlook.com', 'lukaboss', 'lukavoss123456', 22, '2023-10-20 13:56:31'),
(13, 'Marko', 'Simic', 'markos@google.com', 'markos', 'marko123456', 20, '2023-10-20 14:04:12'),
(16, 'Nevenka ', 'Radisavljevic', 'nevankicar@gmail.com', 'nevenkarr', 'nevenka111', 55, '2024-03-18 17:22:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponuda`
--
ALTER TABLE `ponuda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porudzbina_info`
--
ALTER TABLE `porudzbina_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukupno`
--
ALTER TABLE `ukupno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ponuda`
--
ALTER TABLE `ponuda`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `porudzbina_info`
--
ALTER TABLE `porudzbina_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ukupno`
--
ALTER TABLE `ukupno`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
