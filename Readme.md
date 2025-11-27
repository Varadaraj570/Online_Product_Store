🛒 Online Product Store
A simple mini e-commerce web application built using PHP and MySQL, allowing users to add products, view all products, delete items, and manage a basic product inventory.
This project demonstrates CRUD operations, basic UI design, and server-side web development concepts.

🚀 Features
Add new products with name and price

Display all available products in a clean table

Delete unwanted products

Simple and responsive user interface

Backend built with PHP

Data stored securely in MySQL database

🛠️ Technologies Used
HTML

CSS

JavaScript

PHP

MySQL

XAMPP

📂 Project Structure
Online_Product_Store/
│── index.php
│── add.php
│── delete.php
│── db.php
│── product_store.sql
│── README.md
🗄️ Database Setup
Open phpMyAdmin

Create a database named:

product_store
Run this SQL:

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  price DECIMAL(10,2) NOT NULL
);
▶️ How to Run the Project
Install and open XAMPP

Copy the project folder into:

C:\xampp\htdocs\
Start Apache and MySQL

Visit in browser:

http://localhost/Online_Product_Store/