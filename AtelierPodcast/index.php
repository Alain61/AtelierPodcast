<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcasts</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1 class="titrePrincipal">Podcasts</h1>
    
    <div id="podcastList" class="podcastList">
        <?php include('tableau.php'); ?>
        <?php foreach ($podcasts as $podcast): ?>
            <div class="containerPodcast">
                <?php foreach ($podcasts as $value): ?>
                    <?php if(is_string($value)): ?>
                        <p><?= $value ?></p>
                    <?php elseif (is_array($value)): ?>
                        <?php foreach ($value as $index => $item): ?>
                            <div class="lien">
                                <a id="<?= $index + 1 ?>" href="podcast1.php">Écouter</a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>           
        
</body>
</html>