# Car Detail

A simple web application for managing car data using PHP and MySQL. The application demonstrates the use of CRUD (Create, Read, Update, Delete) operations with a clean and responsive interface built using Bootstrap.

## Features:
- Add a new student (Create)
- View all students in a table (Read)
- Edit student details (Update)
- Delete a student (Delete)
- Responsive design with Bootstrap 5
- Secure data handling with prepared statements (SQL Injection prevention)

## Prerequisites:
- PHP >= 7.4
- MySQL Database
- Web Server (e.g., Apache, Nginx, XAMPP)

### Folder Structure
```
/project-folder
├── config/
│   └── config.php    // Contains the database connection and CRUD logic
├── index.php         // Main page for adding products
├── showdata.php      // Displays the product list
├── updatedata.php    // Page for updating product details
└── README.md         // Documentation file
```

---


### Dependencies
- **PHP Sessions:** Used to pass data between pages.
- **Bootstrap 5.3.3:** For styling and responsive layout.

---
### Setup Instructions
1. **Clone or Download** the repository to your local machine.
2. Place the project folder in your web server's root directory (`htdocs` for XAMPP).
3. **Import Database:**
   - Open **phpMyAdmin** in your browser.
   - Create a new database named `student`.
   - Import the following SQL script to create the necessary table:
     ```sql
     CREATE TABLE product (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL,
         age INTEGER NOT NULL,
         phone INTEGER NOT NULL
     );
     ```
4. Update the database credentials in `config/config.php` if necessary:
   ```php
   private $localhost = "localhost";
   private $username = "root";
   private $password = ""; /
   private $database = "product";
   ```
5. **Run the Application:**
   - Open your browser and navigate to: `http://localhost/project-folder/index.php`.

---

## Add Detail

![Screenshot 2024-11-22 115151]()

## Show Data

![Screenshot 2024-11-22 115218]()

## Update Data

![Screenshot 2024-11-22 115228]()

## video
