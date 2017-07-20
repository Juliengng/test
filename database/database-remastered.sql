
-- --------------------------------------------------------

--
-- Structure de la table `ambassador`
--

CREATE TABLE IF NOT EXISTS `ambassador` (
  `AmbUsrName` varchar(50) NOT NULL,
  `AmbPassword` varchar(255) NOT NULL,
  `AmbProfilePic` varchar(255),
  `AmbEmail` varchar(255) NOT NULL,
  `Ambapproved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`AmbUsrName`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `ambassador`
--

INSERT INTO `ambassador` (`AmbUsrName`, `AmbPassword`, `AmbProfilePic`, `AmbEmail`, `Ambapproved`) VALUES
('AmbTammy', 'Aa123123', '', 'tammy@gmail.com', 1),
('bbchuQQ', 'Aa123123', '', '123123@gmail.com', 0),
('HAHA1some@mail.com', 'HAHA1some@mail.c', '', 'HAHA1some@mail.com', 0),
('jimmmmmmy', 'Aa123123', '', '123123@gmail.com', 1),
('joejune', 'Alexjoe238', '', 'joe-a238@gmail.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `amb_personal_info`
--

CREATE TABLE IF NOT EXISTS `amb_personal_info` (
  `AmbUsrName` varchar(50) NOT NULL,
  `GivenName` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `MailingAddress` varchar(255) NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `SkypeAccount` varchar(50) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  PRIMARY KEY (`AmbUsrName`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `amb_personal_info`
--

INSERT INTO `amb_personal_info` (`AmbUsrName`, `GivenName`, `Surname`, `Gender`, `DateOfBirth`, `Nationality`, `MailingAddress`, `ContactNumber`, `SkypeAccount`, `Occupation`) VALUES
('AmbTammy', 'Tammy', 'Chau', 'female', '1993-01-01', 'Hong Kong', 'HK Address', '+852 66666666', 'Tammy', '0'),
('HAHA1some@mail.com', 'given', 'surn', 'female', '1975-12-30', 'nat', 'mail', 'num', 'skype', 'jobs'),
('jimmmmmmy', '13213213213', '213213213', 'male', '1982-10-01', 'Brazil', '123 address ', '213213', 'Skype321', '213'),
('joejune', 'Joey', 'Alexandra', 'female', '1972-01-07', 'American', '1293, Main St, Alexandria, Hanson, South Dakota', '+1231 941 4564', 'alexjoey238', 'Clerk');

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `StuUsrName` varchar(50) NOT NULL,
  `InternshipID` int(11) NOT NULL,
  `match` int(11) DEFAULT NULL,
  `status` enum('Processing','Waiting List','Rejected','Accepted') NOT NULL,
  PRIMARY KEY (`StuUsrName`,`InternshipID`),
  KEY `application_ibfk_2` (`InternshipID`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `application`
--

INSERT INTO `application` (`StuUsrName`, `InternshipID`, `match`, `status`) VALUES
('JohnDoe', 69, 57, 'Processing'),
('StudentName', 69, 71, 'Processing');

-- --------------------------------------------------------

--
-- Structure de la table `boardingates`
--

CREATE TABLE IF NOT EXISTS `boardingates` (
  `AdminUsrName` varchar(50) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminProfilePic` varchar(255) NOT NULL,
  PRIMARY KEY (`AdminUsrName`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `CountryID` int(11) NOT NULL AUTO_INCREMENT,
  `CountryCode` char(3) NOT NULL,
  `CountryName` varchar(100) NOT NULL,
  PRIMARY KEY (`CountryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=64 ;

--
-- Contenu de la table `country`
--

INSERT INTO `country` (`CountryID`, `CountryCode`, `CountryName`) VALUES
(1, 'ARG', 'Argentina'),
(2, 'AUS', 'Australia'),
(3, 'AUT', 'Austria'),
(4, 'BEL', 'Belgium'),
(5, 'BOL', 'Bolivia'),
(6, 'BRA', 'Brazil'),
(7, 'BGR', 'Bulgaria'),
(8, 'CAN', 'Canada'),
(9, 'CHL', 'Chile'),
(10, 'CHN', 'China'),
(11, 'COL', 'Colombia'),
(12, 'CRI', 'Costa Rica'),
(13, 'HRV', 'Croatia'),
(14, 'CUB', 'Cuba'),
(15, 'CZE', 'Czech Republic'),
(16, 'DNK', 'Denmark'),
(17, 'FIN', 'Finland'),
(18, 'FRA', 'France'),
(19, 'DJI', 'Djibouti'),
(20, 'DEU', 'Germany'),
(21, 'GRC', 'Greece'),
(22, 'HND', 'Honduras'),
(23, 'HKG', 'Hong Kong'),
(24, 'ISL', 'Iceland'),
(25, 'IND', 'India'),
(26, 'IDN', 'Indonesia'),
(27, 'IRN', 'Iran'),
(28, 'IRQ', 'Iraq'),
(29, 'IRL', 'Ireland'),
(30, 'ISR', 'Israel'),
(31, 'ITA', 'Italy'),
(32, 'JPN', 'Japan'),
(33, 'KOR', 'South Korea'),
(34, 'LTU', 'Lithuania'),
(35, 'LUX', 'Luxembourg'),
(36, 'MYS', 'Malaysia'),
(37, 'MEX', 'Mexico'),
(38, 'MCO', 'Monaco'),
(39, 'MAR', 'Morocco'),
(40, 'NLD', 'Netherlands'),
(41, 'NZL', 'New Zealand'),
(42, 'NOR', 'Norway'),
(43, 'POL', 'Poland'),
(44, 'PRT', 'Portugal'),
(45, 'PRI', 'Puerto Rico'),
(46, 'QAT', 'Qatar'),
(47, 'ROU', 'Romania'),
(48, 'RUS', 'Russia'),
(49, 'SGP', 'Singapore'),
(50, 'SVK', 'Slovakia'),
(51, 'SVN', 'Slovenia'),
(52, 'ZAF', 'South Africa'),
(53, 'ESP', 'Spain'),
(54, 'SWE', 'Sweden'),
(55, 'CHE', 'Switzerland'),
(56, 'TWN', 'Taiwan'),
(57, 'TUN', 'Tunisia'),
(58, 'TUR', 'Turkey'),
(59, 'UKR', 'Ukraine'),
(60, 'GBR', 'United Kingdom'),
(61, 'USA', 'United States'),
(62, 'URY', 'Uruguay'),
(63, 'VEN', 'Venezuela');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `StuUsrName` varchar(50) NOT NULL,
  `Objective` text NOT NULL,
  `CareerHistory` text NOT NULL,
  `Education` varchar(50) NOT NULL,
  PRIMARY KEY (`StuUsrName`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `cv`
--

INSERT INTO `cv` (`StuUsrName`, `Objective`, `CareerHistory`, `Education`) VALUES
('amy9532', 'Civil Engineer', 'Need to be change', 'Civil Engineering Master degree'),
('Apple', 'Apple', 'Apple', 'Apple'),
('bbchustu', 'nothing', 'nothing', 'nothing'),
('hahaha', 'obj', 'his', 'master'),
('rewtyu', 'rtw', 't43', 't32');

-- --------------------------------------------------------

--
-- Structure de la table `firm`
--

CREATE TABLE IF NOT EXISTS `firm` (
  `FirmUsrName` varchar(50) NOT NULL,
  `FirmPassword` varchar(255) NOT NULL,
  `FirmEmail` varchar(255) NOT NULL,
  `FirmApproved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`FirmUsrName`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `firm`
--

INSERT INTO `firm` (`FirmUsrName`, `FirmPassword`, `FirmEmail`, `FirmApproved`) VALUES
('firm', 'Firm12345678', 'Firm12@mail.com', 0),
('iamfirm', 'Firm12345678', 'firm@firm.com', 0),
('sixtech27', 'Sixtech27', '6tech-27@gmail.com', 0),
('Somefirm', 'Firm12345678', 'Some1234@mail.com', 1),
('testBank', 'Firm12345678', 'Firm1@mail.com', 1),
('testDesign', 'Firm12345678', 'Firm2@mail.com', 0),
('xyz', '123QWEqwe', 's@g.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `firm_info`
--

CREATE TABLE IF NOT EXISTS `firm_info` (
  `FirmUsrName` varchar(50) NOT NULL,
  `FirmRegNum` varchar(50) NOT NULL,
  `FirmInsuranceNum` varchar(50) NOT NULL,
  `FirmProfilePic` varchar(255) NOT NULL,
  `Supervisor` varchar(50) NOT NULL,
  `FirmName` varchar(50) NOT NULL,
  `activity` varchar(50) NOT NULL,
  `FirmSkypeAccount` varchar(50) NOT NULL,
  PRIMARY KEY (`FirmUsrName`),
  UNIQUE KEY `FirmRegNum` (`FirmRegNum`,`FirmInsuranceNum`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `firm_info`
--

INSERT INTO `firm_info` (`FirmUsrName`, `FirmRegNum`, `FirmInsuranceNum`, `FirmProfilePic`, `Supervisor`, `FirmName`, `activity`, `FirmSkypeAccount`) VALUES
('firm', 'regno', 'insno', 'firmPic.jpg', 'supervisorname', 'firmname','busactivity', 'skypeaccount'),
('sixtech27', '20638597', '12470657', 'firmPic.jpg', '123', 'Sixth Tech. LTD','hydro', '123'),
('Somefirm', '123', '123', 'firmPic.jpg', '123', '123','123', '123'),
('testBank', 'a123456789', 'In_A123456789', '', '', 'Bank',  'banking', 'BankSkype'),
('testDesign', 'b123456789', 'In_B123456789', '', '', 'Dsign', 'design', 'BankSkype'),
('xyz', 'reg no', 'in no', 'firmPic.jpg', 'su', 'xyz com','bus', 'skype');

-- --------------------------------------------------------

--
-- Structure de la table `internship`
--

CREATE TABLE IF NOT EXISTS `internship` (
  `InternshipID` int(11) NOT NULL AUTO_INCREMENT,
  `FirmUsrName` varchar(50) NOT NULL,
  `JobCategory` varchar(50) NOT NULL,
  `Quota` int(11) NOT NULL,
  `JobTitle` varchar(255) NOT NULL,
  `Salary` decimal(10,2) NOT NULL,
  `LivingCost` int(11) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Location` varchar(50) NOT NULL,
  `PostedBy` varchar(50) NOT NULL,
  `InternAgreement` varchar(255) NOT NULL,
  `DurationStart` date NOT NULL,
  `DurationEnd` date NOT NULL,
  PRIMARY KEY (`InternshipID`),
  KEY `internship_ibfk_1` (`PostedBy`),
  KEY `intern_FirmUsrName_key` (`FirmUsrName`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=70 ;

--
-- Contenu de la table `internship`
--

INSERT INTO `internship` (`InternshipID`, `FirmUsrName`, `JobCategory`, `Quota`, `JobTitle`, `Salary`, `LivingCost`, `Language`, `Description`, `Location`, `PostedBy`, `InternAgreement`, `DurationStart`, `DurationEnd`) VALUES
(1, 'testBank', 'banking', 1, 'some banker support', '100.00', 1, 'english', '', 'Hong Kong', 'testBank', '', '2016-08-01', '2016-09-01'),
(2, 'Somefirm', 'design', 4, 'designer', '244.00', 1, 'French', '1', 'France', 'Somefirm', '', '2016-07-06', '2016-07-19'),
(64, 'Sixtech27', 'Categorie', 2, 'Titre', '15.00', 1, '2', 'Une petite description', '2', 'Sixtech27', '', '2017-01-08', '2017-03-31'),
(65, 'Sixtech27', 'Informatique', 1, 'Stage', '15000.00', 1, '2', 'Analyse et dÃ©veloppement', '2', 'Sixtech27', '', '2017-04-09', '2017-07-28'),
(66, 'Sixtech27', 'Management', 1, 'Stage', '2000.00', 1, '2', 'Stage de management de projet', '2', 'Sixtech27', '', '2017-03-05', '2017-06-30'),
(67, 'Sixtech27', 'TestCategory', 3, 'NewTest', '550.00', 1, '1', 'Test description', '18', 'Sixtech27', '', '2017-02-14', '2017-05-18'),
(69, 'sixtech27', 'IT', 1, 'IT engineer', '750.00', 300, '1', 'Software engineering', '18', 'sixtech27', '', '2017-02-06', '2017-06-30');

-- --------------------------------------------------------

--
-- Structure de la table `InternshipPersonalSkills`
--

CREATE TABLE IF NOT EXISTS `InternshipPersonalSkills` (
  `InternshipID` int(11) NOT NULL,
  `PersonalSkillID` int(11) NOT NULL,
  PRIMARY KEY (`InternshipID`,`PersonalSkillID`),
  KEY `internshippersonalskills_ibfk_2` (`PersonalSkillID`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `InternshipPersonalSkills`
--

INSERT INTO `InternshipPersonalSkills` (`InternshipID`, `PersonalSkillID`) VALUES
(65, 3),
(66, 4),
(64, 5),
(65, 5),
(67, 5),
(64, 9),
(65, 9),
(66, 9),
(67, 9),
(69, 9),
(65, 10),
(66, 11),
(67, 11),
(64, 12),
(65, 12),
(67, 12),
(69, 12),
(64, 13),
(66, 13),
(67, 13),
(69, 13),
(64, 16),
(65, 16),
(65, 19);

-- --------------------------------------------------------

--
-- Structure de la table `InternshipSkills`
--

CREATE TABLE IF NOT EXISTS `InternshipSkills` (
  `InternshipID` int(11) NOT NULL,
  `SkillID` int(11) NOT NULL,
  PRIMARY KEY (`InternshipID`,`SkillID`),
  KEY `internshipskills_ibfk_2` (`SkillID`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `InternshipSkills`
--

INSERT INTO `InternshipSkills` (`InternshipID`, `SkillID`) VALUES
(67, 1),
(67, 2),
(64, 4),
(69, 4),
(65, 5),
(67, 5),
(69, 5),
(64, 6),
(65, 6),
(67, 6),
(69, 6),
(65, 7),
(67, 7),
(69, 7),
(66, 10),
(66, 15),
(64, 16),
(65, 16),
(66, 16);

-- --------------------------------------------------------

--
-- Structure de la table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `LanguageID` int(11) NOT NULL AUTO_INCREMENT,
  `LanguageLabel` varchar(20) NOT NULL,
  PRIMARY KEY (`LanguageID`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `language`
--

INSERT INTO `language` (`LanguageID`, `LanguageLabel`) VALUES
(1, 'French'),
(2, 'English'),
(3, 'Chinese'),
(4, 'Italian'),
(5, 'Spanish');

-- --------------------------------------------------------

--
-- Structure de la table `PersonalSkill`
--

CREATE TABLE IF NOT EXISTS `PersonalSkill` (
  `PersonalSkillID` int(11) NOT NULL AUTO_INCREMENT,
  `PersonalSkillLabel` varchar(50) NOT NULL,
  PRIMARY KEY (`PersonalSkillID`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `PersonalSkill`
--

INSERT INTO `PersonalSkill` (`PersonalSkillID`, `PersonalSkillLabel`) VALUES
(1, 'Accurate'),
(2, 'Adaptable'),
(3, 'Ambitious'),
(4, 'Cooperative'),
(5, 'Creative'),
(6, 'Dedicated'),
(7, 'Efficient'),
(8, 'Flexible'),
(9, 'Hardworking'),
(10, 'Honest'),
(11, 'Optimistic'),
(12, 'Organized'),
(13, 'Patient'),
(14, 'People-oriented'),
(15, 'Practical'),
(16, 'Productive'),
(17, 'Realistic'),
(18, 'Reliable'),
(19, 'Responsible');

-- --------------------------------------------------------

--
-- Structure de la table `ReplyAds`
--

CREATE TABLE IF NOT EXISTS `ReplyAds` (
  `ReplyID` int(11) NOT NULL AUTO_INCREMENT,
  `PostID` int(11) NOT NULL,
  `FirmUsrName` varchar(50) NOT NULL,
  `JobCategory` varchar(50) NOT NULL,
  `JobTitle` varchar(255) NOT NULL,
  `Salary` decimal(10,2) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Location` varchar(50) NOT NULL,
  `PostedBy` varchar(50) NOT NULL,
  `DurationStart` date NOT NULL,
  `DurationEnd` date NOT NULL,
  PRIMARY KEY (`ReplyID`),
  KEY `Salary` (`Salary`),
  KEY `FirmUsrName` (`FirmUsrName`),
  KEY `PostedBy` (`PostedBy`),
  KEY `PostID` (`PostID`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `ReplyAds`
--

INSERT INTO `ReplyAds` (`ReplyID`, `PostID`, `FirmUsrName`, `JobCategory`, `JobTitle`, `Salary`, `Language`, `Description`, `Location`, `PostedBy`, `DurationStart`, `DurationEnd`) VALUES
(1, 1, 'iamfirm', 'cookery', 'cook', '500.00', 'French', 'making food', 'France', 'AmbTammy', '2016-09-01', '2016-12-01');

-- --------------------------------------------------------

--
-- Structure de la table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
  `SkillID` int(11) NOT NULL AUTO_INCREMENT,
  `SkillLabel` varchar(50) NOT NULL,
  PRIMARY KEY (`SkillID`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `skill`
--

INSERT INTO `skill` (`SkillID`, `SkillLabel`) VALUES
(1, 'MS Word'),
(2, 'MS Excel'),
(3, 'C language'),
(4, 'Java'),
(5, 'HTML'),
(6, 'SQL'),
(7, 'PHP'),
(8, 'Matlab'),
(9, 'AutoCAD'),
(10, 'Photoshop Skills'),
(11, 'Video Making'),
(12, 'Audio-related'),
(13, 'Cookery'),
(14, 'Auditing Skills'),
(15, 'Accounting Skills'),
(16, 'Management Experience');

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `StuUsrName` varchar(50) NOT NULL,
  `StuPassword` varchar(255) NOT NULL,
  `StuEmail` varchar(255) NOT NULL,
  `StuApproved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`StuUsrName`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `student`
--

INSERT INTO `student` (`StuUsrName`, `StuPassword`, `StuEmail`, `StuApproved`) VALUES
('123', '123', '123', 0),
('123123', 'Qq12345678', '123', 0),
('12312341', 'Qq12345678', '123@fdasm.c', 0),
('1234', '123', '123', 0),
('12345', 'Qwer1234', '1@1.com', 0),
('amy9532', 'Aamy1212', 'amyyu9532@gmail.com', 0),
('Apple', 'Apple123', 'apple@apple.com', 1),
('bbchustu', 'Aa123123', 'bbchu@gmail.com', 0),
('haha', 'Qq12345678', '23@cds.com', 0),
('hahaha', 'Qq123456', 'a@qwer.com', 0),
('JohnDoe', 'Password1', 'johndoe@test.com', 0),
('qwer', 'qwer', 'qwer', 0),
('qwert', 'qwertQ1234', 'q@qq.com', 0),
('rewtyu', 'Qa1234@mail.com', 'Qa1234@mail.com', 0),
('StudentName', 'StudentPassword', 'student@test.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `StudentPersonalSkills`
--

CREATE TABLE IF NOT EXISTS `StudentPersonalSkills` (
  `StudentID` varchar(50) NOT NULL,
  `PersonalSkillID` int(11) NOT NULL,
  PRIMARY KEY (`StudentID`,`PersonalSkillID`),
  KEY `studentpersonalskills_ibfk_2` (`PersonalSkillID`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `StudentPersonalSkills`
--

INSERT INTO `StudentPersonalSkills` (`StudentID`, `PersonalSkillID`) VALUES
('StudentName', 3),
('JohnDoe', 9),
('StudentName', 9),
('JohnDoe', 12),
('StudentName', 12),
('JohnDoe', 13),
('JohnDoe', 14),
('StudentName', 16),
('StudentName', 19);

-- --------------------------------------------------------

--
-- Structure de la table `StudentSkills`
--

CREATE TABLE IF NOT EXISTS `StudentSkills` (
  `StudentID` varchar(50) NOT NULL,
  `SkillID` int(11) NOT NULL,
  PRIMARY KEY (`StudentID`,`SkillID`),
  KEY `studentskills_ibfk_2` (`SkillID`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `StudentSkills`
--

INSERT INTO `StudentSkills` (`StudentID`, `SkillID`) VALUES
('JohnDoe', 1),
('JohnDoe', 2),
('JohnDoe', 4),
('StudentName', 5),
('StudentName', 6),
('StudentName', 7),
('JohnDoe', 10),
('JohnDoe', 16),
('StudentName', 16);

-- --------------------------------------------------------

--
-- Structure de la table `StuPostAds`
--

CREATE TABLE IF NOT EXISTS `StuPostAds` (
  `PostID` int(11) NOT NULL AUTO_INCREMENT,
  `JobCategory` varchar(50) NOT NULL,
  `JobTitle` varchar(255) NOT NULL,
  `Salary` decimal(10,2) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Location` varchar(50) NOT NULL,
  `PostedBy` varchar(50) NOT NULL,
  `DurationStart` date NOT NULL,
  `DurationEnd` date NOT NULL,
  `commission` decimal(10,2) NOT NULL,
  PRIMARY KEY (`PostID`),
  KEY `PostedBy` (`PostedBy`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `StuPostAds`
--

INSERT INTO `StuPostAds` (`PostID`, `JobCategory`, `JobTitle`, `Salary`, `Language`, `Description`, `Location`, `PostedBy`, `DurationStart`, `DurationEnd`, `commission`) VALUES
(1, 'cook', 'cook', '500.00', 'French', 'work in restaurant', 'France', 'apple', '2016-09-01', '2017-01-01', '50.00');

-- --------------------------------------------------------

--
-- Structure de la table `stu_personal_info`
--

CREATE TABLE IF NOT EXISTS `stu_personal_info` (
  `StuUsrName` varchar(50) NOT NULL,
  `Given Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `PassportNumber` varchar(50) NOT NULL,
  `PassportValidDate` date NOT NULL,
  `MailingAddress` varchar(255) NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `SkypeAccount` varchar(50) NOT NULL,
  `stu_profile_pic` varchar(255) NOT NULL,
  `Languages` varchar(50) DEFAULT NULL,
  `Skills` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`StuUsrName`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `stu_personal_info`
--

INSERT INTO `stu_personal_info` (`StuUsrName`, `Given Name`, `Surname`, `Gender`, `DateOfBirth`, `Nationality`, `PassportNumber`, `PassportValidDate`, `MailingAddress`, `ContactNumber`, `SkypeAccount`, `stu_profile_pic`, `Languages`, `Skills`) VALUES
('12345', 'TTT', 'TTT', 'female', '1992-09-02', 'HK', '12345678', '2020-01-05', '123456', '123456', '123456', 'http://placehold.it/500x500', NULL, NULL),
('amy9532', 'Hiu Yan', 'Yu', 'female', '1996-02-13', 'Chinese', '666810622', '2016-12-08', 'needtobechange', '+86196-8692-5673', 'hiuyan012', 'http://placehold.it/500x500', NULL, NULL),
('Apple', 'Apple', 'Apple', 'female', '1991-10-10', 'Apple', '123456789', '2020-05-11', 'Apple', '123456789', 'Apple@apple.com', 'http://placehold.it/500x500', NULL, NULL),
('bbchustu', 'hoho', 'Wan', 'male', '1993-03-11', 'HK', '123123', '2012-02-08', 'hohochu@gmail.co', '123456789', 'hohochuQQ', 'http://placehold.it/500x500', NULL, NULL),
('hahaha', 'givenname', 'surname', 'male', '1989-12-31', 'nationality', 'passportno', '2021-12-31', 'mailing', '+33 1234', 'skype', 'http://placehold.it/500x500', NULL, NULL),
('JohnDoe', 'John', 'Doe', 'male', '1995-08-23', 'French', '123456789', '2019-07-25', 'my mailing address', '123456789', 'myskype', 'http://placehold.it/500x500', NULL, NULL),
('rewtyu', 'rew', 'wer', 'male', '1974-12-30', 'Belgium', 'pass', '2023-01-31', 'mailing', 'contact num', 'skype', 'http://placehold.it/500x500', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `SupportID` int(11) NOT NULL AUTO_INCREMENT,
  `InternshipID` int(11) NOT NULL,
  `StuUsrName` varchar(50) NOT NULL,
  `AmbUsrName` varchar(50) NOT NULL,
  PRIMARY KEY (`SupportID`),
  KEY `InternshipID` (`InternshipID`),
  KEY `StuUsrName` (`StuUsrName`),
  KEY `AmbUsrName` (`AmbUsrName`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `transactionrecord`
--

CREATE TABLE IF NOT EXISTS `transactionrecord` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `Payer` varchar(50) NOT NULL,
  `Receiver` varchar(50) NOT NULL,
  `TranscationRefNo` int(11) NOT NULL,
  PRIMARY KEY (`recordID`),
  KEY `Payer` (`Payer`),
  KEY `Receiver` (`Receiver`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `uinfo`
--

CREATE TABLE IF NOT EXISTS `uinfo` (
  `StuUsrName` varchar(50) NOT NULL,
  `UName` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `UAddress` text NOT NULL,
  `GPA` decimal(3,2) NOT NULL,
  `ExpectedGradTime` year(4) NOT NULL,
  `SupervisorName` varchar(50) NOT NULL,
  `SupervisorTel` varchar(50) NOT NULL,
  `SupervisorEmail` varchar(50) NOT NULL,
  PRIMARY KEY (`StuUsrName`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `uinfo`
--

INSERT INTO `uinfo` (`StuUsrName`, `UName`, `Country`, `UAddress`, `GPA`, `ExpectedGradTime`, `SupervisorName`, `SupervisorTel`, `SupervisorEmail`) VALUES
('12345', 'Cityu', 'HK', 'HK', '1.20', 2046, 'Keke', '12354678', 'Keke@1.com'),
('amy9532', 'Needtobechange', 'Hong Kong', '  Tat Chee Avenue, Kowloon, Hong Kong SAR', '3.47', 2017, 'LAM Chun Fai', '+85265841237', 'failam@gmail.com'),
('Apple', 'Apple', 'Apple', 'Apple', '1.20', 2046, 'Apple', '123456789', 'Apple@Apple.com'),
('bbchustu', 'Cityu', 'hk', '123123', '1.00', 2046, 'someone', '123456879', 'hohochu@gmail.cm'),
('hahaha', 'testu', 'ucountry', 'uaddr', '1.00', 2020, 'super', '33 12345', 'super@mail.com'),
('rewtyu', 'rewU', 'Belgium', 'u addr', '3.00', 2046, 'Mr ', '+77', 'q@mail.com');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `usrName` varchar(50) NOT NULL,
  `usrType` enum('boardingates','student','ambassador','firm') NOT NULL,
  PRIMARY KEY (`usrName`,`usrType`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`usrName`, `usrType`) VALUES
('123', 'student'),
('123123', 'student'),
('12312341', 'student'),
('1234', 'student'),
('12345', 'student'),
('AmbTammy', 'ambassador'),
('amy9532', 'student'),
('Apple', 'student'),
('bbchuQQ', 'ambassador'),
('bbchustu', 'student'),
('firm', 'firm'),
('haha', 'student'),
('HAHA1some@mail.com', 'ambassador'),
('hahaha', 'student'),
('iamfirm', 'firm'),
('jimmmmmmy', 'ambassador'),
('joejune', 'ambassador'),
('JohnDoe', 'student'),
('qwer', 'student'),
('qwert', 'student'),
('rewtyu', 'student'),
('sixtech27', 'firm'),
('Somefirm', 'firm'),
('StudentName', 'student'),
('testBank', 'firm'),
('testDesign', 'firm'),
('xyz', 'firm');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `ambassador`
--
ALTER TABLE `ambassador`
  ADD CONSTRAINT `ambassador_ibfk_1` FOREIGN KEY (`AmbUsrName`) REFERENCES `user` (`usrName`) ON DELETE CASCADE;

--
-- Contraintes pour la table `amb_personal_info`
--
ALTER TABLE `amb_personal_info`
  ADD CONSTRAINT `amb_personal_info_ibfk_1` FOREIGN KEY (`AmbUsrName`) REFERENCES `ambassador` (`AmbUsrName`) ON DELETE CASCADE;

--
-- Contraintes pour la table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`StuUsrName`) REFERENCES `student` (`StuUsrName`) ON DELETE CASCADE,
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`InternshipID`) REFERENCES `internship` (`InternshipID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `boardingates`
--
ALTER TABLE `boardingates`
  ADD CONSTRAINT `boardingates_ibfk_1` FOREIGN KEY (`AdminUsrName`) REFERENCES `user` (`usrName`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`StuUsrName`) REFERENCES `student` (`StuUsrName`) ON DELETE CASCADE;

--
-- Contraintes pour la table `firm`
--
ALTER TABLE `firm`
  ADD CONSTRAINT `firm_ibfk_1` FOREIGN KEY (`FirmUsrName`) REFERENCES `user` (`usrName`) ON DELETE CASCADE;

--
-- Contraintes pour la table `firm_info`
--
ALTER TABLE `firm_info`
  ADD CONSTRAINT `firm_info_ibfk_1` FOREIGN KEY (`FirmUsrName`) REFERENCES `firm` (`FirmUsrName`) ON DELETE CASCADE;

--
-- Contraintes pour la table `internship`
--
ALTER TABLE `internship`
  ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`PostedBy`) REFERENCES `user` (`usrName`) ON DELETE CASCADE,
  ADD CONSTRAINT `intern_FirmUsrName_key` FOREIGN KEY (`FirmUsrName`) REFERENCES `firm` (`FirmUsrName`) ON DELETE CASCADE;

--
-- Contraintes pour la table `InternshipPersonalSkills`
--
ALTER TABLE `InternshipPersonalSkills`
  ADD CONSTRAINT `internshippersonalskills_ibfk_1` FOREIGN KEY (`InternshipID`) REFERENCES `internship` (`InternshipID`) ON DELETE CASCADE,
  ADD CONSTRAINT `internshippersonalskills_ibfk_2` FOREIGN KEY (`PersonalSkillID`) REFERENCES `PersonalSkill` (`PersonalSkillID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `InternshipSkills`
--
ALTER TABLE `InternshipSkills`
  ADD CONSTRAINT `internshipskills_ibfk_1` FOREIGN KEY (`InternshipID`) REFERENCES `internship` (`InternshipID`) ON DELETE CASCADE,
  ADD CONSTRAINT `internshipskills_ibfk_2` FOREIGN KEY (`SkillID`) REFERENCES `skill` (`SkillID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `ReplyAds`
--
ALTER TABLE `ReplyAds`
  ADD CONSTRAINT `ReplyAds_ibfk_1` FOREIGN KEY (`PostID`) REFERENCES `StuPostAds` (`PostID`),
  ADD CONSTRAINT `ReplyAds_ibfk_3` FOREIGN KEY (`FirmUsrName`) REFERENCES `firm` (`FirmUsrName`),
  ADD CONSTRAINT `ReplyAds_ibfk_4` FOREIGN KEY (`PostedBy`) REFERENCES `ambassador` (`AmbUsrName`);

--
-- Contraintes pour la table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`StuUsrName`) REFERENCES `user` (`usrName`) ON DELETE CASCADE;

--
-- Contraintes pour la table `StudentPersonalSkills`
--
ALTER TABLE `StudentPersonalSkills`
  ADD CONSTRAINT `studentpersonalskills_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StuUsrName`) ON DELETE CASCADE,
  ADD CONSTRAINT `studentpersonalskills_ibfk_2` FOREIGN KEY (`PersonalSkillID`) REFERENCES `PersonalSkill` (`PersonalSkillID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `StudentSkills`
--
ALTER TABLE `StudentSkills`
  ADD CONSTRAINT `studentskills_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StuUsrName`) ON DELETE CASCADE,
  ADD CONSTRAINT `studentskills_ibfk_2` FOREIGN KEY (`SkillID`) REFERENCES `skill` (`SkillID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `StuPostAds`
--
ALTER TABLE `StuPostAds`
  ADD CONSTRAINT `StuPostAds_ibfk_1` FOREIGN KEY (`PostedBy`) REFERENCES `student` (`StuUsrName`) ON DELETE CASCADE;

--
-- Contraintes pour la table `stu_personal_info`
--
ALTER TABLE `stu_personal_info`
  ADD CONSTRAINT `stu_personal_info_ibfk_1` FOREIGN KEY (`StuUsrName`) REFERENCES `student` (`StuUsrName`) ON DELETE CASCADE;

--
-- Contraintes pour la table `support`
--
ALTER TABLE `support`
  ADD CONSTRAINT `support_Amb_3` FOREIGN KEY (`AmbUsrName`) REFERENCES `ambassador` (`AmbUsrName`),
  ADD CONSTRAINT `support_intern_1` FOREIGN KEY (`InternshipID`) REFERENCES `internship` (`InternshipID`),
  ADD CONSTRAINT `support_stu_2` FOREIGN KEY (`StuUsrName`) REFERENCES `student` (`StuUsrName`);

--
-- Contraintes pour la table `transactionrecord`
--
ALTER TABLE `transactionrecord`
  ADD CONSTRAINT `Transaction_Payer_key` FOREIGN KEY (`Payer`) REFERENCES `user` (`usrName`),
  ADD CONSTRAINT `Transaction_Receiver_key` FOREIGN KEY (`Receiver`) REFERENCES `user` (`usrName`);

--
-- Contraintes pour la table `uinfo`
--
ALTER TABLE `uinfo`
  ADD CONSTRAINT `uinfo_ibfk_1` FOREIGN KEY (`StuUsrName`) REFERENCES `student` (`StuUsrName`);

  --
  -- Add columns for internship table
  --
 ALTER TABLE internship
ADD Tips INT,
ADD ApplicationDeadline date,
ADD Duration varchar(50),
DROP COLUMN DurationEnd;

ALTER TABLE internship DROP FOREIGN KEY `intern_FirmUsrName_key`;
--
-- Add columns for stu_person_info

ALTER TABLE stu_personal_info
ADD IdPassportPic varchar(50);

ALTER TABLE stu_personal_info
ADD StudyField varchar(50),
ADD Major varchar(50),
ADD UniversityName varchar(50),
ADD GPA varchar(50),
ADD WorkExperience TEXT
;

--
-- Add columns for amb_person_info
--

ALTER TABLE amb_personal_info
ADD ProfilePic varchar(50);

ALTER TABLE `firm_info` CHANGE `FirmProfilePic` `ProfilePic` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

CREATE TABLE IF NOT EXISTS `interview` (
  `interviewID` int(11) NOT NULL AUTO_INCREMENT,
  `InternshipID` int(11) NOT NULL,
  `StuUsrName` varchar(50) NOT NULL,
  `interviewDate` date NOT NULL,
  `interviewTime` time NOT NULL,
  `status` enum('done','scheduled','canceled','') NOT NULL,
  PRIMARY KEY (`interviewID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

ALTER TABLE `internship` ADD `LanguageLevel` VARCHAR(50) NULL DEFAULT NULL AFTER `Language`, ADD `Language2` VARCHAR(50) NULL DEFAULT NULL AFTER `LanguageLevel`, ADD `Language2Level` VARCHAR(50) NULL DEFAULT NULL AFTER `Language2`, ADD `Language3` VARCHAR(50) NULL DEFAULT NULL AFTER `Language2Level`, ADD `Language3Level` VARCHAR(50) NULL DEFAULT NULL AFTER `Language3`;


CREATE TABLE IF NOT EXISTS `advertisement` (
  `advertisementID` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  `StuUsrName` varchar(50) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  PRIMARY KEY (`advertisementID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20

CREATE TABLE IF NOT EXISTS `PracticalSkills` (
  `SkillsID` int(11) NOT NULL AUTO_INCREMENT,
  `SkillLabel` varchar(50) NOT NULL,
  `SkillCategory` varchar(50) NOT NULL,
  PRIMARY KEY (`SkillsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20

ALTER TABLE `InternshipSkills` DROP FOREIGN KEY `internshipskills_ibfk_2`;

ALTER TABLE `personalskill` ADD `SkillCategory` varchar(50);

ALTER TABLE `studentskills` ADD `InternshipID` int(11);

ALTER TABLE `studentpersonalskills` ADD `InternshipID` int(11);

ALTER TABLE `studentskills` DROP FOREIGN KEY `studentskills_ibfk_2`;

ALTER TABLE `internshipskills` ADD `rank` int(11);

ALTER TABLE `amb_personal_info`
ADD company varchar(50),
ADD degree varchar(50);

ALTER TABLE `interview`
ADD studentreponse varchar(50);

ALTER TABLE `amb_personal_info`
ADD PassportPic varchar(50);

CREATE TABLE IF NOT EXISTS `Currency` (
  `CurrencyID` int(11) NOT NULL AUTO_INCREMENT,
  `CurrencyLabel` varchar(50) NOT NULL,
  `SkillCategory` varchar(50) NOT NULL,
  PRIMARY KEY (`CurrencyID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20

CREATE TABLE IF NOT EXISTS `WorkExperience` (
  `WorkExperienceID` int(11) NOT NULL AUTO_INCREMENT,
  `StuUsrName` varchar(50) NOT NULL,
  `DateStarted` date NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  PRIMARY KEY (`WorkExperienceID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20
