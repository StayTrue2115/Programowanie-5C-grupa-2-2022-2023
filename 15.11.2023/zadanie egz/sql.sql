CREATE DATABASE IF NOT EXISTS customer_data;
USE customer_data;

CREATE TABLE IF NOT EXISTS participants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    birth_year INT,
    gender VARCHAR(10),
    comments VARCHAR(100),
    consent BOOLEAN
);