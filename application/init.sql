set old_passwords=0;
DROP USER IF EXISTS 'fdf26a_web3'@'localhost';
CREATE USER 'fdf26a_web3'@'localhost' 
    IDENTIFIED BY '';
GRANT USAGE ON *.* TO 'fdf26a_web3'@'localhost'
REQUIRE NONE WITH 
MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

DROP DATABASE IF EXISTS `fdf26a_web3`;
CREATE DATABASE IF NOT EXISTS `fdf26a_web3`;
GRANT SELECT, INSERT, UPDATE, DELETE 
ON `fdf26a_web3`.* TO 'fdf26a_web3'@'localhost';
 
USE `fdf26a_web3`;


CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        CONSTRAINT PK_ci_sessions PRIMARY KEY(id),
        KEY `ci_sessions_timestamp` (`timestamp`)
);