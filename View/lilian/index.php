<?php
use App\Autoloader;
use App\Entity\Artist;
Autoloader::register();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Ma liste d'artiste</title>
</head>
<body>
<div class="row">
    <?php
    foreach ($listArtists as $artist) {
        //var_dump($artist);
        echo '        
        <div class="card" style="width: 18rem">
            <img src='.$artist->getPicture().' class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">'.$artist->getName().'</h5>
                <p class="card-text">nombre de follower: <strong>'.$artist->getFollowers().'</strong></p>
                <p class="card-text">Genre: '.$artist->getGenders()[0].'</p>
                <a href='.$artist->getLink().'>Lien vers Spotify</a>
            </div>
        </div>';
    }
        ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
