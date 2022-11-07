<?php
use App\Controllers\AlbumController;
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
<h1>Album de <?= $listAlbum[0]->getArtist()[0]?></h1>
<div class="row">
<?php
foreach ($listAlbum as $album){
    echo '
<div class="card" style="width: 18rem;">
    <img src='.$album->getPicture().' class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title">
        '.$album->getName().'
        </h5>
        <p class="card-text">
        Date de release: '.$album->getReleaseDate().'
        </p>
        <p class="card-title">
        Total tracks: '.$album->getTotalTrack().'
        </p>
        <a href='.$album->getUri().'>
            Lien album
        </a>
    </div>
</div>';
}
?>
</div>
</body>
</html>