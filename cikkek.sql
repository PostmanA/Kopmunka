-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 09:15 PM
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
(2, 'cikk2', 'Területi kiterjedés alapján\r\n• WAN - a legnagyobbak a nagykiterjedésű (esetenként akár világméretű)\r\nhálózatok. Ezeket WAN-oknak (Wide Area Network) nevezzük és azért fontosak,\r\nmert a jelenleg robbanásszerűen terjedő Internet hálózat használatához\r\nnyújtanak alapokat.\r\n• MAN - ez alatt helyezkednek el a városi, nagyobb területre kiterjedő MAN-ok\r\n(Metropolitan Area Network).\r\n• LAN - a harmadik szint a helyi hálózatok (LAN -Local Area Network). Ezek\r\náltalában egy intézményhez kapcsolódnak, segítve az intézmény szervezettségét,\r\naz intézmény hatékony működéséhez szükséges intézményen belüli\r\nkommunikációt. Főbb jellemzői: földrajzilag korlátozott nagyságú területen\r\nműködnek, nagy sávszélességű átviteli közeget biztosítanak sok felhasználó\r\nszámára, napi 24 órás hozzáférést biztosítanak a helyi szolgáltatásokhoz,\r\nfizikailag egymáshoz közel lévő eszközöket kötnek össze.'),
(3, 'cikk3', 'Ohm német fizikus (1787-1854) az ellenállást a feszültségből és a hatására kialakuló áramerősségből határozta meg. Azt tapasztalta, hogy egy áramkörben a két mennyiség hányadosa jellemző az adott fogyasztóra és állandó érték:\r\nAz összefüggés átrendezésével a törvény más alakban is felírható:\r\nA második összefüggés tartalma szavakban: egy ellenálláson áram folyik, ha rajta feszültség van. Az ellenállás árama egyenesen arányos a rajta lévő feszültséggel, és fordítottan arányos az ellenállás értékével. Hasonlóan a harmadik képlet: ha egy R ellenálláson I áramerősség folyik, akkor rajta U = I · R feszültségnek kell lenni, vagyis a rajta mérhető feszültség egyenesen arányos az ellenállásával és az áramával. Jegyezzük meg, hogy U, I és R összetartozó mennyiségek, vagyis az Ohm törvény egy adott R ellenálláshoz tartozó áramerősség és feszültség kapcsolatát fejezi ki! Az I=U/R összefüggés értelmében egy áramkörben nagy az áramerősség, ha a fogyasztó ellenállása kicsi. Az ellenállást csökkentve olyan nagy áram alakul ki, hogy a generátor vagy az összekötő vezeték károsodik. A túláram ellen a rendszert biztosítóval védjük, melyet az áramkörben a fogyasztóval sorba kapcsolunk. A biztosító olyan alkatrész, amely a rá jellemző áramerősségnél az áramkört automatikusan megszakítja. R=0 esetén nincs fogyasztó az áramkörben, és ekkor 1 = ∞, Ezt nevezzük rövidzárnak, mert a generátor által szétválasztott töltések akadálytalanul és közvetlenül a generátor kapcsai között egyenlítődnek ki. A gyakorlatban minden anyagnak van ellenállása, ezért az áramerősség sohasem lehet végtelen, legfeljebb rendkívül nagy, vagyis ideális rövidzár nincs. A végtelen nagy ellenállás (szakadás) sem fogyasztó, mert ekkor nem folyik áram (I = 0), így nincs energia átalakulás sem. Rövidesen látni fogjuk, hogy az Ohm törvény az elektronikában csak megkötésekkel érvényes, mert nagyon sok alkatrész ellenállása függ a feszültségtől, illetve a rajta átfolyó áramtól, másrészt vannak olyan alkatrészek is (kondenzátor és induktivitás), amelyekben az Ohm törvény ugyan érvényes, de az áramkorlátozó hatást nem a töltéshordozónak a közeg atomjaival történő ütközése (rezisztencia), hanem más kölcsönhatás határozza meg (1. később). A rezisztenciának, vagyis R-nek a másik neve ezért ohmos ellenállás. Csak ez képes a villamos energiát, mint fogyasztó, más hasznosítható energiává alakítani.\r\n');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
