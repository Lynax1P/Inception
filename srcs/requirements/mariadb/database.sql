CREATE DATABASE db_wordpress;
CREATE USER 'user_wp'@'%' IDENTIFIED BY 'user_wp';
GRANT ALL PRIVILEGES ON db_wordpress.* TO 'user_wp'@'%';
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY '4m3SxCpaQb*6LB#';