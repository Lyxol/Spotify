<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Détail</title>
</head>
<body>
<main>
    <h1><?=$artist->getName()?></h1>
    <div class="container-fluid" style="text-align: center">
        <img src="<?= $artist->getPicture()?>" class="img-fluid">
    </div>
    <p>Genres :
        <?php foreach ($artist->getGenders() as $genres){
            echo $genres.",";
        }
        ?>
    </p>
    <a href="<?= $artist->getLink()?>">Voir sur Spotify</a>
    <form action="/album" method="post">
        <input type="text" name="id_Spotify" value="<?= $artist->getIdSpotify() ?>" style="display: none">
        <button>Voir albums</button>
    </form>
</main>
</body>
</html>
