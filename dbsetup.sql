create database if not exists testphpunit;

use testphpunit;

create table test(
    test_id int(4) not null auto_increment,
    test_data text,
    test_date timestamp not null,
    primary key (test_id)
);

insert into test(test_data) values("Lorem Ipsum");
