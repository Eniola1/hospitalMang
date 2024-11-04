Hospital Management System - CRUD Application
This project is a simple PHP-based CRUD (Create, Read, Update, Delete) application for managing patient records in a hospital. It allows users to add, view, edit, and delete patient information, simulating basic hospital data management.

Features
Add New Patient: Create a new patient record with fields such as name, age, gender, diagnosis, and date of birth.
View All Patients: Fetch and display the list of patients, showing essential information.
Edit Patient Details: Update a patient's details using their unique ID.
Delete Patient Record: Remove a patient's record from the database permanently.
Technologies Used
PHP: Backend language to handle CRUD operations.
MySQL: Database to store patient information.
HTML/CSS: Frontend layout and basic styling.
JavaScript (optional): For enhancing user interactions (if any is used for confirmation on delete, etc.).
Folder Structure
/Class/db.php: Contains the database connection logic.
/patient.php: Main class handling CRUD operations for patients.
/public/: Directory for public-facing files (e.g., forms, views).
index.php: Home page that includes navigation to other actions.
Installation
Clone the Repository:

bash
Copy code
git clone https://github.com/yourusername/hospital-management.git
cd hospital-management
Setup Database:

Create a MySQL database (e.g., hospital_db).
Import the SQL file (if provided) or use the following table structure:
sql
Copy code
CREATE TABLE `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `diagnosis` text NOT NULL,
  `date_of_birth` date,
  PRIMARY KEY (`id`)
);
Configure Database Connection:

Update /Class/db.php with your database credentials:
php
Copy code
private $host = "localhost";
private $db_name = "hospital_management";
private $username = "your_db_user";
private $password = "your_db_password";
Run the Application:

Start a local server (e.g., XAMPP, WAMP, or the built-in PHP server):
bash
Copy code
php -S localhost:8000
Open http://localhost:8000 in your browser.
Usage
Add a New Patient: Use the registration form to create a new patient record.
View Patients: Navigate to the list of patients to see all records in the database.
Update Patient Details: Edit a patient's information using the edit button next to each entry.
Delete Patient: Remove a patient record using the delete button.
Code Overview
Patient Class (patient.php): Manages CRUD operations.
create(): Adds a new patient record to the database.
fetchAll(): Retrieves all patient records.
fetchOne(): Fetches a specific patient by ID.
update(): Updates patient details by ID.
delete(): Deletes a patient record by ID.
Screenshots
Include screenshots of the registration form, patient list, and other pages for reference.

Future Enhancements
Add authentication for secure access.
Implement search and filter functionality for patient records.
Add pagination for large sets of patient records.
Implement frontend validation and error handling for form submissions.
Contributing
Feel free to fork this repository and submit pull requests to improve the application.