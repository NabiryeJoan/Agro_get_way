-- Active: 1698070377093@@127.0.0.1@3306
CREATE DATABASE Agroget_away;
use Agroget_away;
CREATE TABLE user (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    contact VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255) NOT NULL
);


CREATE TABLE farmer (
    farmer_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    contact VARCHAR(255),
    type VARCHAR(255)
);
CREATE TABLE farm (
    farm_id INT AUTO_INCREMENT PRIMARY KEY,
    farm_name VARCHAR(255) NOT NULL,
    location VARCHAR(255),
    type VARCHAR(255)
);

CREATE TABLE booking (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    farm_id INT,
    date_and_time TIMESTAMP,
    farmer_id INT
    -- FOREIGN KEY (user_id) REFERENCES users(user_id),
    -- FOREIGN KEY (farm_id) REFERENCES farms(farm_id),
    -- FOREIGN KEY (farmer_id) REFERENCES farmers(farmer_id)
);
CREATE TABLE comment (
    comment_id INT AUTO_INCREMENT PRIMARY KEY,
    text TEXT,
    farm_id INT,
    farmer_id INT,
    user_id INT,
    date_and_time TIMESTAMP
    -- FOREIGN KEY (farm_id) REFERENCES farms(farm_id),
    -- FOREIGN KEY (farmer_id) REFERENCES farmers(farmer_id),
    -- FOREIGN KEY (user_id) REFERENCES users(user_id)
);
ALTER TABLE  booking ADD FOREIGN KEY (user_id) REFERENCES user(user_id);
ALTER TABLE  booking ADD FOREIGN KEY (farm_id) REFERENCES farm(farm_id);
ALTER TABLE  booking ADD FOREIGN KEY (farmer_id) REFERENCES farmer(farmer_id);

ALTER TABLE  comment ADD FOREIGN KEY (farm_id) REFERENCES farm(farm_id);
ALTER TABLE  comment ADD FOREIGN KEY (farmer_id) REFERENCES farmer(farmer_id);
ALTER TABLE  comment ADD FOREIGN KEY (user_id) REFERENCES user(user_id)
