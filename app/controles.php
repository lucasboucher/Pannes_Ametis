<?php
$connection=mysqli_connect('db','root','password','data') or die(mysqli_error());
?>

<!DOCTYPE html>
<html>

<head>
    <title>Projet ISN</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/608a42f9ee.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
</head>

<body>
    <div class="title"><a href="index.php"><i class="fas fa-arrow-left left-icon"></i></a>Pannes Ametis</div>
    <div class="subtitle">Liste des contrôles signalés</div>
    <br><br>
    <div class=afficher></div>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
    <script type="text/javascript" src="darkmode.js"></script>
    <script type="text/javascript" src="jquery.notif.js"></script>

</body>

</html>