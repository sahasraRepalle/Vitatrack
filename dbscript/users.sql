CREATE TABLE IF NOT EXISTS users (
 id int(11) NOT NULL AUTO_INCREMENT,
 Firstname varchar(50) NOT NULL,
 Lastname varchar(50) NOT NULL,
 Email varchar(50) NOT NULL,
 username varchar(50) NOT NULL,
 password varchar(50) NOT NULL,
 PRIMARY KEY (id)
 );


INSERT INTO `users` (`id`,Firstname,Lastname,Email, `username`, `password`) VALUES (NULL, 'Sahasra', 'Sahasra','s@email.com','Sahasra', 'Sahasra');
INSERT INTO `users` (`id`,Firstname,Lastname,Email, `username`, `password`) VALUES (NULL, 'Divya', 'Divya','d@email.com','Divya', 'Divya');
INSERT INTO `users` (`id`,Firstname,Lastname,Email, `username`, `password`) VALUES (NULL, 'Vindhya', 'Vindhya','v@email.com','Vindhya', 'Vindhya');