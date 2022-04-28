
sudo mysql -u root -p
//for maridb


CREATE USER 'ireport'@'localhost' IDENTIFIED BY 'password_ireport';

GRANT ALL PRIVILEGES ON *.* TO 'ireport'@'localhost' WITH GRANT OPTION;

create database database_ireport;

