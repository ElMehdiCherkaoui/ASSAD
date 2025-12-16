-- Active: 1765134969045@@localhost@3306@assad
CREATE DATABASE IF NOT EXISTS assad;

USE assad;

CREATE TABLE Habitats (
    Hab_id INT AUTO_INCREMENT PRIMARY KEY,
    habitatsName VARCHAR(100) NOT NULL,
    climateType VARCHAR(20) NOT NULL,
    descriptionHab TEXT,
    zoo_zone VARCHAR(255)
);

CREATE TABLE Animal (
    Ani_id INT AUTO_INCREMENT PRIMARY KEY,
    animalName VARCHAR(100) NOT NULL,
    species VARCHAR(20) NOT NULL,
    Image VARCHAR(255),
    country_origin VARCHAR(50),
    Habitat_ID INT,
    FOREIGN KEY (Habitat_ID) REFERENCES Habitats (Hab_id)
);

CREATE TABLE users (
    Users_id INT AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(100) NOT NULL,
    userEmail VARCHAR(100) NOT NULL UNIQUE,
    userRole VARCHAR(50),
    password_hash VARCHAR(255) NOT NULL
);

CREATE TABLE guidedTours (
    guided_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    date_time DATETIME,
    languages VARCHAR(50) NOT NULL,
    max_capacity INT NOT NULL,
    price INT NOT NULL,
    user_guide_id INT,
    FOREIGN KEY (user_guide_id) REFERENCES users (Users_id)
);

CREATE TABLE tourSteps (
    step_id INT AUTO_INCREMENT PRIMARY KEY,
    step_title VARCHAR(100) NOT NULL,
    step_order INT,
    guid_tour_id INT,
    FOREIGN KEY (guid_tour_id) REFERENCES guidedTours (guided_id)
);

CREATE TABLE userComments (
    comments_id INT AUTO_INCREMENT PRIMARY KEY,
    tours_id_comment_fk INT,
    user_id_comment_fk INT,
    rating INT,
    text TEXT,
    FOREIGN KEY (user_id_comment_fk) REFERENCES users (Users_id),
    FOREIGN KEY (tours_id_comment_fk) REFERENCES guidedTours (guided_id)
);

CREATE TABLE reservations (
    reservation_id INT AUTO_INCREMENT PRIMARY KEY,
    tour_id_reservation_fk INT,
    user_id_reservation_fk INT,
    number_of_people INT,
    reservation_date DATETIME,
    FOREIGN KEY (tour_id_reservation_fk) REFERENCES guidedTours (guided_id),
    FOREIGN KEY (user_id_reservation_fk) REFERENCES users (Users_id)
);

INSERT INTO
    Habitats (
        habitatsName,
        climateType,
        descriptionHab,
        zoo_zone
    )
VALUES (
        'Atlas Mountains',
        'Mountain',
        'Home of the Atlas Lions.',
        'North Zone'
    ),
    (
        'African Savanna',
        'Savanna',
        'Large open grasslands for African herbivores.',
        'East Zone'
    ),
    (
        'Rainforest',
        'Tropical',
        'Dense forest area for monkeys and exotic birds.',
        'South Zone'
    );

INSERT INTO
    Animal (
        animalName,
        species,
        Image,
        country_origin,
        Habitat_ID
    )
VALUES (
        'Asaad',
        'Atlas Lion',
        'atlas_lion.jpg',
        'Morocco',
        1
    ),
    (
        'Elephant',
        'African Elephant',
        'elephant.jpg',
        'Kenya',
        2
    ),
    (
        'Giraffe',
        'Giraffa camelopardalis',
        'giraffe.jpg',
        'Tanzania',
        2
    ),
    (
        'Chimpanzee',
        'Pan troglodytes',
        'chimpanzee.jpg',
        'Congo',
        3
    ),
    (
        'Toucan',
        'Ramphastos',
        'toucan.jpg',
        'Cameroon',
        3
    );

INSERT INTO
    users (
        userName,
        userEmail,
        userRole,
        password_hash
    )
VALUES (
        'Admin',
        'admin@assad.com',
        'Admin',
        '$2y$10$examplehashforadmin'
    ),
    (
        'John Doe',
        'johndoe@gmail.com',
        'Guide',
        '$2y$10$examplehashforjohn'
    ),
    (
        'Jane Smith',
        'janesmith@gmail.com',
        'Visitor',
        '$2y$10$examplehashforjane'
    );

INSERT INTO
    guidedTours (
        title,
        date_time,
        languages,
        max_capacity,
        price,
        user_guide_id
    )
VALUES (
        'Atlas Lion Experience',
        '2025-06-20 10:00:00',
        'English, French',
        10,
        50,
        2
    ),
    (
        'African Safari Adventure',
        '2025-06-21 14:00:00',
        'English',
        15,
        75,
        2
    );

INSERT INTO
    tourSteps (
        step_title,
        step_order,
        guid_tour_id
    )
VALUES ('Lion Habitat', 1, 1),
    ('Savanna Exploration', 2, 1),
    ('Elephant Zone', 1, 2),
    ('Giraffe Zone', 2, 2),
    ('Rainforest Walk', 3, 2);

INSERT INTO
    reservations (
        tour_id_reservation_fk,
        user_id_reservation_fk,
        number_of_people,
        reservation_date
    )
VALUES (
        1,
        3,
        2,
        '2025-06-10 09:00:00'
    ),
    (
        2,
        3,
        1,
        '2025-06-11 12:00:00'
    );

INSERT INTO
    userComments (
        tours_id_comment_fk,
        user_id_comment_fk,
        rating,
        text
    )
VALUES (
        1,
        3,
        5,
        'Amazing experience with the Atlas Lion!'
    ),
    (
        2,
        3,
        4,
        'Loved the safari, but it was a bit crowded.'
    );

    ALTER TABLE users
ADD userStatus VARCHAR(20) DEFAULT 'Pending';
