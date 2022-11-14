<?php
use App\Autoloader;
use App\Controllers\TrackController;
Autoloader::register();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1><?= $albumName ?></h1>
<img src="<?= $albumPicture?>" class="img-fluid">
<div class="row">

<?php
foreach ($listTrack as $track){
echo '
<div class="card" style="width: 18rem">
    <div class="card-body">
        <h5 class="card-title">
            '.$track->getName().'    
        </h5>
        <p class="card-text">
        Artiste: '.$track->getArtists()[0].'
        </p>
        <p class="card-text">
        Durée : '.$track->getDuration().' ms
        </p>
        <form action="/favorite/addTrack" method="post">
            <input type="text" name="idSpotify" value="'.$track->getIdSpotify().'" style="display:none">
            <input type="text" name="name" value="'.$track->getName().'" style="display:none">
            <input type="text" name="artist" value="'.implode(',',$track->getArtists()).'" style="display:none">
            <input type="text" name="duration" value="'.$track->getDuration().'" style="display:none">
            <button>Ajouter au favoris</button>
        </form>
    </div>
</div>';
}
?>
</div>
</body>
</html>
