CREATE DATABASE DataWareDB;
USE DataWareDB;

CREATE TABLE Equipe (
    IDEquipe INT PRIMARY KEY,
    NomEquipe VARCHAR(255),
    DateCreation DATE
);

CREATE TABLE Membre (
    IDMembre INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Prenom VARCHAR(255),
    Email VARCHAR(255),
    Telephone VARCHAR(20),
    Role VARCHAR(50),
    IDEquipe INT,
    Statut VARCHAR(50),
    FOREIGN KEY (IDEquipe) REFERENCES Equipe(IDEquipe)
);


INSERT INTO Equipe VALUES (1, 'Equipe A', '2023-01-01');
INSERT INTO Equipe VALUES (2, 'Equipe B', '2023-09-01');
INSERT INTO Equipe VALUES (3, 'Equipe C', '2023-10-01');

INSERT INTO Membre VALUES (1, 'Ettihadi', 'Nabil', 'nabil@gmail.com', '0612345678', 'Designer', 1, 'Actif');
INSERT INTO Membre VALUES (2, 'hatimi', 'Amine', 'amine@gmail.com', '0610203040', 'Developer', 2, 'Inactif');
INSERT INTO Membre VALUES (3, 'berrada', 'Yassir', 'yassir@gmail.com', '0610020030', 'Designer', 1, 'Actif');
INSERT INTO Membre VALUES (4, 'baraka', 'Kamal', 'kamal@gmail.com', '0620050080', 'Developer', 3, 'Actif');
INSERT INTO Membre VALUES (5, 'saadan', 'Mohammed', 'mohamed@gmail.com', '0670020030', 'Designer', 1, 'Inactif');
INSERT INTO Membre VALUES (6, 'kotaibi', 'Rayan', 'rayan@gmail.com', '0625507500', 'Developer', 2, 'Inactif');
INSERT INTO Membre VALUES (7, 'hachimi', 'Salim', 'salim@gmail.com', '0615304560', 'Designer', 2, 'Actif');
INSERT INTO Membre VALUES (8, 'Rami', 'Badr', 'badr@gmail.com', '0620406080', 'Developer', 3, 'Inactif');
