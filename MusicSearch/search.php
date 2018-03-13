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
    <h1 class="w3-margin w3-jumbo"><b><?php echo htmlspecialchars($_SESSION['username']); ?></b>-Search here for info on your favorite music artists</h1>


</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1>Enter artist or band name here</h1>

            <form name="myForm" method="GET" action="results.php">

                <input type="text" name="artist" ><br><br>
                <input type="submit" class="btn btn-primary" value="Submit">
<!--                <input type="submit"/>-->

            </form>
        </div>

        <div class="w3-third w3-center">
            <img src="images/music1.png" alt="Music Image" >
        </div>
    </div>
</div>


<?php include "templates/footer.php";?>
