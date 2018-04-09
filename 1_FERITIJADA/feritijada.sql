# sipavanje baze
# c:\xampp\mysql\bin>mysql.exe -uedunova -pedunova --default_character_set=utf8 < C:\xampp\htdocs\1_FERITIJADA\feritijada.sql


drop database if exists edunovapp16;
create database edunovapp16 character set utf8 collate utf8_croatian_ci;

#za byethost
#alter database character set utf8 collate utf8_croatian_ci;



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
poziv varchar(50) not null,
opis varchar(150) not null
); 

create table utakmica(
sifra int not null primary key auto_increment,
mjesto varchar(20) not null,
pocetak datetime not null,
trajanje int,
domacin_score int,
gost_score int,
opis text(500),
sport int not null,
sudac int not null,
domacin int not null,
gost int not null
);

create table sudac(
sifra int not null primary key auto_increment,
ime varchar(20) not null,
prezime varchar(20) not null,
email varchar(50) not null,
lozinka char(32) not null,
mobitel varchar(20) not null,
sport varchar(20) not null,
uloga varchar(20)
);

create table fakultet(
sifra int not null primary key auto_increment,
naziv varchar(30) not null,
puni_naziv varchar(50) not null,
kontakt varchar(20) null,
grad varchar(20) not null,
drzava varchar(20) not null
);

alter table utakmica add foreign key (sport) references sport(sifra);
alter table utakmica add foreign key (sudac) references sudac(sifra);
alter table utakmica add foreign key (domacin) references fakultet(sifra);
alter table utakmica add foreign key (gost) references fakultet(sifra);

insert into operater(sifra,ime,prezime, email, lozinka, uloga) values
(null, 'Administrator', 'Ivica', 'admin@hns.hr', md5('e'),'admin'),
(null, 'Ivo', 'Admin', 'admin2@hns.hr', md5('e'),'admin');


insert into sport(sifra,naziv, poziv, opis) values 
(null,'Nogomet', 'nogomet','Nogometne utakmice'),
(null,'Košarka','kosarka','Kosarkasi'),
(null,'Rukomet','rukomet','Rukomet'),
(null,'Odbojka','odbojka','Odbojka');


insert into sudac(sifra,ime,prezime, email, lozinka, mobitel, sport, uloga) values
(null,'Miro', 'Đurić','mduric@hns.hr', md5('a'), '095 234 4333', 'Nogomet', 'sudac'),
(null,'Karlo', 'Klarić', 'kklaric@hns.hr', md5('b'), '095 234 4333', 'Rukomet', 'sudac'),
(null,'Karlo', 'Marić','kmaric@hns.hr', md5('c'), '095 234 4333', 'Košarka', 'sudac'),
(null,'Mirko', 'Kokot','mkokot@hns.hr', md5('d'), '095 234 4333', 'Nogomet', 'sudac'),
(null,'Mirko', 'Rokić','mrokic@hns.hr', md5('d'), '095 234 4333', 'Nogomet', 'sudac'),
(null,'Željko', 'Milić','zmilic@hns.hr', md5('e'), '095 234 4333', 'Odbojka', 'sudac'),
(null, 'Administrator', 'Admin', 'admin@hns.hr', md5('e'),'099 888 8888','Administrator','admin'),
(null, 'Ivo', 'Admin', 'admin2@hns.hr', md5('e'),'099 888 8888','Administrator','admin')
;

insert into fakultet(sifra, naziv, puni_naziv, kontakt, grad, drzava) values
	(null, 'FESB', 'Fakultet Elektrotehnike, ...', '+385 95 888 8888','Split', 'Hrvatska'),
	(null, 'FERIT', 'Fakultet Elektrotehnike, ...', '+385 95 888 8888', 'Osijek','Hrvatska'),
	(null, 'FER', 'Fakultet Elektrotehnike, ...', '+385 95 888 8888','Zagreb', 'Hrvatska'),
	(null, 'FTN', 'Fakultet Elektrotehnike, ...', '+385 95 888 8888','Novi Sad', 'Srbija'),
	(null, 'GFOS', 'Fakultet Elektrotehnike, ...', '+385 95 888 8888','Osijek', 'Hrvatska'),
	(null, 'PRAVOS', 'Fakultet Elektrotehnike, ...', '+385 95 888 8888','Osijek', 'Hrvatska'),
	(null, 'PMFZG', 'Fakultet Elektrotehnike, ...', '+385 95 888 8888','Zagreb', 'Hrvatska'),
	(null, 'TVZ', 'Fakultet Elektrotehnike, ...', '+385 95 888 8888', 'Zagreb','Hrvatska'),
	(null, 'SFSB', 'Fakultet Elektrotehnike, ...','+385 95 888 8888', 'Split', 'Hrvatska'),
	(null, 'PMFOS', 'Fakultet Elektrotehnike, ...','+385 95 888 8888', 'Osijek', 'Hrvatska'),
	(null, 'PMFRI', 'Fakultet Elektrotehnike, ...','+385 95 888 8888', 'Rijeka', 'Hrvatska'),
	(null, 'ETFBG', 'Fakultet Elektrotehnike, ...','+385 95 888 8888', 'Beograd', 'Srbija'),
	(null, 'FOI', 'Fakultet Elektrotehnike, ...','+385 95 888 8888', 'varaždin', 'Hrvatska')
	;

insert into utakmica(sifra,mjesto, pocetak, trajanje, domacin_score, gost_score, opis, sport, sudac, domacin, gost) values 
(null,'Osijek', '2018-04-09 14:00', 30, 2, 2, 'Utakmica veoma zanimljiva. Domaćin bolji, ali ipak nedovoljno dobar kako bi pobjedio. Gosti su se izvukli s neriješenim rezultatom', 1, 1, 1, 2),
(null,'Osijek', '2018-04-09 14:00', 30, 3, 1, 'Utakmica lijepa za gledati s lijepim zgodicima. Domaćin uvjerljiv i siguran. Golman gostujućih nije siguran. U 10. minuti isključen trener domaćih zbog lošeg ponašanja.', 1, 2, 3, 2),
(null,'Osijek', '2018-04-08 14:00', 30, 43, 39, 'Utakmica veoma zanimljiva. Domaćin bolji, ali ipak nedovoljno dobar kako bi pobjedio. Gosti su se izvukli s neriješenim rezultatom', 2, 3, 4, 1),
(null,'Osijek', '2018-04-08 12:00', 30, 55, 57, 'Utakmica lijepa za gledati s lijepim zgodicima. Domaćin uvjerljiv i siguran. Golman gostujućih nije siguran. U 10. minuti isključen trener domaćih zbog lošeg ponašanja.', 2, 3, 1, 3),
(null,'Osijek', '2018-04-09 21:00', 30, null, null, null, 3, 1, 1, 2),
(null,'Osijek', '2018-04-09 13:00', 30, 21, 20, 'Utakmica veoma zanimljiva. Domaćin bolji, ali ipak nedovoljno dobar kako bi pobjedio. Gosti su se izvukli s neriješenim rezultatom', 3, 2, 1, 2),
(null,'Osijek', '2018-04-09 13:00', 30, 25, 22, 'Utakmica lijepa za gledati s lijepim zgodicima. Domaćin uvjerljiv i siguran. Golman gostujućih nije siguran. U 10. minuti isključen trener domaćih zbog lošeg ponašanja.', 4, 1, 4, 7),
(null,'Osijek', '2018-04-07 13:00', 30, 21, 25, 'Utakmica napeta', 4, 1, 2, 2),
(null,'Osijek', '2018-04-09 12:00', 30, 1, 0, 'Utakmica lijepa za gledati s lijepim zgodicima. Domaćin uvjerljiv i siguran. Golman gostujućih nije siguran. U 10. minuti isključen trener domaćih zbog lošeg ponašanja.', 1, 2, 2, 5),
(null,'Osijek', '2018-04-09 12:00', 30, 33, 32, 'Utakmica napeta', 2, 3, 4, 3);
