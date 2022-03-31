-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Mar 2022, 20:47
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `moviehub`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `data`
--

CREATE TABLE `data` (
  `ID_User` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Hours` int(11) DEFAULT NULL,
  `Rank` varchar(255) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `data`
--

INSERT INTO `data` (`ID_User`, `Username`, `Email`, `Password`, `Hours`, `Rank`, `Picture`) VALUES
(1, 'ptrek', 'ptrek@pwste.edu.pl', 'Qwerty123!@#', NULL, NULL, NULL),
(2, 'admin', 'admin', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `movies`
--

CREATE TABLE `movies` (
  `ID_Movie` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Types` varchar(255) NOT NULL,
  `Directors` varchar(255) NOT NULL,
  `Writers` varchar(255) NOT NULL,
  `Production` varchar(255) NOT NULL,
  `Years` varchar(255) NOT NULL,
  `Poster_picture` varchar(255) NOT NULL,
  `Descriptions` varchar(255) NOT NULL,
  `WatchTime` int(11) NOT NULL,
  `Trailer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `movies`
--

INSERT INTO `movies` (`ID_Movie`, `Title`, `Types`, `Directors`, `Writers`, `Production`, `Years`, `Poster_picture`, `Descriptions`, `WatchTime`, `Trailer`) VALUES
(1, 'OBCY - ÓSMY PASAŻER NOSTROMO', 'Horror', 'Ridley Scott', 'Dan O Bannon', 'USA / Wielka Brytania', '1979', 'obcy8pasazer', 'Załoga statku kosmicznego Nostromo odbiera tajemniczy sygnał i ląduje na niewielkiej planetoidzie, gdzie jeden z jej członków zostaje zaatakowany przez obcą formę życia.', 117, ''),
(2, 'PALACZ ZWŁOK', 'Horror', 'Juraj Herz', 'Juraj Herz / Ladislav Fuks / Věra Kalábová', 'Czechosłowacja', '1969', 'palaczzwlok', 'Karl Kopfrkingl jest palaczem zwłok w praskim krematorium. Popada w szaleństwo i przez to uważa, że wykonując swoje obowiązki uwalnia dusze zmarłych.', 95, ''),
(3, 'LŚNIENIE', 'Horror', 'Stanley Kubrick', 'Stanley Kubrick / Diane Johnson', 'USA / Wielka Brytania', '1980', 'lsnienie', 'Jack podejmuje pracę stróża odciętego od świata hotelu Overlook. Wkrótce idylla zamienia się w koszmar.', 146, ''),
(4, 'GABINET DOKTORA CALIGARI', 'Horror', 'Robert Wiene', 'Carl Mayer / Hans Janowitz', 'Niemcy', '1920', 'gabinetcaligari', 'W niewielkim niemieckim mieście dochodzi do serii zagadkowych morderstw. Przyjaciel jednej z ofiar odkrywa, że za wszystkim może stać wędrowny hipnotyzer.', 71, ''),
(5, 'WYWIAD Z WAMPIREM', 'Dramat', 'Neil Jordan', 'Anne Rice', 'USA', '1994', 'wywiadzwampirem', 'Historia wdowca, który by przestać cierpieć, zostaje przemieniony w wampira. Jego charakter nie pozwala mu zabijać ludzi z zimną krwią, ale nie jest na tyle silny, by wybrać samobójstwo.', 123, ''),
(6, 'NOSFERATU - SYMFONIA GROZY', 'Horror', 'F.W. Murnau', 'Henrik Galeen', 'Niemcy', '1922', 'nosferatu', 'Młody agent nieruchomości wyrusza w podróż, aby podpisać umowę o zakupie posiadłości. Nieświadomie udaje się do zamku wampira Nosferatu.', 94, ''),
(7, 'DZIECKO ROSEMARY', 'Horror', 'Roman Polański', 'Roman Polański', 'USA', '1968', 'dzieckorosemary', 'Młoda mężatka spodziewa się potomka diabła.', 136, ''),
(8, 'VAMPIRE HUNTER D: ŻĄDZA KRWI', 'Anime', 'Yoshiaki Kawajiri', 'Yoshiaki Kawajiri', 'Hongkong / Japonia / USA', '2000', 'vampirehunter', 'D przyjmuje od bogatego mieszczanina zlecenie odzyskania jego córki, która została porwana przez wampira Meiera.', 102, ''),
(9, 'OBCY - DECYDUJĄCE STARCIE', 'Sci-Fi', 'James Cameron', 'James Cameron', 'USA', '1986', 'obcydecydujacestarcie', 'Po 57 latach hibernacji Ellen Ripley zostaje odnaleziona. Zgadza się wziąć udział w misji mającej na celu likwidację obcych istot zagrażających kolonizatorom.', 137, ''),
(10, 'NINJA SCROLL', 'Anime', 'Yoshiaki Kawajiri / Kevin Seymour', 'Yoshiaki Kawajiri', 'Japonia', '1993', 'ninjascroll', 'Feudalna Japonia. Czas niepokojów, przemocy i zdrady. Oddział wojowników ninja wyrusza, by zbadać źródło tajemniczej zarazy, która zabiła mieszkańców niewielkiej wioski. Wojownicy szybko wpadają w zasadzkę i zostają wymordowani przez nadludzko potężną bes', 94, ''),
(11, 'KWAIDAN, CZYLI OPOWIEŚCI NIESAMOWITE', 'Fantasy', 'Masaki Kobayashi', 'Yôko Mizuki', 'Japonia', '1964', 'kwaidan', 'Cztery różne historie oparte na opowiadaniach Lafcadio Hearna ukazują przenikający się świat ludzi i duchów w realiach feudalnej Japonii.', 183, ''),
(12, 'EGZORCYSTA', 'Horror', 'William Friedkin', 'William Peter Blatty', 'USA', '1973', 'egzorcysta', 'Kiedy córka aktorki zaczyna się dziwnie zachowywać, a lekarze orzekają, że jest zdrowa, kobieta wzywa egzorcystę.', 122, ''),
(13, 'MŁODY FRANKENSTEIN', 'Horror', 'Mel Brooks', 'Mel Brooks / Gene Wilder', 'USA', '1974', 'mlodyfrankenstein', 'Wnuczek doktora Frankensteina dziedziczy majątek oraz tajemnice szalonych eksperymentów dziadka.', 106, ''),
(14, 'DRACULA', 'Horror', 'Francis Ford Coppola', 'James V. Hart', 'USA', '1992', 'dracula', 'Rumuński książę, a w rzeczywistości wampir Vlad Dracula wyjeżdża do Londynu, gdzie mieszka kobieta przypominająca mu jego tragicznie utraconą ukochaną.', 128, ''),
(15, 'JESTEM LEGENDĄ', 'Sci-Fi', 'Francis Lawrence', 'Akiva Goldsman / Mark Protosevich', 'USA', '2007', 'jestemlegenda', 'Tajemniczy wirus wymordował lub zamienił w krwiożercze bestie prawie całą ludzkość. Samotny naukowiec Robert Neville poszukuje szczepionki, by odwrócić mutację.', 101, ''),
(16, 'COŚ', 'Sci-Fi', 'John Carpenter', 'Bill Lancaster', 'USA', '1982', 'cos', 'Grupa amerykańskich badaczy odnajduję na Antarktyce istotę pozaziemską i przekonuje się, że obcy organizm nie ma pokojowych zamiarów.', 109, ''),
(17, 'LIGHTHOUSE', 'Dramat', 'Robert Eggers', 'Robert Eggers / Max Eggers', 'Kanada / USA', '2019', 'lighthouse', 'Historia dwóch strażników latarni morskiej, którzy w obliczu samotności powoli tracą zdrowie psychiczne, a wkrótce zaczynają im zagrażać ich własne najgorsze koszmary.', 110, ''),
(18, 'PAPRIKA', 'Anime', 'Satoshi Kon', 'Satoshi Kon / Seishi Minakami', 'Japonia', '2006', 'paprika', 'Psychoterapeutka wyrusza na poszukiwania skradzionej maszyny do kontrolowania snów, aby zapobiec globalnej katastrofie.', 90, ''),
(19, 'NIEUSTRASZENI ZABÓJCY WAMPIRÓW', 'Komedia', 'Roman Polański', 'Roman Polański / Gérard Brach', 'USA / Wielka Brytania', '1967', 'nieustraszenipogromcywampirow', 'Znawca wampirów Abronsius i jego asystent Alfred muszą stawić czoła krwiopijczemu hrabiemu von Krolockowi.', 108, ''),
(20, 'OMEN', 'Horror', 'Richard Donner', 'David Seltzer', 'USA / Wielka Brytania', '1967', 'omen', 'Amerykański dyplomata adoptuje w tajemnicy przed żoną małego chłopca. Wkrótce mężczyzna odkrywa pochodzenie dziecka.', 106, ''),
(21, 'INCEPCJA', 'Sci-Fi', 'Christopher Nolan', 'Christopher Nolan', 'USA / Wielka Brytania', '2010', 'incepcja', 'Czasy, gdy technologia pozwala na wchodzenie w świat snów. Złodziej Cobb ma za zadanie wszczepić myśl do śpiącego umysłu.', 148, ''),
(22, 'MROCZNY RYCERZ', 'Sci-Fi', 'Christopher Nolan', 'Christopher Nolan / Jonathan Nolan', 'USA / Wielka Brytania', '2008', 'mrocznyrycerz', 'Batman, z pomocą porucznika Gordona oraz prokuratora Harveya Denta, występuje przeciwko przerażającemu i nieobliczalnemu Jokerowi, który chce pogrążyć Gotham City w chaosie.', 152, ''),
(23, 'INTERSTELLAR', 'Sci-Fi', 'Christopher Nolan', 'Christopher Nolan / Jonathan Nolan', 'USA / Wielka Brytania', '2014', 'interstellar', 'Batman, z pomocą porucznika Gordona oraz prokuratora Harveya Denta, występuje przeciwko przerażającemu i nieobliczalnemu Jokerowi, który chce pogrążyć Gotham City w chaosie.', 169, ''),
(24, 'STALKER', 'Sci-Fi', 'Andriej Tarkowski', 'Arkadij Strugacki / Borys Strugacki', 'ZSRR', '1979', 'stalker', 'Stalker wraz z dwoma klientami podróżuje przez Zonę do tajemniczej komnaty, gdzie ponoć spełniają się marzenia.', 163, ''),
(25, 'DIUNA', 'Sci-Fi', 'Denis Villeneuve', 'Eric Roth / Denis Villeneuve', 'Kanada / USA / Węgry / Wielka Brytania', '2021', 'diuna', 'Szlachetny ród Atrydów przybywa na Diunę, będącą jedynym źródłem najcenniejszej substancji we wszechświecie.', 155, ''),
(26, 'COCO', 'Przygodowy', 'Lee Unkrich / Adrian Molina', 'Adrian Molina / Matthew Aldrich', 'USA', '2017', 'coco', 'Dwunastoletni meksykański chłopiec imieniem Miguel usiłuje zgłębić tajemnice rodzinnej legendy.', 105, ''),
(27, 'KLAUS', 'Przygodowy', 'Sergio Pablos', 'Sergio Pablos / Zach Lewis', 'Hiszpania', '2019', 'klaus', 'Początkujący listonosz zostaje wysłany na niewielką wyspę za kołem podbiegunowym. Jej mieszkańcy są ze sobą skłóceni, a - co gorsza - nikt nie wysyła tam listów.', 96, ''),
(28, 'WŁADCA PIERŚCIENI: DRUŻYNA PIERŚCIENIA', 'Przygodowy', 'Peter Jackson', 'Peter Jackson / Fran Walsh', 'Nowa Zelandia / USA', '2001', 'wladcapierscieni', 'Podróż hobbita z Shire i jego ośmiu towarzyszy, której celem jest zniszczenie potężnego pierścienia pożądanego przez Czarnego Władcę - Saurona.', 178, ''),
(29, 'JAK WYTRESOWAĆ SMOKA', 'Przygodowy', 'Dean DeBlois / Chris Sanders', 'Dean DeBlois / Chris Sanders', 'USA', '2010', 'jakwytresowacsmoka', 'Chuderlawy Wiking przewróci porządek w wiosce, kiedy zamiast zabić w ramach inicjacji jakiegoś smoka, zaprzyjaźni się z najgroźniejszym z nich.', 98, ''),
(30, 'ZWIERZOGRÓD', 'Przygodowy', 'Byron Howard / Rich Moore', 'Jared Bush / Phil Johnston', 'USA', '2016', 'zwierzogrod', 'Nick Bajer – żyjący z drobnych przekrętów szczwany lis, i Judy Hops – pierwszy w historii królik zatrudniony w policji, łączą siły, by rozwiązać pewną kryminalną zagadkę.', 108, ''),
(31, 'NIETYKALNI', 'Komedia', 'Olivier Nakache / Éric Toledano', 'Olivier Nakache / Éric Toledano', 'Francja', '2011', 'nietykalni', 'Sparaliżowany milioner zatrudnia do opieki młodego chłopaka z przedmieścia, który właśnie wyszedł z więzienia.', 112, ''),
(32, 'FORREST GUMP', 'Komedia', 'Robert Zemeckis', 'Eric Roth', 'USA', '1994', 'forrestgump', 'Historia życia Forresta, chłopca o niskim ilorazie inteligencji z niedowładem kończyn, który staje się miliarderem i bohaterem wojny w Wietnamie.', 142, ''),
(33, 'DYKTATOR', 'Komedia', 'Charlie Chaplin', 'Charlie Chaplin', 'USA', '1940', 'dyktator', 'Dyktator Adenoid Hynkel chce powiększyć swoje imperium, podczas gdy żydowski fryzjer próbuje uniknąć prześladowania związanego z nazistowskim reżimem.', 124, ''),
(34, 'ŻYWOT BRIANA', 'Komedia', 'Terry Jones', 'John Cleese / Graham Chapman', 'Wielka Brytania', '1979', 'zywotbriana', 'Brian, rówieśnik Chrystusa, przychodzi na świat w Betlejem i zostaje omyłkowo uznany za Mesjasza.', 94, ''),
(35, 'CHŁOPAKI NIE PŁACZĄ', 'Komedia', 'Olaf Lubaszenko', 'Mikołaj Korzyński', 'Polska', '2000', 'chopakinieplacza', 'Kuba, młody skrzypek, trafia w sam środek gangsterskich porachunków.', 96, ''),
(36, 'OJCIEC CHRZESTNY', 'Dramat', 'Francis Ford Coppola', 'Mario Puzo / Francis Ford Coppola', 'USA', '1972', 'ojciecchrzestny', 'Opowieść o nowojorskiej rodzinie mafijnej. Starzejący się Don Corleone pragnie przekazać władzę swojemu synowi.', 175, ''),
(37, 'SKAZANI NA SHAWSHANK', 'Dramat', 'Frank Darabont', 'Frank Darabont', 'USA', '1994', 'shawshank', 'Adaptacja opowiadania Stephena Kinga. Niesłusznie skazany na dożywocie bankier, stara się przetrwać w brutalnym, więziennym świecie.', 142, ''),
(38, 'LISTA SCHINDLERA', 'Dramat', 'Steven Spielberg', 'Steven Zaillian', 'USA', '1993', 'listaschindlera', 'Historia przedsiębiorcy Oskara Schindlera, który podczas II wojny światowej uratował przed pobytem w obozach koncentracyjnych 1100 Żydów.', 195, ''),
(39, 'ZIELONA MILA', 'Dramat', 'Frank Darabont', 'Frank Darabont', 'USA', '1999', 'zielonamila', 'Emerytowany strażnik więzienny opowiada przyjaciółce o niezwykłym mężczyźnie, którego skazano na śmierć za zabójstwo dwóch 9-letnich dziewczynek.', 188, ''),
(40, 'JOKER', 'Dramat', 'Todd Phillips', 'Todd Phillips / Scott Silver', 'Kanada / USA', '2019', 'joker', 'Strudzony życiem komik popada w obłęd i staje się psychopatycznym mordercą.', 122, ''),
(41, 'KIMI NO NA WA.', 'Anime', 'Makoto Shinkai', 'Makoto Shinkai', 'Japonia', '2016', 'kiminonawa', 'Mieszkająca na wsi nastoletnia Mitsuha Miyamizu oraz uczeń tokijskiego liceum, Taki Tachibana, budzą się pewnego poranka w nieznanych sobie pokojach. Wkrótce odkrywają, że ich ciała również nie należą do nich.', 106, ''),
(42, 'KSIĘŻNICZKA MONONOKE', 'Anime', 'Hayao Miyazaki', 'Hayao Miyazaki', 'Japonia', '1997', 'mononoke', 'Książę małej wioski zostaje przeklęty przez demona. Wyrusza w podróż, by poprosić legendarnego boga zwierząt o zdjęcie uroku.', 137, ''),
(43, 'AKIRA', 'Anime', 'Katsuhiro Ôtomo', 'Katsuhiro Ôtomo / Izô Hashimoto', 'Japonia', '1988', 'akira', 'Członek gangu motocyklowego zostaje poddany eksperymentom. Chłopak zyskuje dzięki nim wielką moc, nad którą nie jest w stanie zapanować.', 124, ''),
(44, 'WILCZE DZIECI', 'Anime', 'Mamoru Hosoda', 'Mamoru Hosoda / Satoko Okudera', 'Japonia', '2012', 'wilczedzieci', 'Młoda kobieta poślubia wilkołaka, z którym ma dwoje dzieci. Po jego śmierci wyprowadza się na wieś, szukając spokoju.', 117, ''),
(45, 'PERFECT BLUE', 'Anime', 'Satoshi Kon', 'Sadayuki Murai', 'Japonia', '1997', 'perfectblue', 'Piosenkarka Mirna postanawia zostać aktorką. Z czasem odkrywa, że nowe zajęcie nie jest takie, jak sobie wyobrażała.', 81, ''),
(46, 'THOR: RAGNAROK', 'Fantasy', 'Taika Waititi', 'Craig Kyle / Christopher L. Yost', 'USA', '2017', 'thorragnarok', 'Thor mierzy się w walce bogów, podczas gdy Asgard jest zagrożony Ragnarokiem, nordycką apokalipsą.', 130, ''),
(47, 'ILUZJONISTA', 'Fantasy', 'Neil Burger', 'Neil Burger', 'Czechy / USA', '2006', 'iluzjonista', 'Wiedeń u progu XX w. Syn rzemieślnika, iluzjonista Eisenheim, wykorzystuje niezwykłe umiejętności, by zdobyć miłość arystokratki, narzeczonej austro-węgierskiego księcia.', 110, ''),
(48, 'NIEBO NAD BERLINEM', 'Fantasy', 'Wim Wenders', 'Richard Reitinger / Wim Wenders', 'Francja / RFN', '1987', 'niebonadberlinem', 'Dwóch aniołów krąży po powojennym Berlinie. W końcu jeden z nich postanawia porzucić nieśmiertelność i stać się człowiekiem.', 178, ''),
(49, 'HARRY POTTER I WIĘZIEŃ AZKABANU', 'Fantasy', 'Alfonso Cuarón', 'Steve Kloves', 'USA / Wielka Brytania', '2004', 'harrypotter', 'Z więzienia ucieka Syriusz Black, Harry nie może już czuć się bezpiecznie w szkole.', 141, ''),
(50, 'CZAS CYGANÓW', 'Fantasy', 'Emir Kusturica', 'Emir Kusturica / Gordan Mihić', 'Jugosławia / Wielka Brytania / Włochy', '1988', 'czascyganow', 'Z pozoru film przynosi etnograficzny portret jugosłowiańskich Cyganów; wystąpili w nim nieprofesjonalni aktorzy - Romowie posługujący się swym naturalnym językiem', 142, ''),
(51, 'Kiler', 'Komedia', 'Juliusz Machulski', 'Piotr Wereśniak', 'Polska', '1997', '1.jpg', 'Jerzy Kiler, warszawski taksówkarz, przypadkowo zostaje wzięty za płatnego zabójcę i umieszczony w areszcie. Wyciąga go stamtąd boss świata przestępczego, który oferuje mu nowe zadanie. ', 104, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rating`
--

CREATE TABLE `rating` (
  `ID_User` int(11) NOT NULL,
  `ID_Movie` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID_User`);

--
-- Indeksy dla tabeli `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID_Movie`);

--
-- Indeksy dla tabeli `rating`
--
ALTER TABLE `rating`
  ADD KEY `ID_Horror` (`ID_Movie`),
  ADD KEY `ID_User` (`ID_User`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `data`
--
ALTER TABLE `data`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `movies`
--
ALTER TABLE `movies`
  MODIFY `ID_Movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
