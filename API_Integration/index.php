
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

                <form name="myForm" method="GET" action="PHP-2.php">

                    Search <input type="text" name="book" pattern="[a-zA-Z]{1,}" title="Book title or subject should only contain letters" ><br>
                    <input type="submit"/>

                </form>


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