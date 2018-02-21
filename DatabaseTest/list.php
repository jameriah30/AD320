<?php include "templates/head.php";?>

<?php require "templates/connection.php";?>


    <div class="feature">
        <div class="feature-inner">
            <h1>Book Wish List</h1>
        </div>
    </div>


    <div id="content">
        <div id="content-inner">

            <main id="contentbar">
                <div class="article">
                    <!--                    <p><script>generateText(12)</script></p>-->
                    <h1>Here is a list of all of your book entries:</h1>

                    <table border="1">
                        <thead>
                        <tr>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Genre</th>
                            <th>isbn</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php


                        $sql = "SELECT book_name, book_author, book_genre, isbn, book_description FROM books";
                        $result = $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><td>". $row["book_name"]."</td>";
                                echo"<td>".$row["book_author"]."</td>";
                                echo"<td>".$row["book_genre"]."</td>";
                                echo"<td>".$row["isbn"]."</td>";
                                echo"<td>".$row["book_description"]."</td></tr>";
                            }
                        } else {
                            echo "0 results";
                        }

                        $mysqli->close();
                        ?>

                        </tbody>
                    </table>




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