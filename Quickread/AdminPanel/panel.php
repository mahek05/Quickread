<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Quickread</title>
    <link href="../HOME.css" rel="stylesheet">
    <style>
        /* CSS for the form */
form {
    margin-top: 20px;
    padding: 20px;
    background-color: #f3e7f3;
    border-radius: 8px;
}
    </style>
</head>
<body>
    <br>
    <div id="navbar">
        <a href="./panel.php" class="home"><img id="logo" src="../images/quickread_logo.png" alt="Logo"></a>
        <a></a>
        <a></a>
        <a href="#">My Profile</a>
        <a></a>
        <a></a>
        <a>Admin Panel<a>
        <a></a>
        <a></a>
        <?php
        // Start the session
        session_start();

        // Check if the user is logged in
        if (isset($_SESSION["username"])) {
            // If logged in, display logout option
            echo '<a href="./PHP/adminLogout.php" class="with_image home">Logout</a>';
            
            // Display the form when the user is signed in
            echo '<center><form action="./PHP/adminSignUp.php" method="post" style="font-style: normal; font-family:\'Lucida Sans\', \'Lucida Sans Regular\', \'Lucida Grande\', \'Lucida Sans Unicode\', Geneva, Verdana, sans-serif; font-size: 13px;" onsubmit="return validateForm()">
            <pre>Book Title:             <input type="text" name="name" id="name"><br><br></pre>
            <pre>Quantity change to:     <input type="text" name="email" id="email"><br><br></pre>
            <pre><br><input type="Submit" name="signupLogin" id="signupLogin" value="Submit"> <input type="Reset" name="reset" id="reset"></pre>
        </form></center>';
        }
        else {
            // If not logged in, display sign in option
            echo '<a href="./adminLogin.html" class="with_image home">Sign in</a>';
        }
        ?>
    </div>
</body>
</html>
