create table academic_performance
(
	id int auto_increment
		primary key,
	id_Chair int null,
	id_Teacher int null,
	id_Reporting_type int null,
	id_Mark int null,
	id_Subject int null,
	id_student int null,
	Date date null,
	Hours_count int null
)
;

create index id_Chair
	on academic_performance (id_Chair)
;

create index id_Mark
	on academic_performance (id_Mark)
;

create index id_Reporting_type
	on academic_performance (id_Reporting_type)
;

create index id_student
	on academic_performance (id_student)
;

create index id_Subject
	on academic_performance (id_Subject)
;

create index id_Teacher
	on academic_performance (id_Teacher)
;

create table chair
(
	id int auto_increment
		primary key,
	name varchar(255) null
)
;

alter table academic_performance
	add constraint academic_performance_ibfk_1
		foreign key (id_Chair) references chair (id)
;

create table chair_to_teacher
(
	id int auto_increment
		primary key,
	id_chair int null,
	id_teacher int null,
	constraint chair_to_teacher_ibfk_1
		foreign key (id_chair) references chair (id)
)
;

create index id_chair
	on chair_to_teacher (id_chair)
;

create index id_teacher
	on chair_to_teacher (id_teacher)
;

create table faculty
(
	id int auto_increment
		primary key,
	name varchar(255) null
)
;

create table groups
(
	id int auto_increment
		primary key,
	name varchar(20) null,
	year int null,
	id_speciality int null,
	id_faculty int null,
	constraint groups_ibfk_3
		foreign key (id_faculty) references faculty (id),
	constraint groups_ibfk_4
		foreign key (id_faculty) references faculty (id),
	constraint groups_idfk_4
		foreign key (id_faculty) references faculty (id)
)
;

create index id_specialty
	on groups (id_speciality)
;

create index groups_idfk_4
	on groups (id_faculty)
;

create table mark
(
	id int auto_increment
		primary key,
	name varchar(255) null
)
;

alter table academic_performance
	add constraint academic_performance_ibfk_4
		foreign key (id_Mark) references mark (id)
;

create table reporting_type
(
	id int auto_increment
		primary key,
	name varchar(255) null
)
;

alter table academic_performance
	add constraint academic_performance_ibfk_3
		foreign key (id_Reporting_type) references reporting_type (id)
;

create table speciality
(
	id int auto_increment
		primary key,
	name varchar(255) null,
	id_faculty int null,
	constraint speciality_ibfk_1
		foreign key (id_faculty) references faculty (id)
)
;

create index id_faculty
	on speciality (id_faculty)
;

alter table groups
	add constraint groups_ibfk_2
		foreign key (id_speciality) references speciality (id)
;

create table student
(
	id int auto_increment
		primary key,
	name varchar(255) null,
	id_group int null,
	id_speciality int null,
	id_faculty int null,
	constraint student_ibfk_3
		foreign key (id_group) references groups (id),
	constraint student_ibfk_4
		foreign key (id_speciality) references speciality (id),
	constraint student_ibfk_5
		foreign key (id_faculty) references faculty (id)
)
;

create index id_group
	on student (id_group)
;

create index id_faculty
	on student (id_faculty)
;

create index id_speciality
	on student (id_speciality)
;

alter table academic_performance
	add constraint academic_performance_ibfk_6
		foreign key (id_student) references student (id)
;

create table subject
(
	id int auto_increment
		primary key,
	name varchar(255) null,
	id_Chair int null,
	constraint subject_ibfk_1
		foreign key (id_Chair) references chair (id)
)
;

create index id_Chair
	on subject (id_Chair)
;

alter table academic_performance
	add constraint academic_performance_ibfk_5
		foreign key (id_Subject) references subject (id)
;

create table teacher
(
	id int auto_increment
		primary key,
	name varchar(255) null,
	id_chair int null,
	constraint teacher_ibfk_1
		foreign key (id_chair) references chair (id)
)
;

create index id_chair
	on teacher (id_chair)
;

alter table academic_performance
	add constraint academic_performance_ibfk_2
		foreign key (id_Teacher) references teacher (id)
;

alter table chair_to_teacher
	add constraint chair_to_teacher_ibfk_2
		foreign key (id_teacher) references teacher (id)
;

create table teacher_to_subjects
(
	id int auto_increment
		primary key,
	id_subject int null,
	id_teacher int null,
	constraint teacher_to_subjects_ibfk_1
		foreign key (id_subject) references subject (id),
	constraint teacher_to_subjects_ibfk_2
		foreign key (id_teacher) references teacher (id)
)
;

create index id_subject
	on teacher_to_subjects (id_subject)
;

create index id_teacher
	on teacher_to_subjects (id_teacher)
;

