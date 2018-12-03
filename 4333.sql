create table Employee (
    ID int AUTO_INCREMENT,
    name varchar(255) default NULL,
    address varchar(255) default NULL,
    phone_num varchar(255) default NULL,
    PRIMARY KEY(ID)
);

create table Truck (
    plate varchar(255),
    brand varchar(255) default NULL,
  	PRIMARY KEY(plate)
);

create table Car (
    plate varchar(255),
    brand varchar(255),
    color varchar(255),
    impounded boolean,
    serviced boolean,
    PRIMARY KEY(plate)
);

create table Person(
    name varchar(255),
    address varchar(255),
    phone_number varchar(255),
    PRIMARY KEY(name)
);

create table Ticket(
    ID int AUTO_INCREMENT,
    reason varchar(255),
    description varchar(255),
    date_paid varchar(255),
    time_paid varchar(255),
    PRIMARY KEY (ID)
);

/* Relational */

create table Drives (
    truck_plate varchar(255),
    e_id int,
    FOREIGN KEY(truck_plate) REFERENCES Truck(plate),
    FOREIGN KEY(e_id) REFERENCES Employee(ID)
);

create table Owns (
    car_plate varchar(255),
    person_name varchar(255),
    FOREIGN KEY(car_plate) REFERENCES Car(plate),
    FOREIGN KEY(person_name) REFERENCES Person(name)
);

create table Impounded (
    car_plate varchar(255),
    ticket_id int,
    impounded boolean,
    picked boolean,
    FOREIGN KEY(car_plate) REFERENCES Car(plate),
    FOREIGN KEY(ticket_id) REFERENCES Ticket(ID)
);

create table Serviced (
    car_plate varchar(255),
    ticket_id int,
    serviced boolean,
    FOREIGN KEY(car_plate) REFERENCES Car(plate),
    FOREIGN KEY(ticket_id) REFERENCES Ticket(ID)
);

create table Towed (
    truck_plate varchar(255),
    car_plate varchar(255),
    init_loc varchar(255),
    final_loc varchar(255),
    date DATE,
    time varchar(255),
    FOREIGN KEY(truck_plate) REFERENCES Truck(plate),
    FOREIGN KEY(car_plate) REFERENCES Car(plate),
    PRIMARY KEY (car_plate)
);

create table Transacted (
    e_id int,
    car_plate varchar(255),
    amount_due varchar(255),
    FOREIGN KEY(e_id) REFERENCES Employee(ID),
    FOREIGN KEY(car_plate) REFERENCES Car(plate),
    PRIMARY KEY(car_plate)
);

