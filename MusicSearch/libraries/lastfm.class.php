<?php
/**
 * LastFM Class
 */
class Lastfm {

    const APIKEY = 'b00823c5da0d09d4f0af0964e43a936b';
    const GOOGLEAPI = 'AIzaSyBqhPc1AmSrZKXQSnMD_px3aSM4VzIxfso';

    const DEFAULT_LIMIT = 20;

    /* DO NOT EDIT BELOW THIS LINE */
    const API_ENDPOINT = 'http://ws.audioscrobbler.com/2.0/?method=';

    private function curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    
    private function firstProperty($obj) {
        foreach ($obj as $prop) {
            return $prop;
        }
        return null;
    }

//    /**
//    * @param string $country Region country based on the ISO format
//    * @param int $limit Count of the result you want to return (default 20)
//    * @return array returns array of trending artists
//    */
//    public function trendingArtists($country, $limit = self::DEFAULT_LIMIT) {
//        $url = self::API_ENDPOINT  . 'geo.getTopArtists&country=' . $country . '&limit=' . $limit . '&api_key=' . self::APIKEY . '&format=json';
//
//        $content = $this->curl($url);
//
//        $content = json_decode($content);
//
//        if (!$content || $content->error) {
//            echo '<p>'.$content->message. "<p/>";
//            return null;
//        }
//
//        $artists = $content->topartists->artist;
//
//        $ret = array();
//        foreach ($artists as $artist) {
//            $o = new stdClass();
//            $o->name = $artist->name;
//            $o->listeners = $artist->listeners;
//
//            if (isset($artist->image) && is_array($artist->image)) {
//                $largeCover = end($artist->image);
//                $o->cover_image = $this->firstProperty($largeCover);
//            }
//            array_push($ret, $o);
//        }
//
//        return $ret;
//    }
//
//    /**
//    * @param string $country Region country based on the ISO format
//    * @param int $limit Count of the result you want to return (default 20)
//    * @return array returns array of trending tracks
//    */
//    public function trendingTracks($country, $limit = self::DEFAULT_LIMIT) {
//        $url = self::API_ENDPOINT  . 'geo.getTopTracks&country=' . $country . '&limit=' . $limit . '&api_key=' . self::APIKEY . '&format=json';
//
//        $content = $this->curl($url);
//        $content = json_decode($content);
//
//
//        if (!$content || $content->error) {
//            echo '<p>'.$content->message."<p/>";
//            return null;
//        }
//
//        $tracks = $content->toptracks->track;
//
//        $ret = array();
//        foreach ($tracks as $track) {
//            $o = new stdClass();
//            $o->artist = $track->artist->name;
//            $o->title = $track->name;
//            $o->listeners = $track->listeners;
//
//            if (isset($track->image) && is_array($track->image)) {
//                $largeCover = end($track->image);
//                $o->cover_image = $this->firstProperty($largeCover);
//            }
//            if (empty($o->cover_image)) {
//                    $o->cover_image = 'images/standard_cover.png';
//            }
//
//            array_push($ret, $o);
//        }
//
//        return $ret;
//    }
    /**
    * @param string $term search term for tracks
    * @param string $page wich page of results to load (1 page is 50 results)
    * @param int $limit Count of the result you want to return (default 20)
    * @return array returns array of search result tracks
    */
    public function searchTracks($term, $page = 1, $limit = self::DEFAULT_LIMIT) {
        $url = self::API_ENDPOINT  . 'track.search&track=' . urlencode($term) . '&limit=' . $limit . '&api_key=' . self::APIKEY . '&format=json&page=' . $page;

        $content = $this->curl($url);
        $content = json_decode($content);

        if (!$content || $content->error) {
            echo '<p>'.$content->message."<p/>";
            return null;            
        }

        $results = $content->results;

        if ($results->{'opensearch:totalResults'} == 0) {
            return array();
        }

        $tracks = $results->trackmatches->track;

        $ret = array();
        foreach ($tracks as $track) {
            $o = new stdClass();
            $o->artist = $track->artist;
            $o->title = $track->name;
            $o->listeners = $track->listeners;

            if (isset($track->image) && is_array($track->image)) {
                $largeCover = end($track->image);
                $o->cover_image = $this->firstProperty($largeCover);
            }    
            if (empty($o->cover_image)) {
                    $o->cover_image = 'images/standard_cover.png';
            }      

            array_push($ret, $o);
        }

        return $ret;
    }
    /**
    * @param string $term search term for artists
    * @param string $page wich page of results to load (1 page is 50 results)
    * @param int $limit Count of the result you want to return (default 20)
    * @return array returns array of search result artists
    */
    public function searchArtists($term, $page = 1, $limit = self::DEFAULT_LIMIT){
        $url = self::API_ENDPOINT  . 'artist.search&artist=' . urlencode($term) . '&limit=' . $limit .'&api_key=' . self::APIKEY . '&format=json&page=' . $page;
        
        $content = $this->curl($url);
        $content = json_decode($content);

        if (!$content || $content->error) {
            echo '<p>'.$content->message."<p/>";
            return null;            
        }

        $results = $content->results;
        
        if ($results->{'opensearch:totalResults'} == 0) {
            return array();
        }
        
        $artists = $content->results->artistmatches->artist;
        
        $ret = array();
        foreach ($artists as $artist) {
            $o = new stdClass();
            $o->name = $artist->name;
            $o->listeners = $artist->listeners;

            if (isset($artist->image) && is_array($artist->image)) {
                $largeCover = end($artist->image);
                $o->cover_image = $this->firstProperty($largeCover);
            }
            if (empty($o->cover_image)) {
                    $o->cover_image = 'images/standard_cover.png';
            }

            array_push($ret, $o);
        }

        return $ret;         
    }
    /**
    * @param string $term search term for albums
    * @param string $page wich page of results to load (1 page is 50 results)
    * @param int $limit Count of the result you want to return (default 20)
    * @return array returns array of search result albums
    */
    public function searchAlbums($term, $page = 1, $limit = self::DEFAULT_LIMIT) {
        $url = self::API_ENDPOINT . 'album.search&album=' . urlencode($term) . '&limit=' . $limit .'&api_key=' . self::APIKEY . '&format=json&page=' . $page;
        
        $content = $this->curl($url);
        $content = json_decode($content); 

        if (!$content || $content->error) {
            echo '<p>'.$content->message."<p/>";
            return null;            
        }

        $results = $content->results;
        
        if ($results->{'opensearch:totalResults'} == 0) {
            return array();
        }
        
        $albums = $content->results->albummatches->album;
        
        $ret = array();
        foreach ($albums as $album) {
            $o = new stdClass();
            $o->name = $album->name;
            $o->artist = $album->artist;

            if (isset($album->image) && is_array($album->image)) {
              $smallCover = end($album->image);
              $o->cover_image = $this->firstProperty($smallCover);
            }
            if (empty($o->cover_image)) {
                    $o->cover_image = 'images/standard_cover.png';
            }

            array_push($ret, $o);
        }

        return $ret;
    } 
    /**
    * @param string $artist artist string name
    * @param array $options array('toptracks', 'bio') result the bio and/or toptracks of artist
    * @param int $limit Count of the result you want to return (default 20)
    * @return array returns array of artist info based on params
    */
    public function searchArtistInfo($artist, $options = array('toptracks'), $limit = self::DEFAULT_LIMIT) {
        
        $ar = new stdClass();
        
        if(in_array('toptracks', $options)){
            
            $url = self::API_ENDPOINT . 'artist.gettoptracks&artist=' . urlencode($artist) . '&limit=' . $limit . '&api_key=' . self::APIKEY . '&format=json';
            $content = $this->curl($url);
            $content = json_decode($content);

            if (!$content || $content->error) {
                echo '<p>'.$content->message."<p/>";
                return null;            
            }
            $tracks = $content->toptracks;

            $ret = array();
            foreach ($tracks->track as $track) {
                $o = new stdClass();
                $o->artist = $track->artist->name;
                $o->title = $track->name;

                if (isset($track->image) && is_array($track->image)) {
                    $largeCover = end($track->image);
                    $o->cover_image = $this->firstProperty($largeCover);
                }

                if (empty($o->cover_image)) {
                    $o->cover_image = 'images/standard_cover.png';
                }

                array_push($ret, $o);
            }

            $ar->toptracks = $ret;
        }
        
   
        if(in_array('bio', $options)){
            $urlbio = self::API_ENDPOINT . 'artist.getinfo&artist=' . urlencode($artist) . '&api_key=' . self::APIKEY . '&format=json';
            
            $contentbio = $this->curl($urlbio);
            $contentbio = json_decode($contentbio);

            if (!$contentbio || $contentbio->error) {
                echo '<p>'.$contentbio->message."<p/>";
                return null;            
            }

            $artistbio = $contentbio->artist;

            $b = new stdClass();
            $b->name = $artistbio->name;
            if (isset($artistbio->image) && is_array($artistbio->image)) {
                    $largeCover = $artistbio->image[3];
                    $b->cover_image = $this->firstProperty($largeCover);
            }
            $b->summary = $artistbio->bio->summary;

            $simArray = array();

            foreach ($artistbio->similar->artist as $simar) {
                $c = new stdClass();
                $c->name = $simar->name;
                if (isset($simar->image) && is_array($simar->image)) {
                    $largeCover = end($simar->image);
                    $c->cover_image = $this->firstProperty($largeCover);
                }

                array_push($simArray, $c);
            }


            $b->similar = $simArray;
            $b->tags = $artistbio->tags->tag;
            $ar->bio = $b;
        }
       
        
        return $ar;
    }
    /**
    * @param string $items (artists/tracks/albums/tags)
    * @param string $type define the type of the param $items
    * @return html returns unorderd html result
    */
    public function showHtmlList($items, $type){
        if($items){
           $html = "";
           $html = "<ul class='lastfmlist $type'>";
            foreach($items as $item){
                switch ($type) {
                    case 'artists':
                    $html .= "<li class='item'><div class='meta'>$item->name</div><img width='130px' src='$item->cover_image'></li>";
                    break;
                    case 'tracks':
                    $html .= "<li class='item'><div class='meta'><h1>$item->title</h1><h2>$item->artist</h2><a onclick='getYTLink(". '"' . $item->title . '"' . ", ". '"' . $item->artist . '"' . ")' class='ytlink'><img class='yt' src='img/youtube.png' /></a></div><img width='130px' src='$item->cover_image'></li>";
                    break;
                    case 'albums':
                    $html .= "<li class='item'><div class='meta'><h1>$item->name</h1><h2>$item->artist</h2></div><img width='130px'src='$item->cover_image'></li>";
                    break;
                    case 'tags':
                    $html .= "<li>$item->name</li>";
                    break;
                    default:
                    $html = "<p>Notice: Unknown type please check your type!</p>";
                    break;
                }
            }

        $html .= "</ul>";
        echo $html;

        }else{
            echo "No results";
        }

    }
    /**
    * @param string artist
    * @param string title
    * @return returns 3 youtube videos from the given artist and title
    */
    public function findVideo($artist, $title) {
        $matcher = $artist . ' ' . $title;
        $matcher = urldecode($matcher);

        $url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . urlencode($matcher) . '&maxResults=1&key=' . self::GOOGLEAPI;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $json = curl_exec($ch);
        curl_close($ch);

     
        $obj = json_decode($json);
        $id = $obj->items[0]->id->videoId;

        $ret = new stdClass();
     
        $ret->id = $id;

     

        echo json_encode($ret);
    }

}

