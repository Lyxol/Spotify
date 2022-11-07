<?php

namespace App\Controllers;
use App\Entity\Artist;

class LilianController extends Controller
{
    public function index()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.spotify.com/v1/search?q=orelsan&type=artist");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $_SESSION['token']));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $json_obj = json_decode($result);
        $listArtists = array();
        foreach ($json_obj->{"artists"}->{'items'} as $item) {
            $img = (!empty($item->images)) ? $item->images[0]->{'url'} : "" ;
            $artist = new Artist(
                $item->{'id'},
                $item->{'name'},
                $item->{'followers'}->{'total'},
                $item->genres,
                $item->{'external_urls'}->{'spotify'},
                $img
            );
            array_push($listArtists,$artist);
        }
        $this->render('lilian/index', compact('listArtists'));
        }
}