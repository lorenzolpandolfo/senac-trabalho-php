create table user (
	id bigint AUTO_INCREMENT PRIMARY KEY,
	full_name varchar(256),
	email varchar(256),
	password varchar(500)
);

create table content (
	id bigint AUTO_INCREMENT PRIMARY KEY,
	text varchar(500),
	
)