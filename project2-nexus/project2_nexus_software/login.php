<?php
try {
    $servername = "localhost:3306";
    $dbname = "anup";
    $username = "root";
    $password = "";

    $conn = new PDO(
        "mysql:host=$servername; dbname=anup",
        $username, $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["loginusername"]); // Updated to match your form field names
    $password = test_input($_POST["loginpass"]); // Updated to match your form field names

    $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    
    $found = $stmt->fetch();

    if ($found) {
        header("location: index.php?login=success");
    } else {
        header("location: index.php?login=failed");
    }
}
?>
