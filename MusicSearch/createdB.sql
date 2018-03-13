# Create Database
DROP DATABASE IF EXISTS login;
CREATE DATABASE IF NOT EXISTS login;
USE login;

# Create Tables
CREATE TABLE user
(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO user (username, password)
VALUES
  ('user1','password1'),
  ('user2', 'password2');