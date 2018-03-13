<?php 

include_once('lastfm.class.php');
$lstfm = new Lastfm();

$trackTerm = $_GET['trackTerm'];
$artistTerm = $_GET['artistTerm'];
$albumTerm = $_GET['albumTerm'];
$artistinfoTerm = $_GET['artistinfoTerm'];
$ytTitle = $_GET['ytTitle'];
$ytArtist = $_GET['ytArtist'];


if(isset($trackTerm)){
	$searchTracks = $lstfm->searchTracks($trackTerm, 1 , 10);
	$lstfm->showHtmlList($searchTracks, 'tracks');
}

if(isset($artistTerm)){
	$searchArtists = $lstfm->searchArtists($artistTerm, 1 , 10);
	$lstfm->showHtmlList($searchArtists, 'artists');
}
if(isset($albumTerm)){
	$searchAlbums = $lstfm->searchAlbums($albumTerm, 1 , 10);
	$lstfm->showHtmlList($searchAlbums, 'albums');
}
if(isset($ytTitle) && isset($ytArtist)){
	$lstfm->findVideo($ytArtist, $ytTitle);
}

?>