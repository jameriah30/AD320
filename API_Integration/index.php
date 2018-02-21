<!--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">-->
<!--<html>-->
<!--<head>-->
<!--    <title>Current Weather</title>-->
<!--</head>-->
<!---->
<!--<body>-->

<!--</body>-->
<!--</html>-->
<?php include "templates/head.php";?>




<div class="feature">
    <div class="feature-inner">
        <h1>Google Books API Integration</h1>
    </div>
</div>


<div id="content">
    <div id="content-inner">

        <main id="contentbar">
            <div class="article">
                <!--                    <p><script>generateText(12)</script></p>-->
                <h1>Search for books!</h1>

                <form name="myForm" method="GET" action="PHP-1.php">
<!--                    <select name="city">-->
<!--                        <option disabled selected value> -- select an option -- </option>-->
<!--                        <option value="new_york:ny">New York</option>-->
<!--                        <option value="seattle:wa">Seattle</option>-->
<!--                        <option value="sfo:ca">San Francisco</option>-->
<!--                        <option value="chicago:il">Chicago</option>-->
<!--                    </select>-->
                    Search <input type="text" name="book"><br>
                    <input name="submit" type="submit"/>

                </form>
<!--                <p>The Book Wish list is a simple application that allows you too create a list of books that you want-->
<!--                    and store them in a database. Simply click on the<a href="create.php " > Form Page </a>, and enter the book-->
<!--                    info for each book that you wish to have. After each submission, you will get a confirmation that-->
<!--                    your book was properly stored in the wish list database. Give it a try!</p>-->

            </div>
        </main>

        <nav id="sidebar">
            <div class="widget">
                <!--                    <h3>Left Sample Heading</h3>-->
                <!--                    <ul>-->
                <!--                        <li><a href="#">Link 1</a></li>-->
                <!--                        <li><a href="#">Link 2</a></li>-->
                <!--                        <li><a href="#">Link 3</a></li>-->
                <!--                        <li><a href="#">Link 4</a></li>-->
                <!--                        <li><a href="#">Link 5</a></li>-->
                <!--                    </ul>-->
                <img src="images/bookworm.jpg" alt="sidebar image" height="200" width="150">
            </div>
        </nav>

        <div class="clr"></div>
    </div>
</div>

<?php include "templates/footer.php";?>