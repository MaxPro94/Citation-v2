-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 mars 2024 à 14:58
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `citations`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `id_auteur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prenom` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `biographie` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_start` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_end` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`, `description`, `biographie`, `date_start`, `date_end`, `photo`) VALUES
(1, 'Nietzsche', 'Friedrich Wilhelm', 'Friedrich Wilhelm Nietzsche (1844-1900) était un philosophe allemand dont les travaux portent principalement sur la culture, la philosophie, la science et la critique de la religion. Il est célèbre pour ses idées sur la volonté de puissance, l\'éternel retour et la mort de Dieu. Nietzsche est considéré comme l\'un des philosophes les plus influents de l\'ère moderne.', 'Après avoir terminé ses études, Nietzsche a occupé divers postes académiques, notamment à l\'Université de Bâle, en Suisse, où il a été nommé professeur de philologie classique à seulement 24 ans. Cependant, en raison de problèmes de santé, notamment de graves maux de tête et de problèmes de vision, il a dû prendre sa retraite prématurément de l\'enseignement en 1879.  Pendant sa période de retraite forcée, Nietzsche a consacré son temps à l\'écriture et à la rédaction de ses principales œuvres philosophiques. C\'est à cette époque qu\'il a publié des ouvrages majeurs tels que \"Ainsi parlait Zarathoustra\" (Also sprach Zarathustra), \"Le Gai Savoir\" (Die fröhliche Wissenschaft) et \"Aurore\" (Morgenröte).  Nietzsche était un penseur controversé de son temps, en grande partie en raison de ses critiques acerbes de la religion et de la morale conventionnelle, ainsi que de son rejet des valeurs traditionnelles. Ses idées ont été mal comprises et souvent mal interprétées par ses contemporains, ce qui a conduit à des débats animés et à des controverses.  Après sa mort, la sœur de Nietzsche, Elisabeth Förster-Nietzsche, a récupéré ses écrits et a cherché à promouvoir une interprétation de sa pensée qui soutenait les idéologies nationalistes et antisémites. Cette appropriation de sa philosophie a contribué à la propagation de nombreuses idées fausses sur Nietzsche et a terni son héritage pendant de nombreuses années.  Cependant, au fil du temps, l\'œuvre de Nietzsche a été réévaluée et ses idées ont été réinterprétées de manière plus nuancée. Aujourd\'hui, il est largement reconnu comme l\'un des philosophes les plus originaux et les plus influents de l\'histoire de la pensée occidentale, et son travail continue d\'inspirer et de susciter des débats dans de nombreux domaines intellectuels.', '1844', '1900', 'assets/img/nietzsche.jfif'),
(2, 'Schopenhauer', 'Arthur', 'Arthur Schopenhauer (1788-1860) était un philosophe allemand reconnu pour son pessimisme et son œuvre majeure \"Le Monde comme Volonté et comme Représentation\". Il était un penseur majeur dans la tradition philosophique allemande et a influencé de nombreux autres penseurs, notamment Nietzsche.', 'Arthur Schopenhauer était un philosophe allemand né le 22 février 1788 à Dantzig, alors une ville libre relevant de l\'Empire allemand, et décédé le 21 septembre 1860 à Francfort-sur-le-Main, en Allemagne. Il est principalement connu pour son œuvre majeure, \"Le Monde comme Volonté et comme Représentation\" (Die Welt als Wille und Vorstellung), publiée pour la première fois en 1818.  Schopenhauer est né dans une famille aisée et cultivée. Son père était un marchand prospère, et son éducation a été fortement influencée par les idées des Lumières françaises ainsi que par les écrits de Kant et de Rousseau. Schopenhauer a étudié la philosophie à l\'Université de Göttingen et à l\'Université de Berlin, où il a été particulièrement influencé par les idées de Kant.  Après avoir obtenu son doctorat, Schopenhauer a décidé de se consacrer à la philosophie et a entrepris une vie d\'érudition et de méditation solitaire. Son œuvre principale, \"Le Monde comme Volonté et comme Représentation\", propose une vision du monde dans laquelle la réalité est dominée par une volonté universelle, une force aveugle et insatiable qui sous-tend toutes les manifestations de la vie.  Schopenhauer a également développé une éthique fondée sur la compassion et la pitié, affirmant que la souffrance est inhérente à la condition humaine et que la compassion envers autrui est la clé de la moralité. Ces idées ont exercé une influence importante sur des penseurs ultérieurs tels que Nietzsche, Freud et Wagner.  Malgré son génie philosophique, Schopenhauer a connu peu de succès de son vivant. Il a vécu une vie solitaire et a souvent été marginalisé par la communauté intellectuelle de son époque. Ce n\'est qu\'à la fin de sa vie et après sa mort que son travail a commencé à être reconnu et apprécié à sa juste valeur.  Aujourd\'hui, Schopenhauer est largement considéré comme l\'un des philosophes les plus originaux et les plus influents du XIXe siècle. Son œuvre continue d\'être étudiée et discutée dans le cadre de la philosophie occidentale, et son impact se fait encore sentir dans de nombreux domaines, y compris la philosophie, la psychologie, la littérature et l\'art.', '1788', '1860', 'assets/img/schopenhauer.jfif'),
(3, 'Marc-Aurèle', 'Marcus Aurelius', 'Marcus Aurelius (121-180) était un empereur romain stoïcien, connu pour ses \"Pensées pour moi-même\", un recueil de réflexions sur la philosophie stoïcienne. Son règne est souvent considéré comme la fin de la période de prospérité de l\'Empire romain.', ' Marcus Aurelius était un empereur romain, né le 26 avril 121 à Rome et décédé le 17 mars 180 à Vindobona (aujourd\'hui Vienne, en Autriche). Il est surtout connu pour son règne en tant qu\'empereur romain de 161 à 180, ainsi que pour son œuvre philosophique majeure, \"Méditations\" (ou \"Pensées pour moi-même\").  Marcus Aurelius est né dans une famille noble et a reçu une éducation soignée, où il a été exposé à la philosophie stoïcienne dès son plus jeune âge. Il a été adopté par l\'empereur Antonin le Pieux et a été élevé pour devenir son successeur. Après la mort d\'Antonin en 161, Marcus Aurelius est devenu empereur de l\'Empire romain.  Pendant son règne, Marcus Aurelius a été confronté à de nombreux défis, notamment des guerres aux frontières de l\'Empire, des révoltes internes et des épidémies. Malgré ces difficultés, il est resté fidèle aux principes stoïciens, prônant la modération, la sagesse et la vertu dans sa conduite politique et personnelle.  \"Méditations\", écrit pendant les campagnes militaires de Marcus Aurelius, est un recueil de pensées et de réflexions sur la vie, la morale et la philosophie stoïcienne. Dans cet ouvrage, il explore des thèmes tels que la nature de la réalité, la mort, la vertu et la gratitude.  Marcus Aurelius est souvent considéré comme l\'un des empereurs romains les plus sages et les plus vertueux. Son règne a été marqué par un profond respect pour la justice et la dignité humaine. Après sa mort, il a été vénéré comme un exemple de leadership éclairé et de sagesse philosophique.  \"Méditations\" est encore largement étudié et lu aujourd\'hui, et les idées de Marcus Aurelius continuent d\'influencer de nombreux penseurs et dirigeants à travers le monde. Il reste une figure emblématique de la philosophie stoïcienne et de la sagesse antique.', '121', '180', 'assets/img/marc_aurele.webp'),
(4, 'Pascal', 'Blaise', 'Blaise Pascal (1623-1662) était un mathématicien, physicien, inventeur, philosophe, moraliste et théologien français, célèbre pour ses travaux en sciences et sa \"Pensées\". Il est connu pour sa contribution au calcul des probabilités et à la géométrie projective, ainsi que pour ses écrits sur la religion et la philosophie.', 'Blaise Pascal était un mathématicien, physicien, inventeur, philosophe, écrivain et théologien français, né le 19 juin 1623 à Clermont-Ferrand et décédé le 19 août 1662 à Paris. Il est célèbre pour ses contributions remarquables dans de nombreux domaines de la science et de la pensée, ainsi que pour son influence durable sur la philosophie, la littérature et la théologie.  Pascal a grandi dans une famille aisée et éduquée. Son père était un juge local et un homme de science amateur, ce qui a probablement contribué à stimuler l\'intérêt de Pascal pour les mathématiques et la science dès son plus jeune âge. Il a montré un talent précoce pour les mathématiques et a fait des découvertes importantes dès son adolescence.  En mathématiques, Pascal est surtout connu pour avoir développé le triangle arithmétique, qui est maintenant connu sous le nom de \"triangle de Pascal\", ainsi que pour ses contributions à la théorie des probabilités, en particulier par le biais de ses célèbres \"Pensées sur la géométrie\" et \"Traité du triangle arithmétique\".  Outre ses réalisations en mathématiques et en physique, Pascal était également un penseur profondément religieux. Après une expérience mystique en 1654, connue sous le nom de \"conversion de nuit\", il se consacra à la théologie et à l\'écriture sur des sujets religieux. Son ouvrage le plus célèbre dans ce domaine est \"Les Pensées\", une collection fragmentaire de pensées sur la religion, la morale et la condition humaine, publiée de manière posthume.  Dans \"Les Pensées\", Pascal aborde des questions fondamentales telles que la nature de la foi, le doute, la grâce et le péché. Son célèbre \"pari de Pascal\", qui propose que croire en Dieu est une meilleure option que de ne pas croire, même en l\'absence de preuves rationnelles, est l\'un des arguments les plus discutés de la philosophie de la religion.  Blaise Pascal reste une figure emblématique de la pensée française et de la culture occidentale. Son travail dans les domaines des mathématiques, de la physique, de la philosophie et de la théologie continue d\'être étudié et admiré à ce jour, et son influence se fait sentir dans de nombreux domaines intellectuels et académiques.', '1623', '1662', 'assets/img/pascal.jfif'),
(5, 'Platon', 'Platon', 'Platon (427-348 av. J.-C.) était un philosophe grec antique, élève de Socrate et fondateur de l\'Académie d\'Athènes. Il est considéré comme l\'un des plus grands penseurs de l\'histoire occidentale et est célèbre pour ses dialogues philosophiques, tels que \"La République\" et \"Le Banquet\".', 'Platon était un philosophe grec antique, né autour de 427 av. J.-C. à Athènes et décédé vers 347 av. J.-C. dans la même ville. Il est l\'une des figures les plus importantes de la philosophie occidentale et a fondé l\'Académie, souvent considérée comme la première institution d\'enseignement supérieur en Europe.  Platon était originaire d\'une famille aristocratique et a été élève de Socrate, dont les idées et la méthode d\'enseignement ont eu une influence profonde sur son propre travail philosophique. Cependant, après la mort de Socrate, Platon a développé ses propres idées philosophiques distinctes, qui sont largement exposées dans ses dialogues écrits.  Les dialogues de Platon couvrent un large éventail de sujets, allant de la métaphysique à l\'éthique, en passant par la politique et l\'esthétique. Son œuvre la plus célèbre est peut-être \"La République\", où il explore des questions de justice, de gouvernement idéal et de nature de l\'âme humaine à travers une série de dialogues entre Socrate et divers interlocuteurs.  Platon a également développé sa célèbre théorie des Formes (ou Idées), selon laquelle les objets du monde sensible ne sont que des copies imparfaites des Formes éternelles et immuables, qui résident dans un monde transcendant. Cette théorie a eu une grande influence sur la pensée philosophique occidentale, et elle continue d\'être discutée et débattue à ce jour.  Outre ses idées philosophiques, Platon était également un écrivain talentueux et un conteur habile. Ses dialogues sont souvent narrés de manière vivante et dynamique, et ils ont été étudiés et appréciés pour leur style littéraire ainsi que pour leur contenu philosophique.  Platon a laissé un héritage durable dans la philosophie, la politique, la littérature et de nombreux autres domaines intellectuels. Son œuvre continue d\'être étudiée et discutée par les philosophes contemporains, et son influence se fait sentir à travers le monde entier.', '428', '348', 'assets/img/platon.jfif'),
(6, 'Aristote', 'Aristote', 'Aristote (384-322 av. J.-C.) était un philosophe grec antique, élève de Platon et précepteur d\'Alexandre le Grand. Il est connu pour ses contributions à de nombreux domaines, notamment la logique, la métaphysique et la politique. Son œuvre a eu une influence immense sur la philosophie occidentale.', ' Aristote était un philosophe grec antique, né en 384 av. J.-C. à Stagira, une ville de la Chalcidique, et décédé en 322 av. J.-C. à Eubée. Il est largement considéré comme l\'un des penseurs les plus influents de l\'histoire de la philosophie occidentale et est souvent qualifié de \"père de la philosophie occidentale\".  Aristote était un élève de Platon à l\'Académie, mais contrairement à son maître, il a adopté une approche plus empirique et scientifique de la philosophie. Après avoir quitté l\'Académie, Aristote a fondé sa propre école, le Lycée, où il a enseigné et mené des recherches pendant de nombreuses années.  Les contributions d\'Aristote à de nombreux domaines de la connaissance sont vastes et variées. En philosophie, il a écrit sur la logique, la métaphysique, l\'éthique, la politique, l\'esthétique, la physique, la biologie et de nombreux autres sujets. Ses œuvres, dont les \"Catégories\", \"Physique\", \"Métaphysique\", \"Éthique à Nicomaque\" et \"Politique\", sont des piliers de la philosophie occidentale.  Dans le domaine de la logique, Aristote a développé ce qui est souvent appelé la \"logique aristotélicienne\", qui est restée la base de la logique formelle pendant des siècles. Il a également élaboré sa théorie de la causalité, sa vision de la métaphysique et sa conception de la vertu et du bonheur dans ses œuvres éthiques.  En biologie, Aristote a entrepris des études approfondies sur les plantes et les animaux, et ses travaux dans ce domaine ont influencé le développement ultérieur de la biologie et des sciences naturelles. Il a également élaboré une théorie de la rhétorique dans son ouvrage \"Rhétorique\", qui est devenu un texte fondamental dans l\'étude de la persuasion et de l\'argumentation.  L\'héritage d\'Aristote dans la philosophie et dans de nombreux autres domaines de la connaissance est immense. Ses idées et ses méthodes de pensée continuent d\'être étudiées et discutées par les philosophes, les scientifiques et les intellectuels du monde entier, et son influence se fait encore sentir dans de nombreux domaines de la pensée contemporaine.', '-384', '-322av JC', 'assets/img/aristote.jfif'),
(7, 'Epictète', 'Benoît', 'Épictète (50-135) était un philosophe stoïcien d\'origine phrygienne, connu pour son \"Manuel\" qui enseigne une éthique de vie en accord avec la nature. Il est célèbre pour son enseignement sur le contrôle de soi, la résilience et la sagesse.', 'Benoît d\'Épictète, plus communément connu sous le nom d\'Épictète, était un philosophe stoïcien gréco-romain, né vers 50 de notre ère à Hiérapolis en Phrygie (aujourd\'hui Pamukkale en Turquie) et décédé vers 135 de notre ère. Il est surtout célèbre pour son enseignement de la philosophie stoïcienne, qui met l\'accent sur la sagesse pratique, la maîtrise de soi et l\'acceptation sereine des circonstances de la vie.  Épictète était originaire d\'une famille d\'esclaves, mais il a été affranchi et a étudié la philosophie stoïcienne sous la tutelle de Musonius Rufus, un autre philosophe stoïcien. Après avoir été libéré de l\'esclavage, Épictète a ouvert son propre école de philosophie à Nicopolis, en Grèce, où il a enseigné ses principes stoïciens à un large public.  La philosophie d\'Épictète mettait l\'accent sur la distinction entre ce qui dépend de nous (notre caractère, nos actions, nos valeurs) et ce qui ne dépend pas de nous (les circonstances externes, les événements imprévisibles). Il enseignait que le bonheur et la tranquillité d\'esprit peuvent être atteints en acceptant avec sérénité ce qui ne dépend pas de nous, et en cultivant la vertu et la maîtrise de soi dans nos actions.  Ses enseignements ont été recueillis et préservés par l\'un de ses élèves, Arrien, dans un ouvrage intitulé \"Les Entretiens\", qui est une collection de discours et de dialogues où Épictète exprime ses idées stoïciennes sur la morale, l\'éthique et la conduite de la vie quotidienne.  Épictète a eu une influence profonde sur de nombreux penseurs occidentaux, notamment les empereurs romains Marc Aurèle et Hadrien, ainsi que des figures plus contemporaines comme le philosophe américain Ralph Waldo Emerson. Son approche pratique de la philosophie et son insistance sur la responsabilité individuelle ont continué à inspirer des générations de personnes cherchant à vivre une vie plus équilibrée et plus vertueuse.', '50', '135', 'assets/img/epictete.jfif'),
(8, 'Spinoza', 'Baruch', 'Baruch Spinoza (1632-1677) était un philosophe néerlandais de la période post-médiévale, connu pour son ouvrage majeur \"Éthique\" et sa conception moniste de Dieu et de la nature. Il est souvent considéré comme l\'un des philosophes les plus importants de l\'ère moderne.', 'Baruch Spinoza était un philosophe néerlandais du XVIIe siècle, né le 24 novembre 1632 à Amsterdam et décédé le 21 février 1677 à La Haye. Il est largement reconnu comme l\'un des plus grands penseurs de l\'ère moderne et l\'un des premiers philosophes de l\'âge des Lumières.  Spinoza est né dans une famille juive portugaise émigrée aux Pays-Bas pour échapper à l\'Inquisition. Bien qu\'il ait reçu une éducation juive traditionnelle, il a été exposé aux idées de la Renaissance, du rationalisme et du cartésianisme à travers ses études et ses lectures.  Son œuvre majeure, \"Éthique démontrée selon la méthode géométrique\" (Ethica, ordine geometrico demonstrata), publiée de manière posthume en 1677, est considérée comme l\'un des traités philosophiques les plus importants de l\'histoire de la philosophie occidentale. Dans ce livre, Spinoza propose une métaphysique moniste, où Dieu et la nature sont identifiés comme une seule et même réalité. Il développe également une éthique basée sur la rationalité et la maîtrise de soi, soulignant l\'importance de la liberté et de la connaissance de soi dans la recherche du bonheur.  Spinoza a également écrit sur des sujets tels que la politique, la religion, la psychologie et la physique, explorant les implications de sa philosophie pour ces domaines. Ses idées ont souvent été controversées et ont provoqué des réactions vives de la part de ses contemporains, en particulier de la part des autorités religieuses.  En raison de ses idées radicales sur Dieu, la nature et la liberté, Spinoza a été excommunié de la communauté juive en 1656 et a vécu une vie relativement isolée, gagnant sa vie en tant que polisseur de lentilles optiques.  Bien que son travail n\'ait pas été largement reconnu de son vivant, l\'influence de Spinoza a commencé à croître au fil du temps. Ses idées ont influencé des penseurs majeurs tels que Hegel, Nietzsche, Freud et Einstein, et son statut en tant que l\'un des plus grands philosophes de tous les temps est largement accepté aujourd\'hui.', '1632', '1677', 'assets/img/spinoza.jpg'),
(9, 'Socrate', 'Socrate', 'Socrate (470-399 av. J.-C.) était un philosophe grec classique considéré comme l\'un des pères fondateurs de la philosophie occidentale. Il est célèbre pour sa méthode d\'enseignement basée sur le questionnement, connue sous le nom de \"méthode socratique\", qui encourageait la discussion et la réflexion.', 'Socrate était un philosophe grec classique né vers 470 av. J.-C. à Athènes et décédé en 399 av. J.-C. Il est largement considéré comme l\'une des figures les plus importantes de l\'histoire de la philosophie occidentale, bien que peu d\'informations biographiques fiables sur sa vie existent.  Socrate n\'a pas laissé d\'écrits personnels, mais son influence sur la pensée occidentale est immense, en grande partie grâce à ses disciples, en particulier Platon, qui a immortalisé Socrate dans ses dialogues. Dans ces dialogues, Socrate est souvent représenté comme un maître de la dialectique, posant des questions perspicaces pour encourager ses interlocuteurs à examiner leurs croyances et leurs idées.  Socrate a consacré sa vie à la recherche de la vérité et à l\'exploration des questions fondamentales de la vie, de la morale, de la politique et de la connaissance. Il était célèbre pour sa méthode d\'enseignement, connue sous le nom de maïeutique, qui consistait à poser des questions pour aider les autres à découvrir la vérité par eux-mêmes.  Socrate était également un critique féroce de l\'ignorance et de l\'arrogance intellectuelle. Il croyait que la sagesse consistait à reconnaître l\'étendue de son ignorance et à être ouvert à l\'apprentissage constant. Cette attitude humble et la recherche inlassable de la vérité ont inspiré de nombreux penseurs ultérieurs.  Malheureusement, la carrière de Socrate a été interrompue tragiquement par sa condamnation à mort en 399 av. J.-C. pour impiété et corruption de la jeunesse. Il a été contraint de boire de la ciguë, un poison mortel, mais même dans sa mort, Socrate est resté fidèle à ses principes, refusant de fuir Athènes malgré les opportunités qui lui étaient offertes.  La mort de Socrate a marqué le début de sa légende et a renforcé sa réputation en tant que martyr de la philosophie. Son influence continue de se faire sentir à travers les siècles, et il reste l\'un des penseurs les plus étudiés et les plus discutés de tous les temps.', '-470', '-399av JC', 'assets/img/socrate.jpg'),
(10, 'Descartes', 'René', 'René Descartes (1596-1650) était un philosophe, mathématicien et scientifique français du 17ème siècle, considéré comme l\'un des pères fondateurs de la philosophie moderne et de la rationalisme. Il est célèbre pour sa phrase \"Cogito, ergo sum\" (\"Je pense, donc je suis\") et sa méthode de doute cartésien.', 'René Descartes était un philosophe, mathématicien et scientifique français, né le 31 mars 1596 à La Haye en Touraine (aujourd\'hui Descartes, en Indre-et-Loire) et décédé le 11 février 1650 à Stockholm, en Suède. Il est souvent considéré comme le père de la philosophie moderne et l\'une des figures les plus influentes de l\'histoire de la pensée occidentale.  Descartes est célèbre pour avoir fondé le rationalisme moderne et pour son célèbre dictum \"Cogito, ergo sum\" (Je pense, donc je suis), qui est devenu un principe fondamental de la philosophie occidentale. Sa méthode philosophique, connue sous le nom de méthode cartésienne, repose sur le doute méthodique, où il remet en question toutes les croyances et connaissances préalables afin de parvenir à des vérités indubitables.  Dans son œuvre majeure, \"Méditations métaphysiques\" (1641), Descartes entreprend une quête pour atteindre des certitudes absolues en se fondant sur la seule raison. Il cherche à établir une base solide pour la connaissance en partant de propositions indubitables, telles que l\'existence de soi-même et de Dieu, sur lesquelles il peut construire un système philosophique cohérent.  Descartes a également apporté des contributions importantes aux mathématiques et à la science. Il est souvent considéré comme le fondateur de la géométrie analytique, qui utilise des méthodes algébriques pour résoudre des problèmes géométriques, et ses travaux en optique ont jeté les bases de la théorie des lentilles et de la réfraction de la lumière.  Son influence s\'étend également à d\'autres domaines, notamment la physique, la médecine et la philosophie de l\'esprit. Descartes a proposé une vision du monde dominée par des lois mathématiques et mécaniques, où les phénomènes naturels peuvent être expliqués à l\'aide de principes rationnels.  Bien que ses idées aient été critiquées et contestées par certains de ses contemporains, l\'héritage de Descartes dans la philosophie et la science occidentales est immense. Son approche rationnelle et méthodique de la connaissance a ouvert la voie à de nouvelles formes de pensée et a profondément influencé la façon dont nous comprenons le monde et nous-mêmes.', '1596', '1650', 'assets/img/descartes.jpg'),
(11, 'Kant', 'Immanuel', 'Immanuel Kant (1724-1804) était un philosophe allemand de l\'ère des Lumières, célèbre pour ses contributions à la métaphysique, à l\'épistémologie et à la philosophie morale, notamment avec son ouvrage \"Critique de la raison pure\".', ' Immanuel Kant était un philosophe allemand du XVIIIe siècle, né le 22 avril 1724 à Königsberg, en Prusse (aujourd\'hui Kaliningrad, en Russie), et décédé le 12 février 1804 dans la même ville. Il est largement considéré comme l\'un des penseurs les plus influents de la philosophie moderne et l\'un des principaux représentants de l\'idéalisme allemand.  Kant est surtout connu pour son œuvre majeure, la \"Critique de la raison pure\" (1781), dans laquelle il entreprend une enquête approfondie sur la nature et les limites de la connaissance humaine. Dans ce livre, Kant cherche à résoudre le conflit entre le rationalisme, qui soutient que la connaissance provient de la raison seule, et l\'empirisme, qui soutient que la connaissance provient de l\'expérience sensorielle.  Kant propose une troisième voie, en affirmant que la connaissance repose à la fois sur des éléments a priori de l\'esprit humain (comme les formes de l\'intuition et les catégories de la pensée) et sur l\'expérience sensible. Il distingue entre le phénomène (ce qui est donné à l\'expérience sensible) et le noumène (ce qui est posé par la raison mais qui ne peut pas être connu empiriquement), et il soutient que la connaissance est limitée aux phénomènes.  Outre la \"Critique de la raison pure\", Kant a également écrit d\'autres œuvres importantes, notamment la \"Critique de la faculté de juger\" (1790), la \"Critique de la raison pratique\" (1788) et la \"Critique de la raison pure\" (1797). Ses travaux portent sur des sujets variés, tels que l\'éthique, la métaphysique, la philosophie de l\'histoire et la philosophie de la religion.  L\'héritage philosophique de Kant est immense. Ses idées ont eu une influence profonde sur de nombreux domaines de la pensée, notamment la philosophie, la science, la politique, l\'art et la culture. Son approche systématique de la philosophie et son engagement en faveur de la liberté et de la raison ont inspiré des générations de penseurs et continuent de susciter un vif intérêt aujourd\'hui.', '1724', '1804', 'assets/img/kant.jpg'),
(12, 'Rousseau', 'Jean-Jacques', 'Jean-Jacques Rousseau (1712-1778) était un philosophe, écrivain et compositeur genevois du 18ème siècle, célèbre pour ses idées sur la démocratie directe et ses écrits politiques comme \"Le Contrat social\".', ' Jean-Jacques Rousseau était un philosophe, écrivain et compositeur suisse-français du XVIIIe siècle, né le 28 juin 1712 à Genève et décédé le 2 juillet 1778 à Ermenonville, en France. Il est l\'une des figures les plus importantes du mouvement des Lumières et a eu une influence profonde sur la philosophie politique, la littérature et l\'éducation.  Rousseau est surtout connu pour son œuvre majeure, \"Du Contrat social\" (1762), dans laquelle il développe sa théorie politique sur la souveraineté populaire et le contrat social. Il soutient que le gouvernement doit être basé sur le consentement volontaire des citoyens et que la liberté individuelle doit être préservée autant que possible dans la société.  Dans son traité \"Émile, ou De l\'éducation\" (1762), Rousseau développe ses idées sur l\'éducation et le développement de l\'individu. Il préconise une approche éducative qui respecte la nature et le développement naturel de l\'enfant, mettant l\'accent sur l\'importance de l\'autonomie, de l\'expérience directe et de l\'interaction avec la nature.  Une des aspects les plus controversés de la vie de Rousseau est son abandon de ses cinq enfants. En 1762, il a confié ses enfants à un orphelinat, arguant qu\'il était incapable de les élever correctement en raison de son mode de vie instable et de sa situation financière précaire. Cette décision a suscité beaucoup de critiques à l\'époque et continue de faire l\'objet de débats et de controverses aujourd\'hui.  Malgré cet aspect controversé de sa vie personnelle, l\'héritage philosophique et littéraire de Rousseau reste immense. Ses idées sur la liberté, l\'égalité, l\'éducation et la nature ont profondément influencé la pensée politique et sociale occidentale et ont inspiré des mouvements tels que le romantisme, le féminisme et le mouvement écologiste.', '1712', '1778', 'assets/img/rousseau.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `auteur_nationnalité`
--

DROP TABLE IF EXISTS `auteur_nationnalité`;
CREATE TABLE IF NOT EXISTS `auteur_nationnalité` (
  `id_auteur` int NOT NULL,
  `id_nationalité` int NOT NULL,
  PRIMARY KEY (`id_auteur`,`id_nationalité`),
  KEY `id_nationalité` (`id_nationalité`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `auteur_nationnalité`
--

INSERT INTO `auteur_nationnalité` (`id_auteur`, `id_nationalité`) VALUES
(1, 1),
(2, 1),
(8, 1),
(11, 1),
(3, 2),
(4, 3),
(10, 3),
(12, 3),
(5, 4),
(6, 4),
(7, 4),
(9, 4);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
(1, 'Philosophie'),
(2, 'Littérature');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_citation`
--

DROP TABLE IF EXISTS `categorie_citation`;
CREATE TABLE IF NOT EXISTS `categorie_citation` (
  `id_citations` int NOT NULL,
  `id_categorie` int NOT NULL,
  PRIMARY KEY (`id_citations`,`id_categorie`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie_citation`
--

INSERT INTO `categorie_citation` (`id_citations`, `id_categorie`) VALUES
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1);

-- --------------------------------------------------------

--
-- Structure de la table `citations`
--

DROP TABLE IF EXISTS `citations`;
CREATE TABLE IF NOT EXISTS `citations` (
  `id_citations` int NOT NULL AUTO_INCREMENT,
  `citation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `explication` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `année` date DEFAULT NULL,
  `id_auteur` int DEFAULT NULL,
  PRIMARY KEY (`id_citations`),
  KEY `id_auteur` (`id_auteur`)
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `citations`
--

INSERT INTO `citations` (`id_citations`, `citation`, `explication`, `année`, `id_auteur`) VALUES
(41, 'Ce qui ne me tue pas me rend plus fort.', ' Cette phrase, souvent attribuée à Friedrich Nietzsche, exprime l\'idée que les épreuves et les difficultés que nous rencontrons dans la vie ont le potentiel de renforcer notre résilience et notre caractère.', '1889-01-01', 1),
(42, 'Dieu est mort.', ' Nietzsche a introduit cette idée dans sa philosophie pour symboliser la fin de la croyance traditionnelle en Dieu et l\'émergence d\'une ère où les valeurs et les normes ne sont plus dictées par la religion.', '1882-01-01', 1),
(43, 'Devient ce que tu es.', 'Cette citation de Nietzsche incite à l\'auto-découverte et à l\'authenticité, suggérant que l\'épanouissement personnel découle de la réalisation de notre nature profonde plutôt que de l\'imitation des autres.', '1883-01-01', 1),
(44, 'L\'homme est quelque chose qui doit être dépassé.', ' Nietzsche propose ici l\'idée que l\'humanité doit progresser au-delà de sa condition actuelle en développant de nouveaux modes de pensée et de comportement.', '1886-01-01', 1),
(45, 'La vie est une affaire trop sérieuse pour être confiée à des adultes.', 'Cette phrase, souvent attribuée à George Bernard Shaw, suggère que les adultes ont tendance à traiter la vie de manière trop sérieuse et qu\'il est important de conserver une certaine dose d\'innocence et de spontanéité.', '1846-01-01', 2),
(46, 'Le bonheur n\'est pas chose aisée : il est très difficile de le trouver en nous, il est impossible de le trouver ailleurs.', ' Cette citation met en lumière l\'idée que le bonheur authentique ne peut être trouvé ni dans les possessions matérielles ni dans les circonstances extérieures, mais plutôt à l\'intérieur de nous-mêmes.', '1851-01-01', 2),
(47, 'La vie est une longue préparation à être un jour un homme vraiment utile.', 'Cette phrase souligne l\'idée que la vie est un processus d\'apprentissage et de croissance qui nous prépare à être des individus contribuant positivement à la société.', '1851-01-01', 2),
(48, 'La vie est une lutte et une marche.', ' Cette phrase suggère que la vie est à la fois un défi constant et un voyage, où nous devons faire face à des obstacles tout en progressant vers nos objectifs.', '0180-03-17', 3),
(49, 'Ne te laisse pas emporter par le passé, ne te laisse pas distraire par l\'avenir ; concentre ton esprit sur le moment présent.', 'Cette citation, souvent attribuée au Bouddha, met en avant l\'importance de la pleine conscience et de la focalisation sur le présent pour trouver la paix intérieure et la clarté mentale.', NULL, 3),
(50, 'Tout est éphémère - ce qui utilise bien le temps est éternel.', 'Cette phrase souligne la nature transitoire de la vie et met en avant l\'importance d\'utiliser judicieusement notre temps pour des actions significatives qui peuvent avoir un impact durable.', NULL, 3),
(51, 'Le silence éternel de ces espaces infinis m\'effraie.', 'Cette phrase, souvent attribuée à Blaise Pascal, exprime le sentiment d\'angoisse ou d\'admiration devant l\'immensité de l\'univers et le silence qui l\'accompagne, renforçant le sentiment de notre propre insignifiance.', NULL, 4),
(52, 'Le cœur a ses raisons que la raison ne connaît point.', 'Cette célèbre phrase de Blaise Pascal souligne le pouvoir de l\'émotion et de l\'intuition sur la raison pure, mettant en avant la complexité de la nature humaine.', NULL, 4),
(53, 'L\'homme n\'est qu\'\'un roseau, le plus faible de la nature, mais c\'est un roseau pensant.', ' Cette citation de Pascal présente l\'homme comme une créature fragile et vulnérable, mais dotée de la capacité de raisonner et de penser, ce qui le distingue des autres êtres vivants.', NULL, 4),
(54, 'Connais-toi toi-même.', ' Cette phrase, attribuée à Socrate, souligne l\'importance de l\'auto-connaissance dans la quête de sagesse et d\'épanouissement personnel. Comprendre ses propres forces, faiblesses, désirs et motivations est crucial pour une vie équilibrée et épanouissante.', NULL, 9),
(55, 'Je pense, donc je suis.', ' Cette célèbre phrase, également connue sous sa forme latine \"Cogito, ergo sum\", est une assertion fondamentale de René Descartes. Elle exprime la certitude de l\'existence du sujet pensant, affirmant que la capacité de penser prouve l\'existence de l\'individu lui-même.', '1637-01-01', 10),
(56, 'Agis de telle sorte que la maxime de ton action puisse être érigée en loi universelle.', ' Cette phrase, souvent associée à l\'éthique de Kant, souligne l\'importance de l\'universalité dans nos actions morales. Elle encourage à agir selon des principes qui pourraient être acceptés par tous dans toutes les situations similaires.', NULL, 11),
(57, 'L\'homme est né libre, et partout il est dans les fers.', 'Cette phrase de Jean-Jacques Rousseau met en avant l\'idée que l\'homme naît naturellement libre, mais que la société et ses institutions créent des limitations et des contraintes qui restreignent cette liberté.', '1762-01-01', 12),
(58, 'La raison est la seule chose qui rend l\'homme libre.', 'Cette citation met en avant la capacité de la raison à émanciper l\'individu des préjugés, des passions et des contraintes externes. Elle souligne que la véritable liberté découle de la capacité de penser de manière autonome et critique.', NULL, 11),
(59, 'Le doute est le commencement de la sagesse.', ' Cette citation souligne l\'importance de l\'esprit critique et de la remise en question dans la recherche de la vérité et de la sagesse. Elle met en avant l\'idée que remettre en question ses propres convictions et croyances est le point de départ de tout apprentissage authentique.', NULL, 12),
(60, 'L\'éducation consiste à apprendre à se passer des choses superflues.', 'Cette phrase souligne l\'importance de la simplicité et de la modération dans l\'éducation. Elle met en avant l\'idée que l\'éducation véritable consiste à développer des compétences essentielles et à cultiver des valeurs fondamentales, plutôt que de rechercher des possessions matérielles.', NULL, 12),
(61, 'La vie sans musique est tout simplement une erreur, une fatigue, un exil.', ' Cette phrase évoque l\'importance de la musique comme source d\'inspiration, de connexion émotionnelle et de beauté dans nos vies.', '1889-01-01', 1),
(62, 'Quand on regarde longtemps dans un abîme, l\'abîme regarde aussi dans l\'âme.', 'Cette citation souligne la manière dont les expériences profondes et les confrontations avec les aspects sombres de la réalité peuvent influencer notre être intérieur.', '1886-01-01', 1),
(63, 'Le monde est profond - et plus haut que dans le jour peut comprendre votre sagesse.', ' Nietzsche suggère ici que la vérité et la réalité sont complexes et dépassent souvent la compréhension rationnelle humaine.', '1883-01-01', 1),
(64, 'L\'homme est une corde, tendue entre la bête et le surhomme - une corde au-dessus d\'un abîme.', ' Cette métaphore décrit la condition humaine comme un équilibre fragile entre nos instincts primaires et notre potentiel pour l\'évolution vers un état supérieur.', '1883-01-01', 1),
(65, 'Il y a toujours un peu de folie dans l\'amour, mais il y a toujours un peu de raison dans la folie.', 'Cette phrase exprime la dualité de l\'amour, qui peut être à la fois irrationnel et passionné, mais également fondé sur une certaine logique émotionnelle.', '1887-01-01', 1),
(66, 'Ce qui est fait par amour est bien fait, même si ce n\'est pas bien fait.', ' Cette citation souligne que l\'intention derrière une action, plutôt que son résultat, est ce qui détermine sa valeur, particulièrement lorsqu\'il s\'agit d\'actions motivées par l\'amour.', '1887-01-01', 1),
(67, 'Je ne sais pas ce que l\'avenir nous réserve, mais je sais que je ne veux pas devenir ce que les autres attendent de moi.', 'Cette phrase encourage à suivre son propre chemin et à rester fidèle à soi-même plutôt que de se conformer aux attentes extérieures.', '1886-01-01', 1),
(68, 'La morale est la meilleure des alliées des impuissants.', ' Cette citation suggère que dans des situations de faiblesse ou de vulnérabilité, le respect des valeurs morales peut être une source de force et de dignité.', '1886-01-01', 1),
(69, 'Toute grande pensée est intuitive.', 'Nietzsche avance ici l\'idée que les grandes idées ne découlent pas seulement de la raison et de la logique, mais aussi de l\'intuition et de l\'inspiration créatrice.', '1885-01-01', 1),
(70, 'Celui qui combat les monstres doit prendre garde de ne pas devenir lui-même un monstre.', 'Cette phrase met en garde contre le risque de perdre sa propre humanité lorsqu\'on lutte contre le mal, soulignant la nécessité de maintenir son intégrité morale.', '1886-01-01', 1),
(71, 'La vie est une longue préparation à de bonnes-byes.', 'Cette citation exprime l\'idée que la vie est un voyage où les séparations et les adieux font partie intégrante de l\'expérience humaine.', '1851-01-01', 2),
(72, 'Le bonheur est une illusion, le malheur est une illusion.', ' Cette phrase met en avant l\'idée que tant le bonheur que le malheur sont des constructions mentales, et que notre perception de ces états est souvent influencée par nos pensées et nos attitudes.', '1819-01-01', 2),
(73, 'La santé est pas tout, mais sans santé, tout le reste est rien.', 'Cette citation de Schopenhauer souligne l\'importance de la santé comme fondement de notre bien-être et de notre capacité à profiter de la vie.', '1819-01-01', 2),
(74, 'L\'intelligence est le seul élément qui fait la différence entre l\'homme et l\'animal.', 'Cette phrase met en avant la capacité de l\'intelligence humaine à nous distinguer des autres espèces animales.', '1819-01-01', 2),
(75, 'La vie est un mal à supporter ou un bien à perdre.', ' Cette citation, présente la vie comme une expérience ambivalente, pouvant être à la fois une source de souffrance et une opportunité précieuse.', '1819-01-01', 2),
(76, 'La plupart des hommes, dans l’action comme dans la pensée, se laissent guider par l’exemple d’autrui et par l’imitation.', 'Cette phrase souligne la tendance humaine à suivre les modèles et les normes établies par les autres, plutôt que de développer leur propre indépendance de pensée et d\'action.', '1819-01-01', 2),
(77, 'La solitude est l\'aspect le plus terrible de la vie humaine.', 'Cette citation de Pascal met en avant le caractère angoissant de la solitude et le besoin inné de connexion sociale chez les êtres humains.', '1819-01-01', 2),
(78, 'La vie est une tâche qui doit être accomplie.', ' Cette phrase souligne le caractère actif de l\'existence humaine, présentant la vie comme un devoir ou une mission à remplir.', '1819-01-01', 2),
(79, 'La solitude est la destinée de tout grand esprit.', 'Cette citation de Schopenhauer suggère que les individus exceptionnellement talentueux ou créatifs sont souvent confrontés à la solitude en raison de leur vision unique du monde.', '1819-01-01', 2),
(80, 'La philosophie ne repose pas sur les lois de la nature, mais sur l\'intuition.', ' Cette phrase met en avant l\'importance de l\'intuition et de la réflexion philosophique dans la compréhension de la réalité, suggérant que la philosophie transcende les limites de la science empirique.', '1819-01-01', 2),
(81, 'N\'attendez pas que la vie soit juste, selon vous. Acceptez-la telle qu\'elle est.', 'Cette citation encourage à adopter une attitude d\'acceptation et de résilience face aux défis et aux injustices de la vie, plutôt que d\'attendre des circonstances idéales.', '0180-01-01', 3),
(82, 'La vraie grandeur consiste à être ce que vous êtes. Ne prétendez pas être autre chose que ce que vous êtes.', 'Cette phrase souligne l\'importance de l\'authenticité et de l\'acceptation de soi dans la recherche de la grandeur personnelle.', '0180-01-01', 3),
(83, 'L\'obstacle est le chemin.', 'Cette citation, souvent attribuée à Marc Aurèle, suggère que les défis et les difficultés que nous rencontrons dans la vie ne sont pas des obstacles à contourner, mais des opportunités de croissance et d\'apprentissage.', '0180-01-01', 3),
(84, 'Choisissez non pas de vivre longtemps, mais de vivre pleinement.', 'Cette phrase met l\'accent sur la qualité plutôt que sur la quantité de vie, en encourageant à vivre de manière significative et enrichissante plutôt que simplement à prolonger la durée de vie.', '0180-01-01', 3),
(85, 'Ne vous laissez pas emporter par votre imagination, ne vous laissez pas emporter non plus par votre raison.', 'Cette citation suggère l\'importance de trouver un équilibre entre imagination et rationalité, en évitant les excès dans l\'une ou l\'autre.', '0180-01-01', 3),
(86, 'La vertu est la seule chose qui ne puisse être retirée de nous.', 'Cette phrase souligne que la vertu, ou la moralité, est une qualité intrinsèque à l\'individu et ne peut être enlevée par des circonstances extérieures.', '0180-01-01', 3),
(87, 'Si tu es distrait, chaque objet te fera du mal.', 'Cette citation souligne l\'importance de la concentration et de la clarté d\'esprit pour éviter d\'être perturbé ou blessé par les distractions de la vie.', '0180-01-01', 3),
(88, 'L\'âme devient teinte de la couleur de ses pensées.', 'Cette phrase suggère que nos pensées et nos attitudes façonnent notre être intérieur et influencent notre perception du monde qui nous entoure.', '0180-01-01', 3),
(89, 'Si vous vivez au jour le jour, vous pouvez lutter contre le désespoir et la crainte.', 'Cette citation met en avant l\'idée que vivre dans le présent et se concentrer sur les défis immédiats peut aider à surmonter les sentiments de désespoir et d\'anxiété concernant le futur.', '0180-01-01', 3),
(90, 'Ne pas céder à la colère, c\'est une grande force.', ' Cette phrase souligne la force intérieure et le contrôle de soi nécessaires pour surmonter la colère et agir avec calme et sagesse dans les situations difficiles.', '0180-01-01', 3),
(91, 'L\'homme n\'est qu\'un roseau, le plus faible de la nature; mais c\'est un roseau pensant.', 'Cette citation de Pascal présente l\'homme comme une créature fragile et vulnérable, mais dotée de la capacité de raisonner et de penser, ce qui le distingue des autres êtres vivants.', '1654-01-01', 4),
(92, 'Le cœur a ses raisons, que la raison ne connaît point.', '', '1670-01-01', 4),
(93, 'La vraie éloquence consiste à dire tout ce qu\'il faut, et à ne dire que ce qu\'il faut.', 'Cette phrase souligne l\'importance de la précision et de la concision dans l\'expression, mettant en avant la qualité de la communication plutôt que la quantité de mots utilisés.', '1654-01-01', 4),
(94, 'Tout le malheur des hommes vient d\'une seule chose, qui est de ne pas savoir demeurer en repos, dans une chambre.', ' Cette citation de Blaise Pascal met en évidence le besoin de calme et de réflexion dans la vie humaine, soulignant que beaucoup de nos souffrances proviennent de notre incapacité à être seuls avec nous-mêmes.', '1654-01-01', 4),
(95, 'L\'homme passe infiniment l\'homme.', ' Cette phrase, souvent attribuée à Blaise Pascal, souligne la complexité et la profondeur de la nature humaine, suggérant que l\'homme est un être énigmatique qui dépasse toute compréhension complète.', '1654-01-01', 4),
(96, 'La justice sans la force est impuissante; la force sans la justice est tyrannique.', 'Cette citation de Blaise Pascal met en avant l\'idée que la justice et la force doivent aller de pair pour être efficaces, soulignant l\'importance de l\'équilibre entre les deux dans toute société juste.', '1654-01-01', 4),
(97, 'La coutume est une seconde nature, qui détruit la première. Mais ce que nous appelons hasard est peut-être la raison suprême, laquelle ordonne tout secrètement.', 'Cette phrase met en avant le concept de l\'influence de l\'habitude sur nos comportements et nos perceptions, tout en suggérant que ce que nous percevons comme le hasard peut en fait être le résultat d\'une intelligence supérieure.', '1654-01-01', 4),
(98, 'Le moi est haïssable.', 'Cette citation de Blaise Pascal exprime l\'idée que l\'ego ou le narcissisme peut conduire à des comportements égoïstes ou destructeurs, et que la véritable sagesse réside dans l\'abandon de l\'attachement à soi-même.', '1654-01-01', 4),
(99, 'Tout le malheur des hommes vient d\'une seule chose, qui est de ne pas savoir demeurer en repos, dans une chambre.', '', '1654-01-01', 4),
(100, 'Rien ne nous révolte plus que de voir et d\'entendre un homme qui se flatte de n\'avoir point d\'autre talent que celui de bien vivre.', 'Cette phrase critique ceux qui se vantent de vivre une vie superficielle et insouciante, soulignant l\'importance de la poursuite de la réalisation de soi et de la contribution à la société.', '1654-01-01', 4),
(101, 'La plus grande des gloires n\'est pas de ne jamais tomber, mais de se relever à chaque chute.', 'Cette phrase souligne l\'importance de la résilience et de la persévérance face aux épreuves de la vie, mettant en avant le courage et la force intérieure nécessaires pour surmonter les obstacles.', '0000-00-00', 5),
(102, 'L\'ignorant affirme, le savant doute, le sage réfléchit.', 'Cette phrase met en avant la progression de la connaissance, soulignant que l\'ignorance conduit à l\'assertivité, tandis que le savoir conduit à la remise en question, et enfin, que la sagesse provient de la réflexion approfondie et de la contemplation.', '0000-00-00', 5),
(103, 'L\'homme est la mesure de toute chose.', 'Cette citation de Protagoras souligne l\'idée que la perception de la réalité est subjective et dépendante de l\'individu, mettant en avant le rôle central de l\'homme dans l\'évaluation et la compréhension du monde.', '0000-00-00', 5),
(104, 'La démocratie conduit inévitablement à une forme de démagogie puis à l\'anarchie.', 'Cette phrase suggère une vision critique de la démocratie, mettant en avant le risque de dérive vers des formes de manipulation et de désordre lorsque les principes démocratiques ne sont pas correctement protégés ou appliqués.', '0000-00-00', 5),
(105, 'Rien ne résiste à la force de l\'habitude.', ' Cette citation de Juvénal souligne le pouvoir de l\'habitude dans la vie humaine, mettant en avant la capacité de la routine à influencer nos comportements et nos attitudes de manière significative.', '0000-00-00', 5),
(106, 'La pire des tyrannies est celle qui se pare des habits de la liberté.', ' Cette phrase critique les régimes autoritaires qui utilisent le langage de la liberté pour justifier leur oppression, soulignant le danger de la manipulation idéologique dans la restriction des droits fondamentaux.', '0000-00-00', 5),
(107, 'L\'homme, quand il est jeune, doit éduquer son âme ; lorsqu\'il est vieux, il doit s\'appliquer à la nourrir.', ' Cette citation souligne l\'importance du développement spirituel tout au long de la vie, mettant en avant le besoin de croissance et de maturation intérieure à chaque étape du parcours humain.', '0000-00-00', 5),
(108, 'Le plus grand bien que vous puissiez faire à un enfant est de l\'exercer à s\'habituer à supporter des choses difficiles.', 'Cette phrase met en avant l\'importance de l\'apprentissage de la résilience et de la capacité à faire face aux défis dès le plus jeune âge, soulignant que surmonter l\'adversité est une compétence précieuse pour la vie.', '0000-00-00', 5),
(109, 'La vérité est le chemin vers la liberté.', 'Cette citation de Gandhi souligne l\'importance de la vérité dans la lutte pour la liberté et la justice, mettant en avant le lien indissociable entre la transparence et l\'autonomie individuelle.', '0000-00-00', 5),
(110, 'Le commencement est la partie la plus importante du travail.', 'Cette phrase souligne l\'importance de la planification et de la préparation dans la réalisation de tout projet ou entreprise, mettant en avant l\'impact décisif des premières étapes sur la réussite globale.', '0000-00-00', 5),
(111, 'La vertu est une disposition à agir selon la raison.', ' Cette phrase met en avant l\'idée que la vertu réside dans la capacité à agir de manière conforme à la raison et à la moralité, soulignant l\'importance de la réflexion et de la prise de décision éthique.', '0000-00-00', 6),
(112, 'La colère est une courte folie.', ' Cette citation de Horace souligne le caractère irrationnel et destructeur de la colère, mettant en garde contre les conséquences néfastes d\'une émotion incontrôlée.', '0000-00-00', 6),
(113, 'La différence entre l\'impossible et le possible réside dans la détermination.', 'Cette phrase met en avant le pouvoir de la volonté et de la persévérance dans la réalisation des objectifs, soulignant que la détermination peut transformer l\'impossible en possible.', '0000-00-00', 6),
(114, 'La nature n\'a rien créé de superflu.', 'Cette citation met en avant l\'idée que chaque élément de la nature a sa propre utilité et sa propre raison d\'être, soulignant l\'harmonie et l\'efficacité de l\'univers.', '0000-00-00', 6),
(115, 'L\'éducation est l\'ornement dans la prospérité et un refuge dans l\'adversité.', 'Cette citation de Léonard de Vinci met en avant l\'idée que chaque élément de la nature a sa propre utilité et sa propre raison d\'être, soulignant l\'harmonie et l\'efficacité de l\'univers.', '0000-00-00', 6),
(116, 'La sagesse est la connaissance des causes.', 'Cette citation de Aristote souligne l\'idée que la sagesse réside dans la compréhension profonde des origines et des fondements des choses, mettant en avant la capacité à discerner les raisons sous-jacentes des événements et des phénomènes.', '0000-00-00', 6),
(117, 'La musique adoucit les mœurs.', 'Cette phrase célèbre souligne le pouvoir de la musique à apaiser les émotions et à favoriser la compréhension mutuelle entre les individus, mettant en avant son rôle dans la promotion de la paix et de l\'harmonie sociale.', '0000-00-00', 6),
(118, 'La critique est facile, mais l\'art est difficile.', 'Cette citation met en avant la difficulté de créer et d\'exprimer des œuvres artistiques de qualité, soulignant que la critique est souvent simpliste en comparaison du travail artistique lui-même.', '0000-00-00', 6),
(119, 'La connaissance de soi-même est le commencement de toute sagesse.', 'Cette phrase souligne l\'importance de la réflexion et de l\'introspection dans le développement personnel, mettant en avant le rôle fondamental de la connaissance de soi dans l\'acquisition de la sagesse.', '0000-00-00', 6),
(120, 'Le bonheur dépend de l\'âme.', 'Cette citation de Aristote souligne l\'idée que le bonheur véritable découle de l\'état de l\'âme et de ses attitudes intérieures, mettant en avant l\'importance de la paix intérieure et de la satisfaction personnelle pour trouver le bonheur durable.', '0000-00-00', 6),
(121, 'Le bonheur est une disposition de l\'âme, et non une condition extérieure.', ' Cette phrase met en avant l\'idée que le bonheur véritable découle de l\'état intérieur de l\'individu et de ses attitudes mentales, plutôt que des circonstances externes.', '0000-00-00', 7),
(122, 'Ce qui trouble les hommes, ce ne sont pas les choses, mais les jugements qu\'ils portent sur les choses.', ' Cette citation souligne que ce n\'est pas tant les événements eux-mêmes qui perturbent les gens, mais plutôt leur interprétation subjective de ces événements.', '0000-00-00', 7),
(123, 'Ne cherche pas à ce que les événements arrivent comme tu le veux, mais veuille que les événements arrivent comme ils arrivent, et tu seras heureux.', ' Cette phrase encourage à accepter les événements tels qu\'ils surviennent, sans résistance ni attachement excessif à un résultat particulier, soulignant que la vraie liberté réside dans l\'acceptation et l\'adaptation.', '0000-00-00', 7),
(124, 'Ce qui dépend de nous et ce qui ne dépend pas de nous, ce qui est à nous et ce qui n\'est pas à nous.', ' Cette phrase met en avant la distinction entre ce que nous pouvons contrôler (nos pensées, nos attitudes) et ce qui échappe à notre contrôle (les événements externes), soulignant l\'importance de concentrer notre énergie sur ce que nous pouvons influencer.', '0000-00-00', 7),
(125, 'Ce qui t\'appartient, c\'est la maîtrise de la volonté; ne cherche donc pas à vouloir ce qui ne dépend pas de toi.', ' Cette citation souligne que notre pouvoir réside dans notre capacité à contrôler nos propres actions et décisions, plutôt que dans la manipulation des circonstances extérieures.', '0000-00-00', 7),
(126, 'La plus grande liberté, c\'est de ne pas être esclave de soi-même.', 'Cette phrase souligne que la véritable liberté réside dans la capacité à surmonter nos propres désirs et impulsions, mettant en avant l\'importance de la maîtrise de soi dans la quête de la liberté intérieure.', '0000-00-00', 7),
(127, 'Se libérer de toutes les passions, c\'est s\'affranchir de toutes les servitudes.', 'Cette citation souligne que le fait de transcender nos désirs et émotions nous libère des contraintes et des limitations imposées par nos impulsions, nous permettant ainsi de vivre avec plus de sérénité et de liberté.', '0000-00-00', 7),
(128, 'Ce qui trouble les hommes, ce ne sont pas les choses, mais les jugements qu\'ils portent sur les choses.', '', '0000-00-00', 7),
(129, 'Il n\'y a pas de malheur dans le monde, il n\'y a que des opinions sur le malheur.', 'Cette phrase met en avant l\'idée que la perception de la réalité est subjective, soulignant que notre interprétation des événements détermine notre expérience du bonheur ou du malheur.', '0000-00-00', 7),
(130, 'Ne dis pas que les choses sont mauvaises parce qu\'elles te sont désagréables.', 'Cette citation souligne l\'importance de ne pas juger les événements en fonction de nos préférences personnelles ou de nos désirs, soulignant que notre perception des choses peut être influencée par nos propres attachements et aversions.', '0000-00-00', 7),
(131, 'L\'homme n\'est pas un empire dans un empire.', 'Cette phrase suggère que l\'homme ne doit pas se considérer comme une entité totalement indépendante et séparée de la société ou de l\'univers qui l\'entoure, soulignant l\'interconnexion de l\'individu avec son environnement.', '0000-00-00', 8),
(132, 'Le but de l\'État est la liberté.', 'Cette citation souligne que l\'objectif fondamental de toute structure étatique devrait être de garantir la liberté et le bien-être de ses citoyens, mettant en avant la primauté des droits individuels dans la gouvernance.', '0000-00-00', 8),
(133, 'L\'amour de Dieu ne consiste pas à aimer Dieu dans la mesure où nous l\'aimons, mais dans la mesure où il peut être aimé de chacun de nous.', ' Cette phrase souligne que l\'amour de Dieu ne dépend pas de nos propres capacités, mais de la nature divine elle-même, mettant en avant la transcendance de l\'amour divin au-delà de nos propres limitations.', '0000-00-00', 8),
(134, 'Il n\'y a rien de plus utile à l\'homme que l\'homme.', 'Cette citation souligne l\'importance des relations humaines et de l\'interaction sociale dans la vie de l\'individu, mettant en avant le potentiel de croissance et d\'épanouissement personnel à travers les interactions avec les autres.', '0000-00-00', 8),
(135, 'Tout ce qui est vraiment grand et excellent est en soi une cause de joie.', 'Cette phrase souligne que les réalisations et les expériences remarquables apportent naturellement de la satisfaction et du bonheur, soulignant l\'importance de poursuivre des objectifs significatifs et valorisants dans la vie.', '0000-00-00', 8),
(136, 'La paix n\'est pas l\'absence de guerre, mais une vertu, un état d\'esprit, une volonté de bienveillance, de confiance, de justice.', 'Cette citation souligne que la paix véritable va au-delà de l\'absence de conflit armé, mettant en avant l\'idée que la paix est fondamentalement un état d\'esprit et un engagement envers des valeurs de compassion et de justice.', '0000-00-00', 8),
(137, 'Il ne faut pas pleurer sur les choses qui n\'ont pas été faites, mais plutôt se réjouir de celles qui l\'ont été.', 'Cette phrase encourage à adopter une perspective positive sur le passé, mettant en avant l\'importance de reconnaître les réalisations plutôt que de se concentrer sur les regrets et les occasions manquées.', '0000-00-00', 8),
(138, 'Il n\'y a rien de bon ni de mauvais en soi, mais c\'est notre pensée qui le rend ainsi.', 'Cette citation souligne le pouvoir de la perception et de l\'interprétation dans la détermination de ce qui est considéré comme bon ou mauvais, soulignant l\'importance de cultiver une attitude positive et constructive.', '0000-00-00', 8),
(139, 'La liberté est conçue non pas comme un bien extérieur, mais comme la vertu même de l\'âme.', 'Cette phrase souligne que la liberté véritable découle de l\'état intérieur de l\'individu et de son autonomie personnelle, mettant en avant la liberté comme un attribut de la conscience et de la volonté.', '0000-00-00', 8),
(140, 'La béatitude n\'est pas la récompense de la vertu, mais la vertu elle-même.', 'Cette citation souligne que le bonheur authentique découle de la pratique de la vertu elle-même, mettant en avant l\'idée que le bien moral et l\'épanouissement personnel sont intrinsèquement liés.', '0000-00-00', 8),
(141, 'Connais-toi toi-même.', '', '0000-00-00', 9),
(142, 'Je sais que je ne sais rien.', 'Cette célèbre phrase, également associée à Socrate, exprime l\'humilité intellectuelle et la reconnaissance de nos propres limites de connaissance. Elle met en avant l\'idée que plus nous apprenons, plus nous prenons conscience de l\'étendue de notre ignorance.', '0000-00-00', 9),
(143, 'La vie non examinée ne vaut pas la peine d\'être vécue.', 'Cette citation, souvent attribuée à Socrate, souligne l\'importance de la réflexion et de l\'introspection dans la vie humaine. Elle met en avant l\'idée que vivre sans remise en question de ses propres croyances et actions conduit à une existence superficielle et dénuée de sens.', '0000-00-00', 9),
(144, 'Le secret du bonheur est de voir chaque fin comme un début.', ' Cette phrase encourage à adopter une perspective positive sur le changement et le renouveau dans la vie. Elle souligne que même lorsque quelque chose se termine, cela ouvre la porte à de nouvelles opportunités et expériences.', '0000-00-00', 9),
(145, 'Un homme sage parle parce qu\'il a quelque chose à dire ; un imbécile parce qu\'il doit dire quelque chose.', ' Cette citation, souvent attribuée à Platon, met en avant l\'importance de la réflexion et de la pertinence dans la communication. Elle souligne que la sagesse réside dans la parole mesurée et réfléchie, plutôt que dans la parole impulsée par le besoin de paraître intelligent ou important.', '0000-00-00', 9),
(146, 'La vraie sagesse vient de savoir que vous ne savez rien.', 'Cette phrase réitère l\'idée de l\'humilité intellectuelle et de la reconnaissance de notre ignorance comme base de la véritable sagesse. Elle met en avant l\'idée que la remise en question constante de nos propres connaissances et croyances est essentielle pour la croissance personnelle et la découverte de la vérité.', '0000-00-00', 9),
(147, 'Il est préférable de changer son esprit plutôt que le monde entier.', 'Cette citation souligne l\'importance de la flexibilité mentale et de l\'adaptabilité dans la vie. Elle met en avant l\'idée que notre perception et notre interprétation des événements peuvent être plus influentes que les événements eux-mêmes.', '0000-00-00', 9),
(148, 'Les hommes mauvais vivent pour manger, tandis que les hommes bons mangent pour vivre.', 'Cette phrase met en avant l\'importance de l\'équilibre et de la modération dans nos désirs et nos habitudes alimentaires. Elle souligne que la nourriture ne devrait pas être une obsession, mais plutôt un moyen de maintenir notre santé et notre bien-être.', '0000-00-00', 9),
(149, 'Je ne sais qu\'une chose : c\'est que je ne sais rien.', 'Cette réitération de la célèbre phrase de Socrate exprime l\'humilité intellectuelle et la reconnaissance de notre ignorance comme fondement de la quête de connaissance et de sagesse.', '0000-00-00', 9),
(150, 'La vraie sagesse réside dans la reconnaissance de l\'ignorance.', 'Cette citation souligne que l\'humilité intellectuelle et la conscience de notre propre ignorance sont les fondements de la véritable sagesse. Elle met en avant l\'idée que la quête de connaissance commence par la reconnaissance de ce que nous ne savons pas.', '0000-00-00', 9),
(152, 'Le doute est le commencement de la sagesse.', 'Cette citation souligne que remettre en question ses propres croyances et opinions est le point de départ du cheminement vers la sagesse. Elle met en avant l\'importance de l\'humilité intellectuelle et de la réflexion critique dans la quête de la vérité.', '0000-00-00', 10),
(153, 'Il n\'est rien au monde d\'aussi étrange et d\'aussi difficile à réussir que de continuer à voir.', ' Cette phrase de Henry David Thoreau met en avant la difficulté de maintenir une perception claire et objective du monde malgré les préjugés et les influences extérieures.', '0000-00-00', 10),
(154, 'Diviser chaque difficulté en autant de parties qu\'il est possible et nécessaire pour la résoudre.', 'Cette citation souligne l\'importance de l\'analyse méthodique des problèmes et des défis, mettant en avant l\'idée que la résolution efficace des difficultés nécessite souvent une approche systématique et détaillée.', '0000-00-00', 10),
(155, 'La lecture de tous les bons livres est comme une conversation avec les plus honnêtes gens des siècles passés.', 'Cette phrase met en avant l\'importance de la lecture comme moyen d\'accéder à la sagesse et à l\'expérience accumulées par les générations précédentes. Elle souligne que les livres offrent une opportunité unique d\'interagir avec les grandes pensées et les idées du passé.', '0000-00-00', 10),
(156, 'La meilleure preuve de la justesse de notre jugement est de pouvoir supporter les jugements contraires.', 'Cette citation souligne que la capacité à accepter et à tolérer les opinions divergentes est un signe de maturité intellectuelle et de confiance en ses propres convictions. Elle met en avant l\'importance de la pluralité des points de vue dans la recherche de la vérité.', '0000-00-00', 10),
(157, 'Il est bon de conserver l\'esprit tranquille et détaché, comme s\'il nous était permis de jouer à ce jeu du monde, sans être trop attachés à aucun de ses événements.', 'Cette phrase encourage à adopter une attitude de détachement et de sérénité face aux aléas de la vie. Elle souligne l\'importance de cultiver une perspective équilibrée et détachée pour maintenir la paix intérieure.', '0000-00-00', 10),
(158, 'Cherchez toujours, et ne vous fiez jamais à votre propre jugement.', 'Cette citation souligne l\'importance de la remise en question constante et de la recherche active de la connaissance. Elle met en garde contre l\'hubris intellectuel et encourage à rester ouvert aux nouvelles idées et perspectives.', '0000-00-00', 10),
(159, 'Le plus grand avantage de la conversation est d\'apprendre à discerner l\'opinion des autres et à discerner nos propres erreurs.', 'Cette phrase souligne que les interactions sociales offrent une occasion précieuse d\'apprentissage et de croissance personnelle. Elle met en avant l\'importance de l\'écoute active et de la réflexion critique dans la communication interpersonnelle.', '0000-00-00', 10),
(160, 'La raison est la seule chose qui nous rend vraiment humains et qui nous distingue des animaux.', ' Cette citation souligne l\'importance de la faculté de raisonner dans la définition de l\'humanité. Elle met en avant l\'idée que la capacité à penser de manière logique et rationnelle est ce qui distingue l\'homme des autres créatures.', '0000-00-00', 10),
(161, 'L\'homme est l\'unique animal qui doit être éduqué.', 'Cette phrase souligne l\'importance de l\'éducation dans le développement humain. Elle met en avant l\'idée que l\'homme a besoin d\'une formation intellectuelle et morale pour réaliser pleinement son potentiel.', '0000-00-00', 11),
(162, 'Agis de telle sorte que la maxime de ta volonté puisse toujours valoir en même temps comme principe d\'une législation universelle.', 'Cette citation, également associée à la philosophie de Kant, souligne l\'importance de l\'universalité dans nos choix moraux. Elle encourage à agir selon des principes qui pourraient être adoptés comme lois pour tous les individus dans toutes les circonstances.', '0000-00-00', 11),
(163, 'L\'homme est la seule créature qui doit être éduquée.', 'Cette phrase met en garde contre l\'utilisation de la raison déconnectée de tout sens moral ou spirituel. Elle souligne que la raison seule peut mener à des actions destructrices si elle n\'est pas guidée par des principes éthiques et spirituels.', '0000-00-00', 11),
(164, 'Il n\'y a rien de plus dangereux que la raison sans la foi.', ' Cette phrase met en garde contre l\'utilisation de la raison déconnectée de tout sens moral ou spirituel. Elle souligne que la raison seule peut mener à des actions destructrices si elle n\'est pas guidée par des principes éthiques et spirituels.', '0000-00-00', 11),
(165, 'La moralité n\'est pas la doctrine des actions, mais des motivations qui déterminent ces actions.', ' Cette citation souligne l\'importance des intentions et des motivations derrière nos actions morales. Elle met en avant l\'idée que la moralité réside dans les raisons pour lesquelles nous agissons, plutôt que dans les actions elles-mêmes.', '0000-00-00', 11),
(166, 'L\'expérience sans la théorie est aveugle, mais la théorie sans l\'expérience est seulement intellectuelle.', ' Cette phrase souligne l\'importance de l\'interaction entre la théorie et la pratique dans l\'acquisition de la connaissance. Elle met en avant l\'idée que l\'expérience concrète est nécessaire pour donner du sens à la théorie, et vice versa.', '0000-00-00', 11),
(167, 'La justice est le premier devoir envers les autres, et la charité envers nous-mêmes.', 'Cette citation souligne l\'importance de la justice et de la bienveillance dans nos relations avec les autres et avec nous-mêmes. Elle met en avant l\'idée que nous devons être justes envers les autres et compatissants envers nous-mêmes.', '0000-00-00', 11),
(168, 'Aie le courage de te servir de ton propre entendement.', ' Cette phrase encourage à faire preuve d\'indépendance intellectuelle et à penser par soi-même. Elle souligne l\'importance de la réflexion critique et de la confiance en ses propres capacités de raisonnement.', '0000-00-00', 11),
(169, 'La seule chose qui puisse nous consoler de nos misères est l\'amour de la vérité et la volonté de la chercher.', ' Cette citation souligne l\'importance de la quête de vérité comme source de réconfort et de consolation dans les moments difficiles. Elle met en avant l\'idée que la recherche de la vérité peut apporter un sens et une direction à nos vies.', '0000-00-00', 11),
(170, 'Nous sommes des êtres raisonnables, nous sommes aussi des êtres moraux.', 'Cette phrase souligne la double nature de l\'humanité, en tant qu\'êtres dotés de raison et de moralité. Elle met en avant l\'idée que notre capacité de penser et de distinguer le bien du mal est ce qui nous définit en tant qu\'êtres humains.', '0000-00-00', 11),
(171, 'L\'homme est né libre, et partout il est dans les fers.', '', '0000-00-00', 12),
(172, 'La liberté est le droit de faire tout ce que les lois permettent.', 'Cette citation souligne la relation entre la liberté individuelle et le cadre légal d\'une société. Elle met en avant l\'idée que la liberté consiste à agir en accord avec les lois et les normes établies, plutôt que de faire ce que l\'on veut sans considération pour les autres.', '0000-00-00', 12),
(173, 'La nature ne fait rien en vain.', 'Cette phrase met en avant l\'idée que chaque élément de la nature a un but ou une fonction spécifique. Elle souligne l\'ordre et l\'harmonie qui caractérisent le monde naturel, mettant en avant l\'idée que tout ce qui existe a sa place et son utilité.', '0000-00-00', 12),
(174, 'L\'homme est naturellement bon, c\'est la société qui le corrompt.', 'Cette citation exprime une vision optimiste de la nature humaine, mettant en avant l\'idée que l\'homme naît avec des qualités positives qui sont altérées ou perverties par les influences sociales et culturelles.', '0000-00-00', 12),
(175, 'La propriété est le plus sacré de tous les droits et le plus inviolable des pactes.', 'Cette phrase souligne l\'importance de la propriété privée dans la société. Elle met en avant l\'idée que le droit à la propriété est fondamental pour la liberté individuelle et la justice sociale.', '0000-00-00', 12),
(176, 'La plus belle règle de conduite est de rendre les autres heureux.', 'Cette citation met en avant l\'idée de l\'altruisme et de la bienveillance envers autrui comme principes directeurs de l\'action morale. Elle souligne l\'importance de contribuer au bonheur et au bien-être des autres dans nos interactions sociales.', '0000-00-00', 12),
(177, 'Le monde de la réalité a ses limites ; le monde de l\'imagination est sans frontières.', 'Cette phrase souligne la différence entre le monde tangible et le monde de l\'esprit. Elle met en avant l\'idée que l\'imagination humaine est illimitée et peut créer des possibilités infinies au-delà des contraintes de la réalité matérielle.', '0000-00-00', 12),
(178, 'On n\'est pas le maître du bien qu\'on aime.', 'Cette citation souligne que l\'amour véritable ne peut pas être contrôlé ou manipulé selon notre volonté. Elle met en avant l\'idée que les sentiments authentiques ne sont pas soumis à notre contrôle, mais sont plutôt le résultat de forces plus grandes que nous.', '0000-00-00', 12),
(179, 'La première loi de la nature est de veiller à sa propre conservation.', 'Cette phrase souligne l\'instinct de survie comme un principe fondamental de la nature. Elle met en avant l\'idée que l\'auto-préservation est une priorité instinctive pour tous les êtres vivants.', '0000-00-00', 12),
(180, 'Le premier homme qui, ayant enclos un terrain, s\'avisa de dire : Ceci est à moi, et trouva des gens assez simples pour le croire, fut le vrai fondateur de la société civile.', 'Cette citation de Jean-Jacques Rousseau souligne l\'origine de la propriété privée et de la société civilisée. Elle met en avant l\'idée que la notion de propriété a été créée par l\'homme pour organiser la société, mais a également entraîné des inégalités et des conflits sociaux.', '0000-00-00', 12),
(181, 'Celui qui a un pourquoi pour vivre peut supporter presque n\'importe comment.', 'Nietzsche affirme ici que la recherche d\'un sens ou d\'un but dans la vie peut être une source de résilience et de capacité à surmonter les difficultés, même les plus grandes.', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `id_droit` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_droit`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`id_droit`, `name`) VALUES
(1, 'L\'empereur'),
(2, 'Le peuple');

-- --------------------------------------------------------

--
-- Structure de la table `image_user`
--

DROP TABLE IF EXISTS `image_user`;
CREATE TABLE IF NOT EXISTS `image_user` (
  `id_img` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `dates` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `image_user`
--

INSERT INTO `image_user` (`id_img`, `nom`, `img`, `description`, `dates`) VALUES
(1, 'Hercule de Farnèse', 'assets/img/profil/p1.jfif', 'Hercule de Farnèse est une sculpture ancienne qui illustre la force et la détermination du héros mythologique Héraclès. Cette représentation met en avant des valeurs telles que la puissance, le courage et la lutte contre le mal, faisant de Héraclès un symbole de bravoure et de vertu.', ' IIe siècle après J.-C.'),
(2, 'Antoine de Saint-Exupéry', 'assets/img/profil/p2.jfif', ' Antoine de Saint-Exupéry, célèbre écrivain et aviateur français, est surtout connu pour son chef-d\'œuvre \"Le Petit Prince\", un conte poétique qui a captivé des lecteurs du monde entier. Son écriture, imprégnée de ses expériences en tant que pilote, explore des thèmes tels que l\'aventure, la solitude et la condition humaine.', '29 juin 1900 / 31 juillet 1944'),
(3, 'Jean Valjean', 'assets/img/profil/p3.jfif', ' Jean Valjean, personnage central des \"Misérables\" de Victor Hugo, incarne des valeurs de rédemption, de compassion et de justice. Ancien forçat, il cherche à se racheter en aidant les plus démunis et en luttant pour la dignité humaine. Son parcours de transformation et son engagement envers le bien en font un héros emblématique de la littérature.', ' \"Les Misérables\" de Victor Hugo, publié en 1862.'),
(4, 'Godefroi de bouillon', 'assets/img/profil/p4.jfif', 'Godefroi de Bouillon était un noble et chef militaire du Moyen Âge, célèbre pour sa piété, son courage et son dévouement à sa foi chrétienne. Il incarnait les valeurs de la chevalerie médiévale, prônant l\'honneur, la justice et la protection des faibles. Sa clémence envers les vaincus et son désir de libérer Jérusalem témoignent de sa compassion et de son engagement religieux. Son héritage demeure un symbole de courage et de dévouement pour de nombreuses générations.', '1060 / 1100'),
(5, 'Achille', 'assets/img/profil/p5.jfif', 'Achille, héros légendaire de la mythologie grecque, incarne des principes de courage, de bravoure et de loyauté. Son engagement envers ses compagnons d\'armes et son désir de gloire sont remarquables. Sa quête de renommée sur le champ de bataille reflète son sens de l\'honneur et sa détermination à prouver sa valeur. Malgré son destin tragique, sa bravoure inspire admiration et respect, faisant de lui un symbole intemporel de la force et du courage.', 'Mythologie'),
(6, 'Doolin de Maience', 'assets/img/profil/p6.jfif', 'Doolin de Maience est un chevalier des chansons de geste, réputé pour sa vaillance, sa loyauté et son sens de l\'honneur. Ses aventures épiques et ses exploits au combat le caractérisent comme un héros de la chevalerie médiévale, représentant les valeurs de courage et de dévouement.', 'Légende des chansons de geste'),
(7, 'Napoléon Bonaparte', 'assets/img/profil/p7.jfif', 'Napoléon Bonaparte était un général et empereur français du XIXe siècle, célèbre pour ses compétences militaires exceptionnelles. Il a mené de nombreuses campagnes victorieuses à travers l\'Europe, révolutionnant les tactiques militaires et établissant un vaste empire. Ses victoires à Austerlitz, Iéna et d\'autres batailles ont marqué l\'histoire militaire. Malgré quelques revers, son héritage en tant que stratège reste indéniable.', '15 août 1769 / 5 mai 1821'),
(8, 'Jean Moulin', 'assets/img/profil/p8.jfif', 'Jean Moulin, figure majeure de la Résistance française pendant la Seconde Guerre mondiale, était connu pour son courage, son engagement et ses principes indéfectibles. Il a uni les mouvements de résistance, refusé de céder à l\'oppression nazie malgré la torture, et est devenu un symbole de la lutte pour la liberté et la dignité humaine.', ' 20 juin 1899 / 8 juillet 1943'),
(9, 'Jeanne d\'Arc', 'assets/img/profil/p9.jfif', 'Jeanne d\'Arc, la Pucelle d\'Orléans, est une figure emblématique de l\'histoire française, reconnue pour sa bravoure, sa foi et son patriotisme. Elle a joué un rôle crucial dans la guerre de Cent Ans, guidée par des visions divines, et a contribué à plusieurs victoires françaises. Son dévouement, sa confiance et son courage en font un symbole intemporel de résistance et de conviction.', '1412 / 30 mai 1431'),
(10, 'Le chevalier Bayard', 'assets/img/profil/p10.jfif', ' Le chevalier Bayard, figure emblématique de la chevalerie française, est célèbre pour son courage, sa loyauté et son code d\'honneur sans faille. Surnommé \"le chevalier sans peur et sans reproche\", il incarne les valeurs de bravoure, de loyauté et d\'intégrité.', '1473 / 1524');

-- --------------------------------------------------------

--
-- Structure de la table `nationalité`
--

DROP TABLE IF EXISTS `nationalité`;
CREATE TABLE IF NOT EXISTS `nationalité` (
  `id_nationalité` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_nationalité`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `nationalité`
--

INSERT INTO `nationalité` (`id_nationalité`, `nom`) VALUES
(1, 'Allemande'),
(2, 'Romaine'),
(3, 'Française'),
(4, 'Grecque');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `motdepasse` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom_compte` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img_profil` int NOT NULL,
  `id_droit` int NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `id_droit` (`id_droit`),
  KEY `fk_img_profil` (`img_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `mail`, `motdepasse`, `nom_compte`, `img_profil`, `id_droit`) VALUES
(11, 'Thomé', 'Maxime', 'thomemaximepro@gmail.com', '$2y$10$T//xZUh3tsc.QiZI56xNoOSPcdgsJF88cowEnSwOoQ1gAO.XD.qN6', 'Maximus', 9, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `auteur_nationnalité`
--
ALTER TABLE `auteur_nationnalité`
  ADD CONSTRAINT `auteur_nationnalité_ibfk_1` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`),
  ADD CONSTRAINT `auteur_nationnalité_ibfk_2` FOREIGN KEY (`id_nationalité`) REFERENCES `nationalité` (`id_nationalité`);

--
-- Contraintes pour la table `categorie_citation`
--
ALTER TABLE `categorie_citation`
  ADD CONSTRAINT `categorie_citation_ibfk_1` FOREIGN KEY (`id_citations`) REFERENCES `citations` (`id_citations`),
  ADD CONSTRAINT `categorie_citation_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

--
-- Contraintes pour la table `citations`
--
ALTER TABLE `citations`
  ADD CONSTRAINT `citations_ibfk_1` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_img_profil` FOREIGN KEY (`img_profil`) REFERENCES `image_user` (`id_img`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_droit`) REFERENCES `droits` (`id_droit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
