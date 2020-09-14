-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2020 at 10:24 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_BongoTraveler`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookPackage`
--

CREATE TABLE `bookPackage` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img` varchar(255) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 0,
  `bookingDate` date NOT NULL,
  `delegate` int(11) NOT NULL,
  `payment_methood` int(11) NOT NULL,
  `payment_state` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookPackage`
--

INSERT INTO `bookPackage` (`id`, `user_name`, `user_id`, `package_id`, `package_name`, `price`, `time`, `img`, `state`, `bookingDate`, `delegate`, `payment_methood`, `payment_state`) VALUES
(1, 'Shuvo', 2, 1, 'Mangrove Forest', 1500, '2020-02-05 06:01:44', 'sundorbon2.jpg', 2, '0000-00-00', 0, 0, 1),
(2, 'Shuvo', 2, 2, 'Sixty Dome Mosque', 1500, '2020-02-05 06:01:51', 'sixty-dome-mosque-600-gtm1.jpg', 1, '0000-00-00', 0, 0, 1),
(3, 'Shuvo', 2, 5, 'Hazrat Shah-Paran (R:) Mazar Sharif, Sylhet', 3000, '2020-02-05 06:55:44', 'poran.jpeg', 0, '0000-00-00', 0, 0, 0),
(6, 'Nitu Talukder', 4, 1, 'Mangrove Forest', 1500, '2020-01-24 03:50:16', 'sundorbon2.jpg', 0, '0000-00-00', 0, 0, 0),
(11, 'Imran', 9, 4, 'Shrine of Hazrat Shah Jalal', 2000, '2020-02-04 04:52:39', '220px-05122009_Hazrat_Shahjalal_Majar_Exit_photo2_Ranadipam_Basu.jpg', 0, '2020-02-08', 1, 0, 0),
(12, 'Imran', 9, 6, 'Lalbagh Fort', 500, '2020-02-04 04:54:42', 'BTHome11.jpg', 0, '2020-02-06', 1, 0, 0),
(13, 'Imran', 9, 1, 'Mangrove Forest', 1500, '2020-02-04 05:01:48', 'sundorbon2.jpg', 0, '2020-02-05', 1, 0, 0),
(14, 'Imran', 9, 2, 'Sixty Dome Mosque', 1500, '2020-02-05 06:02:20', 'sixty-dome-mosque-600-gtm1.jpg', 0, '0000-00-00', 5, 0, 1),
(15, 'Imran', 9, 5, 'Hazrat Shah-Paran (R:) Mazar Sharif, Sylhet', 3000, '2020-02-05 06:02:27', 'poran.jpeg', 0, '2020-02-15', 5, 2, 1),
(16, 'Nitu Talukder', 4, 2, 'Sixty Dome Mosque', 1500, '2020-02-09 08:05:49', 'sixty-dome-mosque-600-gtm1.jpg', 1, '0000-00-00', 0, 1, 0),
(17, 'Nitu Talukder', 4, 3, 'Sri Mongol', 2000, '2020-02-09 08:12:45', 'srimongol1.jpg', 1, '0000-00-00', 11, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tal_admin`
--

CREATE TABLE `tal_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tal_admin`
--

INSERT INTO `tal_admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'Shuvo', '123'),
(2, 'Nitu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guide`
--

CREATE TABLE `tbl_guide` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobailenumber` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guide`
--

INSERT INTO `tbl_guide` (`id`, `name`, `nationality`, `address`, `mobailenumber`, `area`, `user_name`, `pic`, `password`, `status`) VALUES
(5, 'Shafira Saklin', 'Bangladeshi', 'Sylhet', 1748613498, 'Sylhet', 'Saklin', 'about_1.jpg', '123', 1),
(8, 'Rana Piterson', 'Bangladeshi', 'Sylhet', 1748613496, 'Sylhet', 'Rana Piterson', 'news_5.jpg', '123', 1),
(9, 'Atikul Islam', 'Bangladeshi', 'Sylhet', 1744613494, 'Sylhet', 'Atik', '1_(3)2.jpg', '123', 1),
(10, 'Chowdhuri Afrin', 'Bangladeshi', 'Sylhet', 1748613491, 'Sylhet', 'Afrin', '1_(3)4.jpg', '123', 1),
(11, 'Rakibul Hasan', 'Bangladeshi', 'Sylhet', 1748613421, 'Chittagong', 'RJ75', 'guide11.jpg', '123', 1),
(12, 'Ajijul Islam', 'Bangladeshi', 'Sylhet', 1741613488, 'Sylhet', 'Azizul', 'footer_11.jpg', '123', 1),
(13, 'Sahana', 'Bangladeshi', 'Sylhet', 1748613445, 'Sylhet', 'Shana', 'elements1.jpg', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guideBook`
--

CREATE TABLE `tbl_guideBook` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guideBook`
--

INSERT INTO `tbl_guideBook` (`id`, `user_name`, `user_id`, `guide_id`, `state`) VALUES
(1, 'Nitu Talukder', 4, 5, 2),
(2, 'Nitu Talukder', 4, 8, 2),
(3, 'Nitu Talukder', 4, 9, 0),
(5, 'Shuvo', 2, 5, 0),
(6, 'Ajijul', 7, 5, 0),
(7, 'Salma', 8, 5, 0),
(8, 'Shuvo', 2, 11, 0),
(10, 'Imran', 9, 13, 0),
(11, 'Imran', 9, 9, 0),
(12, 'Imran', 9, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `city_name`) VALUES
(1, 'Dhaka'),
(2, 'Sylhet'),
(3, 'Khulna'),
(4, 'Barisal'),
(5, 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `package_name`, `img`, `body`, `price`) VALUES
(1, 'Mangrove Forest', 'sundorbon2.jpg', 'Visit World Largest Mangrove Forest Sundorbon. Beauty of Natural resources, you can explore amazing experience.Package is only', 1500),
(2, 'Sixty Dome Mosque', 'sixty-dome-mosque-600-gtm1.jpg', 'In the middle of the 15th century, a Muslim colony was founded in the mangrove forest of the Sundarbans, near the coast in the Bagerhat District by a saint-General, named Khan Jahan Ali. He preached in an affluent city during the reign of Sultan Nasiruddi', 1500),
(3, 'Sri Mongol', 'srimongol1.jpg', 'It is said the name Sreemangal (or Srimangal) is named after Sri Das and Mangal Das; two brothers who settled on the banks of the Hail Haor.[2] A copper plate of Raja Marundanath from the 11th century was found in Kalapur. During an excavation at Lamua, a', 2000),
(4, 'Shrine of Hazrat Shah Jalal', '220px-05122009_Hazrat_Shahjalal_Majar_Exit_photo2_Ranadipam_Basu.jpg', 'This fascinating and atmospheric shrine of the revered 14th-century Sufi saint Shah Jalal is one of Bangladesh\'s biggest pilgrimage sites. Housing a mosque (masjid) and the main tomb (mazar), the complex is accessed via an open staircase from the East Dar', 2000),
(5, 'Hazrat Shah-Paran (R:) Mazar Sharif, Sylhet', 'poran.jpeg', 'Hazrat Shah Paran (R) ???? ???? ???? (???) is one of 360 awliya allah (companions) who came to Bangladesh with hazrat shah jalal (RA) to spread islam in the region. Hazrat Shah Paran (RA) arrived in India in 1303 AD accompanied his uncle, Hazrat Shah Jala', 3000),
(6, 'Lalbagh Fort', 'BTHome11.jpg', 'Lalbagh Fort (also Fort Aurangabad) is an incomplete 17th century Mughal fort complex that stands before the Buriganga River in the southwestern part of Dhaka, Bangladesh.[1] The construction was started in 1678 AD by Mughal Subahdar Muhammad Azam Shah wh', 500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `id` int(11) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `place_description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `category` int(11) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`id`, `place_name`, `place_description`, `img`, `status`, `category`, `area`) VALUES
(1, 'Khulna ', '<p>Sundarbans is the largest mangrove forest on earth and a UNESCO world heritage site. Sundarbans is located in between two neighboring countries – Bangladesh and India. Majority of the forest is located in Bangladesh. It is home of the last remaining Bengal tigers in the world and much other\r\n<br> wildlife. The environment of Sundarbans is tranquilizing and visiting this forest could be a once in a lifetime experience. That is why Sundarbans comes as number one on our list of the best places to visit in Bangladesh.</p>', 'sundorbon.jpg', 0, 2, 'Khulna'),
(2, 'Chittagong', '<p>Chittagong Hill-Tracts area is a naturally beautiful place full of beautiful hills. It is home of many tribal groups of Bangladesh.<br> This is the best place in Bangladesh for adventure travel. You can trek deep inside the hills for many days here if you can manage permission from the local authority. Also, you can meet different tribal groups in this region and see their lifestyle. The most beautiful river in Bangladesh called Sangu river is located in this area. A boat ride in Sangu during monsoon could be a great experience. Chittagong hill-tracts comes as number two on our list of the best places to visit in Bangladesh.</p>', 'bangladesh-tribal-woman-600-gtm.jpg', 0, 2, 'Chittagong'),
(3, 'Srimangal', '<p>Srimangal is the tea capital of Bangladesh, located in the north-eastern part of the country. You’ll find lush green tea gardens anywhere you go here. This is one of the few places in the country where if you look around, you may not find any other people anywhere except you. A really nice and calm place. Cycling through the trails inside the tea plantations here could be one of the best things you can do in Bangladesh.<br> Also worth visiting is the Lawachhara National Park, and trek to Hamham waterfalls. You can easily spend a few days here with nature. Srimangal comes as number three on our list of the best places to visit in Bangladesh.</p>', 'srimongol.jpg', 0, 2, 'Sylhet'),
(4, 'Rangamati', '<p>Rangamti is a district of Chittagong Hill-Tracts area. The main reason to visit this place is the Kaptai Lake. It is a naturally beautiful man-made lake surrounded by beautiful hills. The best thing to do at Rangamati is enjoying a boat ride on the Kaptai Lake for the whole day. Rangamati is also home of many tribal groups. You can visit their handicraft market here to buy some fine quality handmade fabrics. There is a Buddhist monastery called Rajban Bihara which is also worth visiting. Rangamati comes as number four on our list of the best places to visit in Bangladesh.</p>', 'kaptai-lake-wikipedia-fahad-faisal-600-o.jpg', 0, 2, 'Chittagong'),
(5, 'Cemetery Sylhet', 'Lalakhal is one of the most attractive tourist spots in Sylhet. Lalakhal is a wide canal located Sharee River near the Tamabil road. The river is not much deep and it is one of the sources of sand in Sylhet. The focal point of the canal is water. The water has a variety of colors blue, green, clear water at..', 'sahJolal.jpeg', 0, 2, 'Sylhet'),
(6, 'Oronno,Sundorbon', 'Sundarbans is the largest mangrove forest on earth and a UNESCO world heritage site. Sundarbans is located in between two neighboring countries – Bangladesh and India. Majority of the forest is located in Bangladesh. It is home of the last remaining Bengal tigers in the world and much other\r\n<br> wildlife. The environment of Sundarbans is tranquilizing and visiting this forest could be a once in a lifetime experience. That is why Sundarbans comes as number one on our list of the best places to visit in Bangladesh.', 'destination_21.jpg', 0, 2, 'Khulna'),
(7, 'Cox-Bazer sea beach', 'Cox’s Bazar is a District under Chittagong Division, which is famous for its longest unbroken sandy sea beach. It is located 150 km south of the industrial port- Chittagong. Cox’s Bazar is considered as having the longest sea beach in the world, with a total of 121 kilometer long. The name Cox’s Bazar was derived from its founder, Captain Cox. He founded the very attractive beach in 1798. Then the Cox’s Bazar beach started only as a small port and health resort.<br>\r\n\r\nThough the beach is considered to be the longest beach in the world, it has been the least crowded among the other beaches. Here, visitors can enjoy the relaxing breeze of the Bay of Bengal Sea and the peacefulness of the place. The Cox’s bazar beach certainly has the finest leisure it can offer to each of its visitors. People can take a timely stroll along the lengthened stretch of the beach and enjoy the view of the amazing seascape. Visitors can also enjoy water sport activities like scuba diving, surfing, and try some boat rides.<br>\r\n\r\nThere are also other wonderful places to see around the Cox’s beach bazar. One of these is the beautiful Himchari waterfall, located 18 kilometer south of Cox’s Bazar sea beach. This is the most visited place in the district, with its beautiful refreshing green hills and the wonderful water fall, where visitors can bathe and swim apart from the sea itself.\r\nAnother attraction is the Moheshkhali Island near the Cox’s beach bazar coast. The island can be reached via speedboat. Here, visitors can view the breath-taking view of the island. With the bright green color of its mangrove forest that will surely amaze everyone who come to see the place. This is definitely the next best thing to explore after one’s beach trip.', 'coxbazer1.jpg', 0, 3, 'Chittagong'),
(8, 'Bagakain Lake', 'Bogakain Lake, also called Baga Lake or Boga Lake, is a lake located in Ruma Upazila in the hill district Bandarban, Bangladesh.[1] It is a natural sweet and deep water lake. Its height from sea level is nearly 1,246 feet (380 m). Geologists believe that it was created by collection of rain water in summer. The lake is irregular in shape.[1] A team of geologists surveyed this lake in 1973. They found the lake\'s water to be too acidic for any form of life. By the year 1995, the lake\'s water became abundant with plants and fish. The local residents culture and gather Tilapia fish in this lake.<br>\r\n\r\nPeople of Bawm tribe migrated from Saikot para to Boga Lake and set up this village.<br>\r\n\r\nA local legend tells that the lake was created after the inhabitants of a Khumi village killed and later devoured a deity who later reappeared to them in the form of a dragon. Instantly an earthquake occurred, the hillside caved in, and the village disappeared and formed a deep lake.', 'bogalek1.jpg', 0, 2, 'Chittagong'),
(9, 'Bandarban Hill', 'Bandarban Hill District is the most remote and least populated district in Bangladesh. The lure of the tallest peaks of Bangladesh, treks through virgin forests and chance to meet more than 15 tribes of the region up close is growing both among Bangladeshis and tourists from other countries. Since the insurgency ceased in the Chittagong Hill Tracts (a cluster that includes all three hill districts of Bangladesh) it has opened up for tourists more than a decade back, though some of the western tourist guides may still describe the area as a major security risk.<br>\r\n\r\nSajek valley is known for its natural environment and surrounded by mountains, dense forest, and grasslands hill tracks. Many small rivers flow through the mountains among which Kachalong and Machalong are notable. On the way to Sajek valley, one has to cross the Mayni range and Mayni river. The road to Sajek has high picks and falls.<br>\r\n\r\nIt is the best one can get except some other exclusives like khagrhachharhi and rangamati. All of the three districts are in the hill tracts of bangladesh.\r\n\r\nNilgiri, is the highest point one can reach though vehicle. Absolutely picturasque and one could stay over night up there. Motels, dorms and tent facilities are available. Prior reservation is needed.', 'sajek1.jpg', 0, 2, 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_placeType`
--

CREATE TABLE `tbl_placeType` (
  `id` int(11) NOT NULL,
  `ptype_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_placeType`
--

INSERT INTO `tbl_placeType` (`id`, `ptype_name`) VALUES
(2, 'Natural'),
(4, 'River'),
(5, 'Rural Area'),
(6, 'Historical Place');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `mobaile_number` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `user_name`, `mobaile_number`, `pic`, `password`, `status`, `type`) VALUES
(2, 'Shuvo Cold', 'Shuvo', '01748613498', 'shuoVi.jpg', '123', 1, 0),
(4, 'Nitu', 'Nitu Talukder', '01749613498', 'guide5.jpg', '123', 1, 0),
(6, 'Guljer Hussen Rocket', 'Munni', '01740613498', 'guide2.jpg', '123', 1, 0),
(7, 'Ajijul', 'Ajijul', '01749613789', 'guide3.jpg', '123', 0, 0),
(8, 'Salma', 'Salma', '01749613890', '1_(3).jpg', '123', 0, 0),
(9, 'Imran', 'Imran', '01749603890', 'guide4.jpg', '123', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookPackage`
--
ALTER TABLE `bookPackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tal_admin`
--
ALTER TABLE `tal_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_guide`
--
ALTER TABLE `tbl_guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guideBook`
--
ALTER TABLE `tbl_guideBook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_placeType`
--
ALTER TABLE `tbl_placeType`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookPackage`
--
ALTER TABLE `bookPackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tal_admin`
--
ALTER TABLE `tal_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_guide`
--
ALTER TABLE `tbl_guide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_guideBook`
--
ALTER TABLE `tbl_guideBook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_placeType`
--
ALTER TABLE `tbl_placeType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
