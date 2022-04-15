<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Pannes Ametis / Projet ISN</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet d'ISN au lycée Louis Thuillier">
    <meta name="theme-color" content="#707070">
    <link rel="apple-touch-icon" href="/images/icons/icon-192x192.png">
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <script src="https://kit.fontawesome.com/608a42f9ee.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="title"><i class="fas fa-bus-alt title-icon"></i>Pannes Ametis</div>
    <?php 
    date_default_timezone_set('Europe/Paris');
    if (date('D') == "Sat") {
        echo "<br>";
        echo "<br>";
        echo "<div>Nous sommes Samedi, c'est à dire que le réseau de bus est entièrement gratuit. Autrement dit nous vous seront d'aucune utilité aujourd'hui, peut-être demain !</div>";
        echo "<br>";
    }
    else {
        echo '<div class="menu">';
            echo '<button class="button btn-menu" onclick="window.location.href=\'controles.php\'"><i class="far fa-eye btn-icon"></i>Liste des signalements</button>';
            echo '<button class="button btn-menu" onclick="window.location.href=\'map.html\'"><i class="far fa-map btn-icon"></i></i>Carte (bientôt)</button>';
            echo '<button class="button btn-menu" onclick="window.location.href=\'signalement.php\'"><i class="far fa-edit btn-icon"></i>Signaler une panne</button>';
        echo '</div>';
    }
    ?>
    <hr>
    <div class="text">Contactez-nous :</div>
    <div class="contact">
        <button class="button btn-contact" onclick="window.location.href=''"><i class="fas fa-envelope btn-icon"></i></i>Par mail</button>
        <button class="button btn-contact" onclick="window.location.href=''"><i class="fab fa-twitter btn-icon"></i>Twitter</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
    <script type="text/javascript" src="darkmode.js"></script>
</body>

<script>
  if('serviceWorker' in navigator) {
    navigator.serviceWorker.register('sw.js');
  };
  </script>

</html>