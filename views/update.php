<?php
require_once '../Class/patients.php';

$patient = new Patient();
$patient->id = $_GET['id'];
$currentPatient = $patient->fetchOne();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patient->name = $_POST['name'];
    $patient->age = $_POST['age'];
    $patient->gender = $_POST['gender'];
    $patient->diagnosis = $_POST['diagnosis'];
    $patient->dateOfBirth = $_POST['dateOfBirth'];
    $patient->update();
    header("Location: read.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Patient</title>
</head>
<body>
    <h1>Edit Patient</h1>
    <form action="update.php?id=<?php echo $currentPatient->id; ?>" method="post">
        <label>Name:</label><input type="text" name="name" value="<?php echo $currentPatient->name; ?>" required><br>
        <label>Age:</label><input type="number" name="age" value="<?php echo $currentPatient->age; ?>" required><br>
        <label>Gender:</label><input type="text" name="gender" value="<?php echo $currentPatient->gender; ?>"><br>
        <label>Diagnosis:</label><textarea name="diagnosis"><?php echo $currentPatient->diagnosis; ?></textarea><br>
        <label>Date of birth:</label><input type="date" name = "dateOfBirth"><?php echo $currentPatient->date_of_birth; ?></textarea><br>
        <button type="submit">Update Patient</button>
    </form>
</body>
</html>
