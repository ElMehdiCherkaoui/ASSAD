-- Active: 1765134969045@@localhost@3306@assad
CREATE DATABASE IF NOT EXISTS assad;

USE assad;

CREATE TABLE Habitats (
    Hab_id INT AUTO_INCREMENT PRIMARY KEY,
    habitatsName VARCHAR(100) NOT NULL,
    typeClimat VARCHAR(20) NOT NULL,
    descriptionHab TEXT,
    zoo_zone VARCHAR(255)
);

CREATE TABLE Animal (
    Ani_id INT AUTO_INCREMENT PRIMARY KEY,
    animalName VARCHAR(100) NOT NULL,
    espèce VARCHAR(20) NOT NULL,
    alimentation VARCHAR(50) NOT NULL,
    Image VARCHAR(255),
    paysOrigine VARCHAR(50),
    descriptionCourte VARCHAR(100),
    Habitat_ID INT,
    FOREIGN KEY (Habitat_ID) REFERENCES Habitats (Hab_id)
);

CREATE TABLE users (
    Users_id INT AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(100) NOT NULL,
    userEmail VARCHAR(100) NOT NULL UNIQUE,
    userRole VARCHAR(50),
    password_hash VARCHAR(255) NOT NULL,
    userStatus VARCHAR(20)
);

CREATE TABLE visitesGuidees (
    guided_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    date_time DATETIME,
    languages VARCHAR(50) NOT NULL,
    max_capacity INT NOT NULL,
    duree INT,
    price INT NOT NULL,
    statut VARCHAR(50) NOT NULL,
    user_guide_id INT,
    FOREIGN KEY (user_guide_id) REFERENCES users (Users_id)
);

CREATE TABLE etapesvisite (
    step_id INT AUTO_INCREMENT PRIMARY KEY,
    step_title VARCHAR(100) NOT NULL,
    step_description TEXT,
    step_order INT,
    guid_tour_id INT,
    FOREIGN KEY (guid_tour_id) REFERENCES visitesGuidees (guided_id)
);

CREATE TABLE userComments (
    comments_id INT AUTO_INCREMENT PRIMARY KEY,
    tours_id_comment_fk INT,
    user_id_comment_fk INT,
    rating INT,
    text TEXT,
    date_commentaire DATE DEFAULT CURRENT_DATE,
    FOREIGN KEY (user_id_comment_fk) REFERENCES users (Users_id),
    FOREIGN KEY (tours_id_comment_fk) REFERENCES visitesGuidees (guided_id)
);

CREATE TABLE userReservations (
    reservation_id INT AUTO_INCREMENT PRIMARY KEY,
    tour_id_reservation_fk INT,
    user_id_reservation_fk INT,
    number_of_people INT,
    reservation_date DATETIME,
    FOREIGN KEY (tour_id_reservation_fk) REFERENCES visitesGuidees (guided_id),
    FOREIGN KEY (user_id_reservation_fk) REFERENCES users (Users_id)
);

INSERT INTO
    Habitats (
        habitatsName,
        typeClimat,
        descriptionHab,
        zoo_zone
    )
VALUES (
        'Savannah',
        'Tropical',
        'Open grassy plains with scattered trees, ideal for lions, elephants, and giraffes.',
        'Zone A'
    ),
    (
        'Antarctic Zone',
        'Polar',
        'Cold habitat with ice and snow, suitable for penguins and seals.',
        'Zone B'
    ),
    (
        'Australian Outback',
        'Arid',
        'Dry desert-like area for kangaroos, emus, and reptiles.',
        'Zone C'
    ),
    (
        'Rainforest',
        'Tropical',
        'Dense forest with high humidity, home to monkeys, parrots, and snakes.',
        'Zone D'
    ),
    (
        'Reptile House',
        'Controlled',
        'Indoor habitat with temperature and humidity control for snakes, lizards, and turtles.',
        'Zone E'
    );

INSERT INTO
    Animal (
        animalName,
        espèce,
        alimentation,
        Image,
        paysOrigine,
        descriptionCourte,
        Habitat_ID
    )
VALUES (
        'Lion',
        'Mammal',
        'Carnivore',
        'lion.jpg',
        'Kenya',
        'King of the jungle',
        1
    ),
    (
        'Penguin',
        'Bird',
        'Carnivore',
        'penguin.jpg',
        'Antarctica',
        'Cute swimming bird',
        2
    ),
    (
        'Elephant',
        'Mammal',
        'Herbivore',
        'elephant.jpg',
        'India',
        'Largest land animal',
        1
    ),
    (
        'Kangaroo',
        'Mammal',
        'Herbivore',
        'kangaroo.jpg',
        'Australia',
        'Jumps high',
        3
    ),
    (
        'Cobra',
        'Reptile',
        'Carnivore',
        'cobra.jpg',
        'India',
        'Venomous snake',
        4
    );

INSERT INTO

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

INSERT INTO
    users (
        userName,
        userEmail,
        userRole,
        password_hash,
        userStatus
    )
VALUES (
        'Admin',
        'admin@assad.com',
        'Admin',
        '$2y$10$i6eS8Vz1f3JcrE/RD48z4OQvo8wTJpjbqtJ4mvJyD.tWFygC2j2Z6', --AdminMestry123
        'Active'
    ),
    (
        'Mehdi Cherkaoui',
        'MehdiCherkaoui@youcode.com',
        'Guide',
        '$2y$10$rCyjRVyo5b00HXr1ILr3/OmBOwp3y0Tg4388LDUj7sV7ZzgX.sNG.', --GuideMestry123
        'Active'
    ),
    (
        'Mestry',
        'Mestry@gmail.com',
        'Visiteur',
        '$2y$10$sALOlus81zV7tQCTWlRadO.ExPJRsuaOGy9fbhACy7NgHh0AMaoWO', --  
        'Active'
    );

select * from visitesGuidees WHERE user_guide_id = 11;