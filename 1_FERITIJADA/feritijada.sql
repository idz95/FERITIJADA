# -uedunova -pedunova --default_character_set=utf8 < d:\SQLWP16\skriptapp16.sql
drop database if exists feritijada;
create database feritijada character set utf8;

use feritijada;

create table operater(
sifra int not null primary key auto_increment,
email varchar(50) not null,
lozinka char(32) not null,
ime varchar(50) not null,
prezime varchar(50) not null,
uloga varchar(20) not null
);

create table sport(
sifra int not null primary key auto_increment,
naziv varchar(50) not null,
opis varchar(150) not null
); 

create table utakmica(
sifra int not null primary key auto_increment,
domacin varchar(20) not null,
gost varchar(20) not null,
mjesto varchar(20) not null,
pocetak datetime not null,
trajanje int,
sport int not null,
sudac int not null
 
);

create table sudac(
sifra int not null primary key auto_increment,
ime varchar(20) not null,
prezime varchar(20) not null,
email varchar(50) not null,
lozinka char(32) not null,
mobitel varchar(20) not null,
sport varchar(20) not null
);

create table fakultet(
sifra int not null primary key auto_increment,
naziv varchar(30) not null,
grad varchar(20) not null,
drzava varchar(20) not null,
domacin int not null,
gost int not null,
utakmica int not null
);

create table dogadaj(
sifra int not null primary key auto_increment,
vrsta varchar(30) not null,
opis varchar(200) not null,
vrijeme datetime not null,
utakmica int not null,
fakultet int not null
);



alter table utakmica add foreign key (sport) references sport(sifra);
alter table utakmica add foreign key (sudac) references sudac(sifra);

alter table dogadaj add foreign key (utakmica) references utakmica(sifra);
alter table dogadaj add foreign key (fakultet) references fakultet(sifra);

alter table fakultet add foreign key (domacin) references utakmica(sifra);
alter table fakultet add foreign key (gost) references utakmica(sifra);



insert into sport(sifra,naziv,opis) values 
(null,'Nogomet','Nogometne utakmice'),
(null,'Košarka','Kosarkasi'),
(null,'Rukomet','Rukomet'),
(null,'Odbojka','Odbojka'),
(null,'Veslanje','Veslači');

insert into operater (email,lozinka,ime,prezime,uloga) values 
('admin@hns.hr', md5('e'),'Admin','admin','admin'),
('sudac@hns.hr', md5('e'),'Miro','Kuzma','oper');


insert into sudac(sifra,ime,prezime, email, lozinka, mobitel, sport) values
(null,'Miro', 'Đurić','mduric@hns.hr', md5('a'), '095 234 4333', 'Nogomet'),
(null,'Karlo', 'Klarić', 'kklaric@hns.hr', md5('b'), '095 234 4333', 'Rukomet'),
(null,'Karlo', 'Marić','kmaric@hns.hr', md5('c'), '095 234 4333', 'Košarka'),
(null,'Mirko', 'Kokot','mkokot@hns.hr', md5('d'), '095 234 4333', 'Nogomet'),
(null,'Željko', 'Milić','zmilic@hns.hr', md5('e'), '095 234 4333', 'Odbojka')
;


insert into utakmica(sifra,domacin, gost, mjesto, pocetak, trajanje, sport, sudac) values
(null, 'FERIT', 'FER', 'Dvorana Gradski Vrt', '2017-12-10 02:00', 30, 1, 1),
(null, 'RITEH', 'FESB', 'Srednjika', '2017-12-11 02:00', 30, 1, 2),
(null, 'FER', 'FOI', 'Dvorana Gradski Vrt', '2017-12-11 02:00', 30, 1, 2),
(null, 'FERIT', 'FESB', 'Poreč stadion', '2017-12-11 02:00', 30, 1, 2),
(null, 'FERIT', 'FER', 'Dvorana Gradski Vrt', '2017-12-10 02:00', 30, 2, 1),
(null, 'RITEH', 'FESB', 'Srednjika', '2017-12-11 02:00', 30, 2, 2),
(null, 'FER', 'FOI', 'Dvorana Gradski Vrt', '2017-12-11 02:00', 30, 2, 2),
(null, 'FERIT', 'FESB', 'Poreč stadion', '2017-12-11 02:00', 30, 2, 2),
(null, 'FER', 'FSB', 'Dvorana Gradski Vrt', '2017-12-11 12:00', 30, 3, 2),
(null, 'FERIT', 'FER', 'Dvorana Gradski Vrt', '2017-12-10 02:00', 30, 3, 1),
(null, 'RITEH', 'FESB', 'Srednjika', '2017-12-11 02:00', 30, 3, 2),
(null, 'FER', 'FOI', 'Dvorana Gradski Vrt', '2017-12-11 02:00', 30, 4, 2),
(null, 'FERIT', 'FESB', 'Poreč stadion', '2017-12-11 02:00', 30, 4, 2)
; 

insert into fakultet(sifra, naziv, grad, drzava, domacin, gost) values
	(null, 'FESB', 'Split', 'Hrvatska', 1, 2),
	(null, 'FERIT', 'Osijek', 'Hrvatska', 1, 2),
	(null, 'FER', 'Zagreb', 'Hrvatska', 1, 2),
	(null, 'FTN', 'Novi Sad', 'Srbija', 1, 2),
	(null, 'FOI', 'Varaždin', 'Hrvatska', 1, 2)
	;

insert into dogadaj(sifra, vrsta, opis, vrijeme, utakmica, fakultet) values
	(null, 'Grupa', 'Utakmice po grupama', '2017-06-22', 1, 2),
	(null, 'Knockout', 'Utakmica za prolazak dalje, u slučaju neriješenog ide se na produžetke', '2017-09-23', 2, 2 );