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

<?php  $artist = $_GET['artist'];?>


<?php include "templates/head.php";?>


    <!-- Header -->
    <header class="w3-container w3-red w3-center" style="padding:128px 16px">
        <h1 class="w3-margin w3-jumbo">Here are your results for: <?php echo $artist; ?> </h1>


    </header>

    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-twothird">
                <?php
                include_once('libraries/lastfm.class.php');

                $lstfm = new Lastfm();
                $artistinfo = $lstfm->searchArtistInfo($artist, array('toptracks', 'bio'), 10);
                ?>
                <h2>Bio</h2>
                <img src="<?php echo $artistinfo->bio->cover_image ?>" /><br /><br />
                <strong><?php echo $artistinfo->bio->name ?></strong><br />
                <p><?php echo $artistinfo->bio->summary ?></p>
                <u>Similar artists</u>
                <?php $lstfm->showHtmlList($artistinfo->bio->similar, 'artists'); ?>
                <u>Tags</u>
                <?php $lstfm->showHtmlList($artistinfo->bio->tags, 'tags'); ?>
                <h2>Toptracks</h2>
                <?php  $lstfm->showHtmlList($artistinfo->toptracks, 'tracks'); ?>

                <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top"><a href="search.php">Search Another Artist</a></button>
            </div>

            <div class="w3-third w3-center">
                <img src="images/music2.png" alt="Music Image" >
            </div>
        </div>
    </div>

    <!-- Second Grid -->
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-third w3-center">

            </div>

            <div class="w3-twothird">
                <h1>Live Update Search</h1>
                <h2>Search Tracks</h2>
                <input type="text" id="trackSearch" placeholder="Trackname...">
                <div id="resultTrack"></div>

                <h2>Search Artists</h2>
                <input type="text" id="artistSearch" placeholder="Artist name...">
                <div id="resultArtist"></div>

                <h2>Search Albums</h2>
                <input type="text" id="albumSearch" placeholder="Albumname...">
                <div id="resultAlbum"></div>

                <p><strong>Note:</strong> Minimum 3 characters to search</p>
            </div>
        </div>
    </div>

<?php include "templates/footer.php";?>