-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 04:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libman`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_pass` varchar(20) NOT NULL,
  `admin_phone` varchar(15) NOT NULL,
  `admin_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`, `admin_phone`, `admin_email`) VALUES
('farah', 'farahhh', '0122136403', 'farraahh@gmail.com'),
('jati', 'izzati', '0103046321', 'zzaticomel@yahoo.cpm'),
('jimbo', 'bobo', '0123456789', 'sayedifitnah@gmail.com'),
('tikah', 'tikah', '0198765432', 'pujahbibik@indon.com');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(30) NOT NULL,
  `author` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='books that can be added to cart';

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `genre`, `author`, `created`, `modified`) VALUES
(27, 'feed', 'The year was 2014. We had cured cancer. We had beaten the common cold. But in doing so we created something new, something terrible that no one could stop.The infection spread, virus blocks taking over bodies and minds with one, unstoppable command: FEED. Now, twenty years after the Rising, bloggers Georgia and Shaun Mason are on the trail of the biggest story of their livesï¿½the dark conspiracy behind the infected.The truth will get out, even if it kills them.', 'horror', 'Mira Grant', '2016-10-28 20:49:40', '2016-10-28 12:49:40'),
(28, 'Blackout', 'The year was 2014. The year we cured cancer. The year we cured the common cold. And the year the dead started to walk. The year of the Rising.\r\n\r\nThe year was 2039. The world didn\'t end when the zombies came, it just got worse. Georgia and Shaun Mason set out on the biggest story of their generation. They uncovered the biggest conspiracy since the Rising and realized that to tell the truth, sacrifices have to be made.\r\n\r\nNow, the year is 2041, and the investigation that began with the election of President Ryman is much bigger than anyone had assumed. With too much left to do and not much time left to do it in, the surviving staff of After the End Times must face mad scientists, zombie bears, rogue government agencies-and if there\'s one thing they know is true in post-zombie America, it\'s this:\r\n\r\nThings can always get worse.\r\n\r\nBlackout is the conclusion to the epic trilogy that began in the Hugo-nominated Feed and the sequel, Deadline. ', 'horror', 'Mira Grant', '2016-10-28 20:52:43', '2016-10-28 12:52:43'),
(29, 'The Starless Sea', 'Zachary Ezra Rawlins is a graduate student in Vermont when he discovers a mysterious book hidden in the stacks. As he turns the pages, entranced by tales of lovelorn prisoners, key collectors, and nameless acolytes, he reads something strange: a story from his own childhood. Bewildered by this inexplicable book and desperate to make sense of how his own life came to be recorded, Zachary uncovers a series of clues--a bee, a key, and a sword--that lead him to a masquerade party in New York, to a secret club, and through a doorway to an ancient library, hidden far below the surface of the earth.\r\n\r\nWhat Zachary finds in this curious place is more than just a buried home for books and their guardians--it is a place of lost cities and seas, lovers who pass notes under doors and across time, and of stories whispered by the dead. Zachary learns of those who have sacrificed much to protect this realm, relinquishing their sight and their tongues to preserve this archive, and also those who are intent on its destruction.\r\n\r\nTogether with Mirabel, a fierce, pink-haired protector of the place, and Dorian, a handsome, barefoot man with shifting alliances, Zachary travels the twisting tunnels, darkened stairwells, crowded ballrooms, and sweetly-soaked shores of this magical world, discovering his purpose--in both the mysterious book and in his own life.', 'fiction', 'Erin Morgenstern', '2016-10-28 20:56:23', '2016-10-28 12:56:23'),
(31, 'Twenty-One Truths About Love', 'This heartfelt story is about the lengths one man will go to and the risks he will take to save his family. But Dan doesn\'t just want to save his failing bookstore and his family\'s finances-he wants to become someone.', 'fiction', 'Matthew Dicks', '2016-10-28 20:59:20', '2016-10-28 12:59:20'),
(32, 'The Accomplice', 'Seventeen years after the fall of the Third Reich, Max Weill has never forgotten the atrocities he saw as a prisoner at Auschwitz—nor the face of Dr. Otto Schramm, a camp doctor who worked with Mengele on appalling experiments and who sent Max’s family to the gas chambers. As the war came to a close, Schramm was one of the many high-ranking former-Nazi officers who managed to escape Germany for new lives in South America, where leaders like Argentina’s Juan Perón gave them safe harbor and new identities. With his life nearing its end, Max asks his nephew Aaron Wiley—an American CIA desk analyst—to complete the task Max never could: to track down Otto in Argentina, capture him, and bring him back to Germany to stand trial.', 'historical', 'Joseph Kanon', '2016-10-28 21:03:19', '2016-10-28 13:03:19'),
(33, 'The Education of an Idealist: A Memoir', 'Pulitzer Prize winner Samantha Power, widely known as a relentless advocate for promoting human rights, has been heralded by President Barack Obama as one of America\'s \"foremost thinkers on foreign policy.\"', 'nonfiction', 'Samantha Power', '2016-10-28 21:05:30', '2016-10-28 13:05:30'),
(34, 'The Dutch House', 'At the end of the Second World War, Cyril Conroy combines luck and a single canny investment to begin an enormous real estate empire, propelling his family from poverty to enormous wealth. His first order of business is to buy the Dutch House, a lavish estate in the suburbs outside of Philadelphia. Meant as a surprise for his wife, the house sets in motion the undoing of everyone he loves.\r\n\r\nThe story is told by Cyril’s son Danny, as he and his older sister, the brilliantly acerbic and self-assured Maeve, are exiled from the house where they grew up by their stepmother. The two wealthy siblings are thrown back into the poverty their parents had escaped from and find that all they have to count on is one another. It is this unshakable bond between them that both saves their lives and thwarts their futures.\r\n\r\nSet over the course of five decades, The Dutch House is a dark fairy tale about two smart people who cannot overcome their past. Despite every outward sign of success, Danny and Maeve are only truly comfortable when they’re together. Throughout their lives, they return to the well-worn story of what they’ve lost with humor and rage. But when at last they’re forced to confront the people who left them behind, the relationship between an indulged brother and his ever-protective sister is finally tested.', 'fiction', 'Ann Patchett', '2016-10-28 21:06:34', '2016-10-28 13:06:34'),
(35, 'The Topeka School', 'Adam Gordon is a senior at Topeka High School, class of 1997. His mother, Jane, is a famous feminist author; his father, Jonathan, is an expert at getting \"lost boys\" to open up. They both work at the Foundation, a well-known psychiatric clinic that has attracted staff and patients from around the world. Adam is a renowned debater and orator, expected to win a national championship before he heads to college. He is an aspiring poet. He is--although it requires a great deal of posturing, weight lifting, and creatine supplements--one of the cool kids, passing himself off as a \"real man,\" ready to fight or (better) freestyle about fighting if it keeps his peers from thinking of him as weak. Adam is also one of the seniors who brings the loner Darren Eberheart--who is, unbeknownst to Adam, his father\'s patient--into the social scene, with disastrous effects.\r\n\r\nDeftly shifting perspectives and time periods, Ben Lerner\'s The Topeka School is the story of a family\'s struggles and strengths: Jane\'s reckoning with the legacy of an abusive father, Jonathan\'s marital transgressions, the challenge of raising a good son in a culture of toxic masculinity. It is also a riveting prehistory of the present: the collapse of public speech, the trolls and tyrants of the new right, and the ongoing crisis of identity among white men.', 'fiction', 'Ben Lerner', '2016-10-28 21:08:05', '2016-10-28 13:08:05'),
(36, 'Growing Things and Other Stories', 'A chilling collection of psychological suspense and literary horror from the multiple award-winning author of the national bestseller The Cabin at the End of the World and A Head Full of Ghosts.\r\n\r\nA masterful anthology featuring nineteen pieces of short fiction, Growing Things is an exciting glimpse into Paul Tremblay’s fantastically fertile imagination.\r\n\r\nIn “The Teacher,” a Bram Stoker Award nominee for best short story, a student is forced to watch a disturbing video that will haunt and torment her and her classmates’ lives.\r\n\r\nFour men rob a pawn shop at gunpoint only to vanish, one-by-one, as they speed away from the crime scene in “The Getaway.”\r\n\r\nIn “Swim Wants to Know If It’s as Bad as Swim Thinks,” a meth addict kidnaps her daughter from her estranged mother as their town is terrorized by a giant monster... or not.\r\n\r\nJoining these haunting works are stories linked to Tremblay’s previous novels. The tour de force metafictional novella “Notes from the Dog Walkers” deconstructs horror and publishing, possibly bringing in a character from A Head Full of Ghosts, all while serving as a prequel to Disappearance at Devil’s Rock. “The Thirteenth Temple” follows another character from A Head Full of Ghosts—Merry, who has published a tell-all memoir written years after the events of the novel. And the title story, “Growing Things,” a shivery tale loosely shared between the sisters in A Head Full of Ghosts, is told here in full.\r\n\r\nFrom global catastrophe to the demons inside our heads, Tremblay illuminates our primal fears and darkest dreams in startlingly original fiction that leaves us unmoored. As he lowers the sky and yanks the ground from beneath our feet, we are compelled to contemplate the darkness inside our own hearts and minds.', 'horror', 'Paul Tremblay', '2016-10-28 21:08:52', '2016-10-28 13:08:52'),
(300, 'Know My Name', 'She was known to the world as Emily Doe when she stunned millions with a letter. Brock Turner had been sentenced to just six months in county jail after he was found sexually assaulting her on Stanford’s campus. Her victim impact statement was posted on BuzzFeed, where it instantly went viral–viewed by eleven million people within four days, it was translated globally and read on the floor of Congress; it inspired changes in California law and the recall of the judge in the case. Thousands wrote to say that she had given them the courage to share their own experiences of assault for the first time.\r\n\r\nNow she reclaims her identity to tell her story of trauma, transcendence, and the power of words. It was the perfect case, in many ways–there were eyewitnesses, Turner ran away, physical evidence was immediately secured. But her struggles with isolation and shame during the aftermath and the trial reveal the oppression victims face in even the best-case scenarios. Her story illuminates a culture biased to protect perpetrators, indicts a criminal justice system designed to fail the most vulnerable, and, ultimately, shines with the courage required to move through suffering and live a full and beautiful life.\r\n\r\nKnow My Name will forever transform the way we think about sexual assault, challenging our beliefs about what is acceptable and speaking truth to the tumultuous reality of healing. It also introduces readers to an extraordinary writer, one whose words have already changed our world. Entwining pain, resilience, and humor, this memoir will stand as a modern classic.', 'nonfiction', 'Chanel Miller', '2019-08-21 15:25:37', '2019-09-10 02:51:50'),
(302, 'The Enigma of Clarence Thomas', 'Most people can tell you two things about Clarence Thomas: Anita Hill accused him of sexual harassment, and he almost never speaks from the bench. Here are some things they don’t know: Thomas is a black nationalist. In college he memorized the speeches of Malcolm X. He believes white people are incurably racist.\r\n\r\nIn the first examination of its kind, Corey Robin – one of the foremost analysts of the right – delves deeply into both Thomas’s biography and his jurisprudence, masterfully reading his Supreme Court opinions against the backdrop of his autobiographical and political writings and speeches. The hidden source of Thomas’s conservative views, Robin shows, is a profound skepticism that racism can be overcome. Thomas is convinced that any government action on behalf of African-Americans will be tainted by racism; the most African-Americans can hope for is that white people will get out of their way.\r\n\r\nThere’s a reason, Robin concludes, why liberals often complain that Thomas doesn’t speak but seldom pay attention when he does. Were they to listen, they’d hear a racial pessimism that often sounds similar to their own. Cutting across the ideological spectrum, this unacknowledged consensus about the impossibility of progress is key to understanding today’s political stalemate.', 'nonfiction', 'Corey Robin', '2018-12-19 16:22:10', '2019-09-10 03:08:20'),
(303, 'How to Fight Anti-Semitism', '“Stunning . . . Bari Weiss is heroic, fearless, brilliant and big-hearted. Most importantly, she is right.”—Lisa Taddeo, #1 New York Times bestselling author of Three Women\r\n\r\nOn October 27, 2018, eleven Jews were gunned down as they prayed at their synagogue in Pittsburgh. It was the deadliest attack on Jews in American history.\r\n\r\nFor most Americans, the massacre at Tree of Life, the synagogue where Bari Weiss became a bat mitzvah, came as a total shock. But anti-Semitism is the oldest hatred, commonplace across the Middle East and on the rise for years in Europe. So that terrible morning in Pittsburgh raised a question Americans can no longer avoid: Could it happen here?\r\n\r\nThis book is Weiss’s answer.', 'nonfiction', 'Bari Weiss', '2018-03-13 15:22:39', '2019-09-15 09:11:03'),
(304, 'Sarah Jane', 'Sarah Jane Pullman is a good cop with a complicated past. From her small-town chicken-farming roots through her runaway adolescence, court-ordered Army stint, ill-advised marriage and years slinging scrambled eggs over greasy spoon griddles, Sarah Jane unfolds her life story, a parable about memory, atonement, and finding shape in chaos. Her life takes an unexpected turn when she finds herself named the de facto sheriff of a rural town, investigating the mysterious disappearance of the sheriff whose shoes she\'s filling--and the even more mysterious realities of the life he was hiding from his own colleagues and closest friends.\r\n\r\nIn the tradition of James Crumley\'s The Last Good Kiss and Ivy Pochoda\'s Wonder Valley, this kaleidoscopic character study sparkles in every dark and bright detail--a virtuoso work by a master of both the noir and the tender aspects of human nature.', 'fiction', 'James Sallis', '2019-03-01 15:11:21', '2019-09-15 09:12:35'),
(305, 'Cantoras', 'In 1977 Uruguay, a military government crushed political dissent with ruthless force. In this environment, where the everyday rights of people are under attack, homosexuality is a dangerous transgression to be punished. And yet Romina, Flaca, Anita \"La Venus,\" Paz, and Malena--five cantoras, women who \"sing\"--somehow, miraculously, find one another. Together, they discover an isolated, nearly uninhabited cape, Cabo Polonio, which they claim as their secret sanctuary. Over the next thirty-five years, their lives move back and forth between Cabo Polonio and Montevideo, the city they call home, as they return, sometimes together, sometimes in pairs, with lovers in tow, or alone. And throughout, again and again, the women will be tested--by their families, lovers, society, and one another--as they fight to live authentic lives.\r\nA genre-defining novel and De Robertis\'s masterpiece, Cantoras is a breathtaking portrait of queer love, community, forgotten history, and the strength of the human spirit. At once timeless and groundbreaking, Cantoras is a tale about the fire in all our souls and those who make it burn.', 'historical', 'Carolina De Robertis', '2019-07-01 17:18:32', '2019-09-15 09:14:18'),
(37, 'Pride and Prejudice', 'Since its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language. Jane Austen called this brilliant work \"her own darling child\" and its vivacious heroine, Elizabeth Bennet, \"as delightful a creature as ever appeared in print.\" The romantic clash between the opinionated Elizabeth and her proud beau, Mr. Darcy, is a splendid performance of civilized sparring. And Jane Austen\'s radiant wit sparkles as her characters dance a delicate quadrille of flirtation and intrigue, making this book the most superb comedy of manners of Regency England.', 'fiction', 'Anna Quindlen', '2019-12-06 17:20:39', '2019-12-06 08:02:28'),
(38, 'The Diary of a Young Girl', 'In 1942, with the Nazis occupying Holland, a thirteen-year-old Jewish girl and her family fled their home in Amsterdam and went into hiding. For the next two years, until their whereabouts were betrayed to the Gestapo, the Franks and another family lived cloistered in the “Secret Annexe” of an old office building. Cut off from the outside world, they faced hunger, boredom, the constant cruelties of living in confined quarters, and the ever-present threat of discovery and death. In her diary Anne Frank recorded vivid impressions of her experiences during this period. By turns thoughtful, moving, and surprisingly humorous, her account offers a fascinating commentary on human courage and frailty and a compelling self-portrait of a sensitive and spirited young woman whose promise was tragically cut short.', 'nonfiction', 'Eleanor Roosevelt', '2017-06-21 08:41:08', '2019-12-06 08:02:28'),
(102, 'The Great Gatsby', 'The Great Gatsby, F. Scott Fitzgerald\'s third book, stands as the supreme achievement of his career. This exemplary novel of the Jazz Age has been acclaimed by generations of readers. The story is of the fabulously wealthy Jay Gatsby and his new love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted \"gin was the national drink and sex the national obsession,\" it is an exquisitely crafted tale of America in the 1920s.\r\n\r\nThe Great Gatsby is o', 'fiction', 'F. Scott Fitzgerald', '2019-11-06 05:23:05', '2019-12-06 08:04:29'),
(104, 'American Psycho', 'Patrick Bateman is twenty-six and he works on Wall Street, he is handsome, sophisticated, charming and intelligent. He is also a psychopath. Taking us to head-on collision with America\'s greatest dream—and its worst nightmare—American Psycho is bleak, bitter, black comedy about a world we all recognise but do not wish to confront.', 'horror', 'Bret Easton Ellis', '2019-11-05 09:12:27', '2019-12-06 08:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `book_images`
--

CREATE TABLE `book_images` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='image files related to a book';

--
-- Dumping data for table `book_images`
--

INSERT INTO `book_images` (`id`, `book_id`, `name`, `created`, `modified`) VALUES
(83, 31, 'TwentyLove.jpg', '2016-10-28 20:58:02', '2019-12-06 08:29:45'),
(80, 34, 'DutchHouse.jpg', '2016-10-28 20:52:43', '2019-12-06 18:31:50'),
(78, 303, 'FightAnti.jpeg', '2016-10-28 20:49:40', '2019-12-06 08:31:44'),
(86, 33, 'Education.jpg', '2016-10-28 21:03:19', '2019-12-06 08:32:25'),
(90, 28, 'Blackout.jpg', '2016-10-28 21:05:30', '2019-12-06 08:33:09'),
(93, 27, 'Feed.jpg', '2016-10-28 21:06:34', '2019-12-06 08:33:50'),
(96, 302, 'Enigma.jpg', '2016-10-28 21:08:52', '2019-12-06 08:35:44'),
(99, 300, 'KnowName.jpg', '2016-10-28 21:09:44', '2019-12-06 08:36:13'),
(102, 104, 'American.jpg', '2016-10-28 21:46:06', '2019-12-06 10:50:08'),
(104, 37, 'Pride.jpg', '2016-11-02 20:15:38', '2019-12-06 08:42:01'),
(306, 38, 'Diary.jpg', '0000-00-00 00:00:00', '2019-12-06 08:42:27'),
(313, 35, 'Topeka.jpg', '0000-00-00 00:00:00', '2019-12-06 10:53:02'),
(316, 29, 'Starless.jpg', '0000-00-00 00:00:00', '2019-12-06 08:39:40'),
(319, 305, 'Cantoras.jpg', '0000-00-00 00:00:00', '2019-12-06 08:46:01'),
(321, 32, 'Accom.jpg', '0000-00-00 00:00:00', '2019-12-06 10:44:04'),
(325, 36, 'Growing.jpg', '0000-00-00 00:00:00', '2019-12-06 08:41:11'),
(328, 304, 'Sarah.jpg', '0000-00-00 00:00:00', '2019-12-06 08:45:34'),
(329, 102, 'Gatsby.jpg', '0000-00-00 00:00:00', '2019-12-06 08:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_phone`, `user_email`) VALUES
(1, 'kamila', 'bobo', '0123456789', 'kamekSykaKitak@gmail.com'),
(2, 'afrah', 'bibik', '0198765432', 'kimRahk@indon.com'),
(3, 'cahaya', 'bubu', '0123456789', 'kitak@yahoo.com'),
(4, 'maisarah', 'nor', '0145632987', 'maimai@yahoo.com'),
(5, 'Syazi Hari', 'haharif', '0198762345', 'syaRif@gmal.com'),
(6, 'hazi', 'fariz', '01823498576', 'izzah@yahoo.com'),
(7, 'minna', 'nami', '0163219874', 'mhaziq458@gmail.com'),
(8, 'fikra', 'kiki', '0198723645', 'fifLala@yahoo.com'),
(9, 'kemboja', 'kembb', '0141982734', 'kemkemboj@gmail.com'),
(10, 'mokhtar', 'mokmok', '0192639847', 'tarmokh@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_books`
--

CREATE TABLE `user_books` (
  `lend_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_books`
--

INSERT INTO `user_books` (`lend_id`, `user_id`, `book_id`, `start`, `end`, `status`) VALUES
(13, 2, 35, '2019-12-02', '2019-12-09', 'Returned'),
(14, 2, 34, '2019-12-02', '2019-12-03', 'Returned'),
(15, 2, 302, '2019-12-12', '2019-12-19', 'borrowing'),
(16, 2, 303, '2019-12-12', '2019-12-19', 'borrowing'),
(17, 2, 304, '2019-12-12', '2019-12-19', 'borrowing'),
(18, 2, 36, '2019-12-17', '2019-12-24', 'borrowing'),
(19, 2, 33, '2019-12-17', '2019-12-24', 'borrowing'),
(20, 1, 27, '2019-12-17', '2019-12-24', 'borrowing'),
(21, 1, 31, '2019-12-17', '2019-12-24', 'Returned'),
(25, 1, 305, '2019-12-25', '2020-01-01', 'borrowing'),
(26, 3, 37, '2019-12-06', '2019-12-13', 'Returned'),
(27, 3, 300, '2019-12-06', '2019-12-13', 'Returned'),
(28, 3, 28, '2019-11-06', '2019-11-13', 'Returned'),
(29, 3, 27, '2019-11-06', '2019-11-13', 'Returned'),
(30, 10, 35, '2019-12-06', '2019-12-13', 'Borrowing'),
(31, 10, 38, '2019-12-06', '2019-12-13', 'Returned'),
(32, 3, 29, '2019-12-07', '2019-12-14', 'Returned'),
(33, 1, 37, '2019-12-07', '2019-12-14', 'borrowing'),
(34, 1, 304, '2019-12-07', '2019-12-14', 'Returned'),
(35, 1, 37, '2019-12-07', '2019-12-14', 'borrowing'),
(37, 1, 37, '2019-12-07', '2019-12-14', 'borrowing'),
(48, 7, 102, '2019-12-07', '2019-12-14', 'Borrowing'),
(49, 9, 305, '2019-12-07', '2019-12-14', 'Borrowing'),
(50, 9, 34, '2019-12-07', '2019-12-14', 'Borrowing'),
(51, 9, 38, '2019-12-07', '2019-12-14', 'Borrowing'),
(52, 9, 37, '2019-12-07', '2019-12-14', 'Borrowing'),
(53, 7, 28, '2019-12-07', '2019-12-14', 'Borrowing'),
(54, 7, 31, '2019-12-07', '2019-12-14', 'Borrowing'),
(55, 7, 35, '2019-12-07', '2019-12-14', 'Borrowing'),
(56, 7, 36, '2019-12-07', '2019-12-14', 'Borrowing'),
(57, 7, 35, '2019-12-07', '2019-12-14', 'Borrowing'),
(58, 7, 36, '2019-12-07', '2019-12-14', 'Borrowing'),
(59, 7, 35, '2019-12-07', '2019-12-14', 'Borrowing'),
(60, 7, 36, '2019-12-07', '2019-12-14', 'Borrowing'),
(61, 7, 35, '2019-12-07', '2019-12-14', 'Borrowing'),
(62, 7, 36, '2019-12-07', '2019-12-14', 'Borrowing'),
(63, 7, 35, '2019-12-07', '2019-12-14', 'Borrowing'),
(64, 7, 36, '2019-12-07', '2019-12-14', 'Borrowing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_images`
--
ALTER TABLE `book_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_books`
--
ALTER TABLE `user_books`
  ADD PRIMARY KEY (`lend_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;

--
-- AUTO_INCREMENT for table `book_images`
--
ALTER TABLE `book_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_books`
--
ALTER TABLE `user_books`
  MODIFY `lend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
