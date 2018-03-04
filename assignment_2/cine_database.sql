create table cineuser(
	user_id int auto_increment primary key,
	user_name varchar(100),
	user_mobile bigint,
	user_email varchar(100),
	user_password varchar(100),
	user_status int default 1,
	user_time timestamp
);

create table cine_area(
	area_id int auto_increment primary key,
	area_name varchar(100),
	area_time timestamp
);

create table cine_cinema(
	cin_id int auto_increment primary key,
	cin_area_id int;
	cin_name varchar(100),
	cin_time timestamp
);

create table cine_movie(
	mov_id int auto_increment primary key,
	mov_name varchar(100),
	mov_path text,
	mov_desc longtext,
	mov_date date,
	mov_time timestamp
);

create table cine_screen(
	sc_id int auto_increment primary key,
	sc_cin_id int,
	sc_name varchar(100),
	sc_time timestamp
);

create table cine_screen_time(
	sc_time_id int auto_increment primary key,
	sc_time_screen_id int,
	sc_time_name varchar(10),
	sc_time_time timestamp
);

create table cine_movie_screen(
	msc_id int auto_increment primary key,
	msc_sc_time_id int,
	msc_movie_id int,
	msc_movie_end_date date,
	msc_time timestamp
);

create table cine_seat(
	seat_id int auto_increment primary key,
	seat_no int,
	seat_amount int,
	seat_sc_id int,
	seat_time timestamp
)