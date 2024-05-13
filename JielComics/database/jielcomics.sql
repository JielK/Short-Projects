-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 12:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jielcomics`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `bookmark_id` int(10) NOT NULL,
  `bookmark_user` varchar(200) NOT NULL,
  `bookmark_cover` varchar(200) NOT NULL,
  `folder` varchar(200) NOT NULL,
  `bookmark_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookmarks`
--

INSERT INTO `bookmarks` (`bookmark_id`, `bookmark_user`, `bookmark_cover`, `folder`, `bookmark_title`) VALUES
(2, '3', 'cover.png', 'doctors-rebirth', 'Doctor`s Rebirth'),
(9, '2', 'cover.png', 'doctors-rebirth', 'Doctor`s Rebirth');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `chapter_id` int(200) NOT NULL,
  `directory` varchar(200) NOT NULL,
  `chapter_number` varchar(200) NOT NULL,
  `chapter_img1` varchar(200) NOT NULL,
  `chapter_img2` varchar(200) NOT NULL,
  `chapter_img3` varchar(200) NOT NULL,
  `chapter_img4` varchar(200) NOT NULL,
  `chapter_img5` varchar(200) NOT NULL,
  `chapter_img6` varchar(200) NOT NULL,
  `chapter_img7` varchar(200) NOT NULL,
  `chapter_img8` varchar(200) NOT NULL,
  `chapter_img9` varchar(200) NOT NULL,
  `chapter_img10` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`chapter_id`, `directory`, `chapter_number`, `chapter_img1`, `chapter_img2`, `chapter_img3`, `chapter_img4`, `chapter_img5`, `chapter_img6`, `chapter_img7`, `chapter_img8`, `chapter_img9`, `chapter_img10`) VALUES
(1, 'doctors-rebirth', '1', '194-c-11-8.jpg', '218-c-12-5-1.jpg', '518-c-13-6.jpg', '232-c-14-6.jpg', '386-c-1', '154-c-1', '690-c-1', '586-c-1', '182-c-1', '566-c-1'),
(2, 'doctors-rebirth', '2', '926-c-21_001-3-c2.jpg', '92-c-21_002-3-c2.jpg', '155-c-21_003-3-c2.jpg', '21-c-22_001-3-c2.jpg', '446-c-22_002-3-c2.jpg', '475-c-22_003-3-c2.jpg', '886-c-2', '823-c-2', '178-c-2', '240-c-2'),
(3, 'doctors-rebirth', '3', '611-c-31_001-4.png', '953-c-31_002-4.png', '711-c-31_003-4.png', '102-c-31_004.png', '272-c-31_005.png', '177-c-31_006.png', '906-c-32_001-4.png', '744-c-32_002-4.png', '995-c-32_003-4.png', '101-c-32_006.png'),
(4, 'doctors-rebirth', '4', '208-c-41_001-8.png', '180-c-41_002-8.png', '434-c-41_003-7.png', '891-c-41_004-1.png', '458-c-41_005-1.webp', '486-c-42_001-8.webp', '843-c-42_002-8.jpg', '85-c-42_003-7.png', '578-c-42_004-1.jpg', '662-c-42_005-1.jpg'),
(5, 'doctors-rebirth', '5', '871-c-5page1_001-35.jpg', '495-c-5page1_002-35.jpg', '245-c-5page1_003-33.jpg', '303-c-5page2_001-35.jpg', '250-c-5page2_002-35.jpg', '139-c-5page2_003-33.jpg', '264-c-5page3_001-28.jpg', '436-c-5page3_002-28.jpg', '395-c-5page3_003-26.jpg', '784-c-5'),
(6, 'return-of-the-mount-hua-sect', '1', '489-c-11-001-27.jpg', '40-c-11-002-28.jpg', '513-c-12-001-26.jpg', '698-c-12-002-26.jpg', '554-c-13-001-23.jpg', '632-c-13-002-24.jpg', '104-c-14-001-15.jpg', '682-c-14-002-15.jpg', '152-c-15-001-10.jpg', '504-c-17-16.jpg'),
(7, 'the-newbie-is-too-strong', '1', '807-c-1', '777-c-1', '953-c-1', '424-c-1', '354-c-1', '119-c-1', '79-c-1', '397-c-1', '511-c-1', '680-c-1');

-- --------------------------------------------------------

--
-- Table structure for table `comics`
--

CREATE TABLE `comics` (
  `comic_id` int(10) NOT NULL,
  `folder` varchar(200) NOT NULL,
  `cover_img` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `synopsis` varchar(1500) NOT NULL,
  `status` set('Ongoing','Completed','Hiatus','Dropped','Coming Soon') NOT NULL,
  `type` varchar(200) NOT NULL,
  `genre` set('Adventure','Fantasy','Tragedy','Horror','Slice Of Life','Action','Comedy','Romance') NOT NULL,
  `sub_genre` set('Adventure','Fantasy','Tragedy','Horror','Slice Of Life','Action','Comedy','Romance') NOT NULL,
  `sub_genre2` set('Adventure','Fantasy','Tragedy','Horror','Slice Of Life','Action','Comedy','Romance') NOT NULL,
  `stars` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comics`
--

INSERT INTO `comics` (`comic_id`, `folder`, `cover_img`, `title`, `author`, `artist`, `synopsis`, `status`, `type`, `genre`, `sub_genre`, `sub_genre2`, `stars`) VALUES
(1, 'doctors-rebirth', 'cover.png', 'Doctor`s Rebirth', 'Taeseon', 'Dobin', 'I had been abroad to do medical volunteer work, when I was swept up in a civil war. I was killed by a rebel soldier while taking a bullet for a patient. But when I finally woke up, I had become a child?!?\r\n\r\nAnd in front of me stood a destroyed carriage and a group of oddly dressed people, who were unconscious!\r\n\r\n“It’s just like a Murim world.”\r\n\r\nAs I hurry to perform first aid in an attempt to save even one person, I realize that this world is that of [The Supreme Demon King], a Murim novel I’ve enjoyed reading.\r\n\r\nAfter meeting the rescue team of the ‘Three Great Doctors’, I found out that one of the people I saved was the protagonist of this novel, the future Demon King ‘Yeoharyun’!\r\n\r\n“Hey, since I’m indebted to you for saving me, call me ‘hyung’.”\r\n\r\nFor saving his life, I become sw', 'Ongoing', 'Manhwa', 'Fantasy', 'Slice Of Life', 'Adventure', 5),
(2, 'return-of-the-mount-hua-sect', 'cover.png', 'Return of the Mount Hua Sect', 'Biga', 'LICO', 'Chung Myung, The 13th Disciple of the Mount Hua Sect, One of the 3 Great Swordsmen, Plum Blossom Sword Saint, defeated Chun Ma, who has brought destruction and disarray onto the world. After the battle, he breathes his last breath on top of the headquarter mountain of the Heavenly Demon Sect. He is reborn after 100 years in the body of a child. ……What? The Mount Hua Sect has fallen? What kind of nonsense is that!?', 'Ongoing', 'Manhwa', 'Fantasy', 'Comedy', 'Action', 0),
(3, 'the-lords-coins-arent-decreasing', 'cover.png', 'The Lord’s Coins Aren’t Decreasing?!', 'Hong Dae Eui', '-', '???: Alright, let’s keep it up and do the heave-ho\r\n<br>\r\n???: Heave\r\n<br>\r\n???: Ho\r\n<br>\r\n???: Heave\r\n<br>\r\n???: We can heave-ho all we want but I think we’re all screwed because of that guy.\r\n<br>\r\nThe Coin market that goes beyond the dimensions, A newcomer has appeared and turned the Dimensional Trading Center upside down!\r\nErun Steelguard, the enemy of all traders.\r\nHe was actually living his second life,\r\nafter losing all of this wealth to dimensional trading and dying a tragic death.\r\n\r\n“I am not the pushover I once was!”', 'Ongoing', 'Manhwa', 'Adventure', 'Fantasy', 'Action', 0),
(4, 'worn-and-torn-newbie', 'cover.png', 'Worn and Torn Newbie', 'Bonui', 'Redice Studio', 'After learning 15 miserable years of his life as a failed gamer was one long nightmare, Lee Eojin is glad to be a newbie again. Vowing not to repeat the same mistakes, Eojin starts anew as the hotshot, Old-timer. He\'s conquering monsters, getting sweet gear, and making enough dough to set himself up for life.', 'Ongoing', 'Manhwa', 'Adventure', 'Fantasy', 'Action', 0),
(7, 'drug-devourer', 'cover.png', 'Drug Devourer', '-', '-', 'One day, a gate suddenly opened in the heavens, bringing with it the invasion of monsters and the intervention of monks in the human world.\r\n<br>\r\n『Miracle Drug “Coffee” Administration』\r\n<br>\r\n『Medicinal Contents: Caffeine and Sugar』\r\n☞ Provides energy\r\n☞ Stimulates the central nervous system\r\n☞ Maximizes senses and reflexes\r\n<br>\r\nThe whole world appeared to slow down, and Hanyul’s medications began to show their true effects.', 'Ongoing', 'Manhwa', 'Action', 'Adventure', 'Fantasy', 0),
(11, 'solo-max-level-newbie', 'cover.png', 'Solo Max-Level Newbie', 'Maslow', 'Swingbat', 'Jinhyuk, a gaming Nutuber, was the only person who saw the ending of the game [Tower of Trials].<br>\r\nHowever, when the game’s popularity declined, it became difficult for him to continue making a living as a gaming Nutuber.<br>\r\nSince he already saw the ending of the game, he was about to quit playing. But that day, [Tower of Trials] became reality, and Jinhyuk, who knew about every single thing in the game, took over everything faster than anyone possibly could! “I’ll show you what a true pro is like.”', 'Ongoing', 'Manhwa', 'Action', 'Fantasy', 'Comedy', 0),
(12, 'the-dark-magician-transmigrates-after-66666-years', 'cover.png', 'The Dark Magician Transmigrates After 66666 Years', 'Hwabong', 'TARU', 'Diablo Volfir, a mighty magician, was sealed for aeons due to the schemes of the 12 Gods, but 66666 years have passed since then, and he descends to earth once again!', 'Ongoing', 'Manhwa', 'Adventure', 'Fantasy', 'Action', 0),
(13, 'reincarnation-of-the-suicidal-battle-god', 'cover.png', 'Reincarnation of the Suicidal Battle God', 'Blue-deep', 'Blue-deep', 'A time travel action fantasy of the strongest of mankind. “Even if the disgusting gods gave me this chance, an opportunity is still an opportunity. Since they want to end up dead, I will kill them.” The last survivor of mankind, Zephyr. The fight with the demons ended in defeat and the gods gave him a chance to go back 10 years in time. The demons who took everything away from humans and the gods who treated humans as beings for sight-seeing. This time, I will tear them to pieces.', 'Ongoing', 'Manhwa', 'Fantasy', 'Action', 'Tragedy', 0),
(14, 'the-newbie-is-too-strong', 'cover.png', 'The Newbie is Too Strong', 'Lottery Jackpot', 'Itbaem', 'JaeJu (which means “skill” in Korean) grew up without parents in an orphanage skillfully, just like his name suggests. One day, he heard that the orphanage was having a hard time and would have to close in 3 years. While trying to raise money for the orphanage, JaeJu got an alert on his phone. On it, he saw a video of himself climbing the tower as a BJ (broadcasting jockey aka streamer). Seven years ago, a tower suddenly appeared and randomly took people into it. If you successfully complete the tower and become an “Awakened”, it’s only a matter of time before you get rich!', 'Ongoing', 'Manhwa', 'Action', 'Adventure', 'Fantasy', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` set('admin','user') NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `email`) VALUES
(1, 'admin', 'admin', 'admin', ''),
(2, 'user', 'user', 'user', ''),
(3, 'bruh', 'yeah', 'user', ''),
(4, 'bruh2', 'nayla2236', 'user', 'ababy1227@gmail.com'),
(5, 'bruh3', 'nayla2236', 'user', 'ababy1227@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`bookmark_id`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`chapter_id`);

--
-- Indexes for table `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`comic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `bookmark_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `chapter_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comics`
--
ALTER TABLE `comics`
  MODIFY `comic_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
