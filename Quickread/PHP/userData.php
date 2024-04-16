<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cNumber = $_POST['cNumber'];
        $address = isset($_POST['address']) ? $_POST['address'] : "";
        $pass = $_POST['pass'];
        $confirmPass = $_POST['confirmPass'];
    
        // Check if password and confirm password match
        if ($pass !== $confirmPass) {
            echo "Error: Passwords do not match.";
            exit();
        }
    }
    header("Location: ../login.html");
?>
    