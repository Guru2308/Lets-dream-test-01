

CREATE TABLE `tbl_product` (
  `Name` varchar(50) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL COMMENT 'role_id',
  `role` varchar(255) DEFAULT NULL COMMENT 'role_text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Mentor'),
(3, 'Mentee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `roleid` tinyint(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `roleid`, `isActive`, `created_at`, `updated_at`) VALUES
(29, 'Dhanasekar', 'Dhanasekar', 'dhansty@gmail.com', '7bab591f6a6d505343606a0bd462c21f03e3d9f9', '9876543210', 1, 0, '2023-01-27 13:40:04', '2023-01-27 13:40:04'),
(32, 'Ravi', 'Ravi', 'aferdeno@gmail.com', '4fdb22a0de28894c48ad958d898ddd188d08ed9c', '9344553033', 1, 1, '2023-01-30 09:25:56', '2023-01-30 09:25:56'),
(33, 'rekha', 'Rekha', 'rek123@gmail.com', '7bab591f6a6d505343606a0bd462c21f03e3d9f9', '9876543210', 2, 0, '2023-02-03 09:18:27', '2023-02-03 09:18:27'),
(34, 'Guru', 'guru', 'guru@gmail.com', '7bab591f6a6d505343606a0bd462c21f03e3d9f9', '9876543211', 3, 0, '2023-02-09 08:46:49', '2023-02-09 08:46:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
