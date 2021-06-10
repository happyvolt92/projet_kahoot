-- Table pour les pseudos

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `score`varchar(5) NOT NULL,
--   `pin` varchar(10) NOT NULL,
  PRIMARY KEY (`id`))
  ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

  INSERT INTO `users` (`id`, `user_name`, `pin`) VALUES
(1, 'champ', '10');

-- CREATE TABLE IF NOT EXISTS `game_pin` (
--   `id` int(11) NOT NULL AUTO_INCREMENT,
--   `user_name` varchar(50) NOT NULL,
--   `pin` varchar(10) NOT NULL,
--   PRIMARY KEY (`id`))
--   ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;