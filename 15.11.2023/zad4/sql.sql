CREATE DATABASE moja_klasa;
USE moja_klasa;

CREATE TABLE uczniowie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwisko VARCHAR(255),
    imie VARCHAR(255),
    data_urodzenia DATE
);

INSERT INTO uczniowie (nazwisko, imie, data_urodzenia) VALUES
    ('Kowalski', 'Jan', '2005-01-15'),
    ('Nowak', 'Anna', '2004-05-22'),
    ('Wiśniewski', 'Piotr', '2005-09-10');