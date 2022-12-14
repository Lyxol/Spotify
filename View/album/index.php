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
        <form action="/track" method="post">
            <input type="text" value='.$album->getPicture().' name="picture" style="display:none">
            <input type="text" value='.$album->getId().' name="id" style="display:none">
            <input type="text" value='.$album->getName().' name="name" style="display:none">
            <button>Voir tracks</button>
        </form>
    </div>
</div>';
}
?>
</div>
</body>
</html>