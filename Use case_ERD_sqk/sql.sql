CREATE DATABASE assad;
USE assad;


CREATE TABLE animaux (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    espece VARCHAR(100) NOT NULL,
    alimentation VARCHAR(100) NOT NULL,
    image VARCHAR(300) NOT NULL,
    paysorigine VARCHAR(100) NOT NULL,
    descriptioncourte VARCHAR(300) NOT NULL,
    id_habitat INT,
    FOREIGN KEY (id_habitat) REFERENCES habitats(id)
);

CREATE TABLE habitats (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nom VARCHAR(100), 
    typeclimat VARCHAR(100), 
    description VARCHAR(300), 
    zonezoo VARCHAR(100)
);

CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL,
    motpasse_hash VARCHAR(100) NOT NULL
);

CREATE TABLE visitesguidees (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    titre VARCHAR(200), 
    dateheure DATE, 
    langue VARCHAR(100), 
    capacite_max INT, 
    statut BOOLEAN, 
    duree FLOAT, 
    prix INT,
    idutilisateur INT
    FOREIGN KEY(idutilisateur) REFERENCES utilisateurs(id)
);

CREATE TABLE etapesvisite (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titreetape VARCHAR(100) NOT NULL,
    descriptionetape VARCHAR(300) NOT NULL,
    ordreetape INT,
    id_visite INT,
    FOREIGN KEY (id_visite) REFERENCES visitesguidees(id)
);

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idvisite INT,
    idutilisateur INT,
    nbpersonnes INT,
    datereservation DATE,
    FOREIGN KEY (idvisite) REFERENCES visitesguidees(id),
    FOREIGN KEY (idutilisateur) REFERENCES utilisateurs(id)
);

CREATE TABLE commentaires (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idvisitesguides INT,
    idutilisateur INT,
    note INT,
    texte TEXT,
    date_commentaire DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idvisitesguides) REFERENCES visitesguidees(id),
    FOREIGN KEY (idutilisateur) REFERENCES utilisateurs(id)
);


INSERT INTO users (name, email, role, password, active, approved)
VALUES ('Admin', 'admin@assad.com', 'ADMIN', '123456789', 1, 1);


SELECT animals.name, animals.species, habitats.name
FROM animals, habitats
WHERE animals.habitat_id = habitats.id;


SELECT users.name, reservations.people
FROM reservations, users
WHERE reservations.user_id = users.id;


INSERT INTO habitat (NomHab, Description_habi) VALUES
('Savannah', 'Hot grassland area'),
('Jungle', 'Dense forest'),
('Desert', 'Dry sandy area'),
('Ocean', 'Large water habitat');

INSERT INTO animals (Name_Animals, Alimentaire_type, Image_Animals, HabitatID) VALUES
('Lion', 'Carnivore', 'https://us.images.westend61.de/0001902684pw/full-body-of-magnificent-wild-lion-on-dry-ground-savannah-looking-at-camera-on-sunny-day-in-masai-mara-kenya-ADSF48143.jpg', 1),
('Elephant', 'Herbivore', 'https://d1jyxxz9imt9yb.cloudfront.net/animal/1/meta_image/regular/LC202302_HwangeTysonMayr_016_416583_reduced.jpg', 1),
('Giraffe', 'Herbivore', 'https://images.unsplash.com/photo-1689631281246-83cfb8b3db7a?fm=jpg&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDI3fHx8ZW58MHx8fHx8&ixlib=rb-4.1.0&q=60&w=3000', 1),
('Zebra', 'Herbivore', 'https://us.images.westend61.de/0001043458pw/herd-of-zebras-standing-in-savannah-pilanesberg-national-park-south-africa-AURF06915.jpg', 1),
('Hyena', 'Carnivore', 'https://upload.wikimedia.org/wikipedia/commons/d/dc/Spotted_hyena_%28Crocuta_crocuta%29.jpg', 1),

('Tiger', 'Carnivore', 'https://cdn1.matadornetwork.com/blogs/1/2018/11/Bengal-Tiger-in-forest-show-head-and-leg-1200x853.jpg', 2),
('Monkey', 'Omnivore', 'https://i1.pickpik.com/photos/451/366/360/monkey-wildlife-nature-wild-preview.jpg', 2),
('Parrot', 'Herbivore', 'https://i.pinimg.com/736x/e7/dd/fa/e7ddfa0c8e97a80579b8d26e01fac226.jpg', 2),
('Snake', 'Carnivore', 'https://images.unsplash.com/photo-1761887411078-9081eb61d5e3?fm=jpg&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&ixlib=rb-4.1.0&q=60&w=3000', 2),
('Gorilla', 'Herbivore', 'https://assets.worldwildlife.org/www-prd/images/wwfcmsprodimagesMountain_Gorilla_Silverback_W.width-1000.jpg', 2),

('Camel', 'Herbivore', 'https://discoversaharatours.com/wp-content/uploads/2024/05/camels-riding-through-erg-chebbi-dunes-in-merzouga-morocco-1184x790.jpg', 3),
('Fennec Fox', 'Carnivore', 'https://i.natgeofe.com/k/1db1b816-aa92-434e-994f-d3298c9f58f8/fennec-fox-hole.jpg', 3),
('Scorpion', 'Carnivore', 'https://i0.wp.com/www.wildlifenomads.com/wp-content/uploads/2025/09/Giant-Hairy-Scorpion-Hadrurus-arizonensis.webp?fit=700%2C550&ssl=1', 3),
('Meerkat', 'Omnivore', 'https://media.sciencephoto.com/c0/14/09/26/c0140926-800px-wm.jpg', 3),
('Lizard', 'Carnivore', 'https://us.images.westend61.de/0001001413pw/close-up-of-lizard-on-desert-rock-CUF40287.jpg', 3),

('Shark', 'Carnivore', 'https://www.ikelite.com/cdn/shop/articles/great-white-steve-miller.jpg?crop=center&height=1200&v=1573442582&width=1200', 4),
('Dolphin', 'Carnivore', 'https://images.theconversation.com/files/670435/original/file-20250527-56-zjcec4.jpg?auto=format&fit=crop&h=668&ixlib=rb-4.1.0&q=45&rect=0%2C108%2C3600%2C1800&w=1356', 4),
('Octopus', 'Carnivore', 'https://c.files.bbci.co.uk/D80F/production/_115211355_octopustentacles.jpg', 4),
('Sea Turtle', 'Herbivore', 'https://www.oceanicworldwide.com/wp-content/uploads/sites/6/2020/04/pasted-image-0-1-e1580424389623.png', 4),
('Clownfish', 'Omnivore', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Amphiprion_ocellaris_%28Clown_anemonefish%29_by_Nick_Hobgood.jpg/1200px-Amphiprion_ocellaris_%28Clown_anemonefish%29_by_Nick_Hobgood.jpg', 4);