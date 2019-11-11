-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 11 nov. 2019 à 11:41
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forteroche`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `alert` int(11) DEFAULT NULL,
  `added_datetime` datetime NOT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `content`, `alert`, `added_datetime`, `updated_datetime`) VALUES
(1, 5, 'Antoine', 'Vivement la suite !', 1, '2019-09-13 18:24:05', NULL),
(2, 5, 'Stéphane', 'Désolé, je n\'accroche pas...', 0, '2019-09-13 18:24:38', NULL),
(3, 5, 'Hervé', '&lt;p&gt;Pas de pub ici ;)&lt;/p&gt;\r\n&lt;p&gt;Commentaire mod&amp;eacute;r&amp;eacute;.&lt;/p&gt;', 3, '2019-09-13 18:26:00', '2019-10-12 15:17:23');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `added_datetime` datetime NOT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `content`, `added_datetime`, `updated_datetime`) VALUES
(1, 'Jean Forteroche', 'Chapitre 1 - Arrivé dans le grand froid', '&lt;p&gt;Les grands voyages ont ceci de merveilleux que leur enchantement commence avant le d&amp;eacute;part m&amp;ecirc;me. On ouvre les atlas, on r&amp;ecirc;ve sur les cartes. On r&amp;eacute;p&amp;egrave;te les noms magnifiques des villes inconnues.&lt;br /&gt;&lt;br /&gt;Alaska ! En voil&amp;agrave; une destination atypique qui en fait r&amp;ecirc;ver plus d\'un ! Moi la premi&amp;egrave;re, avant ce voyage, cela me paraissait inaccessible. J\'imaginais une terre gigantesque, trois pauvres routes, des glaciers, des animaux sauvages et du grand rien tout autour. Le total trip Into the Wild.&amp;nbsp;&lt;br /&gt;&lt;br /&gt;Lorsqu\'on s\'y int&amp;eacute;resse d\'un peu plus pr&amp;egrave;s, l\'Alaska est en fait tr&amp;egrave;s diversifi&amp;eacute; et change beaucoup d\'une r&amp;eacute;gion &amp;agrave; une autre. Cela dit, peu importe o&amp;ugrave; l\'on se trouve sur cette grande terre, je pense que tout est fabuleux et enchanteur. Vous pouvez vous rendre au sud (dans le queue de la po&amp;ecirc;le), dans l\'int&amp;eacute;rieur des terres (cf. le film Into the Wild au Denali National Park), sur la p&amp;eacute;ninsule Kenai ou encore dans le grand nord.&amp;nbsp;&lt;br /&gt;Le plus simple, si vous venez de France, est de prendre un avion jusqu\'&amp;agrave; Anchorage, puis de louer une voiture ou un van (ex de loueur pas cher : Alamo.com)&lt;br /&gt;N\'ayez pas trop peur, il ne fait pas toujours si froid. M&amp;ecirc;me si l\'on compte 5 000 glaciers, 3 millions de lacs, 800 &amp;icirc;les et je ne sais combien de cours d\'eau, tout n\'est pas non plus qu\'un grand champ de glace ;-) L\'Alaska fait 3 fois la taille de la France et les montagnes sont gigantesques. Le point culminant est le Mont McKinley (6 194m). Et oui, tout &amp;ccedil;a nous remet &amp;agrave; notre petite place...&lt;br /&gt;Bref, si vous &amp;ecirc;tes amoureux des merveilles naturelles et des graaaaaands espaces, bienvenue &amp;agrave; bord !&amp;nbsp;&lt;br /&gt;&lt;br /&gt;Nous sommes le 21 mars 2014, je suis avec trois amies au Yukon (&amp;agrave; Whitehorse) et nous partons d&amp;eacute;couvrir le sud de l\'Alaska, avec une voiture que ma famille d\'accueil m\'a pr&amp;ecirc;t&amp;eacute;e (merci les Yukonnais) et une motivation in&amp;eacute;branlable. En seulement 2 ou 3 heures de route, nous serons &amp;agrave; Skagway, en Alaska !&lt;/p&gt;\r\n&lt;p&gt;Le trajet fait partie du voyage. C\'est, pour ma part, ce qui m\'importe souvent le plus, ce qui m\'&amp;eacute;jecte du train-train quotidien. C\'est sur la route que je me sens bien. Alors cette route ci, la Klondike Highway South, qui m&amp;egrave;ne du Yukon en Alaska, elle vaut vraiment le d&amp;eacute;tour.&amp;nbsp;&lt;br /&gt;&lt;br /&gt;Route mythique et historique de la piste Chilkoot, vous croiserez la petite ville sympathique de Carcross (qui habite le plus petit d&amp;eacute;sert du monde) et de nombreux lacs (dont Emerald lake et Tagish lake). Un r&amp;eacute;gal pour les yeux....&lt;/p&gt;', '2019-09-13 18:04:30', NULL),
(2, 'Jean Forteroche', 'Chapitre 2 - Frontière Colombie-Britannique / Alaska', '&lt;p&gt;Apr&amp;egrave;s avoir quitt&amp;eacute; le Yukon, vous entrez en Colombie-Britannique pour une courte p&amp;eacute;riode avant d\'arriver en Alaska, par ce qu\'on appelle la &quot;White Pass&quot;. Ce no man\'s land porte bien son nom. En effet, tout ici est recouvert de blanc, sur des kilom&amp;egrave;tres et des kilom&amp;egrave;tres. La route se fraye timidement un chemin et le passage de la fronti&amp;egrave;re am&amp;eacute;ricaine m\'a laiss&amp;eacute; sans voix. Cette beaut&amp;eacute; immacul&amp;eacute;e est totalement prenante. Et les montagnes sont bien au rendez-vous ! De nombreuses personnes partent randonner, skier ou faire de la motoneige en freestyle dans la White Pass (nous y avons fait de la raquette pour notre part). Cela dit, faites attention, car vous &amp;ecirc;tes en territoire d\'avalanche et il y a beaucoup de risques. Ici, c\'est la nature qui dicte sa loi !&lt;/p&gt;', '2019-09-13 18:06:55', NULL),
(3, 'Jean Forteroche', 'Chapitre 3 - Skagway', '&lt;p&gt;Une fois avoir franchi la fronti&amp;egrave;re improbable de l\'Alaska, vous continuez quelques kilom&amp;egrave;tres sur une route toujours aussi improbable et arrivez dans la ville de Skagway, entour&amp;eacute;e de montagnes, au bord de l\'oc&amp;eacute;an pacifique. Cette ville s\'est fortement d&amp;eacute;velopp&amp;eacute;e, comme beaucoup d\'autres, au moment de la ru&amp;eacute;e vers l\'or, en 1898. Elle &amp;eacute;tait &amp;agrave; l\'&amp;eacute;poque la plus grande ville de l\'Alaska mais avait mauvaise r&amp;eacute;putation. Crimes, paris et prostitutions &amp;eacute;taient monnaie courante. C\'est l&amp;agrave;-bas qu\'&amp;agrave; s&amp;eacute;vit Soapy Smith, le plus c&amp;eacute;l&amp;egrave;bre criminel.&amp;nbsp;&lt;br /&gt;&lt;br /&gt;Aujourd\'hui, cette ville s\'anime via sa rue principale et son port. En effet, le ferry de Skagway est un point de d&amp;eacute;part int&amp;eacute;ressant pour tous ceux qui veulent partir sur la voie maritime (Inside passage) afin de d&amp;eacute;couvrir la capitale de l\'Alaska : Juneau.&amp;nbsp;&lt;br /&gt;&lt;br /&gt;Skagway n\'a donc &amp;eacute;t&amp;eacute; qu\'une courte halte pour nous. Histoire de faire un tour, prendre des dollars US et manger dans un petit restaurant avant le d&amp;eacute;part du ferry. Cela dit je trouve que cette ville a vraiment du charme et m&amp;eacute;rite qu\'on s\'y attarde un peu.&lt;/p&gt;', '2019-09-13 18:07:25', NULL),
(4, 'Jean Forteroche', 'Chapitre 4 - &quot;Inside Passage&quot; de Skagway à Juneau', '&lt;p&gt;Au d&amp;eacute;part de Skagway (mais &amp;eacute;galement d\'autres villes) vous pouvez r&amp;eacute;aliser une croisi&amp;egrave;re dans ce qu\'on appelle &quot;le passage int&amp;eacute;rieur&quot; (Inside Passage). Cette voie maritime c&amp;ocirc;ti&amp;egrave;re de l\'oc&amp;eacute;an pacifique se faufile entre le sud-est de l\'Alaska et le nord-ouest de la Colombie-Britannique. Elle a &amp;eacute;t&amp;eacute; tr&amp;egrave;s emprunt&amp;eacute;e au moment de la ru&amp;eacute;e vers l\'or par les prospecteurs. Aujourd\'hui, le tourisme est tr&amp;egrave;s d&amp;eacute;velopp&amp;eacute; sur cette voie, ce qui pose des soucis &amp;eacute;cologiques (et oui, paquebots et glaciers, &amp;ccedil;a ne fait pas bon m&amp;eacute;nage).&amp;nbsp;&lt;br /&gt;&lt;br /&gt;Quoi qu\'il en soit, sachez que de quelques heures &amp;agrave; plusieurs jours, plusieurs itin&amp;eacute;raires sont possibles, et permettent de partir d&amp;eacute;couvrir les &amp;icirc;les, fjords et glaciers nich&amp;eacute;s dans le coin. Vous pouvez m&amp;ecirc;me planifier une petite semaine de travers&amp;eacute;e et descendre tranquillement jusqu\'&amp;agrave; l\'&amp;icirc;le de Vancouver.&lt;/p&gt;\r\n&lt;p&gt;Nous avons choisi d\'aller visiter Juneau, la capitale de l\'Alaska, accessible uniquement par ferry ou par avion (et oui, il n\'y a pas vraiment de routes pour se rendre dans le sud-est de l\'Alaska...).&lt;br /&gt;&lt;br /&gt;De Skagway, la travers&amp;eacute;e en ferry dure 6 heures. Cette voie maritime est &amp;eacute;poustouflante car vous &amp;eacute;voluez tranquillement dans ce passage entour&amp;eacute; de montagnes plus belles les unes que les autres. Si avec de la chance, vous avez comme nous, un temps radieux (ce qui n\'est pas souvent le cas, c\'est venteux et pluvieux habituellement), vous pourrez profiter d\'un coucher de soleil inoubliable, tranquillement install&amp;eacute; dans le solarium gratuit sur le ponton ! Sur le ferry, sachez qu\'ils servent &amp;agrave; manger et que c\'est plut&amp;ocirc;t correct. Il y a aussi possibilit&amp;eacute; d\'avoir une cabine mais nous on l\'a bien entendu jou&amp;eacute; en mode pauvre (surtout pour si peu d\'heures). Allez, let\'s go to Juneau !&lt;/p&gt;', '2019-09-13 18:08:41', NULL),
(5, 'Jean Forteroche', 'Chapitre 5 - Découverte de Juneau, capitale de l\'Alaska', '&lt;p&gt;Juneau a pris son envol lors de la premi&amp;egrave;re ru&amp;eacute;e vers l&amp;rsquo;or d&amp;rsquo;importance en Alaska. Lorsqu&amp;rsquo;on parle de capitale de l&amp;rsquo;Alaska, n&amp;rsquo;esp&amp;eacute;rez pas voir de grands buildings ou de r&amp;eacute;el &amp;laquo; centre ville &amp;raquo;. Downtown se r&amp;eacute;sume &amp;agrave; quelques rues, tandis que le reste de la ville se d&amp;eacute;couvre en grimpant des ruelles et en passant de ci de l&amp;agrave; par des escaliers. C&amp;rsquo;est une ville que je qualifierais d&amp;rsquo;originale et pittoresque. Certes, il faut avoir envie de monter et d&amp;rsquo;errer pour &amp;ecirc;tre &amp;eacute;tonn&amp;eacute;, mais la vue est splendide lorsqu&amp;rsquo;on prend cette hauteur. Les maisons sont color&amp;eacute;es et l&amp;rsquo;atmosph&amp;egrave;re semble paisible dans cette petite capitale. Il n&amp;rsquo;est pas difficile de conduire et de se garer l&amp;agrave;-bas.&lt;br /&gt;La ville s&amp;rsquo;active autour du travail au port et de la p&amp;ecirc;che. Le tourisme est florissant, du fait de la pr&amp;eacute;sence des glaciers, facilement accessibles aux alentours de Juneau. Point n&amp;eacute;gatif : de nombreux paquebots d&amp;eacute;boulent chaque jour&amp;hellip;&amp;nbsp;&lt;br /&gt;&lt;br /&gt;Je n&amp;rsquo;ai pas pu d&amp;eacute;couvrir la vie culturelle de la capitale, car il n&amp;rsquo;y avait pas d&amp;rsquo;&amp;eacute;v&amp;eacute;nements particuliers en mars, mais il semble qu&amp;rsquo;il y ait de nombreux festivals, notamment &amp;agrave; partir du mois d&amp;rsquo;avril.&amp;nbsp;&lt;br /&gt;Quoi qu&amp;rsquo;il en soit, la visite de Juneau m&amp;rsquo;a laiss&amp;eacute; un tr&amp;egrave;s bon souvenir. Il n&amp;rsquo;y a pas &amp;eacute;norm&amp;eacute;ment &amp;agrave; faire, mais une balade s&amp;rsquo;impose dans la ville et vers les merveilles naturelles qui l&amp;rsquo;entoure. Petite info m&amp;eacute;t&amp;eacute;o : pr&amp;eacute;parez votre parapluie ! Personnellement, j&amp;rsquo;ai eu beaucoup de chance d&amp;rsquo;avoir du beau temps, mais cette r&amp;eacute;gion de l&amp;rsquo;Alaska est connue pour enchainer les averses et temps gris. Par contre, l&amp;rsquo;avantage est qu&amp;rsquo;il fait doux. Pas besoin d&amp;rsquo;&amp;ecirc;tre en &amp;eacute;quipement de survie !&lt;/p&gt;\r\n&lt;p&gt;Voici venu le temps de la fameuse randonn&amp;eacute;e qui d&amp;eacute;bute sur les hauteurs de la ville (Sixth avenue). C\'est une randonn&amp;eacute;e historique qui offre des panoramas ahurissants. Nous avons &amp;eacute;t&amp;eacute; pris par le temps et n\'avons pas pu finir cette randonn&amp;eacute;e, mais le d&amp;eacute;but aura &amp;eacute;t&amp;eacute; magique.... (et venteux!) Nous avons notamment appr&amp;eacute;ci&amp;eacute; la neige qui balayait et s\'envolait du haut des montagnes, ou encore la cascade &quot;ebner falls&quot;.&amp;nbsp;&lt;/p&gt;', '2019-09-13 18:09:41', '2019-10-12 15:17:01');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `email`) VALUES
(3, 'admin', '$2y$10$K5ABdxECRbfeywfYqaH9kOn7.HgmGe4qlzIt2d36sMeod28jhDyeu', 'admin@huso.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
