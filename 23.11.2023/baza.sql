CREATE TABLE Uzytkownicy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(50) UNIQUE NOT NULL,
    haslo VARCHAR(255) NOT NULL,
    rola VARCHAR(20) NOT NULL
);

INSERT INTO Uzytkownicy (login, haslo, rola) VALUES
('admin', 'admin123', 'admin'),
('user1', 'password123', 'uzytkownik'),
('user2', 'securepass456', 'uzytkownik');