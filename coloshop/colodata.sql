create table category(
	ca_id int auto_increment primary key ,
	ca_name varchar(20),
	ca_path varchar(100),
	ca_time timestamp
);

create table colouser(
	user_id int auto_increment primary key,
	user_name varchar(100),
	user_mobile bigint,
	user_email varchar(100),
	user_password varchar(100),
	user_status int default 1,
	user_time timestamp
);

create table products(
	pro_id int auto_increment primary key,
	pro_name varchar(100),
	pro_price decimal(8,2),
	pro_discount int,
	pro_description longtext,
	pro_caid int,
	pro_path text,
	pro_status int default 1,
	pro_sale int default 0,
	pro_time timestamp
);
