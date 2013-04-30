delimiter $$

CREATE DATABASE `rostersystem` /*!40100 DEFAULT CHARACTER SET latin1 */$$

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `no_guests` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `notes` tinytext,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1$$

CREATE TABLE `rosters` (
  `date` date NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(60) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `location` varchar(45) NOT NULL,
  `duty` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1$$

CREATE TABLE `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `password` varchar(15) NOT NULL,
  `position` varchar(45) NOT NULL,
  `staff_type` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email_address` tinytext NOT NULL,
  `phone_no` int(20) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1$$

CREATE TABLE `wedding` (
  `wedding_id` int(11) NOT NULL AUTO_INCREMENT,
  `groom_name` varchar(50) NOT NULL,
  `bride_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `no_guests` int(11) NOT NULL,
  `arrival_time` time NOT NULL,
  `meal_time` time NOT NULL,
  `courses` int(11) NOT NULL,
  `meal_over` time DEFAULT NULL,
  `late_food` varchar(45) DEFAULT NULL,
  `late_food_time` time DEFAULT NULL,
  `closing_time` time DEFAULT NULL,
  `champagne` varchar(5) DEFAULT NULL,
  `canapes` varchar(5) DEFAULT NULL,
  `mulled_wine` varchar(5) DEFAULT NULL,
  `notes` tinytext,
  `speechs` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wedding_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1$$