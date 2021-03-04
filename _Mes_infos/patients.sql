#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `hospitalE2N` CHARACTER SET 'utf8';
USE `hospitalE2N`;

#------------------------------------------------------------
# Table: patients
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `patients`(
        `id`        INT (11) AUTO_INCREMENT  NOT NULL ,
        `lastname`  VARCHAR (25) NOT NULL ,
        `firstname` VARCHAR (25) NOT NULL ,
        `birthdate` DATE NOT NULL ,
        `phone`     VARCHAR (25) ,
        `mail`      VARCHAR (100) NOT NULL ,
        PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: appointments
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `appointments`(
        `id`         INT (11) AUTO_INCREMENT  NOT NULL ,
        `dateHour`   DATETIME NOT NULL ,
        `idPatients` INT (11) NOT NULL ,
        PRIMARY KEY (`id`)
)ENGINE=InnoDB;

ALTER TABLE `appointments` ADD CONSTRAINT FK_appointments_id_patients FOREIGN KEY (`idPatients`) REFERENCES `patients`(`id`);

 INSERT INTO patients (id, firstname, lastname, birthdate, phone, mail) 
 VALUES  
 (51, 'Harold', 'Jones', '2090/03/20', '0612121212', 'Harold.Jones@yayoo.com'),  
 (49, 'Christine', 'Smith', '2091/04/21', '0634343434', 'Christine.Smith@laposte.net'),  
 (48, 'Angela', 'Marker', '2092/05/22', '0656565656', 'Marker.Angela@gmail.com'),  
 (57, 'Romeo', 'Mary', '2094/06/23', '0678787878', 'Romeo.Mary@yayoo.com'),   
 (36, 'John', 'Smith', '2095/07/24', '0690909090', 'Smith.John@laposte.net'); 