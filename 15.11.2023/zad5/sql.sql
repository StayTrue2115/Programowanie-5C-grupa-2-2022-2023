CREATE DATABASE moja_klasa;
USE moja_klasa;

CREATE TABLE uczniowie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwisko VARCHAR(255),
    imie VARCHAR(255),
    data_urodzenia DATE
);