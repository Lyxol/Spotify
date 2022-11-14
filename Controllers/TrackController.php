<?php

namespace App\Controllers;

use App\Entity\Track;

class TrackController extends Controller
{
    public function index(){
        $albumName = $_POST['name'];
        $albumPicture = $_POST['picture'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.spotify.com/v1/albums/".$_POST['id']."/tracks");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $_SESSION['token']));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $json_obj = json_decode($result);
        $listTrack = array();
        $listArtist = array();
        foreach ($json_obj->items as $track){
            foreach ($track->artists as $artist){
                array_push($listArtist,$artist->name);
            }
            array_push($listTrack,New Track(
                $track->id,
                $track->name,
                $listArtist,
                $track->duration_ms
            ));
        }
        $this->render('/track/index',compact('listTrack','albumName','albumPicture'));
    }

    public function favoris(){
        $track = New Track(
            $_POST['idSpotify'],
            $_POST['name'],
            explode(',',$_POST['artist']),
            $_POST['duration']
        );
        if(empty($track->findBy(array( "id_Spotify" => $_POST['idSpotify'])))){
            $track->create();
        }
        $this->show_Favorites($track);
    }

    public function delete(){
        $track = New Track("","",[],"");
        $track->delete($_POST['id']);
        $this->show_Favorites($track);
    }

    public function show_Favorites(){
        $track = New Track("","",[],"");
        $listFavorites = $track->findAll();
        $this->render('track/track_Favoris',compact('listFavorites'));
    }
}