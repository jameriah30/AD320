<?php include "templates/head.php";?>


<?php require "templates/connection.php";?>



    <div class="feature">
        <div class="feature-inner">
            <h1>Confirmation Page</h1>
        </div>
    </div>


    <div id="content">
        <div id="content-inner">

            <main id="contentbar">
                <div class="article">
                    <!--                    <p><script>generateText(12)</script></p>-->


                    <?php


                    $Name = $_POST['bookname'];
                    $Author = $_POST['author'];
                    $Genre = $_POST['genre'];
                    $ISBN = $_POST['isbn'];
                    $Description = $_POST['description'];



                    $entry = "INSERT INTO books(book_name, book_author, book_genre, isbn, book_description) VALUES ('$Name','$Author','$Genre','$ISBN','$Description')";




//                    $error = mysqli_query("SELECT" )








                    if(!mysqli_query($mysqli,$entry))
                    {
                        echo '<h2>Sorry, that isbn is already taken</h2>';
                    }
                    else
                    {
//                        echo 'Inserted';
                        echo'<h1>Success!!</h1>';
                        echo'<h2>The following book has been added to your wish list: </h2>';

                        echo 'Name of Book: ' . $_POST ["bookname"] . '<br>';
                        echo 'Name of Author: ' . $_POST ["author"] . '<br>';
                        echo 'Book Genre: ' . $_POST ["genre"] . '<br>';
                        echo 'ISBN#: ' . $_POST ["isbn"].'<br>';
                        echo 'Book Description: ' .'<br>'. $_POST ["description"].'<br>';
                    }

                    $mysqli->close();
                    ?>
                    <h3>To add another book,<a href="create.php " > Click Here </a></h3>
                    <h3><a href="index.php " > Back to Home </a></h3>

                </div>
            </main>

            <nav id="sidebar">
                <div class="widget">
<!--                    <h3>Left heading</h3>-->
<!--                    <ul>-->
<!--                        <li><a href="#">Link 1</a></li>-->
<!--                        <li><a href="#">Link 2</a></li>-->
<!--                        <li><a href="#">Link 3</a></li>-->
<!--                        <li><a href="#">Link 4</a></li>-->
<!--                        <li><a href="#">Link 5</a></li>-->
<!--                    </ul>-->
                    <img src="images/smile_book.jpg" alt="sidebar image" height="200" width="150">
                </div>
            </nav>

            <div class="clr"></div>
        </div>
    </div>



<?php include "templates/footer.php";?>