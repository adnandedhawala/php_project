create table cineuser(
	user_id int auto_increment primary key,
	user_name varchar(100),
	user_mobile bigint,
	user_email varchar(100),
	user_password varchar(100),
	user_status int default 1,
	user_time timestamp
);
