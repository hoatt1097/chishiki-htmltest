DROP DATABASE IF EXISTS `csk-k7`;
CREATE DATABASE `csk-k7`;
USE `csk-k7`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(6) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`username`, `password`, `level`, `fullname`, `email`, `gender`, `language`, `country`, `is_delete`, `id`) VALUES
('admin', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'Admin', 'admin@gmail.com', 'male', 'PHP,C,Python', 'Vietnamese', 0, 1),
('ducphu1', '202cb962ac59075b964b07152d234b70', 0, 'Nguyen Duc Phu', 'ducphu1@gmail.com', 'male', 'PHP', 'Japanese', 0, 2),
('user01', 'b75705d7e35e7014521a46b532236ec3', 0, 'user01', 'user01@gmail.com', 'female', 'PHP,Java', 'American', 0, 3),
('user02', 'd7127707335a1239a07f1bcbc202d9f8', 0, 'user02', 'user02@gmail.com', 'female', 'PHP,Java', 'American', 0, 4),
('user03', '8bd108c8a01a892d129c52484ef97a0d', 0, 'user03', 'user03@gmail.com', 'male', 'Java', 'American', 0, 5),
('user04', 'd7127707335a1239a07f1bcbc202d9f8', 0, 'user04', 'user04@gmail.com', 'female', 'PHP,Java', 'American', 0, 6),
('user05', '8bd108c8a01a892d129c52484ef97a0d', 0, 'user05', 'user05@gmail.com', 'male', 'Java', 'American', 0, 7);

ALTER TABLE `user` ADD PRIMARY KEY (`id`);


ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

