# Online_Product_Store
Online Product Store – README
Project Overview
A simple mini e-commerce web application built using HTML, CSS, JavaScript, PHP, and MySQL. Users can add products, view all products, search items dynamically, calculate total prices, and delete products from the inventory.

**Features**
*.Add new products with name and price

*.View all added products

*.Search products dynamically

*.Auto-calculate total price

*.Delete product records

*.Clean and responsive UI

**Technologies Used**
*.HTML

*.CSS

*.JavaScript

*.PHP

*.MySQL

*.XAMPP

**Project Structure**
Online_Product_Store/
│── index.php
│── add.php
│── delete.php
│── db.php
│── product_store.sql
│── README.md
**Database Setup**
Open phpMyAdmin

Create a database named: product_store

Run this SQL script:

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  price DECIMAL(10,2) NOT NULL
);
**How to Run**
Install and start XAMPP

Copy the project folder into:

C:\xampp\htdocs\
Start Apache and MySQL
_http://localhost/Online_Product_Store/_
