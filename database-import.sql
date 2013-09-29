-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: database.hosting.vt.edu
-- Generation Time: Sep 28, 2013 at 07:30 PM
-- Server version: 5.0.96
-- PHP Version: 5.2.16
-- 
-- Database: `database1258`
-- 
CREATE DATABASE `database1258` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `database1258`;

-- --------------------------------------------------------

-- 
-- Table structure for table `points`
-- 

CREATE TABLE `points` (
  `house` varchar(10) NOT NULL COMMENT 'the house to allocate points to',
  `amount` int(11) NOT NULL COMMENT 'the number of points to allocate',
  `approved` tinyint(1) NOT NULL default '0' COMMENT 'whether or not the points should be approved',
  `event` varchar(20) NOT NULL COMMENT 'the event the points were won',
  `id` int(11) NOT NULL auto_increment COMMENT 'uniquely identifies the transaction',
  `type` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='the points database is a unqiue database of point transactio' AUTO_INCREMENT=159 ;

-- 
-- Dumping data for table `points`
-- 

INSERT INTO `points` VALUES ('hickory', 150, 1, 'Kickball Tournament ', 124, 'special');
INSERT INTO `points` VALUES ('hawthorn', 100, 1, 'Kickball Tournament ', 125, 'special');
INSERT INTO `points` VALUES ('honey', 75, 1, 'Kickball Tournament ', 126, 'special');
INSERT INTO `points` VALUES ('holly', 50, 1, 'Kickball Tournament ', 127, 'special');
INSERT INTO `points` VALUES ('hawthorn', 20, 1, 'Study Break', 129, 'community');
INSERT INTO `points` VALUES ('hawthorn', 100, 1, 'Study Break', 130, 'community');
INSERT INTO `points` VALUES ('hawthorn', 40, 1, 'Labor Day Cupcakes', 131, 'community');
INSERT INTO `points` VALUES ('hawthorn', 10, 1, 'Movie Night', 132, 'community');
INSERT INTO `points` VALUES ('hawthorn', 20, 1, 'Cascades Trip', 133, 'community');
INSERT INTO `points` VALUES ('hawthorn', 100, 1, '7th Floor Apartment ', 134, 'community');
INSERT INTO `points` VALUES ('hawthorn', 10, 1, '7th Floor Apartment ', 135, 'community');
INSERT INTO `points` VALUES ('hickory', 20, 1, 'Wally Ball', 136, 'community');
INSERT INTO `points` VALUES ('hickory', 40, 1, 'Cards Against Humani', 137, 'community');
INSERT INTO `points` VALUES ('hickory', 20, 1, '#BeatBama', 138, 'community');
INSERT INTO `points` VALUES ('hickory', 40, 1, 'Bacon Bash', 139, 'community');
INSERT INTO `points` VALUES ('hickory', 20, 1, 'Movie Night', 140, 'community');
INSERT INTO `points` VALUES ('hickory', 10, 1, 'Wally Ball', 141, 'community');
INSERT INTO `points` VALUES ('hickory', 10, 1, 'Ultimate Frisbee', 142, 'community');
INSERT INTO `points` VALUES ('hickory', 40, 1, 'Ice Cream Social', 143, 'community');
INSERT INTO `points` VALUES ('hickory', 40, 1, 'Pizza Social', 144, 'community');
INSERT INTO `points` VALUES ('hickory', 20, 1, 'Pancake Night', 145, 'community');
INSERT INTO `points` VALUES ('holly', 40, 1, 'Holly House Dinner', 146, 'community');
INSERT INTO `points` VALUES ('honey', 20, 1, 'Taboo', 147, 'community');
INSERT INTO `points` VALUES ('honey', 10, 1, 'Movie Night', 148, 'community');
INSERT INTO `points` VALUES ('honey', 40, 1, 'House Dinner', 151, 'community');
INSERT INTO `points` VALUES ('hickory', 40, 1, 'House Dinner', 152, 'community');
INSERT INTO `points` VALUES ('holly', 20, 1, 'House Dinner', 153, 'community');
INSERT INTO `points` VALUES ('hawthorn', 20, 1, 'House Dinner', 154, 'community');
INSERT INTO `points` VALUES ('honey', 40, 1, 'House Dinner', 155, 'community');
INSERT INTO `points` VALUES ('hickory', 20, 1, 'House Dinner', 156, 'community');
INSERT INTO `points` VALUES ('hawthorn', 20, 1, 'House Dinner', 157, 'community');
INSERT INTO `points` VALUES ('holly', 20, 1, 'House Dinner', 158, 'community');

