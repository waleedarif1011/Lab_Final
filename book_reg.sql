CREATE TABLE register(
    Title TEXT,
    Author TEXT NOT NULL,
    Genre TEXT NOT NULL,
    Publication_Date TEXT
);
INSERT INTO register (Title, Author, Genre, Publication_Date) VALUES ('Mind', 'Waleed', 'Psycho', '2024');

select* from register;