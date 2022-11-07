<?php

namespace App\Controllers;
use App\Entity\Artist;

class LilianController extends Controller
{
    public function index()
    {
        $apiURL = (isset($_POST['searchArtist'])) ? "https://api.spotify.com/v1/search?q=".str_replace(" ","_",$_POST['searchArtist'])."&type=artist" : "https://api.spotify.com/v1/search?q=orelsan&type=artist";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiURL);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $_SESSION['token']));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $json_obj = json_decode($result);
        $listArtists = array();
        foreach ($json_obj->{"artists"}->{'items'} as $item) {
            $img = (!empty($item->images)) ? $item->images[0]->{'url'} : "" ;
            $gender = (!empty($item->genres)) ? $item->genres : ["non défini"];
            $artist = new Artist(
                $item->{'id'},
                $item->{'name'},
                $item->{'followers'}->{'total'},
                $gender,
                $item->{'external_urls'}->{'spotify'},
                $img
            );
            array_push($listArtists,$artist);
        }
        $this->render('lilian/index', compact('listArtists'));
        }
}