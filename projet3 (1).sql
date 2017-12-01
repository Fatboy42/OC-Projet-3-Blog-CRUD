-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 01 Décembre 2017 à 12:32
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet3`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL DEFAULT '1',
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `dateAjout` date NOT NULL,
  `auteur` int(11) NOT NULL DEFAULT '1',
  `dateModif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `etat`, `titre`, `contenu`, `dateAjout`, `auteur`, `dateModif`) VALUES
(26, 1, 'Close. It\'s gonna make your kidneys shut down. ', '<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Get off the high road Summer. We all got pink eye because you wouldn\'t stop texting on the toilet. It probably has space aids. Meeseeks were not born into this world fumbling for meaning, Jerry!</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Who cares, Morty? Global acts of terrorism happen every day. Uh, here\'s something that\'s never happened before&mdash;I\'m a pickle! I\'m Pickle Ri-i-i-ick! I do not have discolored butthole flaps. I am Mr. Booby Buyer. I\'ll buy those boobies for 25 schmeckles! No jumping in the sewer!</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">I mean, why would a poptart want to live inside a toaster, Rick? I mean, that would be like the scariest place for them to live. You know what I mean? S-S-Samantha. Are you hungry for apples? ARE YOU HUNGRY FOR APPLESSS!? Wha, me irresponsible ?! All I wanted you to do was to hand me a screwdriver, Morty!</p>', '2017-10-27', 1, NULL),
(27, 1, 'Well he roped me into this! Listen, Morty', '<div id="ricksum" class="ricksum" style="transition: all 0.4s ease; font-family: Lato, sans-serif; color: #212a2b; font-size: 17px;">\r\n<p style="transition: all 0.4s ease;">I wish that shotgun was my penis. Nobody\'s killing me until after I catch my wife with another man. Why are you doing this bit? We\'re gonna die. Hi! Principal Vagina: the name\'s real, possibly Scandinavian.</p>\r\n<p style="transition: all 0.4s ease;">Allahu blehhhh Akbar! Looossseeerrrrr. Yo! What up my glip glops! Want to piss on him?</p>\r\n<p style="transition: all 0.4s ease;">Well he roped me into this! Listen, Morty, I hate to break it to you but what people call love is just a chemical reaction that compels animals to breed. Thanks Noob Noob, this guy gets it. The fucking amish bitch shot me!</p>\r\n<p>&nbsp;</p>\r\n</div>', '2017-10-27', 1, NULL),
(28, 1, 'Jesus Christ! Did the boomy-booms blow up all your wordy-word books?', '<div id="ricksum" class="ricksum" style="transition: all 0.4s ease; font-family: Lato, sans-serif; color: #212a2b; font-size: 17px;">\r\n<p style="transition: all 0.4s ease;">Morty. Welcome to the darkest year of our adventures. First thing that\'s different? No more dad, Morty. Alien Invasion Tomato Monster Mexican Armada Brothers Who Are Just Regular Brothers Running In A Van From An Asteroid And All Sorts Of Things: The Movie. Oh, I\'m sorry Morty, are you the scientist or are you the kid who wanted to get laid?</p>\r\n<p style="transition: all 0.4s ease;">Prepare to be emancipated from your own inferior genes! Don\'t break an arm jerking yourself off Morty. I\'m not looking for judgement, just a yes or no. Can you assimilate a giraffe? Holy crap, Morty, run! Run for your life, Morty, run! I-I\'ve never seen that thing before in my life, Morty, I don\'t even know what the hell it is! We-we gotta get out of here, Morty, it\'s gonna kill us! We\'re gonna die, Morty! We\'re gonna die!</p>\r\n<p style="transition: all 0.4s ease;">Oh good job Morty! You killed my best customer but you saved a mind reading fart! Morty! The principal and I have discussed it, a-a-and we\'re both insecure enough to agree to a three-way! Quote mode. Wow, so your origin is what? You fell into a vat of redundancy?</p>\r\n<p>&nbsp;</p>\r\n</div>', '2017-10-27', 1, NULL),
(29, 1, 'Are you hungry for apples? ARE YOU HUNGRY FOR APPLESSS!? ', '<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Are you hungry for apples? ARE YOU HUNGRY FOR APPLESSS!? We all wanna die, we\'re meeseeks! It\'s called carpe diem Morty. Look it up. Ew, Grandpa, so gross! You\'re talking about my mom!</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Dont mind those stare goblins. Principal Vagina here, don\'t let the name fool you; I\'m very much in charge. Reminding you that tonight is our annual flu season dance. I don\'t know how many times I have to say this, but if you have the flu, stay home. The flu season dance is about awareness, not celebration. You don\'t bring dead babies to Passover. If I\'ve learned one thing, it\'s that before you get anywhere in life, you gotta stop listening to yourself. You ask alotta questions Morty, not very charismatic of you.</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">It&rsquo;s a new machine. It detects stuff all the way up your butt. Hi! Principal Vagina: the name\'s real, possibly Scandinavian. Hello Jerry, come to rub my face in urine again? I know the two of you are very different from each other in a lot of ways, but you have to understand that as far as Grandpa\'s concerned, you\'re both pieces of shit! Yeah. I can prove it mathematically. Actually, l-l-let me grab my whiteboard. This has been a long time coming, anyways.</p>', '2017-10-27', 1, NULL),
(30, 1, 'Ceci est un article en non Ipsum', '<p>Ceci est un magnifique article publi&eacute; sans Ipsum, je suis tr&egrave;s fi&egrave;re de pourvoir le partager avec vous.&nbsp;<strong>Merci &agrave; tous.</strong></p>', '2017-10-27', 1, NULL),
(31, 1, ' Taste bad! Alien Invasion Tomato Monster Mexican ', '<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Who Are Just Regular Brothers Running In A Van From An Asteroid And All Sorts Of Things: The Movie. Come on, flip the pickle, Morty. You\'re not gonna regret it. The payoff is huge. Wubba lubba dub dub!</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Lick, lickity, lick my balls! I turned myself into a pickle, Morty! Boom! Big reveal! I\'m a pickle! What do you think about that? I turned myself into a pickle! W-what are you just staring at me for, bro? I turned myself into a pickle, Morty. Isn\'t it obvious Morty? I froze him. Prepare to be emancipated from your own inferior genes!</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Oh I say good sir, oh harumph, ohh a bope-a-dope-o-bobo. Thanks Noob Noob, this guy gets it. We are created to serve a singular purpose, for which we will go to any lengths to fulfill! And that\'s the wayyy, the news goes!</p>', '2017-10-27', 1, NULL),
(32, 2, 'Yeah, sure, I mean, if you spend all day ', '<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Yeah, sure, I mean, if you spend all day shuffling words around, you can make anything sound bad. If it were, you could call ME Ernest Hemingway. Don\'t be trippin dog we got you. You know my name, that\'s disarming.</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Countries known for their sexually aggressive men. Dont mind those stare goblins. Nobody\'s killing me until after I catch my wife with another man. Allahu blehhhh Akbar!</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Don\'t be a baby! You avoid getting shot in real life all the time, Morty! Just do the same thing here and we\'ll be fine! Ohh, fuck! I don\'t get it and I don\'t need to. Snuffles want to be understood. Snuffles need to be understood.</p>', '2017-10-27', 1, '2017-11-23'),
(33, 2, 'That just sounds like slavery with extra steps', '<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">He\'s not pressing charges. That\'s gotta be the you shot me equivalent of not being mad.</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">That just sounds like slavery with extra steps. Oh, I\'m sorry Morty, are you the scientist or are you the kid who wanted to get laid? I mixed in some praying mantis DNA. You know a praying mantis is the exact opposite of a vole, Morty? They mate once and then bluergh cut each other\'s heads off. Flip the pickle over.</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Well I don\'t like your unemployed genes in my grandchildren, Jerry. Not today bitch! Hello Jerry, come to rub my face in urine again? Rick, I don\'t like glowing rocks in the kitchen trash!</p>', '2017-10-27', 1, NULL),
(34, 2, 'Well look where being smart got you.', '<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Well look where being smart got you. Did you just come into the cafeteria through a portal? Holy crap, Morty, run! Run for your life, Morty, run! I-I\'ve never seen that thing before in my life, Morty, I don\'t even know what the hell it is! We-we gotta get out of here, Morty, it\'s gonna kill us! We\'re gonna die, Morty! We\'re gonna die! Ooh, your little flappy doodles are twitching. Does that mean you\'re aroused, or did you just get a signal that one of your buddies found a grape?</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Listen, Morty, I hate to break it to you but what people call love is just a chemical reaction that compels animals to breed. It\'s not like we can do this every week, we get 3 or 4 more of these tops. Don\'t break an arm jerking yourself off Morty. Nice to wheat you!</p>\r\n<p style="transition: all 0.4s ease; color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Morty! The principal and I have discussed it, a-a-and we\'re both insecure enough to agree to a three-way! My sister died in the spaghetti. Awww, bitch! He\'s not pressing charges. That\'s gotta be the you shot me equivalent of not being mad.</p>', '2017-10-27', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `article` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `etat` int(11) NOT NULL DEFAULT '1',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `article`, `pseudo`, `mail`, `contenu`, `etat`, `date`) VALUES
(55, 32, 'Rick', 'Rick@adultswim.com', '<p><span style="color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Morty! The principal and I have discussed it, a-a-and we\'re both insecure enough to agree to a three-way! My sister died in the spaghetti. Awww, bitch!&nbsp;</span></p>', 2, '2017-10-27'),
(56, 31, 'Morty', 'Morty@adultswim.com', '<p><span style="color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">Rubber baby buggy bumpers! Not today bitch! You can run, but you can\'t hide bitch! They\'re not infinite universes left in sync with the show.</span></p>', 2, '2017-10-27'),
(57, 30, 'AngeloDeLaVega', 'angelo.vega@gmail.com', '<p>Un article vraiment tr&egrave;s interessant !</p>', 1, '2017-10-27'),
(58, 29, 'HollyMolly', 'Holly@gmial.com', '<p><span style="color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">ummer, next time we\'re hiding in a chlorkian echo nest, can you do me a favour and turn your ringer off?! Ew, Grandpa, so gross! You\'re talking about my mom! Isn\'t it obvious Morty?</span></p>', 1, '2017-10-27'),
(59, 28, 'MrPepper', 'pepper@gmail.com', '<p><span style="color: #212a2b; font-family: Lato, sans-serif; font-size: 17px;">You can run, but you can\'t hide bitch! Puffy vagina. Mind your own goddamn business, Gene! I\'m having a conversation with my mother here! Kissing Rick\'s ass isn\'t gonna make him stay, Mom, but it will help you lose everyone else. If I\'ve learned one thing, it\'s that before you get anywhere in life, you gotta stop listening to yourself.</span></p>', 3, '2017-10-27'),
(60, 26, 'UnPseudo', 'un.mail@mail.com', '<p>Ceci est un commentaire comme les autres !</p>', 3, '2017-10-27'),
(62, 31, 'PseudoSoutenance ', 'palmino.angelo@gmail.com', '<p>Ceci est un commentaire de soutenance</p>', 3, '2017-11-23');

-- --------------------------------------------------------

--
-- Structure de la table `passchange`
--

CREATE TABLE `passchange` (
  `id` int(11) NOT NULL,
  `uniqid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prénom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prénom`, `mail`, `mdp`) VALUES
(1, 'Jean_Forteroche', 'Forteroche', 'Jean', 'palmino.angelo@gmail.com', '3b004ac6d8a602681f5ee3587c924855679e21d9');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteur` (`auteur`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article` (`article`);

--
-- Index pour la table `passchange`
--
ALTER TABLE `passchange`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqid` (`uniqid`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT pour la table `passchange`
--
ALTER TABLE `passchange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`auteur`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`article`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
