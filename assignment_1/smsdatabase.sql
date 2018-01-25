create table sms_library(
	lib_id int auto_increment primary key,
	lib_name varchar(100),
	lib_time timestamp
);

create table sms_users(
	log_id int auto_increment primary key,
	log_name varchar(100),
	log_mobile bigint(20),
	log_email varchar(100),
	log_password varchar(100),
	log_status int default 1,
	log_time timestamp;
);

create table sms_group(
	group_id int auto_increment primary key,
	group_name varchar(100),
	group_time timestamp
);
create table sms_message(
	sms_id int auto_increment primary key,
	sms_message varchar(300),
	sms_libid int,
	sms_mess_time timestamp
);
create table sms_mobile(
	contact_id int auto_increment primary key,
	contact_name varchar(100),
	contact_mobile bigint(20),
	contact_grid int,
	contact_time timestamp
);
