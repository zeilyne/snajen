drop table if exists `users`;
CREATE TABLE `users` (
  `ID` varchar(7) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Jabatan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`ID`, `Nama`, `Alamat`, `Jabatan`) VALUES
('A0001', 'Budi', 'Jl. Selatan satu no 100', 'pekerja 1'),
('A0002', 'Yudi', 'Jl. Timur dua no 123', 'pekerja 2'),
('A0003', 'Mudi', 'Jl. Utara tiga no 2325', 'pekerja 3'),
('A0004', 'Rudi', 'Jl. Barat empat no 356', 'pekerja 4'),
('B0001', 'Wudi', 'Jl. Tengah lima no 90', 'boss 1-4');

ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);
COMMIT;