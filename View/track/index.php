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
<div class="row">
<h1>Album de <?= $albumName ?></h1>
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
    </div>
</div>';
}
?>
</div>
</body>
</html>
