create table user (
	id bigint AUTO_INCREMENT PRIMARY KEY,
	full_name varchar(256),
	email varchar(256) UNIQUE,
	password varchar(500)
);

create table message (
	id bigint AUTO_INCREMENT PRIMARY KEY,
	subject varchar(255),
	text varchar(500)
);

create table content (
        id bigint AUTO_INCREMENT PRIMARY KEY,
        message varchar(256),
	location ENUM('HOME', 'ABOUT', 'SERVICES') NOT NULL
);

insert into user (full_name, email, password) values
('Lorenzo Pandolfo', 'lorenzopandolfo@gmail.com', '$2y$10$m/197FJruzIoTkpVz6meaO0U5O7dLfeqkEM7Z50l/Opnnj7KwcrFy'),
('Julia Dornelles', 'juliadornelles@gmail.com', '$2y$10$m/197FJruzIoTkpVz6meaO0U5O7dLfeqkEM7Z50l/Opnnj7KwcrFy');

