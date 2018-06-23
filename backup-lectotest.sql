-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para lectotest
CREATE DATABASE IF NOT EXISTS `lectotes_app` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lectotes_app`;

-- Volcando estructura para tabla lectotest.answers
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `answer_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_answer_user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_user_id_foreign` (`user_id`),
  CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.answers: ~200 rows (aproximadamente)
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` (`id`, `user_id`, `answer_text`, `update_answer_user_id`, `created_at`, `updated_at`) VALUES
	(1, 6, 'White Rabbit hurried by--the.', 2, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(2, 16, 'Queen, in a few minutes that.', 5, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(3, 26, 'As a duck with its.', 26, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(4, 16, 'I think?\' \'I had NOT!\' cried the.', 28, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(5, 23, 'Alice a good character, But said I.', 22, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(6, 26, 'Either the well was very fond of.', 14, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(7, 12, 'Alice dodged behind a great hurry;.', 4, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(8, 6, 'Let me see: that would happen:.', 8, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(9, 11, 'Queen. \'Can you play croquet.', 2, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(10, 18, 'THE.', 25, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(11, 14, 'Alice looked round.', 8, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(12, 17, 'The Mouse only shook its.', 1, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(13, 15, 'Alice, \'it would have called.', 5, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(14, 11, 'I think.\' And she went on to.', 1, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(15, 26, 'Hatter was the first to.', 12, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(16, 3, 'I ever was at the end of the song.', 14, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(17, 14, 'The question is, Who in the window?\'.', 9, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(18, 19, 'Hatter, and here the Mock.', 21, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(19, 1, 'King in a hurry: a.', 5, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(20, 30, 'The question is, what did the.', 9, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(21, 2, 'Alice! Come here directly.', 9, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(22, 8, 'After a minute or two, they.', 24, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(23, 21, 'Mary Ann!\' said the last.', 26, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(24, 2, 'As she said to herself. \'Shy, they.', 15, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(25, 23, 'Alice replied in an angry.', 13, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(26, 1, 'Oh, I shouldn\'t want.', 28, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(27, 18, 'I like"!\' \'You might just as.', 2, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(28, 6, 'Gryphon hastily. \'Go on with the end.', 28, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(29, 13, 'Said the mouse doesn\'t get.', 10, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(30, 2, 'You gave us three or.', 19, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(31, 16, 'Alice. \'Of course not,\' Alice replied.', 19, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(32, 15, 'March Hare meekly.', 8, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(33, 4, 'Gryphon: and Alice.', 10, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(34, 9, 'At this the whole pack of cards.', 12, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(35, 10, 'And he got up very sulkily.', 24, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(36, 11, 'When the Mouse to Alice a.', 12, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(37, 3, 'Cat in a hurried.', 10, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(38, 11, 'Alice said very politely.', 5, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(39, 1, 'Mouse had changed his mind, and.', 14, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(40, 1, 'I know I have to whisper a hint to.', 7, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(41, 23, 'Alice could see her after.', 1, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(42, 22, 'I tell you, you coward!\'.', 24, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(43, 20, 'March Hare. \'Sixteenth,\' added the.', 20, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(44, 3, 'Dodo. Then they both bowed.', 19, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(45, 18, 'And welcome little fishes in.', 10, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(46, 9, 'Mabel! I\'ll try if I only.', 2, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(47, 9, 'I am very tired of being upset, and.', 25, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(48, 23, 'There was a sound of.', 16, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(49, 1, 'Alice; \'I must go by.', 21, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(50, 29, 'Mouse. \'Of course,\' the Mock.', 23, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(51, 7, 'The first thing she heard a little.', 30, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(52, 23, 'With gently smiling jaws!\' \'I\'m.', 19, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(53, 27, 'As soon as look at the Mouse\'s.', 10, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(54, 28, 'She had quite a crowd.', 13, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(55, 11, 'I\'ll look first,\' she said, \'than.', 3, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(56, 7, 'France-- Then turn not pale.', 30, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(57, 30, 'Ada,\' she said, \'and see whether.', 27, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(58, 19, 'Dinah my dear! I wish I could shut.', 22, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(59, 30, 'Hatter, \'I cut some more of the.', 2, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(60, 22, 'RED rose-tree, and we won\'t.', 16, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(61, 2, 'The Rabbit Sends in a large cat.', 26, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(62, 12, 'Five, \'and I\'ll tell him--it.', 19, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(63, 3, 'Queen, turning.', 26, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(64, 20, 'I\'m better now--but I\'m a.', 6, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(65, 20, 'I do wonder what they said. The.', 1, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(66, 17, 'So she began fancying.', 27, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(67, 23, 'Hatter. \'You might.', 25, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(68, 22, 'Gryphon. \'The reason is,\' said.', 6, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(69, 18, 'Alice remarked. \'Right, as.', 9, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(70, 21, 'Gryphon: and it was.', 2, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(71, 8, 'RABBIT\' engraved upon.', 11, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(72, 7, 'Caterpillar seemed to follow.', 2, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(73, 4, 'Then followed the Knave of.', 12, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(74, 21, 'The chief difficulty.', 2, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(75, 25, 'Alice; \'I must be a lesson to you.', 25, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(76, 20, 'I only wish they WOULD go.', 2, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(77, 15, 'And yesterday things.', 7, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(78, 28, 'Dodo in an offended.', 15, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(79, 17, 'Dormouse fell.', 3, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(80, 28, 'Alice, looking down with.', 24, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(81, 23, 'Alice noticed, had.', 15, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(82, 20, 'King said gravely, \'and go on.', 15, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(83, 6, 'I\'ve kept her eyes.', 3, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(84, 4, 'I mean what I should.', 30, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(85, 19, 'Pigeon went on.', 12, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(86, 20, 'King replied. Here.', 16, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(87, 15, 'I should understand that better,\'.', 30, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(88, 29, 'Alice: he had a little feeble.', 5, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(89, 1, 'Nile On every golden scale! \'How.', 17, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(90, 3, 'It was so ordered about.', 4, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(91, 7, 'March Hare interrupted.', 15, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(92, 6, 'Alice tried to get us dry would.', 2, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(93, 26, 'And it\'ll fetch things.', 30, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(94, 23, 'It means much the.', 10, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(95, 8, 'English, who wanted.', 5, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(96, 26, 'GAVE HER ONE, THEY GAVE HIM.', 22, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(97, 28, 'Gryphon, sighing in.', 12, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(98, 20, 'COULD grin.\' \'They all can,\' said the.', 3, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(99, 29, 'It did so indeed, and.', 5, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(100, 14, 'Alice, (she had kept a.', 18, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(101, 19, 'March Hare was said to.', 27, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(102, 25, 'Lory, as soon as there.', 9, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(103, 24, 'THAT like?\' said Alice..', 3, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(104, 2, 'Hatter. \'You MUST remember,\'.', 2, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(105, 16, 'Who ever saw one that.', 24, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(106, 5, 'Alice, and she felt that.', 22, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(107, 14, 'March Hare. \'He.', 16, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(108, 5, 'I hadn\'t mentioned Dinah!\' she.', 3, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(109, 16, 'I\'m afraid, but you.', 7, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(110, 19, 'Queen of Hearts, he stole.', 24, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(111, 17, 'Alice cautiously.', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(112, 4, 'Alice. \'And be quick about.', 11, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(113, 7, 'PLEASE mind what you\'re.', 12, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(114, 11, 'There was nothing on it but.', 27, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(115, 4, 'White Rabbit returning.', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(116, 21, 'Some of the cattle in the wind.', 29, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(117, 5, 'Then it got down off the fire.', 29, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(118, 27, 'Don\'t go splashing paint over me.', 4, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(119, 4, 'Caterpillar. Alice thought she might.', 29, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(120, 10, 'King. \'Shan\'t,\'.', 6, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(121, 28, 'I can guess that,\'.', 12, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(122, 16, 'Mock Turtle said: \'no wise fish.', 23, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(123, 30, 'ARE OLD, FATHER WILLIAM,"\' said.', 27, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(124, 5, 'I can remember feeling a little more.', 16, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(125, 1, 'Queen. \'I haven\'t opened it yet,\'.', 5, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(126, 2, 'Duchess, it had a little.', 18, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(127, 11, 'When the sands are all pardoned.\'.', 1, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(128, 16, 'White Rabbit, who said in a.', 4, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(129, 8, 'However, she got to the.', 3, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(130, 13, 'Lobster Quadrille The.', 16, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(131, 3, 'Alice. \'Nothing WHATEVER?\'.', 19, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(132, 14, 'King put on his slate.', 25, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(133, 5, 'Alice. \'Of course.', 1, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(134, 22, 'Alice, (she had grown so.', 5, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(135, 7, 'The question is.', 19, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(136, 3, 'Queen. \'Can you play.', 11, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(137, 2, 'No, no! You\'re a.', 24, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(138, 16, 'Lory hastily. \'I.', 15, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(139, 9, 'Queen of Hearts.', 11, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(140, 1, 'And she kept fanning herself.', 24, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(141, 30, 'Alice, \'or perhaps they.', 4, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(142, 12, 'On which Seven.', 28, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(143, 15, 'Caterpillar called after it; and as.', 19, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(144, 28, 'Dinah stop in the pool.', 29, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(145, 5, 'I look like it?\'.', 18, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(146, 21, 'Rabbit whispered in a hurry..', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(147, 7, 'Footman went on all the.', 23, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(148, 18, 'Hatter went on eagerly. \'That\'s enough.', 4, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(149, 12, 'Dormouse, who seemed to be a.', 8, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(150, 7, 'There was no more to come, so she.', 29, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(151, 16, 'VERY deeply with a.', 10, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(152, 17, 'Alice, in a coaxing.', 12, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(153, 25, 'Panther were sharing a.', 17, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(154, 29, 'So she began nursing her child again.', 25, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(155, 10, 'Gryphon, \'she.', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(156, 15, 'Dormouse was sitting.', 23, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(157, 10, 'Lizard\'s slate-pencil, and.', 12, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(158, 9, 'I think I could, if I fell off the.', 5, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(159, 24, 'I could say if I shall remember.', 25, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(160, 12, 'Alice. \'Did you say.', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(161, 1, 'See how eagerly the lobsters.', 25, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(162, 7, 'I can say.\' This was not.', 24, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(163, 15, 'Alice, \'it\'ll never do to ask:.', 7, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(164, 4, 'I only wish it.', 16, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(165, 17, 'Alice, very loudly and decidedly.', 9, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(166, 14, 'King, the Queen, \'and take.', 17, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(167, 22, 'I am! But I\'d.', 3, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(168, 10, 'King said to the seaside once in a.', 24, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(169, 24, 'Majesty,\' he began, \'for bringing.', 26, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(170, 16, 'I don\'t think,\' Alice went.', 20, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(171, 13, 'Mouse. \'--I proceed. "Edwin and.', 18, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(172, 1, 'YOU?\' said the cook. \'Treacle,\' said.', 30, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(173, 26, 'White Rabbit cried out, \'Silence.', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(174, 23, 'Fury: "I\'ll try the experiment?\' \'HE.', 20, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(175, 13, 'When the Mouse only shook its.', 5, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(176, 2, 'The Dormouse had closed its.', 9, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(177, 1, 'Alice heard the.', 25, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(178, 5, 'Majesty,\' said Alice.', 15, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(179, 11, 'Hatter. He had been anything near.', 5, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(180, 29, 'After a while she was losing her.', 6, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(181, 5, 'Mock Turtle, suddenly.', 13, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(182, 19, 'Alice, \'I\'ve often seen them.', 18, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(183, 21, 'Mock Turtle sang this, very slowly and.', 1, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(184, 24, 'Mary Ann, what ARE.', 26, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(185, 28, 'Alice for protection..', 4, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(186, 3, 'Dinah, and saying.', 18, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(187, 20, 'Conqueror.\' (For, with all.', 1, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(188, 23, 'Mock Turtle.', 3, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(189, 6, 'Cat, and vanished. Alice was too.', 9, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(190, 27, 'March Hare will be the.', 23, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(191, 1, 'She hastily put.', 7, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(192, 27, 'Alice thought to herself.', 12, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(193, 18, 'I must,\' the King very.', 6, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(194, 11, 'This sounded.', 25, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(195, 30, 'Mock Turtle angrily:.', 26, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(196, 10, 'Dinah! I wonder what.', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(197, 27, 'AND WASHING--extra."\' \'You couldn\'t.', 11, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(198, 2, 'I to get through was more than.', 7, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(199, 1, 'I\'m not myself, you see.\'.', 25, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(200, 22, 'Seven flung down his.', 17, '2018-06-22 00:25:25', '2018-06-22 00:25:25');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.answer_question_test
CREATE TABLE IF NOT EXISTS `answer_question_test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_test_id` int(10) unsigned NOT NULL,
  `answer_id` int(10) unsigned NOT NULL,
  `correct_answer` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `answer_question_test_question_test_id_foreign` (`question_test_id`),
  KEY `answer_question_test_answer_id_foreign` (`answer_id`),
  CONSTRAINT `answer_question_test_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `answer_question_test_question_test_id_foreign` FOREIGN KEY (`question_test_id`) REFERENCES `question_test` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.answer_question_test: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `answer_question_test` DISABLE KEYS */;
INSERT INTO `answer_question_test` (`id`, `question_test_id`, `answer_id`, `correct_answer`) VALUES
	(1, 51, 1, 1);
/*!40000 ALTER TABLE `answer_question_test` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.answer_question_test_user
CREATE TABLE IF NOT EXISTS `answer_question_test_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `answer_question_test_id` int(10) unsigned NOT NULL,
  `selected_answers` tinyint(1) NOT NULL DEFAULT '1',
  `answer_points` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answer_question_test_user_user_id_foreign` (`user_id`),
  KEY `answer_question_test_user_answer_question_test_id_foreign` (`answer_question_test_id`),
  CONSTRAINT `answer_question_test_user_answer_question_test_id_foreign` FOREIGN KEY (`answer_question_test_id`) REFERENCES `answer_question_test` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `answer_question_test_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.answer_question_test_user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `answer_question_test_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `answer_question_test_user` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_post_id_foreign` (`post_id`),
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.comments: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=460 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.migrations: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(444, '2014_10_12_000000_create_users_table', 1),
	(445, '2014_10_12_100000_create_password_resets_table', 1),
	(446, '2018_01_06_160428_create_tests_table', 1),
	(447, '2018_01_06_160937_create_questions_table', 1),
	(448, '2018_01_06_161109_create_answers_table', 1),
	(449, '2018_01_09_021103_add_test_value_column_to_tests_table', 1),
	(450, '2018_01_09_023833_create_profiles_table', 1),
	(451, '2018_01_12_010004_create_question_test_table', 1),
	(452, '2018_01_12_020719_create_answer_question_test_table', 1),
	(453, '2018_01_12_021223_create_answer_question_test_user_table', 1),
	(454, '2018_01_12_021309_create_test_user_table', 1),
	(455, '2018_03_23_020559_add_calification_column_to_test_user', 1),
	(456, '2018_06_18_235323_create_sliders_table', 1),
	(457, '2018_06_19_021936_create_posts_table', 1),
	(458, '2018_06_19_022421_create_comments_table', 1),
	(459, '2018_06_21_235246_create_videos_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `body` longtext COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.posts: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `active`, `created_at`, `updated_at`) VALUES
	(1, 30, 'Lorem Ipsum dfasdf sda fdf asdf sdf asdf jsdñlf jasdñlfj ñkladjf ñaskjfñlasdkjf ñaljfñaljfñalskjf asdñklf jsdañklf jañfsñj', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed tincidunt augue. Quisque sit amet ligula vel massa venenatis tristique. Duis vestibulum orci iaculis sem blandit, et rhoncus arcu commodo. Praesent in interdum nunc. Etiam at ultricies lorem. Etiam erat risus, bibendum id leo quis, facilisis tempor justo. Nullam quis leo lacus. Sed euismod vitae erat vel sagittis. Phasellus sit amet ante sed lorem consectetur fringilla convallis molestie justo. Sed a ex placerat felis lobortis placerat. Aenean luctus dolor a erat dapibus, et aliquam nisl vehicula. Praesent nisi nisi, elementum non eros et, suscipit vehicula justo. Duis a consequat odio. Phasellus ac quam rhoncus, lacinia purus id, gravida sem.\r\n\r\nNam porta est eget malesuada feugiat. Vestibulum non enim malesuada augue vulputate luctus eu ut nisi. Maecenas eget eros suscipit orci dictum ullamcorper. Donec lacinia dolor quis magna porttitor, non rutrum magna lobortis. Maecenas tempor orci vitae eros sagittis auctor. Mauris laoreet est vitae vestibulum volutpat. Vivamus tristique semper mi, ut vehicula sapien commodo at.', 1, '2018-06-22 00:26:21', '2018-06-22 02:10:51');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `profile_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_age` int(10) unsigned NOT NULL,
  `profile_sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`),
  CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.profiles: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `question_header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_question_user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_user_id_foreign` (`user_id`),
  CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.questions: ~50 rows (aproximadamente)
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `user_id`, `question_header`, `question_text`, `question_image`, `update_question_user_id`, `created_at`, `updated_at`) VALUES
	(1, 19, 'King, \'or I\'ll have you.', 'Queen never left off.', 'https://lorempixel.com/600/338/?56218', 26, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(2, 22, 'I suppose.\' So she went on.', 'It sounded an excellent.', 'https://lorempixel.com/600/338/?46787', 19, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(3, 24, 'CHORUS. \'Wow! wow! wow!\' While the.', 'Alice; \'but a grin without.', 'https://lorempixel.com/600/338/?99542', 30, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(4, 16, 'ME.\' \'You!\' said the.', 'I\'ll never go THERE again!\' said.', 'https://lorempixel.com/600/338/?62142', 27, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(5, 9, 'English!\' said the Knave, \'I.', 'And the Eaglet bent down its.', 'https://lorempixel.com/600/338/?63137', 6, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(6, 27, 'I say,\' the Mock Turtle said with.', 'There was a large kitchen, which.', 'https://lorempixel.com/600/338/?99966', 21, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(7, 1, 'Alice could see it written up.', 'SHE\'S she, and I\'m sure she\'s the best.', 'https://lorempixel.com/600/338/?53333', 21, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(8, 9, 'Shakespeare, in the last words out.', 'Mouse replied rather.', 'https://lorempixel.com/600/338/?56878', 23, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(9, 21, 'Alice, always ready to.', 'I can find out the.', 'https://lorempixel.com/600/338/?28662', 6, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(10, 5, 'Cheshire Cat,\' said.', 'King. \'It began with the.', 'https://lorempixel.com/600/338/?73048', 4, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(11, 23, 'Mock Turtle Soup is made.', 'Five, \'and I\'ll tell him--it was.', 'https://lorempixel.com/600/338/?80547', 8, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(12, 12, 'So they got settled down again, the.', 'Alice in a moment to think this a good.', 'https://lorempixel.com/600/338/?31135', 23, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(13, 19, 'Alice, \'and if it makes.', 'Alice. \'Of course.', 'https://lorempixel.com/600/338/?81206', 1, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(14, 27, 'And how odd the.', 'Lory, with a T!\' said the.', 'https://lorempixel.com/600/338/?80834', 20, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(15, 30, 'Alice to herself..', 'She was walking hand in hand.', 'https://lorempixel.com/600/338/?34068', 3, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(16, 18, 'The Rabbit started.', 'Quick, now!\' And Alice was not.', 'https://lorempixel.com/600/338/?32493', 28, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(17, 18, 'Hatter trembled so.', 'D,\' she added in an impatient.', 'https://lorempixel.com/600/338/?64358', 12, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(18, 22, 'Alice. \'Call it what.', 'However, I\'ve got to see that queer.', 'https://lorempixel.com/600/338/?22512', 23, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(19, 3, 'CHAPTER VI. Pig and.', 'So she began shrinking.', 'https://lorempixel.com/600/338/?15270', 1, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(20, 20, 'Alice. \'Well, I hardly know--No.', 'White Rabbit, who was peeping.', 'https://lorempixel.com/600/338/?33661', 9, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(21, 13, 'Alice looked round.', 'Bill! catch hold of anything, but she.', 'https://lorempixel.com/600/338/?69894', 24, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(22, 19, 'Majesty,\' said the March Hare..', 'HERE.\' \'But then,\' thought.', 'https://lorempixel.com/600/338/?72759', 9, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(23, 9, 'I\'m here! Digging for apples.', 'Queen, in a hoarse.', 'https://lorempixel.com/600/338/?18586', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(24, 20, 'Duck and a great.', 'Cat. \'Do you know about.', 'https://lorempixel.com/600/338/?83562', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(25, 12, 'Mock Turtle, and said anxiously.', 'Oh dear! I\'d nearly forgotten to.', 'https://lorempixel.com/600/338/?56909', 12, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(26, 15, 'By the time she went on \'And.', 'Besides, SHE\'S she, and I\'m sure I.', 'https://lorempixel.com/600/338/?34430', 27, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(27, 5, 'I wish I had it written up.', 'So she began shrinking directly. As.', 'https://lorempixel.com/600/338/?74562', 20, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(28, 1, 'Knave of Hearts.', 'I do hope it\'ll make me smaller.', 'https://lorempixel.com/600/338/?61017', 30, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(29, 29, 'King in a deep.', 'Rabbit coming to look at all.', 'https://lorempixel.com/600/338/?94280', 26, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(30, 9, 'Improve his shining tail, And pour.', 'Queen, \'and take this child away.', 'https://lorempixel.com/600/338/?55641', 9, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(31, 1, 'Queen in front of them, and he.', 'I suppose I ought.', 'https://lorempixel.com/600/338/?24894', 25, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(32, 19, 'King, the Queen, who were giving.', 'Alice dear!\' said her sister;.', 'https://lorempixel.com/600/338/?20748', 26, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(33, 16, 'The Caterpillar and.', 'Queen, \'and he shall tell.', 'https://lorempixel.com/600/338/?91954', 11, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(34, 21, 'He got behind him, and.', 'Dormouse denied.', 'https://lorempixel.com/600/338/?84922', 17, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(35, 25, 'Queen shrieked out..', 'Mock Turtle: \'crumbs.', 'https://lorempixel.com/600/338/?68828', 21, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(36, 20, 'And certainly there was no.', 'So she stood still where she.', 'https://lorempixel.com/600/338/?12732', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(37, 5, 'Alice; \'all I know.', 'VERY nearly at the sudden change.', 'https://lorempixel.com/600/338/?30058', 21, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(38, 24, 'Alice. \'It must be.', 'Rabbit\'s--\'Pat! Pat! Where are.', 'https://lorempixel.com/600/338/?95662', 19, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(39, 11, 'The Mouse only.', 'I hadn\'t gone down that.', 'https://lorempixel.com/600/338/?69836', 17, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(40, 4, 'Christmas.\' And she.', 'Queen. \'Never!\' said the.', 'https://lorempixel.com/600/338/?90496', 18, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(41, 15, 'PROVES his guilt,\' said the Hatter:.', 'Majesty must cross-examine the next.', 'https://lorempixel.com/600/338/?98663', 12, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(42, 25, 'They were indeed a.', 'White Rabbit, jumping up in a.', 'https://lorempixel.com/600/338/?24839', 3, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(43, 27, 'Majesty,\' said the Duchess: \'what a.', 'It was as much as serpents do, you.', 'https://lorempixel.com/600/338/?16865', 5, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(44, 28, 'King and Queen of.', 'I\'m doubtful about the temper of.', 'https://lorempixel.com/600/338/?26331', 16, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(45, 4, 'But there seemed to think to.', 'She had just upset.', 'https://lorempixel.com/600/338/?26860', 30, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(46, 4, 'Dormouse is asleep again,\' said.', 'Lizard) could not.', 'https://lorempixel.com/600/338/?28798', 24, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(47, 25, 'I was going on between.', 'In another minute.', 'https://lorempixel.com/600/338/?91745', 17, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(48, 25, 'Dormouse,\' thought Alice;.', 'Alice, who felt.', 'https://lorempixel.com/600/338/?66327', 19, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(49, 26, 'Alice crouched down.', 'Footman\'s head: it just grazed his.', 'https://lorempixel.com/600/338/?89253', 6, '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(50, 9, 'Footman went on without.', 'And I declare it\'s.', 'https://lorempixel.com/600/338/?49254', 1, '2018-06-22 00:25:25', '2018-06-22 00:25:25');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.question_test
CREATE TABLE IF NOT EXISTS `question_test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `test_id` int(10) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `question_value` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_test_test_id_foreign` (`test_id`),
  KEY `question_test_question_id_foreign` (`question_id`),
  CONSTRAINT `question_test_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `question_test_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.question_test: ~50 rows (aproximadamente)
/*!40000 ALTER TABLE `question_test` DISABLE KEYS */;
INSERT INTO `question_test` (`id`, `test_id`, `question_id`, `question_value`) VALUES
	(1, 1, 42, 9),
	(2, 1, 14, 9),
	(3, 1, 13, 10),
	(4, 1, 36, 10),
	(5, 1, 46, 5),
	(6, 2, 15, 7),
	(7, 2, 4, 6),
	(8, 2, 21, 4),
	(9, 2, 21, 2),
	(10, 2, 30, 3),
	(11, 3, 37, 3),
	(12, 3, 45, 5),
	(13, 3, 40, 9),
	(14, 3, 1, 10),
	(15, 3, 41, 10),
	(16, 4, 48, 4),
	(17, 4, 31, 1),
	(18, 4, 3, 4),
	(19, 4, 26, 2),
	(20, 4, 29, 8),
	(21, 5, 26, 8),
	(22, 5, 13, 1),
	(23, 5, 37, 6),
	(24, 5, 20, 4),
	(25, 5, 23, 4),
	(26, 6, 43, 3),
	(27, 6, 13, 10),
	(28, 6, 18, 2),
	(29, 6, 17, 8),
	(30, 6, 14, 8),
	(31, 7, 41, 9),
	(32, 7, 32, 10),
	(33, 7, 38, 4),
	(34, 7, 24, 1),
	(35, 7, 30, 1),
	(36, 8, 9, 1),
	(37, 8, 29, 5),
	(38, 8, 11, 9),
	(39, 8, 46, 9),
	(40, 8, 49, 4),
	(41, 9, 40, 5),
	(42, 9, 1, 3),
	(43, 9, 39, 6),
	(44, 9, 43, 3),
	(45, 9, 42, 10),
	(46, 10, 2, 8),
	(47, 10, 46, 6),
	(48, 10, 48, 2),
	(49, 10, 43, 2),
	(50, 10, 17, 6),
	(51, 11, 1, 1);
/*!40000 ALTER TABLE `question_test` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.sliders: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `created_at`, `updated_at`, `url`, `order`) VALUES
	(1, '2018-06-22 00:25:52', '2018-06-22 00:25:52', 'public/slider/k6pk6H0rQwWCA1kojClC8dz5PNBpu7mvnCieo51U.jpeg', 0),
	(2, '2018-06-22 00:25:55', '2018-06-22 00:25:55', 'public/slider/ORCeXuQDqrSRlsqY0yyYjEPLUb9WWSex5hA7DG5R.jpeg', 0);
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.tests
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `test_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_to_approve` int(10) unsigned NOT NULL,
  `time_control` tinyint(1) DEFAULT '0',
  `time` time DEFAULT NULL,
  `update_test_user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `test_value` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tests_user_id_foreign` (`user_id`),
  CONSTRAINT `tests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.tests: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
INSERT INTO `tests` (`id`, `user_id`, `test_name`, `min_to_approve`, `time_control`, `time`, `update_test_user_id`, `created_at`, `updated_at`, `test_value`) VALUES
	(1, 3, 'Voluptatem repellat sapiente.', 62, 0, '03:08:31', 30, '2018-06-22 00:25:25', '2018-06-22 00:25:25', 33),
	(2, 21, 'Quis autem at.', 60, 0, '05:15:24', 30, '2018-06-22 00:25:25', '2018-06-22 00:25:25', 40),
	(3, 14, 'Consequatur animi dolorem.', 61, 1, '09:18:41', 21, '2018-06-22 00:25:25', '2018-06-22 00:25:25', 16),
	(4, 9, 'Quam et.', 63, 0, '10:12:42', 23, '2018-06-22 00:25:25', '2018-06-22 00:25:25', 65),
	(5, 11, 'Ab ut voluptatibus.', 60, 1, '07:00:39', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25', 43),
	(6, 7, 'Magnam dolore consequatur.', 69, 0, '17:20:22', 20, '2018-06-22 00:25:25', '2018-06-22 00:25:25', 26),
	(7, 7, 'Eius quod at.', 62, 0, '06:30:36', 14, '2018-06-22 00:25:25', '2018-06-22 00:25:25', 23),
	(8, 4, 'Est consequatur maiores.', 63, 0, '10:51:44', 25, '2018-06-22 00:25:25', '2018-06-22 00:25:25', 10),
	(9, 21, 'Et aut earum.', 65, 0, '15:34:50', 27, '2018-06-22 00:25:25', '2018-06-22 00:25:25', 88),
	(10, 12, 'Expedita quam.', 62, 0, '15:51:18', 13, '2018-06-22 00:25:25', '2018-06-22 00:25:25', 74),
	(11, 30, 'sdfasdf', 22, NULL, NULL, 30, '2018-06-22 03:14:01', '2018-06-22 03:14:01', 22);
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.test_user
CREATE TABLE IF NOT EXISTS `test_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `test_id` int(10) unsigned NOT NULL,
  `user_points` int(10) unsigned NOT NULL,
  `total_points` int(11) NOT NULL,
  `calification` int(10) unsigned NOT NULL,
  `approved` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `test_user_test_id_foreign` (`test_id`),
  KEY `test_user_user_id_foreign` (`user_id`),
  CONSTRAINT `test_user_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `test_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.test_user: ~30 rows (aproximadamente)
/*!40000 ALTER TABLE `test_user` DISABLE KEYS */;
INSERT INTO `test_user` (`id`, `user_id`, `test_id`, `user_points`, `total_points`, `calification`, `approved`) VALUES
	(1, 31, 2, 25, 47, 36, 1),
	(2, 32, 9, 50, 2, 76, 1),
	(3, 33, 10, 11, 49, 23, 1),
	(4, 34, 1, 63, 27, 67, 0),
	(5, 35, 9, 8, 88, 39, 1),
	(6, 36, 6, 64, 41, 52, 1),
	(7, 37, 7, 30, 62, 97, 0),
	(8, 38, 1, 58, 47, 52, 0),
	(9, 39, 9, 88, 1, 57, 1),
	(10, 40, 7, 19, 45, 79, 0),
	(11, 41, 6, 3, 17, 31, 1),
	(12, 42, 9, 91, 78, 41, 1),
	(13, 43, 5, 25, 59, 74, 0),
	(14, 44, 10, 69, 20, 37, 1),
	(15, 45, 5, 5, 59, 36, 0),
	(16, 46, 6, 68, 11, 21, 1),
	(17, 47, 10, 52, 15, 81, 1),
	(18, 48, 9, 81, 57, 4, 0),
	(19, 49, 4, 44, 93, 48, 0),
	(20, 50, 10, 54, 39, 96, 1),
	(21, 51, 8, 40, 63, 10, 1),
	(22, 52, 3, 87, 9, 58, 0),
	(23, 53, 6, 68, 57, 30, 1),
	(24, 54, 9, 78, 37, 50, 1),
	(25, 55, 5, 68, 70, 66, 1),
	(26, 56, 3, 31, 48, 47, 0),
	(27, 57, 7, 33, 13, 83, 0),
	(28, 58, 4, 97, 59, 86, 1),
	(29, 59, 4, 16, 29, 21, 0),
	(30, 60, 5, 55, 64, 78, 1);
/*!40000 ALTER TABLE `test_user` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Administrador','Usuario') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Administrador',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.users: ~60 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `password`, `type`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'glenda98', 'jhermiston@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?21041', 'JFtNXPi0Ij', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(2, 'lynn.goldner', 'lee.block@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?30726', 'FnfJp2d3Q4', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(3, 'okeefe.idella', 'npadberg@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?83319', 'QZVrFlbe9L', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(4, 'nolan.cameron', 'romaine.wehner@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?47790', 'Oo76Jyg6cQ', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(5, 'mcdermott.ambrose', 'fgrant@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?64620', 'LO1ZpKGw0b', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(6, 'renee.orn', 'allene.kerluke@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?84769', 'YO2dCWiL6C', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(7, 'tbraun', 'houston.abbott@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?43000', 'B6kLvPshVn', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(8, 'lonnie.ebert', 'champlin.bart@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?42001', 'nWLtQ3HoJf', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(9, 'ila33', 'west.francis@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?51220', '2IBKa4XQkC', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(10, 'armand.barrows', 'baylee32@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?64721', 'DWPVw1NDvL', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(11, 'leslie91', 'mariano.sauer@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?94974', 'etrpHNuUtz', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(12, 'breitenberg.florida', 'princess.barrows@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?82997', 'iWncZzHBhq', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(13, 'ykrajcik', 'acasper@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?83246', 'AztaEiwfIk', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(14, 'keebler.zelma', 'trevor.kilback@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?99642', 'q63kT5R2tI', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(15, 'rachael.jacobs', 'lora14@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?50078', '8b0vRNBaH1', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(16, 'will.carole', 'jbayer@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?26566', 'GUTOVswTlt', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(17, 'trevor70', 'thad.schumm@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?21853', 'AIAunzkCtN', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(18, 'alessandra27', 'gtillman@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?93712', 'qSLyITO7UC', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(19, 'evert70', 'carroll.haskell@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?56017', '5pKEC3k5O8', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(20, 'marianne.feest', 'dasia.terry@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?82764', 'G7hse0yG1W', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(21, 'willms.felix', 'fadel.horacio@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?58195', 'tm8iI07cXm', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(22, 'jaylan15', 'schumm.nya@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?94690', 'bPBCPbD7Q0', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(23, 'yundt.milford', 'larry.ryan@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?34549', 'kU6YWo1LEm', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(24, 'rconn', 'arianna17@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?53455', 'ZYqaVUZJgY', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(25, 'lbuckridge', 'bkshlerin@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?63481', 'mGwLyJ6XFa', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(26, 'fadel.ana', 'jeffrey.greenfelder@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?41751', 'SaQDB3GnSs', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(27, 'estel96', 'stoltenberg.scotty@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?11850', 'BnAp19A9Nb', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(28, 'roger20', 'minnie.tillman@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?94005', 'jPylEvNkfx', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(29, 'kshanahan', 'kathryne65@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?75946', 'b6V1vigQMD', '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(30, 'Yoa', 'yoanny@yoanny.com', '$2y$10$MPWNzLoquQPevjq5fKDQ1OuDx1N0iCmmaIqSjyaIDWWwBlkaNGBAC', 'Administrador', NULL, NULL, '2018-06-22 00:25:24', '2018-06-22 00:25:24'),
	(31, 'iwolf', 'jorge.prosacco@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?46964', 'Dbuss5J0ev', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(32, 'bernice69', 'itzel.schroeder@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?55526', 'oZYfRKXfIV', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(33, 'art98', 'jacobi.adrien@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?85843', 'LFPYtgAOSI', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(34, 'nvolkman', 'ubeier@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?86868', 'GnXJbaWVRX', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(35, 'rhea31', 'hegmann.novella@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?32194', 'r0w4T4Tigu', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(36, 'maeve.lindgren', 'littel.dallas@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?45408', 'hPQcvbiY3C', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(37, 'bkovacek', 'hettie72@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?33138', 'gDn2CHBX9F', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(38, 'elenor.gutkowski', 'joesph.marks@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?81123', 'q7QKGRGt2r', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(39, 'korbin37', 'okuneva.elroy@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?48709', 'OTKlRBAVNh', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(40, 'hyman.mertz', 'micaela92@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?49919', 'sIRJb5tou2', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(41, 'robin.oberbrunner', 'stark.cali@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?17599', 'csqmxSjHvz', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(42, 'aisha.powlowski', 'antone21@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?70313', 'oeScky6HLz', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(43, 'ottilie52', 'orlando.mccullough@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?74560', 'sVpf8hIuZt', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(44, 'elyssa.hessel', 'reynolds.monte@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?77964', 'ws9VbQ5GQu', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(45, 'nathaniel.ullrich', 'wbergstrom@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?56197', 'RGXBHxi7OX', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(46, 'qrolfson', 'sidney02@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?56703', 'ne8Q1srI26', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(47, 'mgreenfelder', 'sierra.nolan@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?89082', 'NI5HbM1gUt', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(48, 'jordi29', 'nelson.waters@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?91868', 'VJE6j2tzWa', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(49, 'theo55', 'llangworth@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?79904', '5U84duUBQZ', '2018-06-22 00:25:25', '2018-06-22 00:25:25'),
	(50, 'cecelia62', 'deion.green@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?68378', 'Wc6RhTTiAt', '2018-06-22 00:25:26', '2018-06-22 00:25:26'),
	(51, 'kwest', 'leanna49@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?25297', 'PwLwiwowLT', '2018-06-22 00:25:26', '2018-06-22 00:25:26'),
	(52, 'lmraz', 'pswaniawski@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?74555', 'dRwDyX4Yp0', '2018-06-22 00:25:26', '2018-06-22 00:25:26'),
	(53, 'leone.adams', 'antonio51@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?84278', 'a48ahaGjeI', '2018-06-22 00:25:26', '2018-06-22 00:25:26'),
	(54, 'tremayne42', 'erika.miller@example.com', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?15355', 'WGsIL4JkVN', '2018-06-22 00:25:26', '2018-06-22 00:25:26'),
	(55, 'heathcote.tabitha', 'alessandra.beer@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?42851', 'KqsumUGhwY', '2018-06-22 00:25:26', '2018-06-22 00:25:26'),
	(56, 'khoppe', 'ghermiston@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?65687', 'ZYPE8QCzZF', '2018-06-22 00:25:26', '2018-06-22 00:25:26'),
	(57, 'lupe.kub', 'asia82@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?84460', 'vOUOI7mJlg', '2018-06-22 00:25:26', '2018-06-22 00:25:26'),
	(58, 'awindler', 'ashly.mraz@example.net', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?73566', 'KdUrnBc5Hd', '2018-06-22 00:25:26', '2018-06-22 00:25:26'),
	(59, 'nikko.wolf', 'liliane.bednar@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Administrador', 'https://lorempixel.com/600/338/?68795', 'vIjX4hKj6i', '2018-06-22 00:25:26', '2018-06-22 00:25:26'),
	(60, 'rparker', 'lilyan.morar@example.org', '$2y$10$xgN9mOUbRRKZkJx5kb505ugOv1qtDkix2h/E910aAJ044iKijAzSa', 'Usuario', 'https://lorempixel.com/600/338/?28590', 'slV2vElq9D', '2018-06-22 00:25:26', '2018-06-22 00:25:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla lectotest.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla lectotest.videos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
	(1, 'Lorem Ipsum', 'https://www.youtube.com/watch?v=gNDbxLqd9Cg', '2018-06-22 00:29:50', '2018-06-22 00:29:50'),
	(2, 'Lorem Ipsum', 'https://stackoverflow.com/questions/19760585/laravel-throwing-methodnotallowedhttpexception', '2018-06-22 00:29:54', '2018-06-22 00:29:54');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
