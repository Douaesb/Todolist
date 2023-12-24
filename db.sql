CREATE TABLE `user` (
  `iduser` int(10) PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(100) ,
  `prenom` varchar(100) ,
  `email` varchar(100),
  `pass` varchar(100) ,
  `tel` varchar(20) UNIQUE,
  `role` varchar(100)
);

CREATE TABLE `projet` (
  `idpro` int(10) PRIMARY KEY AUTO_INCREMENT,
  `nompro` varchar(100) ,
  `descpro` varchar(200) 
);

CREATE TABLE `tache` (
  `idta` int(10) PRIMARY KEY AUTO_INCREMENT,
  `nomta` varchar(100) ,
  `descta` varchar(100) ,
  `datedeb` varchar(100),
  `datefin` varchar(100) ,
  `etat` int(10) UNIQUE,
  `statut` varchar(100)
);


ALTER TABLE tache
add iduser int(10),
ADD FOREIGN KEY (iduser) REFERENCES user(iduser);

ALTER TABLE tache
add idpro int(10),
ADD FOREIGN KEY (idpro) REFERENCES projet(idpro);

ALTER TABLE projet
add iduser int(10),
ADD FOREIGN KEY (iduser) REFERENCES user(iduser);


















