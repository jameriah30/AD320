<?php
$var1 = "https://www.googleapis.com/books/v1/volumes?q=";
$var2 = urlencode($_GET['book']);
$str = str_replace(" ", "+", $var2);
$page = $var1.$str;
//header ("location:$page");
$data = file_get_contents($page);
$data = json_decode($data, true);

?>

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
                <h1>Here's your Result!</h1>
                <?php

                echo "Book Title: " . $data['items'][0]['volumeInfo']['title'];
                echo '<br/>';
                echo "Authors: " . @implode(",", $data['items'][0]['volumeInfo']['authors']);
                echo '<br/>';
                echo "Pagecount: " . $data['items'][0]['volumeInfo']['pageCount'];
                echo '<br/>';
                echo "Description: " . $data['items'][0]['volumeInfo']['description'];
                echo '<br/>';
                echo '<br/>';

//                foreach($data as $item){
//                    foreach($item as $key => $value){
//                        print_r($key);
//                        print_r('=>');
//                        print_r($value);
//                        echo "Book Title: " . $item['items'][0]['volumeInfo']['title'];
//                        echo '<br/>';
//                        echo "Authors: " . @implode(",", $item['items'][0]['volumeInfo']['authors']);
//                        echo '<br/>';
//                        echo "Pagecount: " . $item['items'][0]['volumeInfo']['pageCount'];
//                        echo '<br/>';
//                        echo "Description: " . $item['items'][0]['volumeInfo']['description'];
//                        echo '<br/>';
//                        echo '<br/>';
//                    }
//
//                }


                ?>

                <h3>Back to home <a href="index.php">page</a>!!</h3>

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

//$item = $data->items;
//
//echo "Title = " . $item['items'][0]['volumeInfo']['title'];
//echo "Authors = " . @implode(",", $item['items'][0]['volumeInfo']['authors']);
//echo "Pagecount = " . $item['items'][0]['volumeInfo']['pageCount'];