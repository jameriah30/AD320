<?php
/**
 * Created by PhpStorm.
 * User: jeremiah
 * Date: 3/10/2018
 * Time: 1:04 PM
 */

// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
?>
<?php include "templates/head.php";?>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo"><b><?php echo htmlspecialchars($_SESSION['username']); ?></b><img src="images/welcome.png" alt="Music Image" ></h1>


</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">

            <h1>Search for information on your favorite music artists!</h1>
            <button class="w3-button w3-grey w3-padding-large w3-large w3-margin-top"><a href="search.php">Let's Get Started!</a></button>
        </div>

        <div class="w3-third w3-center">

        </div>
    </div>
</div>



<?php include "templates/footer.php";?>
