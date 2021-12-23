
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `fsoft_todo` (
  `id` int(11) NOT NULL,
  `tentodo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `fsoft_todo` (`id`, `tentodo`, `noidung`, `trangthai`) VALUES
(1, 'Học bài', 'Bắt đầu lúc 9h30', 'Chưa hoàn thành'),
(2, 'Nấu cơm', 'Bắt đầu lúc 5h30', 'Đã hoàn thành');

ALTER TABLE `fsoft_todo`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `fsoft_todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;
