create table mo_area(
	area_id int auto_increment primary key,
	area_name varchar(100),
	area_time timestamp
);

create table mo_cinema(
	cin_id int auto_increment primary key,
	cin_name varchar(100),
	cin_areaid int,
	cin_time timestamp
);

-- 1 pvr mulund  5
-- 2 pvr bhandup  3

create table mo_screen(
	screen_id int auto_increment primary key,
	screen_name varchar(100),
	screen_cin_id int,
	screen_time timestamp
);

-- 1 screen A  2 

create table mo_screen_time(
	sc_time_id int auto_increment primary key,
	sc_time_name varchar(100),
	sc_screen_id int,
	sc_time timestamp
);

create table mo_screen_seat(
	seat_id int auto_increment primary key,
	seat_screen_id int,
	seatno int,
	seat_amount decimal(8,2),
	seat_time timestamp
);

create table mo_movie(
	mov_id int auto_increment primary key,
	mov_name varchar(100),
	mov_desc longtext,
	mov_path text,
	mov_start date,
	mov_time timestamp
);

create table mo_movie_screen(
	ms_id int auto_increment primary key,
	ms_screen_time_id int,
	ms_screen_movie_id int,
	ms_enddate date,
	ms_time timestamp
);

create table mo_booking_screen(
	bo_id int auto_increment primary key,
	bo_date date,
	bo_screen_time_id int,
	bo_seat_no int,
	bo_time timestamp
);


-- text 1024

-- 1 screenA-PVR 10 100
-- 1 screenA-PVR 11 100
-- 1 screenA-PVR 12 100
-- 1 screenA-PVR 13 100
-- 1 screenA-PVR 14 100

-- 999999.99
