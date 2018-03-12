-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 12 mars 2018 à 16:18
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `filerougeasteam`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `paragraphe` text NOT NULL,
  `date` datetime NOT NULL,
  `categorie1` int(11) NOT NULL,
  `categorie2` int(11) NOT NULL,
  `categorie3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `paragraphe`, `date`, `categorie1`, `categorie2`, `categorie3`) VALUES
(1, 'great things from Belgium. ', 'Belgium is the birth place of many great things. French fries (I know, the name is wrong), Magritte, Tintin, Eddy Merckx, the saxophone, Brueghel, Horta... and a lot of music, more than most know. \r\nRecently, Boiler Room dedicated a documentary to the revolutionary electronic movement that was the New Beat, first developed by innovative Belgian teenagers and geeks. \r\n\"The Sound Of Belgium\" is a well made trip into the eighties, as well as an instructive dive in the factors that allowed such a trend to emerge.  It\'s not all. Belgium, and particularly Brussels, is home to numerous independent labels such as the eclectic Crammed Discs. Not a reissue label, Crammed Discs does a great job at giving a world exposure to local acts accross the world. It\'s no wonder that their catalog include current music from Africa, Eastern Europe, South America etc. \r\nTo be honest, I don\'t know if this label has any limits in terms of genre or geographical area, which is confirmed by founder Marc Hollander in an interview with Noisey (in French). Note that Mr. Hollander regularly provides mixes available on Soundcloud, notably showcasing the music of the label. \r\n\r\nMore great things from Belgium soon... \r\n ', '2018-03-07 00:00:00', 1, 0, 0),
(2, 'Prince on Wax.', ' Wax Poetics is dead, long live Wax Poetics. \r\n\r\nThe paper version you could buy for around 10 euros if you were lucky is no longer. Due to the increasing prices of printing and other expenses to maintain their business model, the team behind the reference music publication decided to transition to a new format : fully digital, that you can also receive printed in your mailbox, on demand. Not a bad idea, even though it may be a bit pricey. \r\n\r\nThis announcement came as a shock for some, especially those who were waiting for the Prince special issue. Well, here it is, available for pre-order. \r\n', '2018-03-07 00:00:00', 2, 0, 0),
(5, 'education and knowledge.', ' For those who understand French, and possibly German, English, Polish or Spanish, Arte constantly publishes new documentaries, about one hour long each, on fascinating topics including pictural arts and of course music. \r\nAs they are only available on streaming for a short period of time, Arte\'s website is worth regular visits. \r\nAt this moment, interesting documentaries include one on Jean-Michel Basquiat, the bursting disco phenomenon in Europe, as well as one on the queen of dirty funk, Betty Davis. Another series is dedicated to the beginning of the graffiti scene. ', '2018-03-12 14:00:30', 0, 0, 0),
(6, 'More Ethiopiques', 'After Mississippi Records, Buda Music sealed a partnership with the Parisian label Heavenly Sweetness to release records from the now very famous &quot;Ethiopiques&quot; series.\r\n\r\nWhile Mississippi Records re-released albums and a few compilations of Ethiopian artists undigged by Buda Music, Heavenly Sweetness signed up for a &quot;best of&quot; of the original series, which was initially released on CD\'s, as a double LP.\r\n\r\nIf you need to listen to extracts, which I strongly advise, head to the website of Light In The Attic Records,\r\n', '2018-03-12 14:30:07', 0, 0, 0),
(7, 'Illmatic XX', 'Nas really can\'t get away from the shadow of his masterpiece &quot;Illmatic&quot;. The gift and the curse, so to speak.\r\n\r\nSo, since its release in 1994, Sony jumps on every chance to commemorate this record, without Nas even complaining about it. I still remember purchasing the 2004 reedition. Time flies so fast, and now we\'re celebrating the 20th anniversary (damn, we\'re getting old) of &quot;Illmatic&quot; and once again, Sony made it a special occasion by releasing &quot;Illmatic XX&quot;, with the actual cover art you can see in this post.\r\n\r\nPitchfork dropped the tracklisting, which includes demos, promos, edits and remixes, splitted in two CD\'s. On my side, I only need that second record, I already have the first one in 4 or 5 copies on various formats... By the way, only Sony thinks most of these are previously unreleased tracks. Serious fans already own bootlegs featuring most of these songs.\r\n\r\nAnyway, I\'m more excited about the video project &quot;Time Is Illmatic&quot;. Can\'t wait for this one.\r\n', '2018-03-12 14:30:48', 0, 0, 0),
(8, 'Radio vinyle', 'While I was away, Radio Vinyle posted some interesting videos with some interesting people hosting them. Look : Madlib, Jarvis Cocker, Jacques Higelin, Jay-Jay Johanson, and more.\r\n\r\nJust pay them a visit. For those who don\'t know yet, Radio Vinyle takes you to (probably) the biggest record collection in France.\r\n', '2018-03-12 14:31:41', 0, 0, 0),
(9, 'Quack', 'Fool\'s Gold just announced the release of the long overdue Duck Sauce album, simply titled &quot;Quack&quot;, scheduled for April. Sure, after many singles, much of it won\'t be a surprise, but it\'ll get rotation in any party for the few next months or so.\r\nAnd of course, promotion is on going, with Armand and Alain doing interviews, like this one with Pitchfork.', '2018-03-12 14:32:24', 0, 0, 0),
(10, 'Legen... dary', 'March of 2014 will see a 83-year old legend performing on the US soil, in Los Angeles and in Brooklyn, NYC. The legend I\'m talking about is Ennio Morricone, il maestro, the undisputed king of movie scoring (I\'ll pass on the rumours - some of them being probably true - of ghostproducing from peers like Bruno Nicolai and others).\r\n\r\nIf you live in these cities, this could be your very last chance to catch him live on stage.\r\n\r\nBe quick, be there.\r\n', '2018-03-12 14:32:54', 0, 0, 0),
(11, 'Things you may have missed', ' Egon, from Now-Again Records, proves to you that children can relate to psychedelic music. Well, I guess if &quot;Wu-Tang is for the children&quot;, then Egon is right. \r\n\r\nJ Dilla is already part of history. I mean, he made it to the top of a lot of lists as a modern prophet of music. Vice proves it by documenting the evolution of James Yancey\'s style, from Jay Dee to Dilla. By the way, check the Noisey website ; it may be corporate, but it\'s still pretty good. They have some good stuff about The Neptunes, Clipse, Knxwledge, MF DOOM... Oh, and Gary Numan has some new stuff coming ! \r\n\r\nIs the Record Store Day\'s becoming a fraud ? Although, this release of the Doors might have me hyped.\r\n\r\nWow, a very good question : are we sitting on a vinyl bubble ? Probably : too many reissues, limited editions, crappy stuff etc. And of course, this resurgence also increase the demand for turntables. It\'s getting impossible to get cheap vintage turntable like it used to be. Sighs...\r\n\r\nSome people are sick with the resurgence of vinyl. So they fight back with arguments in favor of CDs. Fair enough. Same goes with the resurgence of cassette tape. Could this sound comparison study ease down the vibe ?\r\n\r\nMusic in Indonesia is not only about Benny Soebardja and his multiple bands. And vinyl is getting big again over there also. Get smart by knowing about the latest Indonesian hype. And India feels the same trend. And Czech Republic too. Oh well, there won\'t be any heaven (meaning : places where marvelous unknown records are sold for cheap) for collectors soon...\r\n\r\nIf you live in London, did you pick your free 7&quot; from HMV ?\r\n\r\nRecord collectors, if you have big bucks available, you can start your hunt by the records listed here. We\'ve known for years that The Quarrymen (Lennon &amp; McCartney\'s first band) and Sex Pistols have the most expensive records on Earth, but there are some surprises also. I mean, Leonid Kogan, anyone ? Okay, hate me, I\'m an ignorant. For Australian people, your specific list is here. \r\n\r\nFor those who wonder how big is ?uestlove\'s record collection, here\'s the figure : 72 000.\r\n\r\nI\'ve talked many times about Radio Vinyle, the TV program by Radio France. Now it\'s Radio World\'s turn to talk about it. \r\n\r\nBad move from the NY Public Library : the institution is selling its records. Well, bad move for culture, good move for collectors. The hunt will be mercyless I guess.\r\n', '2018-03-12 14:34:15', 0, 0, 0),
(12, 'Knxwledge', ' We know so few of Knxwledge that it\'s nice to finally have some info, thanks to XLR8R. Moreover, it comes in support of his newest project, titled &quot;Kauliflowr&quot;. I remember listening to Knxwledge\'s project off Bandcamp a few years ago, and frankly, it turned out that I didn\'t have enough time to follow his delivery. I mean, it feels like he was posting 3 projects per week. Sure, they weren\'t LP\'s but still, it\'s a lot of stuff for one listener. \r\nHailing from the West Coast, this guy is clearly walking in the footsteps of the Oxnard click (Madlib, Oh No, Kankick...) and the Brainfeeder guys (FlyLo, Samiyam, The Gaslamp Killer, etc.). A pretty prospect.  ', '2018-03-12 14:35:29', 0, 0, 0),
(13, 'Sketches Of Ethiopia', '\r\nThe immortal Mulatu Astatke has a new album out on the label Jazz Village, and it\'s simply called &quot;Sketches Of Ethiopia&quot;. Enjoying a well-deserved fame since Jim Jarmusch\'s movie &quot;Broken Flowers&quot;, Mulatu tours all over the world almost restlessly (okay, mainly North America and Europe). When he doesn\'t, he plays in his newly opened club in Addis Abeba.\r\n Obviously sampling a title from Miles Davis\' discography for this new album, Mulatu casted a variety of musicians to accompany him. If you follow the evolution of ethio-jazz, you may know that a big part of this scene is made of Western musicians nowadays. Following this trend, Mulatu hired a lot of Westerners for this album, mainly from London.\r\n\r\nOne thing I want to complain about this album is the very limited distribution I witnessed while I wanted to purchase it recently. You might want to hit the internet to get it easily. Oh well, maybe I should have checked directly at the nearest Harmonia Mundi (which is the official distribution company) store...\r\n\r\nAbout the great musician that is Mulatu Astatke, chech this good article by Dylan Valley and also this very cool interview of the maestro by The Stimuleye. \r\n', '2018-03-12 14:36:36', 0, 0, 0),
(14, 'Danny Bruh Bruh', ' Is there anything more refresing, entertaining, crazy and psychedelic than Danny Brown nowadays ? I seriously doubt it. This guy always come with the unexpected. so, yeah, die-hard fans rant about his evolution. He doesn\'t care and keeps moving forward. You don\'t like him rapping over electronic beats ? Beat it. Or him. You can\'t ? Because he\'s that good. \r\nDanny Brown dropped his first proper album (&quot;The Hybrid&quot; was an album to me, &quot;XXX&quot; as well, but &quot;OLD&quot; is marketed as his first true album so...) today, and it\'s supposed to be bananas. At least that\'s what A-Trak says. A-Trak usually has great taste. Wait, A-Trak is Danny\'s boss. Whatever. Danny\'s the shit. I just feel sorry they didn\'t include the banger &quot;Hottest MC\'s&quot; in the tracklist. Damn, what a track. \r\n', '2018-03-12 14:37:20', 0, 0, 0),
(15, 'Bob James', ' Bob James is an official member of the unofficial list of the most-sampled artits, sitting on top of it with someone like James Brown. So, reading about how he feels about sampling, a musical phenomenon which took off several decades ago, is always interesting. Among other stories, he tells about sueing Jeff &amp; Will and then discovering how to properly license samples. \r\n\r\nA nice interview by NahRight.  ', '2018-03-12 14:38:22', 0, 0, 0),
(16, 'Innervisions', 'This classic album by Stevie Wonder is 40 year old. You may know the hits, you may know the vibe, the cover art, etc. But do you know the stories behind the recording and production of this seminal album, Stevie\'s best one ? If not, Wax Poetics fills the gap, by interviewing one of the man who\'s responsible for the particular sound of &quot;Innervisions&quot;, Malcolm Cecil. A career musician on his own, Cecil provided Stevie Wonder with his unique TANTO synthetizer system to create the sound which revolutionized R&amp;B in the mid 70\'s. ', '2018-03-12 14:38:50', 0, 0, 0),
(17, 'Shigeto', ' As I remembered the episode of &quot;In The Studio&quot; by the good guys at XLR8R with Toro Y Moi, I just browsed again through what they had to offer recently. And well, they had just posted an episode with another talented beatmaker/producer, Shigeto. And I gotta say I\'m impressed by the interior design the dude built around his gear. Pretty impressive and neat, especially considering it\'s located in the city of Detroit, which is sadly kinda devastated by the crisis right now. Also, watch out for Shigeto\'s new album. \r\n\r\nWhile you\'re there, get a glimpse on other episodes of &quot;In The Studio&quot;, with acts like Mr. G (actually not hosted by XLR8R), Jon Hopkins, Laurel Halo, Kingdom, Silent Servant etc. ', '2018-03-12 14:52:28', 0, 0, 0),
(18, 'Jeff Gold', ' As usual Dust &amp; Grooves serves the perfect interview, this time with Jeff Gold, a record collector (what else ?), and record/memorabilia dealer. \r\nSome nice records displayed. ', '2018-03-12 14:53:07', 0, 0, 0),
(21, 'Afrika Bambaataa\'s record collection', ' The co-founder of hip hop is having a second youth nowadays. As a lecturer at the Cornell University, he apparently decided to donate his huge record collection to the Cornell University Library. This collection is huge by its volume but also by the influence it got on the birth of hip hop. One can easily imagine that all the music Bambaataa embraced until the early 80\'s contributed to the sound(s) we hear today. \r\n\r\nBut before being donated, the collection is exhibited at the Gavin Brown Gallery, Manhattan, NYC. There have been lots of articles about it on the web lately, so here\'s a selection : Wax Poetics, Egotrip Land, Village Voice, Dust &amp; Grooves.', '2018-03-12 14:55:00', 0, 0, 0),
(22, 'the ultimate largest collection', ' This time it seems it\'s for good. Following what I stated yesterday about Mr. Kallman\'s record collection, a bigger collection does exist, and it seems it\'s really the biggest collection in the world. \r\nThis collection sits in Pittsburgh and was built record after record by Paul Mawhinney. It is made of 1 million albums and 1,5 million singles. It is huge. \r\nA short documentary was shot about it, and notably about Paul\'s failure to sell his collection, which is officially worth $50 million. If you have $3 million to spend, and a lot of room for storage, the collection could be yours.  ', '2018-03-12 14:56:12', 0, 0, 0),
(23, 'vinyl, an investment ?', ' These days, people are trying to find new values to invest in. And it seems vinyl records are becoming one of these assets people collect in order to speculate. Well, there\'s a huge matter in this business, which is time (today\'s records might be valuable only in a decade or more), not to mention the relatively small market (high bidders are not so numerous). \r\nAnyway, Channel4 posted an article about this investing trend, as well as the very serious Wall Street Journal. You might be interested in the story of Craig Kallman, CEO of Atlantic Records, who owns nothing less than 750,000 records. Yeah, that much. Probably one of the world biggest private collections. ', '2018-03-12 14:56:37', 0, 0, 0),
(24, 'another Beatles rarity', ' This album is the world famous &quot;Sgt. Peppers\' Lonely Hearts Club Band&quot; album by the Beatles. What makes it rare is the altered cover : it looks like Xeroxed pictures replaced the heads of the Beatles and other genuine features of the cover. These faces belong to former Capitol employees, who printed a very limited edition to celebrate a successful year. \r\nNow, this piece has never seen the light of an auction. So, for the first time ever, people will battle over the ownership of this true collector item. Auction is up until August 10th. Needless to say, you will need to be wealthy to get your hand on this record. \r\n', '2018-03-12 14:57:08', 0, 0, 0),
(25, 'another dope Kickstarter campaign', ' A quiet man with a long resume, Syl Johnson could have had a greater career, the kind James Brown or Stevie Wonder enjoyed. But, with a few classics tunes under his belt, he\'s still unknown to some people. What a shame... a heavily sampled soul artist (probably among the most sampled singers of all time), Syl Johnson\'s footprint can be heard under acts like the Wu-Tang Clan, Kanye West, De La Soul, Cypress Hill, Jay-Z etc. \r\nLately, he\'s been reissued by the label Numero Group, with an impressive boxset which sums up his career.\r\n\r\nStill, some people think Syl doesn\'t enjoy the success and fame he deserves. That\'s why a movie titled &quot;Any Way The Wind Blows&quot; is in the making to tell the story of the man who released classic albums like &quot;Is It Because I\'m Black ?&quot; and &quot;Dresses Too Short&quot;.\r\n\r\nAnd you can all contribute to the funding of the movie, through the Kickstarter platform. The more you give, the more you get rewarded. Plus gratitude.', '2018-03-12 14:57:48', 0, 0, 0),
(26, 'MF Doom', ' Noisey/Vice published an article about the evolution of the man we now know as MF Doom (among other aliases and collabos). He evolved from being Zev Love X, a hip hop wonderkid with Kausing Much Damage, to disappearing only to resurface as the highly critically acclaimed metal face. \r\nAn essential read for hip hop fans, especially those who missed the adventure of KMD. Doom was funky fresh back then. ', '2018-03-12 14:58:23', 0, 0, 0),
(27, 'Yorke vs. Spotify', ' Thom Yorke recently lifted the middle finger to Spotify and withdrew his most recent projects from the website catalog. \r\n\r\nAnd of course, in that era of communication we\'re living in, Spotify had to respond to the accusations. ', '2018-03-12 14:59:00', 0, 0, 0),
(28, 'vinyl lovers', 'I can\'t resist, I gotta share that with you : &quot;36 Things Vinyl Collectors Love&quot;. I don\'t suscribe to everything, but it\'s a fun thing to browse.', '2018-03-12 14:59:32', 0, 0, 0),
(29, 'UVinyl', ' This is not a joke : Universal is launching a crowdfunding campaign to finance the reissuing of out-of-print vinyl albums. Yes, Universal, the major company is asking for money to offset the mistake it did somewhere around 20 years ago : abandoning the vinyl plate. \r\nNot long ago, I mentioned the example of Beat Delete, the crowdfunding platform of Ninja Tune. Well, UVinyl is the same for Universal. \r\nThe Vinyl Project starts oddly : they initially stated that albums like &quot;MTV Unplugged&quot; by Nirvana and &quot;Goo&quot; by Sonic Youth would be part of the project, well, they won\'t, as they will be reissued through &quot;regular channels&quot;. With announcements like this one, what can we expect ? For now, the service is not launched yet, but it should be soon. \r\nOn another side, UVinyl allows you to order vinyl boxsets, for those who like that kind of bundles. It also showcases the existing &quot;Back To Black&quot; series, which has been running for a few years already.\r\n', '2018-03-12 15:00:06', 0, 0, 0),
(30, 'the search for vinyl in Pakistan', ' This is an editorial gem. Most of the (web) press articles I find about the vinyl revival come from the western countries, mainly Europe, North America and a bit of Australia/New-Zealand. But this one come from Pakistan. \r\nSure, you\'ll come to the conclusion the passion for vinyl is shared all over the world, or almost. But in this article, you\'ll also find some poetry, particularly in the first story told. They should even make a film about it : a guy travels miles and miles just to listen to a record at a stranger\'s house. To me, that\'s a good pitch. \r\n', '2018-03-12 15:00:46', 0, 0, 0),
(31, 'Egon\'s new home', ' For his Funk Archeology series, a collection of web articles about digging deeper and deeper into obscure world sounds, Egon relocated from NPR to Red Bull Music Academy. \r\nThe two latest episodes focus on corporate-funded music (Jingle Funk) and Australian music (Digging Down Under).\r\n\r\nThis guy is obsessed.', '2018-03-12 15:01:15', 1, 3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `articles_h_categories`
--

CREATE TABLE `articles_h_categories` (
  `id_article` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles_h_categories`
--

INSERT INTO `articles_h_categories` (`id_article`, `id_categorie`) VALUES
(29, 4),
(30, 3),
(31, 1),
(31, 3),
(31, 6);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `titre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `titre`) VALUES
(1, 'pop-rock'),
(3, 'musique du monde'),
(4, 'rap'),
(5, 'classique'),
(6, 'jazz'),
(7, 'funky'),
(8, 'grunge'),
(10, 'dddd');

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

CREATE TABLE `links` (
  `id_links` int(11) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `links`
--

INSERT INTO `links` (`id_links`, `url`) VALUES
(2, 'http://soulpopcorn.blogspot.be/'),
(3, 'http://turkishpsychedelicrock.blogspot.be/'),
(4, 'http://thejazzkid.tumblr.com/'),
(5, 'dsss'),
(6, 'hggfgh');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id_user`, `login`, `password`) VALUES
(1, 'redteam', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id_links`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `links`
--
ALTER TABLE `links`
  MODIFY `id_links` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
