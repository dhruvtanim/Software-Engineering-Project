create table if not exists registration (id tinyint unsigned auto_increment,firstname varchar(150), 
lastname varchar(200),password varchar(50),bloodgroup varchar(40), phonenumber varchar(30),
address varchar(10),primary key (id));


create table if not exists  patientprofile (id tinyint unsigned auto_increment,information varchar(150),
 services varchar(40), history varchar(30),feedback varchar(10),primary key (id));


create table if not exists services (id tinyint unsigned auto_increment,call_ambulance varchar(150),
 purchase_medication varchar(40), hire_a_nurse varchar(30), primary key (id));



create table if not exists payment (id tinyint unsigned auto_increment,pau_instance varchar(150),
 bkash varchar(40), credit_debit varchar(30),loan varchar(10),primary key (id));