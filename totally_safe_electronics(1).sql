-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05.05.2023 klo 08:53
-- Palvelimen versio: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `totally_safe_electronics`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(300) DEFAULT NULL,
  `categorySlug` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `categorySlug`) VALUES
(1, 'Hardware', 'Hardware projects'),
(2, 'Materials', 'Materials'),
(5, 'Power electronics', 'Power electronics'),
(6, 'ESP 32', 'ESP 32');

-- --------------------------------------------------------

--
-- Rakenne taululle `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `date`, `message`) VALUES
(594, 26, 1, '2023-04-13 11:37:48', 'Hello nice post. yes'),
(611, 26, 2, '2023-04-20 09:42:08', 'Really good post.  '),
(615, 26, 1, '2023-04-24 12:27:19', 'hello there'),
(617, 22, 2, '2023-04-24 14:28:32', 'this is a new comment.'),
(618, 22, 1, '2023-04-24 15:17:15', 'very nice edited');

-- --------------------------------------------------------

--
-- Rakenne taululle `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `heading` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `post` text NOT NULL,
  `category` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `abstract` tinytext NOT NULL,
  `published` tinyint(1) NOT NULL,
  `updatedat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `posts`
--

INSERT INTO `posts` (`id`, `heading`, `date`, `post`, `category`, `img`, `abstract`, `published`, `updatedat`) VALUES
(21, 'adwadawdawd', '2023-05-03', 'Hello world', 1, 'post_image21.jpg', 'dadawdadwawa', 0, '0000-00-00 00:00:00'),
(22, 'dassssssss', '2023-04-06', 'saddddddddddddddddddd', 5, 'post_image22.jpg', 'dassssssssssss', 1, '0000-00-00 00:00:00'),
(24, 'ssssssssssssss', '2023-04-20', 'sssssssssssssssssssssssssssssssssss', 1, 'post_image.jpg', 'ssssssssssssssssssssssssss', 0, '0000-00-00 00:00:00'),
(25, 'sssssssssssdasdas', '2023-04-06', 'dasdsadasdas', 5, 'post_image25.jpg', 'dasdasda', 1, '0000-00-00 00:00:00'),
(26, 'dasdasdada', '2023-05-03', 'dsaaaaaaaaaaa', 1, 'post_image26.jpg', 'asdsadasdsada', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Rakenne taululle `privacy`
--

CREATE TABLE `privacy` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vedos taulusta `privacy`
--

INSERT INTO `privacy` (`id`, `heading`, `body`, `date`) VALUES
(1, 'Privacy policy', 'Privacy Policy\r\nThis is TSE- Totally safe electronics  website: https://tse.fi \r\nHere is the privacy policy explained according to EU General Data Protection Regulation. Last update on 14.04.2023.\r\n\r\n \r\n\r\n1. Register controller\r\nTSE Totally safe electronics webpage, \r\ncontact: \r\nemail@fi \r\n \r\n\r\n\r\n \r\n\r\n2. Type of register\r\nWebsites user register. We collect data from users register emails, usernames, and profile images. \r\n\r\n \r\n\r\n3. Juridical reason to collect data from users and how we use it\r\n According to EU GDPR we have rights to collect data from users who have agreed to create an account to our website. We are using collected user data to make our blog service work better for users and to make this site more secure. \r\n\r\n \r\n\r\n4. Information inside register\r\nThe  information collected to register is: account details in webpage service,( username, password, avatar image),   users comments on webpage. \r\n\r\nHow long we keep your data stored\r\n\r\nFor users that register a personal account to our page we store their personal account information. All users can see their personal information and edit their profile except username. Websites administrators are able to see all information and they can delete any personal account from website anytime.\r\nCommenting on this site is for registered users only and if user leaves a comment on our webpage it will be immediately stored and also its metadata will be saved directly to our server. Comment are displayed on our page immediately after submit. All registered users have access to edit or delete their own comments on our webpage.  \r\n\r\n\r\n5. Our data resources\r\n We get information to our register from users using www-forms when user registers an account we get the neccessary information to create an account. \r\n\r\n6. Handing over information according to rules and sharing information inside EU or outside ETA: area. \r\n We do not share any data acolected to other parties and we do not publish give information anywhere else. We may use users ip adress if user sends us a password reset request.  \r\n\r\n\r\n7. What rights do our users have over their personal data\r\n Every user who have created an account to our page have rights to request their personal data from the register and their have rights to demand us to fix possible errors according to their personal information we hold. If a registered user wants to demand correction to data they must send a written document and we have rights to demand personal identification from that person.       \r\nA person who has a registered account on our page also has rights to request deletion of their personal data in our register.   \r\n \r\n\r\n\r\n\r\n', '2023-04-26');

-- --------------------------------------------------------

--
-- Rakenne taululle `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Rakenne taululle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`, `image`) VALUES
(1, 'user1', 'admin@mail.com', 'Admin', '$2y$10$YXAh4oaIrT2CrSwVkDmZ0.uig272GyadZpduTX6iZSMycNTkypiK.', '2023-02-03 08:23:15', NULL, 'profile1.png'),
(2, 'appleon', 'appleon@mail.com', '', '$2y$10$H5T6RDAf2iD6tew55gP2XOhuGbW94DoWgN8mSUwaKLlrhi0JPDz42', '2023-02-09 12:35:50', NULL, 'profile2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `category_2` (`category`),
  ADD KEY `category_3` (`category`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=619;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Rajoitteet vedostauluille
--

--
-- Rajoitteet taululle `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
