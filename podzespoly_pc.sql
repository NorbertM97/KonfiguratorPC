-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Mar 2020, 19:08
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `podzespoly_pc`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `compabilities`
--

CREATE TABLE `compabilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `compabilities`
--

INSERT INTO `compabilities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ATX', NULL, NULL),
(2, 'microATX', NULL, NULL),
(3, 'miniITX', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `covers`
--

CREATE TABLE `covers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zdj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `producent_id` bigint(20) UNSIGNED NOT NULL,
  `compability_id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `GPU_size` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `covers`
--

INSERT INTO `covers` (`id`, `name`, `zdj`, `type_of_item`, `producent_id`, `compability_id`, `type`, `GPU_size`, `created_at`, `updated_at`) VALUES
(1, 'Signum SG1M', '../images/Obudowy/Silentium1.png', 'cover', 6, 1, 'Middle Tower', 330, NULL, NULL),
(2, 'Signum SG1X TG', '../images/Obudowy/Silentium2.png', 'cover', 6, 1, 'Middle Tower', 325, NULL, NULL),
(3, 'Armis AR5X TG', '../images/Obudowy/Silentium3.png', 'cover', 6, 1, 'Middle Tower', 330, NULL, NULL),
(4, 'Armis AR7 TG', '../images/Obudowy/Silentium4.png', 'cover', 6, 1, 'Middle Tower', 420, NULL, NULL),
(5, 'MAG Forge 100M', '../images/Obudowy/MSI1.png', 'cover', 3, 1, 'Middle Tower', 350, NULL, NULL),
(6, 'MAG Vampiric 010M', '../images/Obudowy/MSI2.png', 'cover', 3, 1, 'Middle Tower', 350, NULL, NULL),
(7, 'Mag Vampiric 010', '../images/Obudowy/MSI3.png', 'cover', 3, 1, 'Middle Tower', 325, NULL, NULL),
(8, 'MAG Forge 101M', '../images/Obudowy/MSI4.png', 'cover', 3, 1, 'Middle Tower', 325, NULL, NULL),
(9, 'MPG SEKIRA 500G', '../images/Obudowy/MSI5.png', 'cover', 3, 1, 'Middle Tower', 400, NULL, NULL),
(10, 'MPG Sekira 500P', '../images/Obudowy/MSI6.png', 'cover', 3, 1, 'Middle Tower', 400, NULL, NULL),
(11, 'MPG SEKIRA 500X', '../images/Obudowy/MSI7.png', 'cover', 3, 1, 'Middle Tower', 400, NULL, NULL),
(12, 'MPG Gungnir 100P', '../images/Obudowy/MSI8.png', 'cover', 3, 1, 'Middle Tower', 400, NULL, NULL),
(13, 'Carbide Series 100R', '../images/Obudowy/Corsair1.png', 'cover', 4, 1, 'Middle Tower', 420, NULL, NULL),
(14, 'Obsidian 1000D', '../images/Obudowy/Corsair2.png', 'cover', 4, 1, 'Full Tower', 420, NULL, NULL),
(15, 'Crystal Series 280X', '../images/Obudowy/Corsair3.png', 'cover', 4, 3, 'Mini Tower', 240, NULL, NULL),
(16, 'Obsidian Series 350D', '../images/Obudowy/corsair4.png', 'cover', 4, 2, 'Micro Tower', 280, NULL, NULL),
(17, 'Crystal Series 280X WH', '../images/Obudowy/corsair5.png', 'cover', 4, 3, 'Mini Tower', 220, NULL, NULL),
(18, 'Crystal Series 280X BL', '../images/Obudowy/corsair6.png', 'cover', 4, 3, 'Mini Tower', 370, NULL, NULL),
(19, 'CARBIDE SERIES SPEC', '../images/Obudowy/Corsair7.png', 'cover', 4, 1, 'Mini Tower', 370, NULL, NULL),
(20, 'Obsidian Series 500D', '../images/Obudowy/Corsair8.png', 'cover', 4, 1, 'Mini Tower', 370, NULL, NULL),
(21, 'Crystal Series 680X', '../images/Obudowy/Corsair9.png', 'cover', 4, 2, 'Mini Tower', 280, NULL, NULL),
(22, 'Crystal Series 280X R', '../images/Obudowy/Corsair10.png', 'cover', 4, 2, 'Mini Tower', 220, NULL, NULL),
(23, 'ELITE 344B', '../images/Obudowy/CM1.png', 'cover', 15, 2, 'Mini Tower', 220, NULL, NULL),
(24, 'ELITE 110A czarna', '../images/Obudowy/CM2.png', 'cover', 15, 3, 'Mini Tower', 240, NULL, NULL),
(25, 'ELITE 110', '../images/Obudowy/CM3.png', 'cover', 15, 3, 'Mini Tower', 220, NULL, NULL),
(26, 'MasterCase MC600P', '../images/Obudowy/CM4.png', 'cover', 15, 1, 'Middle Tower', 280, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cpus`
--

CREATE TABLE `cpus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zdj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `producent_id` bigint(20) UNSIGNED NOT NULL,
  `socket_id` bigint(20) UNSIGNED NOT NULL,
  `series` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cores` int(11) NOT NULL,
  `core_timing` int(11) NOT NULL,
  `threats` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `cpus`
--

INSERT INTO `cpus` (`id`, `name`, `zdj`, `type_of_item`, `producent_id`, `socket_id`, `series`, `cores`, `core_timing`, `threats`, `power`, `created_at`, `updated_at`) VALUES
(1, 'Intel Core i9-9900K', '../images/CPU/intel4.png', 'cpu', 1, 1, 'i9', 8, 3600, 16, 128, NULL, NULL),
(2, 'Intel Core i9-9900', '../images/CPU/intel7.png', 'cpu', 1, 1, 'i9', 8, 3100, 16, 108, NULL, NULL),
(3, 'Intel Core i7-9700K', '../images/CPU/intel1.png', 'cpu', 1, 1, 'i7', 8, 3600, 8, 158, NULL, NULL),
(4, 'Intel Core i7-9700F', '../images/CPU/intel1.png', 'cpu', 1, 1, 'i7', 8, 3000, 8, 128, NULL, NULL),
(5, 'Intel Core i7-9700', '../images/CPU/intel1.png', 'cpu', 1, 1, 'i7', 8, 3000, 8, 118, NULL, NULL),
(6, 'Intel Core i7-8700K', '../images/CPU/intel6.png', 'cpu', 1, 1, 'i7', 6, 3600, 12, 128, NULL, NULL),
(7, 'Intel Core i7-8700', '../images/CPU/intel12.png', 'cpu', 1, 1, 'i7', 6, 3600, 12, 108, NULL, NULL),
(8, 'Intel Core i7-7700', '../images/CPU/intel13.png', 'cpu', 1, 1, 'i7', 4, 3600, 8, 86, NULL, NULL),
(9, 'Intel Core i5-9600K', '../images/CPU/intel2.png', 'cpu', 1, 1, 'i5', 6, 3700, 6, 98, NULL, NULL),
(10, 'Intel Core i5-8600K', '../images/CPU/intel2.png', 'cpu', 1, 1, 'i5', 6, 3600, 6, 92, NULL, NULL),
(11, 'Intel Core i3-9100', '../images/CPU/intel3.png', 'cpu', 1, 1, 'i3', 4, 3600, 4, 58, NULL, NULL),
(12, 'Intel Core i3-9100F', '../images/CPU/intel3.png', 'cpu', 1, 1, 'i3', 4, 3600, 4, 64, NULL, NULL),
(13, 'Intel Core i3-8100', '../images/CPU/intel5.png', 'cpu', 1, 1, 'i3', 4, 3600, 4, 64, NULL, NULL),
(14, 'Intel Core i3-9350KF', '../images/CPU/intel5.png', 'cpu', 1, 1, 'i3', 4, 3800, 4, 69, NULL, NULL),
(15, 'Intel Pentium G4560', '../images/CPU/intel8.png', 'cpu', 1, 1, 'Pentium', 2, 3800, 4, 28, NULL, NULL),
(16, 'Intel Pentium G5400', '../images/CPU/intel9.png', 'cpu', 1, 1, 'Pentium', 2, 3700, 4, 28, NULL, NULL),
(17, 'Intel Pentium G5420', '../images/CPU/intel10.png', 'cpu', 1, 1, 'Pentium', 2, 3800, 4, 28, NULL, NULL),
(18, 'AMD Ryzen 9 3900X', '../images/CPU/amd4.png', 'cpu', 2, 2, 'Ryzen 9', 12, 3800, 24, 228, NULL, NULL),
(19, 'AMD Ryzen 9 3950X', '../images/CPU/amd7.png', 'cpu', 2, 2, 'Ryzen 9', 16, 3500, 32, 288, NULL, NULL),
(20, 'AMD Ryzen 7 3700X', '../images/CPU/amd2.png', 'cpu', 2, 2, 'Ryzen 7', 8, 3600, 16, 156, NULL, NULL),
(21, 'AMD Ryzen 7 3800X', '../images/CPU/amd5.png', 'cpu', 2, 2, 'Ryzen 7', 8, 3900, 16, 172, NULL, NULL),
(22, 'AMD Ryzen 7 2700X', '../images/CPU/amd12.png', 'cpu', 2, 2, 'Ryzen 7', 8, 3700, 16, 158, NULL, NULL),
(23, 'AMD Ryzen 7 2700', '../images/CPU/amd12.png', 'cpu', 2, 2, 'Ryzen 7', 8, 3200, 16, 148, NULL, NULL),
(24, 'AMD Ryzen 5 3600X', '../images/CPU/amd1.png', 'cpu', 2, 2, 'Ryzen 5', 6, 3800, 12, 128, NULL, NULL),
(25, 'AMD Ryzen 5 3400G', '../images/CPU/amd8.png', 'cpu', 2, 2, 'Ryzen 5', 4, 3700, 8, 100, NULL, NULL),
(26, 'AMD Ryzen 5 3600', '../images/CPU/amd8.png', 'cpu', 2, 2, 'Ryzen 5', 6, 3600, 12, 128, NULL, NULL),
(27, 'AMD Ryzen 5 2600X', '../images/CPU/amd10.png', 'cpu', 2, 2, 'Ryzen 5', 6, 3600, 12, 128, NULL, NULL),
(28, 'AMD Ryzen 5 1600 AF', '../images/CPU/amd10.png', 'cpu', 2, 2, 'Ryzen 5', 6, 3200, 12, 108, NULL, NULL),
(29, 'AMD Ryzen 5 2600', '../images/CPU/amd10.png', 'cpu', 2, 2, 'Ryzen 5', 6, 3400, 12, 118, NULL, NULL),
(30, 'AMD Ryzen 5 2400G', '../images/CPU/amd11.png', 'cpu', 2, 2, 'Ryzen 5', 4, 3600, 8, 89, NULL, NULL),
(31, 'AMD Ryzen 3 3200G', '../images/CPU/amd6.png', 'cpu', 2, 2, 'Ryzen 3', 4, 3600, 4, 82, NULL, NULL),
(32, 'AMD Ryzen 3 1200', '../images/CPU/amd3.png', 'cpu', 2, 2, 'Ryzen 3', 4, 3100, 4, 62, NULL, NULL),
(33, 'AMD Athlon 3000G', '../images/CPU/amd9.png', 'cpu', 2, 2, 'Athlon', 2, 3500, 4, 35, NULL, NULL),
(34, 'AMD Athlon 200GE', '../images/CPU/amd9.png', 'cpu', 2, 2, 'Athlon', 2, 3200, 4, 32, NULL, NULL),
(35, 'AMD Athlon 240GE', '../images/CPU/amd9.png', 'cpu', 2, 2, 'Athlon', 2, 3500, 4, 32, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gpus`
--

CREATE TABLE `gpus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producent_id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zdj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `series` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `memory` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `gpus`
--

INSERT INTO `gpus` (`id`, `producent_id`, `name`, `zdj`, `type_of_item`, `series`, `memory`, `size`, `power`, `created_at`, `updated_at`) VALUES
(1, 11, 'RTX 2080SUPER GAMING X 328mm', '../images/GPU/gpu1.png', 'gpu', '2080', 8, 328, 400, NULL, NULL),
(2, 11, 'RTX 2080SUPER 292mm', '../images/GPU/gpu2.png', 'gpu', '2080', 8, 292, 400, NULL, NULL),
(3, 11, 'RTX 2070SUPER GAMING X 328mm', '../images/GPU/gpu3.png', 'gpu', '2070', 8, 328, 300, NULL, NULL),
(4, 11, 'RTX 2070SUPER GAMING 292mm', '../images/GPU/gpu4.png', 'gpu', '2070', 8, 292, 300, NULL, NULL),
(5, 11, 'RTX 2060Super ROG 301mm', '../images/GPU/gpu5.png', 'gpu', '2060', 8, 301, 250, NULL, NULL),
(6, 11, 'RTX 2060Super ROG 290mm', '../images/GPU/gpu6.png', 'gpu', '2060', 8, 290, 250, NULL, NULL),
(7, 11, 'GTX 1660Ti WINDFORCE 265mm', '../images/GPU/gpu7.png', 'gpu', '1660', 6, 265, 175, NULL, NULL),
(8, 11, 'GTX 1660Ti VENTUS 204mm', '../images/GPU/gpu8.png', 'gpu', '1660', 6, 204, 175, NULL, NULL),
(9, 11, 'GTX 1050Ti GAMING X 229mm', '../images/GPU/gpu9.png', 'gpu', '1050', 4, 229, 128, NULL, NULL),
(10, 11, 'GTX 1050Ti 167mm', '../images/GPU/gpu10.png', 'gpu', '1050', 4, 167, 128, NULL, NULL),
(11, 2, 'RX 5700XT Gaming 280mm', '../images/GPU/gpu11.png', 'gpu', '5700', 8, 280, 400, NULL, NULL),
(12, 2, 'RX 5700XT NITRO 306mm', '../images/GPU/gpu12.png', 'gpu', '5700', 8, 306, 400, NULL, NULL),
(13, 2, 'RX 5500XT GAMING 247mm', '../images/GPU/gpu13.png', 'gpu', '5500', 8, 247, 250, NULL, NULL),
(14, 2, 'RX 5500XT DUAL 242mm', '../images/GPU/gpu14.png', 'gpu', '5500', 8, 242, 250, NULL, NULL),
(15, 2, 'RX 590 ARMOR 278mm', '../images/GPU/gpu15.png', 'gpu', '590', 8, 278, 250, NULL, NULL),
(16, 2, 'RX 590 ARMOR 272mm', '../images/GPU/gpu15.png', 'gpu', '590', 8, 272, 250, NULL, NULL),
(17, 2, 'RX 580 Dual 242mm', '../images/GPU/gpu17.png', 'gpu', '580', 8, 242, 220, NULL, NULL),
(18, 2, 'RX 580 ARMOR 269mm', '../images/GPU/gpu18.png', 'gpu', '580', 8, 269, 220, NULL, NULL),
(19, 2, 'RX 570 ARMOR 242mm', '../images/GPU/gpu19.png', 'gpu', '570', 4, 242, 180, NULL, NULL),
(20, 2, 'RX 570 PULSE 230mm', '../images/GPU/gpu20.png', 'gpu', '570', 4, 230, 180, NULL, NULL),
(21, 2, 'RX 560 PULSE 210mm', '../images/GPU/gpu21.png', 'gpu', '560', 4, 210, 160, NULL, NULL),
(22, 2, 'RX 560 Strix Gaming 194mm', '../images/GPU/gpu22.png', 'gpu', '560', 4, 194, 168, NULL, NULL),
(23, 2, 'RX 550 Red Dragon 167mm', '../images/GPU/gpu23.png', 'gpu', '550', 4, 167, 120, NULL, NULL),
(24, 2, 'RX 550 4GT LP 177mm', '../images/GPU/gpu24.png', 'gpu', '550', 4, 177, 120, NULL, NULL),
(25, 11, 'RTX 2080Ti XTREME 290mm', '../images/GPU/gpu25.png', 'gpu', '2080', 11, 290, 450, NULL, NULL),
(26, 11, 'RTX 2080Ti AORUS 290mm', '../images/GPU/gpu26.png', 'gpu', '2080', 11, 290, 450, NULL, NULL),
(27, 11, 'RTX 2070 TRI FROZR 304mm', '../images/GPU/gpu27.png', 'gpu', '2070', 8, 304, 300, NULL, NULL),
(28, 11, 'RTX 2070 Blower 267mm', '../images/GPU/gpu28.png', 'gpu', '2070', 8, 267, 300, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `hdds`
--

CREATE TABLE `hdds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zdj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `producent_id` bigint(20) UNSIGNED NOT NULL,
  `capacity` int(11) NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `hdds`
--

INSERT INTO `hdds` (`id`, `name`, `zdj`, `type_of_item`, `producent_id`, `capacity`, `type`, `created_at`, `updated_at`) VALUES
(1, 'GoodRam CL100 240GB', '../images/DYSKI/goodram1.png', 'hdd', 10, 240, 'SSD', NULL, NULL),
(2, 'GoodRam CX400 512GB', '../images/DYSKI/goodram2.png', 'hdd', 10, 512, 'SSD', NULL, NULL),
(3, 'GOODRAM IRDM PRO 512GB ', '../images/DYSKI/goodram3.png', 'hdd', 10, 512, 'SSD', NULL, NULL),
(4, 'GOODRAM S400U 240GB ', '../images/DYSKI/goodram4.png', 'hdd', 10, 240, 'SSD', NULL, NULL),
(5, 'GOODRAM PX500 512GB ', '../images/DYSKI/goodram5.png', 'hdd', 10, 512, 'SSD', NULL, NULL),
(6, 'GOODRAM IRDM ULT X 2TB ', '../images/DYSKI/goodram6.png', 'hdd', 10, 2000, 'SSD', NULL, NULL),
(7, 'GOODRAM IRDM ULT X 1TB ', '../images/DYSKI/goodram6.png', 'hdd', 10, 1000, 'SSD', NULL, NULL),
(8, 'GOODRAM IRDM ULT X 500GB ', '../images/DYSKI/goodram6.png', 'hdd', 10, 500, 'SSD', NULL, NULL),
(9, 'Samsung 860 EVO 500GB', '../images/DYSKI/samsung1.png', 'hdd', 12, 500, 'SSD', NULL, NULL),
(10, 'Samsung 970 EVO Plus 500GB', '../images/DYSKI/samsung2.png', 'hdd', 12, 500, 'SSD', NULL, NULL),
(11, 'Samsung 970 EVO Plus 1TB', '../images/DYSKI/samsung2.png', 'hdd', 12, 1000, 'SSD', NULL, NULL),
(12, 'Samsung 970 EVO Plus 2TB', '../images/DYSKI/samsung2.png', 'hdd', 12, 2000, 'SSD', NULL, NULL),
(13, 'Samsung 860 QVO 1TB', '../images/DYSKI/samsung3.png', 'hdd', 12, 1000, 'SSD', NULL, NULL),
(14, 'Samsung 860 PRO 512GB', '../images/DYSKI/samsung4.png', 'hdd', 12, 512, 'SSD', NULL, NULL),
(15, 'Samsung 860 EVO 500GB', '../images/DYSKI/samsung5.png', 'hdd', 12, 500, 'SSD', NULL, NULL),
(16, 'Seagate BARRACUDA 2TB', '../images/DYSKI/seagate1.png', 'hdd', 14, 2000, 'HDD', NULL, NULL),
(17, 'Seagate IRONWOLF 4TB', '../images/DYSKI/seagate2.png', 'hdd', 14, 4000, 'HDD', NULL, NULL),
(18, 'WesternDigital BLUE 1TB', '../images/DYSKI/wd1.png', 'hdd', 13, 1000, 'HDD', NULL, NULL),
(19, 'WesternDigital Red 4TB', '../images/DYSKI/wd2.png', 'hdd', 13, 4000, 'HDD', NULL, NULL),
(20, 'WesternDigital Black 500GB', '../images/DYSKI/wd3.png', 'hdd', 13, 500, 'HDD', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_17_1111_create_producents_table', 1),
(4, '2020_02_17_2222_create_compabilities_table', 1),
(5, '2020_02_17_2223_create_sockets_table', 1),
(6, '2020_02_17_3333_create_covers_table', 1),
(7, '2020_02_17_4444_create_motherboards_table', 1),
(8, '2020_02_17_5555_create_psus_table', 1),
(9, '2020_02_17_6666_create_rams_table', 1),
(10, '2020_02_17_7777_create_cpus_table', 1),
(11, '2020_02_17_7778_create_gpus_table', 1),
(12, '2020_02_17_7779_create_hdds_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `motherboards`
--

CREATE TABLE `motherboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zdj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slots` int(11) NOT NULL,
  `type_of_item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `compability_id` bigint(20) UNSIGNED NOT NULL,
  `max_timing` int(11) NOT NULL,
  `socket_id` bigint(20) UNSIGNED NOT NULL,
  `producent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `motherboards`
--

INSERT INTO `motherboards` (`id`, `name`, `zdj`, `slots`, `type_of_item`, `compability_id`, `max_timing`, `socket_id`, `producent_id`, `created_at`, `updated_at`) VALUES
(1, 'MPG Z390 GAMING PLUS', '../images/motherboard/MSI1.png', 4, 'motherboard', 1, 4400, 1, 3, NULL, NULL),
(2, 'H310M PRO-M2 PLUS', '../images/motherboard/MSI2.png', 2, 'motherboard', 2, 4133, 1, 3, NULL, NULL),
(3, 'MPG Z390 GAMING EDGE', '../images/motherboard/MSI3.png', 4, 'motherboard', 1, 4400, 1, 3, NULL, NULL),
(4, 'MPG Z390I GAMING EDGE', '../images/motherboard/MSI4.png', 2, 'motherboard', 3, 4400, 1, 3, NULL, NULL),
(5, 'B450 TOMAHAWK MAX', '../images/motherboard/MSI5.png', 4, 'motherboard', 1, 4133, 2, 3, NULL, NULL),
(6, 'B450M MORTAR MAX', '../images/motherboard/MSI6.png', 4, 'motherboard', 1, 4133, 2, 3, NULL, NULL),
(7, 'B450I GAMING PLUS', '../images/motherboard/MSI7.png', 2, 'motherboard', 3, 3466, 2, 3, NULL, NULL),
(8, 'Z390 GAMING PRO CARBON', '../images/motherboard/MSI8.png', 4, 'motherboard', 1, 4400, 1, 3, NULL, NULL),
(9, 'B360 GAMING PRO CARBON', '../images/motherboard/MSI9.png', 4, 'motherboard', 1, 3466, 1, 3, NULL, NULL),
(10, 'H370 GAMING PRO CARBON', '../images/motherboard/MSI10.png', 4, 'motherboard', 1, 3466, 1, 3, NULL, NULL),
(11, 'Z390 GAMING X', '../images/motherboard/GIGABYTE1.png', 4, 'motherboard', 1, 3466, 1, 5, NULL, NULL),
(12, 'H310M S2H 2.0', '../images/motherboard/GIGABYTE2.png', 2, 'motherboard', 2, 3466, 1, 5, NULL, NULL),
(13, 'Z390 I AORUS PRO WIFI', '../images/motherboard/GIGABYTE3.png', 2, 'motherboard', 3, 3466, 1, 5, NULL, NULL),
(14, 'Z390 AORUS PRO', '../images/motherboard/GIGABYTE4.png', 4, 'motherboard', 1, 3466, 1, 5, NULL, NULL),
(15, 'B450 AORUS ELITE', '../images/motherboard/GIGABYTE5.png', 4, 'motherboard', 1, 3466, 2, 5, NULL, NULL),
(16, 'B450M DS3H', '../images/motherboard/GIGABYTE6.png', 4, 'motherboard', 2, 3466, 2, 5, NULL, NULL),
(17, 'X570 I AORUS PRO WIFI', '../images/motherboard/GIGABYTE7.png', 2, 'motherboard', 3, 3466, 2, 5, NULL, NULL),
(18, 'B450M GAMING', '../images/motherboard/GIGABYTE8.png', 2, 'motherboard', 2, 3466, 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('norbim92@gmail.com', '$2y$10$7eTtjDhqHRl2Viu6/nr.weFspzpPHlnkNT7W/bApBJVaBx3TwxenW', '2020-03-25 14:38:39');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `producents`
--

CREATE TABLE `producents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `producents`
--

INSERT INTO `producents` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Intel', NULL, NULL),
(2, 'AMD', NULL, NULL),
(3, 'MSI', NULL, NULL),
(4, 'Corsair', NULL, NULL),
(5, 'Gigabyte', NULL, NULL),
(6, 'SilentiumPC', NULL, NULL),
(7, 'beQuiet', NULL, NULL),
(8, 'Corsair', NULL, NULL),
(9, 'GSKILL', NULL, NULL),
(10, 'GoodRam', NULL, NULL),
(11, 'Nvidia', NULL, NULL),
(12, 'Samsung', NULL, NULL),
(13, 'WD', NULL, NULL),
(14, 'Seagate', NULL, NULL),
(15, 'CoolerMaster', NULL, NULL),
(16, 'HyperX', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `psus`
--

CREATE TABLE `psus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zdj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `producent_id` bigint(20) UNSIGNED NOT NULL,
  `power` int(11) NOT NULL,
  `certificate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `psus`
--

INSERT INTO `psus` (`id`, `name`, `zdj`, `type_of_item`, `producent_id`, `power`, `certificate`, `created_at`, `updated_at`) VALUES
(1, 'System Power 9 500W', '../images/PSU/bequiet1.png', 'psu', 7, 500, '80 Plus Bronze', NULL, NULL),
(2, 'System Power 11 550W', '../images/PSU/bequiet7.png', 'psu', 7, 550, '80 Plus Gold', NULL, NULL),
(3, 'System Power 9 600W', '../images/PSU/bequiet9.png', 'psu', 7, 600, '80 Plus Bronze', NULL, NULL),
(4, 'System Power 9 700W', '../images/PSU/bequiet13.png', 'psu', 7, 700, '80 Plus Bronze', NULL, NULL),
(5, 'Pure Power 11 CM 500W', '../images/PSU/bequiet5.png', 'psu', 7, 500, '80 Plus Gold', NULL, NULL),
(6, 'Pure Power 11 CM 600W', '../images/PSU/bequiet10.png', 'psu', 7, 600, '80 Plus Gold', NULL, NULL),
(7, 'Pure Power 11 500W', '../images/PSU/bequiet6.png', 'psu', 7, 500, '80 Plus Gold', NULL, NULL),
(8, 'Pure Power 11 700W', '../images/PSU/bequiet14.png', 'psu', 7, 700, '80 Plus Gold', NULL, NULL),
(9, 'Straight Power 11 750W', '../images/PSU/bequiet2.png', 'psu', 7, 750, '80 Plus Gold', NULL, NULL),
(10, 'Straight Power 11 650W', '../images/PSU/bequiet11.png', 'psu', 7, 650, '80 Plus Gold', NULL, NULL),
(11, 'Straight Power 11 550W', '../images/PSU/bequiet8.png', 'psu', 7, 550, '80 Plus Platinum', NULL, NULL),
(12, 'Straight Power 11 850W', '../images/PSU/bequiet2.png', 'psu', 7, 850, '80 Plus Gold', NULL, NULL),
(13, 'Straight Power 11 650W', '../images/PSU/bequiet12.png', 'psu', 7, 850, '80 Plus Platinum', NULL, NULL),
(14, 'Pure Power 11 CM 700W', '../images/PSU/bequiet3.png', 'psu', 7, 700, '80 Plus Gold', NULL, NULL),
(15, 'Pure Power 11 600W', '../images/PSU/bequiet15.png', 'psu', 7, 600, '80 Plus Gold', NULL, NULL),
(16, 'VS550 550W', '../images/PSU/corsair1.png', 'psu', 8, 550, '80 Plus', NULL, NULL),
(17, 'RMx 650W', '../images/PSU/corsair2.png', 'psu', 8, 650, '80 Plus Gold', NULL, NULL),
(18, 'RMx 850W', '../images/PSU/rmx850.png', 'psu', 8, 850, '80 Plus Gold', NULL, NULL),
(19, 'RMx 750W', '../images/PSU/corsair5.png', 'psu', 8, 750, '80 Plus Gold', NULL, NULL),
(20, 'CX650 650W', '../images/PSU/corsair3.png', 'psu', 8, 650, '80 Plus Bronze', NULL, NULL),
(21, 'CV 550W', '../images/PSU/corsair4.png', 'psu', 8, 550, '80 Plus Bronze', NULL, NULL),
(22, 'HX750 750W', '../images/PSU/corsair6.png', 'psu', 8, 750, '80 Plus Platinum', NULL, NULL),
(23, 'CX750M 750W', '../images/PSU/corsair7.png', 'psu', 8, 750, '80 Plus Bronze', NULL, NULL),
(24, 'TX850M 850W', '../images/PSU/corsair8.png', 'psu', 8, 850, '80 Plus Gold', NULL, NULL),
(25, 'DarkPower ProP11 850W', '../images/PSU/corsair9.png', 'psu', 7, 850, '80 Plus Platinum', NULL, NULL),
(26, 'HX850i 850W', '../images/PSU/corsair10.png', 'psu', 8, 850, '80 Plus Platinum', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rams`
--

CREATE TABLE `rams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zdj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `producent_id` bigint(20) UNSIGNED NOT NULL,
  `memory` int(11) NOT NULL,
  `latency` int(11) NOT NULL,
  `timing` int(11) NOT NULL,
  `typ` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `rams`
--

INSERT INTO `rams` (`id`, `name`, `zdj`, `type_of_item`, `producent_id`, `memory`, `latency`, `timing`, `typ`, `created_at`, `updated_at`) VALUES
(1, 'Ripjaws V 16GB CL16 3200', '../images/Ram/gskill1.png', 'rams', 9, 16, 16, 3200, 'DDR4', NULL, NULL),
(2, 'Trident Z RGB 32GB CL16 3600', '../images/Ram/gskill2.png', 'rams', 9, 32, 16, 3600, 'DDR4', NULL, NULL),
(3, 'Trident Z RGB 32GB CL16 3200', '../images/Ram/gskill3.png', 'rams', 9, 32, 16, 3200, 'DDR4', NULL, NULL),
(4, 'Trident Z RGB 32GB CL14 3000', '../images/Ram/gskill4.png', 'rams', 9, 32, 14, 3000, 'DDR4', NULL, NULL),
(5, 'Aegis 16GB CL16 3000', '../images/Ram/gskill5.png', 'rams', 9, 16, 16, 3000, 'DDR4', NULL, NULL),
(6, 'Aegis 16GB CL17 2400', '../images/Ram/gskill5.png', 'rams', 9, 16, 17, 2400, 'DDR4', NULL, NULL),
(7, 'Ripjaws V 64GB CL15 3200', '../images/Ram/gskill6.png', 'rams', 9, 64, 15, 3200, 'DDR4', NULL, NULL),
(8, 'IRIDIUM 16GB CL16 3200', '../images/Ram/goodram1.png', 'rams', 10, 16, 16, 3200, 'DDR4', NULL, NULL),
(9, 'IRIDIUM PRO 16GB CL17 3600', '../images/Ram/goodram2.png', 'rams', 10, 16, 17, 3600, 'DDR4', NULL, NULL),
(10, 'IRIDIUM PRO 32GB CL17 3600', '../images/Ram/goodram8.png', 'rams', 10, 32, 17, 3600, 'DDR4', NULL, NULL),
(11, 'IRIDIUM PRO 8GB CL17 2400', '../images/Ram/goodram3.png', 'rams', 10, 8, 17, 2400, 'DDR4', NULL, NULL),
(12, 'IRIDIUM PRO 8GB CL15 2133', '../images/Ram/goodram4.png', 'rams', 10, 8, 15, 2133, 'DDR4', NULL, NULL),
(13, 'IRIDIUM X 8GB CL16 3000', '../images/Ram/goodram5.png', 'rams', 10, 8, 16, 3000, 'DDR4', NULL, NULL),
(14, 'Play Black 8GB CL15 3000', '../images/Ram/goodram6.png', 'rams', 10, 8, 15, 3000, 'DDR4', NULL, NULL),
(15, 'IRIDIUM 8GB CL15 2133', '../images/Ram/goodram5.png', 'rams', 10, 8, 15, 2133, 'DDR4', NULL, NULL),
(16, 'IRIDIUM 16GB CL15 2133', '../images/Ram/goodram5.png', 'rams', 10, 16, 15, 2133, 'DDR4', NULL, NULL),
(17, 'GOODRAM 8GB CL15 2133', '../images/Ram/goodram7.png', 'rams', 10, 8, 15, 2133, 'DDR4', NULL, NULL),
(18, 'Vengeance LPX 16GB CL16 3000', '../images/Ram/corsair1.png', 'rams', 8, 16, 16, 3000, 'DDR4', NULL, NULL),
(19, 'Vengeance LP 8GB CL14 2400', '../images/Ram/corsair2.png', 'rams', 8, 8, 14, 2400, 'DDR4', NULL, NULL),
(20, 'Vengeance L 64GB CL16 2400', '../images/Ram/corsair3.png', 'rams', 8, 64, 16, 2400, 'DDR4', NULL, NULL),
(21, 'Vengeance Lpx 64GB CL16 2400', '../images/Ram/corsair3.png', 'rams', 8, 64, 16, 2400, 'DDR4', NULL, NULL),
(22, 'Vengeance LPX 32GB CL16 3200', '../images/Ram/corsair4.png', 'rams', 8, 32, 16, 3200, 'DDR4', NULL, NULL),
(23, 'Vengeance LPX 32GB CL16 3000', '../images/Ram/corsair6.png', 'rams', 8, 32, 16, 3000, 'DDR4', NULL, NULL),
(24, 'Vengeance RGB 32GB CL15 3000', '../images/Ram/corsair8.png', 'rams', 8, 32, 15, 3000, 'DDR4', NULL, NULL),
(25, 'Dominator RGB 32GB CL15 3000', '../images/Ram/corsair7.png', 'rams', 8, 32, 15, 3000, 'DDR4', NULL, NULL),
(26, 'Vengeance LPX 16GB CL14 2400', '../images/Ram/corsair5.png', 'rams', 8, 16, 14, 2400, 'DDR4', NULL, NULL),
(27, 'Vengeance LPX 16GB CL15 3000', '../images/Ram/corsair5.png', 'rams', 8, 16, 15, 3000, 'DDR4', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sockets`
--

CREATE TABLE `sockets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `sockets`
--

INSERT INTO `sockets` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1151', NULL, NULL),
(2, 'AM4', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.pl', '$2y$10$RIiTDCC/P/jfUwRbyf3syOwlfUb6WkipgNB7ky5s2eBy13cnYYS0G', 'wdAx5vH086O9dSkzyYgMFnnMirteUvj5Rqr5zdm43RMzot6CKsmuInM5zzNQ', '2020-03-21 23:28:33', '2020-03-21 23:28:33'),
(2, 'Administrator', 'admin@gmail.com', 'ef0950ffb2cb0a393679bbcfac2933b9', 'OY6rc9aQ60lDWzFQ4pTfod8o1tyIKzzGqRwq47KrUuzEfW0S2bPWH3DRmGR0', '2020-03-25 17:35:32', '2020-03-25 17:35:38');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `compabilities`
--
ALTER TABLE `compabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `covers`
--
ALTER TABLE `covers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `covers_producent_id_foreign` (`producent_id`),
  ADD KEY `covers_compability_id_foreign` (`compability_id`);

--
-- Indeksy dla tabeli `cpus`
--
ALTER TABLE `cpus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpus_producent_id_foreign` (`producent_id`),
  ADD KEY `cpus_socket_id_foreign` (`socket_id`);

--
-- Indeksy dla tabeli `gpus`
--
ALTER TABLE `gpus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gpus_producent_id_foreign` (`producent_id`);

--
-- Indeksy dla tabeli `hdds`
--
ALTER TABLE `hdds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hdds_producent_id_foreign` (`producent_id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `motherboards`
--
ALTER TABLE `motherboards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motherboards_compability_id_foreign` (`compability_id`),
  ADD KEY `motherboards_socket_id_foreign` (`socket_id`),
  ADD KEY `motherboards_producent_id_foreign` (`producent_id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `producents`
--
ALTER TABLE `producents`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `psus`
--
ALTER TABLE `psus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `psus_producent_id_foreign` (`producent_id`);

--
-- Indeksy dla tabeli `rams`
--
ALTER TABLE `rams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rams_producent_id_foreign` (`producent_id`);

--
-- Indeksy dla tabeli `sockets`
--
ALTER TABLE `sockets`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `compabilities`
--
ALTER TABLE `compabilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `covers`
--
ALTER TABLE `covers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT dla tabeli `cpus`
--
ALTER TABLE `cpus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT dla tabeli `gpus`
--
ALTER TABLE `gpus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT dla tabeli `hdds`
--
ALTER TABLE `hdds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `motherboards`
--
ALTER TABLE `motherboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `producents`
--
ALTER TABLE `producents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `psus`
--
ALTER TABLE `psus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `rams`
--
ALTER TABLE `rams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT dla tabeli `sockets`
--
ALTER TABLE `sockets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `covers`
--
ALTER TABLE `covers`
  ADD CONSTRAINT `covers_compability_id_foreign` FOREIGN KEY (`compability_id`) REFERENCES `compabilities` (`id`),
  ADD CONSTRAINT `covers_producent_id_foreign` FOREIGN KEY (`producent_id`) REFERENCES `producents` (`id`);

--
-- Ograniczenia dla tabeli `cpus`
--
ALTER TABLE `cpus`
  ADD CONSTRAINT `cpus_producent_id_foreign` FOREIGN KEY (`producent_id`) REFERENCES `producents` (`id`),
  ADD CONSTRAINT `cpus_socket_id_foreign` FOREIGN KEY (`socket_id`) REFERENCES `sockets` (`id`);

--
-- Ograniczenia dla tabeli `gpus`
--
ALTER TABLE `gpus`
  ADD CONSTRAINT `gpus_producent_id_foreign` FOREIGN KEY (`producent_id`) REFERENCES `producents` (`id`);

--
-- Ograniczenia dla tabeli `hdds`
--
ALTER TABLE `hdds`
  ADD CONSTRAINT `hdds_producent_id_foreign` FOREIGN KEY (`producent_id`) REFERENCES `producents` (`id`);

--
-- Ograniczenia dla tabeli `motherboards`
--
ALTER TABLE `motherboards`
  ADD CONSTRAINT `motherboards_compability_id_foreign` FOREIGN KEY (`compability_id`) REFERENCES `compabilities` (`id`),
  ADD CONSTRAINT `motherboards_producent_id_foreign` FOREIGN KEY (`producent_id`) REFERENCES `producents` (`id`),
  ADD CONSTRAINT `motherboards_socket_id_foreign` FOREIGN KEY (`socket_id`) REFERENCES `sockets` (`id`);

--
-- Ograniczenia dla tabeli `psus`
--
ALTER TABLE `psus`
  ADD CONSTRAINT `psus_producent_id_foreign` FOREIGN KEY (`producent_id`) REFERENCES `producents` (`id`);

--
-- Ograniczenia dla tabeli `rams`
--
ALTER TABLE `rams`
  ADD CONSTRAINT `rams_producent_id_foreign` FOREIGN KEY (`producent_id`) REFERENCES `producents` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
