-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2025 at 02:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_bano`
--

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `uni_id` int(11) NOT NULL,
  `uni_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `overview` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `facilities` varchar(255) NOT NULL,
  `faculties` varchar(255) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `eligibility_ifp_standard` varchar(255) DEFAULT NULL,
  `eligibility_ifp_percentage` varchar(50) DEFAULT NULL,
  `eligibility_ifp_boards` varchar(255) DEFAULT NULL,
  `eligibility_ug_standard` varchar(255) DEFAULT NULL,
  `eligibility_ug_percentage` varchar(50) DEFAULT NULL,
  `eligibility_ug_boards` varchar(255) DEFAULT NULL,
  `eligibility_pg_standard` varchar(255) DEFAULT NULL,
  `eligibility_pg_percentage` varchar(50) DEFAULT NULL,
  `eligibility_pg_boards` varchar(255) DEFAULT NULL,
  `ielts_undergraduate` decimal(3,1) DEFAULT NULL,
  `ielts_postgraduate` decimal(3,1) DEFAULT NULL,
  `ielts_phd` decimal(3,1) DEFAULT NULL,
  `document_criteria` varchar(255) NOT NULL,
  `admission_procedures` varchar(255) NOT NULL,
  `departments` varchar(255) NOT NULL,
  `why_choose_us` varchar(255) NOT NULL,
  `conclusion` varchar(255) NOT NULL,
  `bachelors_programs` int(11) DEFAULT NULL,
  `masters_programs` int(11) DEFAULT NULL,
  `specialist_programs` int(11) DEFAULT NULL,
  `phd_programs` int(11) DEFAULT NULL,
  `english_taught_programs` int(11) DEFAULT NULL,
  `majors` varchar(50) DEFAULT NULL,
  `students` varchar(50) DEFAULT NULL,
  `departments_count` int(11) DEFAULT NULL,
  `institutions_count` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`uni_id`, `uni_name`, `description`, `overview`, `about`, `facilities`, `faculties`, `eligibility`, `eligibility_ifp_standard`, `eligibility_ifp_percentage`, `eligibility_ifp_boards`, `eligibility_ug_standard`, `eligibility_ug_percentage`, `eligibility_ug_boards`, `eligibility_pg_standard`, `eligibility_pg_percentage`, `eligibility_pg_boards`, `ielts_undergraduate`, `ielts_postgraduate`, `ielts_phd`, `document_criteria`, `admission_procedures`, `departments`, `why_choose_us`, `conclusion`, `bachelors_programs`, `masters_programs`, `specialist_programs`, `phd_programs`, `english_taught_programs`, `majors`, `students`, `departments_count`, `institutions_count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'abcd', 'add', '<p>aaa</p>', '<p>bbb</p>', '<p>ccc</p>', '<p>ddd</p>', '<p>eee</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>fff</p>', '<p>ggg</p>', '<p>hhh</p>', '<p>iii</p>', '<p>jj</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-04 05:33:21', '2025-09-04 05:33:21', '0000-00-00 00:00:00'),
(2, 'Eleanor William', 'Dolor ipsa omnis fu', '<p>edasd</p>', '<p>5451</p>', '<p>1515</p>', '<p>15</p>', '<p>1</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>515</p>', '<p>1</p>', '<p>151</p>', '<p>1</p>', '<p>1</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-04 08:07:47', '2025-09-04 08:07:47', '0000-00-00 00:00:00'),
(4, 'qwerty', 'qwedfghma', '<p>qsdfvb</p><h2>Hi</h2>', '<p>Zxcvbnh</p>', '<p>okjhgvc</p>', '<p>mnhgtr</p>', '', 'q', 'q', '', 'q', 'q', '', 'q', 'q', '', 0.0, 0.0, 0.0, '<p>tgb</p>', '<p>vghu</p>', '<p>dfrtyujnbv</p>', '<p>mkjuyfcvbnj</p>', '<p>erthgcxcvbn</p>', 0, 0, 0, 0, 0, 'a', 'a', 0, 0, '2025-09-13 08:14:39', '2025-09-13 08:15:41', '0000-00-00 00:00:00'),
(5, 'Sevastopol State University', 'Sevastopol State University, located in the beautiful and attractive city of Sevastopol, Russia. It is an honoured institution known for its diverse offerings in academics and also modern facilities. Among various courses provided MBBS attracts a large nu', '<p>Sevastopol State University (SSU), established in 2014, is an educational institution in the scenic city of Sevastopol. Over the years, Sevastopol University has evolved into a centre of practical training and academic excellence, drawing attention of ', '<p>Sevastopol State University Russia offers a vibrant campus life, blending academics with cultural and recreational activities. Students participate in clubs, cultural events, and international student festivals that celebrate the diverse student body. ', '<p>Sevastopol State University boats state-of-the-art facilities designed to provide a well-rounded and immersive educational experience:</p><ul><li><strong>Medical Laboratories and Simulation Centers:</strong> The university\'s advanced laboratories are e', '<p>Sevastopol State University offers diverse faculties, each staffed with expert educators and professionals dedicated to nurturing students\' academic and practical skills. The university\'s Faculty of Medicine stands out as its flagship faculty, attracti', '', '11', '50%', 'Any', '12', '50%', 'Any', 'Bachelor’s degree', '55%', 'Any', 5.5, 6.0, 6.5, '<p>All you need to do is submit the right paperwork, then we\'ll take care of the rest!</p><ul><li>The 10 + 2 exam is for students who want to pursue their further studies in medicine. Similar to the SAT, this test is given and it solely depends on your pe', '<p>State University direct admission and procedure are straightforward, especially designed to accommodate international students seeking direct admission, such as those from India. Sevastopol State University direct admission procedures start in the mont', '<p>The Faculty of Medicine at Sevastopol State University offers several specialized departments to ensure well-rounded and focused MBBS training.</p><ul><li><strong>Department of General Medicine:</strong> Lays the foundation with core subjects like anat', '<ul><li><strong>🎓 High-Quality Education: </strong>Sevastopol State University is committed to providing top-tier education with a strong emphasis on research and innovation. The institution is home to experienced faculty specialized in their fields. Prac', '<p>Choosing to study MBBS abroad is a big decision—one that shapes not just a student’s career, but their entire journey through life. For many Indian students, the dream of becoming a doctor can feel out of reach due to intense competition and the high c', 50, 51, 9, 16, 11, '100+', '12000+', 78, 13, '2025-09-13 12:37:59', '2025-09-13 12:37:59', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`uni_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `uni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
