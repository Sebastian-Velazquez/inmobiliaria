CREATE DATABASE IF NOT EXISTS inmobiliaria;
USE inmobiliaria;

#Tpes Of Property
CREATE TABLE IF NOT EXISTS type_property(
    id int(255) auto_increment not null,
    name varchar(100) not null,
    created_at datetime,
    updated_at datetime,
    CONSTRAINT pk_type_property PRIMARY KEY(id) 
)ENGINE=InnoDb;

#Statuses
CREATE TABLE IF NOT EXISTS status(
    id int(255) auto_increment not null,
    name varchar(100) not null,
    created_at datetime,
    updated_at datetime,
    CONSTRAINT pk_status PRIMARY KEY(id) 
)ENGINE=InnoDb;

#Operations
CREATE TABLE IF NOT EXISTS operation(
    id int(255) auto_increment not null,
    name varchar(100) not null,
    created_at datetime,
    updated_at datetime,
    CONSTRAINT pk_operation PRIMARY KEY(id) 
)ENGINE=InnoDb;

#Images
CREATE TABLE IF NOT EXISTS images(
    id int(255) auto_increment not null,
    image_path varchar(255) default 'image.png',
    CONSTRAINT pk_image PRIMARY KEY(id) 
)ENGINE=InnoDb;


#Properties
CREATE TABLE IF NOT EXISTS property(
    id int(255) auto_increment not null,
    id_type_property int(255) not null,
    id_image_path int(255),
    id_status int(255) not null,
    id_operation int(255) not null,
    adress varchar(255) not null,
    price int(100)  not null,
    adress_number int(10) not null,
    dimension varchar(100),
    room_number int(10) not null,
    bathroom_number int(10) not null,
    yard boolean null,
    pool boolean null,
    garage boolean null,
    gas boolean null,
    light boolean null,
    expenses boolean null,
    kinchen boolean null,
    dining_room boolean null,
    description text null,
    created_at datetime,
    updated_at datetime,
    CONSTRAINT pk_property PRIMARY KEY(id), 
    FOREIGN KEY (id_type_property) REFERENCES type_property(id),
    FOREIGN KEY (id_status) REFERENCES status(id),
    FOREIGN KEY (id_operation) REFERENCES operation(id),
    FOREIGN KEY (id_image_path) REFERENCES images(id)
)ENGINE=InnoDb;
