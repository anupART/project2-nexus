<?php
if (isset($_GET['login'])) {
    if ($_GET['login'] == 'success') {
        echo "<script language='javascript'>";
        echo "alert('Successfully Logged in')";
        echo "</script>";
    } elseif ($_GET['login'] == 'failed') {
        echo "<script language='javascript'>";
        echo "alert('WRONG INFORMATION')";
        echo "</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Add a reference to your updated styles.css -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Home Page</h2>
        <a href="login.html">Login</a>
        <a href="signup.html">Signup</a>
    </div>

    <!-- Include the updated script.js -->
    <script src="script.js"></script>
</body>
</html>
