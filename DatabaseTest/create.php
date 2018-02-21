<?php include "templates/createHead.php";?>




        <div class="feature">
            <div class="feature-inner">
                <h1>Add to your Wish List!</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
<!--                        <p><script>generateText(12)</script></p>-->

                        <h1>Please fill out the following form to add a book to your wish list database.</h1>

                        <form style="border: 1px dotted #999; border-radius: 0;" name="myForm" action="confirmation.php" onsubmit="return ValidateForm();" method="post"   >
                            Name of Book: <input type="text" name="bookname"><br>
                            Name of Author: <input type="text" name="author"><br>
                            Book Genre: <select name="genre" value="">
                                <option></option>
                                <option>Non-Fiction</option>
                                <option>Science-Fiction</option>
                                <option>Horror</option>
                                <option>Mystery</option>
                                <option>Trashy-Romance</option>
                                <option>Classic</option>
                                <option>Other</option>
                            </select><br>
                            ISBN#: <input type="text" name="isbn"><br>
                            Book Description:<br> <textarea rows="2" cols="25" name="description" placeholder="Write description here"></textarea><br>
<!--                            <input type="submit" value="Submit">-->
                            <input name="submit" type="submit"/>
                        </form>
                    </div>
                </main>

                <nav id="sidebar">
                    <div class="widget">
<!--                        <h3>Left heading</h3>-->
<!--                        <ul>-->
<!--                            <li><a href="#">Link 1</a></li>-->
<!--                            <li><a href="#">Link 2</a></li>-->
<!--                            <li><a href="#">Link 3</a></li>-->
<!--                            <li><a href="#">Link 4</a></li>-->
<!--                            <li><a href="#">Link 5</a></li>-->
<!--                        </ul>-->
                        <img src="images/bookworm.jpg" alt="sidebar image" height="200" width="150">
                    </div>
                </nav>

                <div class="clr"></div>
            </div>
        </div>

<?php include "templates/footer.php";?>