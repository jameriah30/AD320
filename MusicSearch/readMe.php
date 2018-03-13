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
        <h1 class="w3-margin w3-jumbo"><b><?php echo htmlspecialchars($_SESSION['username']); ?></b>-Want to know more details about how this app was developed?</h1>


    </header>

    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-twothird">
                <h1>Click below to access the ReadMe File</h1><br><br>

                <div id="div2">

                    <button id="button2" class="btn btn-primary">Click Here</button><br><br>
                </div><br><br>

                <div id="div3">

                    <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top"><a href="search.php">Return to Search Page</a></button>


                </div><br><br>






            </div>

            <div class="w3-third w3-center">
                <img src="images/readme.png" alt="Read me Image" >
            </div>
        </div>
    </div>


<?php include "templates/footer.php";?>