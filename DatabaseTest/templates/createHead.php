<!DOCTYPE html>
<!-- Template by html.am -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Assignment 3</title>



    <script>
        function ValidateForm()
        {
            var name = document.myForm.bookname;
            var author = document.myForm.author;
            var genre = document.myForm.genre;
            var isbn = document.myForm.isbn;
            var description = document.myForm.description;

            if (name.value == "")
            {
                window.alert("Please enter book name.");
                name.focus();
                return false;
            }

            if (author.value == "")
            {
                window.alert("Please enter author name.");
                author.focus();
                return false;
            }

            if (genre.value == "")
            {
                window.alert("Please enter genre.");
                genre.focus();
                return false;
            }

            if (isbn.value == "")
            {
                window.alert("Please enter isbn.");
                isbn.focus();
                return false;
            }

            if (description.value == "")
            {
                window.alert("Please enter a description of the book.");
                description.focus();
                return false;
            }

            return (true);

        }
    </script>


    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
<div id="page">
    <header id="header">
        <div id="header-inner">
            <div id="logo" >
                <h1><a href="#">AD320<span>Assignment 3:PHP form with http methods</span></a></h1>
                <img src="images/book_logo.png" alt="Logo image" height="150" width="150">
            </div>
            <div id="top-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="create.php">Wish List Form</a></li>
                    <li><a href="list.php">Book List</a></li>
                    <!--                    <li><a href="#">Help</a></li>-->
                </ul>
            </div>
            <div class="clr"></div>
        </div>
    </header>