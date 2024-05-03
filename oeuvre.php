<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php include('header.php'); ?>
<?php include('oeuvres.php'); ?>
<main>
<?php $oeuvreId = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($oeuvreId >= 1 && $oeuvreId <= count($oeuvres)) {
    $oeuvre = $oeuvres[$oeuvreId];
        echo '<article id="detail-oeuvre">';
        echo '<div id="img-oeuvre">';
        echo '<img src="' . $oeuvre["image"] . '" alt="' . $oeuvre["titre"] . '">';
        echo '</div>';
        echo '<div id="contenu-oeuvre">' ; 
        echo '<h1>' . $oeuvre["titre"] . '</h1>';
        echo '<p class="description">' . $oeuvre["artiste"] . '</p>';
        echo '<p class="description-complete">' . $oeuvre['description'] . '</p>';
        echo '</div>';
        echo '</article>';
    }
?>
</main>
<?php include('footer.php'); ?>
</body>
</html>