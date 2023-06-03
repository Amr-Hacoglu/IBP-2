<?php
$hostname = '127.0.0.1';
$username = 'root';
$dbname = 'students';

try {
  $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  try {
    $stmt = $pdo->prepare("INSERT INTO students (full_name, email, gender) VALUES (?, ?, ?)");
    $stmt->execute([$fullName, $email, $gender]);

    echo "Registration successful!";
  } catch (PDOException $e) {
    die("Error: " . $e->getMessage());
  }
}
?>

<!-- http://localhost/student-registration/registration.html -->