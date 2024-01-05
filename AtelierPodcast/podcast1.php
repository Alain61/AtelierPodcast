<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast 1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="" href="index.php">
    <script src="script.js" defer></script>
</head>
<body>
    <?php include('tableau.php');
    $podcastID = 0;
    $currentPodcast = $podcasts[$podcastID];
    ?>
        <h1 id="podcastTitle"><?= $currentPodcast[1] ?></h1>
        <div id="podcastDetails" class="containerPodcast">
            <div class="retour"><a href="index.html">Retour</a></div>
            <p class="podcastDetail" id="date"><?= $currentPodcast[0] ?></p>
            <h2 class="podcastDetail" id="title"><?= $currentPodcast[1] ?></h2>
            <p class="podcastDetail" id="résumé"><?= $currentPodcast[2] ?></p>
            <div class="ecouter"><a class="podcastDetail" id="écouter" href="<?= $currentPodcast[3] ?>">Écouter</a></div>
        </div>
    
</body>
</html>