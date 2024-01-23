#Create Database
CREATE DATABASE IF NOT EXISTS inmobiliaria;
USE inmobiliaria;

#Tpes Of Property
CREATE TABLE IF NOT EXISTS type_properties(
    id int(255) auto_increment not null,
    name varchar(100) not null,
    created_at datetime default CURRENT_TIMESTAMP not null,
    updated_at datetime,
    CONSTRAINT pk_type_property PRIMARY KEY(id) 
)ENGINE=InnoDb;

#Statuses
CREATE TABLE IF NOT EXISTS status(
    id int(255) auto_increment not null,
    name varchar(100) not null,
    created_at datetime default CURRENT_TIMESTAMP not null,
    updated_at datetime,
    CONSTRAINT pk_status PRIMARY KEY(id) 
)ENGINE=InnoDb;

#Operations
CREATE TABLE IF NOT EXISTS operations(
    id int(255) auto_increment not null,
    name varchar(100) not null,
    created_at datetime default CURRENT_TIMESTAMP not null,
    updated_at datetime,
    CONSTRAINT pk_operation PRIMARY KEY(id) 
)ENGINE=InnoDb;

#Ciudades
CREATE TABLE IF NOT EXISTS cities(
    id int(255) auto_increment not null,
    name varchar(100) not null,
    created_at datetime default CURRENT_TIMESTAMP not null,
    updated_at datetime,
    CONSTRAINT pk_city PRIMARY KEY(id)
)ENGINE=InnoDb;

#Properties
CREATE TABLE IF NOT EXISTS properties(
    id int(255) auto_increment not null,
    type_property_id int(255) not null,
    status_id int(255) not null,
    operation_id int(255) not null,
    adress varchar(255) not null,
    adress_number int(10) not null,
    price int(100)  not null,
    maps text null,
    city_id int(255) not null,
    main_image varchar(255) default 'main.png',
    dimension varchar(100) null,
    room_number int(10) not null,#habitaciones
    bathroom_number int(10) not null,#baños
    description text null,
    dining_room boolean null, #comedor
    stand_out boolean default 0, #destacado
    yard boolean null, #patio
    pool boolean null, #piscina
    garage boolean null,
    gas boolean null,
    expenses boolean null,
    kitchen boolean null,  #cocina
    created_at datetime default CURRENT_TIMESTAMP not null,
    updated_at datetime,
    view_property int(10) default 0;
    CONSTRAINT pk_property PRIMARY KEY(id), 
    CONSTRAINT pk_type_property FOREIGN KEY (type_property_id) REFERENCES type_properties(id),
    CONSTRAINT pk_status_id FOREIGN KEY (status_id) REFERENCES status(id),
    CONSTRAINT pk_operation_id FOREIGN KEY (operation_id) REFERENCES operations(id),
    CONSTRAINT pk_city_id FOREIGN KEY (city_id) REFERENCES cities(id)
)ENGINE=InnoDb;

#Images
CREATE TABLE IF NOT EXISTS images(
    id int(255) auto_increment not null,
    property_id int(255) not null,
    image_path varchar(255) default 'image.png',
    created_at datetime default CURRENT_TIMESTAMP not null,
    updated_at datetime,
    CONSTRAINT pk_image PRIMARY KEY(id) ,
    CONSTRAINT pk_id_property FOREIGN KEY (property_id) REFERENCES properties(id)
)ENGINE=InnoDb;

#Mensajes
CREATE TABLE IF NOT EXISTS messages(
    id int(255) auto_increment not null,
    name varchar(255) not null,
    email varchar(255) not null,
    phone_number BIGINT null,
    message varchar(255) not null,
    status int(255) default 0,
    created_at datetime default CURRENT_TIMESTAMP not null,
    updated_at datetime,
    CONSTRAINT pk_message PRIMARY KEY(id)
)ENGINE=InnoDb;

#Cargar información 
    #Tipo de Propiedad
    INSERT INTO type_properties VALUE (null, 'Casa', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO type_properties VALUE (null, 'Departamento', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO type_properties VALUE (null, 'Galpon', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO type_properties VALUE (null, 'Local', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO type_properties VALUE (null, 'Terreno', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );

    #Tipo de Estado 
    INSERT INTO status VALUE (null, 'Disponible', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO status VALUE (null, 'No disponible', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO status VALUE (null, 'Eliminado', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );

    #Tipo de operacion
    INSERT INTO operations VALUE (null, 'Alquiler', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO operations VALUE (null, 'Venta', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );

    #Tipo de Images
    INSERT INTO cities VALUE (null, 'Rosario', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO cities VALUE (null, 'Villa Gdor', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO cities VALUE (null, 'Fighiera', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO cities VALUE (null, 'Pueblo Esther', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO cities VALUE (null, 'Alvear', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO cities VALUE (null, 'Arroyo Seco', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO cities VALUE (null, 'General Lagos', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );

    #Propiedades
    INSERT INTO properties (id, type_property_id, status_id, operation_id, adress, adress_number, price, room_number, bathroom_number, city_id, created_at, updated_at)
    VALUE (null, 1, 1, 1, 'alberdi', 2355, 30500, 1, 2, 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
    INSERT INTO properties (id, type_property_id, status_id, operation_id, adress, adress_number, price, room_number, bathroom_number, city_id, created_at, updated_at)
    VALUE (null, 4, 2, 2, 'Roca', 2355, 30500, 1, 2, 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
    INSERT INTO properties (id, type_property_id, status_id, operation_id, adress, adress_number, price, room_number, bathroom_number, city_id, created_at, updated_at)
    VALUE (null, 2, 2, 1, 'Garray', 2355, 30500, 1, 2, 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
    INSERT INTO properties (id, type_property_id, status_id, operation_id, adress, adress_number, price, room_number, bathroom_number, city_id, created_at, updated_at)
    VALUE (null, 3, 1, 1, 'Ruta 21', 2355, 30500, 1, 2, 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

    #Nombre de image
    INSERT INTO images VALUE (null, 1, 'images.jpg', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO images VALUE (null, 1, 'images.jpg', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO images VALUE (null, 2, 'images.jpg', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    INSERT INTO images VALUE (null, 3,'image.jpg', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP );
    
    #Tipo de estado de mesajes 
    INSERT INTO messages VALUE(null, 'No Leido', 'email',3402558789,'Hola',0,CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
    INSERT INTO messages VALUE(null, 'Leido', 'email',341123456,'Hola', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);