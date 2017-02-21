-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 10.3.1.108
-- Gegenereerd op: 21 feb 2017 om 17:36
-- Serverversie: 5.6.29
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adindqz158_CMS04`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `paginaID` int(11) NOT NULL,
  `kop1` varchar(100) DEFAULT NULL,
  `text1` longtext
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`paginaID`, `kop1`, `text1`) VALUES
(1, 'Contact', '<p><strong>Kreakracht<br /></strong>Jacqueline Zwiebel<br />Kerkweg 30<br /> 9439 PG Witteveen<br />Drenthe, Nederland<br /><br /><em>Heeft u vragen? Dan kunt u via de onderstaande gegevens contact opnemen.<br /></em>T: 0593 - 55 24 01<br />M: 06 - 12 41 61 30<br />@: <a href="mailto:info@kreakracht.nl">info@kreakracht.nl</a><br />W: www.kreakracht.nl</p>');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `paginaID` int(11) NOT NULL,
  `kop1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `footer`
--

INSERT INTO `footer` (`paginaID`, `kop1`) VALUES
(1, 'Copyright: Adinda Media www.adindamedia.nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `homepagina`
--

CREATE TABLE IF NOT EXISTS `homepagina` (
  `paginaID` int(11) NOT NULL,
  `kop1` varchar(100) DEFAULT NULL,
  `text1` longtext
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `homepagina`
--

INSERT INTO `homepagina` (`paginaID`, `kop1`, `text1`) VALUES
(1, 'Ontwikkelen van eigen kreativiteit geeft kracht!', '<p>De activiteiten zijn geschikt voor iedereen, ook voor personen zonder creatieve ervaring. Iedereen is een kunstenaar en het is geweldig om anderen te helpen om dit bij zichzelf te ontdekken! Een ongedwongen sfeer, ruimte voor sociaal contact en met het bieden van veel, de zintuigen prikkelend materiaal, maakt iedereen zijn eigen unieke werkstuk !<br /><br />Er zijn workshops voor bestaande groepen volwassenen zoals voor een vrijgezellenfeestje of zussendag, K&amp;C lessen voor kinderen, maar ook diverse inloopworkshops geschikt voor op een festival of markt. <br /><br />Jacqueline Zwiebel is de persoon achter KreaKracht. Momenteel bezig met een studie kunstgeschiedenis. Ooit begonnen als fysio- en psychomotorisch therapeut, daarna lang gewerkt als pedagogisch begeleider na het volgen van een HBO pedagogiek, maar altijd bezig met en lessen volgend in o.a. schilderen en beeldhouwen. Sinds 15 jaar ook zelf steeds meer aan het les geven. Met heel veel plezier, want niets is zo leuk als het zien hoe iemand opbloeit bij het maken van een eigen kunstwerk!<br /><br />Deelnemer aan o.a. Oktober Kindermaand, Gekleurd Grijs, Cultuurmenu (K&amp;C Drenthe), Brede School Activiteiten (Emmen/Noordenveld), Kunst in de Club en de Buurtacademie, Het Kuna festival, de Drentse fiets4daagse enz.</p>');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kinderen`
--

CREATE TABLE IF NOT EXISTS `kinderen` (
  `paginaID` int(11) NOT NULL,
  `kop1` varchar(100) DEFAULT NULL,
  `text1` longtext
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `kinderen`
--

INSERT INTO `kinderen` (`paginaID`, `kop1`, `text1`) VALUES
(1, 'Workshops Kinderen', '<p>Ik werk graag met kinderen, dit doe ik met veel plezier. Belangrijk is om materiaal aan te bieden waarin kinderen hun eigen fantasie kwijt kunnen.<br /><br /><strong>Hieronder staan enkele mogelijkheden van technieken.</strong> <br />Het aanbod wordt echter constant vernieuwd en het is ook mogelijk om huidig aanbod aan te passen aan bepaalde wensen of omstandigheden.<br />Origami/papier vouwen, paasstukjes maken, mini mozaiek, muziek intrumenten maken, fantasiedieren maken van klei, mini boekjes maken<br />Speed spray painting, Black Light Painting, brandschilderen in hout en graveren van glas, hout of metaal, zelf papier maken. geschikt voor de oudere kinderen !<br />- Kennismaking met technieken als schilderen, speksteen, moza&iuml;ek, cartoon tekenen, papier scheppen, brandschilderen, werken met textielverharder of boetseren.<br />- Maken van kettingen en sieraden (o.a. van klei of speksteen), naambordjes, paas-, herfst- of kersttafereeltjes, graffitiborden, "robots", mobiles, windgongen, vliegers of dromenvangers, werken met fietsbanden, gasbeton, papier, schilderen met stofjes en diverse andere "creatieve knutsels".<br />- Eenmalige workshop of serie workshops achter elkaar in een bepaald thema bij u op school of buitenschoolse opvang<br />- Ook is het mogelijk een creatief kinderfeestje in combinatie met ponyrijden te verzorgen op de Hendrinahoeve in Witteveen.</p>');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menurechts`
--

CREATE TABLE IF NOT EXISTS `menurechts` (
  `paginaID` int(11) NOT NULL,
  `kop1` varchar(100) DEFAULT NULL,
  `text1` longtext,
  `kop2` varchar(100) DEFAULT NULL,
  `text2` longtext
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `menurechts`
--

INSERT INTO `menurechts` (`paginaID`, `kop1`, `text1`, `kop2`, `text2`) VALUES
(1, 'Nieuw!', '<p>Black Light workshops&gt; schilderen op canvas in het bijna donker en werken met body paint en UV stiften maken een feest tot een echte belevenis!</p>', 'Contact', '<p><strong>Kreakracht</strong><br /><em>Mobiel: 06-12416130</em><br /><em>Email: <a href="mailto:info@kreakracht.nl">info@kreakracht.nl</a></em><br /><em>Website: www.kreakracht.nl</em></p>');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `schoolbso`
--

CREATE TABLE IF NOT EXISTS `schoolbso` (
  `paginaID` int(11) NOT NULL,
  `kop1` varchar(100) DEFAULT NULL,
  `text1` longtext,
  `kop2` varchar(100) DEFAULT NULL,
  `text2` longtext,
  `kop3` varchar(100) DEFAULT NULL,
  `text3` longtext,
  `kop4` varchar(100) DEFAULT NULL,
  `text4` longtext,
  `kop5` varchar(100) DEFAULT NULL,
  `text5` longtext,
  `kop6` varchar(100) DEFAULT NULL,
  `text6` longtext
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `schoolbso`
--

INSERT INTO `schoolbso` (`paginaID`, `kop1`, `text1`, `kop2`, `text2`, `kop3`, `text3`, `kop4`, `text4`, `kop5`, `text5`, `kop6`, `text6`) VALUES
(1, 'School/BSO', '<p>KreaKracht biedt een aantal projecten die, per school, op maat kunnen worden gegeven. Deze culturele activiteiten zijn niet alleen leuk en leerzaam, maar ze versterken tevens de verbindingen op school. Er is aandacht voor de doorgaande leerlijn en de 21st century skills. Het betreft zowel actief, receptief als reflectief cultuuronderwijs.<br /><br />In de doorgaande leerlijn worden culturele activiteiten in samenhang aangeboden:<br />- Activiteiten passen bij andere vakken op school<br />- De ene activiteit bouwt voort op het ander en past bij de belevingswereld van de leerling -activiteiten passen bij de vakoverstijgende vaardigheden.<br /><br />Een doorgaande leerlijn cultuuronderwijs kent verticale e&#769;n horizontale samenhang. (informatie gebaseerd op voorwaarden cultuuronderwijs http://www.compenta.nl/)</p>', 'Techniek is cool!', '<p>Op een speelse manier kennismaken met techniek en wetenschap.<br /><br />Tijdens dit project kunnen kinderen uit alle leeftijdsgroepen van de basisschool kennismaken met diverse vormen van techniek passend bij hun eigen leeftijd. Het is maatwerk, dus in overleg met de school wordt bepaald hoeveel lessen er worden gegeven, wat de focus is van de lessen, of/en welke lesbrief er wordt gebruikt en welke groepen in aanmerking komen. Bovendien wordt er zo veel mogelijk (indien gewenst) gebruik gemaakt van materiaal en gereedschap dat reeds aanwezig is op de school en is recyclen bij dit project van belang, niet alleen in het kader van duurzaamheid, maar ook om de kosten zo laag mogelijk te houden. <br /><br />Andere vaardigheden die kunnen worden gebruikt zijn : meet- en rekenvaardigheden, samenwerken en overleggen, hoe een schema te lezen of te maken of hoe de stappen van een gebruiksaanwijzing moeten worden gevolgd.<br /><br />Enkele voorbeelden zijn: maken van een mini-robot, mini-lampje, werken met de 3D printerpen, regenmeter, klok.<br /><br />Kosten 50,- per les (inclusief reiskosten binnen Midden-Drenthe), materiaalkosten van 0,50 tot 3,- per kind, afhankelijk van de keuze van het onderwerp</p>', 'Snuffelen aan kunst(geschiedenis)', '<p>In dit project kunnen kinderen, aangepast aan hun leeftijdsniveau, kennismaken met de geschiedenis van de kunst en/of kunst uit andere culturen. Het is een combinatie van horen, zien, onderzoeken en daarna vooral zelf doen<br /><br /> Er kan, aangepast aan de wensen van de school, worden gewerkt met verschillende technieken. Voor de hogere leeftijdsgroepen is bijvoorbeeld brandschilderen of werken met steen mogelijk. Bovendien kan er worden kennisgemaakt met technieken als moza&iuml;ek, werken met (pastel)krijt en houtskool, inkt etc.<br /><br /> Kosten 50,- per les (inclusief reiskosten binnen Midden-Drenthe), materiaalkosten van 0,50 tot 3,- per kind afhankelijk van het gekozen materiaal.</p>\r\n<p>&nbsp;</p>', 'Samen sterk', '<p>In dit project kan worden gewerkt aan een gezamenlijk kunstwerk voor binnen of buiten, een tentoonstelling of het decor voor de musical. Dit kan met een enkele klas, of met kinderen uit diverse klassen. Afhankelijk van de wensen van de school kan er worden gewerkt met diverse technieken van graffiti en moza&iuml;ek tot verf, steen of recyclematerialen.<br /><br /> De focus ligt op het samenwerken en op het zorgen dat ieder zijn eigen deel kan bijdragen aan het grotere geheel.<br /><br /> Kosten 50,- per les (inclusief reiskosten binnen Midden-Drenthe). Materiaalkosten zijn afhankelijk van het gekozen materiaal en het aantal kinderen.</p>', 'Creatief Sportief', '<p>In dit project kan er worden aangesloten bij een sportief thema of een buitenspeeldag. Er zijn diverse activiteiten waarbij zelf spellen kunnen worden gemaakt eventueel gecombineerd met een stoepkrijtwedstrijd. Er kunnen zelf springtouwen worden geknoopt, maar ook spellen als jeu de boules of blik lopen zijn mogelijk.<br /><br /> Het project kan worden aangepast aan de wensen van de school. Er wordt zoveel mogelijk gewerkt met recycle materialen, niet alleen in verband met duurzaamheid, maar ook om de kosten laag te houden.<br /><br /> Kosten 50,- per les (inclusief reiskosten binnen Midden-Drenthe). Materiaal afhankelijk van de keuze en aantal kinderen.<br /> </p>', 'Muzikracht', '<p>In dit project leren kinderen, aangepast aan hun leeftijdsniveau, over geluid. Hoe maak je geluid en hoe kun je dit geluid versterken? En hoe wordt geluid dan weer muziek? Er worden verschillende, echte &eacute;n zelfgemaakte muziekinstrumenten (blaas-, slag- en snaarinstrumenten) gedemonstreerd en kinderen mogen zelf ook proberen geluiden te maken. Daarna mogen kinderen zelf aan de slag om een eigen instrument te maken.<br /><br /> Dit project en het aantal lessen kan worden aangepast aan de wensen van de school. Bovendien kan er, in overleg, worden samengewerkt met een muziekdocent, om met de zelfgemaakte instrumenten een lied in te studeren en eventueel later uit te voeren.<br /><br />Er wordt zo veel mogelijk gewerkt met recycle materiaal en (indien aanwezig) gereedschap van school, niet alleen in verband met duurzaamheid, maar ook om de kosten laag te houden.<br /><br /> Kosten 50,- (inclusief reiskosten binnen Midden-Drenthe) per les, materiaalkosten 0,50 per kind.</p>');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `volwassenen`
--

CREATE TABLE IF NOT EXISTS `volwassenen` (
  `paginaID` int(11) NOT NULL,
  `kop1` varchar(100) DEFAULT NULL,
  `text1` longtext
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `volwassenen`
--

INSERT INTO `volwassenen` (`paginaID`, `kop1`, `text1`) VALUES
(1, 'Workshops volwassenen', '<p><strong>Op aanvraag verzorgen wij onder andere de volgende workshops</strong><br />- Speksteen bewerken tot een beeldje, waxinelichtje of hanger.<br />- Schilderen van een persoonlijke spreuk op een houten bordje of een tegel<br />- Maken van (mini)boekjes<br />- Boetseren met (fimo)kIei<br />- Schilderen (op doek, met een groep een groot schilderij, een houten bordje of bijv een betonnen beeld beschilderen)<br />- Mozaiek (bijvoorbeeld een spiegel of een dienblad) of mini mozaiek- Werken met textielverharder of papier mache<br />- Etagere maken met oud servies<br />- Porselein of glas schilderen<br />- Beeldhouwen in gasbeton<br />- Papier scheppen<br />- Creatief met kringloop dwz "pimpen" van diverse kringloopgoederen als dienbladen, kastjes, tafeltjes, vazen en dergelijke.<br />- Hondenspeeltjes maken van fleece (ook geschikt voor kinderen vanaf 7 jaar)<br /><br /><strong>In overleg ook andere creatieve technieken mogelijk</strong><br /><br />De workshop kan plaatsvinden in het atelier van de Hendrinahoeve of desgewenst op locatie.<br />De prijzen varieren, afhankelijk van de groepsgrootte, de locatie en het gekozen materiaal, vanaf 5,- tot 20 euro/per persoon per workshop van 2 uur. Dit bedrag is inclusief koffie/thee, gebruik van gereedschap en materiaal.</p>');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`paginaID`);

--
-- Indexen voor tabel `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`paginaID`);

--
-- Indexen voor tabel `homepagina`
--
ALTER TABLE `homepagina`
  ADD PRIMARY KEY (`paginaID`);

--
-- Indexen voor tabel `kinderen`
--
ALTER TABLE `kinderen`
  ADD PRIMARY KEY (`paginaID`);

--
-- Indexen voor tabel `menurechts`
--
ALTER TABLE `menurechts`
  ADD PRIMARY KEY (`paginaID`);

--
-- Indexen voor tabel `schoolbso`
--
ALTER TABLE `schoolbso`
  ADD PRIMARY KEY (`paginaID`);

--
-- Indexen voor tabel `volwassenen`
--
ALTER TABLE `volwassenen`
  ADD PRIMARY KEY (`paginaID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `paginaID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `footer`
--
ALTER TABLE `footer`
  MODIFY `paginaID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `homepagina`
--
ALTER TABLE `homepagina`
  MODIFY `paginaID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `kinderen`
--
ALTER TABLE `kinderen`
  MODIFY `paginaID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `menurechts`
--
ALTER TABLE `menurechts`
  MODIFY `paginaID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `schoolbso`
--
ALTER TABLE `schoolbso`
  MODIFY `paginaID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `volwassenen`
--
ALTER TABLE `volwassenen`
  MODIFY `paginaID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
