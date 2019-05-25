-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2018 at 09:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `datetimes` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `addedby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `datetimes`, `username`, `password`, `addedby`) VALUES
(17, 'April-20-2018 14:26:40', 'jai', '827ccb0eea8a706c4c34a16891f84e7b', 'ankit'),
(18, 'April-20-2018 14:27:59', 'ankit', '827ccb0eea8a706c4c34a16891f84e7b', 'jai');

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(100) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `post` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `datetime`, `category`, `author`, `image`, `title`, `post`) VALUES
(9, 'April-10-2018 15:13:23', 'Python', 'jai', '511052.jpg', 'post 1', '<p>Lorem ipsum dolor sit amet, in augue intellegebat his, ex qui gubergren evertitur. Et vivendum probatus vim. Eum corrumpit interesset ex, qui an eros eirmod aliquam. Sea aeque clita definitiones te. Scripta delicatissimi vis id. Ex zril prompta nonumes nec, te eos accusamus reformidans.</p>\r\n\r\n<p>Vel ea habeo error graece, cu his iisque qualisque voluptatum. Sonet elitr ne eum. Illum periculis cu ius, hinc purto paulo pro ad, eu quo solet tritani ullamcorper. Quando ornatus comprehensam vel ei. Te summo noluisse legendos sed, ad case altera vim.</p>\r\n\r\n<p>Nominati laboramus cotidieque cu sed, commune instructior vis ei, at sed cetero voluptua. Ei doming diceret qui, omnes veniam melius eu sed. Nobis dolorem deterruisset ius ad. Pri luptatum gubergren ad. Et graeco omnium est, ei mei dicit clita equidem. Est eu invidunt ocurreret rationibus.</p>\r\n\r\n<p>Vix an enim tota scripserit, his ex veniam expetenda, cu vel utroque cotidieque signiferumque. Cum nominati expetenda et, at nec eros definiebas disputationi, eam fierent liberavisse ea. Quo sapientem reprehendunt ne, suas duis sententiae an ius. Ne quo facer putant, no ignota convenire sit. Usu legendos sensibus temporibus ei. Pri cu essent pertinacia eloquentiam, eam alia nobis equidem at.</p>\r\n\r\n<p>Eum ne porro dicit civibus. Nam percipitur interpretaris ea, no est meis adipisci. Ea eruditi pertinax inciderint vis, ut voluptaria dissentias definitionem eum. Vis ne legendos sententiae, cu his odio dicta veritus, qui ne mutat homero. Munere docendi nostrum est ne, volumus recusabo efficiendi at qui. Has autem mandamus signiferumque no, tantas debitis duo et.</p>\r\n\r\n<p>Vidisse accumsan assueverit ne duo. Sed ut essent nostro expetendis. Has duis mazim dolore eu, no clita omnium perfecto cum. Wisi legere moderatius ut cum, summo meliore noluisse eam te. Copiosae percipit menandri sed et.</p>\r\n\r\n<p>Idque mandamus id qui, quodsi fierent suscipit ea usu. Cu omnium docendi omittantur ius. Eam qualisque quaerendum scribentur ex. Quando tibique singulis has ad. Ad modo apeirian eleifend vel. Nec eu fabellas sensibus, vocent consequuntur est ut.</p>\r\n\r\n<p>No sale rebum voluptatibus est, sea possim expetenda te, summo errem contentiones no has. Cetero concludaturque vituperatoribus eos an. Verterem consectetuer sed ne. Ad legendos suavitate eos, regione contentiones nec an.</p>\r\n\r\n<p>Ea has salutandi maluisset, ea dignissim scriptorem est, nec solum omnes eu. Tollit euismod aliquid mea ei, persius sententiae qui ei. Quo ancillae platonem et. Nec an numquam delicatissimi, in duo nulla persius. Nec ea liber facete, id movet eligendi mei, noluisse recusabo definiebas cum at. Eos ut adhuc repudiandae theophrastus, usu cu ludus appellantur. Eum in virtute indoctum moderatius, nostrum erroribus an vis.</p>\r\n\r\n<p>Quas legimus ad his, nobis nonumy mollis qui an. Mea ei ridens eirmod, decore intellegebat mel id. In sed suas quaeque. Id mei quis viris persecuti, ut per assum debitis mnesarchum. Ut has tempor debitis deterruisset.</p>\r\n\r\n<p>Et errem democritum conclusionemque nam, iusto everti blandit vis at. Quas aliquam disputationi ad pri, ius quot nostrud voluptatum an. Odio mediocrem ea per, cu amet graecis mea. Falli omittantur adversarium his an, id mea esse malorum, eu vel regione alterum delenit. Mea an nihil principes, qui te justo inimicus adversarium.</p>\r\n\r\n<p>Quo.</p>\r\n'),
(10, 'April-10-2018 15:15:58', 'php', 'jai', '665092.jpg', 'Post 2', '<p>Lorem ipsum dolor sit amet, in augue intellegebat his, ex qui gubergren evertitur. Et vivendum probatus vim. Eum corrumpit interesset ex, qui an eros eirmod aliquam. Sea aeque clita definitiones te. Scripta delicatissimi vis id. Ex zril prompta nonumes nec, te eos accusamus reformidans.</p>\r\n\r\n<p>Vel ea habeo error graece, cu his iisque qualisque voluptatum. Sonet elitr ne eum. Illum periculis cu ius, hinc purto paulo pro ad, eu quo solet tritani ullamcorper. Quando ornatus comprehensam vel ei. Te summo noluisse legendos sed, ad case altera vim.</p>\r\n\r\n<p>Nominati laboramus cotidieque cu sed, commune instructior vis ei, at sed cetero voluptua. Ei doming diceret qui, omnes veniam melius eu sed. Nobis dolorem deterruisset ius ad. Pri luptatum gubergren ad. Et graeco omnium est, ei mei dicit clita equidem. Est eu invidunt ocurreret rationibus.</p>\r\n\r\n<p>Vix an enim tota scripserit, his ex veniam expetenda, cu vel utroque cotidieque signiferumque. Cum nominati expetenda et, at nec eros definiebas disputationi, eam fierent liberavisse ea. Quo sapientem reprehendunt ne, suas duis sententiae an ius. Ne quo facer putant, no ignota convenire sit. Usu legendos sensibus temporibus ei. Pri cu essent pertinacia eloquentiam, eam alia nobis equidem at.</p>\r\n\r\n<p>Eum ne porro dicit civibus. Nam percipitur interpretaris ea, no est meis adipisci. Ea eruditi pertinax inciderint vis, ut voluptaria dissentias definitionem eum. Vis ne legendos sententiae, cu his odio dicta veritus, qui ne mutat homero. Munere docendi nostrum est ne, volumus recusabo efficiendi at qui. Has autem mandamus signiferumque no, tantas debitis duo et.</p>\r\n\r\n<p>Vidisse accumsan assueverit ne duo. Sed ut essent nostro expetendis. Has duis mazim dolore eu, no clita omnium perfecto cum. Wisi legere moderatius ut cum, summo meliore noluisse eam te. Copiosae percipit menandri sed et.</p>\r\n\r\n<p>Idque mandamus id qui, quodsi fierent suscipit ea usu. Cu omnium docendi omittantur ius. Eam qualisque quaerendum scribentur ex. Quando tibique singulis has ad. Ad modo apeirian eleifend vel. Nec eu fabellas sensibus, vocent consequuntur est ut.</p>\r\n\r\n<p>No sale rebum voluptatibus est, sea possim expetenda te, summo errem contentiones no has. Cetero concludaturque vituperatoribus eos an. Verterem consectetuer sed ne. Ad legendos suavitate eos, regione contentiones nec an.</p>\r\n\r\n<p>Ea has salutandi maluisset, ea dignissim scriptorem est, nec solum omnes eu. Tollit euismod aliquid mea ei, persius sententiae qui ei. Quo ancillae platonem et. Nec an numquam delicatissimi, in duo nulla persius. Nec ea liber facete, id movet eligendi mei, noluisse recusabo definiebas cum at. Eos ut adhuc repudiandae theophrastus, usu cu ludus appellantur. Eum in virtute indoctum moderatius, nostrum erroribus an vis.</p>\r\n\r\n<p>Quas legimus ad his, nobis nonumy mollis qui an. Mea ei ridens eirmod, decore intellegebat mel id. In sed suas quaeque. Id mei quis viris persecuti, ut per assum debitis mnesarchum. Ut has tempor debitis deterruisset.</p>\r\n\r\n<p>Et errem democritum conclusionemque nam, iusto everti blandit vis at. Quas aliquam disputationi ad pri, ius quot nostrud voluptatum an. Odio mediocrem ea per, cu amet graecis mea. Falli omittantur adversarium his an, id mea esse malorum, eu vel regione alterum delenit. Mea an nihil principes, qui te justo inimicus adversarium.</p>\r\n\r\n<p>Quo.</p>\r\n'),
(11, 'April-10-2018 15:16:28', 'css', 'jai', '679140.png', 'post 3', '<p><strong>Lorem ipsum dolor sit amet, in augue intellegebat his, ex qui gubergren evertitur. Et vivendum probatus vim. Eum corrumpit interesset ex, qui an eros eirmod aliquam. Sea aeque clita definitiones te. Scripta delicatissimi vis id. Ex zril prompta nonumes nec, te eos accusamus reformidans.</strong></p>\r\n\r\n<p><strong>Vel ea habeo error graece, cu his iisque qualisque voluptatum. Sonet elitr ne eum. Illum periculis cu ius, hinc purto paulo pro ad, eu quo solet tritani ullamcorper. Quando ornatus comprehensam vel ei. Te summo noluisse legendos sed, ad case altera vim.</strong></p>\r\n\r\n<p><em>Nominati laboramus cotidieque cu sed, commune instructior vis ei, at sed cetero voluptua. Ei doming diceret qui, omnes veniam melius eu sed. Nobis dolorem deterruisset ius ad. Pri luptatum gubergren ad. Et graeco omnium est, ei mei d</em>icit clita equidem. Est eu invidunt ocurreret rationibus.</p>\r\n\r\n<p>Vix an enim tota scripserit, his ex veniam expetenda, cu vel utroque cotidieque signiferumque. Cum nominati expetenda et, at nec eros definiebas disputationi, eam fierent liberavisse ea. Quo sapientem reprehendunt ne, suas duis sententiae an ius. Ne quo facer putant, no ignota convenire sit. Usu legendos sensibus temporibus ei. Pri cu essent pertinacia eloquentiam, eam alia nobis equidem at.</p>\r\n\r\n<p>Eum ne porro dicit civibus. Nam percipitur interpretaris ea, no est meis adipisci. Ea eruditi pertinax inciderint vis, ut voluptaria dissentias definitionem eum. Vis ne legendos sententiae, cu his odio dicta veritus, qui ne mutat homero. Munere docendi nostrum est ne, volumus recusabo efficiendi at qui. Has autem mandamus signiferumque no, tantas debitis duo et.</p>\r\n\r\n<p>Vidisse accumsan assueverit ne duo. Sed ut essent nostro expetendis. Has duis mazim dolore eu, no clita omnium perfecto cum. Wisi legere moderatius ut cum, summo meliore noluisse eam te. Copiosae percipit menandri sed et.</p>\r\n\r\n<p>Idque mandamus id qui, quodsi fierent suscipit ea usu. Cu omnium docendi omittantur ius. Eam qualisque quaerendum scribentur ex. Quando tibique singulis has ad. Ad modo apeirian eleifend vel. Nec eu fabellas sensibus, vocent consequuntur est ut.</p>\r\n\r\n<p>No sale rebum voluptatibus est, sea possim expetenda te, summo errem contentiones no has. Cetero concludaturque vituperatoribus eos an. Verterem consectetuer sed ne. Ad legendos suavitate eos, regione contentiones nec an.</p>\r\n\r\n<p>Ea has salutandi maluisset, ea dignissim scriptorem est, nec solum omnes eu. Tollit euismod aliquid mea ei, persius sententiae qui ei. Quo ancillae platonem et. Nec an numquam delicatissimi, in duo nulla persius. Nec ea liber facete, id movet eligendi mei, noluisse recusabo definiebas cum at. Eos ut adhuc repudiandae theophrastus, usu cu ludus appellantur. Eum in virtute indoctum moderatius, nostrum erroribus an vis.</p>\r\n\r\n<p>Quas legimus ad his, nobis nonumy mollis qui an. Mea ei ridens eirmod, decore intellegebat mel id. In sed suas quaeque. Id mei quis viris persecuti, ut per assum debitis mnesarchum. Ut has tempor debitis deterruisset.</p>\r\n\r\n<p>Et errem democritum conclusionemque nam, iusto everti blandit vis at. Quas aliquam disputationi ad pri, ius quot nostrud voluptatum an. Odio mediocrem ea per, cu amet graecis mea. Falli omittantur adversarium his an, id mea esse malorum, eu vel regione alterum delenit. Mea an nihil principes, qui te justo inimicus adversarium.</p>\r\n\r\n<p>Quo.</p>\r\n'),
(12, 'April-10-2018 15:16:47', 'html', 'jai', '665092.jpg', 'post4', '<p>Lorem ipsum dolor sit amet, in augue intellegebat his, ex qui gubergren evertitur. Et vivendum probatus vim. Eum corrumpit interesset ex, qui an eros eirmod aliquam. Sea aeque clita definitiones te. Scripta delicatissimi vis id. Ex zril prompta nonumes nec, te eos accusamus reformidans.</p>\r\n\r\n<p>Vel ea habeo error graece, cu his iisque qualisque voluptatum. Sonet elitr ne eum. Illum periculis cu ius, hinc purto paulo pro ad, eu quo solet tritani ullamcorper. Quando ornatus comprehensam vel ei. Te summo noluisse legendos sed, ad case altera vim.</p>\r\n\r\n<p>Nominati laboramus cotidieque cu sed, commune instructior vis ei, at sed cetero voluptua. Ei doming diceret qui, omnes veniam melius eu sed. Nobis dolorem deterruisset ius ad. Pri luptatum gubergren ad. Et graeco omnium est, ei mei dicit clita equidem. Est eu invidunt ocurreret rationibus.</p>\r\n\r\n<p>Vix an enim tota scripserit, his ex veniam expetenda, cu vel utroque cotidieque signiferumque. Cum nominati expetenda et, at nec eros definiebas disputationi, eam fierent liberavisse ea. Quo sapientem reprehendunt ne, suas duis sententiae an ius. Ne quo facer putant, no ignota convenire sit. Usu legendos sensibus temporibus ei. Pri cu essent pertinacia eloquentiam, eam alia nobis equidem at.</p>\r\n\r\n<p>Eum ne porro dicit civibus. Nam percipitur interpretaris ea, no est meis adipisci. Ea eruditi pertinax inciderint vis, ut voluptaria dissentias definitionem eum. Vis ne legendos sententiae, cu his odio dicta veritus, qui ne mutat homero. Munere docendi nostrum est ne, volumus recusabo efficiendi at qui. Has autem mandamus signiferumque no, tantas debitis duo et.</p>\r\n\r\n<p>Vidisse accumsan assueverit ne duo. Sed ut essent nostro expetendis. Has duis mazim dolore eu, no clita omnium perfecto cum. Wisi legere moderatius ut cum, summo meliore noluisse eam te. Copiosae percipit menandri sed et.</p>\r\n\r\n<p>Idque mandamus id qui, quodsi fierent suscipit ea usu. Cu omnium docendi omittantur ius. Eam qualisque quaerendum scribentur ex. Quando tibique singulis has ad. Ad modo apeirian eleifend vel. Nec eu fabellas sensibus, vocent consequuntur est ut.</p>\r\n\r\n<p>No sale rebum voluptatibus est, sea possim expetenda te, summo errem contentiones no has. Cetero concludaturque vituperatoribus eos an. Verterem consectetuer sed ne. Ad legendos suavitate eos, regione contentiones nec an.</p>\r\n\r\n<p>Ea has salutandi maluisset, ea dignissim scriptorem est, nec solum omnes eu. Tollit euismod aliquid mea ei, persius sententiae qui ei. Quo ancillae platonem et. Nec an numquam delicatissimi, in duo nulla persius. Nec ea liber facete, id movet eligendi mei, noluisse recusabo definiebas cum at. Eos ut adhuc repudiandae theophrastus, usu cu ludus appellantur. Eum in virtute indoctum moderatius, nostrum erroribus an vis.</p>\r\n\r\n<p>Quas legimus ad his, nobis nonumy mollis qui an. Mea ei ridens eirmod, decore intellegebat mel id. In sed suas quaeque. Id mei quis viris persecuti, ut per assum debitis mnesarchum. Ut has tempor debitis deterruisset.</p>\r\n\r\n<p>Et errem democritum conclusionemque nam, iusto everti blandit vis at. Quas aliquam disputationi ad pri, ius quot nostrud voluptatum an. Odio mediocrem ea per, cu amet graecis mea. Falli omittantur adversarium his an, id mea esse malorum, eu vel regione alterum delenit. Mea an nihil principes, qui te justo inimicus adversarium.</p>\r\n\r\n<p>Quo.</p>\r\n'),
(13, 'April-10-2018 15:17:03', 'ruby', 'jai', '511052.jpg', 'post 5', '<p>Lorem ipsum dolor sit amet, in augue intellegebat his, ex qui gubergren evertitur. Et vivendum probatus vim. Eum corrumpit interesset ex, qui an eros eirmod aliquam. Sea aeque clita definitiones te. Scripta delicatissimi vis id. Ex zril prompta nonumes nec, te eos accusamus reformidans.</p>\r\n\r\n<p>Vel ea habeo error graece, cu his iisque qualisque voluptatum. Sonet elitr ne eum. Illum periculis cu ius, hinc purto paulo pro ad, eu quo solet tritani ullamcorper. Quando ornatus comprehensam vel ei. Te summo noluisse legendos sed, ad case altera vim.</p>\r\n\r\n<p>Nominati laboramus cotidieque cu sed, commune instructior vis ei, at sed cetero voluptua. Ei doming diceret qui, omnes veniam melius eu sed. Nobis dolorem deterruisset ius ad. Pri luptatum gubergren ad. Et graeco omnium est, ei mei dicit clita equidem. Est eu invidunt ocurreret rationibus.</p>\r\n\r\n<p>Vix an enim tota scripserit, his ex veniam expetenda, cu vel utroque cotidieque signiferumque. Cum nominati expetenda et, at nec eros definiebas disputationi, eam fierent liberavisse ea. Quo sapientem reprehendunt ne, suas duis sententiae an ius. Ne quo facer putant, no ignota convenire sit. Usu legendos sensibus temporibus ei. Pri cu essent pertinacia eloquentiam, eam alia nobis equidem at.</p>\r\n\r\n<p>Eum ne porro dicit civibus. Nam percipitur interpretaris ea, no est meis adipisci. Ea eruditi pertinax inciderint vis, ut voluptaria dissentias definitionem eum. Vis ne legendos sententiae, cu his odio dicta veritus, qui ne mutat homero. Munere docendi nostrum est ne, volumus recusabo efficiendi at qui. Has autem mandamus signiferumque no, tantas debitis duo et.</p>\r\n\r\n<p>Vidisse accumsan assueverit ne duo. Sed ut essent nostro expetendis. Has duis mazim dolore eu, no clita omnium perfecto cum. Wisi legere moderatius ut cum, summo meliore noluisse eam te. Copiosae percipit menandri sed et.</p>\r\n\r\n<p>Idque mandamus id qui, quodsi fierent suscipit ea usu. Cu omnium docendi omittantur ius. Eam qualisque quaerendum scribentur ex. Quando tibique singulis has ad. Ad modo apeirian eleifend vel. Nec eu fabellas sensibus, vocent consequuntur est ut.</p>\r\n\r\n<p>No sale rebum voluptatibus est, sea possim expetenda te, summo errem contentiones no has. Cetero concludaturque vituperatoribus eos an. Verterem consectetuer sed ne. Ad legendos suavitate eos, regione contentiones nec an.</p>\r\n\r\n<p>Ea has salutandi maluisset, ea dignissim scriptorem est, nec solum omnes eu. Tollit euismod aliquid mea ei, persius sententiae qui ei. Quo ancillae platonem et. Nec an numquam delicatissimi, in duo nulla persius. Nec ea liber facete, id movet eligendi mei, noluisse recusabo definiebas cum at. Eos ut adhuc repudiandae theophrastus, usu cu ludus appellantur. Eum in virtute indoctum moderatius, nostrum erroribus an vis.</p>\r\n\r\n<p>Quas legimus ad his, nobis nonumy mollis qui an. Mea ei ridens eirmod, decore intellegebat mel id. In sed suas quaeque. Id mei quis viris persecuti, ut per assum debitis mnesarchum. Ut has tempor debitis deterruisset.</p>\r\n\r\n<p>Et errem democritum conclusionemque nam, iusto everti blandit vis at. Quas aliquam disputationi ad pri, ius quot nostrud voluptatum an. Odio mediocrem ea per, cu amet graecis mea. Falli omittantur adversarium his an, id mea esse malorum, eu vel regione alterum delenit. Mea an nihil principes, qui te justo inimicus adversarium.</p>\r\n\r\n<p>Quo.</p>\r\n'),
(14, 'April-10-2018 15:17:21', 'Visual Basic', 'jai', '665092.jpg', 'post 6', '<p>Lorem ipsum dolor sit amet, in augue intellegebat his, ex qui gubergren evertitur. Et vivendum probatus vim. Eum corrumpit interesset ex, qui an eros eirmod aliquam. Sea aeque clita definitiones te. Scripta delicatissimi vis id. Ex zril prompta nonumes nec, te eos accusamus reformidans.</p>\r\n\r\n<p>Vel ea habeo error graece, cu his iisque qualisque voluptatum. Sonet elitr ne eum. Illum periculis cu ius, hinc purto paulo pro ad, eu quo solet tritani ullamcorper. Quando ornatus comprehensam vel ei. Te summo noluisse legendos sed, ad case altera vim.</p>\r\n\r\n<p>Nominati laboramus cotidieque cu sed, commune instructior vis ei, at sed cetero voluptua. Ei doming diceret qui, omnes veniam melius eu sed. Nobis dolorem deterruisset ius ad. Pri luptatum gubergren ad. Et graeco omnium est, ei mei dicit clita equidem. Est eu invidunt ocurreret rationibus.</p>\r\n\r\n<p>Vix an enim tota scripserit, his ex veniam expetenda, cu vel utroque cotidieque signiferumque. Cum nominati expetenda et, at nec eros definiebas disputationi, eam fierent liberavisse ea. Quo sapientem reprehendunt ne, suas duis sententiae an ius. Ne quo facer putant, no ignota convenire sit. Usu legendos sensibus temporibus ei. Pri cu essent pertinacia eloquentiam, eam alia nobis equidem at.</p>\r\n\r\n<p>Eum ne porro dicit civibus. Nam percipitur interpretaris ea, no est meis adipisci. Ea eruditi pertinax inciderint vis, ut voluptaria dissentias definitionem eum. Vis ne legendos sententiae, cu his odio dicta veritus, qui ne mutat homero. Munere docendi nostrum est ne, volumus recusabo efficiendi at qui. Has autem mandamus signiferumque no, tantas debitis duo et.</p>\r\n\r\n<p>Vidisse accumsan assueverit ne duo. Sed ut essent nostro expetendis. Has duis mazim dolore eu, no clita omnium perfecto cum. Wisi legere moderatius ut cum, summo meliore noluisse eam te. Copiosae percipit menandri sed et.</p>\r\n\r\n<p>Idque mandamus id qui, quodsi fierent suscipit ea usu. Cu omnium docendi omittantur ius. Eam qualisque quaerendum scribentur ex. Quando tibique singulis has ad. Ad modo apeirian eleifend vel. Nec eu fabellas sensibus, vocent consequuntur est ut.</p>\r\n\r\n<p>No sale rebum voluptatibus est, sea possim expetenda te, summo errem contentiones no has. Cetero concludaturque vituperatoribus eos an. Verterem consectetuer sed ne. Ad legendos suavitate eos, regione contentiones nec an.</p>\r\n\r\n<p>Ea has salutandi maluisset, ea dignissim scriptorem est, nec solum omnes eu. Tollit euismod aliquid mea ei, persius sententiae qui ei. Quo ancillae platonem et. Nec an numquam delicatissimi, in duo nulla persius. Nec ea liber facete, id movet eligendi mei, noluisse recusabo definiebas cum at. Eos ut adhuc repudiandae theophrastus, usu cu ludus appellantur. Eum in virtute indoctum moderatius, nostrum erroribus an vis.</p>\r\n\r\n<p>Quas legimus ad his, nobis nonumy mollis qui an. Mea ei ridens eirmod, decore intellegebat mel id. In sed suas quaeque. Id mei quis viris persecuti, ut per assum debitis mnesarchum. Ut has tempor debitis deterruisset.</p>\r\n\r\n<p>Et errem democritum conclusionemque nam, iusto everti blandit vis at. Quas aliquam disputationi ad pri, ius quot nostrud voluptatum an. Odio mediocrem ea per, cu amet graecis mea. Falli omittantur adversarium his an, id mea esse malorum, eu vel regione alterum delenit. Mea an nihil principes, qui te justo inimicus adversarium.</p>\r\n\r\n<p>Quo.</p>\r\n'),
(15, 'April-10-2018 15:17:35', 'ruby', 'jai', '665092.jpg', 'post 7', '<p>Lorem ipsum dolor sit amet, in augue intellegebat his, ex qui gubergren evertitur. Et vivendum probatus vim. Eum corrumpit interesset ex, qui an eros eirmod aliquam. Sea aeque clita definitiones te. Scripta delicatissimi vis id. Ex zril prompta nonumes nec, te eos accusamus reformidans.</p>\r\n\r\n<p>Vel ea habeo error graece, cu his iisque qualisque voluptatum. Sonet elitr ne eum. Illum periculis cu ius, hinc purto paulo pro ad, eu quo solet tritani ullamcorper. Quando ornatus comprehensam vel ei. Te summo noluisse legendos sed, ad case altera vim.</p>\r\n\r\n<p>Nominati laboramus cotidieque cu sed, commune instructior vis ei, at sed cetero voluptua. Ei doming diceret qui, omnes veniam melius eu sed. Nobis dolorem deterruisset ius ad. Pri luptatum gubergren ad. Et graeco omnium est, ei mei dicit clita equidem. Est eu invidunt ocurreret rationibus.</p>\r\n\r\n<p>Vix an enim tota scripserit, his ex veniam expetenda, cu vel utroque cotidieque signiferumque. Cum nominati expetenda et, at nec eros definiebas disputationi, eam fierent liberavisse ea. Quo sapientem reprehendunt ne, suas duis sententiae an ius. Ne quo facer putant, no ignota convenire sit. Usu legendos sensibus temporibus ei. Pri cu essent pertinacia eloquentiam, eam alia nobis equidem at.</p>\r\n\r\n<p>Eum ne porro dicit civibus. Nam percipitur interpretaris ea, no est meis adipisci. Ea eruditi pertinax inciderint vis, ut voluptaria dissentias definitionem eum. Vis ne legendos sententiae, cu his odio dicta veritus, qui ne mutat homero. Munere docendi nostrum est ne, volumus recusabo efficiendi at qui. Has autem mandamus signiferumque no, tantas debitis duo et.</p>\r\n\r\n<p>Vidisse accumsan assueverit ne duo. Sed ut essent nostro expetendis. Has duis mazim dolore eu, no clita omnium perfecto cum. Wisi legere moderatius ut cum, summo meliore noluisse eam te. Copiosae percipit menandri sed et.</p>\r\n\r\n<p>Idque mandamus id qui, quodsi fierent suscipit ea usu. Cu omnium docendi omittantur ius. Eam qualisque quaerendum scribentur ex. Quando tibique singulis has ad. Ad modo apeirian eleifend vel. Nec eu fabellas sensibus, vocent consequuntur est ut.</p>\r\n\r\n<p>No sale rebum voluptatibus est, sea possim expetenda te, summo errem contentiones no has. Cetero concludaturque vituperatoribus eos an. Verterem consectetuer sed ne. Ad legendos suavitate eos, regione contentiones nec an.</p>\r\n\r\n<p>Ea has salutandi maluisset, ea dignissim scriptorem est, nec solum omnes eu. Tollit euismod aliquid mea ei, persius sententiae qui ei. Quo ancillae platonem et. Nec an numquam delicatissimi, in duo nulla persius. Nec ea liber facete, id movet eligendi mei, noluisse recusabo definiebas cum at. Eos ut adhuc repudiandae theophrastus, usu cu ludus appellantur. Eum in virtute indoctum moderatius, nostrum erroribus an vis.</p>\r\n\r\n<p>Quas legimus ad his, nobis nonumy mollis qui an. Mea ei ridens eirmod, decore intellegebat mel id. In sed suas quaeque. Id mei quis viris persecuti, ut per assum debitis mnesarchum. Ut has tempor debitis deterruisset.</p>\r\n\r\n<p>Et errem democritum conclusionemque nam, iusto everti blandit vis at. Quas aliquam disputationi ad pri, ius quot nostrud voluptatum an. Odio mediocrem ea per, cu amet graecis mea. Falli omittantur adversarium his an, id mea esse malorum, eu vel regione alterum delenit. Mea an nihil principes, qui te justo inimicus adversarium.</p>\r\n\r\n<p>Quo.</p>\r\n'),
(16, 'April-10-2018 15:18:01', 'laptop', 'jai', '679140.png', 'post 8', '<p>Lorem ipsum dolor sit amet, in augue intellegebat his, ex qui gubergren evertitur. Et vivendum probatus vim. Eum corrumpit interesset ex, qui an eros eirmod aliquam. Sea aeque clita definitiones te. Scripta delicatissimi vis id. Ex zril prompta nonumes nec, te eos accusamus reformidans.</p>\r\n\r\n<p>Vel ea habeo error graece, cu his iisque qualisque voluptatum. Sonet elitr ne eum. Illum periculis cu ius, hinc purto paulo pro ad, eu quo solet tritani ullamcorper. Quando ornatus comprehensam vel ei. Te summo noluisse legendos sed, ad case altera vim.</p>\r\n\r\n<p>Nominati laboramus cotidieque cu sed, commune instructior vis ei, at sed cetero voluptua. Ei doming diceret qui, omnes veniam melius eu sed. Nobis dolorem deterruisset ius ad. Pri luptatum gubergren ad. Et graeco omnium est, ei mei dicit clita equidem. Est eu invidunt ocurreret rationibus.</p>\r\n\r\n<p>Vix an enim tota scripserit, his ex veniam expetenda, cu vel utroque cotidieque signiferumque. Cum nominati expetenda et, at nec eros definiebas disputationi, eam fierent liberavisse ea. Quo sapientem reprehendunt ne, suas duis sententiae an ius. Ne quo facer putant, no ignota convenire sit. Usu legendos sensibus temporibus ei. Pri cu essent pertinacia eloquentiam, eam alia nobis equidem at.</p>\r\n\r\n<p>Eum ne porro dicit civibus. Nam percipitur interpretaris ea, no est meis adipisci. Ea eruditi pertinax inciderint vis, ut voluptaria dissentias definitionem eum. Vis ne legendos sententiae, cu his odio dicta veritus, qui ne mutat homero. Munere docendi nostrum est ne, volumus recusabo efficiendi at qui. Has autem mandamus signiferumque no, tantas debitis duo et.</p>\r\n\r\n<p>Vidisse accumsan assueverit ne duo. Sed ut essent nostro expetendis. Has duis mazim dolore eu, no clita omnium perfecto cum. Wisi legere moderatius ut cum, summo meliore noluisse eam te. Copiosae percipit menandri sed et.</p>\r\n\r\n<p>Idque mandamus id qui, quodsi fierent suscipit ea usu. Cu omnium docendi omittantur ius. Eam qualisque quaerendum scribentur ex. Quando tibique singulis has ad. Ad modo apeirian eleifend vel. Nec eu fabellas sensibus, vocent consequuntur est ut.</p>\r\n\r\n<p>No sale rebum voluptatibus est, sea possim expetenda te, summo errem contentiones no has. Cetero concludaturque vituperatoribus eos an. Verterem consectetuer sed ne. Ad legendos suavitate eos, regione contentiones nec an.</p>\r\n\r\n<p>Ea has salutandi maluisset, ea dignissim scriptorem est, nec solum omnes eu. Tollit euismod aliquid mea ei, persius sententiae qui ei. Quo ancillae platonem et. Nec an numquam delicatissimi, in duo nulla persius. Nec ea liber facete, id movet eligendi mei, noluisse recusabo definiebas cum at. Eos ut adhuc repudiandae theophrastus, usu cu ludus appellantur. Eum in virtute indoctum moderatius, nostrum erroribus an vis.</p>\r\n\r\n<p>Quas legimus ad his, nobis nonumy mollis qui an. Mea ei ridens eirmod, decore intellegebat mel id. In sed suas quaeque. Id mei quis viris persecuti, ut per assum debitis mnesarchum. Ut has tempor debitis deterruisset.</p>\r\n\r\n<p>Et errem democritum conclusionemque nam, iusto everti blandit vis at. Quas aliquam disputationi ad pri, ius quot nostrud voluptatum an. Odio mediocrem ea per, cu amet graecis mea. Falli omittantur adversarium his an, id mea esse malorum, eu vel regione alterum delenit. Mea an nihil principes, qui te justo inimicus adversarium.</p>\r\n\r\n<p>Quo.</p>\r\n'),
(19, 'April-10-2018 15:30:00', 'Python', 'jai', '679140.png', 'Post 9', '<p>Lorem ipsum dolor sit amet, in augue intellegebat his, ex qui gubergren evertitur. Et vivendum probatus vim. Eum corrumpit interesset ex, qui an eros eirmod aliquam. Sea aeque clita definitiones te. Scripta delicatissimi vis id. Ex zril prompta nonumes nec, te eos accusamus reformidans.</p>\r\n\r\n<p>Vel ea habeo error graece, cu his iisque qualisque voluptatum. Sonet elitr ne eum. Illum periculis cu ius, hinc purto paulo pro ad, eu quo solet tritani ullamcorper. Quando ornatus comprehensam vel ei. Te summo noluisse legendos sed, ad case altera vim.</p>\r\n\r\n<p>Nominati laboramus cotidieque cu sed, commune instructior vis ei, at sed cetero voluptua. Ei doming diceret qui, omnes veniam melius eu sed. Nobis dolorem deterruisset ius ad. Pri luptatum gubergren ad. Et graeco omnium est, ei mei dicit clita equidem. Est eu invidunt ocurreret rationibus.</p>\r\n\r\n<p>Vix an enim tota scripserit, his ex veniam expetenda, cu vel utroque cotidieque signiferumque. Cum nominati expetenda et, at nec eros definiebas disputationi, eam fierent liberavisse ea. Quo sapientem reprehendunt ne, suas duis sententiae an ius. Ne quo facer putant, no ignota convenire sit. Usu legendos sensibus temporibus ei. Pri cu essent pertinacia eloquentiam, eam alia nobis equidem at.</p>\r\n\r\n<p>Eum ne porro dicit civibus. Nam percipitur interpretaris ea, no est meis adipisci. Ea eruditi pertinax inciderint vis, ut voluptaria dissentias definitionem eum. Vis ne legendos sententiae, cu his odio dicta veritus, qui ne mutat homero. Munere docendi nostrum est ne, volumus recusabo efficiendi at qui. Has autem mandamus signiferumque no, tantas debitis duo et.</p>\r\n\r\n<p>Vidisse accumsan assueverit ne duo. Sed ut essent nostro expetendis. Has duis mazim dolore eu, no clita omnium perfecto cum. Wisi legere moderatius ut cum, summo meliore noluisse eam te. Copiosae percipit menandri sed et.</p>\r\n\r\n<p>Idque mandamus id qui, quodsi fierent suscipit ea usu. Cu omnium docendi omittantur ius. Eam qualisque quaerendum scribentur ex. Quando tibique singulis has ad. Ad modo apeirian eleifend vel. Nec eu fabellas sensibus, vocent consequuntur est ut.</p>\r\n\r\n<p>No sale rebum voluptatibus est, sea possim expetenda te, summo errem contentiones no has. Cetero concludaturque vituperatoribus eos an. Verterem consectetuer sed ne. Ad legendos suavitate eos, regione contentiones nec an.</p>\r\n\r\n<p>Ea has salutandi maluisset, ea dignissim scriptorem est, nec solum omnes eu. Tollit euismod aliquid mea ei, persius sententiae qui ei. Quo ancillae platonem et. Nec an numquam delicatissimi, in duo nulla persius. Nec ea liber facete, id movet eligendi mei, noluisse recusabo definiebas cum at. Eos ut adhuc repudiandae theophrastus, usu cu ludus appellantur. Eum in virtute indoctum moderatius, nostrum erroribus an vis.</p>\r\n\r\n<p>Quas legimus ad his, nobis nonumy mollis qui an. Mea ei ridens eirmod, decore intellegebat mel id. In sed suas quaeque. Id mei quis viris persecuti, ut per assum debitis mnesarchum. Ut has tempor debitis deterruisset.</p>\r\n\r\n<p>Et errem democritum conclusionemque nam, iusto everti blandit vis at. Quas aliquam disputationi ad pri, ius quot nostrud voluptatum an. Odio mediocrem ea per, cu amet graecis mea. Falli omittantur adversarium his an, id mea esse malorum, eu vel regione alterum delenit. Mea an nihil principes, qui te justo inimicus adversarium.</p>\r\n\r\n<p>Quo.</p>\r\n'),
(20, 'April-10-2018 15:30:13', 'Python', 'jai', '679140.png', 'Post 10', '<p>Lorem ipsum dolor sit amet, in augue intellegebat his, ex qui gubergren evertitur. Et vivendum probatus vim. Eum corrumpit interesset ex, qui an eros eirmod aliquam. Sea aeque clita definitiones te. Scripta delicatissimi vis id. Ex zril prompta nonumes nec, te eos accusamus reformidans.</p>\r\n\r\n<p>Vel ea habeo error graece, cu his iisque qualisque voluptatum. Sonet elitr ne eum. Illum periculis cu ius, hinc purto paulo pro ad, eu quo solet tritani ullamcorper. Quando ornatus comprehensam vel ei. Te summo noluisse legendos sed, ad case altera vim.</p>\r\n\r\n<p>Nominati laboramus cotidieque cu sed, commune instructior vis ei, at sed cetero voluptua. Ei doming diceret qui, omnes veniam melius eu sed. Nobis dolorem deterruisset ius ad. Pri luptatum gubergren ad. Et graeco omnium est, ei mei dicit clita equidem. Est eu invidunt ocurreret rationibus.</p>\r\n\r\n<p>Vix an enim tota scripserit, his ex veniam expetenda, cu vel utroque cotidieque signiferumque. Cum nominati expetenda et, at nec eros definiebas disputationi, eam fierent liberavisse ea. Quo sapientem reprehendunt ne, suas duis sententiae an ius. Ne quo facer putant, no ignota convenire sit. Usu legendos sensibus temporibus ei. Pri cu essent pertinacia eloquentiam, eam alia nobis equidem at.</p>\r\n\r\n<p>Eum ne porro dicit civibus. Nam percipitur interpretaris ea, no est meis adipisci. Ea eruditi pertinax inciderint vis, ut voluptaria dissentias definitionem eum. Vis ne legendos sententiae, cu his odio dicta veritus, qui ne mutat homero. Munere docendi nostrum est ne, volumus recusabo efficiendi at qui. Has autem mandamus signiferumque no, tantas debitis duo et.</p>\r\n\r\n<p>Vidisse accumsan assueverit ne duo. Sed ut essent nostro expetendis. Has duis mazim dolore eu, no clita omnium perfecto cum. Wisi legere moderatius ut cum, summo meliore noluisse eam te. Copiosae percipit menandri sed et.</p>\r\n\r\n<p>Idque mandamus id qui, quodsi fierent suscipit ea usu. Cu omnium docendi omittantur ius. Eam qualisque quaerendum scribentur ex. Quando tibique singulis has ad. Ad modo apeirian eleifend vel. Nec eu fabellas sensibus, vocent consequuntur est ut.</p>\r\n\r\n<p>No sale rebum voluptatibus est, sea possim expetenda te, summo errem contentiones no has. Cetero concludaturque vituperatoribus eos an. Verterem consectetuer sed ne. Ad legendos suavitate eos, regione contentiones nec an.</p>\r\n\r\n<p>Ea has salutandi maluisset, ea dignissim scriptorem est, nec solum omnes eu. Tollit euismod aliquid mea ei, persius sententiae qui ei. Quo ancillae platonem et. Nec an numquam delicatissimi, in duo nulla persius. Nec ea liber facete, id movet eligendi mei, noluisse recusabo definiebas cum at. Eos ut adhuc repudiandae theophrastus, usu cu ludus appellantur. Eum in virtute indoctum moderatius, nostrum erroribus an vis.</p>\r\n\r\n<p>Quas legimus ad his, nobis nonumy mollis qui an. Mea ei ridens eirmod, decore intellegebat mel id. In sed suas quaeque. Id mei quis viris persecuti, ut per assum debitis mnesarchum. Ut has tempor debitis deterruisset.</p>\r\n\r\n<p>Et errem democritum conclusionemque nam, iusto everti blandit vis at. Quas aliquam disputationi ad pri, ius quot nostrud voluptatum an. Odio mediocrem ea per, cu amet graecis mea. Falli omittantur adversarium his an, id mea esse malorum, eu vel regione alterum delenit. Mea an nihil principes, qui te justo inimicus adversarium.</p>\r\n\r\n<p>Quo.</p>\r\n'),
(21, 'April-21-2018 22:59:49', 'Python', 'jai', '511052.jpg', 'Latest Post demo purpose', '<p>ZTE launched the Blade V8 approximately a yr ago, bringing twin-cameras and an octa-center processor to its mid-variety line ofZTE launched the Blade V8 approximately a yr ago, bringing twin-cameras and an octa-center processor to its mid-variety line ofZTE launched the Blade V8 approximately a yr ago, bringing twin-cameras and an octa-center processor to its mid-variety line of</p>\r\n'),
(22, 'April-21-2018 22:59:25', 'Python', 'jai', '511052.jpg', 'Nokia 9 full review and unboxing', '<p>ZTE launched the Blade V8 approximately a yr ago, bringing twin-cameras and an octa-center processor to its mid-variety line ofZTE launched the Blade V8 approximately a yr ago, bringing twin-cameras and an octa-center processor to its mid-variety line ofZTE launched the Blade V8 approximately a yr ago, bringing twin-cameras and an octa-center processor to its mid-variety line of</p>\r\n'),
(23, 'April-21-2018 22:58:59', 'Python', 'jai', '665091.jpg', 'new Post Demo purpose', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ligula diam, luctus eget libero id, finibus tristique elit. Fusce rutrum feugiat ante ac aliquam. Morbi hendrerit dolor ac fermentum varius. Fusce sapien ante, pulvinar et lectus eu, placerat elementum ligula. Nulla semper a diam nec fermentum. Vestibulum id nisl eget ante dictum bibendum id in felis. In eleifend viverra purus, sit amet lacinia erat tempor sit amet.</p>\r\n\r\n<p>Praesent eu consectetur nulla. Vestibulum pharetra ante ac bibendum sollicitudin. Aenean in lobortis dui. Donec accumsan, ante ac dictum egestas, lacus nisi sodales tortor, vel pulvinar odio felis sit amet eros. Sed mattis, ex quis hendrerit sollicitudin, ipsum dolor iaculis tortor, eget semper massa justo id odio. Nunc eget interdum lacus, pharetra accumsan nunc. Sed eu dapibus ex, ut malesuada nisi.</p>\r\n\r\n<p>Sed massa nisi, placerat eget tincidunt nec, dapibus quis velit. Nam fermentum mi et tortor tincidunt, et dignissim purus feugiat. Integer placerat massa vel lorem maximus, a facilisis nisl ultrices. Nam aliquam efficitur fringilla. In vel lacus a turpis finibus molestie. Phasellus finibus tincidunt augue. Aenean malesuada tortor risus, in consequat eros cursus at. Nulla finibus rutrum lorem, in mollis est mollis ut.</p>\r\n\r\n<p>Donec dictum diam id elit lacinia mollis. Nullam tincidunt est nec sodales euismod. Aenean sit amet sapien et metus consectetur condimentum. In porta lectus sit amet justo fermentum mollis. Praesent vitae odio ultricies, ultrices urna in, sagittis magna. Phasellus aliquam accumsan vestibulum. In dictum quis orci hendrerit condimentum. Phasellus tortor velit, tempus eget justo luctus, dictum vulputate ante. In ultricies tempor urna sed vestibulum. Pellentesque lacinia fringilla tincidunt.</p>\r\n\r\n<p>Aliquam pulvinar varius porta. Cras suscipit maximus risus, non imperdiet nisi scelerisque in. Nullam et consequat lacus, bibendum facilisis diam. Aliquam ultrices consequat orci, sit amet placerat enim tincidunt vitae. Vivamus leo nisl, elementum eu metus sed, convallis malesuada velit. Fusce vitae elementum neque, sit amet malesuada odio. Curabitur eget tortor ac ex feugiat ultrices non eget odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi luctus, dui id mattis posuere, felis nibh sodales diam, in eleifend lacus nunc in urna. Aenean scelerisque massa interdum orci imperdiet semper. Mauris eu porta augue.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(100) NOT NULL,
  `side` varchar(1000) NOT NULL,
  `inter` varchar(1000) NOT NULL,
  `footer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `side`, `inter`, `footer`) VALUES
(1, '<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- Auto-ads -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-8590498203831663\"\r\n     data-ad-slot=\"3428849361\"\r\n     data-ad-format=\"auto\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>\r\n', '<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- Auto-ads -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-8590498203831663\"\r\n     data-ad-slot=\"3428849361\"\r\n     data-ad-format=\"auto\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>\r\n', '<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- Auto-ads -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-8590498203831663\"\r\n     data-ad-slot=\"3428849361\"\r\n     data-ad-format=\"auto\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `creatorname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `datetime`, `creatorname`) VALUES
(2, 'html', 'March-22-2018 22:28:08', 'jai'),
(3, 'css', 'March-22-2018 22:28:12', 'jai'),
(4, 'php', 'March-22-2018 22:28:16', 'jai'),
(5, 'javascript', 'March-22-2018 22:28:23', 'jai'),
(6, 'Python', 'March-25-2018 21:22:09', 'jai'),
(7, 'laptop', 'April-05-2018 18:24:08', 'jai'),
(8, 'ruby', 'April-08-2018 22:50:33', 'kota'),
(9, 'Visual Basic', 'April-08-2018 23:40:14', 'kota');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(100) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `approver` varchar(100) NOT NULL,
  `post_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `datetime`, `name`, `email`, `comment`, `approver`, `post_id`, `status`) VALUES
(9, 'April-10-2018 15:31:16', 'jai', 'jaib5053@gmail.com', 'Nice Post', 'jai', 11, 'ON'),
(10, 'April-10-2018 15:31:45', 'Ankit', 'jaib5053@gmail.com', 'Great Work', 'jai', 20, 'ON'),
(11, 'April-10-2018 15:32:11', 'Kota', 'kota@gmail.com', 'Amazing Post', 'jai', 19, 'ON'),
(12, 'April-10-2018 15:32:50', 'Abc', 'aaaaa@gmail.com', 'Nice Article!', 'jai', 20, 'ON'),
(13, 'April-12-2018 17:01:41', 'aaaaa', 'aaaaa@gmail.com', '', 'pending', 20, 'OFF'),
(14, 'April-17-2018 13:16:17', 'jai', 'jaib5053@gmail.com', 'ssssssssssssssssssssssssssssssssss', 'jai', 23, 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(100) NOT NULL,
  `disclaimer` mediumtext NOT NULL,
  `termsofuse` mediumtext NOT NULL,
  `privacypolicy` mediumtext NOT NULL,
  `aboutus` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `disclaimer`, `termsofuse`, `privacypolicy`, `aboutus`) VALUES
(1, '<p>disclaimers</p>\r\n', '<p>terms of use</p>\r\n', '<p>privacy policy</p>\r\n', '<p>about us</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `discription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `caption`, `discription`) VALUES
(1, 'businessman-3213659_1920.jpg', 'Web Designing', 'Web Designing is the forte of ligne infotech. We donâ€™t lock you into stereotyped templates. We always create it simply the manner you wish it. '),
(2, '1.jpg', 'Web Development', 'Jai infotech are a team of skilled, techy, intelligent software developers. We worked with the futuristic technologies.      '),
(3, '3.jpg', 'Social Media Marketing', 'In Social Media Marketing we adopt a result oriented approach to take our client business to a different level. We always use different tools to achieve best result.'),
(4, '2.png', 'Mobile Application Development ', 'Mobile Application Development has become a rage since few years and currently itâ€™s become additional of a necessity. We ligne infotech build innovative and interactive mobile applications. ');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(100) NOT NULL,
  `facebook` varchar(1000) NOT NULL,
  `instagram` varchar(1000) NOT NULL,
  `twitter` varchar(1000) NOT NULL,
  `google` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `facebook`, `instagram`, `twitter`, `google`) VALUES
(1, 'www.facebook.com/ankit.bakshitte', 'www.instagram.com/ankit5053', 'www.twitter.com', 'www.plus.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(100) NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `url`) VALUES
(1, 'https://www.youtube.com/embed/ru_5PA8cwkE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `admin_panel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
