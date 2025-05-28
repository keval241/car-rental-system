-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 06:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(25) DEFAULT NULL,
  `a_password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `ad_contact`
--

CREATE TABLE `ad_contact` (
  `ad_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `ad_name` varchar(20) DEFAULT NULL,
  `ad_email` varchar(35) DEFAULT NULL,
  `ad_subject` varchar(30) DEFAULT NULL,
  `ad_message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ad_contact`
--

INSERT INTO `ad_contact` (`ad_id`, `c_id`, `ad_name`, `ad_email`, `ad_subject`, `ad_message`) VALUES
(15, 14, 'keval bagthaliya', 'kb@gmail.com', 'valid time', 'not car');

-- --------------------------------------------------------

--
-- Table structure for table `customer_register`
--

CREATE TABLE `customer_register` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(20) DEFAULT NULL,
  `c_username` varchar(15) DEFAULT NULL,
  `c_mobile` int(11) DEFAULT NULL,
  `c_email` varchar(35) DEFAULT NULL,
  `c_password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_register`
--

INSERT INTO `customer_register` (`c_id`, `c_name`, `c_username`, `c_mobile`, `c_email`, `c_password`) VALUES
(14, 'keval bagthaliya', 'keval_123', 1234567890, 'kb@gmail.com', '12345678'),
(15, 'Sarthak', 'sarthak_123', 987654321, 'sb@gmail.com', '12345678'),
(16, 'Dax ', 'Dax_Dhanani', 987654321, 'dd@gmail.com', '12345678'),
(17, 'Darshil Metaliya', 'Darshil_123', 1234567890, 'dm@gmail.com', '12345678'),
(18, 'Brijesh Savaliya', 'Brijesh_678', 1234567890, 'bs@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `vechicels_booking`
--

CREATE TABLE `vechicels_booking` (
  `b_id` int(11) NOT NULL,
  `v_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `b_name` varchar(20) DEFAULT NULL,
  `b_carName` varchar(25) DEFAULT NULL,
  `b_brandName` varchar(15) DEFAULT NULL,
  `b_fromDate` date DEFAULT NULL,
  `b_ToDate` date DEFAULT NULL,
  `b_totalDays` int(11) DEFAULT NULL,
  `b_c_image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vechicels_booking`
--

INSERT INTO `vechicels_booking` (`b_id`, `v_id`, `c_id`, `b_name`, `b_carName`, `b_brandName`, `b_fromDate`, `b_ToDate`, `b_totalDays`, `b_c_image`, `status`) VALUES
(30, 16, 15, 'sarthak', 'Invicto', 'Maruti', '2024-10-12', '2024-10-18', 7, 'aadhr1.png', 1),
(34, 21, 16, 'Dax', 'Tiago', 'TATA', '2024-10-18', '2024-10-25', 8, 'aadhr1.png', 1),
(35, 10, 14, 'Keval Bagthaliya', 'swift', 'Maruti', '2024-10-10', '2024-10-12', 3, 'aadhr1.png', 0),
(37, 19, 18, 'Brijesh Savaliya', 'Virtus', 'Volkswagen', '2024-10-14', '2024-10-20', 7, 'aadhr1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vechicels_brand`
--

CREATE TABLE `vechicels_brand` (
  `v_id` int(11) NOT NULL,
  `v_carname` varchar(30) DEFAULT NULL,
  `v_carno` varchar(15) DEFAULT NULL,
  `v_brand` varchar(15) DEFAULT NULL,
  `v_price` int(11) DEFAULT NULL,
  `v_fuel` varchar(10) DEFAULT NULL,
  `v_seat` varchar(10) DEFAULT NULL,
  `v_image` varchar(100) DEFAULT NULL,
  `v_aircondition` varchar(7) DEFAULT NULL,
  `v_description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vechicels_brand`
--

INSERT INTO `vechicels_brand` (`v_id`, `v_carname`, `v_carno`, `v_brand`, `v_price`, `v_fuel`, `v_seat`, `v_image`, `v_aircondition`, `v_description`) VALUES
(7, 'innova-crysta', 'GJ 02 WE 4115', 'Toyota', 4000, 'Diseal', 'eight', 'innova-removebg-preview.png', 'AC', 'The Toyota Innova is not just a vehicle; it’s a gateway to unforgettable journeys. This spacious and versatile MPV is designed with both comfort and practicality in mind, making it the perfect choice for any occasion, from family vacations to corporate events.\r\n\r\nRenting the Toyota Innova means choosing reliability, comfort, and style. It’s more than just transportation; it’s an experience. With its excellent resale value and low maintenance costs, the Innova is not only a smart rental choice bu'),
(8, 'Ertiga', 'GJ 03 KL 0086', 'Maruti', 4000, 'CNG', 'six', 'ERTIGA_WHITE.png', 'AC', 'Eritga is more than just a car rental service; it’s your gateway to adventure and exploration. We understand that every journey begins with the right vehicle, and that’s why we offer a diverse fleet tailored to meet your unique travel needs. From compact cars for city driving to spacious SUVs for family vacations, Eritga has the perfect vehicle for every occasion.\r\n\r\nExperience travel like never before with Eritga Car Rental. Our passion for excellence, commitment to customer satisfaction, and d'),
(9, 'Carens', 'GJ 03 KG 2870', 'KIA', 4000, 'Petrol', 'six', 'carens.png', 'AC', 'Welcome to Carnas, where your travel aspirations take flight! At Carnas, we understand that the journey is just as important as the destination. That’s why we’re dedicated to providing a seamless and enjoyable car rental experience, tailored to meet your unique travel needs.\r\n\r\nChoose Carnas for your next car rental and experience the perfect blend of quality, convenience, and adventure. We’re passionate about making your travels enjoyable and memorable. Book with us today and hit the road with '),
(10, 'swift', 'GJ 05 SA 5857', 'Maruti', 4000, 'CNG', 'four', 'DzireWhitemerged-v4.png', 'AC', 'Welcome to Swift, your premier car rental service designed for those who value convenience, reliability, and exceptional experiences on the road. We believe that every journey is a story waiting to be told, and we’re here to help you create unforgettable memories, whether you’re traveling for business or leisure.'),
(11, 'EECO', 'GJ 03 KG 2473', 'Maruti', 2000, 'CNG', 'eight', 'eeco.png', 'Non Ac', 'Welcome to Eco, where we prioritize sustainability and convenience in every journey. At Eco Car Rental, we believe that travel should be both enjoyable and environmentally responsible. Our mission is to provide you with a diverse fleet of eco-friendly vehicles, making it easier than ever to explore while reducing your carbon footprint.'),
(12, 'Audio A5', 'GJ 09 HG 1803', 'Audio', 4000, 'Diseal', 'four', 'audio.jpg', 'AC', 'Experience the thrill of driving with the Audi A5, where luxury and performance come together in perfect harmony. At our car rental service, we provide you with the opportunity to experience this iconic vehicle, whether you’re looking for a stylish ride for a special occasion or simply want to enjoy the sheer joy of driving.'),
(13, 'Brezza', 'GJ 03 KL 9894', 'Maruti', 3000, 'Petrol', 'four', 'breea.png', 'AC', 'Welcome to the Maruti Suzuki Brezza, your perfect companion for both urban commutes and weekend getaways. This stylish compact SUV combines functionality with a sporty design, making it an ideal choice for those seeking comfort, versatility, and reliability on the road.\r\nDon’t miss out on the chance to drive the Maruti Suzuki Brezza. Book with us today and experience the perfect blend of performance, comfort, and style on your next journey!'),
(14, 'Altroz', 'GJ 23 HJ 5282', 'TATA', 3500, 'CNG', 'four', 'alterzo.png', 'AC', 'Welcome to the Tata Altroz, a hatchback that redefines urban mobility with its stylish design, spacious interior, and advanced technology. Whether you’re navigating city streets or embarking on a weekend getaway, the Altroz is the perfect companion for all your travel needs.\r\n\r\nDon’t miss your chance to experience the Tata Altroz. Book with us today and elevate your driving experience with a hatchback that’s designed for the modern traveler!'),
(15, 'Wagon', 'GJ 08 2190', 'Maruti', 3000, 'CNG', 'four', 'wagno.png', 'AC', 'Welcome to Wangno R, where innovation meets comfort and performance. Designed for the modern driver, the Wangno R is a versatile and stylish vehicle that caters to all your travel needs.\r\nDon’t miss your chance to experience the Wangno R. Book with us today and redefine your travel experience with a vehicle that’s designed to elevate every journey!'),
(16, 'Invicto', 'GJ 12 KL 1986', 'Maruti', 4000, 'Petrol', 'six', 'invicto.png', 'AC', 'Welcome to Invicto, where sophistication meets performance in every journey. Designed for those who seek a premium driving experience, Invicto offers a unique blend of luxury, comfort, and cutting-edge technology, making it the perfect choice for business trips, special occasions, or simply indulging in a remarkable driving experience.\r\nDon’t miss the opportunity to experience the Invicto. Book with us today and elevate your travel experience with a vehicle that embodies elegance, performance, a'),
(17, 'Baleno', 'GJ 33 DF 5462', 'Maruti', 3000, 'CNG', 'four', 'bal.png', 'AC', 'Welcome to the Maruti Suzuki Baleno, a hatchback that perfectly combines modern design, spacious interiors, and advanced technology. Whether you’re navigating busy city streets or embarking on a weekend getaway, the Baleno is the ideal choice for those who value comfort, performance, and versatility on the road.\r\nDon’t miss out on the chance to experience the Maruti Suzuki Baleno. Book with us today and discover the perfect blend of comfort, performance, and modern design for your next journey!'),
(18, 'Ciaz', 'GJ 03 KG 3670', 'Maruti', 3500, 'Petrol', 'four', 'ciaz.png', 'AC', 'Welcome to the Maruti Suzuki Ciaz, a premium sedan that embodies sophistication, comfort, and advanced technology. Designed for those who appreciate style and performance, the Ciaz is perfect for business trips, family outings, or leisurely drives, ensuring you travel in luxury and comfort.\r\n\r\nDon’t miss the chance to experience the Maruti Suzuki Ciaz. Book with us today and enjoy a sophisticated driving experience that combines luxury, comfort, and modern design for your next journey!'),
(19, 'Virtus', 'GJ 05 KL 0351', 'Volkswagen', 3500, 'Petrol', 'four', 'virtus.png', 'AC', 'Welcome to the Volkswagen Virtus, a premium sedan that combines sophisticated design, advanced technology, and exhilarating performance. Whether you’re commuting to work, going on a road trip, or attending a special event, the Virtus is the perfect choice for those who appreciate quality and comfort in their driving experience.\r\n\r\nDon’t miss out on the chance to experience the Volkswagen Virtus. Book with us today and enjoy a driving experience that combines luxury, performance, and cutting-edge'),
(20, 'Punch', 'GJ 07 OL 6540', 'TATA', 2500, 'CNG', 'four', 'punch.png', 'AC', 'Welcome to the Tata Punch, a compact SUV that redefines urban mobility with its sporty design, spacious interior, and advanced technology. Whether you’re navigating busy city streets or heading out for a weekend adventure, the Punch is your perfect companion, offering style, comfort, and versatility.\r\nDon’t miss the chance to experience the Tata Punch. Book with us today and discover the perfect combination of compact design, comfort, and performance for your next journey!'),
(21, 'Tiago', 'GJ 02 4562', 'TATA', 3000, 'CNG', 'four', 'tiagoopalwhite.png', 'AC', 'Welcome to the Tata Tiago, a compact hatchback that perfectly combines modern design, practicality, and advanced features. Ideal for city driving and short trips, the Tiago is designed for those who seek a fun and efficient ride without compromising on comfort or style.\r\n\r\nDon’t miss out on the chance to experience the Tata Tiago. Book with us today and discover the perfect blend of compact design, comfort, and performance for your next journey!');

-- --------------------------------------------------------

--
-- Table structure for table `vechicels_payment`
--

CREATE TABLE `vechicels_payment` (
  `p_id` int(11) NOT NULL,
  `v_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `p_carName` varchar(25) DEFAULT NULL,
  `p_userName` varchar(25) DEFAULT NULL,
  `p_amount` int(11) DEFAULT NULL,
  `p_payMethod` varchar(25) DEFAULT NULL,
  `p_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vechicels_payment`
--

INSERT INTO `vechicels_payment` (`p_id`, `v_id`, `c_id`, `b_id`, `p_carName`, `p_userName`, `p_amount`, `p_payMethod`, `p_Date`) VALUES
(1, 16, 15, 30, 'Invicto', 'sarthak', 28000, 'CASH', '2024-10-05'),
(5, 21, 16, 34, 'Tiago', 'Dax', 24000, 'CASH', '2024-10-08'),
(6, 10, 14, 35, 'swift dzire', 'Keval Bagthaliya', 12000, 'GooglePayUpi', '2024-10-09'),
(8, 19, 18, 37, 'Virtus', 'Brijesh Savaliya', 24500, 'PaytmUpi', '2024-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `vechicels_review`
--

CREATE TABLE `vechicels_review` (
  `r_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `v_id` int(11) DEFAULT NULL,
  `r_message` varchar(255) DEFAULT NULL,
  `r_rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vechicels_review`
--

INSERT INTO `vechicels_review` (`r_id`, `c_id`, `v_id`, `r_message`, `r_rate`) VALUES
(16, 14, 7, 'Nice car ', 3),
(17, 15, 16, 'Very nice car this site...', 4),
(18, 14, 10, 'Swift Car is provide best mileage', 4),
(19, 18, 19, 'Wow Amazing This car Thank You RentRide', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `ad_contact`
--
ALTER TABLE `ad_contact`
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `customer_register`
--
ALTER TABLE `customer_register`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `vechicels_booking`
--
ALTER TABLE `vechicels_booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `v_id` (`v_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `vechicels_brand`
--
ALTER TABLE `vechicels_brand`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `vechicels_payment`
--
ALTER TABLE `vechicels_payment`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `v_id` (`v_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `vechicels_review`
--
ALTER TABLE `vechicels_review`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `v_id` (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ad_contact`
--
ALTER TABLE `ad_contact`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer_register`
--
ALTER TABLE `customer_register`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vechicels_booking`
--
ALTER TABLE `vechicels_booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `vechicels_brand`
--
ALTER TABLE `vechicels_brand`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `vechicels_payment`
--
ALTER TABLE `vechicels_payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vechicels_review`
--
ALTER TABLE `vechicels_review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ad_contact`
--
ALTER TABLE `ad_contact`
  ADD CONSTRAINT `ad_contact_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer_register` (`c_id`);

--
-- Constraints for table `vechicels_booking`
--
ALTER TABLE `vechicels_booking`
  ADD CONSTRAINT `vechicels_booking_ibfk_1` FOREIGN KEY (`v_id`) REFERENCES `vechicels_brand` (`v_id`),
  ADD CONSTRAINT `vechicels_booking_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer_register` (`c_id`);

--
-- Constraints for table `vechicels_payment`
--
ALTER TABLE `vechicels_payment`
  ADD CONSTRAINT `vechicels_payment_ibfk_1` FOREIGN KEY (`v_id`) REFERENCES `vechicels_brand` (`v_id`),
  ADD CONSTRAINT `vechicels_payment_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer_register` (`c_id`),
  ADD CONSTRAINT `vechicels_payment_ibfk_3` FOREIGN KEY (`b_id`) REFERENCES `vechicels_booking` (`b_id`);

--
-- Constraints for table `vechicels_review`
--
ALTER TABLE `vechicels_review`
  ADD CONSTRAINT `vechicels_review_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer_register` (`c_id`),
  ADD CONSTRAINT `vechicels_review_ibfk_2` FOREIGN KEY (`v_id`) REFERENCES `vechicels_brand` (`v_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
