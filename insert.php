<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "lab_7";

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$matric = $_POST['matric'];
$name = $_POST['name'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

if ($role !== 'student' && $role !== 'lecturer') {
    die("Invalid role.");
}

$sql = "INSERT INTO users (matric, name, password, role) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $matric, $name, $password, $role);

if ($stmt->execute()) {
    echo "User registered successfully. <a href='display.php'>View Users</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
