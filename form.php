<?php
include 'database.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using $_POST superglobal
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    
    // Prepared statement
    $sql = $conn->prepare("INSERT INTO user(name, email, mobile) VALUES (?, ?, ?)");
    $sql->bind_param("ssi", $name, $email, $mobile);

    // Execute statement
    if ($sql->execute()) {
        echo "<h3>Saved Successfully</h3>";
        header("Location: index.php");
        exit(); // Ensure that the script terminates after redirect
    } else {
        echo "ERROR: Could not execute. " . $sql->error;
    }
    
    // Close the MySQL connection
    $sql->close();
    mysqli_close($conn);
}
?>
