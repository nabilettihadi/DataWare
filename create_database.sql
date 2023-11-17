CREATE DATABASE DataWareDB;
USE DataWareDB;

CREATE TABLE Equipe (
    IDEquipe INT PRIMARY KEY,
    NomEquipe VARCHAR(255),
    DateCreation DATE
);

CREATE TABLE Membre (
    IDMembre INT PRIMARY KEY,
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
INSERT INTO Equipe VALUES (2, 'Equipe A', '2023-09-01');
INSERT INTO Equipe VALUES (1, 'Equipe B', '2023-08-01');
INSERT INTO Equipe VALUES (1, 'Equipe B', '2023-11-01');
INSERT INTO Membre VALUES (1, 'Nom1', 'Prenom1', 'email1@example.com', '123456789', 'Role1', 1, 'Actif');
INSERT INTO Membre VALUES (1, 'Nom2', 'Prenom2', 'email1@example.com', '3456789', 'Role2', 2, '');
INSERT INTO Membre VALUES (1, 'Nom3', 'Prenom3', 'email1@example.com', '12456789', 'Role1', 1, 'Actif');
INSERT INTO Membre VALUES (1, 'Nom3', 'Prenom4', 'email1@example.com', '1236789', 'Role2', 2, '');