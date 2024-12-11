CREATE DATABASE organizations_db;

USE organizations_db;

CREATE TABLE organizations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    short_name VARCHAR(255) NOT NULL,
    organization_type VARCHAR(255) NOT NULL,
    director_position VARCHAR(255) NOT NULL,
    director_name VARCHAR(255) NOT NULL,
    responsible_position VARCHAR(255) NOT NULL,
    responsible_name VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);