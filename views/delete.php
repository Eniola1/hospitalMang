<?php
require_once '../Class/patients.php';

if (isset($_GET['id'])) {
    $patient = new Patient();
    $patient->id = $_GET['id'];
    $patient->delete();
}

header("Location: read.php");
exit();
?>
