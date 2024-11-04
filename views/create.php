<?php
require_once '../Class/patients.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patient = new Patient();
    $patient->name = $_POST['name'];
    $patient->age = $_POST['age'];
    $patient->gender = $_POST['gender'];
    $patient->diagnosis = $_POST['diagnosis'];
    $patient->create();
    header("Location: read.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Patient</title>
</head>
<body>
    <h1>Add New Patient</h1>
    <form action="create.php" method="post">
        <label>Name:</label> <input type="text" name="name" required><br><br>
        <label>Age:</label> <input type="number" name="age" required><br><br>
        <label>Gender:</label> <input type="text" name="gender"><br><br>
        <label>Diagnosis:</label> <textarea name="diagnosis"></textarea><br><br>
        <button type="submit">Add Patient</button>
    </form>
</body>
</html>
