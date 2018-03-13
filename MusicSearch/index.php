
<?php include "templates/head2.php";?>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">Music Search App</h1>
    <p class="w3-xlarge">Final Project for AD320 by Jeremiah Smith</p>

</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1>A Brief Introduction to this App</h1>
            <h5 class="w3-padding-32">This web application allows the user to search for information on music artists or groups after registering a user name and password and becoming a member. </h5>

            <p class="w3-text-grey">This application is built on several different languages. PHP is is used for server side purposes including connecting and querying
            a MYSQL database, form validation and api integration. HTML and CSS are used for content display and design purposes. AJAX is used to update a user search without
            reloading the page along with a jQuery plugin to make the images being displayed fill their containers and be centered. This app uses the Last FM API to generate information
            requests by the user, and a Google API to show music videos of artists form Youtube. Data is then parsed using JSON.</p>

            <p class="w3-xlarge">You must become a member to continue further.</p>
            <button class="w3-button w3-grey w3-padding-large w3-large w3-margin-top"><a href="register.php" ><b>Let's Get Started!</b></a></button>
        </div>

        <div class="w3-third w3-center">
            <img src="images/headphones.png" alt="Headphones Image" >
        </div>
    </div>

</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-third w3-center">
<!--            <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>-->
        </div>

        <div class="w3-twothird">
            <h1>Information about the Last FM API</h1>
            <h5 class="w3-padding-32">The Last.fm API allows anyone to build their own programs using Last.fm data, whether they're on the web, the desktop or mobile devices. </h5>

            <p class="w3-text-grey">Last.fm is a music service that learns what you love.
                Create your own profile, track what you listen to (we call this scrobbling) and get cool stuff like your own music charts, new music recommendations, and a big ol’ community of other music lovers.</p>
        </div>
        <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top"><a href="https://www.last.fm/home">Click Here for more info about Last FM</a></button>
    </div>
</div>


<?php include "templates/footer.php";?>