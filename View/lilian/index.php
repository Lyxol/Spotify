<?php
use App\Autoloader;
use App\Controllers\LilianController;
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
    <form method="POST">
        <input type="text" placeholder="Chercher votre artiste" name="searchArtist" class="form-control">
        <button class="btn btn-primary">Rechercher</button>
    </form>
    <?php
    foreach ($listArtists as $artist) {
        echo '        
        <div class="card" style="width: 18rem">
            <img src='.$artist->getPicture().' class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">'.$artist->getName().'</h5>
                <p class="card-text">nombre de follower: <strong>'.$artist->getFollowers().'</strong></p>
                <p class="card-text">Genre: <strong>'.$artist->getGenders()[0].'</strong></p>
                <!--Temporaire, A remplacer-->
                <form action="/lilian/detail" method="post">
                <input type="text" name="id" value='.$artist->getId().' style="display: none">
                    <button type="submit">détail</button>
                </form>
                <form action="/lilian" method="post">
                <button type="submit" value='.$artist->getName().'>favoris</button>
                </form>
            </div>
        </div>';
    }
        ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
