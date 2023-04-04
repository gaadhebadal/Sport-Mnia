-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 07:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(5) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `Username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123'),
(2, 'pavan', 'pavu1234');

-- --------------------------------------------------------

--
-- Table structure for table `cntry_tbl`
--

CREATE TABLE `cntry_tbl` (
  `Country_Id` int(5) NOT NULL,
  `Country_Name` varchar(20) NOT NULL,
  `Team_Name` varchar(20) NOT NULL,
  `Stadium_Details` varchar(100) NOT NULL,
  `Country_Img` text NOT NULL,
  `Famous_Places` varchar(100) NOT NULL,
  `Famous_Food` varchar(100) NOT NULL,
  `Country_Area` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cntry_tbl`
--

INSERT INTO `cntry_tbl` (`Country_Id`, `Country_Name`, `Team_Name`, `Stadium_Details`, `Country_Img`, `Famous_Places`, `Famous_Food`, `Country_Area`) VALUES
(32, 'Tonga', 'India', 'abcd', 'Annotation 2021-07-02 112647.png', 'Delhi', 'Pizza', 'Tonga'),
(33, 'Tonga', 'India', 'abcd', 'Annotation 2021-07-02 112647.png', 'Delhi', 'Pizza', 'Tonga'),
(34, 'Tonga', 'India', 'abcd', 'Annotation 2021-07-02 112647.png', 'Delhi', 'Pizza', 'Tonga'),
(35, 'Tonga', 'India', 'abcd', 'Annotation 2021-07-02 112647.png', 'Delhi', 'Pizza', 'Tonga'),
(36, 'India', 'India', 'abcd', 'Ladakh Wallpaper by JB.jpg', 'Delhi', 'Pizza', 'aisa');

-- --------------------------------------------------------

--
-- Table structure for table `feedback__tbl`
--

CREATE TABLE `feedback__tbl` (
  `F_Id` int(10) NOT NULL,
  `F_subject` varchar(10) NOT NULL,
  `User_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback__tbl`
--

INSERT INTO `feedback__tbl` (`F_Id`, `F_subject`, `User_Name`) VALUES
(6, 'Good', 'pavan'),
(7, 'djk', 'vivek');

-- --------------------------------------------------------

--
-- Table structure for table `pitch__tbl`
--

CREATE TABLE `pitch__tbl` (
  `P_Id` int(5) NOT NULL,
  `W_Id` varchar(5) NOT NULL,
  `Pitch_Category` varchar(20) NOT NULL,
  `Pitch_Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pitch__tbl`
--

INSERT INTO `pitch__tbl` (`P_Id`, `W_Id`, `Pitch_Category`, `Pitch_Image`) VALUES
(3, '1', 'dusty', ''),
(4, '1', 'green', ''),
(5, '1', 'green', ''),
(6, '1', 'dusty', ''),
(7, '1', 'dusty', ''),
(8, '1', 'dusty', ''),
(9, '1', 'dusty', ''),
(10, '1', 'green', ''),
(11, '1', 'green', ''),
(12, '1', 'green', ''),
(13, '1', 'green', ''),
(14, '1', 'green', 'Annotation 2021-07-02 110400.png'),
(15, '1', 'green', 'Annotation 2021-07-02 110400.png'),
(16, '1', 'Select Pitch Categor', 'Ladakh Wallpaper by JB.jpg'),
(17, '1', 'green', 'Ladakh Wallpaper by JB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `plyer_tbl`
--

CREATE TABLE `plyer_tbl` (
  `Player_Id` int(5) NOT NULL,
  `Player_Name` varchar(20) NOT NULL,
  `Test_score` varchar(100) NOT NULL,
  `One_Day_Score` varchar(100) NOT NULL,
  `T20_Score` varchar(100) NOT NULL,
  `Srike_Rate` varchar(100) NOT NULL,
  `Half_Centuries` varchar(100) NOT NULL,
  `Centuries` varchar(100) NOT NULL,
  `Player_Image` text NOT NULL,
  `Total_Score` varchar(10000) NOT NULL,
  `Age` varchar(35) NOT NULL,
  `Team_Name` varchar(20) NOT NULL,
  `Total_Matches_Played` varchar(100) NOT NULL,
  `Taken_Wickets` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plyer_tbl`
--

INSERT INTO `plyer_tbl` (`Player_Id`, `Player_Name`, `Test_score`, `One_Day_Score`, `T20_Score`, `Srike_Rate`, `Half_Centuries`, `Centuries`, `Player_Image`, `Total_Score`, `Age`, `Team_Name`, `Total_Matches_Played`, `Taken_Wickets`) VALUES
(1, 'Kohali', '45', '55', '84', '145', '75', '23', 'Ladakh Wallpaper by JB.jpg', '88', '95', 'india', '55', '0');

-- --------------------------------------------------------

--
-- Table structure for table `team__tbl`
--

CREATE TABLE `team__tbl` (
  `Team_id` int(10) NOT NULL,
  `Team_Name` varchar(20) NOT NULL,
  `Player_Name` varchar(20) NOT NULL,
  `Coach_Name` varchar(20) NOT NULL,
  `Team_Owner` varchar(20) NOT NULL,
  `Team_Sponser` varchar(20) NOT NULL,
  `Physio_Name` varchar(20) NOT NULL,
  `Playing11_Name` varchar(20) NOT NULL,
  `Substituant_Name` varchar(20) NOT NULL,
  `Team_Img` text NOT NULL,
  `Team_Avg_Win%` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team__tbl`
--

INSERT INTO `team__tbl` (`Team_id`, `Team_Name`, `Player_Name`, `Coach_Name`, `Team_Owner`, `Team_Sponser`, `Physio_Name`, `Playing11_Name`, `Substituant_Name`, `Team_Img`, `Team_Avg_Win%`) VALUES
(9, 'india', 'Kohali', 'ganguly', 'Abcd', 'xyz', 'Gekegk', 'dgrjffj', 'fjfeifig', 'Annotation 2021-07-02 112647.png', '97%'),
(10, 'india', 'Kohali', 'ganguly', 'Abcd', 'fejgeek', 'Gekegk', 'eneklfl', '4848', 'Annotation 2021-07-02 110400.png', '89%'),
(11, 'india', 'Kohali', 'ganguly', 'Abcd', 'fejgeek', 'acbf', 'eneklfl', 'fjfeifig', 'Annotation 2021-07-02 112647.png', '89%'),
(12, 'india', 'acbf', 'ganguly', 'Abcd', 'fejgeek', 'acbf', 'dgrjffj', 'fjfeifig', 'Annotation 2021-07-02 112647.png', '89%'),
(13, 'india', 'Gekegk', 'ganguly', 'Abcd', 'fejgeek', 'Gekegk', 'dgrjffj', 'fjfeifig', 'Annotation 2021-07-02 112647.png', '65%'),
(14, 'india', 'Gekegk', '5454', 'Abcd', 'fejgeek', 'Gekegk', 'dgrjffj', 'fjfeifig', 'Annotation 2021-07-02 110400.png', '89%'),
(15, 'india', 'Gekegk', '5454', 'Abcd', 'fejgeek', 'Gekegk', 'dgrjffj', 'fjfeifig', 'Annotation 2021-07-02 110400.png', '89%'),
(16, 'india', 'Gekegk', 'ganguly', 'Abcd', 'fejgeek', 'Gekegk', 'dgrjffj', 'fjfeifig', 'Annotation 2021-07-02 110400.png', '89%'),
(17, 'india', 'Gekegk', 'ganguly', 'Abcd', 'fejgeek', 'Gekegk', 'dgrjffj', 'fjfeifig', 'Annotation 2021-07-02 110400.png', '89%'),
(18, 'india', 'acbf', 'ganguly', 'Abcd', 'fejgeek', 'acbf', 'dgrjffj', 'fjfeifig', 'Annotation 2021-07-02 112647.png', '65%');

-- --------------------------------------------------------

--
-- Table structure for table `tour_tbl`
--

CREATE TABLE `tour_tbl` (
  `Tour_Id` int(5) NOT NULL,
  `Tour_Sponser` varchar(100) NOT NULL,
  `Tour_Place` varchar(20) NOT NULL,
  `Tour_State_Date` date NOT NULL,
  `Tour_End_Date` date NOT NULL,
  `Tour_Since` varchar(10) NOT NULL,
  `Tour_Winner` varchar(20) NOT NULL,
  `Tour_Loser` varchar(20) NOT NULL,
  `Tour_Prize` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_tbl`
--

INSERT INTO `tour_tbl` (`Tour_Id`, `Tour_Sponser`, `Tour_Place`, `Tour_State_Date`, `Tour_End_Date`, `Tour_Since`, `Tour_Winner`, `Tour_Loser`, `Tour_Prize`) VALUES
(2, 'abcd', '0000-00-00', '2022-02-09', '2022-02-15', '0000-00-00', 'India', 'Pak', '1000000'),
(3, 'abcd', '0000-00-00', '2022-02-10', '2022-02-26', '0000-00-00', 'India', 'Pak', '1000000'),
(4, 'abcd', 'Rajkot', '2022-02-26', '2022-02-28', '2021', 'India', 'Pak', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `venue__tbl`
--

CREATE TABLE `venue__tbl` (
  `Venue_id` int(5) NOT NULL,
  `Venue_Name` varchar(20) NOT NULL,
  `Venue_Img` text NOT NULL,
  `Stadium_Capacity` mediumtext NOT NULL,
  `Established_Date` date NOT NULL,
  `Facilities_Name` varchar(20) NOT NULL,
  `Ground_Size` varchar(10) NOT NULL,
  `Pitch_Condition` varchar(20) NOT NULL,
  `Match_Played` varchar(100) NOT NULL,
  `Venue_City` varchar(20) NOT NULL,
  `Venue_Ctry` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue__tbl`
--

INSERT INTO `venue__tbl` (`Venue_id`, `Venue_Name`, `Venue_Img`, `Stadium_Capacity`, `Established_Date`, `Facilities_Name`, `Ground_Size`, `Pitch_Condition`, `Match_Played`, `Venue_City`, `Venue_Ctry`) VALUES
(1, 'Rajkot', '0', 'Rajkot', '2022-02-13', 'All', '66', 'Green', '100', 'Rajkot', 'India'),
(2, 'Rajkot', '0', 'Rajkot', '2022-02-04', 'All', '66', 'Green', '100', 'Rajkot', 'India'),
(3, 'Rajkot', '0', 'Rajkot', '2022-02-05', '44', '66', 'Green', '546', 'Rajkot', 'India'),
(4, 'Rajkot', '0', 'Rajkot', '2022-02-13', 'All', '66', 'Green', '100', 'Rajkot', 'India'),
(5, 'Rajkot', '0', 'Rajkot', '2022-02-13', 'All', '66', 'Green', '100', 'Rajkot', 'India'),
(6, 'Rajkot', 'papers.co-mk04-night-city-view-lights-dark-bridge-nature-29-wallpaper.jpg', 'Rajkot', '2022-02-13', 'All', '66', 'Green', '100', 'Rajkot', '484');

-- --------------------------------------------------------

--
-- Table structure for table `weather__tbl`
--

CREATE TABLE `weather__tbl` (
  `W_Id` int(11) NOT NULL,
  `Season_Name` varchar(15) NOT NULL,
  `Tempreture` varchar(100) NOT NULL,
  `Humidity` varchar(100) NOT NULL,
  `Rain Percentage` varchar(100) NOT NULL,
  `Visibility` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weather__tbl`
--

INSERT INTO `weather__tbl` (`W_Id`, `Season_Name`, `Tempreture`, `Humidity`, `Rain Percentage`, `Visibility`) VALUES
(2, 'Winter', '56 c', '44', '30%', '25'),
(3, 'Winter', '56 c', '44', '30%', '25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cntry_tbl`
--
ALTER TABLE `cntry_tbl`
  ADD PRIMARY KEY (`Country_Id`);

--
-- Indexes for table `feedback__tbl`
--
ALTER TABLE `feedback__tbl`
  ADD PRIMARY KEY (`F_Id`);

--
-- Indexes for table `pitch__tbl`
--
ALTER TABLE `pitch__tbl`
  ADD PRIMARY KEY (`P_Id`);

--
-- Indexes for table `plyer_tbl`
--
ALTER TABLE `plyer_tbl`
  ADD PRIMARY KEY (`Player_Id`);

--
-- Indexes for table `team__tbl`
--
ALTER TABLE `team__tbl`
  ADD PRIMARY KEY (`Team_id`);

--
-- Indexes for table `tour_tbl`
--
ALTER TABLE `tour_tbl`
  ADD PRIMARY KEY (`Tour_Id`);

--
-- Indexes for table `venue__tbl`
--
ALTER TABLE `venue__tbl`
  ADD PRIMARY KEY (`Venue_id`);

--
-- Indexes for table `weather__tbl`
--
ALTER TABLE `weather__tbl`
  ADD PRIMARY KEY (`W_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cntry_tbl`
--
ALTER TABLE `cntry_tbl`
  MODIFY `Country_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `feedback__tbl`
--
ALTER TABLE `feedback__tbl`
  MODIFY `F_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pitch__tbl`
--
ALTER TABLE `pitch__tbl`
  MODIFY `P_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `plyer_tbl`
--
ALTER TABLE `plyer_tbl`
  MODIFY `Player_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team__tbl`
--
ALTER TABLE `team__tbl`
  MODIFY `Team_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tour_tbl`
--
ALTER TABLE `tour_tbl`
  MODIFY `Tour_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `venue__tbl`
--
ALTER TABLE `venue__tbl`
  MODIFY `Venue_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `weather__tbl`
--
ALTER TABLE `weather__tbl`
  MODIFY `W_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
