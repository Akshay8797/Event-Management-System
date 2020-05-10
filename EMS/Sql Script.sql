SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+05:30";

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'akshay@ems.com', 'akshay123', 'admin'),
(2, 'anuj@ems.com', 'anuj123', 'staff');

CREATE TABLE `locations` (
  `LocationID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ManagerFName` varchar(255) NOT NULL,
  `ManagerLName` varchar(255) NOT NULL,
  `ManagerEmail` varchar(255) NOT NULL,
  `ManagerNumber` int(11) NOT NULL,
  `MaxCapacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `locations` (`LocationID`, `Name`, `Address`, `ManagerFName`, `ManagerLName`, `ManagerEmail`, `ManagerNumber`, `MaxCapacity`) VALUES
(1, 'Royal Hotel', 'Jamshedpur, Jharkhand', 'Amit', 'Singh', 'amitsingh@email.com', 123456789, 100),
(2, 'Blue Lagoon', 'Bhubaneswar, Odisha', 'Pawan', 'Kumar', 'pawankumar@email.com', 456321789, 150);

ALTER TABLE `locations`
  ADD PRIMARY KEY (`LocationID`);

ALTER TABLE `locations`
  MODIFY `LocationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

CREATE TABLE `events` (
  `EventID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `StartDate` varchar(255) NOT NULL,
  `EndDate` varchar(255) NOT NULL,
  `Cost` int(11) NOT NULL,
  `LocationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `events` (`EventID`, `Title`, `Description`, `StartDate`, `EndDate`, `Cost`, `LocationID`) VALUES
(1, 'Wedding Anniversary', '1st Anniversary Celebration', '10-Oct-2020', '15-Oct-2020', 25000, 1),
(2, 'Birthday Celebration', '25th Birthday', '21-Oct-2020', '22-Oct-2020', 18000, 2);

ALTER TABLE `events`
  ADD PRIMARY KEY (`EventID`),
  ADD KEY `LocationID` (`LocationID`);

ALTER TABLE `events`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;