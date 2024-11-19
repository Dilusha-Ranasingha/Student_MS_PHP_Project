# Student Management System

This project is a **Student Management System** built using **HTML**, **CSS**, **JavaScript**, **PHP**, and **MySQL**. It allows admins to manage student information efficiently. The system provides two types of access: **Admin** and **User**.

---

## 🌟Key Features

- **Admin Registration and Login:**
  - Admins can register and log in to the system.
  
- **Full CRUD Operations:**
  - Add new students.
  - Update existing student details.
  - Delete student records.
  - View student details.

- **User-Friendly Interface:**
  - Clean and responsive design for easy navigation.

---

## 🛠️Technologies Used

- **Frontend:**
  - HTML
  - CSS
  - JavaScript
- **Backend:**
  - PHP
  - MySQL (for database management)

---

## 👩‍💼System Roles

### Admin Side
- Manage users (students):
  - Add, edit, delete, and view student details.
- Ensure only authorized access with secure login functionality.

### User Side
- Access limited features as defined by the system.

---

## 🚀Installation

1. Clone the repository:
   ```bash
   https://github.com/Dilusha-Ranasingha/Student_MS_PHP_Project.git
2. Set database as follow
   ```bash
   -- phpMyAdmin SQL Dump
    -- version 5.2.1
    -- https://www.phpmyadmin.net/
    --
    -- Host: localhost
    -- Generation Time: Nov 19, 2024 at 04:54 PM
    -- Server version: 10.4.28-MariaDB
    -- PHP Version: 8.2.4
    
    SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
    START TRANSACTION;
    SET time_zone = "+00:00";
    
    
    /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
    /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
    /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
    /*!40101 SET NAMES utf8mb4 */;
    
    --
    -- Database: `studentms`
    --
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `admin1`
    --
    
    CREATE TABLE `admin1` (
      `ID` int(30) NOT NULL,
      `FName` varchar(30) NOT NULL,
      `LName` varchar(30) NOT NULL,
      `Age` int(30) NOT NULL,
      `Dob` date NOT NULL,
      `Contact` int(30) NOT NULL,
      `Email` varchar(30) NOT NULL,
      `Password` varchar(30) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `admin1`
    --
    
    INSERT INTO `admin1` (`ID`, `FName`, `LName`, `Age`, `Dob`, `Contact`, `Email`, `Password`) VALUES
    (1, 'dilusha', 'ranasingha', 21, '2002-10-10', 712390535, 'dilushar10@gmail.com', 'dilusha@123');
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `student1`
    --
    
    CREATE TABLE `student1` (
      `id` int(30) NOT NULL,
      `name` varchar(30) NOT NULL,
      `contact` int(30) NOT NULL,
      `email` varchar(30) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `student1`
    --
    
    INSERT INTO `student1` (`id`, `name`, `contact`, `email`) VALUES
    (1, 'brave', 712567730, 'brave@gmail.com'),
    (2, 'Bela', 712390333, 'bela@gmail.com');
    
    --
    -- Indexes for dumped tables
    --
    
    --
    -- Indexes for table `admin1`
    --
    ALTER TABLE `admin1`
      ADD PRIMARY KEY (`ID`);
    
    --
    -- Indexes for table `student1`
    --
    ALTER TABLE `student1`
      ADD PRIMARY KEY (`id`);
    
    --
    -- AUTO_INCREMENT for dumped tables
    --
    
    --
    -- AUTO_INCREMENT for table `admin1`
    --
    ALTER TABLE `admin1`
      MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
    
    --
    -- AUTO_INCREMENT for table `student1`
    --
    ALTER TABLE `student1`
      MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
    COMMIT;
    
    /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
    /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
    /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

## 🧰 Languages and Tools

### Frontend:
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

### Backend:
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

### Development Tools:
![Visual Studio Code](https://img.shields.io/badge/VS%20Code-0078D4?style=for-the-badge&logo=visual-studio-code&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)

### Version Control:
![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)
![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)

## Contact

If you have any questions or suggestions, feel free to contact me:

- **Email:** [dilushar10@gmail.com](mailto:dilushar10@gmail.com)  
- **GitHub:** [Dilusha-Ranasingha](https://github.com/Dilusha-Ranasingha)
