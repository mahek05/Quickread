<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Quickread</title>
    <link href="HOME.css" rel="stylesheet">
</head>
<body>
    <br>
    <div id="navbar">
        
        <a href="HOME.html" class="home"><img id="logo" src="images\quickread_logo.png" alt="Logo"></a>
        <a href="#">My Profile</a>
        <a></a>

        <?php
        // Start the session
        session_start();

        // Check if the user is logged in
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            // Check username and password (you need to implement your actual login logic here)
            if ($_POST["username"] === "your_username" && $_POST["password"] === "your_password") {
                // If login successful, set session variable
                $_SESSION["username"] = $_POST["username"];
            }
        }

        // Check if the user is logged in
        if (isset($_SESSION["username"])) {
            // If logged in, display logout option
            echo '<a href="PHP/logout.php" class="with_image home">Logout</a>    ';
        } else {
            // If not logged in, display sign in option
            echo '<a href="login.html" class="with_image home">Sign in</a>    ';
        }
        ?>
        <a></a>

        <!-- <a href="login.html" class="with_image home" >Sign in</a>
        <img id="sign_image" src="images\signin_image.png" width="19px"> -->
        <input id="searchbar" placeholder="Search Title,Author...">
        <button id="searchbutton">Search</button>
        
        <a href="cart.html" class="with_image" class="home" >My Cart</a>
        <img id="cart_image" src="images\cart_image.png" width="19px">

        <a href="contantUs.html" class="category" class="home">Contact Us</a>
        <br><br><br>
    </div>

    <div id="category">
        <a href="Categories\Fiction\fiction.html" >Fiction</a>
        <a href="Categories\Romantic\romantic.html"  >Romantic</a>
        <a href="Categories\Mystery\mystery.html" >Mystery</a>
        <a href="Categories\SciFiction\scifiction.html">Science Fiction</a>
        <a href="Categories\Children\children.html" >Children's literature</a>
        <a href="Categories\Comedy\comedy.html" >Comedy</a>
        <a href="Categories\Crime\crime.html" >Crime</a>

    </div>
    <div class="hidden1 hidden fixed w-full h-screen bg-black/80"></div>

    <h2 style="margin-top:100px;"><i>Best Sellers</i></h2>
    <div class="book-box" id="bookBox" >

        <div id="itends_withus" class="book">
            <a href="itends_withus.html">
                <img src="images\it end with us.png" alt="It ends with us" height="200px" width="135px" >
                
                <p class="small_para">It ends with us</p>
                <pre class="small_pre">Romance, Fictional</pre>
                <p class="small_para">₹ 200</p>
        </a>

    </div>

    <div id="richdad_poordad" class="book">

        <a href="richdad_poordad.html">
            <img src="images\rich dad poor dad.png" alt="Rich Dad Poor Dad" height="200px" width="135px" >
            <p class="small_para">Rich Dad Poor Dad</p>
            <pre class="small_pre">Psychology</pre>
            <p class="small_para">₹ 250</p>
        </a>
    </div>

    <div id="powerof_submind" class="book">
        <a href="powerof_submind.html">
            <img src="images\power of subco mind.png" alt="Power of Subconcious Mind" height="200px" width="135px" >
            <p class="small_para">The Power of your subconscious mind</p>
            <pre class="small_pre">Psychology</pre>
            <p class="small_para">₹ 200</p>
        </a>
    </div>

    <div id="thegirlwho_knewtoomuch" class="book">
        <a href="thegirlwho_knewtoomuch.html">
            <img src="images\the girl know too much.png" alt="The Girl who knew too much" height="200px" width="135px" >
            <p class="small_para">The Girl who knew too much</p>
            <pre class="small_pre">Fiction, Romance</pre>
            <p class="small_para">₹ 150</p>
        </a>
    </div>

    <div id="half_girlfriend" class="book">
        <a href="half_girlfriend.html">
            <img src="images\half girlfriend.png" alt="Half girlfriend" height="200px" width="135px" >
            <p class="small_para">Half Girlfriend</p>
            <pre class="small_pre">Novel, Romance</pre>
            <p class="small_para">₹ 150</p>
        </a>
    </div>

    <div id="mystery_ofhiddenlab" class="book">
        <a href="mystery_ofhiddenlab.html">
            <img src="images\the mystery of hidden lab.png" alt="The mystery of hidden lab" height="200px" width="135px" >
            <p class="small_para">The Mystery of the Hidden Lab</p>
            <pre class="small_pre">Mystery, Suspense</pre>
            <p class="small_para">₹ 200</p>
        </a>
    </div>
    <div id="TheIncarcerations" class="book">
        <a href="TheIncarcerations.html">
            <img src="images\TheIncarcerations.png" alt="The incarcerations" height="200px" width="135px" >
            <p class="small_para">The Incarcerations</p>
            <pre class="small_pre">Political Freedom, Security</pre>
            <p class="small_para">₹ 300</p>
        </a>
    </div>

</div>
<!-- <script src="Javascript\HOME.js"></script> -->
<script src="Javascript\CommonForAll.js"></script>

</body>
</html>