-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 07:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0
USE ecommerce ;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` longtext NOT NULL,
  `price` double(8,2) DEFAULT NULL,
  `percentage` double(8,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `tax` double(8,2) DEFAULT NULL,
  `new` tinyint(4) DEFAULT NULL,
  `trending` tinyint(4) DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_keywords` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `cate_id`, `name`, `slug`, `small_description`, `description`, `price`, `percentage`, `image`, `qty`, `tax`, `new`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(3, 2, 'Z690 AERO G', 'Z690-AERO-G-rev-1x', 'Integrated Graphics Processor-Intel® HD Graphics support:\r\n1 x USB Type-C® port, supporting USB Type-C® and DisplayPort video outputs and a maximum resolution of 4096x2304@60 Hz\r\n* Support for drawing tablets and 20V@3A of power delivery.\r\n* Support for DisplayPort 1.2 version and HDCP 2.3\r\n1 x HDMI port, supporting a maximum resolution of 4096x2160@30 Hz\r\n* Support for HDMI 1.4 version and HDCP 2.3.\r\n(Graphics specifications may vary depending on CPU or graphics card support.)', 'Integrated Graphics Processor-Intel® HD Graphics support:\r\n1 x USB Type-C® port, supporting USB Type-C® and DisplayPort video outputs and a maximum resolution of 4096x2304@60 Hz\r\n* Support for drawing tablets and 20V@3A of power delivery.\r\n* Support for DisplayPort 1.2 version and HDCP 2.3\r\n1 x HDMI port, supporting a maximum resolution of 4096x2160@30 Hz\r\n* Support for HDMI 1.4 version and HDCP 2.3.\r\n(Graphics specifications may vary depending on CPU or graphics card support.)', 15000.00, 5.00, '1650292718.webp', 20, 100.00, 0, 1, 'Z690', 'Z690', 'Z690', '2022-04-18 13:38:38', '2022-04-18 13:38:38'),
(4, 2, 'X570S GAMING X', 'X570S-GAMING-X-rev-10', 'AMD® X570S GAMING Motherboard with Twin 12+2 Phases Digital VRM Solution with 50A DrMOS, Fully Covered Thermal Design, Triple Ultra-Fast NVMe PCIe 4.0/3.0 x4 M.2 with Thermal Guard, Fast 2.5GbE LAN, 2*USB 3.2 Type-C®, Rear & Front USB 3.2 Type-C®, RGB FUSION 2.0, Q-Flash Plus', 'AMD® X570S GAMING Motherboard with Twin 12+2 Phases Digital VRM Solution with 50A DrMOS, Fully Covered Thermal Design, Triple Ultra-Fast NVMe PCIe 4.0/3.0 x4 M.2 with Thermal Guard, Fast 2.5GbE LAN, 2*USB 3.2 Type-C®, Rear & Front USB 3.2 Type-C®, RGB FUSION 2.0, Q-Flash Plus', 20000.00, 7.00, '1650292788.png', 100, 100.00, 0, 1, 'X570S', 'X570S', 'X570S', '2022-04-18 13:39:48', '2022-04-18 13:39:48'),
(5, 2, 'Z690 AORUS MASTER', 'Z690-AORUS-MASTER-rev-1', '1 x PCI Express x16 slot, running at x16 (PCIEX16)\r\n* For optimum performance, if only one PCI Express graphics card is to be installed, be sure to install it in the PCIEX16 slot.\r\n(The PCIEX16 slot conforms to PCI Express 5.0 standard.)\r\n2 x PCI Express x16 slots, running at x4 (PCIEX4_1, PCIEX4_2)\r\n* The PCIEX4_1 slot shares bandwidth with the M2C_SB connector. The PCIEX4_1 slot becomes unavailable when a device is installed in the M2C_SB connector.\r\n(The PCIEX4 slots conform to PCI Express 3.0 standard.)', '1 x PCI Express x16 slot, running at x16 (PCIEX16)\r\n* For optimum performance, if only one PCI Express graphics card is to be installed, be sure to install it in the PCIEX16 slot.\r\n(The PCIEX16 slot conforms to PCI Express 5.0 standard.)\r\n2 x PCI Express x16 slots, running at x4 (PCIEX4_1, PCIEX4_2)\r\n* The PCIEX4_1 slot shares bandwidth with the M2C_SB connector. The PCIEX4_1 slot becomes unavailable when a device is installed in the M2C_SB connector.\r\n(The PCIEX4 slots conform to PCI Express 3.0 standard.)', 18000.00, 6.00, '1650292888.webp', 102, 100.00, 0, 0, 'Z690', 'Z690', 'Z690', '2022-04-18 13:41:28', '2022-04-18 13:41:28'),
(6, 2, 'Z690 AORUS XTREME', 'Z690-AORUS-XTREME-rev-10', '1 x PCI Express x16 slot, running at x16 (PCIEX16)\r\n* For optimum performance, if only one PCI Express graphics card is to be installed, be sure to install it in the PCIEX16 slot.\r\n1 x PCI Express x16 slot, running at x8 (PCIEX8)\r\n* The PCIEX8 slot shares bandwidth with the PCIEX16 slot. When the PCIEX8 slot is populated, the PCIEX16 slot operates at up to x8 mode.\r\n(The PCIEX16 and PCIEX8 slots conform to PCI Express 5.0 standard.)\r\n1 x PCI Express x16 slot, running at x4 (PCIEX4_1)\r\n(The PCIEX4_1 slot conforms to PCI Express 3.0 standard.)', '1 x PCI Express x16 slot, running at x16 (PCIEX16)\r\n* For optimum performance, if only one PCI Express graphics card is to be installed, be sure to install it in the PCIEX16 slot.\r\n1 x PCI Express x16 slot, running at x8 (PCIEX8)\r\n* The PCIEX8 slot shares bandwidth with the PCIEX16 slot. When the PCIEX8 slot is populated, the PCIEX16 slot operates at up to x8 mode.\r\n(The PCIEX16 and PCIEX8 slots conform to PCI Express 5.0 standard.)\r\n1 x PCI Express x16 slot, running at x4 (PCIEX4_1)\r\n(The PCIEX4_1 slot conforms to PCI Express 3.0 standard.)', 23000.00, 8.00, '1650292946.webp', 30, 100.00, 0, 1, 'Z690', 'Z690', 'Z690', '2022-04-18 13:42:26', '2022-04-18 13:42:26'),
(7, 5, 'XM300', 'XM300', '6400 DPI Optical Sensor\r\n16.7M Customizable Lighting\r\n20-million-Click Omron Switch\r\nXtreme Ergonomic Design\r\nOn-the-fly DPI Adjustable\r\nTeflon Mouse Feet\r\nXtreme Macro Engine', '6400 DPI Optical Sensor\r\n16.7M Customizable Lighting\r\n20-million-Click Omron Switch\r\nXtreme Ergonomic Design\r\nOn-the-fly DPI Adjustable\r\nTeflon Mouse Feet\r\nXtreme Macro Engine', 10000.00, 3.00, '1650293014.png', 120, 50.00, 1, 1, 'XM300', 'XM300', 'XM300', '2022-04-18 13:43:34', '2022-04-18 13:43:34'),
(8, 5, 'AORUS M4', 'AORUS-M4', 'Ambidextrous design\r\nReal 6400 DPI optical engine with 50dpi increment\r\n50-million-click Omron switch\r\nRGB Fusion 2.0 - synchronize with other AORUS devices\r\nFully programmable buttons and saved onboard\r\nOn-the-fly DPI adjustment', 'Ambidextrous design\r\nReal 6400 DPI optical engine with 50dpi increment\r\n50-million-click Omron switch\r\nRGB Fusion 2.0 - synchronize with other AORUS devices\r\nFully programmable buttons and saved onboard\r\nOn-the-fly DPI adjustment', 12000.00, 4.00, '1650293087.png', 50, 50.00, 1, 0, 'M4', 'M4', 'M4', '2022-04-18 13:44:47', '2022-04-18 13:44:47'),
(9, 4, 'AORUS K9 Optical', 'AORUS-K9-Optical', '0.03ms Debounce Time - When Speed Matters\r\nUltra Durable - 100 Million Keystrokes\r\nSplash proof\r\nSwappable Switches - Custom Gaming Experience\r\nChatterproof\r\nExclusive Top-quality Steel Springs\r\nFull RGB Backlighting\r\nAORUS Engine - You\'re In Control\r\nN-Key Rollover\r\nFloating Key Design\r\nBraided Cable\r\nCable Management', '0.03ms Debounce Time - When Speed Matters\r\nUltra Durable - 100 Million Keystrokes\r\nSplash proof\r\nSwappable Switches - Custom Gaming Experience\r\nChatterproof\r\nExclusive Top-quality Steel Springs\r\nFull RGB Backlighting\r\nAORUS Engine - You\'re In Control\r\nN-Key Rollover\r\nFloating Key Design\r\nBraided Cable\r\nCable Management', 5000.00, 1.00, '1650293492.png', 100, 10.00, 1, 0, 'K9', 'K9', 'K9', '2022-04-18 13:51:32', '2022-04-18 13:51:32'),
(10, 4, 'FORCE K7 Wireless', 'FORCE-K7-Wireless', '2.4GHz Wireless Technology\r\nScissor-key Structure\r\nSelective anti-ghosting around WASD cluster\r\nDynamic volume and zoom in/out control', '2.4GHz Wireless Technology\r\nScissor-key Structure\r\nSelective anti-ghosting around WASD cluster\r\nDynamic volume and zoom in/out control', 2000.00, 1.00, '1650293741.png', 100, 10.00, 1, 0, 'K7', 'K7', 'K7', '2022-04-18 13:55:41', '2022-04-18 13:55:41'),
(11, 3, 'AORUS FO48U Gaming Monitor', 'AORUS-FO48U', 'Panel Size (diagonal)\r\n47.53\" OLED\r\nDisplay Viewing Area (HxV)\r\n1052.16 x 591.84 (mm)\r\nPanel Backlight/ Type\r\nOLED\r\nDisplay Surface(non-glare/ glare)\r\nAnti-Reflection\r\nColor Saturation\r\n98% DCI-P3 / 130% sRGB\r\nTrue Resolution\r\n3840 x 2160 (UHD)', 'Panel Size (diagonal)\r\n47.53\" OLED\r\nDisplay Viewing Area (HxV)\r\n1052.16 x 591.84 (mm)\r\nPanel Backlight/ Type\r\nOLED\r\nDisplay Surface(non-glare/ glare)\r\nAnti-Reflection\r\nColor Saturation\r\n98% DCI-P3 / 130% sRGB\r\nTrue Resolution\r\n3840 x 2160 (UHD)', 50000.00, 15.00, '1650293988.webp', 130, 100.00, 1, 1, 'FO48U', 'FO48U', 'FO48U', '2022-04-18 13:59:48', '2022-04-18 13:59:48'),
(12, 3, 'AORUS FI32U Gaming Monitor', 'AORUS_FI32U', 'Panel Size (diagonal)\r\n31.5” SS IPS\r\nDisplay Viewing Area (HxV)\r\n697.3056 x 392.2344 (mm)\r\nPanel Backlight/ Type\r\nEdge type\r\nDisplay Surface(non-glare/ glare)\r\nNon-glare\r\nColor Saturation\r\n90% DCI-P3/ 123% sRGB\r\nTrue Resolution\r\n3840 x 2160 (UHD)', 'Panel Size (diagonal)\r\n31.5” SS IPS\r\nDisplay Viewing Area (HxV)\r\n697.3056 x 392.2344 (mm)\r\nPanel Backlight/ Type\r\nEdge type\r\nDisplay Surface(non-glare/ glare)\r\nNon-glare\r\nColor Saturation\r\n90% DCI-P3/ 123% sRGB\r\nTrue Resolution\r\n3840 x 2160 (UHD)', 60000.00, 15.00, '1650294088.webp', 20, 150.00, 1, 1, 'FI32U', 'FI32U', 'FI32U', '2022-04-18 14:01:28', '2022-04-18 14:01:28'),
(13, 1, 'AORUS GeForce RTX™ 3090 Ti XTREME WATERFORCE 24G', 'GV-N309TAORUSX-W-24GD', 'Graphics Processing\r\nGeForce RTX™ 3090 Ti\r\nCore Clock\r\n1935 MHz (Reference Card: 1860 MHz)\r\nCUDA® Cores\r\n10752\r\nMemory Clock\r\n21000 MHz\r\nMemory Size\r\n24 GB\r\nMemory Type\r\nGDDR6X', 'Graphics Processing\r\nGeForce RTX™ 3090 Ti\r\nCore Clock\r\n1935 MHz (Reference Card: 1860 MHz)\r\nCUDA® Cores\r\n10752\r\nMemory Clock\r\n21000 MHz\r\nMemory Size\r\n24 GB\r\nMemory Type\r\nGDDR6X', 300000.00, 25.00, '1650294262.webp', 100, 1000.00, 1, 1, 'rtx 3090 ti', 'rtx 3090 ti', 'rtx 3090 ti', '2022-04-18 14:04:22', '2022-04-18 14:04:22'),
(14, 1, 'AORUS GeForce RTX™ 3090 XTREME WATERFORCE 24G', 'GV-N3090AORUSX-W-24GD', 'Graphics Processing\r\nGeForce RTX™ 3090\r\nCore Clock\r\n1785 MHz (Reference Card: 1695 MHz)\r\nCUDA® Cores\r\n10496\r\nMemory Clock\r\n19500 MHz\r\nMemory Size\r\n24 GB\r\nMemory Type\r\nGDDR6X', 'Graphics Processing\r\nGeForce RTX™ 3090\r\nCore Clock\r\n1785 MHz (Reference Card: 1695 MHz)\r\nCUDA® Cores\r\n10496\r\nMemory Clock\r\n19500 MHz\r\nMemory Size\r\n24 GB\r\nMemory Type\r\nGDDR6X', 270000.00, 23.00, '1650294360.png', 100, 1000.00, 0, 1, 'rtx 3090', 'rtx 3090', 'rtx 3090', '2022-04-18 14:06:00', '2022-04-18 14:06:00'),
(15, 1, 'AORUS GeForce RTX™ 3080 Ti XTREME WATERFORCE 12G', 'GV-N308TAORUSX-W-12GD', 'Graphics Processing\r\nGeForce RTX™ 3080 Ti\r\nCore Clock\r\n1770 MHz (Reference Card: 1665 MHz)\r\nCUDA® Cores\r\n10240\r\nMemory Clock\r\n19000 MHz\r\nMemory Size\r\n12 GB\r\nMemory Type\r\nGDDR6X', 'Graphics Processing\r\nGeForce RTX™ 3080 Ti\r\nCore Clock\r\n1770 MHz (Reference Card: 1665 MHz)\r\nCUDA® Cores\r\n10240\r\nMemory Clock\r\n19000 MHz\r\nMemory Size\r\n12 GB\r\nMemory Type\r\nGDDR6X', 250000.00, 22.00, '1650294576.png', 100, 1000.00, 0, 1, 'rtx 3080 ti', 'rtx 3080 ti', 'rtx 3080 ti', '2022-04-18 14:09:36', '2022-04-18 14:09:36'),
(16, 1, 'AORUS GeForce RTX™ 3080 XTREME WATERFORCE 12G', 'GV-N3080AORUSX-W-12GD', 'Graphics Processing\r\nGeForce RTX™ 3080\r\nCore Clock\r\n1830 MHz (Reference Card: 1710 MHz)\r\nCUDA® Cores\r\n8960\r\nMemory Clock\r\n19000 MHz\r\nMemory Size\r\n12 GB\r\nMemory Type\r\nGDDR6X', 'Graphics Processing\r\nGeForce RTX™ 3080\r\nCore Clock\r\n1830 MHz (Reference Card: 1710 MHz)\r\nCUDA® Cores\r\n8960\r\nMemory Clock\r\n19000 MHz\r\nMemory Size\r\n12 GB\r\nMemory Type\r\nGDDR6X', 230000.00, 21.00, '1650294662.webp', 100, 1000.00, 0, 1, 'rtx 3080', 'rtx 3080', 'rtx 3080', '2022-04-18 14:11:02', '2022-04-18 14:11:02'),
(17, 1, 'AORUS GeForce RTX™ 3070 MASTER 8G (rev. 2.0)', 'GV-N3070AORUS-M-8GD-rev-20', 'Graphics Processing\r\nGeForce RTX™ 3070\r\nCore Clock\r\n1845 MHz (Reference Card: 1725 MHz)\r\nCUDA® Cores\r\n5888\r\nMemory Clock\r\n14000 MHz\r\nMemory Size\r\n8 GB\r\nMemory Type\r\nGDDR6', 'Graphics Processing\r\nGeForce RTX™ 3070\r\nCore Clock\r\n1845 MHz (Reference Card: 1725 MHz)\r\nCUDA® Cores\r\n5888\r\nMemory Clock\r\n14000 MHz\r\nMemory Size\r\n8 GB\r\nMemory Type\r\nGDDR6', 200000.00, 20.00, '1650294830.png', 120, 1000.00, 0, 1, 'rtx 3070', 'rtx 3070', 'rtx 3070', '2022-04-18 14:13:50', '2022-04-18 14:13:50'),
(18, 1, 'AORUS GeForce RTX™ 3060 Ti ELITE 8G (rev. 1.0)', 'GV-N306TAORUS-E-8GD-rev-10', 'Graphics Processing\r\nGeForce RTX™ 3060 Ti\r\nCore Clock\r\n1785 MHz (Reference Card: 1665 MHz)\r\nCUDA® Cores\r\n4864\r\nMemory Clock\r\n14000 MHz\r\nMemory Size\r\n8 GB\r\nMemory Type\r\nGDDR6', 'Graphics Processing\r\nGeForce RTX™ 3060 Ti\r\nCore Clock\r\n1785 MHz (Reference Card: 1665 MHz)\r\nCUDA® Cores\r\n4864\r\nMemory Clock\r\n14000 MHz\r\nMemory Size\r\n8 GB\r\nMemory Type\r\nGDDR6', 19000.00, 19.00, '1650294978.png', 98, 1000.00, 0, 1, 'rtx 3060 ti', 'rtx 3060 ti', 'rtx 3060 ti', '2022-04-18 14:16:18', '2022-04-18 14:16:18'),
(19, 1, 'AORUS GeForce RTX™ 3070 Ti MASTER 8G', 'GV-N307TAORUS-M-8GD', 'Graphics Processing\r\nGeForce RTX™ 3070 Ti\r\nCore Clock\r\n1875 MHz (Reference Card: 1770 MHz)\r\nCUDA® Cores\r\n6144\r\nMemory Clock\r\n19000 MHz\r\nMemory Size\r\n8 GB\r\nMemory Type\r\nGDDR6X', 'Graphics Processing\r\nGeForce RTX™ 3070 Ti\r\nCore Clock\r\n1875 MHz (Reference Card: 1770 MHz)\r\nCUDA® Cores\r\n6144\r\nMemory Clock\r\n19000 MHz\r\nMemory Size\r\n8 GB\r\nMemory Type\r\nGDDR6X', 220000.00, 22.00, '1650295049.png', 50, 1000.00, 1, 0, 'rtx 3070 ti', 'rtx 3070 ti', 'rtx 3070 ti', '2022-04-18 14:17:29', '2022-04-18 14:17:29'),
(20, 1, 'AORUS GeForce RTX™ 3060 ELITE 12G (rev. 2.0) rev. 1.0', 'GV-N3060AORUS-E-12GD-rev-20', 'Graphics Processing\r\nGeForce RTX™ 3060\r\nCore Clock\r\n1867 MHz (Reference Card: 1777 MHz)\r\nCUDA® Cores\r\n3584\r\nMemory Clock\r\n15000 MHz\r\nMemory Size\r\n12 GB\r\nMemory Type\r\nGDDR6', 'Graphics Processing\r\nGeForce RTX™ 3060\r\nCore Clock\r\n1867 MHz (Reference Card: 1777 MHz)\r\nCUDA® Cores\r\n3584\r\nMemory Clock\r\n15000 MHz\r\nMemory Size\r\n12 GB\r\nMemory Type\r\nGDDR6', 17000.00, 17.00, '1650295178.png', 30, 1000.00, 1, 0, 'rtx 3060', 'rtx 3060', 'rtx 3060', '2022-04-18 14:19:38', '2022-04-18 14:19:38'),
(21, 1, 'AORUS GeForce RTX™ 3050 ELITE 8G', 'GV-N3050AORUS-E-8GD', 'Graphics Processing\r\nGeForce RTX™ 3050\r\nCore Clock\r\n1860 MHz (Reference Card: 1777 MHz)\r\nCUDA® Cores\r\n2560\r\nMemory Clock\r\n14000 MHz\r\nMemory Size\r\n8 GB\r\nMemory Type\r\nGDDR6', 'Graphics Processing\r\nGeForce RTX™ 3050\r\nCore Clock\r\n1860 MHz (Reference Card: 1777 MHz)\r\nCUDA® Cores\r\n2560\r\nMemory Clock\r\n14000 MHz\r\nMemory Size\r\n8 GB\r\nMemory Type\r\nGDDR6', 150000.00, 15.00, '1650295308.webp', 100, 1000.00, 0, 0, 'rtx 3050', 'rtx 3050', 'rtx 3050', '2022-04-18 14:21:48', '2022-04-18 14:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `receveur_id` int(11) NOT NULL DEFAULT 0,
  `prod_id` varchar(255) NOT NULL,
  `prod_qty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `descreption` longtext NOT NULL,
  `new` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_descrip` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `descreption`, `new`, `popular`, `image`, `meta_title`, `meta_descrip`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Graphic Cards', 'graphic-cards', 'A part of the computer.', 0, 1, '1648992285.png', 'graphic cards', 'graphic cards', 'graphic cards', '2022-04-03 12:24:45', '2022-04-03 12:42:44'),
(2, 'Motherboards', 'motherboards', 'A part of the camputer', 0, 1, '1648996873.webp', 'motherboards', 'motherboards', 'motherboards', '2022-04-03 13:41:13', '2022-04-03 13:41:13'),
(3, 'Monitors', 'monitors', 'Monitor screen for camputers', 0, 1, '1648999763.webp', 'Monitors', 'Monitors', 'Monitors', '2022-04-03 14:29:23', '2022-04-03 14:29:23'),
(4, 'Keyboards', 'keyboards', 'a part of the camputer', 0, 1, '1649000204.png', 'keyboards', 'keyboards', 'keyboards', '2022-04-03 14:36:44', '2022-04-03 14:36:44'),
(5, 'Mouses', 'mouses', 'a part of the camputer', 0, 1, '1649000556.png', 'mouses', 'mouses', 'mouses', '2022-04-03 14:42:36', '2022-04-17 22:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2022_03_11_223017_create_categories_table', 1),
(14, '2022_03_16_125359_create_carts_table', 1),
(16, '2022_03_30_172928_create_payments_table', 1),
(23, '2022_03_12_213054_create_articles_table', 3),
(25, '2022_03_31_132500_create_orders_table', 5),
(27, '2022_04_16_131508_create_order_items_table', 6),
(29, '2022_04_15_173804_create_points_table', 7),
(33, '2022_04_18_000323_create_receveur_management_table', 8),
(36, '2022_04_18_012132_create_slide_images_table', 9),
(37, '2022_04_17_233536_create_paginate_options_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tracknumber` int(11) NOT NULL,
  `total_price` double(8,2) NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `prod_price` double(8,2) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paginate_options`
--

CREATE TABLE `paginate_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_n_articles` int(11) NOT NULL,
  `view_category_n_articles` int(11) NOT NULL,
  `n_category` int(11) NOT NULL,
  `n_articles_admin` int(11) NOT NULL,
  `n_category_admin` int(11) NOT NULL,
  `n_member_admin` int(11) NOT NULL,
  `n_receveur_admin` int(11) NOT NULL,
  `n_orders_admin` int(11) NOT NULL,
  `n_payments_admin` int(11) NOT NULL,
  `logo_image` varchar(255) DEFAULT NULL,
  `head_logo_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paginate_options`
--

INSERT INTO `paginate_options` (`id`, `home_n_articles`, `view_category_n_articles`, `n_category`, `n_articles_admin`, `n_category_admin`, `n_member_admin`, `n_receveur_admin`, `n_orders_admin`, `n_payments_admin`, `logo_image`, `head_logo_image`, `created_at`, `updated_at`) VALUES
(1, 12, 12, 12, 12, 12, 12, 12, 12, 12, '1650293214.png', '1650292915.jpg', NULL, '2022-04-18 13:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hachem@gmail.com', '$2y$10$uNLjlVQpQNDVkVJgxyBDX.qBY6uvwMePQZQ9Je0qGwtu1ZCn38QYm', '2022-04-11 20:31:44'),
('houssem@gmail.com', '$2y$10$UaGIetQ9T.5Qep5eo63g4.3rSnesS2DjlfktJ/Dp0DgKBBsJ029Fa', '2022-04-18 14:05:01'),
('houssemoodahel@gmail.com', '$2y$10$dmmWZns4wlSpuyGkXXPYcOc0.FANpI0oetFRvQqPl7mIXg90pdpRK', '2022-04-18 14:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `cnumber` varchar(255) DEFAULT NULL,
  `mm` varchar(255) DEFAULT NULL,
  `yy` varchar(255) DEFAULT NULL,
  `cvv` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `cname`, `cnumber`, `mm`, `yy`, `cvv`, `created_at`, `updated_at`) VALUES
(27, 3, 'jgssf', '1234567891234567', '11', '11', '111', '2022-04-15 17:05:30', '2022-04-15 17:05:30'),
(28, 3, 'ghfsdhfhs', '1234567891234567', '11', '11', '111', '2022-04-15 17:05:55', '2022-04-15 17:05:55'),
(29, 3, 'jhrhjgf', '1234567891234567', '11', '11', '111', '2022-04-15 17:12:46', '2022-04-15 17:12:46'),
(30, 7, 'khyfkfgh', '1234567891234567', '11', '11', '111', '2022-04-15 17:41:21', '2022-04-15 17:41:21'),
(31, 3, 'gjjfg', '1234567891234567', '11', '11', '111', '2022-04-15 17:42:37', '2022-04-15 17:42:37'),
(32, 2, 'fhhsdhhf', '1234567891234567', '11', '11', '111', '2022-04-16 12:26:35', '2022-04-16 12:26:35'),
(33, 2, 'fhhsdhhf', '1234567891234567', '11', '11', '111', '2022-04-16 12:28:07', '2022-04-16 12:28:07'),
(34, 2, 'dsgsgdsgs', '1234567891234567', '11', '11', '111', '2022-04-16 12:31:53', '2022-04-16 12:31:53'),
(35, 2, 'dsgsgdsgs', '1234567891234567', '11', '11', '111', '2022-04-16 12:33:22', '2022-04-16 12:33:22'),
(36, 2, 'dsgsgdsgs', '1234567891234567', '11', '11', '111', '2022-04-16 12:33:28', '2022-04-16 12:33:28'),
(37, 2, 'dsgsgdsgs', '1234567891234567', '11', '11', '111', '2022-04-16 12:37:12', '2022-04-16 12:37:12'),
(38, 2, 'fhhshshs', '1234567891234567', '11', '11', '111', '2022-04-16 12:40:57', '2022-04-16 12:40:57'),
(39, 2, 'hjdjhgjg', '1234567891234567', '11', '11', '111', '2022-04-16 12:49:34', '2022-04-16 12:49:34'),
(40, 2, 'ryzehjfsxd', '1234567891234567', '11', '11', '111', '2022-04-16 12:51:04', '2022-04-16 12:51:04'),
(41, 2, 'ryzehjfsxd', '1234567891234567', '11', '11', '111', '2022-04-16 12:52:04', '2022-04-16 12:52:04'),
(42, 2, 'ryzehjfsxd', '1234567891234567', '11', '11', '111', '2022-04-16 12:52:31', '2022-04-16 12:52:31'),
(43, 2, 'bdqhbshbs', '1234567891234567', '11', '11', '111', '2022-04-16 13:02:29', '2022-04-16 13:02:29'),
(44, 2, 'hsyfhrsh', '1234567891234567', '11', '11', '111', '2022-04-16 13:03:25', '2022-04-16 13:03:25'),
(45, 2, 'yrsedhfyh', '1234567891234567', '11', '11', '111', '2022-04-17 11:31:30', '2022-04-17 11:31:30'),
(46, 2, 'rghdfsdhs', '1234567891234567', '11', '11', '111', '2022-04-17 21:52:02', '2022-04-17 21:52:02'),
(47, 2, 'fhsdhshfs', '1234567891234567', '11', '11', '111', '2022-04-17 23:54:07', '2022-04-17 23:54:07'),
(48, 2, 'gdahg', '1234567891234567', '11', '11', '111', '2022-04-18 02:36:15', '2022-04-18 02:36:15'),
(49, 2, 'ngf', '1234567891234567', '11', '11', '111', '2022-04-18 16:16:43', '2022-04-18 16:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `paypal_email` varchar(255) DEFAULT NULL,
  `points_count` double(8,2) NOT NULL DEFAULT 0.00,
  `widthraw` double(8,2) NOT NULL DEFAULT 0.00,
  `total_widthraw` double(8,2) NOT NULL DEFAULT 0.00,
  `state` tinyint(4) NOT NULL DEFAULT 0,
  `p` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `user_id`, `paypal_email`, `points_count`, `widthraw`, `total_widthraw`, `state`, `p`, `created_at`, `updated_at`) VALUES
(1, 2, 'houssem@gmail.com', 1401.06, 100.00, 100.00, 1, 0, '2022-04-17 21:19:56', '2022-04-17 23:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `receveur_management`
--

CREATE TABLE `receveur_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `time` int(11) NOT NULL,
  `points_on_visite` double(8,2) NOT NULL,
  `minimum_amount` double(8,2) NOT NULL,
  `points_to_dinar` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receveur_management`
--

INSERT INTO `receveur_management` (`id`, `time`, `points_on_visite`, `minimum_amount`, `points_to_dinar`, `created_at`, `updated_at`) VALUES
(1, 10, 1.00, 50.00, 2.00, NULL, '2022-04-18 15:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `slide_images`
--

CREATE TABLE `slide_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `descreption` varchar(255) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_images`
--

INSERT INTO `slide_images` (`id`, `image`, `title`, `descreption`, `position`, `created_at`, `updated_at`) VALUES
(6, '1650250262.gif', NULL, NULL, '2', '2022-04-18 01:51:02', '2022-04-18 02:20:28'),
(7, '1650250277.gif', NULL, NULL, '3', '2022-04-18 01:51:17', '2022-04-18 01:51:17'),
(11, '1650252037.gif', NULL, NULL, '1', '2022-04-18 02:20:37', '2022-04-18 02:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `state` tinyint(4) NOT NULL DEFAULT 0,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `states` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `role_as`, `state`, `fname`, `lname`, `address`, `city`, `states`, `zip`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'houssem', 'houssem@gmail.com', NULL, '$2y$10$nENB1R7JHSwP1rBTNQyJYu18pQEXFaVc/OQg6FOQvz4E8gSuXHT0G', 2, 1, 'houssem', 'hachem', 'setif', 'setif', 'setif', '19000', NULL, '2022-04-03 12:10:58', '2022-04-18 14:13:41'),
(2, 'hachem', 'hachem@gmail.com', NULL, '$2y$10$8ZvHXK0kGZ7RCSDAujh5uezmRL1x0cih1NDLhMtnrihQZ1bHbMIdy', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-03 12:07:32', '2022-04-18 14:10:14'),
(3, 'apex', 'apex@gmail.com', NULL, '$2y$10$Ck4ws0VVZFApmuvIQmB.R.q/HPpaB1IVHRf9LZ5qCnVL0jWV093vO', 0, 0, 'apex', 'mahrez', 'setif', 'setif', 'setif', '19000', NULL, '2022-04-03 12:12:29', '2022-04-18 15:40:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paginate_options`
--
ALTER TABLE `paginate_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receveur_management`
--
ALTER TABLE `receveur_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_images`
--
ALTER TABLE `slide_images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slide_images_position_unique` (`position`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `paginate_options`
--
ALTER TABLE `paginate_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `receveur_management`
--
ALTER TABLE `receveur_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide_images`
--
ALTER TABLE `slide_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
