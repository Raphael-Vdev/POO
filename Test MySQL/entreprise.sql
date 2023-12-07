DROP DATABASE IF EXISTS entreprise;

CREATE DATABASE IF NOT EXISTS entreprise;

USE entreprise;

#------------------------------------------------------------
# Table: EMPLOYE
#------------------------------------------------------------
CREATE TABLE employe(
    idEmploye Int Auto_increment NOT NULL,
    nom       Varchar (50) NULL,
    prenom    Varchar (25) NULL,
    sexe      Char(1) NULL,
    service   Varchar (25) NULL,
    salaire   Int NULL,
    dateContrat Date,
    CONSTRAINT EMPLOYE_PK PRIMARY KEY (idEmploye)

)ENGINE=InnoDB;
