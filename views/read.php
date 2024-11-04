<?php
require_once '../Class/patients.php';

$patient = new Patient();
$patients = $patient->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital Management - Patients</title>
</head>
<body>
    <h1>All Patients</h1>
    <a href="../views/create.php">Add New Patient</a>
    <ul>

        <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Diagnosis</th>
            <th>D.O.B</th>
            <th>Actions</th>
        </tr>
        <tbody>
        <?php foreach ($patients as $patient): ?>
            <tr style = "border: 2px solid">
                <td><?php echo "{$patient->name}" ?> </td> -
                <td>Age: <?php echo "{$patient->age}" ?></td>
                <td>Diagnosis:<?php echo "{$patient->diagnosis}" ?></td>
                <td><?php echo "{$patient->date_of_birth}" ?></td>
                <td>
                    <a href="../views/update.php?id=<?php echo $patient->id; ?>">Edit</a> |
                    <a href="../views/delete.php?id=<?php echo $patient->id; ?>">Delete</a>
                </td>
            </tr>
            
        <?php endforeach; ?>
        </tbody>
        </table>
    </ul>
</body>
</html>
