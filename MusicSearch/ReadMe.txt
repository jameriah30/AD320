*****First, run the createdB.sql script to create a database for the user login*******

****RUN THE APP FROM THE INDEX.PHP PAGE*********

***PROJECT FLOW****

**The app is to be ran from the index.php page, which is an introductory page that provides information about the app, and the api that is used.****

****The User is then prompted to register.php to create a username and password to be written and stored in a mysql database. After completing the registration, the user is then
redirected to login.php to log in with the credentials that they just registered. After the username and password is verified, the user is redirected to welcome.php.****


***From welcome.php, the user can then navigate to search.php(Home) by clicking a button. From there, the user can enter text to search for information on music artists/ bands
of their choice. After submitting the text, the user will be redirected to the results page which will display information on their chosen musical artist/bands from the last fm
api. Below that info is a button to refresh their search which will redirect them back to search.php. Further down the results.php, the user will find 3 more options of searching
for track search, artist search, and album search. The nav bar has three options: HOME  wil redirect the user to search.php to continuing searching. README will redirect the
user to readMe.php where the user can access this current file. LOGOUT will redirect the user to thankyou.php which has a thank you message and has a button that allows the user
to be redirected back to the login page******


****Style****
The styles of this web app are contained in css files, as well as template styles from W3 schools and BootStrap styles were used for buttons and forms. Images for the app
are png files that are saved in the images folder.


****Content and JavaScript****
Content is displayed with html. There is a jQuery plugin for image fill purposes, so that images from search results fill there dic containers and stay centered.
There is a a javascript function that displays results when searching track/artist/album without reloading the page using ajax and implements the ajax.funtions.php
page from the libraries directory. There is also a jQuery click event function to display this document without reloading the page on the readMe.php file.

***PHP an MYSQL******
The app is primarily built in php. We use the configure.php and connect.php files for connecting to the mysql database which has a database named and login and one table
named user to store user's login information. PHP handles the login form validation, password hashing, and the session.

****lastfm.class.php****

The lastfm.class has all functions built in php used to make requests to the last fm and youtube api's using cURL. these functions parse and display data using json