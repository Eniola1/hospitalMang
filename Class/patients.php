<?php
require_once '../Class/db.php';

class Patient {
    private $conn;
    private $table = 'patients';

    public $id;
    public $name;
    public $age;
    public $gender;
    public $diagnosis;
    public $dateOfBirth;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    // Create new patient record
    public function create() {
        $query = "INSERT INTO $this->table (name, age, gender, diagnosis) VALUES (:name, :age, :gender, :diagnosis)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':age', $this->age);
        $stmt->bindParam(':gender', $this->gender);
        $stmt->bindParam(':diagnosis', $this->diagnosis);
        return $stmt->execute();
    }

    // Read all patients
    public function fetchAll() {
        $query = "SELECT * FROM $this->table ORDER BY id DESC LIMIT 5";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Read a single patient
    public function fetchOne() {
        $query = "SELECT * FROM $this->table WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Update patient record
    public function update() {
        $query = "UPDATE $this->table SET name = :name, age = :age, gender = :gender, diagnosis = :diagnosis, date_of_birth = :DOB WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':age', $this->age);
        $stmt->bindParam(':gender', $this->gender);
        $stmt->bindParam(':diagnosis', $this->diagnosis);
        $stmt->bindParam(':DOB', $this->dateOfBirth);
        return $stmt->execute();
    }

    // Delete patient record
    public function delete() {
        $query = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }
}
?>
