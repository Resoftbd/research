-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 03:45 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `aim`
--

CREATE TABLE `aim` (
  `aim_id` int(11) NOT NULL,
  `aim_text` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aim`
--

INSERT INTO `aim` (`aim_id`, `aim_text`) VALUES
(1, 'The Global Social Media Impact Study aims to study and report on the use and consequences of sociaal media for peoples all around the world.');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_date` date NOT NULL,
  `blog_headline` text CHARACTER SET utf8 NOT NULL,
  `blog_text` text CHARACTER SET utf8 NOT NULL,
  `blog_photo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_date`, `blog_headline`, `blog_text`, `blog_photo`) VALUES
(6, '0000-00-00', 'ggio25t45tw 4rt45t4 w5twer tttttttttttt ttttttttttttt', '*Give proper title, tags and add a relevant photo to your post. All these will help you to get more traffic to your web site.*Give proper title, tags and add a relevant photo to your post. All these will help you to get more traffic to your web site.*Give proper title, tags and add a relevant photo to your post. All these will help you to get more traffic to your web site.*Give proper title, tags and add a relevant photo to your post. All these will help you to get more traffic to your web site.*Give proper title, tags and add a relevant photo to your post. All these will help you to get more traffic to your web site.*Give proper title, tags and add a relevant photo to your post. All these will help you to get more traffic to your web site.*Give proper title, ', ''),
(7, '0000-00-00', 'how are you??', 'gcgcgcg sdasdf asdfad fadfa sdfasdf asdfa sdfad fasdf asdf asdf adfa sdf\r\nasd fasdfa dfasdfa sdfas\r\ndasdf asdfa\r\nasdf asdfa asdfasd gcgcgcg sdasdf asdfad fadfa sdfasdf asdfa sdfad fasdf asdf asdf adfa sdf\r\nasd fasdfa dfasdfa sdfas\r\ndasdf asdfa  gcgcgcg sdasdf asdfad fadfa sdfasdf asdfa sdfad fasdf asdf asdf adfa sdf\r\nasd fasdfa dfasdfa sdfas\r\ndasdf asdfa\r\nasdf asdfa asdfasd gcgcgcg sdasdf asdfad fadfa sdfasdf asdfa sdfad fasdf asdf asdf adfa sdf\r\nasd fasdfa dfasdfa sdfas\r\ndasdf asdfa gcgcgcg sdasdf asdfad fadfa sdfasdf asdfa sdfad fasdf asdf asdf adfa sdf\r\nasd fasdfa dfasdfa sdfas\r\ndasdf asdfa\r\nasdf asdfa asdfasd gcgcgcg sdasdf asdfad fadfa sdfasdf asdfa sdfad fasdf asdf asdf adfa sdf\r\nasd fasdfa dfasdfa sdfas\r\ndasdf asdfa gcgcgcg sdasdf asdfad fadfa sdfasdf asdfa sdfad fasdf asdf asdf adfa sdf\r\nasd fasdfa dfasdfa sdfas\r\ndasdf asdfa\r\nasdf asdfa asdfasd gcgcgcg sdasdf asdfad fadfa sdfasdf asdfa sdfad fasdf asdf asdf adfa sdf\r\n\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_parent` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_parent`) VALUES
(22, 'Science', 0),
(24, 'Main', 0),
(23, 'Biological Science', 22),
(25, 'Sub', 24);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_general_inquiries` text NOT NULL,
  `contact_website` text NOT NULL,
  `contact_getting_involved` text NOT NULL,
  `contact_write_to_us` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_cell` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_general_inquiries`, `contact_website`, `contact_getting_involved`, `contact_write_to_us`, `contact_email`, `contact_cell`) VALUES
(1, 'For enquiries regarding the project, please contact <a href="d.miller@ucl.ac.uk">d.miller@ucl.ac.uk</a>.....................................', 'Enquiries relating to this website should be directed to <a href="tom.mcdonald@ucl.ac.uk">tom.mcdonald@ucl.ac.uk</a>...', 'We are always interested in working with committed individuals with interests and previous expertise in areas such as anthropology, ethnography, social media, film or dissemination who are willing to donate their time to contribute to this exciting project. If you are interested in getting involved, please contact <a href="r. nicolescu@ucl.ac.uk">r.nicolescu@ucl.ac.uk</a>.....', 'Global Social Media Impact Study\r\nUCL Department of Anthropology\r\n14 Taviton Street\r\nLondon\r\nWC1H 0BW', 'Email us anytime you feel to be in our touch\r\n<a href="rahulbgc21@gmail.com">rahulbgc21@gmail.com</a>\r\n<a href="saiful.bgc.cse@gmail.com">saiful.bgc.cse@gmail.com</a>..', '+8801674248402\r\n+8801822310961\r\n+8801846829091');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `email_id` int(11) NOT NULL,
  `email_name` text NOT NULL,
  `email_email` text NOT NULL,
  `email_password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`email_id`, `email_name`, `email_email`, `email_password`) VALUES
(1, 'Research Admin', 'xyz@gmail.com', 'xyzxyz');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` text CHARACTER SET utf8 NOT NULL,
  `event_date` date NOT NULL,
  `event_details` text CHARACTER SET utf8 NOT NULL,
  `event_place` text CHARACTER SET utf8 NOT NULL,
  `event_status` int(11) NOT NULL DEFAULT '0',
  `event_expired` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_date`, `event_details`, `event_place`, `event_status`, `event_expired`) VALUES
(12, 'Football matchmhfdgd', '2016-09-23', 'Goal!??????', 'Aziz Stadiumnv', 0, 0),
(14, 'Cricket Match', '2016-10-29', 'Free ticket ', 'Australia', 0, 0),
(15, 'Sleep', '2016-10-27', 'I am tired and want to sleep now', 'Ny home', 0, 0),
(17, 'bbbb', '2016-10-13', 'jjjjjjjjjjjjj', 'jjjjjjjjjj', 0, 0),
(18, 'guuu', '2016-10-14', 'cvbnm', 'fghj', 0, 0),
(20, 'hh', '2016-10-11', 'nnnn', 'b', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL COMMENT 'Upload Date',
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Unblock, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `created`, `modified`, `status`) VALUES
(36, '11.jpg', '2016-09-01 18:12:46', '2016-09-01 18:12:46', 1),
(37, '13.png', '2016-09-01 18:13:03', '2016-09-01 18:13:03', 1),
(38, '14.png', '2016-09-01 18:13:10', '2016-09-01 18:13:10', 1),
(39, '131.png', '2016-09-01 18:13:15', '2016-09-01 18:13:15', 1),
(40, '111.jpg', '2016-09-01 18:13:24', '2016-09-01 18:13:24', 1),
(41, '112.jpg', '2016-09-01 18:13:30', '2016-09-01 18:13:30', 1),
(42, '141.png', '2016-09-01 18:45:49', '2016-09-01 18:45:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `funding`
--

CREATE TABLE `funding` (
  `funding_sponsor_id` int(11) NOT NULL,
  `funding_sponsor_name` text CHARACTER SET utf8 NOT NULL,
  `funding_sponsor_logo` text CHARACTER SET utf8 NOT NULL,
  `funding_sponsor_contact` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funding`
--

INSERT INTO `funding` (`funding_sponsor_id`, `funding_sponsor_name`, `funding_sponsor_logo`, `funding_sponsor_contact`) VALUES
(9, 'BGC Trust', 'asset/upload/funding_logo/2402657d3becf14a97.jpg', ' hjcvdnxmx nmvch'),
(7, 'fgdgdffg', 'asset/upload/funding_logo/230057d3bd2323a83.jpg', 'fcdbdttndd '),
(8, 'fgffgfgfgfggfgfg', 'asset/upload/funding_logo/1933357d3beb6cbdc4.jpg', 'sdfghjkcvbnm'),
(10, 'jkbdfjkvbdfv', 'asset/upload/funding_logo/461957d3bedacb975.jpg', '  c cvnsd nc sdn v'),
(14, 'hhhhhhhhh', 'asset/upload/funding_logo/95805135b62e03.jpg', 'bvv'),
(13, 'gggggg', 'asset/upload/funding_logo/140957fff490f32f9.jpg', 'rahul');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `home_text` text CHARACTER SET utf8 NOT NULL,
  `home_title` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `home_text`, `home_title`) VALUES
(1, 'Please see our new website for the latest information on the Why We Post project.\r\n\r\nThe Global Social Media Impact Study based at the UCL Department of Anthropology is dedicated to understanding the implications of social networking sites for global humankind and society, and explaining their significance for the future of the social sciences........', 'One Step Ahead in Bio-Informatics!>>>>');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `link_id` int(11) NOT NULL,
  `link_facebook` varchar(200) DEFAULT NULL,
  `link_twitter` varchar(200) DEFAULT NULL,
  `link_google_plus` varchar(200) DEFAULT NULL,
  `link_linkedin` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`link_id`, `link_facebook`, `link_twitter`, `link_google_plus`, `link_linkedin`) VALUES
(1255, 'fb.com/rrajputro', 'twitter.com/saif.niloy2', 'google.com/gbss', 'linkedin/saif');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `logo_link` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo_link`) VALUES
(2, 'asset/upload/logo_link/3102157ffe2d4e7ba6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_date_and_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `news_headline` text CHARACTER SET utf8 NOT NULL,
  `news_text` text CHARACTER SET utf8 NOT NULL,
  `news_photo` text CHARACTER SET utf8
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_date_and_time`, `news_headline`, `news_text`, `news_photo`) VALUES
(61, '2016-10-14 11:31:25', 'Anthropology of Social Networking directory!', 'An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!', 'asset/upload/news_photo/696258011685a2abe.jpg'),
(62, '2016-10-16 11:47:35', 'Social networking  Anthropology of Social Networking directory!>>', 'An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking from around the world. An open resource listing anthropological projects focussing on social networking \r\nAnthropology of Social Networking directory!', 'asset/upload/news_photo/2151258011713a0a5b.png');

-- --------------------------------------------------------

--
-- Table structure for table `objective`
--

CREATE TABLE `objective` (
  `objective_id` int(11) NOT NULL,
  `objective_text` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objective`
--

INSERT INTO `objective` (`objective_id`, `objective_text`) VALUES
(25, 'To examine other possible welfare benefits, which in practice have ranged from the use of social media by the hospice movement in the UK to its impact on the restrictions traditionally experienced by women in certain societies.'),
(26, 'To consider the current state of the \'digital divide\' and how social media relates to the problems of low income populations and their welfare.'),
(27, 'To provide insights on what an in-depth ethnographic study of social media might bring to social science more generally. '),
(28, 'To explore the way social media has been used within institutions such as education, commerce, the state and religion.'),
(29, 'To examine how social media has impacted upon key issues such as politics and privacy.........');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_title` text NOT NULL,
  `project_member` text NOT NULL,
  `project_start_date` date NOT NULL,
  `project_end_date` date NOT NULL,
  `project_funding` text NOT NULL,
  `project_remarks` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_title`, `project_member`, `project_start_date`, `project_end_date`, `project_funding`, `project_remarks`) VALUES
(2, 'Hellloooooooo', 'Saiful Islam', '2016-10-07', '2016-10-08', 'Funded by google<br>\r\nand microsoft<br>\r\nAmount Of Fund: 124556k', 'ddgd');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `publication_id` int(11) NOT NULL,
  `publication_title` text CHARACTER SET utf8 NOT NULL,
  `publication_summary` text CHARACTER SET utf8 NOT NULL,
  `publication_type` text CHARACTER SET utf8 NOT NULL,
  `publication_isbn_13` text CHARACTER SET utf8 NOT NULL,
  `publication_book_title` text CHARACTER SET utf8 NOT NULL,
  `publication_about_url` text CHARACTER SET utf8 NOT NULL,
  `publication_language` text CHARACTER SET utf8 NOT NULL,
  `publication_additional_information` text CHARACTER SET utf8 NOT NULL,
  `publication_classification` text CHARACTER SET utf8 NOT NULL,
  `publication_open_access` int(11) DEFAULT '1',
  `publication_download_link` text NOT NULL,
  `publication_file` text CHARACTER SET utf8 NOT NULL,
  `publication_category_fkey` int(11) NOT NULL,
  `publication_subcategory_fkey` int(11) NOT NULL,
  `publication_date` date NOT NULL,
  `publication_month` int(11) NOT NULL,
  `publication_year` int(11) NOT NULL,
  `publication_author` text CHARACTER SET ucs2 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`publication_id`, `publication_title`, `publication_summary`, `publication_type`, `publication_isbn_13`, `publication_book_title`, `publication_about_url`, `publication_language`, `publication_additional_information`, `publication_classification`, `publication_open_access`, `publication_download_link`, `publication_file`, `publication_category_fkey`, `publication_subcategory_fkey`, `publication_date`, `publication_month`, `publication_year`, `publication_author`) VALUES
(27, 'Gorar dim', '       ghf', 'hfyfhf', 'fh', 'hjf', '', 'hjf', 'hhf', '', NULL, '', 'asset/upload/publication_file/818957ffca2049976.docx', 21, 0, '2016-10-17', 10, 2016, 'Aditri Maamoni'),
(28, 'Secret behind Genes', '   The publication summary briefs about the publication shortly that doesn\'t expose any confidentiality of the publication but let the user understand the whereabouts.', 'Book', '14523-4556321-UHGH', 'THE BOOK', '', 'English', '1. It says all.<br>\r\n2. It doesn\'t let you be bored.<br>\r\n3. It\'s nice. Give a try.<br>', '', NULL, '', 'asset/upload/publication_file/2643557ffcb18c345b.docx', 23, 0, '2016-10-01', 10, 2016, 'Shuvashish Vattacharje,Saiful Islam');

-- --------------------------------------------------------

--
-- Table structure for table `researcher`
--

CREATE TABLE `researcher` (
  `researcher_id` int(11) NOT NULL,
  `researcher_username` text NOT NULL,
  `researcher_name` text NOT NULL,
  `researcher_photo` text NOT NULL,
  `researcher_designation` int(11) NOT NULL DEFAULT '0',
  `researcher_country` varchar(200) NOT NULL,
  `researcher_email` varchar(200) NOT NULL,
  `researcher_password` varchar(200) NOT NULL,
  `researcher_address` text NOT NULL,
  `researcher_join_date` date NOT NULL,
  `researcher_bio` text NOT NULL,
  `researcher_about` text NOT NULL,
  `researcher_publications` text NOT NULL,
  `researcher_projects` text NOT NULL,
  `researcher_others` text NOT NULL,
  `researcher_designation_post` varchar(200) NOT NULL,
  `researcher_phone` varchar(200) NOT NULL,
  `researcher_facebook_link` varchar(200) NOT NULL,
  `researcher_linkedin_link` varchar(200) NOT NULL,
  `researcher_fieldsite` text CHARACTER SET ucs2 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researcher`
--

INSERT INTO `researcher` (`researcher_id`, `researcher_username`, `researcher_name`, `researcher_photo`, `researcher_designation`, `researcher_country`, `researcher_email`, `researcher_password`, `researcher_address`, `researcher_join_date`, `researcher_bio`, `researcher_about`, `researcher_publications`, `researcher_projects`, `researcher_others`, `researcher_designation_post`, `researcher_phone`, `researcher_facebook_link`, `researcher_linkedin_link`, `researcher_fieldsite`) VALUES
(110, 'aditri', 'Aditri Maamoni', 'asset/upload/researcher_photo/1472657d3c1c69e414.JPG', 1, 'Bangladesh', 'aoyan18@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 'BH FBHJDSBF,\'\r\nDFDSDDSFSDDSFDS,DSFSD\r\nDSFDS.SDFSDF.\r\n,DSF', '2016-09-25', 'JHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDF', 'JHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFjjj', 'JHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDF', 'JHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDF', 'JHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDFJHVSAHVDVASHJVDASFASDV HH SHJADVASHJD JASHJAS DHASDVSJ DHDS FHJSDVFDG DFHG DFHG DFGHVG FJD DFHJSG FDJHG DFSG DFSG DFHS DFJS GDFS GDF SH SGDFSHJDFSV HFDS SJ SJ DFSDF', 'Senior Exhibitor', '01674248402', 'https://www.facebook.com/', 'linkedin.com/gdfgdgch', 'Biological Science'),
(105, 'shuvashish', 'Shuvashish Vattacharje', 'asset/upload/researcher_photo/2542657cacf3ab161e.JPG', 1, 'India', 'shuvashish@galagali.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '0000-00-00', 'I manage the Quantum Architectures and Computation Group (QuArC) at Microsoft Research in Redmond, WA.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. I manage the Quantum Architectures and Computation Group (QuArC) at Microsoft Research in Redmond, WA. I am passionate about quantum computation and determining how to better solve problems on a quantum computer.  My research focuses on quantum algorithms and how to implement them on a quantum device, from how to code them in a high-level programming language, to how to optimize the resources they require, to how to implement them in hardware.  Our team also works on designing a scalable, fault-tolerant software architecture for translating a high-level quantum program into a low-level, device-specific quantum implementation, which we call LIQUi|>; (pronounced “liquid”, language-integrated quantum operations).  We work in collaboration with Microsoft Station Q, Microsoft Research’s center for topological quantum computation.', '', '', '', '', '', '', '', ''),
(120, 'saifbgc', 'Saiful Islam', 'asset/upload/researcher_photo/358957ffcfe70cc15.jpg', 0, '', 'saif@gmail.com', 'c1c4365ea5c253e8d814bf212c037b40', '', '0000-00-00', 'Nothing to show', '', '', '', '', '', '', '', '', ''),
(119, 'vvvvvvvvvvvvv', 'vvvvvvvvvv', 'asset/upload/researcher_photo/254057ffcfbf8cd52.jpg', 0, '', 'vvvvvvvv@vvvvvvvvvvvv', '93656d3e8b20783e498522df4c0c7492', '', '0000-00-00', 'Nothing to show', '', '', '', '', '', '', '', '', ''),
(121, 'fghfghf', 'fgfghfg', 'asset/upload/researcher_photo/539557ffd008ce93f.jpg', 0, '', 'dgdghdfg@gfghdfg', '040b7cf4a55014e185813e0644502ea9', '', '0000-00-00', 'Nothing to show', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `slideshow_id` int(11) NOT NULL,
  `slideshow_photo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`slideshow_id`, `slideshow_photo`) VALUES
(42, 'asset/upload/slide/2349058050b2e0ba52.png'),
(31, 'asset/upload/slide/1499757cd01c47e0a8.jpg'),
(29, 'asset/upload/slide/971157ccfff877792.jpg'),
(28, 'asset/upload/slide/3135957ccffeebf908.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `timeline_id` int(11) NOT NULL,
  `timeline_start_date` text NOT NULL,
  `timeline_activity` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`timeline_id`, `timeline_start_date`, `timeline_activity`) VALUES
(54, '2016-11-30', 'Project ends '),
(62, '2016-10-20', 'sdfghjk'),
(61, '2016-10-20', 'hhvhgkgkjg'),
(52, '2016-10-19', 'Ethnographic fieldwork starts in fieldsites around the world'),
(59, '2016-10-18', 'nnnn'),
(63, '2016-10-17', 'jkkk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aim`
--
ALTER TABLE `aim`
  ADD PRIMARY KEY (`aim_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funding`
--
ALTER TABLE `funding`
  ADD PRIMARY KEY (`funding_sponsor_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `objective`
--
ALTER TABLE `objective`
  ADD PRIMARY KEY (`objective_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`publication_id`);

--
-- Indexes for table `researcher`
--
ALTER TABLE `researcher`
  ADD PRIMARY KEY (`researcher_id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`slideshow_id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`timeline_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aim`
--
ALTER TABLE `aim`
  MODIFY `aim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `funding`
--
ALTER TABLE `funding`
  MODIFY `funding_sponsor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1256;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `objective`
--
ALTER TABLE `objective`
  MODIFY `objective_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `publication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `researcher`
--
ALTER TABLE `researcher`
  MODIFY `researcher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `slideshow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `timeline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
