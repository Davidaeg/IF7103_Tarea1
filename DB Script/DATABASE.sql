CREATE TABLE `estilo_recinto` (
  `Recinto` varchar(9) DEFAULT NULL,
  `CA` decimal(3,1) DEFAULT NULL,
  `EC` decimal(3,1) DEFAULT NULL,
  `EA` decimal(3,1) DEFAULT NULL,
  `OR` decimal(3,1) DEFAULT NULL,
  `CA-EC` decimal(3,1) DEFAULT NULL,
  `EA-OR` decimal(3,1) DEFAULT NULL,
  `Estilo` varchar(11) DEFAULT NULL
);

INSERT INTO `estilo_recinto` VALUES ('Paraiso',15.0,15.0,19.0,12.0,0.0,7.0,'ACOMODADOR'),('Paraiso',16.0,17.0,18.0,19.0,-1.0,-1.0,'DIVERGENTE'),('Paraiso',15.0,13.0,17.0,17.0,2.0,0.0,'DIVERGENTE'),('Turrialba',19.0,13.0,13.0,20.0,6.0,-7.0,'ASIMILADOR'),('Turrialba',19.0,11.0,14.0,17.0,8.0,-3.0,'ASIMILADOR'),('Turrialba',18.0,12.0,21.0,14.0,6.0,7.0,'CONVERGENTE'),('Paraiso',11.0,19.0,16.0,16.0,-8.0,0.0,'DIVERGENTE'),('Paraiso',19.0,14.0,19.0,18.0,5.0,1.0,'ASIMILADOR'),('Paraiso',16.0,17.0,16.0,15.0,-1.0,1.0,'DIVERGENTE'),('Paraiso',19.0,11.0,19.0,17.0,8.0,2.0,'ASIMILADOR'),('Turrialba',19.0,16.0,13.0,16.0,3.0,-3.0,'ASIMILADOR'),('Paraiso',13.0,14.0,21.0,13.0,-1.0,8.0,'ACOMODADOR'),('Paraiso',21.0,14.0,12.0,18.0,7.0,-6.0,'ASIMILADOR'),('Paraiso',16.0,15.0,18.0,19.0,1.0,-1.0,'DIVERGENTE'),('Paraiso',18.0,10.0,22.0,13.0,8.0,9.0,'CONVERGENTE'),('Turrialba',17.0,15.0,13.0,18.0,2.0,-5.0,'DIVERGENTE'),('Paraiso',15.0,17.0,19.0,15.0,-2.0,4.0,'ACOMODADOR'),('Turrialba',20.0,15.0,15.0,12.0,5.0,3.0,'CONVERGENTE'),('Turrialba',17.0,15.0,15.0,17.0,2.0,-2.0,'DIVERGENTE'),('Turrialba',12.0,17.0,12.0,21.0,-5.0,-9.0,'DIVERGENTE'),('Paraiso',21.0,10.0,11.0,23.0,11.0,-12.0,'ASIMILADOR'),('Paraiso',17.0,13.0,19.0,14.0,4.0,5.0,'CONVERGENTE'),('Turrialba',11.0,15.0,20.0,16.0,-4.0,4.0,'ACOMODADOR'),('Turrialba',13.0,15.0,22.0,13.0,-2.0,9.0,'ACOMODADOR'),('Paraiso',17.0,13.0,16.0,15.0,4.0,1.0,'ASIMILADOR'),('Paraiso',17.0,13.0,21.0,14.0,4.0,7.0,'CONVERGENTE'),('Paraiso',15.0,16.0,13.0,17.0,-1.0,-4.0,'DIVERGENTE'),('Paraiso',16.0,11.0,20.0,12.0,5.0,8.0,'CONVERGENTE'),('Turrialba',14.0,15.0,15.0,17.0,-1.0,-2.0,'DIVERGENTE'),('Paraiso',18.0,11.0,21.0,18.0,7.0,3.0,'CONVERGENTE'),('Turrialba',14.0,11.0,18.0,15.0,3.0,3.0,'CONVERGENTE'),('Turrialba',16.0,17.0,14.0,21.0,-1.0,-7.0,'DIVERGENTE'),('Turrialba',17.0,13.0,22.0,11.0,4.0,11.0,'CONVERGENTE'),('Paraiso',16.0,15.0,18.0,15.0,1.0,3.0,'ACOMODADOR'),('Paraiso',19.0,18.0,20.0,11.0,1.0,9.0,'ACOMODADOR'),('Turrialba',12.0,15.0,16.0,18.0,-3.0,-2.0,'DIVERGENTE'),('Turrialba',9.0,21.0,18.0,17.0,-12.0,1.0,'DIVERGENTE'),('Paraiso',18.0,11.0,17.0,14.0,7.0,3.0,'CONVERGENTE'),('Paraiso',10.0,17.0,17.0,17.0,-7.0,0.0,'DIVERGENTE'),('Paraiso',16.0,14.0,19.0,14.0,2.0,5.0,'ACOMODADOR'),('Turrialba',19.0,12.0,18.0,15.0,7.0,3.0,'CONVERGENTE'),('Paraiso',17.0,13.0,20.0,13.0,4.0,7.0,'CONVERGENTE'),('Turrialba',17.0,14.0,16.0,18.0,3.0,-2.0,'ASIMILADOR'),('Turrialba',20.0,13.0,11.0,19.0,7.0,-8.0,'ASIMILADOR'),('Paraiso',10.0,15.0,16.0,19.0,-5.0,-3.0,'DIVERGENTE'),('Paraiso',20.0,12.0,18.0,12.0,8.0,6.0,'CONVERGENTE'),('Paraiso',19.0,17.0,15.0,18.0,2.0,-3.0,'DIVERGENTE'),('Turrialba',16.0,12.0,14.0,19.0,4.0,-5.0,'ASIMILADOR'),('Turrialba',17.0,13.0,16.0,15.0,4.0,1.0,'ASIMILADOR'),('Paraiso',15.0,12.0,14.0,23.0,3.0,-9.0,'ASIMILADOR'),('Turrialba',11.0,16.0,17.0,19.0,-5.0,-2.0,'DIVERGENTE'),('Turrialba',17.0,12.0,21.0,15.0,5.0,6.0,'CONVERGENTE'),('Turrialba',19.0,14.0,21.0,9.0,5.0,12.0,'CONVERGENTE'),('Turrialba',15.0,14.0,17.0,15.0,1.0,2.0,'DIVERGENTE'),('Turrialba',20.0,10.0,18.0,12.0,10.0,6.0,'CONVERGENTE'),('Turrialba',14.0,18.0,13.0,14.0,-4.0,-1.0,'DIVERGENTE'),('Paraiso',15.0,16.0,12.0,20.0,-1.0,-8.0,'DIVERGENTE'),('Paraiso',18.0,14.0,13.0,17.0,4.0,-4.0,'ASIMILADOR'),('Turrialba',18.0,14.0,17.0,18.0,4.0,-1.0,'ASIMILADOR'),('Turrialba',17.0,14.0,12.0,18.0,3.0,-6.0,'ASIMILADOR'),('Paraiso',19.0,8.0,12.0,21.0,11.0,-9.0,'ASIMILADOR'),('Paraiso',20.0,15.0,15.0,15.0,5.0,0.0,'ASIMILADOR'),('Paraiso',7.0,19.0,19.0,15.0,-12.0,4.0,'ACOMODADOR'),('Turrialba',19.0,11.0,21.0,12.0,8.0,9.0,'CONVERGENTE'),('Paraiso',21.0,10.0,20.0,10.0,11.0,10.0,'CONVERGENTE'),('Paraiso',14.0,9.0,24.0,14.0,5.0,10.0,'CONVERGENTE'),('Turrialba',17.0,14.0,18.0,14.0,3.0,4.0,'CONVERGENTE'),('Turrialba',12.0,15.0,18.0,14.0,-3.0,4.0,'ACOMODADOR'),('Turrialba',17.0,13.0,17.0,16.0,4.0,1.0,'ASIMILADOR'),('Paraiso',17.0,11.0,18.0,18.0,6.0,0.0,'ASIMILADOR'),('Turrialba',14.0,14.0,20.0,13.0,0.0,7.0,'ACOMODADOR'),('Turrialba',14.0,16.0,20.0,13.0,-2.0,7.0,'ACOMODADOR'),('Turrialba',17.0,13.0,20.0,16.0,4.0,4.0,'CONVERGENTE'),('Turrialba',13.0,14.0,16.0,15.0,-1.0,1.0,'DIVERGENTE'),('Paraiso',18.0,12.0,17.0,16.0,6.0,1.0,'ASIMILADOR'),('Turrialba',14.0,16.0,19.0,15.0,-2.0,4.0,'ACOMODADOR'),('Turrialba',11.0,15.0,18.0,14.0,-4.0,4.0,'ACOMODADOR'),('Turrialba',17.0,14.0,20.0,15.0,3.0,5.0,'CONVERGENTE'),('Paraiso',16.0,11.0,14.0,19.0,5.0,-5.0,'ASIMILADOR'),('Paraiso',17.0,12.0,18.0,14.0,5.0,4.0,'CONVERGENTE'),('Paraiso',20.0,14.0,19.0,10.0,6.0,9.0,'CONVERGENTE'),('Paraiso',16.0,16.0,20.0,10.0,0.0,10.0,'ACOMODADOR'),('Paraiso',15.0,13.0,19.0,14.0,2.0,5.0,'ACOMODADOR'),('Paraiso',14.0,14.0,17.0,14.0,0.0,3.0,'ACOMODADOR'),('Paraiso',20.0,13.0,14.0,12.0,7.0,2.0,'ASIMILADOR'),('Paraiso',22.0,10.0,18.0,12.0,12.0,6.0,'CONVERGENTE'),('Paraiso',15.0,15.0,17.0,18.0,0.0,-1.0,'DIVERGENTE'),('Paraiso',17.0,13.0,19.0,14.0,4.0,5.0,'CONVERGENTE'),('Paraiso',16.0,17.0,13.0,23.0,-1.0,-10.0,'DIVERGENTE'),('Paraiso',15.0,12.0,17.0,18.0,3.0,-1.0,'ASIMILADOR'),('Turrialba',11.0,15.0,16.0,21.0,-4.0,-5.0,'DIVERGENTE'),('Turrialba',17.0,12.0,19.0,16.0,5.0,3.0,'CONVERGENTE'),('Turrialba',14.0,17.0,19.0,15.0,-3.0,4.0,'ACOMODADOR'),('Turrialba',19.0,9.0,23.0,10.0,10.0,13.0,'CONVERGENTE'),('Turrialba',14.0,13.0,21.0,14.0,1.0,7.0,'ACOMODADOR'),('Turrialba',14.0,16.0,17.0,18.0,-2.0,-1.0,'DIVERGENTE'),('Turrialba',16.0,12.0,15.0,16.0,4.0,-1.0,'ASIMILADOR'),('Turrialba',18.0,15.0,16.0,13.0,3.0,3.0,'CONVERGENTE'),('Turrialba',14.0,17.0,14.0,18.0,-3.0,-4.0,'DIVERGENTE'),('Turrialba',16.0,13.0,22.0,12.0,3.0,10.0,'CONVERGENTE'),('Turrialba',13.0,15.0,19.0,16.0,-2.0,3.0,'ACOMODADOR'),('Turrialba',15.0,15.0,18.0,17.0,0.0,1.0,'DIVERGENTE'),('Turrialba',17.0,8.0,18.0,18.0,9.0,0.0,'ASIMILADOR'),('Turrialba',18.0,10.0,15.0,20.0,8.0,-5.0,'ASIMILADOR'),('Turrialba',18.0,15.0,19.0,9.0,3.0,10.0,'CONVERGENTE'),('Turrialba',15.0,15.0,20.0,15.0,0.0,5.0,'ACOMODADOR'),('Turrialba',14.0,16.0,18.0,15.0,-2.0,3.0,'ACOMODADOR'),('Paraiso',16.0,11.0,22.0,13.0,5.0,9.0,'CONVERGENTE'),('Paraiso',11.0,16.0,20.0,14.0,-5.0,6.0,'ACOMODADOR'),('Paraiso',19.0,14.0,17.0,14.0,5.0,3.0,'CONVERGENTE'),('Paraiso',17.0,16.0,17.0,14.0,1.0,3.0,'ACOMODADOR'),('Paraiso',16.0,15.0,20.0,14.0,1.0,6.0,'ACOMODADOR'),('Paraiso',14.0,14.0,20.0,16.0,0.0,4.0,'ACOMODADOR'),('Paraiso',13.0,13.0,21.0,15.0,0.0,6.0,'ACOMODADOR'),('Paraiso',19.0,11.0,15.0,20.0,8.0,-5.0,'ASIMILADOR'),('Paraiso',17.0,14.0,20.0,8.0,3.0,12.0,'CONVERGENTE'),('Paraiso',24.0,12.0,12.0,14.0,12.0,-2.0,'ASIMILADOR'),('Paraiso',18.0,14.0,13.0,18.0,4.0,-5.0,'ASIMILADOR'),('Turrialba',10.0,21.0,18.0,13.0,-11.0,5.0,'ACOMODADOR'),('Turrialba',9.0,16.0,20.0,17.0,-7.0,3.0,'ACOMODADOR'),('Turrialba',20.0,12.0,18.0,14.0,8.0,4.0,'CONVERGENTE'),('Turrialba',18.0,12.0,24.0,11.0,6.0,13.0,'CONVERGENTE'),('Turrialba',16.0,15.0,19.0,14.0,1.0,5.0,'ACOMODADOR'),('Turrialba',14.0,15.0,21.0,12.0,-1.0,9.0,'ACOMODADOR'),('Turrialba',15.0,14.0,22.0,12.0,1.0,10.0,'ACOMODADOR'),('Turrialba',15.0,14.0,18.0,14.0,1.0,4.0,'ACOMODADOR'),('Turrialba',14.0,13.0,20.0,13.0,1.0,7.0,'ACOMODADOR'),('Turrialba',17.0,15.0,15.0,14.0,2.0,1.0,'DIVERGENTE'),('Turrialba',18.0,15.0,16.0,13.0,3.0,3.0,'CONVERGENTE'),('Turrialba',17.0,16.0,9.0,20.0,1.0,-11.0,'DIVERGENTE'),('Turrialba',17.0,12.0,20.0,11.0,5.0,9.0,'CONVERGENTE'),('Turrialba',15.0,13.0,19.0,13.0,2.0,6.0,'ACOMODADOR'),('Turrialba',17.0,17.0,14.0,13.0,0.0,1.0,'DIVERGENTE'),('Turrialba',17.0,16.0,19.0,14.0,1.0,5.0,'ACOMODADOR'),('Turrialba',14.0,16.0,18.0,14.0,-2.0,4.0,'ACOMODADOR'),('Turrialba',24.0,9.0,12.0,16.0,15.0,-4.0,'ASIMILADOR'),('Turrialba',14.0,15.0,18.0,14.0,-1.0,4.0,'ACOMODADOR'),('Turrialba',17.0,15.0,15.0,18.0,2.0,-3.0,'DIVERGENTE'),('Turrialba',21.0,14.0,18.0,11.0,7.0,7.0,'CONVERGENTE'),('Turrialba',15.0,14.0,22.0,15.0,1.0,7.0,'ACOMODADOR'),('Turrialba',19.0,14.0,14.0,15.0,5.0,-1.0,'ASIMILADOR'),('Turrialba',20.0,15.0,15.0,12.0,5.0,3.0,'CONVERGENTE'),('Turrialba',17.0,14.0,18.0,13.0,3.0,5.0,'CONVERGENTE'),('Turrialba',14.0,13.0,20.0,18.0,1.0,2.0,'DIVERGENTE'),('Turrialba',16.0,10.0,18.0,15.0,6.0,3.0,'CONVERGENTE'),('Turrialba',16.0,16.0,22.0,12.0,0.0,10.0,'ACOMODADOR'),('Turrialba',13.0,11.0,20.0,15.0,2.0,5.0,'ACOMODADOR'),('Turrialba',15.0,17.0,19.0,14.0,-2.0,5.0,'ACOMODADOR'),('Turrialba',18.0,13.0,19.0,12.0,5.0,7.0,'CONVERGENTE'),('Turrialba',16.0,16.0,14.0,19.0,0.0,-5.0,'DIVERGENTE'),('Turrialba',11.0,18.0,16.0,16.0,-7.0,0.0,'DIVERGENTE'),('Turrialba',12.0,13.0,22.0,13.0,-1.0,9.0,'ACOMODADOR'),('Turrialba',16.0,14.0,16.0,14.0,2.0,2.0,'DIVERGENTE'),('Turrialba',16.0,16.0,16.0,11.0,0.0,5.0,'ACOMODADOR'),('Turrialba',17.0,15.0,22.0,13.0,2.0,9.0,'ACOMODADOR'),('Turrialba',13.0,13.0,19.0,17.0,0.0,2.0,'DIVERGENTE'),('Turrialba',17.0,16.0,16.0,18.0,1.0,-2.0,'DIVERGENTE'),('Turrialba',17.0,17.0,13.0,16.0,0.0,-3.0,'DIVERGENTE'),('Turrialba',19.0,7.0,20.0,15.0,12.0,5.0,'CONVERGENTE'),('Turrialba',16.0,12.0,20.0,14.0,4.0,6.0,'CONVERGENTE'),('Turrialba',17.0,13.0,19.0,14.0,4.0,5.0,'CONVERGENTE'),('Turrialba',12.0,13.0,22.0,12.0,-1.0,10.0,'ACOMODADOR'),('Turrialba',15.0,14.0,12.0,21.0,1.0,-9.0,'DIVERGENTE'),('Turrialba',18.0,11.0,16.0,19.0,7.0,-3.0,'ASIMILADOR'),('Turrialba',14.0,13.0,21.0,12.0,1.0,9.0,'ACOMODADOR'),('Turrialba',17.0,12.0,19.0,12.0,5.0,7.0,'CONVERGENTE'),('Turrialba',20.0,11.0,18.0,16.0,9.0,2.0,'ASIMILADOR'),('Turrialba',18.0,9.0,21.0,15.0,9.0,6.0,'CONVERGENTE'),('Turrialba',13.0,15.0,19.0,13.0,-2.0,6.0,'ACOMODADOR'),('Turrialba',16.0,13.0,19.0,13.0,3.0,6.0,'CONVERGENTE'),('Turrialba',19.0,12.0,16.0,17.0,7.0,-1.0,'ASIMILADOR'),('Turrialba',13.0,14.0,18.0,17.0,-1.0,1.0,'DIVERGENTE'),('Turrialba',14.0,15.0,19.0,14.0,-1.0,5.0,'ACOMODADOR'),('Turrialba',17.0,17.0,15.0,15.0,0.0,0.0,'DIVERGENTE'),('Turrialba',20.0,13.0,20.0,15.0,7.0,5.0,'CONVERGENTE'),('Turrialba',13.0,16.0,16.0,18.0,-3.0,-2.0,'DIVERGENTE'),('Turrialba',17.0,10.0,21.0,16.0,7.0,5.0,'CONVERGENTE'),('Turrialba',21.0,11.0,16.0,14.0,10.0,2.0,'ASIMILADOR'),('Turrialba',24.0,12.0,17.0,18.0,12.0,-1.0,'ASIMILADOR'),('Turrialba',17.0,18.0,21.0,12.0,-1.0,9.0,'ACOMODADOR'),('Turrialba',13.0,13.0,19.0,14.0,0.0,5.0,'ACOMODADOR'),('Turrialba',14.0,16.0,16.0,19.0,-2.0,-3.0,'DIVERGENTE'),('Turrialba',15.0,15.0,22.0,14.0,0.0,8.0,'ACOMODADOR'),('Turrialba',12.0,15.0,19.0,14.0,-3.0,5.0,'ACOMODADOR'),('Turrialba',15.0,8.0,19.0,16.0,7.0,3.0,'CONVERGENTE'),('Turrialba',18.0,12.0,15.0,22.0,6.0,-7.0,'ASIMILADOR'),('Turrialba',17.0,15.0,17.0,16.0,2.0,1.0,'DIVERGENTE'),('Paraiso',21.0,11.0,18.0,13.0,10.0,5.0,'CONVERGENTE'),('Paraiso',12.0,14.0,17.0,19.0,-2.0,-2.0,'DIVERGENTE'),('Paraiso',14.0,14.0,20.0,15.0,0.0,5.0,'ACOMODADOR'),('Paraiso',13.0,12.0,18.0,17.0,1.0,1.0,'DIVERGENTE'),('Paraiso',14.0,16.0,16.0,16.0,-2.0,0.0,'DIVERGENTE'),('Paraiso',19.0,14.0,19.0,10.0,5.0,9.0,'CONVERGENTE'),('Paraiso',19.0,15.0,14.0,14.0,4.0,0.0,'ASIMILADOR'),('Paraiso',13.0,13.0,21.0,15.0,0.0,6.0,'ACOMODADOR'),('Paraiso',15.0,18.0,18.0,13.0,-3.0,5.0,'ACOMODADOR'),('Paraiso',12.0,17.0,19.0,13.0,-5.0,6.0,'ACOMODADOR'),('Paraiso',16.0,16.0,19.0,13.0,0.0,6.0,'ACOMODADOR'),('Paraiso',14.0,14.0,20.0,15.0,0.0,5.0,'ACOMODADOR'),('Paraiso',16.0,14.0,17.0,19.0,-2.0,2.0,'DIVERGENTE'),('Paraiso',19.0,14.0,19.0,10.0,5.0,9.0,'CONVERGENTE'),('Paraiso',16.0,16.0,19.0,13.0,0.0,6.0,'ACOMODADOR'),('Paraiso',13.0,13.0,21.0,15.0,0.0,6.0,'ACOMODADOR'),('Paraiso',13.0,12.0,18.0,17.0,1.0,1.0,'DIVERGENTE'),('Turrialba',22.0,10.0,18.0,14.0,12.0,4.0,'CONVERGENTE'),('Turrialba',17.0,15.0,18.0,14.0,2.0,4.0,'ACOMODADOR'),('Turrialba',18.0,14.0,17.0,10.0,4.0,7.0,'CONVERGENTE'),('Turrialba',13.0,12.0,20.0,12.0,1.0,8.0,'ACOMODADOR'),('Turrialba',16.0,14.0,20.0,15.0,2.0,5.0,'ACOMODADOR'),('Turrialba',11.0,19.0,11.0,16.0,-8.0,-5.0,'DIVERGENTE'),('Paraiso',14.0,11.0,19.0,18.0,3.0,1.0,'ASIMILADOR'),('Paraiso',16.0,10.0,20.0,15.0,6.0,5.0,'CONVERGENTE'),('Paraiso',9.0,16.0,24.0,13.0,-7.0,11.0,'ACOMODADOR'),('Turrialba',22.0,10.0,18.0,14.0,12.0,4.0,'CONVERGENTE'),('Turrialba',13.0,12.0,20.0,12.0,1.0,8.0,'ACOMODADOR'),('Turrialba',16.0,14.0,20.0,15.0,2.0,5.0,'ACOMODADOR'),('Turrialba',16.0,16.0,22.0,13.0,0.0,9.0,'ACOMODADOR'),('Turrialba',12.0,12.0,22.0,28.0,0.0,-6.0,'DIVERGENTE'),('Turrialba',17.0,15.0,18.0,14.0,2.0,4.0,'ACOMODADOR'),('Turrialba',11.0,19.0,11.0,16.0,-8.0,-5.0,'DIVERGENTE'),('Turrialba',18.0,14.0,17.0,10.0,4.0,7.0,'CONVERGENTE'),('Turrialba',17.0,10.0,20.0,19.0,7.0,1.0,'ASIMILADOR');
select * from estilo_recinto;


CREATE TABLE `redes` (
  `Id` decimal(3,1) DEFAULT NULL,
  `Reliability (R)` decimal(2,1) DEFAULT NULL,
  `Number of links (L)` decimal(3,1) DEFAULT NULL,
  `Capacity (Ca)` varchar(6) DEFAULT NULL,
  `Costo (Co)` varchar(6) DEFAULT NULL,
  `Class` varchar(1) DEFAULT NULL
);

INSERT INTO `redes` VALUES (1.0,2.0,7.0,'High','High','A'),(2.0,2.0,16.0,'High','High','A'),(3.0,2.0,9.0,'Medium','High','A'),(4.0,2.0,14.0,'Medium','High','A'),(5.0,2.0,11.0,'Medium','Low','A'),(6.0,2.0,12.0,'Medium','Low','A'),(7.0,2.0,10.0,'Medium','Medium','A'),(8.0,2.0,13.0,'Medium','Medium','A'),(9.0,3.0,15.0,'High','High','A'),(10.0,3.0,17.0,'Low','Low','A'),(11.0,3.0,18.0,'Low','Low','A'),(12.0,3.0,15.0,'Medium','High','A'),(13.0,3.0,16.0,'Medium','High','A'),(14.0,3.0,11.0,'Medium','Low','A'),(15.0,3.0,13.0,'Medium','Low','A'),(16.0,3.0,17.0,'Medium','Medium','A'),(17.0,5.0,19.0,'High','Medium','B'),(18.0,4.0,18.0,'High','High','B'),(19.0,5.0,19.0,'High','High','B'),(20.0,5.0,18.0,'Medium','High','B'),(21.0,4.0,18.0,'Medium','High','B'),(22.0,4.0,18.0,'Medium','High','B'),(23.0,4.0,19.0,'Medium','High','B'),(24.0,4.0,19.0,'High','Medium','B'),(25.0,5.0,18.0,'Medium','High','B'),(26.0,4.0,19.0,'Medium','High','B'),(27.0,4.0,19.0,'High','High','B'),(28.0,4.0,19.0,'High','High','B'),(29.0,4.0,18.0,'High','High','B'),(30.0,5.0,19.0,'High','Medium','B'),(31.0,4.0,19.0,'High','High','B'),(32.0,4.0,19.0,'Medium','High','B'),(33.0,4.0,17.0,'High','High','B'),(34.0,5.0,20.0,'High','High','B'),(35.0,4.0,18.0,'Medium','High','B');


CREATE TABLE `profesores` (
  `A` decimal(2,1) DEFAULT NULL,
  `B` varchar(2) DEFAULT NULL,
  `C` varchar(1) DEFAULT NULL,
  `D` decimal(2,1) DEFAULT NULL,
  `E` varchar(2) DEFAULT NULL,
  `F` varchar(1) DEFAULT NULL,
  `G` varchar(1) DEFAULT NULL,
  `H` varchar(1) DEFAULT NULL,
  `Class` varchar(12) DEFAULT NULL
);

INSERT INTO `profesores` VALUES (3.0,'F','I',1.0,'ND','A','N','S','Beginner'),(3.0,'NA','I',2.0,'DM','H','S','S','Beginner'),(3.0,'M','B',2.0,'ND','L','N','S','Beginner'),(3.0,'M','I',1.0,'DM','A','S','N','Beginner'),(3.0,'F','B',2.0,'DM','A','S','O','Beginner'),(3.0,'NA','I',3.0,'DM','L','O','N','Beginner'),(3.0,'M','B',1.0,'DM','A','O','N','Beginner'),(3.0,'F','B',3.0,'O','L','O','O','Beginner'),(3.0,'F','I',1.0,'ND','H','O','S','Beginner'),(1.0,'M','I',3.0,'ND','H','S','S','Intermediate'),(1.0,'NA','I',1.0,'O','H','N','O','Intermediate'),(1.0,'NA','B',2.0,'O','A','O','N','Intermediate'),(1.0,'M','B',3.0,'ND','A','O','O','Intermediate'),(1.0,'NA','B',3.0,'O','H','O','S','Intermediate'),(1.0,'N','A',1.0,'O','A','S','O','Intermediate'),(2.0,'F','I',3.0,'O','H','S','O','Advanced'),(2.0,'NA','I',2.0,'ND','L','N','S','Advanced'),(2.0,'F','A',3.0,'DM','L','O','N','Advanced'),(2.0,'F','A',1.0,'O','H','S','S','Advanced'),(2.0,'M','I',2.0,'ND','H','S','S','Advanced');

select * from profesores;


CREATE TABLE `sexo_estilo` (
  `Sexo` varchar(1) DEFAULT NULL,
  `Recinto` varchar(9) DEFAULT NULL,
  `Promedio` varchar(4) DEFAULT NULL,
  `CA` tinyint(4) DEFAULT NULL,
  `EC` tinyint(4) DEFAULT NULL,
  `EA` tinyint(4) DEFAULT NULL,
  `OR` tinyint(4) DEFAULT NULL,
  `CA-EC` smallint(6) DEFAULT NULL,
  `EA-OR` smallint(6) DEFAULT NULL,
  `Estilo` varchar(11) DEFAULT NULL
) ;

INSERT INTO `sexo_estilo` VALUES ('M','Paraiso','8.17',15,15,19,12,0,7,'ACOMODADOR'),('M','Paraiso','6.33',16,17,18,19,-1,-1,'DIVERGENTE'),('M','Paraiso','7.07',15,13,17,17,2,0,'DIVERGENTE'),('M','Turrialba','6.6',19,13,13,20,6,-7,'ASIMILADOR'),('F','Turrialba','7.77',19,11,14,17,8,-3,'ASIMILADOR'),('M','Turrialba','7.87',18,12,21,14,6,7,'CONVERGENTE'),('F','Paraiso','7.53',11,19,16,16,-8,0,'DIVERGENTE'),('M','Paraiso','7',19,14,19,18,5,1,'ASIMILADOR'),('M','Paraiso','8',16,17,16,15,-1,1,'DIVERGENTE'),('M','Paraiso','7.9',19,11,19,17,8,2,'ASIMILADOR'),('M','Turrialba','7.5',19,16,13,16,3,-3,'ASIMILADOR'),('M','Paraiso','7',13,14,21,13,-1,8,'ACOMODADOR'),('F','Paraiso','7.4',21,14,12,18,7,-6,'ASIMILADOR'),('M','Paraiso','7.41',16,15,18,19,1,-1,'DIVERGENTE'),('F','Paraiso','7.2',18,10,22,13,8,9,'CONVERGENTE'),('M','Turrialba','8.5',17,15,13,18,2,-5,'DIVERGENTE'),('F','Paraiso','7.82',15,17,19,15,-2,4,'ACOMODADOR'),('M','Turrialba','7.54',20,15,15,12,5,3,'CONVERGENTE'),('M','Turrialba','8.41',17,15,15,17,2,-2,'DIVERGENTE'),('M','Turrialba','8.11',12,17,12,21,-5,-9,'DIVERGENTE'),('F','Paraiso','7.25',21,10,11,23,11,-12,'ASIMILADOR'),('M','Paraiso','8.06',17,13,19,14,4,5,'CONVERGENTE'),('M','Turrialba','7.75',11,15,20,16,-4,4,'ACOMODADOR'),('M','Turrialba','7.09',13,15,22,13,-2,9,'ACOMODADOR'),('M','Paraiso','6.14',17,13,16,15,4,1,'ASIMILADOR'),('M','Paraiso','7.72',17,13,21,14,4,7,'CONVERGENTE'),('M','Paraiso','7.68',15,16,13,17,-1,-4,'DIVERGENTE'),('F','Paraiso','7.5',16,11,20,12,5,8,'CONVERGENTE'),('M','Turrialba','7.94',14,15,15,17,-1,-2,'DIVERGENTE'),('M','Paraiso','7.86',18,11,21,18,7,3,'CONVERGENTE'),('M','Turrialba','6.62',14,11,18,15,3,3,'CONVERGENTE'),('M','Turrialba','8.13',16,17,14,21,-1,-7,'DIVERGENTE'),('F','Turrialba','6.88',17,13,22,11,4,11,'CONVERGENTE'),('F','Paraiso','8.5',16,15,18,15,1,3,'ACOMODADOR'),('F','Paraiso','7',19,18,20,11,1,9,'ACOMODADOR'),('M','Turrialba','7.83',12,15,16,18,-3,-2,'DIVERGENTE'),('M','Turrialba','7.13',9,21,18,17,-12,1,'DIVERGENTE'),('M','Paraiso','7.63',18,11,17,14,7,3,'CONVERGENTE'),('M','Paraiso','8.06',10,17,17,17,-7,0,'DIVERGENTE'),('M','Paraiso','7.72',16,14,19,14,2,5,'ACOMODADOR'),('M','Turrialba','8.63',19,12,18,15,7,3,'CONVERGENTE'),('F','Paraiso','7.32',17,13,20,13,4,7,'CONVERGENTE'),('M','Turrialba','7.25',17,14,16,18,3,-2,'ASIMILADOR'),('M','Turrialba','7.72',20,13,11,19,7,-8,'ASIMILADOR'),('M','Paraiso','7.39',10,15,16,19,-5,-3,'DIVERGENTE'),('M','Paraiso','7.78',20,12,18,12,8,6,'CONVERGENTE'),('M','Paraiso','7.62',19,17,15,18,2,-3,'DIVERGENTE'),('M','Turrialba','8',16,12,14,19,4,-5,'ASIMILADOR'),('M','Turrialba','8.83',17,13,16,15,4,1,'ASIMILADOR'),('M','Paraiso','8.5',15,12,14,23,3,-9,'ASIMILADOR'),('M','Turrialba','8',11,16,17,19,-5,-2,'DIVERGENTE'),('M','Turrialba','8.06',17,12,21,15,5,6,'CONVERGENTE'),('M','Turrialba','7.14',19,14,21,9,5,12,'CONVERGENTE'),('M','Turrialba','7.44',15,14,17,15,1,2,'DIVERGENTE'),('M','Turrialba','8',20,10,18,12,10,6,'CONVERGENTE'),('M','Turrialba','7.75',14,18,13,14,-4,-1,'DIVERGENTE'),('M','Paraiso','7.34',15,16,12,20,-1,-8,'DIVERGENTE'),('M','Paraiso','7.33',18,14,13,17,4,-4,'ASIMILADOR'),('M','Turrialba','',18,14,17,18,4,-1,'asimilador'),('M','Turrialba','7.84',17,14,12,18,3,-6,'ASIMILADOR'),('M','Paraiso','8.29',19,8,12,21,11,-9,'ASIMILADOR'),('M','Paraiso','8.79',20,15,15,15,5,0,'ASIMILADOR'),('M','Paraiso','7.5',7,19,19,15,-12,4,'ACOMODADOR'),('M','Turrialba','8.39',19,11,21,12,8,9,'CONVERGENTE'),('M','Paraiso','7.43',21,10,20,10,11,10,'CONVERGENTE'),('M','Paraiso','8.43',14,9,24,14,5,10,'CONVERGENTE'),('M','Turrialba','7.8',17,14,18,14,3,4,'CONVERGENTE'),('M','Turrialba','7.2',12,15,18,14,-3,4,'ACOMODADOR'),('M','Turrialba','7.3',17,13,17,16,4,1,'ASIMILADOR'),('F','Paraiso','9',17,11,18,18,6,0,'ASIMILADOR'),('M','Turrialba','6.57',14,14,20,13,0,7,'ACOMODADOR'),('F','Turrialba','7.63',14,16,20,13,-2,7,'ACOMODADOR'),('M','Turrialba','8.83',17,13,20,16,4,4,'CONVERGENTE'),('M','Turrialba','7.69',13,14,16,15,-1,1,'DIVERGENTE'),('M','Paraiso','7',18,12,17,16,6,1,'ASIMILADOR'),('M','Turrialba','8.23',14,16,19,15,-2,4,'ACOMODADOR'),('M','Turrialba','8.64',11,15,18,14,-4,4,'ACOMODADOR');

select * from sexo_estilo;
select * from estilo_recinto;
DELIMITER $$
create procedure sp_get_estilo_recinto()
begin
SELECT `estilo_recinto`.`Recinto`,
    `estilo_recinto`.`CA`,
    `estilo_recinto`.`EC`,
    `estilo_recinto`.`EA`,
    `estilo_recinto`.`OR`,
    `estilo_recinto`.`CA-EC`,
    `estilo_recinto`.`EA-OR`,
     case Estilo
    when 'ACOMODADOR' then 0
    when 'DIVERGENTE' then 1
    when 'CONVERGENTE' then 2
    when 'ASIMILADOR' then 3
   end  as Estilo
FROM `if7103_b60315`.`estilo_recinto`;
end
$$

call sp_get_estilo_recinto()

DELIMITER $$
create procedure sp_get_sexo_estilo()
begin
SELECT IF(Sexo = 'M', 0, 1) as Sexo,
    IF(Recinto = 'Paraiso', 1, 0) as Recinto,
    IF(Promedio = '', 0, Promedio) as Promedio,
    case Estilo
    when 'ACOMODADOR' then 0
    when 'DIVERGENTE' then 1
    when 'CONVERGENTE' then 2
    when 'ASIMILADOR' then 3
   end  as Estilo
FROM `if7103_b60315`.`sexo_estilo`;
end
$$

call sp_get_sexo_estilo()

DELIMITER $$
create procedure sp_get_profesores()
begin
SELECT truncate(A,0) as A,
    case B
		when 'F' then 1
		when 'M' then 2
		when 'NA' then 3
        else 3
	end  as B,
    case C
		when 'B' then 1
		when 'I' then 2
		when 'A' then 3
	end  as C,
    truncate(D,0) as D,
    case E
		when 'DM' then 1
		when 'ND' then 2
		when 'O' then 3
	end  as E,
    case F
		when 'L' then 1
		when 'A' then 2
		when 'H' then 3
	end  as F,
    case G
		when 'N' then 1
		when 'S' then 2
		when 'O' then 3
	end  as G,
    case H
		when 'N' then 1
		when 'S' then 2
		when 'O' then 3
	end  as H,
    case Class
		when 'Beginner' then 1
		when 'Intermediate' then 2
		when 'Advanced' then 3
	end  as Class
FROM `if7103_b60315`.`profesores`;
end
$$

call sp_get_profesores();

DELIMITER $$
create procedure sp_get_redes()
begin
SELECT 
    `redes`.`Reliability (R)` as RE,
    `redes`.`Number of links (L)` as LI,
    case `Capacity (Ca)`
		when 'Low' then 1
		when 'Medium' then 2
		when 'High' then 3
	end  as CA,
    case `Costo (Co)`
		when 'Low' then 1
		when 'Medium' then 2
		when 'High' then 3
	end  as CO,
    case Class
		when 'A' then 1
		when 'B' then 2
	end  as Class
FROM `if7103_b60315`.`redes`;
end
$$

call sp_get_redes()