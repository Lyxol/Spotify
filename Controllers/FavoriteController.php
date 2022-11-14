<?php

namespace App\Controllers;

use App\Entity\Artist;
use App\Entity\Track;

class FavoriteController extends Controller
{
    public function index(){
        $track = New Track("","",[],"");
        $trackFavorites = $track->findAll();
        $artist = New Artist("","",0,[],"","");
        $artistFavorites = $artist->findAll();
        $this->render('favoris/index',compact('trackFavorites','artistFavorites'));
    }

    public function addTrack(){
        $listArtistes = array();
        foreach (explode(',',$_POST['artist']) as $artist){
            if(!array_search($artist,$listArtistes)){
                array_push($listArtistes,$artist);
            }
        }
        $track = New Track(
            $_POST['idSpotify'],
            $_POST['name'],
            $listArtistes,
            $_POST['duration']
        );
        if(empty($track->findBy(array( "id_Spotify" => $_POST['idSpotify'])))){
            $track->create();
        }
        $this->index();
    }

    public function deleteTrack(){
        $track = New Track("","",[],"");
        $track->delete($_POST['id']);
        $this->index();
    }

    public function addArtist()
    {
        $artist = New Artist(
            $_POST['id_Spotify'],
            $_POST['name'],
            $_POST['followers'],
            explode(',',$_POST['genders']),
            $_POST['link'],
            $_POST['picture']
        );
        if(empty($artist->findBy(array( "id_Spotify" => $_POST['id_Spotify'])))){
            $artist->create();
        }
        $this->index();
    }

    public function deleteArtist()
    {
        $artist = New Artist("","",0,[],"","");
        $artist->delete($_POST['id']);
        $this->index();
    }

}