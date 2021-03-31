<<<<<<< HEAD
﻿drop database if exists OkBoomer;
create database OkBoomer;

use OkBoomer;

drop table if exists Membre;

create table Membre
	(idMembre int not null,
	prenom varchar (15),
	nom varchar (20),
	pseudonyme varchar (20),
	jourNaissance int,
	moisNaissance int,
	anneeNaissance int,
	email varchar (30),
	mdp varchar (15),
	primary key (idMembre))engine=innodb;
	
create table genreActivité
	(idGenreActivité int not null,
	nomActivité varchar (25),
	lieuActivité varchar (30),
	horaireActivité time,
	)	
	
create table Activités
	(idActivités int not null,
	idGenreActivité int not null,
	libelléActivité varchar (25),
	)
	
	
	
insert into Membre(idMembre, prenom, nom, pseudonyme, jourNaissance, moisNaissance, anneeNaissance, email, mdp)
values (1,'Evan','Roussin','Nym_Le_Manchot',20,04,2001,'evan.roussin@gmail.com','motdepasse');
=======
﻿drop database if exists OkBoomer;
create database OkBoomer;

use OkBoomer;

drop table if exists Membre;

create table Membre
	(idMembre int not null,
	prenom varchar (15),
	nom varchar (20),
	pseudonyme varchar (20),
	jourNaissance int,
	moisNaissance int,
	anneeNaissance int,
	email varchar (30),
	mdp varchar (15),
	primary key (idMembre))engine=innodb;
	
create table genreActivité
	(idGenreActivité int not null,
	nomActivité varchar (25),
	lieuActivité varchar (30),
	horaireActivité time,
	)	
	
create table Activités
	(idActivités int not null,
	idGenreActivité int not null,
	libelléActivité varchar (25),
	)
	
	
	
insert into Membre(idMembre, prenom, nom, pseudonyme, jourNaissance, moisNaissance, anneeNaissance, email, mdp)
values (1,'Evan','Roussin','Nym_Le_Manchot',20,04,2001,'evan.roussin@gmail.com','motdepasse');
>>>>>>> e7bcf90e2e8c4adda2d386b3a3e76bde97cff407
