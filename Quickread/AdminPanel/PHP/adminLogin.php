<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "pagal" && $password == "abc") {
            // Store username in session variable
            $_SESSION["username"] = $username;

            // Redirect to homepage
            header("Location: ../panel.php");
            exit;
        } else {
            // Handle login failure (e.g., display error message)
            echo "Login failed. Please try again.";
        }
    }
?>
