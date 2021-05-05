-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 mars 2021 à 13:37
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `college_connect`
--

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `message` varchar(400) NOT NULL,
  `fichier` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `text` longtext NOT NULL,
  `fichier` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sujet`
--

INSERT INTO `sujet` (`id`, `iduser`, `auteur`, `titre`, `description`, `text`, `fichier`, `date`) VALUES
(1, 0, 'mariam', 'L\'informatique est un domaine d\'activité scientifique, technique, et industriel concernant le traitement automatique de l\'information numérique par l\'exécution de programmes informatiques par des mach', '', 'DES MÉTIERS TRADITIONNELS OU ÉMERGENTS\r\nSi le développement logiciel est au cœur de l\'activité numérique, cette dernière fait appel à de nombreuses autres compétences. C\'est grâce aux professionnels des systèmes, des réseaux et de la sécurité que l\'information peut circuler et être traitée efficacement.\r\n\r\nLes innovations contribuent à l\'émergence de profils plus pointus. Les spécialistes du cloud permettent aux entreprises d\'externaliser le stockage et le traitement de leurs données. Les data scientists recueillent et analysent des masses d\'informations. Les ingénieurs en réalité virtuelle conçoivent des systèmes complexes utilisés aussi bien pour le jeu vidéo que pour la simulation chirurgicale.\r\n\r\nL’émergence de l’intelligence artificielle et du machine learning va créer aussi de nouveaux métiers en plus des métiers de la data : ingénieur IA (créer des programmes informatiques capables de raisonner comme l\'homme, pour répondre à des problèmes très complexes, ou encore coach de chatbot, etc. \r\n\r\nLes évolutions technologiques ont aussi fait apparaître des spéci', 'ARIEL SHENEY - YELELEMA (CLIP OFFICIEL).mp4', '2021-02-22 16:10:47'),
(2, 0, 'mariam', 'Le livre numérique, aussi appelé « livre électronique » ou « ebook », est une version digitale des livres papier que vous pouvez lire en format epub sur liseuse ', '', 'ePub sur une tablette ou un smartphone. • Si vous avez un iPad ou iPhone, placez l\'epub dans votre matériel via iTunes. ...\r\nSur un ordinateur. Pour lire votre eBook sur un ordinateur, aucun souci ! ...\r\nSur une liseuse. Bonne nouvelle !\r\n', '426517e2-4863-42c9-806a-c98a854c79d3.pdf', '2021-02-22 16:15:05'),
(3, 0, 'mariam', 'kopopp', '', 'kjklmlmlml', 'wordpress.txt', '2021-02-22 16:15:35'),
(4, 0, 'mariam', 'science', '', 'kjoopo', 'ADAOBI~1.mp3', '2021-02-22 16:18:24'),
(5, 0, 'kkmlpll', 'lklmllpl', '', 'joooo', 'Ariel_sheney_-__SYMPA_(_clip_officiel_).mp4', '2021-02-22 16:19:22'),
(6, 0, 'mariam', 'math', '', 'kloopppp', 'Capture d’écran 2020-12-07 123222.png', '2021-02-22 17:28:47'),
(7, 0, 'mariam', 'mathématiques', 'L’analyse numérique est une discipline à l\'interface des mathématiques et de l\'informatique. Elle s’intéresse tant aux fondements qu’à la mise en pratique des méthodes permettant de résoudre,', 'Certains problèmes de mathématiques peuvent être résolus numériquement (c.-à-d., sur ordinateur) de façon exacte par un algorithme en un nombre fini d\'opérations. Ces algorithmes sont parfois appelés méthodes directes ou qualifiés de finis. Des exemples sont l’élimination de Gauss-Jordan pour la résolution d’un système d’équations linéaires et l’algorithme du simplexe en optimisation linéaire.\r\n\r\nCependant, aucune méthode directe n’est connue pour certains problèmes (de plus, pour une classe de problèmes dits NP-complets, aucun algorithme de calcul direct en temps polynomial n\'est connu à ce jour). Dans de tels cas, il est parfois possible d’utiliser une méthode itérative pour tenter de déterminer une approximation de la solution', 'Capture d’écran (2).png', '2021-03-03 12:57:30'),
(9, 0, 'mariam', 'mathématiques', 'ses phénomènes de la manière la plus élémentaire possible — c\'est-à-dire de produire des connaissances se', 'rapprochant le plus possible des faits observables.\r\n\r\nNon dogmatique, la science est ouverte à la critique et les connaissances scientifiques, ainsi que les méthodes, sont toujours ouvertes à la révision. De plus, les sciences ont pour but de comprendre le', '_7Fo9uFE_400x400.jpg', '2021-03-03 16:59:38'),
(10, 1, 'mariam', 'informatique', 'La notion ne possède néanmoins pas de définition consensuelle. L\'épistémologue André Pichot écrit ainsi qu\'il est « utopique de vouloir', 'donner une définition a priori de la science »13. L\'historien des sciences Robert Nadeau explique pour sa part qu\'il est « impossible de passer ici en revue l\'ensemble des critères de démarcation proposés depuis cent ans par les épistémologues, [et qu\'on] ne peut apparemment formuler un critère qui exclut tout ce qu\'on veut exclure, et conserve tout ce qu\'on veut conserver »14. La physicienne et philosophe des sciences Léna Soler, dans son manuel d\'épistémologie, commence également par souligner « les limites de l\'opération de définition »15. Les dictionnaires en proposent certes quelques-unes. Mais, comme le rappelle Léna Soler, ces définitions ne sont pas satisfaisantes. Les notions d\'« universalité », d\'« objectivité » ou de « méthode scientifique » (surtout lorsque cette dernière est conçue comme étant l\'unique notion en vigueur) sont l\'objet de trop nombreuses controverses pour qu\'elles puissent constituer le socle d\'une définition acceptable. Il faut donc tenir compte de ces difficultés pour décrire la science. Et cette description reste possible en tolérant un certain « flou » épistémologique.', 'Netflix.png', '2021-03-03 17:11:59'),
(11, 2, 'kadi', 'grammaire', 'publique ; il contraste avec les dialectes vernaculaires, qui peuvent faire l\'objet d\'études en linguistique descriptive académique, mais qui sont rarement enseignés de façon normative. La &quot;première langue&quot; normalisée enseignée dans l\'enseignement primaire peut être sujet à controverse politique, car il peut parfois établir une norme définissant la nationalité ou l\'origine ethnique.\r\n\r\nDepuis les années 2000 et les avancées en linguistique, des efforts ont commencé pour mettre à jour l', 'principal est d\'empêcher l\'utilisation de règles prescriptives obsolètes en faveur de l\'établissement de normes construites sur des recherches descriptives antérieures et de changer les perceptions concernant la «justesse » relative des formes standard prescrites par rapport aux dialectes non standard[réf. nécessaire].\r\n\r\nLa prééminence du français parisien a largement régné dans l\'histoire de la littérature française moderne. L\'italien standard n\'est pas fondé sur le discours de la capitale, Rome, mais sur le discours de Florence en raison de l\'influence florentine sur la première littérature italienne. De même, l\'espagnol standard n\'est pas fondé sur le discours de Madrid, mais sur celui de locuteurs instruits des régions plus septentrionales telles que la Castille et León (voir Gramática de la lengua castellana).', 'Annotation 2020-08-06 121205.png', '2021-03-03 17:16:24');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `picture`, `date_inscription`) VALUES
(1, 'mariam', 'mariamsabrinatraore@gmail.com', 'dd4b21e9ef71e1291183a46b913ae6f2', 'IMG_20200205_103214_813.jpg', '2021-03-01 15:00:06'),
(2, 'kadi', 'kadi@gmail.com', 'dd4b21e9ef71e1291183a46b913ae6f2', 'IMG_20191226_172501_789.jpg', '2021-03-03 14:53:48');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
