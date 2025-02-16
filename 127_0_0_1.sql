-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2025 at 09:58 PM
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
-- Database: `comments`
--
CREATE DATABASE IF NOT EXISTS `comments` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `comments`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `message`, `created_at`) VALUES
(9, 'user1', 'sziauram nagyon szepen koszonom', '2024-12-10 19:48:35'),
(10, 'test2', 'test', '2024-12-10 19:50:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Database: `felhasznalok`
--
CREATE DATABASE IF NOT EXISTS `felhasznalok` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `felhasznalok`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'DavidBukris', '$2y$10$IPvWzSe/viFmFtg9NPGfdui8lOxgKgiwcxm7c2bUiSaguhWgvBNLi', '2025-02-02 16:58:18'),
(2, 'cica', '$2y$10$ZxlRR7igVabPMT6WF3LfceJiLYAfI7kGE8zvOM0ZIDtoIYumNRfaC', '2025-02-02 17:03:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `jegyzetek`
--
CREATE DATABASE IF NOT EXISTS `jegyzetek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jegyzetek`;

-- --------------------------------------------------------

--
-- Table structure for table `eng_cikkek`
--

CREATE TABLE `eng_cikkek` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `cikkek` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eng_cikkek`
--

INSERT INTO `eng_cikkek` (`id`, `name`, `cikkek`) VALUES
(1, 'cikk1', 'The German physicist Ohm (1787-1854) defined resistance as the voltage and the current it produces. He found that in a circuit, the ratio of the two quantities is characteristic of a given load and is a constant value:\r\nBy rearranging the relationship, the law can be written in another form:\r\nThe content of the second relation in words: a current flows through a resistor when there is a voltage across it. In the second sentence, the current flowing through a resistor is proportional to the voltage across the resistor. Similarly, the third formula is: if a resistor R has a current I flowing through it, it must have a voltage U = I - R, i.e. the voltage measured across it is directly proportional to its resistance and current. Note that U, I and R are related quantities, i.e. Ohm\'s law expresses the relationship between current and voltage for a given resistance R. According to the relation I=U/R, the current in a circuit is large if the resistance of the load is small. If the resistance is reduced, the current is so high that the generator or the connecting wire is damaged. To protect the system against overcurrent, a fuse is connected in series with the load in the circuit. A fuse is a component that automatically breaks the circuit at the current it is rated for. When R=0, there is no load in the circuit and 1 = ∞, This is called a short circuit because the charges separated by the generator are discharged unhindered and directly between the generator terminals. In practice, all materials have a resistance, so the current can never be infinite, at most extremely high, i.e. there is no ideal short circuit. An infinitely high resistance (interruption) is also not a consumer, because no current flows (I = 0) and therefore no energy is converted. We will see shortly that Ohm\'s law in electronics is only valid with restrictions, because the resistance of many components depends on the voltage and the current flowing through them, and there are also components (capacitors and inductors) in which Ohm\'s law is valid, but the current-limiting effect is not determined by the collision of the charge carrier with the atoms of the medium (resistance), but by other interactions (1. The other name for resistance, or R, is therefore ohmic resistance. Only it can convert electricity, as a consumer, into other usable energy.\r\n'),
(2, 'cikk2', 'For any element of an arbitrarily complex network, you can individually apply the\r\nOhm\'s law, which is known for simple circuits, since it is the law of the connected U, I and R\r\nquantities. In a system with several elements, the\r\nKirchhoff\'s laws are helpful.\r\n\r\nKirchhoff\'s law applies to parallel (branched) circuits. The branching-\r\na node is formed. According to the law, the tidal flow into the node is\r\nIf the currents are signed by their direction, e.g. the incoming current is positive and the outgoing current is negative, the sum of the incoming and outgoing currents will be zero I1 + I2 + I3 - I = 0. In drawings, the node is marked by a blackened circle about 2 mm in diameter. The node is also the location of the electrical connection.\r\n\r\nThe loop law\r\nKirchhoff\'s Law II applies to series connections (loops), hence its other name, the loop law.In any closed loop, the sum of the voltages across the circuit elements, taken as the correct sign, is zero. More precisely, the sum of the voltages across the loads connected in series (falling on, acting on, or being measured by them) is equal to the voltage of the generator.\r\n\r\nOhm\'s and the two Kirchhoff laws are the most commonly used laws in electronics.\r\n\r\n\r\n'),
(3, 'cikk3', 'The voltage divider\r\nApplying Ohm\'s and Kirchhoff\'s laws to notable circuits further\r\nimportant laws can be established. The law of voltage division can be derived from the series connection of resistors. In this case, the resistors have the same current, while the voltage U1 and U2 occur at R1 and R2 respectively. In series connection, the voltages across each resistor are proportional to each other as the values of the resistors. The law of voltage division is the basis of a commonly used circuit in electronics called a voltage divider. A voltage divider is a four-pole. In the simplest case, it consists of two resistors in series. When a voltage is connected between points A and B of the system (the input of the quadripole), a current is generated and a voltage is applied across the resistors. According to Kirchhoff\'s Law II, the sum of the two voltages is always equal to the voltage of the supplying generator.\r\n\r\nThe current divider\r\nThe other notable network is the current divider, which, according to Kirchhoff\'s Law I, is\r\nis derived from the parallel connection of resistors. Parallel connection means that the resistors have the same voltage (U). This results in a current flowing through one resistor I1 = U/R1 and through the other I2 = U/R2.In parallel connection, the currents are inversely proportional to the resistances of the branches. The current flowing into the node is divided by the resistances, with a smaller current flowing through the higher resistance and a larger current flowing through the lower resistance\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `hun_cikkek`
--

CREATE TABLE `hun_cikkek` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `cikkek` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hun_cikkek`
--

INSERT INTO `hun_cikkek` (`id`, `name`, `cikkek`) VALUES
(1, 'cikk1', 'Ohm német fizikus (1787-1854) az ellenállást a feszültségből és a hatására kialakuló áramerősségből határozta meg. Azt tapasztalta, hogy egy áramkörben a két mennyiség hányadosa jellemző az adott fogyasztóra és állandó érték:\r\nAz összefüggés átrendezésével a törvény más alakban is felírható:\r\nA második összefüggés tartalma szavakban: egy ellenálláson áram folyik, ha rajta feszültség van. Az ellenállás árama egyenesen arányos a rajta lévő feszültséggel, és fordítottan arányos az ellenállás értékével. Hasonlóan a harmadik képlet: ha egy R ellenálláson I áramerősség folyik, akkor rajta U = I · R feszültségnek kell lenni, vagyis a rajta mérhető feszültség egyenesen arányos az ellenállásával és az áramával. Jegyezzük meg, hogy U, I és R összetartozó mennyiségek, vagyis az Ohm törvény egy adott R ellenálláshoz tartozó áramerősség és feszültség kapcsolatát fejezi ki! Az I=U/R összefüggés értelmében egy áramkörben nagy az áramerősség, ha a fogyasztó ellenállása kicsi. Az ellenállást csökkentve olyan nagy áram alakul ki, hogy a generátor vagy az összekötő vezeték károsodik. A túláram ellen a rendszert biztosítóval védjük, melyet az áramkörben a fogyasztóval sorba kapcsolunk. A biztosító olyan alkatrész, amely a rá jellemző áramerősségnél az áramkört automatikusan megszakítja. R=0 esetén nincs fogyasztó az áramkörben, és ekkor 1 = ∞, Ezt nevezzük rövidzárnak, mert a generátor által szétválasztott töltések akadálytalanul és közvetlenül a generátor kapcsai között egyenlítődnek ki. A gyakorlatban minden anyagnak van ellenállása, ezért az áramerősség sohasem lehet végtelen, legfeljebb rendkívül nagy, vagyis ideális rövidzár nincs. A végtelen nagy ellenállás (szakadás) sem fogyasztó, mert ekkor nem folyik áram (I = 0), így nincs energia átalakulás sem. Rövidesen látni fogjuk, hogy az Ohm törvény az elektronikában csak megkötésekkel érvényes, mert nagyon sok alkatrész ellenállása függ a feszültségtől, illetve a rajta átfolyó áramtól, másrészt vannak olyan alkatrészek is (kondenzátor és induktivitás), amelyekben az Ohm törvény ugyan érvényes, de az áramkorlátozó hatást nem a töltéshordozónak a közeg atomjaival történő ütközése (rezisztencia), hanem más kölcsönhatás határozza meg (1. később). A rezisztenciának, vagyis R-nek a másik neve ezért ohmos ellenállás. Csak ez képes a villamos energiát, mint fogyasztó, más hasznosítható energiává alakítani.\r\n'),
(2, 'cikk2', 'Egy tetszőlegesen bonyolult hálózat bármely elemére külön-külön alkalmazható az\r\negyszerű áramkörnél megismert Ohm törvény, hiszen ez az összetartozó U, I és R\r\nmennyiségek közötti kapcsolatot mutatja meg. Több elemből álló rendszerben a\r\nKirchhoff törvények nyújtanak segítséget.\r\n\r\nKirchhoff!. törvénye párhuzamos (elágazó) áramkörökre vonatkozik. Az elágazás-\r\nnál csomópont keletkezik. A törvény értelmében a csomópontba befolyó ára-\r\nmok összege megegyezik az onnan elfolyó áramok összegével.Ha az áramokat irányuk alapján előjellel látjuk el, pl. a befelé folyót pozitívnak, a kifelé folyót pedig negatívnak tekintjük, akkor a be- és kifolyó áramok összege nulla lesz I1 + I2 + I3 - I  = 0. Az 1. törvényt csomóponti törvénynek is nevezzük. Rajzokon a csomópontot kb. 2 mm átmérőjű befeketített körrel jelöljük. A csomópont egyben az elektromos kötés helyét is jelöli.\r\n\r\nA hurok törvény\r\nKirchhoff II.törvénye soros kapcsolásra (hurokra) vonatkozik, másik neve ezért hurok törvény.Bármely zárt hurokban az áramköri elemeken lévő feszültségek előjel helyesen vett összege nulla. Tömörebben a sorba kapcsolódó fogyasztókra jutó (azokra eső, azokon fellépő,illetve mérhető) feszültségek összege megegyezik a generátor feszültségével.\r\n\r\nAz Ohm és a két Kirchhoff törvény az elektronika leggyakrabban alkalmazott törvényei.\r\n\r\n'),
(3, 'cikk3', 'A feszültségosztó\r\nAz Ohm és Kirchhoff törvényeket nevezetes kapcsolásokra alkalmazva további\r\nfontos törvényszerűségeket állapíthatunk meg. Ellenállások soros kapcsolásából vezethető le a feszültségosztás törvénye. Ekkor az ellenállásokon azonos az áramerősség, miközben R1-en U1, R2-n pedig U2 feszültség lép fel. Soros kapcsolásban az egyes ellenállásokon fellépő feszültségek úgy aránylanak egymáshoz, mint az ellenállások értékei. A feszültségosztás törvényén alapszik az elektronika egyik gyakran alkalmazott áramköre a feszültségosztó. A feszültségosztó egy négypólus. A legegyszerűbb esetben két sorba kötött ellenállásból áll. A rendszer A és B pontja közé feszültséget kapcsolva (ez a négypólus bemenete) áram alakul ki, és az ellenállásokon feszültség lép fel. Kirchhoff II. törvénye értelmében a két feszültség összege mindig megegyezik a tápláló generátor feszültségével.\r\n\r\nAz áramosztó\r\nA másik nevezetes hálózat az áramosztó, amely Kirchhoff I. törvénye alapján az\r\nellenállások párhuzamos kapcsolásából vezethető le. A párhuzamos kapcsolás miatt az ellenállásokon azonos (U) feszültség van. Ennek hatására az egyik ellenálláson I1 = U/R1 , a másikon pedig I2 = U/R2 áram folyik.Párhuzamos kapcsolás esetén az áramerősségek fordítottan arányosak az ágak ellenállásaival. A csomópontba befolyó áram az ellenállásokon megoszlik,a nagyobb ellenálláson kisebb, a kisebb ellenálláson nagyobb áram foly\r\n\r\n\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eng_cikkek`
--
ALTER TABLE `eng_cikkek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hun_cikkek`
--
ALTER TABLE `hun_cikkek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eng_cikkek`
--
ALTER TABLE `eng_cikkek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hun_cikkek`
--
ALTER TABLE `hun_cikkek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"jegyzetek\",\"table\":\"hun_cikkek\"},{\"db\":\"felhasznalok\",\"table\":\"users\"},{\"db\":\"jegyzetek\",\"table\":\"cikkek\"},{\"db\":\"user_registration\",\"table\":\"users\"},{\"db\":\"comments\",\"table\":\"comments\"},{\"db\":\"comments\",\"table\":\"users\"},{\"db\":\"comments\",\"table\":\"COMMENTS\"},{\"db\":\"user_registration\",\"table\":\"users2\"},{\"db\":\"comments\",\"table\":\"ele_comments\"},{\"db\":\"test\",\"table\":\"users\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'mysql', 'db', '{\"sorted_col\":\"`db`.`Db` ASC\"}', '2024-10-26 13:04:36'),
('root', 'test', 'test', '{\"sorted_col\":\"`test`.`id` ASC\"}', '2024-11-01 12:42:23'),
('root', 'user_registration', 'users', '{\"sorted_col\":\"`users`.`created_at` DESC\"}', '2024-12-10 17:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2025-02-10 20:57:13', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
