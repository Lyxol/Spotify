<?php

namespace App\Controllers;

use App\Entity\Album;

class AlbumController extends Controller {
    public function index(){
        $idArtist = $_POST['id'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.spotify.com/v1/artists/".$idArtist."/albums");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $_SESSION['token']));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $json_obj = json_decode($result);
        //var_dump($json_obj->items);
        $listAlbum = array();
        $listArtist = array();
        foreach ($json_obj->items as $albums){
            foreach ($albums->artists as $artist){
                array_push($listArtist,$artist->name);
            }
            $img = (!empty($albums->images)) ? $albums->images[0]->url : "";
            array_push($listAlbum,New Album(
               $albums->id,
               $albums->name,
                $listArtist,
                $albums->release_date,
                $albums->total_tracks,
                $img
            ));
        }
        $this->render('album/index',compact('listAlbum'));
    }

}