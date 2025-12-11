CREATE DATABASE studentdb;
USE studentdb;

CREATE TABLE faculty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    faculty_name VARCHAR(255) NOT NULL
);

CREATE TABLE specialty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    faculty_id INT NOT NULL,
    specialty_name VARCHAR(255) NOT NULL,
    FOREIGN KEY (faculty_id) REFERENCES faculty(id)
);

INSERT INTO faculty (faculty_name) VALUES
('İnformasiya Texnologiyaları'),
('İqtisadiyyat'),
('Tibb'),
('Humanitar Elmlər');

INSERT INTO specialty (faculty_id, specialty_name) VALUES
(1, 'Kompüter mühəndisliyi'),
(1, 'İnformasiya sistemləri'),
(2, 'Maliyyə'),
(2, 'Biznesin idarə edilməsi'),
(3, 'Stomatologiya'),
(3, 'Tibb işi'),
(4, 'Psixologiya'),
(4, 'Filologiya');

CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255),
    faculty_id INT,
    specialty_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
