create table user (
	id bigint AUTO_INCREMENT PRIMARY KEY,
	full_name varchar(256),
	email varchar(256),
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

