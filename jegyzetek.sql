-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 06:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jegyzetek`
--

-- --------------------------------------------------------

--
-- Table structure for table `cikkek`
--

CREATE TABLE `cikkek` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `cikkek` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cikkek`
--

INSERT INTO `cikkek` (`id`, `name`, `cikkek`) VALUES
(1, 'cikk1', 'Mi a hálózat?\r\nSokféle hálózat létezik, melyek különböző szolgáltatásokat biztosítanak számunkra.\r\nA hálózatok biztosítják, hogy emberek és eszközök kapcsolódjanak össze,\r\nfüggetlenül attól, hogy a világ mely pontján vannak.\r\nAz 1990-es években és azt megelőzően, a kommunikációs technológia különálló\r\nhálózatokat használt a hang-, videó- és adat kommunikációra. Mindegyik hálózatban\r\nmásfajta eszköz biztosította a kapcsolódást. A telefonok, a televíziók és a\r\nszámítógépek sajátos technológiákat és különálló hálózatokat használtak a\r\nkommunikációhoz.\r\nAz új technológiák egy olyan újfajta hálózatot hoztak létre, amely képes hangot,\r\nvideót és adatokat is szállítani ugyanazon a kommunikációs csatornán vagy\r\nhálózaton keresztül.\r\nKét számítógépet összekapcsoltnak mondunk, ha azok képesek információcserére. Az\r\nösszekapcsolást nem feltétlenül rézhuzallal kell megoldani, történhet lézersugárral,\r\nmikrohullámmal és távközlési műholdakkal is.'),
(2, 'cikk2', 'Területi kiterjedés alapján\r\n• WAN - a legnagyobbak a nagykiterjedésű (esetenként akár világméretű)\r\nhálózatok. Ezeket WAN-oknak (Wide Area Network) nevezzük és azért fontosak,\r\nmert a jelenleg robbanásszerűen terjedő Internet hálózat használatához\r\nnyújtanak alapokat.\r\n• MAN - ez alatt helyezkednek el a városi, nagyobb területre kiterjedő MAN-ok\r\n(Metropolitan Area Network).\r\n• LAN - a harmadik szint a helyi hálózatok (LAN -Local Area Network). Ezek\r\náltalában egy intézményhez kapcsolódnak, segítve az intézmény szervezettségét,\r\naz intézmény hatékony működéséhez szükséges intézményen belüli\r\nkommunikációt. Főbb jellemzői: földrajzilag korlátozott nagyságú területen\r\nműködnek, nagy sávszélességű átviteli közeget biztosítanak sok felhasználó\r\nszámára, napi 24 órás hozzáférést biztosítanak a helyi szolgáltatásokhoz,\r\nfizikailag egymáshoz közel lévő eszközöket kötnek össze.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cikkek`
--
ALTER TABLE `cikkek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cikkek`
--
ALTER TABLE `cikkek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
