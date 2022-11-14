<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favoris</title>
</head>
<body>
<h2>Artistes favoris</h2>
<div class="row">
    <?php
    foreach ($artistFavorites as $artist) {
        echo '
        <div class="card" style="width: 18rem">
            <img src='.$artist->picture.' class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">'.$artist->name.'</h5>
                <p class="card-text">nombre de follower: <strong>'.$artist->followers.'</strong></p>
                <p class="card-text">Genre: <strong>'.$artist->genders.'</strong></p>
                <form action="/favorite/deleteArtist" method="post">
                    <input type="text" name="id" value="'.$artist->id.'" style="display: none">
                    <button>Supprimer des favoris</button>
                </form>
            </div>
        </div>';
    }
    ?>
</div>
<h2>Track favoris</h2>
<div class="row">
    <?php
    foreach ($trackFavorites as $track){
        echo '
        <div class="card" style="width: 18rem">
            <div class="card-body">
                <h5 class="card-title">
                    '.$track->name.'    
                </h5>
                <p class="card-text">
                    Artiste(s): '.$track->artists.'
                </p>
                <p class="card-text">
                    Durée : '.$track->duration.' ms
                </p>
                <form action="/favorite/deleteTrack" method="post">
                    <input type="text" name="id" value="'.$track->id.'" style="display: none">
                    <button>Supprimer des favoris</button>
                </form>
            </div>
        </div>';
    }
    ?>
</div>
</body>
</html>

