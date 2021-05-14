create table student
(
    id   int auto_increment
        primary key,
    name varchar(100)  not null,
    age  int default 0 not null
);
