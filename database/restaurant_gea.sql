-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 09:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_gea`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL,
  `account_creation_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `first_name`, `second_name`, `email`, `admin_username`, `psw`, `account_creation_time`) VALUES
(1, 'Aleksandar', 'Simic', 'aleksandar@yahoo.rs', 'aleksandar_admin', 'aleksandar123456', '2024-03-19 13:18:55'),
(2, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', '2024-09-25 19:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `id` int(11) NOT NULL,
  `product` varchar(30) NOT NULL,
  `quantity` int(4) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `id` int(11) NOT NULL,
  `first_second_name` varchar(100) NOT NULL,
  `address_` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `post_no` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `time_of_order` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(4) NOT NULL,
  `product` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `price` int(4) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `text`, `price`, `image`) VALUES
(1, 'Teriyaki Pineapple Meatballs', 'Skewered with pineapple chunks they make a perfect pairing for cocktails or on small plates for a unique appetizer', 10, 'Teriyaki-Meatballs_EXPS_FT21_13380_F_1119_1.jpg'),
(2, 'Orange-Glazed Meatballs', 'Orange-glazed meatballs are a zesty and flavorful dish where tender meatballs are coated in a tangy orange sauce with a hint of sweetness.', 12, 'Orange-Glazed-Meatballs_EXPS_THSO18_228881_D04_19_9b-1.jpg'),
(3, 'Chicken Parm Sliders', 'Sliders are the perfect finger food for any get-together, and this flavorful chicken Parmesan version won’t disappoint. Enjoy in this delicious food with your family and friends.', 15, 'Chicken-Parmesan-Slider-Bake_EXPS_FT24_204498_JR_0124_1.jpg'),
(4, 'Ham \'n\' Cheese Biscuit Stacks', 'Enjoy our delectable Ham \'n\' Cheese Biscuit Stacks, featuring layers of savory ham and melted cheese nestled between flaky, golden biscuits—perfect for a satisfying breakfast.', 8, 'Ham-n-Cheese-Biscuit-Stacks_EXPS_HC17_31947_D10_19_8b-2.jpg'),
(5, 'Fried Prosciutto Tortellini', 'Try our Fried Prosciutto Tortellini, a crispy, mouthwatering appetizer featuring tender tortellini filled with prosciutto and served with a flavorful dipping sauce.', 7, 'Fried-Prosciutto-Tortellini_EXPS_THN16_196633_C06_16_1b-5.jpg'),
(6, 'Marinated Olive & Cheese Ring', 'Experience the bold flavors of our Marinated Olive & Cheese Ring, a savory and tangy appetizer featuring a delightful blend of marinated olives and creamy cheeses, perfect for sharing', 15, 'Marinated-Olive-Cheese-Ring_exps137071_TH133086C07_24_2bC_RMS-3.jpg'),
(7, 'Almond-Bacon Cheese Crostini', 'Savor our Almond-Bacon Cheese Crostini, a mouthwatering starter featuring crispy crostini topped with a rich blend of cheese, crunchy almonds, and savory bacon.', 5, 'Almond-Bacon-Cheese-Crostini_EXPS_BMZ17_35468_D10_25_5b-1.jpg'),
(8, 'Party Shrimp', 'Delight in our Party Shrimp, expertly seasoned and perfectly cooked, offering a burst of flavor in every bite—ideal for any festive occasion or appetizer spread.', 25, 'Party-Shrimp_exps50315_SD132779C06_13_4bC_RMS-7.jpg'),
(9, 'Chicken Cacciatore', 'Enjoy our Chicken Cacciatore, a classic Italian dish featuring tender chicken simmered in a rich, tomato-based sauce with bell peppers, onions, and herbs for a comforting and flavorful meal', 29, '1432817449552.jpeg'),
(10, 'Beef Wellington', 'Indulge in our Beef Wellington, a gourmet masterpiece of tender beef fillet wrapped in a flaky puff pastry with a savory mushroom duxelles and prosciutto, perfect for a special occasion', 30, '1432791286466.jpeg'),
(11, 'Bundt Pan Roast Chicken', 'Experience the mouthwatering flavors of our Bundt Pan Roast Chicken with Potatoes, featuring juicy, herb-seasoned chicken roasted to perfection with tender, golden potatoes for a comforting and delicious meal.', 25, '1494520427242.jpeg'),
(12, 'Killer Kale Pasta', 'Discover our Killer Kale Pasta, a vibrant and nutritious dish featuring perfectly cooked pasta tossed with fresh, sautéed kale, garlic, and a zesty lemon sauce for a healthy yet indulgent meal', 10, '1420497958421.jpeg'),
(13, 'Roast Arctic Char', 'Roast Arctic Char, a delicately seasoned and oven-roasted fish that delivers a succulent, flaky texture and a refined flavor, perfect for a light and elegant dining experience.', 40, '1415896323969.jpeg'),
(14, 'Goat Cheese Enchiladas', '\"Relish our Goat Cheese Enchiladas, a flavorful twist on a classic, featuring creamy goat cheese wrapped in tender tortillas and topped with a zesty enchilada sauce for a unique and satisfying dish.', 16, '1432817447576.jpeg'),
(15, 'The Ultimate Lasagna', 'The Ultimate Lasagna, a hearty and indulgent dish layered with rich meat sauce, creamy béchamel, and melted cheese, delivering an unforgettable taste of classic Italian comfort.', 20, '1432922922961.jpeg'),
(16, 'Moroccan Lamb Tagine', 'the exotic flavors of our Moroccan Lamb Tagine, featuring tender lamb slow-cooked with aromatic spices, dried fruits, and vegetables, served with a fragrant couscous for an unforgettable culinary journey', 50, '1421792364193.jpeg'),
(17, 'Coca-Cola', 'Quench your thirst with an ice-cold Coca-Cola at our restaurant, where every meal is perfectly complemented by the refreshing taste of a classic favorite.', 4, 'coca-cola-02.jpg'),
(18, 'Fanta', 'The vibrant flavors of Fanta at our restaurant, where every dish is paired with this refreshing, sparkling beverage for a delightful dining experience.', 4, 'fanta-vetro.jpg'),
(19, 'Juice', 'The freshest, handcrafted juices at our restaurant, where each vibrant sip perfectly complements our delicious, locally-sourced dishes.', 6, 'Wild-One-Organic-Juice-Orange-webi.jpg'),
(20, 'Fiji Water', 'Unparalleled purity with Fiji Water at our restaurant, where every meal is elevated by this premium, naturally-sourced water.', 7, 'icon-512-512-true-e74e61e484d9cad0f281cecde0e0170e.png'),
(21, 'Tuborg', 'Refreshing Tuborg beer at our restaurant, where its perfect balance of flavor enhances your dining experience with every sip.', 9, 'tuborg.png'),
(22, 'Carlsberg', 'Relish a smooth, flavorful Carlsberg beer at our restaurant, where its exceptional taste perfectly complements our diverse menu and enhances your dining experience.', 9, '0ad3ce6c2a06628e54046daf88bfb5d7.jpg'),
(23, 'Red Wine', 'Indulge in a selection of exquisite red wines at our restaurant, where each glass perfectly complements our gourmet dishes for an elevated dining pleasure.', 15, 'red-wine-glass-N4MqydB-600.jpg'),
(24, 'White Wine', 'Enhance your dining experience with a glass of fine white wine at our restaurant, where its crisp, refreshing notes beautifully pair with our expertly crafted dishes.', 15, 'pngtree-glass-of-white-wine-png-image_9202249.png');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `id` int(100) NOT NULL,
  `total_count` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `second_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `psw` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `time_of_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `korisnicko_ime` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
