<h1>Easy Register and Login</h1>
This is a easy project demonstrating user registration and login

<h1>Database setup</h1>
You will be needing a database called thecodders and a table named registration
run the following query to import these and insert some values,
<pre>
-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2015 at 09:31 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `thecodders`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `gender`, `email`, `password`, `birthdate`) VALUES
(1, 'Nasrin', 'Kona', 'female', 'kona@example.com', '1c8695ee293a4c929cfc9356ec63f4fab3953293', '0000-00-00'),
(2, 'Abdullah', 'Arefin', 'male', 'ashik@bluehillsit.com', 'fea807003421096a34a8482ac2694737de9abb08', '1992-09-16');

</pre>

<h3>Help</h3>
<p>If you need any help or have any questions then feel free to ask me...</p>
<form>
<input type='text' name='emailfrom' placeholder='type your email' />
<input type='submit' name='submit' value='send'/>
</form>
