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
<h2>Artites favoris</h2>
<div class="row">
<?php
foreach ($listFavorites as $artist) {
    echo '
        <div class="card" style="width: 18rem">
            <img src='.$artist->picture.' class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">'.$artist->name.'</h5>
                <p class="card-text">nombre de follower: <strong>'.$artist->followers.'</strong></p>
                <p class="card-text">Genre: <strong>'.$artist->genders.'</strong></p>
                <form action="/lilian/delete" method="post">
                    <input type="text" name="id" value="'.$artist->id.'" style="display: none">
                    <button>Supprimer des favoris</button>
                </form>
            </div>
        </div>';
}
?>
</div>
<form action="/track/show_Favorites" method="post">
    <button>Voir Track favoris</button>
</form>
</body>
</html>
