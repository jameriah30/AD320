

<?php
// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();?>

<?php include "templates/head2.php";?>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">Thank you for visiting my Music Search App</h1>


</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1>Click below to log back in!</h1>

            <button class="w3-button w3-grey w3-padding-large w3-large w3-margin-top"><a href="login.php">Return to Log in</a></button>
        </div>

        <div class="w3-third w3-center">
            <img src="images/thankyou.png" alt="Music Image" >
        </div>
    </div>
</div>



<?php include "templates/footer.php";?>
