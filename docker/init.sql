create table user (
	id bigint AUTO_INCREMENT PRIMARY KEY,
	full_name varchar(256) NOT NULL,
	pfp_path varchar(500) DEFAULT 'uploads/users/default.jpg',
	email varchar(256) UNIQUE NOT NULL,
	password varchar(500) NOT NULL,
	role ENUM('ADMIN', 'NORMAL') DEFAULT 'NORMAL'
);

create table message (
	id bigint AUTO_INCREMENT PRIMARY KEY,
	subject varchar(255) NOT NULL,
	text TEXT NOT NULL
);

create table content (
        id bigint AUTO_INCREMENT PRIMARY KEY,
        message varchar(256) NOT NULL,
	location ENUM('HOME', 'ABOUT', 'SERVICES') NOT NULL
);

insert into user (full_name, email, password, role) values
('Lorenzo Pandolfo', 'lorenzopandolfo@gmail.com', '$2y$10$m/197FJruzIoTkpVz6meaO0U5O7dLfeqkEM7Z50l/Opnnj7KwcrFy', 'ADMIN'),
('Julia Dornelles', 'juliadornelles@gmail.com', '$2y$10$m/197FJruzIoTkpVz6meaO0U5O7dLfeqkEM7Z50l/Opnnj7KwcrFy', 'ADMIN');

