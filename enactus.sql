-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 03:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enactus`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ads_id` int(10) UNSIGNED NOT NULL,
  `img_loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ads_id`, `img_loc`) VALUES
(3, 'uploads/16433save the date.jpg'),
(4, 'uploads/30292lc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `alumni_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `img_loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumni_id`, `name`, `story`, `email`, `date`, `img_loc`) VALUES
(1, 'EBUKA EZEJI', 'I am Ebuka Ezeji and a proud Enactus Alumni. I joined Enactus in 2008 while studying Biochemistry at the University of Nigeria.  I was amazed at how university students were improving the livelihood of rural dwellers in the Nsukka community and so i joined Enactus. Working with my fellow Enactus students on different projects on campus taught me the concept of teamwork and team building.\r\nI also loved information technology while in school and so i joined the technical unit at Enactus where i was exposed to design, coding and collaboration tools. I also worked with my technical team to develop annual reports and presentation slides.<br>\r\nThe technical skills acquired while on campus got me my first job at Enactus country office as an IT manager.  In 2017, myself and 14 other Africans were recognized by the CEO of Google, Sundar Pichai for pioneering digital skills in Africa. This wouldn\'t be possible if not for the technical competencies i acquired as an Enactus student at the University of Nigeria. <br>\r\nCurrently, i lead the digital strategy team at Signal Alliance, developing B2B digital strategies for Microsoft and Cisco products. My team work experience as an Enactus student made it easy to work with teams in my corporate environment today.  I am also a digital strategy contributor for Business Day, a digital strategy tutor at Fate Foundation and a Volunteer for the Digital Skills for Africa project by Google.\r\nI am grateful to Enactus for helping me discover myself, build soft skills for the corporate world and making me employable. I encourage all Enactus students to take the program seriously because gradually and unknowingly, the required skill set for corporate success rubs off you as you are involved in the Enactus projects.', 'ebukaezeji@gmail.com', '2018-03-29', 'uploads/71833ebuka.jpg'),
(2, 'Adebukola Adeboye', 'As young graduate in my 100l, i knew i would join a club in the university but i didnâ€™t know which one it will be. A lady (Funke marquis) saw a great potential in me and she said to her colleague Idris in Yoruba language â€œje ka ko awon girlâ€™s yi lo SIFEâ€ meaning â€œletâ€™s take this girls to SIFEâ€.<br>\r\nMy SIFE/Enactus journey began as a mere member in 2010, at Tai Solarin University of education, Ogun state. I worked tirelessly like i was going for a job Mondays through to Friday, sometimes Saturday and Sunday for meetings or project execution. With positivity and passion about innovative developmental strides in individuals and communities, i became the team secretary and project head and for the first time in six years competing at the Enactus Nigeria national competition, we finish 4th position. This result did not come on a platter of gold but as a result of hard work, vigils, dedication and resilience.<br>\r\nThis experiences and skills which include but not limited to project management, team building, emotional intelligence, communication, leadership etc. Which i acquired during my time as an Enactus student leader, built me to who i am today.\r\nWith focus on becoming an enigma in project management and social entrepreneurship a career she is most passionate about, i have volunteered, interned, worked and garnered immeasurable experience in various local and international organizations from TIDE TURNERS NETWORK to IMENTOR to CUSO international etc. She\'s currently a project manager with lead360.co and a volunteer for ONE AFRICAN CHILD FOUNDATION amongst others. <br>\r\n	\r\nLastly, donâ€™t relent in all you do. Keep persisting and persevere when things donâ€™t look the same and be determined and focused on your vision.', 'adebookie@gmail.com', '2018-03-29', 'uploads/58029IMG_9815.JPG'),
(3, 'Ambrose Adole', 'I am Ambrose Adole and nothing has given me fulfilment than the knowledge that I am an Enactus Alumni. I became a member of Enactus in 2007 During my first year as a Physics Electronics student in Federal Polytechnic Idah. My passion was immediately ignited as I named the first Project of the session and was task to deliver the planned milestone in 3 weeks. This was the beginning of an exciting journey to leading a team in various platforms. The energy and commitment in Enactus constantly drive me to pursue projects with excellence and speed.\r\nAs a passionate Corporate Strategist, leadership, as well as Project Manager that I am, it made me lead my team as the Team President for 3 years, developing program structures and managing the entrepreneurial activities of the team. This improved my peopleâ€™s skills as well as community organizing skills.<br>\r\nThe leadership dynamics I learned from Enactus projected me in my current organization to become a Training Director for junior staff immediately after my internship. Upon graduation, I managed the engineering trainings and was immediately involved in the project planning and execution. This Skill, led me to spare head Police Network TSS Strategy for BCteck Engineering, a partner company.\r\nCurrently, I am the Energy Manager and Senior Opex Analyst with SPOC portfolio across various Telecom Network operators in Nigeria for my organization.<br>\r\nI am indebted to Enactus for drawing out the potentials in me to give more to the society both corporately and socially.', 'ambroseadoleogiri@gmail.com', '2018-03-29', 'uploads/98375ambrose.jpg'),
(4, 'Michael Olorunfemi', 'I am Michael Olorunfemi a graduate of The Federal University of Technology, Akure Ondo state. I joined the ENACTUS FUTA team in 2012 as a 200 level Transport and Management Technology student with the passion for adding values to humanities and making a difference.\r\nAfter rigorous recruitment process and a three day training exercise I was assigned on an agricultural based community project my project members and I worked with academic leaders and government officials in alleviating the numerous challenges faced by small scale rice farmers of Aule community.<br>\r\nIn the course of executing several community projects, I learnt script writing, Leveraging on the team strengths to achieve set goals, communication of ideas and project pitch whilst discussing ideas to top personalities like school professors and top government officials in Ondo state . Due to dedication and diligence I became the project head of Rise4Rice in 2013 and later became the team leader of ENACTUS FUTA in 2014. The year I became the ENACTUS FUTA team leader was the same year I discovered the relevance of my discipline to my passion of adding values to humanities with my participation in Verve my cashless campus challenge where I qualified as one of the seven finalists across various higher institutions in Nigeria. This discovery gave me the confidence to come up with innovative ideas in solving problems around me and further pushed me to apply for several startup grants and seed capital one of which  I won was the Tony Elumelu Foundation seed capital worth of 10,000 USD in 2016.<br>\r\nToday, the experience and connections I acquired during my undergraduate days as an ENACTUS member is my driving point as the founder of Phambook.ng an ICT driven Agric business that connect people to investment opportunities of agriculture in rural areas through a mutual benefit model allowing investors to make supplementary income and help rural farmers to boost output and maximize profit.<br>\r\nAlthough, being an ENACTUS member was tasking and demanding. But it made me a complete student in all areas of life and also made me market ready.<br>\r\nYou will earn what you get out of ENACTUS as a student leader as your experience and anticipated benefits is directly proportional to your contributions towards achieving the set goals and objectives of your team and that of ENACTUS as an organization. Because not everyone that was recruited the same time with me got the same experience and exposure as I did, with all humility I can boldly tell you that I earned everything I became today through my ENACTUS experience.', 'michael@phambook.ng', '2018-03-29', 'uploads/6515424068148_378453692586508_2217158757445295419_n.jpg'),
(5, 'Janet Gbam', 'I am Janet Gbam a graduate of Benue state university. The Enactus network is many things to a lot of people. To me, my Enactus experience laid the foundation for me to champion a course in the free legal service initiative for the disadvantaged population in my community. I joined the SIFE (now ENACTUS) team of the Benue State University in March 2011.I was invited to join the team by Dooshima Adaguusu who was a classmate and member of the SIFE team. According to her, I had the potential to improve my communication and interpersonal skills and I had the prospects to develop confidence in finding solutions to problems that I always complained of. <br>\r\nI joined the team and was selected as a presenter for the National competition in Lagos were my school emerged winner of the national competitions and we proceeded to represent Nigeria in Malaysia for the world cup one which I was honored to present at. The network presented me with an opportunity to have a glimpse of my future and the inspiration I got from the interactions with other ENACTUS members both local and international was transformational. ENACTUS presented me with the opportunity to learn how to take passionate and practical steps towards finding solutions to personal and professional challenges.<br>\r\nIt was in Enactus I learnt that the goal is to make an impact and not to win at all cost, that in impacting lives I have already won and I donâ€™t need a trophy or prize to validate my win. With this evergreen mindset I am spurred to always give my best in whatever I do and know that the goal is to impact lives at every opportunity.<br>\r\nWith the Professional Network of high achieving Individuals the Enactus network exposed me to, I never took for granted the people who dedicated their time and resources to invest in our total development. And i hope the partners and sponsors of ENACTUS realize the impact their investment actually makes on each student who passes through this network.<br>\r\nToday as a lawyer, I am contributing to the development of the Nigerian Legal system and Human rights situation in Nigeria through my work with Fortitude Attorneys. A firm which I Founded to offer pro-bono legal services to underprivileged Nigerians, with a focus on providing access to justice for awaiting-trial inmates relegated to untold hardship as they languish in prison without any attempt at hearing their cases one which happens to be a clear violation of their fundamental rights. Our work also extends to reducing the risk of recidivism by providing education and support to inmates during incarceration. Since 2015, Fortitude Attorneys have secured the release of more than 20 inmates who are currently undergoing reintegration into society. I was recently named a 2017 Mandela Washington Fellow, in recognition of my work with Fortitude Attorneys.  I owe all this to the foundation I got from the ENACTUS network.', 'gbamjanet@gmail.com', '2018-03-29', 'uploads/13494janet pic.jpg'),
(6, 'Oguche Maria', 'PROFILE OF OGUCHE MARIA\r\nI am Oguche Maria.  In 2012 While studying agricultural economics and extension at Kogi State University I came in contact with SIFE now Enactus, amazed and enticed by how they awakened smiles in the communities around Anyigba, I made one of the best decisions in my life Joining Enactus. Upon joining the team, working on life changing projects, I leant that teamwork, determination and hard work were the prices for success.<br>\r\nI joined the presentation and script writing unit, transforming our actions into well expressed spoken and written words, that helped my team have an up to standard annual report and presentations. <br>\r\nOne of the projects I worked on with my Enactus team was a Fulani Initiative Empowerment project (FIEP) that gave the undergraduate project work interest on dairy product marketing by the Fulani women which was the first of its kind to be done in the department considering the tension hovering around the Fulani people.<br>\r\nThese skills acquired while on campus got me my first job experience in 2016 as a research assistant for the Michigan State University team on the â€œuneven implementation of pesticide policies in west Africaâ€ which was an ECOWAS project funded by USAID and the BILL AND MELINDA GATES FOUNDATION. I was the head for the team in Nigeria drawing zonal heads from Universities, collected data and conducted interviews from over 18states, organized and analyzed the data, compiled report and recommendations which was then submitted to the ECOWAS although I was just a fresh graduate waiting for NYSC. Interestingly, without Enactus i wouldnâ€™t have been able to achieve this. \r\nI am grateful to Enactus for changing my life and helping me in my most desired career line â€œresearch and consultingâ€. I encourage all Enactus Team members to take their cause with the team seriously as the positivity it adds to life cannot be over emphasized. Note that the journey isnâ€™t all rosy but that your abilities to overcome challenges makes us superior to the challenge. Indeed, any decision to join Enactus is a right path. I am proudly an Enactus Alumni!!!!!!!', 'omariaebiojo@gmail.com', '2018-03-29', 'uploads/19811S26636_283_edit.png'),
(7, 'Ngozi Ukweni', 'I am Ngozi Ukweni, a young female Nigerian Consultant with KPMG and proud Enactus Alumni. I joined Enactus in 2011 during a Community Development seminar delivered by the BABCOCK University Enactus team. I worked closely with the team on â€œProject Cash the Trashâ€, where we employed people to collate PET bottles around the school, after which, we sold the bottles to a recycling company. The beneficiaries were so excited about their new source of income and inspired me to sustain several community projects that reach out to people, make profit and preserve the planet.<br>\r\nSoon after my first project, I took on the role of team secretary in 2013 and Team leader in 2014. As team leader, I spurred the awareness project for Enactus BABCOCK University. This resulted in over 70 active team members, 2 Business Advisory Board members, recognition from the University authority and our community project qualified for the Enactus Nigeria Semi-final round competition. Furthermore, my team and I held the first BABCOCK business Start-up competition, which built 6 business that met the needs of the university and the host communities. <br>\r\nDuring my Enactus years, I learned and applied the following life principles:<br>\r\n1.	Leadership and Team work: Working with my team in Enactus, I learned to work with people despite their behavioral or cultural differences. Also, every individual has an idea that can help you achieve the desired result if you take out time to actively listen to them. As a team member, I learned to first build friendships with the people I work with and help them identify their strengths. This experience has helped me to work and interact efficiently with colleagues at work. It has also taught me to structure my team based on my team membersâ€™ competences and areas of development. Also, our team brain storming sessions has helped me think critically and proffer solutions to client challenges on daily basis.<br>\r\n2.	Networking: Enactus provides an opportunity to meet great people, business leaders and young people with excellent skills and ideas. This has helped me to build strong business relationships, approach High net-worth Individuals and mentor younger people. Recently, I was recognized with an award for â€œProjecting the Brandâ€ in one of the Big Four Accounting Firms in Nigeria. <br>\r\n3.	Time management: During my Enactus year, I had to joggle community projects, deliverables, friends and my academics. Eventually, I graduated in the top 10 percentile of my class while being the team leader of Enactus. I learned how to prioritize my time, work hard, adopt technology to work efficiently and achieve the expected result. <br>\r\n4.	Community service: â€˜A head for business, a heart for the worldâ€™. Enactus creates in you the Passion to take action that brings positive change in any environment you find yourself. This is a sparkle that the university system may not create in you. This sparkle continuously drives me to achieve excellence at work and help other professionals see that service is the rent we pay for living. I am currently a volunteer for Fate Foundation as well as other Non-Governmental Organizations.<br>\r\nI am grateful to Enactus Nigeria for reaching out to us at a young stage, creating a platform for me to discover that I can create value while impacting the lives of others and for making Nigeria a better place, one life at a time.', 'engeeukweni@gmail.com', '2018-03-29', 'uploads/81533Me.jpg'),
(8, 'DABERECHI OKEDURUM', 'I am DABERECHI OKEDURUM a certified Creative thinking and problem solving facilitator with experience in helping Individuals, Organizations and Institutions apply Deliberate Creativity, Critical Thinking and Innovation in Solving Problems, Maximizing Opportunities and Implementing Feasible Solutions. <br>\r\nI was a Spotlight speaker/facilitator at the prestigious Annual Creative Problem Solving Institute Buffalo New York, International Creativity Conference for Educators in South Africa and guest speaker at Pepperdine University\'s Business graduate program in Malibu California and several other institutions where i lead interaction on Creativity, critical thinking and Problem Solving.\r\nWhilst I am still a work in progress, it is important to note that Enactus played a very key role in helping me arrive at this point. As individuals, we all have (or will have) that moment that defines a total turnaround in our life\'s, that moment for me was becoming a member of SIFE (now Enactus) in 2008. As an undergraduate, my goal was to do all I can to emerge as a productive graduate ready made for the marketplace. This goal drove me to enroll in FATE foundationâ€™s aspiring entrepreneurs program; an opportunity that was shared by our then team leader, upon completion of the program; my team was the first point of call to put into practice what I have learnt from my entrepreneurship training; this brings me to my first lesson; â€œEnactus provides you as a student the best platform to practice theories you learn in class, which in turn gives you an edge over your colleagues who intend doing same after graduationâ€<br>\r\nIn being committed to impacting lives and joining hands in building a formidable team outstanding in academics and in purposeful living, we encountered so many challenges such as fund raising, institutional support, unstable school calendar, troublesome team mates etc. as we surmounted these challenges such as running smaller projects (so as to have milestones to prove a point to potential funders and institution) with our pocket money, what we did not know was that these challenges were actually stretching us to discover our unique gifting and prepare us for a future where bigger challenges will present itself of which by then we must have been formed to surmount. My commitment in ENACTUS earned me a scholarship from the United States Government in 2010, to study Social Entrepreneurship at the University of Connecticut; what I did when this opportunity showed up was to simply share my experience as a member of Enactus. In summary, I gained the following:<br>\r\nâ€¢         A highly resourceful network of individuals and organizations that consistently add value to my work as a Creative Thinking and Problem Solving Facilitator<br>\r\nâ€¢         A breeding ground to groom my skill set, try out new product or service and gain marketplace experience<br>\r\nâ€¢         Opportunity to impact lives and becoming a change agent; great leaders often start from showing up at little opportunities like this<br>\r\nâ€¢         Gaining financial management skills, funding skills, marketing skills, project management skills, research skills and many more soft skills which I earned without spending a dime to learn.', 'daberechid@gmail.com', '2018-03-29', 'uploads/86327daberechi.jpg'),
(9, 'Akinfala Victor', 'I am Akinfala Victor a business & capacity development expert, project management & management information system professional.\r\nI have my first degree in Economics and second degree in Business Administration with several certifications in Project Management, Six Sigma, Hardware, Networking, e-Business, e-commerce, Microsoft office Suites to mention but few. I got leadership and entrepreneurship awards with SIFE (Students In Free Enterprise) Springfield, USA, Coca-Cola African Foundation, Victoria University Wellington, New Zealand, Fordham University, New York, Young Africans Leadership Initiatives (YALI Network), I am also a Development Knowledge Facilitator with UN-MDGs.<br>\r\nEnactus challenged me and trained me to create sustainable business solutions through projects. I served as the pioneer team leader for Tai Solarin University of Education, volunteered at different capacities at the National competition, trained and mentored about 12 teams to major successes throughout the country I am currently a team mentor and member of the Business Advisory board of two Enactus teams in Enactus Nigeria Network. ENACTUS contributed immensely to my self-discovery, activation of my potentials and it helped me find my professional , leadership and entrepreneurship development  path. I always refer to Enactus as THE PLATFORM for real value transfer.<br>\r\nI worked briefly with Enactus Nigeria before joining GLOBACOM LIMITED, LAMID CONSULTING and currently with NEW HORIZONS SYSTEMS SOLUTIONS Limited as a Technical Instructor and Administrator. The same role I perform as a consultant to Babcock University. I consult for IMAGE DOCTOR SERVICES(PRESS) LIMITED and i also volunteered my hours, skills and professionalism to United Nations Online Volunteer in addition to being Program Executive to ICHOOSE RIGHT YOUTH FOUNDATION.<br>\r\nIn 2014, i founded FALAWORLD INTEGRATED ENTERPRISE (FINE) a general merchant enterprise.', 'falaworld@gmail.com', '2018-03-29', 'uploads/87789victor.png');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `board_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `img_loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`board_id`, `name`, `position`, `designation`, `company`, `date`, `img_loc`) VALUES
(1, 'MRS BERNADINE OKEKE', 'Board Chair', 'MANAGING DIRECTOR', 'CARDINAL DEVELOPERS LTD', '2018-03-28', 'uploads/80594berna.jpg'),
(2, 'TONYE COLE', 'Deputy Board Chair', 'MANAGING DIRECTOR', 'SAHARA GROUP', '2018-03-28', 'uploads/590Tonye-Cole-Sahara.jpg'),
(3, 'KABIR OKUNLOLA', 'MEMBER', 'PARTNER', 'KPMG', '2018-03-28', 'uploads/82146KABIR.jpg'),
(4, 'MRS EVELYN OPUTU', 'MEMBER', 'MANAGING DIRECTOR', 'OVIE BRUME FOUNDATION', '2018-03-28', 'uploads/32047evelyn.jpg'),
(5, 'ENGR. ADAMS OKOENE', 'MEMBER', 'MANAGING DIRECTOR', 'MIDWESTERN OIL & GAS', '2018-03-28', 'uploads/75204okene.jpg'),
(6, 'MR KWAME WIAFE', 'MEMBER', 'MANAGING DIRECTOR', 'A&P FOODS LTD', '2018-03-28', 'uploads/73855kwame.jpg'),
(7, 'MR OGHALE ELUENI', 'MEMBER', 'MANAGING DIRECTOR', 'SC Johnson Ltd', '2018-03-28', 'uploads/42394oghale.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `campus_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`campus_id`, `name`, `story`, `date`) VALUES
(1, 'ENACTUS NIGERIA ON-CAMPUS COMPETITION', '<p>&nbsp;&nbsp;&nbsp; <img alt=\"\" src=\"/admin/ckeditor/kcfinder/upload/images/oncampus.jpg\" style=\"height:464px; width:758px\" /></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">The Enactus Nigeria On-Campus Competition also known as the Campus Entrepreneurship challenge is a showcase of the innovative solutions by Enactus teams that are carefully crafted and implemented with the aim of transforming lives and enabling progress in the team&rsquo;s host community and others by extension. </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">It is also a publicity event and marketing tool that inspires commitment and support from key stakeholders i.e. institution&rsquo;s management, cooperate organizations and students. It enables teams select their best life changing projects in preparation for the National Competition with the hope that these projects would earn them a place to represent Nigeria at the prestigious Enactus World Cup competition.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">The On campus Competition therefore, is a compulsory stage in an Enactus year as it provides Enactus teams the opportunity to share the results of the different projects implemented by the various groups whilst gathering strong support and followership from&nbsp; the institution&rsquo;s management, prospective and existing partners as well as fellow students.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">The Campus Entrepreneurship Challenge provides a fantastic opportunities for both prospective and existing partners to see firsthand how through these innovative solutions, the Enactus team seeks to transform the lives of target beneficiaries, empower individuals and thereby opening up opportunities for further partnerships. Thus, this strengthen their relationship with the institution&rsquo;s management whilst working together to achieve the set objectives, create more awareness of their activities and encourage more membership and thus market the team and its activities to all stakeholders</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">Amongst other things, the campus entrepreneurship challenge helps to identify and select the best team of presenters who will represent the team thus serving as a dress rehearsal to the National Competition. </span></span></span></p>', '2018-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `conference_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`conference_id`, `title`, `story`, `date`) VALUES
(1, 'ENACTUS NIGERIA ANNUAL LEADERSHIP CONFERENCE 2018.', '<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><em><img alt=\"\" src=\"/admin/ckeditor/kcfinder/upload/images/IMG_1395.jpg\" style=\"height:523px; width:786px\" /></em></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"color:null\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">Leadership development took a new meaning when 323 selected students from 33 tertiary institutions (universities and polytechnics) converged at Covenant University for a 2 day Leadership Conference organized by Enactus Nigeria in partnership with ACT Foundation. </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"color:null\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">Speaking at the conference was Ndidi Nwuneli, Founder, Leap Africa and Co-founder AACE Food processing. </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"color:null\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">Themed &ldquo;achieving personal Success through self-leadership&rdquo; the Enactus Nigeria leadership conference 2018 focused on exposing the 323 participating student leaders to the concept and benefits of self-leadership whilst positioning them for success in their leadership journey. It also provided the opportunity to deepen the understanding of the participants on the concept, purpose and processes of the Enactus programme whilst empowering them with the necessary tools to enable real human progress in their communities.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"color:null\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">Day one of the Leadership conference presented high profile and remarkable personalities in the likes of the Vice Chancellor, Covenant University Prof. A. A. A Atayero; and the Founder LEAP Africa and Co-founder AACE Foods, Mrs. Ndidi Okonkwo Nwuneli both sharing different exciting perspectives on the theme of the conference. Also present, was the Programmes Manager, ACT Foundation, Mrs. Ndifereke Okwuegbunam, who facilitated the session on <strong><em>&quot;Effective Project Management &ndash; a tool for real impact and transformation&rsquo;&rsquo;</em></strong> and encouraged participants to be more deliberate in applying the principles of project management to their community outreach project. </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"color:null\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">The session on <strong><em>&ldquo;implementing outcome based projects&rdquo;</em></strong> was facilitated by the Enactus Nigeria Country Director, Michael Ajayi. The session turned out to be an eye opener for the participating students as it focused on how best to leverage commercialization of the innovative solutions created to expand the scale and impact of their projects. Other sessions at the conference focused on the core Enactus programme as a way of preparing the participating Enactus teams for yet another fulfilling Enactus year.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">During the 2 day intensive leadership conference, the Faculty (staff) Advisors&rsquo; sessions centered basically around empowering the Enactus Faculty (staff) Advisors to be more effective in the role they play as mentors to the Enactus students on their respective campuses.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img alt=\"\" src=\"/admin/ckeditor/kcfinder/upload/images/IMG_1504.jpg\" style=\"height:147px; width:221px\" />&nbsp;&nbsp; <img alt=\"\" src=\"/admin/ckeditor/kcfinder/upload/images/IMG_1535.jpg\" style=\"height:146px; width:220px\" />&nbsp;&nbsp; <img alt=\"\" src=\"/admin/ckeditor/kcfinder/upload/images/IMG_1577.jpg\" style=\"height:144px; width:216px\" /> </span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-size:14px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img alt=\"\" src=\"/admin/ckeditor/kcfinder/upload/images/IMG_1554.jpg\" style=\"height:147px; width:221px\" />&nbsp;&nbsp; <img alt=\"\" src=\"/admin/ckeditor/kcfinder/upload/images/IMG_1585.jpg\" style=\"height:145px; width:218px\" />&nbsp;&nbsp; <img alt=\"\" src=\"/admin/ckeditor/kcfinder/upload/images/IMG_1513.jpg\" style=\"height:146px; width:221px\" /></span></span></p>', '2018-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `nationals`
--

CREATE TABLE `nationals` (
  `nationals_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `img_loc` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nationals`
--

INSERT INTO `nationals` (`nationals_id`, `title`, `story`, `img_loc`, `date`) VALUES
(2, 'ENACTUS NIGERIA NATIONAL COMPETITION 2018.', '<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img alt=\"\" src=\"/admin/ckeditor/kcfinder/upload/images/ncwin.jpg\" style=\"height:281px; width:532px\" /></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">The Enactus Nigeria National competition is a showcase of how our students across 27 states are transforming lives and enabling progress in about 90 communities through entrepreneurial action. These dynamic and inspiring events encourage creativity and reward results, ultimately leading to stronger programs and more lives improved.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">Each year, every participating country holds a National Competition to determine its representative at the prestigious Enactus World Cup. At the National Competition, various projects showcased by competing Enactus institutions are evaluated based on the depth and reach of the impact of their projects by a team of top business leaders serving as judges. The team with the most impactful, relevant, innovative, scalable and sustainable project(s) is named National champion and represents the country at the Enactus World Cup which is held annually at various prominent cities across the world - this year&rsquo;s Enactus World Cup will be held at&nbsp; Silicon Valley San Jose, California, USA. between the 9th - 11th October, 2018</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">Every Enactus student in Nigeria eagerly engages in social enterprise interventions across communities by implementing educational and community based projects that address real developmental, social and economic problems, thus transforming the lives of their target beneficiaries while making significant impact on themselves. Having successfully implemented these impactful projects and recorded results, the Enactus team collates the results and prepares to share its success story at the Enactus Nigeria National Competition.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">This year the Enactus National Competition is tentatively scheduled for the </span><span style=\"color:#c0392b\"><strong>24th - 26th July, 2018</strong></span><span style=\"color:black\"> at the Civic Centre, Victoria Island, Lagos</span></span></span></p>', '', '2018-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_id` int(10) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `img_loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partner_id`, `year`, `img_loc`) VALUES
(2, '2018', 'uploads/51223acts.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `partnership_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `img_loc` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partnership`
--

INSERT INTO `partnership` (`partnership_id`, `title`, `story`, `img_loc`, `date`) VALUES
(2, 'ENACTUS NIGERIA IN PARTNERSHIP SAHARA GROUP PROJECT ON SDGS 2018.', '<p>In the bid to contribute to the actualization of United Nations inspired Sustainable Development Goals (SDGs) in Nigeria, Enactus Nigeria, in partnership with Sahara Group, developed the <strong><em>&ldquo;Reaching the Goals&rdquo;</em></strong> program.</p><p>An integrated development project, <strong><em>&ldquo;Reaching the Goals&rdquo;</em></strong> is designed to create a widespread national publicity for the SDGs and encourage inclusive participation whilst inspiring Enactus students and other dynamic, innovative and enterprising Nigerian youths to create innovative solutions that can advance the achievement of the SDGs in Nigeria.</p><p>The <strong><em>&ldquo;Reaching the Goals&rdquo;</em></strong> project was structured to achieve its objectives using a two-pronged approach:</p><ul><li>The SDGs Project Implementation</li><li>The SDGs Roundtable.<br />&nbsp;</li></ul><p>Whilst the <strong><em>SDGs Project Implementation</em></strong> provided the opportunity for Enactus students across the country to implement community outreach projects (over a 5 month period) that could potentially advance the Sustainable Development Goals, the <strong><em>SDGs Roundtable</em></strong>, on the other hand, provided the opportunity for stakeholders in the Business and Media world to dialogue and make commitments to lead the charge towards achieving the Sustainable Development Goals in Nigeria.</p><p>The event which took place at the Four Points by Sheraton Lagos on the 18th of January, had in attendance representatives from both media and the business world. The Special guest was the Managing Director of Bank of Industry, Mr. Olukayode Pitan, whilst the key note address was delivered by the Managing Director of Sahara Group, Mr. Tonye Cole, represented by the Sahara Foundation Manager, Oluseyi Ojurongbe. Other memebers of the Roundtable were Katja Nwator, MD/CEO, Motive Development; representative of Mr. Innocent Chukwuma, Executive Director of Ford Foundation, Mr. Dabesaki Mac-Ikemenjima (Program Officer, Youth Opportunity and Learning) and Tony Elumelu&rsquo;s representative, Ms Bolanle Omisore, Head, Corporate Communications, TEF.</p><p>The roundtable was moderated by Adesuwa Onyenokwe, the Editor-in-Chief of Today&rsquo;s Women monthly magazine and TV host &ndash; &ldquo;seriously speaking&rdquo;. Representatives from the print media were; Mr. Joel Nwokeoma Editor Punch Newspaper,&nbsp; Mr. Wale Ajetumobi Editor, Campus Desk, the Nation&rsquo;s newspaper and&nbsp; Mr. Mojeed Alabi from the New Telegraph Newspaper. Also present were Enactus students from University of Lagos, Federal Polytechnic Idah, Ekiti State University and Bayero University, Kano. The students made a multimedia presentation on innovative community projects that have been developed to contribute to achieving the SDGs particularly in the areas of cheap and alternative source of energy and clean portable water supply.</p>', '', '2018-03-29'),
(3, 'eeeeeeee', '<p>eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>', 'uploads/1389services-2.jpg', '2018-05-31'),
(4, 'bsusubhusi', '<ul><li>hgvsyhbhubvuuuu<em><strong>uuuuuu</strong></em>uuuuuuuuuuuuuuuuuuu</li></ul>', 'uploads/19594comment-3.png', '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `img_loc` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `title`, `story`, `img_loc`, `date`) VALUES
(1, 'Thousands Compete in National Literacy Competition in Nigeria', '<p>ssssssssssssssssssssssssssssssbbbbbbbbbbbbbbbiubsiubiubsiubxius xiubsiubxibnsubxhs xiuboboibi xbsioubxioubsiobxios s</p>', 'uploads/51454testimonial-2.png', '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(10) UNSIGNED NOT NULL,
  `section_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`) VALUES
(1, 'Board Of Directors'),
(2, 'Teams'),
(3, 'Alumni'),
(4, 'Volunteers'),
(5, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img_loc` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `position`, `facebook`, `twitter`, `instagram`, `email`, `img_loc`, `date`) VALUES
(1, 'Michael Ajayi', 'Country Director', 'https://www.facebook.com/michael.ajayi1', 'https://twitter.com/MichaelAjayi3', 'https://www.instagram.com/majayi3/', 'majayi@enactus.org', 'uploads/5249mike.jpg', '2018-03-28 13:25:07'),
(2, 'Raphael Anagbe', 'Programs Officer', 'https://www.facebook.com/raphael.anagbe', 'https://twitter.com/anagberaphaelt', 'https://www.instagram.com/raphaelanagbe/', 'ranagbe@enactus.org.ng', 'uploads/53128RAPHAEL.jpg', '2018-03-28 13:15:33'),
(3, 'Elizabeth Okwoho', 'Admin/Events Manger', 'https://www.facebook.com/okwoho.elizabeth', 'https://twitter.com/fovelevents', 'https://www.instagram.com/okwohoelizabeth/', 'eokwoho@enactus.org.ng', 'uploads/3359udo.jpg', '2018-03-28 13:41:56'),
(4, 'Emmanuel Udo', 'Accountant', 'https://www.facebook.com/eudo2', 'https://twitter.com/manuel_udo', 'https://www.instagram.com/emmaudo/', 'eudo@enactus.org.ng', 'uploads/10666lizzy.jpg', '2018-03-28 13:38:20'),
(5, 'Kunle Odeyemi', 'Programs Officer', 'https://www.facebook.com/SirKenzie', 'https://twitter.com/toritemi', 'https://www.instagram.com/toritemi/', 'kodeyemi@enactus.org.ng', 'uploads/29781Kay Passport Foto.jpg', '2018-03-28 13:30:42'),
(6, 'Ayodeji Tade', 'Programs Officer(IT)', 'https://www.facebook.com/papeyscott', 'https://twitter.com/papeyscott', 'https://www.instagram.com/papeyscott/', 'atade@enactus.org.ng', 'uploads/23747deji.jpg', '2018-03-28 13:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `fa1` varchar(255) NOT NULL,
  `fa2` varchar(255) NOT NULL,
  `fa3` text NOT NULL,
  `date` date NOT NULL,
  `img_loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `name`, `year`, `facebook`, `twitter`, `instagram`, `fa1`, `fa2`, `fa3`, `date`, `img_loc`) VALUES
(1, 'Bayero University Kano', '2005', 'http://facebook.com/enactusbuk', 'https://twitter.com/Enactus_Buk', 'https://instagram.com/enactus_buk', 'Professor Mukhtar Halliru', 'Mallama Halima', '', '2018-03-28', 'uploads/96733buk.jpe'),
(2, 'University of Port Harcourt', '2004', 'https://facebook.com/enactusuniport', 'https://twitter.com/EnactusUniport', 'https://instagram.com/enactusuniport', 'Dr. (Mrs) C. M. Uche', 'Dr. Steve Wordu', 'Mr. Paul Nyulaku', '2018-03-28', 'uploads/1612uniport.jpg'),
(3, 'Olabisi Onabanjo University', '2008', 'https://facebook.com/enactusoou', 'https://twitter.com/ Enactusoou', 'https://instagram.com/enactusoou', 'Mr Sina Ogede', 'Engr. Collins Nwaokocha', 'Engr. Layeni Abayomi', '2018-03-28', 'uploads/97872oou.jpg'),
(4, 'University of Abuja', '2017', 'https://www.facebook.com/enactus.uniabuja', 'https://twitter.com/UniAbujaEnactus', '', 'Professor Bassey Ubom', '', '', '2018-03-28', 'uploads/16606uniabuja.jpg'),
(5, 'Tai Solarin University<br> of Education', '2007', 'https://www.facebook.com/enactus.tasued', 'https://twitter.com/tasued_enactus', 'https://www.instagram.com/enactus_tasued/', 'Mr Lawal', '', '', '2018-03-28', 'uploads/29694tasued.jpg'),
(6, 'Rufus Giwa Polytechnic', '2013', 'https://facebook.com/enactus.rufusgiwapolytechnic', 'https://twitter.com/RugipoEnactus', 'https://instagram.com/enactusrugipo', 'Mr. Akintan Akindele Akinyemi', '', '', '2018-03-28', 'uploads/93742rufgipo.jpg'),
(7, 'Ekiti State University', '2006', 'https://www.facebook.com/enactus.eksu.14', 'https://twitter.com/ENACTUSEKSU', 'https://instagram.com/enactuseksu', 'Prof. Abel Ariyo Awe', 'Mr. Kehinde Adekambi', '', '2018-03-28', 'uploads/26849eksu.jpg'),
(8, 'Adekunle Ajasin University', '2005', 'https://www.facebook.com/enactus.aaua', 'https://twitter.com/EnactusAAUA', 'https://www.instagram.com/enactus_aaua', 'Mr Tope Famuti', 'Mr Louis Adekola', '', '2018-03-28', 'uploads/19789aau.png'),
(9, 'Federal Polytechnic Offa', '2005', 'https://facebook.com/enactusfedpoffa', 'https://twitter.com/enactus_Fpo', 'http://instagram.com/enactusfedpoffa', 'Dr.K.S Eniola', 'Mr. Salaudeen', '', '2018-03-28', 'uploads/29755fpo.jpg'),
(10, 'University of Calabar', '2010', 'https://m.facebook.com/home.php?_rdr', 'https://twitter.com/home', 'https://www.instagram.com/', 'Ms. Grace Ihejiamaizu', '', '', '2018-03-28', 'uploads/61165unical.jpg'),
(11, 'University of Uyo', '2003', 'https://facebook.com/enactusuniuyo', 'https://twitter.com.enactusuniuyo', 'https://Instagram.com/enactus.uniuyo', 'Dr. Dennis Igwe', '', '', '2018-03-28', 'uploads/30710uniuyo.jpg'),
(12, 'Federal University of Technology Owerri', '2007', 'https://www.facebook.com/enactus.futo', 'http://twitter.com/enactus_futo', 'http://instagram.com/enactusfuto', 'Prof.  O. T. Ebiringa', '', '', '2018-03-28', 'uploads/60458futo.jpg'),
(13, 'Kwara State University', '2011', 'https://facebook.com/kwasuenactus', 'https://twitter.com/kwasuenatus', 'https://instagram.com/kwasuenactus', 'Dr Mrs Busayo Otokiti,', 'Mr Sunday Ojo', 'Mr Philips', '2018-03-28', 'uploads/85127kwasu.jpg'),
(14, 'Kaduna Polytechnic', '2003', 'https://www.facebook.com/sife.kadpoly', 'https://twitter.com/enactus_kadpoly?s=08', 'https://www.instagram.com/enactuskadpoly/', 'Mahmuda kukasheka', '', '', '2018-03-28', 'uploads/77823kadpoly.jpg'),
(15, 'Federal University Dutsin-Ma', '2015', 'https://facebook.com/enactusfudma', 'https://twitter.com/enactusfudma', 'https://instagram.com/enactusfudma', 'Dr. lukman Oladejo Gbolagade', '', '', '2018-03-28', 'uploads/27169fudma.jpg'),
(16, 'University of Agriculture Markudi', '2004', 'https://facebook.com/enactusuam', 'https://twitter.com/Enactusuam', 'https://instagram.com/enactus_uam', 'Engr. Prof.S.V. Irtwange', '', '', '2018-03-28', 'uploads/93416uam.jpg'),
(17, 'Federal University of Technology Akure', '2008', 'https://facebook.com/enactusfuta', 'https://twitter.com/Enactusfuta', 'https://Instagram.com/enactus.futa', 'Dr Mrs M.O Ajayi', 'Mr Oluborode', '', '2018-03-28', 'uploads/98039futa.jpg'),
(18, 'University of Lagos', '2007', 'https://facebook .com/enactusunilag', 'https://twitter.com/enactusunilag_', 'https://Instagram.com/enactusunilag_', 'Dr Yewande Ntekim-Rex', 'Mr Glorious Adekoya', '', '2018-03-28', 'uploads/31706unilag.jpg'),
(19, 'Lagos State University', '2018', 'http://facebook.com/enactuslasu', 'https://twitter.com/lasuteam', 'http://Instagram.com/enactua_lasu', 'not available', '', '', '2018-03-28', 'uploads/31750lasu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teamvisit`
--

CREATE TABLE `teamvisit` (
  `teamvisit_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamvisit`
--

INSERT INTO `teamvisit` (`teamvisit_id`, `name`, `story`, `date`) VALUES
(3, 'ENACTUS NIGERIA TEAM VISITATION AND TRAINING 2018.', '<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><img alt=\"\" src=\"/admin/ckeditor/kcfinder/upload/images/visit.jpg\" style=\"height:591px; width:788px\" /></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">Every year, Enactus teams across Nigeria have the opportunity of receiving an Enactus Program staff on their campus for a two to three day of team visitation and training. This is a very strategic part of the Enactus year as it amongst other things, provide teams with the opportunity to interact and share knowledge and experience with the Enactus program staff present especially as it affects the team&rsquo;s dynamics, projects and understanding of the Enactus concepts, processes and purpose.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">The Enactus team visitation and training program is designed to enable the Enactus Country office provide hands on learning experience for the teams as it ensures inclusiveness. Among other things the team visitation and training exercise seeks to achieve, it is designed to:</span></span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">1.) provide better understanding of Enactus concept, process and purpose for all Enactus teams</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">2.) enhance the impact, scale and scope of projects undertaken by teams by providing them with project management best practice</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">3.) support the team&rsquo;s publicity and recruitment process</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">4.) promote and ensure cordial relationship between team and Faculty Advisor(s) as well as Institution Management</span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">During these visits, the discussions and interactions are tailored to address the peculiar challenges of the teams especially as it relates to managing outcome based projects, managing the Enactus team and preparations for the National Competition. </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">The Enactus Team Visitation and Training program brings a lot of buzz and excitement to these campuses as they are excited to see the Enactus Program Staff analyze the depth of their projects impact and what areas needs improvement. </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">It is truly safe to say that a properly executed team visitation and training program, translates into better projects with great reach and impact and a very competitive National Competition.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-size:16px\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"color:black\">For the 2017/2018 Enactus year,&nbsp; the program began in November 2017 and is currently ongoing with a total of 21 teams already visited.</span></span></span></p>', '2018-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `testimony_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `story` varchar(255) NOT NULL,
  `img_loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`testimony_id`, `name`, `story`, `img_loc`) VALUES
(1, 'bill', 'This is an example of the testimony i talked about', 'uploads/35408lizzy p.jpg'),
(2, 'yayayy', 'yyygysyssyvsyvy', 'uploads/67106IMG_1504.jpg'),
(3, 'ndidi', 'enactus is great', 'uploads/90618IMG_1535.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `volunteer_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `img_loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumni_id`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`board_id`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`campus_id`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`conference_id`);

--
-- Indexes for table `nationals`
--
ALTER TABLE `nationals`
  ADD PRIMARY KEY (`nationals_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`partnership_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `teamvisit`
--
ALTER TABLE `teamvisit`
  ADD PRIMARY KEY (`teamvisit_id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`testimony_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ads_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `alumni_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `board_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `campus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `conference_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nationals`
--
ALTER TABLE `nationals`
  MODIFY `nationals_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partnership`
--
ALTER TABLE `partnership`
  MODIFY `partnership_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teamvisit`
--
ALTER TABLE `teamvisit`
  MODIFY `teamvisit_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `testimony_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `volunteer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
