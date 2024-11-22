# Car Detail

A simple web application for managing car data using PHP and MySQL. The application demonstrates the use of CRUD (Create, Read, Update, Delete) operations with a clean and responsive interface built using Bootstrap.

## Features:
- Add a new car (Create)
- View all car in a table (Read)
- Edit car details (Update)
- Delete a car details (Delete)
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
         descrition VARCHAR(255) NOT NULL,
         price INTEGER NOT NULL
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


![Screenshot 2024-11-22 131754](https://github.com/user-attachments/assets/1f4554d8-a4bc-4bf5-90af-5548e9a43a21)

## Show Data

![Screenshot 2024-11-22 131824](https://github.com/user-attachments/assets/be7a40ba-a308-4072-995c-9e6f2baf0d0a)


## Update Data

![Screenshot 2024-11-22 131850](https://github.com/user-attachments/assets/aa1a30b8-ce20-4dcd-8aac-4411d83a2d88)

## video

https://github.com/user-attachments/assets/3750ea72-751a-4df7-a3a3-ef78f25327c5

