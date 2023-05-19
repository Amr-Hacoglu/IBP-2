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

// Retrieve the list of students from the database
$stmt = $pdo->query("SELECT * FROM students");
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Students</title>
</head>
<body>
  <h2>List of Students</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Gender</th>
    </tr>
    <?php foreach ($students as $student): ?>
      <tr>
        <td><?php echo $student['id']; ?></td>
        <td><?php echo $student['full_name']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['gender']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
