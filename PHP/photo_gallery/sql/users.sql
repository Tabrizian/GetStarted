CREATE TABLE users (
    id int(11) NOT NULL auto_increment,
    username varchar(50) NOT NULL,
    password varchar(40) NOT NULL,
    first_name varchar(30) NOT NULL,
    last_name varchar(30) NOT NULL,
    PRIMARY KEY (id)
);
