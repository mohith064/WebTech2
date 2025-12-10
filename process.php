<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = htmlspecialchars($_POST['name']);
    $email  = htmlspecialchars($_POST['email']);
    $phone  = htmlspecialchars($_POST['phone']);
    $course = htmlspecialchars($_POST['course']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Submission Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Registration Successful 🎉</h2>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Course:</strong> <?php echo $course; ?></p>
  </div>
</body>
</html>
