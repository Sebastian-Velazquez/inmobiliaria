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

#Properties
CREATE TABLE IF NOT EXISTS property(
    id int(255) auto_increment not null,
    id_type_property int(255) not null,
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
    stand_out boolean default 0,
    created_at datetime,
    updated_at datetime,
    CONSTRAINT pk_property PRIMARY KEY(id), 
    CONSTRAINT pk_type_property FOREIGN KEY (id_type_property) REFERENCES type_property(id),
    CONSTRAINT pk_id_status FOREIGN KEY (id_status) REFERENCES status(id),
    CONSTRAINT pk_id_operation FOREIGN KEY (id_operation) REFERENCES operation(id)
)ENGINE=InnoDb;

#Images
CREATE TABLE IF NOT EXISTS image(
    id int(255) auto_increment not null,
    id_property int(255) not null,
    image_path varchar(255) default 'image.png',
    created_at datetime,
    updated_at datetime,
    CONSTRAINT pk_image PRIMARY KEY(id) ,
    CONSTRAINT pk_id_property FOREIGN KEY (id_property) REFERENCES property(id)
)ENGINE=InnoDb;


#Cargar información 
    #Tipo de Propiedad
    INSERT INTO type_property VALUE (null, 'Casa', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO type_property VALUE (null, 'Departamento', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO type_property VALUE (null, 'Galpon', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO type_property VALUE (null, 'Local', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO type_property VALUE (null, 'Terreno', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );

    #Tipo de Estado 
    INSERT INTO status VALUE (null, 'Disponible', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO status VALUE (null, 'No disponible', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );

    #Tipo de operacion
    INSERT INTO operation VALUE (null, 'Alquiler', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO operation VALUE (null, 'Venta', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );

    #Propertys
    INSERT INTO property (id, id_type_property, id_status, id_operation, adress, adress_number, price, room_number, bathroom_number, created_at, updated_at)
    VALUE (null, 1, 1, 1, 'alberdi', 2355, 30500, 1, 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
    INSERT INTO property (id, id_type_property, id_status, id_operation, adress, adress_number, price, room_number, bathroom_number, created_at, updated_at)
    VALUE (null, 4, 2, 2, 'Roca', 2355, 30500, 1, 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
    INSERT INTO property (id, id_type_property, id_status, id_operation, adress, adress_number, price, room_number, bathroom_number, created_at, updated_at)
    VALUE (null, 2, 2, 1, 'Garray', 2355, 30500, 1, 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
    INSERT INTO property (id, id_type_property, id_status, id_operation, adress, adress_number, price, room_number, bathroom_number, created_at, updated_at)
    VALUE (null, 3, 1, 1, 'Ruta 21', 2355, 30500, 1, 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

    #Nombre de image
    INSERT INTO image VALUE (null, 1, 'image.jpg', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO image VALUE (null, 1, 'image.jpg', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO image VALUE (null, 2, 'image.jpg', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO image VALUE (null, 3,'image.jpg', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );